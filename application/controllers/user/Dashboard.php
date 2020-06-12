<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('mutasi');
        $this->load->helper('url');
        //cek session dan level user
        if ($this->admin->is_role() != "user") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['npsn' => 
        $this->session->userdata('user_npsn')])->row_array();
        // $data['mutasi'] = $this->mutasi->tampil($this->session->userdata('user_id'));
        // $this->load->view("templates/sidebar");
        $this->load->view("user/dashboard/index", $data);
        // $this->load->view("templates/dash_footer");
        // $this->load->view("templates/dash_header", $data);
        
    }

    public function data()
    {
        $mutasi= $this->mutasi->tampil($this->session->userdata('user_id'));
        
        $arr = array();  
        if($mutasi->num_rows() > 0) {
            $arr['total'] = $mutasi->num_rows();
            $arr['totalNotFiltered'] = $mutasi->num_rows(); 
            $index = 0;
            $indexs = 1;
            foreach($mutasi->result() as $siswa) {
                $arr['rows'][$index]['no'] = $indexs++;
                $arr['rows'][$index]['nama_siswa'] = $siswa->nama_siswa;
                if(!empty($siswa->status_jawaban)) {
                    if($siswa->status_jawaban == "Disetujui") {                    
                        $arr['rows'][$index]['status'] = '<button class="pd-setting">Disetujui</button>';
                    } else if($siswa->status_jawaban == "Ditolak") {
                        $arr['rows'][$index]['status'] = '<button class="ds-setting">Ditolak</button>';
                    }
                } else {
                    if($siswa->status == "Diproses" || $siswa->status == NULL ) {
                        $arr['rows'][$index]['status'] = '<button class="ps-setting">Diproses</button>';
                    }
                }
                $arr['rows'][$index]['nisn'] = $siswa->nisn;
                $arr['rows'][$index]['asal_sekolah'] = $siswa->asal_sekolah;
                $arr['rows'][$index]['sekolah_tujuan'] = $siswa->tujuan_sekolah;
                $arr['rows'][$index]['orangtua'] = $siswa->orangtua;
                $arr['rows'][$index]['setting'] = '<a href="'.base_url("user/mutasi/edit/".$siswa->id_mutasi).'"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                <button data-toggle="tooltip" onclick="HapusData('.$siswa->id_mutasi.')" title="Trash" class="pd-setting-ed hapusMutasi"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>';
                $index++;
            }        
        } else {
            $arr['total'] = $mutasi->num_rows();
            $arr['totalNotFiltered'] = $mutasi->num_rows(); 
            $arr['rows'][0]['no'] = '<td colspan="8" style="text-align: center;">Data tidak tersedia</td>';
        }

        header('Content-Type: application/json');
        echo json_encode( $arr );
        
    }

    public function pdf()
    {
        $data['link'] = $this->input->post('link');
        $this->load->view("user/dashboard/pdf", $data);
    }

    public function hapus($id)
    {
        if($this->mutasi->hapus($id) == TRUE) {
            // $this->session->set_flashdata('hapus', true);
            echo 'yes';
        }
        else {
            // $this->session->set_flashdata('hapus', false);
            echo 'no';
        }

        // redirect('user/dashboard');
    }
    public function tambahmutasi()
    {
        $data['user'] = $this->db->get_where('user', ['npsn' => 
        $this->session->userdata('user_npsn')])->row_array();
        // $this->load->view("templates/dash_header", $data);        
        // $this->load->view("templates/sidebar");
        $this->load->view("user/dashboard/tambahmutasi", $data);
        // $this->load->view("templates/dash_footer");

    }

    public function simpan()
    {
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['berkas']['name']);
        for($i=0; $i<$cpt; $i++)
        {           
            $_FILES['berkas']['name']= $files['berkas']['name'][$i];
            $_FILES['berkas']['type']= $files['berkas']['type'][$i];
            $_FILES['berkas']['tmp_name']= $files['berkas']['tmp_name'][$i];
            $_FILES['berkas']['error']= $files['berkas']['error'][$i];
            $_FILES['berkas']['size']= $files['berkas']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload('berkas');
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            "id_mutasi" => $this->input->post('id_mutasi'),
            "id_user" => $this->session->userdata('user_id'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "nis" => $this->input->post('nis'),
            "nisn" => $this->input->post('nisn'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "tgl_lahir" => date('Y-m-d 00:00:00', strtotime($this->input->post('tanggal_lahir'))),
            "asal_sekolah" => $this->input->post('asal_sekolah'),
            "kelas" => $this->input->post('kelas'),
            "orangtua" => $this->input->post('nama_orangtua'),
            "kelurahan" => $this->input->post('kelurahan'),
            "kecamatan" => $this->input->post('kecamatan'),
            "kabupaten" => $this->input->post('kabupaten'),
            "alamat_lengkap" => $this->input->post('alamat_lengkap'),
            "pindah_lanjut" => $this->input->post('pindah_lanjut'),
            "tujuan_sekolah" => $this->input->post('tujuan_sekolah'),
            "tujuan_kabupaten" => $this->input->post('kabupaten_tujuan'),
            "tujuan_provinsi" => $this->input->post('provinsi_tujuan'),
            "alasan" => $this->input->post('alasan'),
            'upload_surat_mutasi' => $dataInfo[0]['file_name'],
            'upload_surat_dapodik' => $dataInfo[1]['file_name'],
            'upload_akte_kk' => $dataInfo[2]['file_name'],
            'status' => "Diproses",
            'tgl_pengajuan' => date("Y-m-d")
         );

        if($this->mutasi->tambahMutasi($data) == TRUE) {
            $this->session->set_flashdata('tambah', true);
        }
        else {
            $this->session->set_flashdata('tambah', false);
        }
        redirect('user/dashboard');  
        
    }

    public function edit_simpan($id)
    {
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['berkas']['name']);
        for($i=0; $i<$cpt; $i++)
        {           
            $_FILES['berkas']['name']= $files['berkas']['name'][$i];
            $_FILES['berkas']['type']= $files['berkas']['type'][$i];
            $_FILES['berkas']['tmp_name']= $files['berkas']['tmp_name'][$i];
            $_FILES['berkas']['error']= $files['berkas']['error'][$i];
            $_FILES['berkas']['size']= $files['berkas']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload('berkas');
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            "id_user" => $this->session->userdata('user_id'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "nis" => $this->input->post('nis'),
            "nisn" => $this->input->post('nisn'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "tgl_lahir" => date('Y-m-d 00:00:00', strtotime($this->input->post('tanggal_lahir'))),
            "asal_sekolah" => $this->input->post('asal_sekolah'),
            "kelas" => $this->input->post('kelas'),
            "orangtua" => $this->input->post('nama_orangtua'),
            "kelurahan" => $this->input->post('kelurahan'),
            "kecamatan" => $this->input->post('kecamatan'),
            "kabupaten" => $this->input->post('kabupaten'),
            "alamat_lengkap" => $this->input->post('alamat_lengkap'),
            "pindah_lanjut" => $this->input->post('pindah_lanjut'),
            "tujuan_sekolah" => $this->input->post('tujuan_sekolah'),
            "tujuan_kabupaten" => $this->input->post('kabupaten_tujuan'),
            "tujuan_provinsi" => $this->input->post('provinsi_tujuan'),
            "alasan" => $this->input->post('alasan')
         );

         if(!empty($dataInfo[0]['file_name']))
         {
            $data['upload_surat_mutasi'] = $dataInfo[0]['file_name'];
            $data['tgl_pengajuan'] = date("Y-m-d");
         } else {
            $data['upload_surat_mutasi'] = $this->input->post('suratmutasi');
            $data['tgl_pengajuan'] = date("Y-m-d");
         }
         if(!empty($dataInfo[1]['file_name']))
         {
            $data['upload_surat_dapodik'] = $dataInfo[1]['file_name'];
            $data['tgl_pengajuan'] = date("Y-m-d");
         } else {
            $data['upload_surat_dapodik'] = $this->input->post('suratdapodik');
            $data['tgl_pengajuan'] = date("Y-m-d");
         }
         if(!empty($dataInfo[3]['file_name']))
         {
            $data['upload_akte_kk'] = $dataInfo[2]['file_name'];
            $data['tgl_pengajuan'] = date("Y-m-d");
         } else {
            $data['upload_akte_kk'] = $this->input->post('aktekk');
            $data['tgl_pengajuan'] = date("Y-m-d");
         }

        if($this->mutasi->update($data, $id) == TRUE) {
            $this->session->set_flashdata('edit', true);
        }
        else {
            $this->session->set_flashdata('edit', false);
        }
        redirect('user/dashboard');  
        
    }

    private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path']          = './assets/lampiran/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';
        $config['overwrite']            = FALSE;

        return $config;
    }

    public function editmutasi($id)
    {
        $data['user'] = $this->db->get_where('user', ['npsn' => 
        $this->session->userdata('user_npsn')])->row_array();
        $data['mutasi'] = $this->mutasi->lihat($id)->row();
        
        // $this->load->view("templates/sidebar");
        $this->load->view("user/dashboard/editmutasi", $data);
        // $this->load->view("templates/dash_footer");
        // $this->load->view("templates/dash_header", $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

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
        //cek session dan level user
        if ($this->admin->is_role() != "user") {
            redirect("login/");
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['npsn' => 
        $this->session->userdata('user_npsn')])->row_array();
        $this->load->view("templates/sidebar");
        $this->load->view("user/index", $data);
        $this->load->view("templates/dash_footer");
        $this->load->view("templates/dash_header", $data);
        
    }

    public function tambahmutasi()
    {
        $data['user'] = $this->db->get_where('user', ['npsn' => 
        $this->session->userdata('user_npsn')])->row_array();
        
        $this->load->view("templates/sidebar");
        $this->load->view("user/tambahmutasi", $data);
        $this->load->view("templates/dash_footer");
        $this->load->view("templates/dash_header", $data);
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
            'status' => "Diproses"
         );

        if($this->mutasi->tambahMutasi($data) == TRUE) {
            $this->session->set_flashdata('tambah', true);
        }
        else {
            $this->session->set_flashdata('tambah', false);
        }
        redirect('user/dashboard');  
        
    }

    private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path']          = './assets/lampiran/';
        $config['allowed_types']        = 'doc|jpg|png|jpeg|docx|pdf|zip';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';
        $config['overwrite']            = FALSE;

        return $config;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('mutasi');
        $this->load->model('profil_model');
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
        $data['mutasi'] = $this->mutasi->tampil($this->session->userdata('user_id'));
        $this->load->view("user/profil/index", $data);
    }

    public function edit()
    {
        $id = $this->session->userdata('user_id');
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
            if($files['berkas']['name'][0]) {
                $this->upload->initialize($this->set_upload_options('pdf'));
            } else {
                $this->upload->initialize($this->set_upload_options('img'));
            }
            $this->upload->do_upload('berkas');
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            "sekolah" => $this->input->post('sekolah'),
            "nama" => $this->input->post('nama'),
            "jabatan" => $this->input->post('jabatan'),
            "no_tlp" => $this->input->post('telp'),
            "alamat" => $this->input->post('alamat')
         );

         if(!empty($dataInfo[0]['file_name']))
         {
            $data['surat_tugas'] =  $dataInfo[0]['file_name'];
         } else {
            $data['surat_tugas'] = $this->input->post('surattugas');
         }

         if(!empty($dataInfo[1]['file_name']))
         {
            $data['foto'] = $dataInfo[1]['file_name'];
         } else {
            $data['foto'] = $this->input->post('foto');
         }

        if($this->profil_model->update($data, $id) == TRUE) {
            $this->session->set_flashdata('edit', true);
        }
        else {
            $this->session->set_flashdata('edit', false);
        }
        redirect('user/dashboard');  
        
    }

    private function set_upload_options($tipe)
    {   
        //upload an image options
        if($tipe == 'pdf') {
            $config = array();
            $config['upload_path']          = './assets/lampiran/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = '0';
            $config['max_width']            = '0';
            $config['max_height']           = '0';
            $config['overwrite']            = FALSE;
        } else {
            $config = array();
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = '0';
            $config['max_width']            = '0';
            $config['max_height']           = '0';
            $config['overwrite']            = FALSE;
        }
        

        return $config;
    }

}
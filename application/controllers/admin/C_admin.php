<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_controller {
public function __construct() {
        parent::__construct();
        $this->load->model('m_data_mhs');
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        
    }
    public function index() {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('administrasi/home', $data);
        
       // $data['mhs'] = $this->m_data_mhs->tampil_data();  
       //   $this->load->view('administrasi/home',$data);
    }
    
//      public function tampil_mhs() {
          
//    }
    
    public function load_mhs() {
        $this->load->view('administrasi/pilih_mhs');
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('karyawan_login');
    }
}
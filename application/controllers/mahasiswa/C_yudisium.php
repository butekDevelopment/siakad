<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_yudisium extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('form_validation');
        $this->load->library('image_lib');
		$this->load->model('m_datamahasiswa');
		$this->load->model('yudisium/Yudisium_model');
		// if($this->session->userdata('status') == ""){
		// 	redirect('login');
		// }
	}

	public function index(){
        $data['NIM'] = $this->session->userdata('codeUser');
		$data['data_yudisium']= $this->Yudisium_model->check_status_upload($data)->row();
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('modul5/mahasiswa/yudisium/daftar_yudisium',$data);
            $this->load->view('mahasiswa/footer', $data);
	}

    
    public function cetak_pendaftaran_yudisium(){
            $data['NIM']=$_SESSION['nama'];
            $data['data_form_yudisium_mahasiswa'] = $this->m_datamahasiswa->select_data_form_yudisium_mahasiswa($data)->row();
            $this->load->view('mahasiswa/yudisium/v_cetak_yudisium', $data); //untuk menampilkan form edit mobil}
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
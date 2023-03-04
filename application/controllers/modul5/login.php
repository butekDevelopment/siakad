<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('modul5/v_login');
	}

	function aksi_login(){
		$NIM = $this->input->post('NIM');
		$password = $this->input->post('password');
		$where = array(
			'NIM' => $NIM,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login_mhs",$where)->num_rows();
		$NIK = $this->input->post('NIM');
		$passwordkaryawan = $this->input->post('password');
		$where = array(
			'NIK' => $NIK,
			'password' => $passwordkaryawan
			);
		$cek2 = $this->m_login->cek_login("login_karyawan",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $NIM,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/modul5/admin"));
		}else if($cek2 > 0){
			$data_session = array(
				'namakaryawan' => $NIK,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/modul5/panelkaryawan"));
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/modul5/login'));
	}
}
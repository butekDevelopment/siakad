<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() {
        parent::__construct();			
		$this->load->library('Commonfunction','','fn');
		$this->load->model('m_login');
	    $this->load->database();
		
    }
		 
	public function index() {
        $session = $this->session->userdata('status');
        if ($session == '') {
			$this->load->view('page_login');
		}
	}
	
	public function logon() {
		$NIM = $this->input->post('NIM');
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$jenis=$this->input->post("jenis");
		//$this->load->model('Mlogin');
		
		//check login
		$this->load->database();
		$this->load->model('Mmain');
		$userdata="";
		$halaman="";
		$nama="";
		$kode="";
	
		$tb=" login_mhs 
			WHERE NIM = ".$this->db->escape($username)."  AND password ='".$password."' ";
			$halaman="mahasiswa/C_judul";
		
		$sel="";
		$query=$this->Mmain->qRead($tb,$sel,"");
		$loginSuccess=0;
		
		
		if($query->num_rows() > 0)
		{		    
			
			$row=$query->row();
			
				
			$this->session->set_userdata(array(
				'name' => $row->id_mhs,
				'codeUser' => $row->NIM,
				'picUser' => '',
				'accUser' => ''
				
			));
			
			
		
			$this->session->sess_expiration = '32140800'; //~ one year
			$this->session->sess_expire_on_close = 'false';

			redirect($halaman, 'refresh');
		}
		else
		{
			//echo $this->input->post("password");
			$tes['errVar']=1;
			$this->load->view('page_login',$tes);
		}
	}
	
	public function logout()
	{
			session_destroy();
			redirect('Login', 'refresh');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_mahasiswa extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Commonfunction','','fn');
				
		// if(!isset($this->session->userdata['name']))		
		// 	redirect("login","refresh");
		if ($this->session->userdata('status')=="") {
            redirect('login');
        }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/footer', $data);
		$this->load->database();
		$this->load->model('Mmain');

	}
	
}

?>
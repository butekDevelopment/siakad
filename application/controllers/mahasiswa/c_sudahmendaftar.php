<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_sudahmendaftar extends CI_Controller {
    function __construct(){
		parent::__construct();	
        $this->load->model('m_psmpro');
	}

	public function index()
	{
        $data['mhs'] = $this->m_psmpro->tampilPsempro();
        $this->load->view('mahasiswa/daftar_sempro/v_sudahmendaftar', $data);
    }
              
}

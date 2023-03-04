<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelKaryawan extends CI_Controller {
	function __construct(){
        parent::__construct();  
		$this->load->model('m_datamahasiswa');
    }
	
	public function index(){
	$this->load->view('modul5/v_paneladmin');
	}
	
}

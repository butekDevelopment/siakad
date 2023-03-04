<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_versempro extends CI_Controller {
    function __construct(){
		parent::__construct();	
        $this->load->model('m_psmpro');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        #$this->load->helper('text');
	}

	public function index()
	{
        $data['mhs'] = $this->m_psmpro->tampil_regsempro();
        $data['revisi'] = $this->m_psmpro->tampil_revsempro();
        $this->load->view('administrasi/daftar_sempro/v_versempro', $data);
    }

    public function konfirmasi($NIM = NULL) {
        $data['detail_sempro'] = $this->m_psmpro->tampil_regsempro($NIM);   
        $this->load->view('administrasi/daftar_sempro/v_konfirsempro', $data);
        $this->load->view('administrasi/footer', $data);
    }

    public function knfr_revsempro($NIM = NULL)
    {
        $data['detail_revisi'] = $this->m_psmpro->tampil_revsempro($NIM);
        $this->load->view('administrasi/daftar_sempro/v_konfirrevisi', $data);
        $this->load->view('administrasi/footer', $data);
    }

    public function sempro_acc($NIM)
    {
        $this->m_psmpro->acc_sempro($NIM);
        redirect('admin/daftar_sempro/C_versempro');
    }

    public function revsempro_acc($NIM)
    {
        $this->m_psmpro->acc_revsempro($NIM);
        redirect('admin/daftar_sempro/C_versempro');
    }
       
}

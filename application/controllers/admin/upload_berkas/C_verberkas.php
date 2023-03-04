<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_verberkas extends CI_Controller {
  function __construct() {
    parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->helper(array('string'));
      $this->load->library('form_validation');
      $this->load->library('image_lib');
      $this->load->model('M_upload_berkas');
      $this->load->database();
      if ($this->session->userdata('status')=="") {
          redirect('karyawan_login');
      }
  }

  public function index() {
    $data['username'] = $this->session->userdata('username');
    $data['judul'] = $this->M_upload_berkas->judul();
    $data['bks'] = $this->M_upload_berkas->tampil_berkas_ta();
    if($data['bks']) {
      $this->load->view('administrasi/upload_berkas/v_verberkas', $data);
    } else {
      $this->load->view('administrasi/upload_berkas/v_berkaskosong', $data);
    }
  }

  public function konfirmasi($NIM = NULL) {
    $data['detail_bks'] = $this->M_upload_berkas->tampil_berkas_ta($NIM);
    $this->load->view('administrasi/upload_berkas/v_konfirmberkas', $data);
  }

  public function berkas_ta_acc($NIM) {
    $this->M_upload_berkas->acc_berkas_ta($NIM);
    redirect('admin/upload_berkas/C_verberkas');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('karyawan_login');
  }
}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_verberkas extends CI_Controller {
  function __construct() {
    parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->helper(array('string'));
      $this->load->library('form_validation');
      $this->load->library('image_lib');
      $this->load->model('M_adminjudulberkas');
    }

  public function index() {
        $data['username'] = $this->session->userdata('username');
        // $data = array('select_option' => $this->M_adminjudulberkas->get_option());
        $data['judul'] = $this->M_adminjudulberkas->judul();
        $this->load->view('administrasi/upload_berkas/v_verberkas', $data);
  }

  public function gas_lur() {
        redirect("admin/C_admin","refresh");
  }

  public function logout() {
      $this->session->sess_destroy();
      redirect('karyawan_login');
  }
}
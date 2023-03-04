<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session/session'); //kode tambahan untuk library session agar bisa memakai flashdata
  }
    public function render_page($content, $data = NULL){
      /*
       * $data['headernya'] , $data['contentnya'] , $data['footernya']     
       * variabel diatas ^ nantinya akan dikirim ke file views/template index.php     
       * */        
      		$data['contentnya'] = $this->load->view($content, $data, TRUE);
      		$this->load->view('template/index', $data);
    }
}
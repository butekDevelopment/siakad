<?php
class upload extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
    }
    
    function index(){
        $this->load->view('form_upload');
    }
}
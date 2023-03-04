<?php
class upload extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
    }
    
    function index(){
        $this->load->view('form_upload');
    }
    
    function multiple_upload(){
         $config['upload_path']   = './uploads/'; 
         //$config['allowed_types'] = 'gif|jpg|png'; 
         //$config['max_size']      = 100; 
         //$config['max_width']     = 1024; 
         //$config['max_height']    = 768;  
         $this->load->library('upload', $config);
         // script upload file pertama
         $this->upload->do_upload('file1');
         $file1 = $this->upload->data();
         echo "<pre>";
         print_r($file1);
         echo "</pre>";
         
         // script uplaod file kedua
         $this->upload->do_upload('file2');
         $file2 = $this->upload->data();
         echo "<pre>";
         print_r($file2);
         echo "</pre>";
    }
}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
  function __construct() {
    parent::__construct();
      $this->load->helper('url');
      $this->load->helper(array('form'));
      $this->load->helper(array('string'));
      $this->load->library('form_validation');
      $this->load->library('image_lib');
    }

  public function index() {
    $this->load->view('mahasiswa/common/header');
    $this->load->view('mahasiswa/nav/top_nav');
    $this->load->view('mahasiswa/utama/upload');
    $this->load->view('mahasiswa/common/footer');
  }

  function multiple_upload(){
        $config['upload_path']   = './upload/'; 
        $config['allowed_types'] = 'pdf'; 
        $config['max_size']      = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_width']     = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999; 
        $config['max_height']    = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;  
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

        // script upload file ketiga
        $this->upload->do_upload('file3');
        $file3 = $this->upload->data();
        echo "<pre>";
        print_r($file3);
        echo "</pre>";
        
        // script uplaod file keempat
        $this->upload->do_upload('file4');
        $file4 = $this->upload->data();
        echo "<pre>";
        print_r($file4);
        echo "</pre>";

        // script upload file kelima
        $this->upload->do_upload('file5');
        $file5 = $this->upload->data();
        echo "<pre>";
        print_r($file5);
        echo "</pre>";
        
        // script uplaod file keenam
        $this->upload->do_upload('file6');
        $file6 = $this->upload->data();
        echo "<pre>";
        print_r($file6);
        echo "</pre>";

        // script upload file ketujuh
        $this->upload->do_upload('file7');
        $file7 = $this->upload->data();
        echo "<pre>";
        print_r($file7);
        echo "</pre>";
        
        // script uplaod file kedelapan
        $this->upload->do_upload('file8');
        $file8 = $this->upload->data();
        echo "<pre>";
        print_r($file8);
        echo "</pre>";

        // script upload file kesembilan
        $this->upload->do_upload('file9');
        $file9 = $this->upload->data();
        echo "<pre>";
        print_r($file9);
        echo "</pre>";
        
        // script uplaod file kesepuluh
        $this->upload->do_upload('file10');
        $file10 = $this->upload->data();
        echo "<pre>";
        print_r($file10);
        echo "</pre>";

        // script upload file kesebelas
        $this->upload->do_upload('file11');
        $file11 = $this->upload->data();
        echo "<pre>";
        print_r($file11);
        echo "</pre>";
        
        // script uplaod file keduabelas
        $this->upload->do_upload('file12');
        $file12 = $this->upload->data();
        echo "<pre>";
        print_r($file12);
        echo "</pre>";

        // script upload file ketigabelas
        $this->upload->do_upload('file13');
        $file13 = $this->upload->data();
        echo "<pre>";
        print_r($file13);
        echo "</pre>";
        
        // script uplaod file keempatbelas
        $this->upload->do_upload('file14');
        $file14 = $this->upload->data();
        echo "<pre>";
        print_r($file14);
        echo "</pre>";

        // script upload file kelimabelas
        $this->upload->do_upload('file15');
        $file15 = $this->upload->data();
        echo "<pre>";
        print_r($file15);
        echo "</pre>";
        
        // script uplaod file keenambelas
        $this->upload->do_upload('file16');
        $file16 = $this->upload->data();
        echo "<pre>";
        print_r($file16);
        echo "</pre>";

        // script upload file ketujuhbelas
        $this->upload->do_upload('file17');
        $file17 = $this->upload->data();
        echo "<pre>";
        print_r($file17);
        echo "</pre>";
        
        // script uplaod file kedelapanbelas
        $this->upload->do_upload('file18');
        $file18 = $this->upload->data();
        echo "<pre>";
        print_r($file18);
        echo "</pre>";

        // script upload file kesembilanbelas
        $this->upload->do_upload('file19');
        $file19 = $this->upload->data();
        echo "<pre>";
        print_r($file19);
        echo "</pre>";
        
        // script uplaod file keduapuluh
        $this->upload->do_upload('file20');
        $file20 = $this->upload->data();
        echo "<pre>";
        print_r($file20);
        echo "</pre>";
  }
}
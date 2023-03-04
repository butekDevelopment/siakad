<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_datamahasiswa');
	}

	function index(){
		$this->load->view('modul5/v_beranda');
	}
	
	function getyudisium(){
		$NIM = $this->session->userdata("codeUser");
		$where = array(
			'mahasiswa_NIM' => $NIM
			);
		$cek = $this->m_datamahasiswa->cek_datastudytracer("yudisium",$where)->num_rows();
		if($cek > 0){
			$this->load->view('modul5/v_terdaftar_yudisium');
		}else{
			$data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
			$this->load->view('modul5/v_yudisium1',$data);
		}
	}
	
	function getstudytracer(){
		//$this->load->view('v_studytracer');
		$NIM = $this->session->userdata("codeUser");
		$where = array(
			'mahasiswa_NIM' => $NIM
			);
		$cek = $this->m_datamahasiswa->cek_datastudytracer("tracer_study",$where)->num_rows();
		$where1 = array(
			'NIM' => $NIM,
			'status_mahasiswa' => "Alumni"
			);
		$cek1 = $this->m_datamahasiswa->cek_datastudytracer("mahasiswa",$where1)->num_rows();
		
		if($cek1 > 0){
			if($cek > 0){
				$this->load->view('modul5/v_terdaftar');
			}else{
				$data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
				$this->load->view('modul5/v_studytracer',$data);
				//redirect(base_url("index.php/admin"));
			}
		}else{
				$this->load->view('modul5/v_aksesstudytracer');
		}
	}
	
	function cetak_pendaftaran_yudisium(){
            $data['NIM']=$_SESSION['codeUser'];
            $data['data_form_yudisium_mahasiswa'] = $this->m_datamahasiswa->select_data_form_yudisium_mahasiswa($data)->row();
            $this->load->view('modul5/v_cetak_yudisium', $data); //untuk menampilkan form edit mobil}
    }
        
}
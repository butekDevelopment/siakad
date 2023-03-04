<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_datamahasiswa');
		if($this->session->userdata('status') == ""){
			redirect('login');
		}
	}

	function index(){
        $data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/v_beranda', $data);
	}
	
	function getyudisium(){
		$NIM = $this->session->userdata("nama");
		$where = array(
			'mahasiswa_NIM' => $NIM
			);
		$cek = $this->m_datamahasiswa->cek_datastudytracer("yudisium",$where)->num_rows();
		if($cek > 0){
			$this->load->view('mahasiswa/v_terdaftar_yudisium');
		}else{
			$data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
			$this->load->view('mahasiswa/v_yudisium1',$data);
		}
	}
	
	function getstudytracer(){
		//$this->load->view('v_studytracer');
		$NIM = $this->session->userdata("nama");
		$where = array(
			'mahasiswa_NIM' => $NIM
			);
		$cek = $this->m_datamahasiswa->cek_datastudytracer("tracer_study",$where)->num_rows();
		if($cek > 0){
			$this->load->view('mahasiswa/v_terdaftar');
		}else{
			$data['mahasiswa'] = $this->m_datamahasiswa->view_by($NIM);
			$this->load->view('mahasiswa/v_studytracer',$data);
			//redirect(base_url("index.php/admin"));
		}
	}
	
	public function cetak_pendaftaran_yudisium(){
            $data['NIM']=$_SESSION['nama'];
            $data['data_form_yudisium_mahasiswa'] = $this->m_datamahasiswa->select_data_form_yudisium_mahasiswa($data)->row();
            $this->load->view('mahasiswa/v_cetak_yudisium', $data); //untuk menampilkan form edit mobil}
        }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
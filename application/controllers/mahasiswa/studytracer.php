<?php 

class Studytracer extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_modelcrud');
        $this->load->library('form_validation');
	}

	function index(){
		//$this->data['hasil']= $this->m_modelcrud->getUser('tracer study');
		//$this->load->view('v_studytracer',$this->data);
		$this->load->view('modul5/v_beranda');
	}
	
	public function utama()
	{
	$this->load->view('baru/index');
	}
	
	public function insert()
	{
	$kode = $this->m_modelcrud->getkode();
	$nim = $this->input->post('mahasiswa_NIM');
	$jkel = $this->input->post('jk');
	$angkatan = $this->input->post('angkatan');
	$alamat = $this->input->post('alamat');
	$notelp = $this->input->post('notelp');
	$status_alumni = $this->input->post('status_alumni');
	$masa_tunggu = $this->input->post('masa_tunggu');
	$tingkat_studi = $this->input->post('tingkat_studi');
	$jenis_usaha = $this->input->post('j_usaha');
	$jabatan = $this->input->post('jabatan');
	$instansi = $this->input->post('instansi');
	$gaji = $this->input->post('gaji');
	$pesan = $this->input->post('message');
	$kesesuaian_bidang = $this->input->post('bk');
	
	$data = array(
	'id_Tracer'=>$kode,
	'Time_Stamp'=>date('Y-m-d H:i:s'),
	'Jenis_Kelamin'=>$jkel,
	'Angkatan'=>$angkatan,
	'Alamat_Sekarang'=>$alamat,
	'No_Telepon'=>$notelp,
	'Status_Alumni'=>$status_alumni,
	'Masa_Tunggu'=>$masa_tunggu,
	'TIngkat_Studi'=>$tingkat_studi,
	'Jenis_Usaha'=>$jenis_usaha,
	'Jabatan'=>$jabatan,
	'Perusahaan'=>$instansi,
	'Gaji'=>$gaji,
	'Saran_dan_Masukan'=>$pesan,
	'Kesesuaian_Bidang'=>$kesesuaian_bidang,
	'mahasiswa_NIM'=>$nim
	);
	$this->m_modelcrud->tambahData('tracer_study',$data);
	redirect('modul5/studytracer/index');
	}
	
	
	
	
}
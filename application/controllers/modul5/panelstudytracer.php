<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panelstudytracer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_panelstudytracer','panelstudytracer');
		$this->load->model('m_datamahasiswa');
	}

	function get_data_user()
	{
		$list = $this->panelstudytracer->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row[] = $field->id_Tracer;
			$row[] = $field->Time_Stamp;
			$row[] = $field->mahasiswa_NIM;
			$row[] = $field->Jenis_Kelamin;
			$row[] = $field->Angkatan;
			$row[] = $field->Alamat_Sekarang;
			$row[] = $field->No_Telepon;
			$row[] = $field->Status_Alumni;
			$row[] = $field->Masa_Tunggu;
			$row[] = $field->Tingkat_Studi;
			$row[] = $field->Jenis_Usaha;
			$row[] = $field->Jabatan;
			$row[] = $field->Perusahaan;
			$row[] = $field->Gaji;
			$row[] = $field->Kesesuaian_Bidang;
			$row[] = $field->Saran_dan_Masukan;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->panelstudytracer->count_all(),
			"recordsFiltered" => $this->panelstudytracer->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}
	
}

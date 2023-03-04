<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_tmahasiswa','t_mahasiswa');
		$this->load->model('m_datamahasiswa');
	}

	function index(){
		$this->load->view('t_mahasiswa');
	}

	function get_data_mhs()
	{
		$list = $this->t_mahasiswa->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row[] = $field->NIM;
			$row[] = $field->id_mhs;
			$row[] = $field->nama_mahasiswa;
			$row[] = $field->program_studi;
			$row[] = $field->program_studi;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->t_mahasiswa->count_all(),
			"recordsFiltered" => $this->t_mahasiswa->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}
}

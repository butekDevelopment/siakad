<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sempro extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		//$this->load->model('m_upload');
		$this->load->model('M_mahasiswa_sempro');
	}

	function index(){
		$this->load->database();
		$this->load->model("Mmain");
		$cekseminar=$this->Mmain->qRead("mahasiswa WHERE NIM='".$this->session->codeUser."' AND status=1 ","status","");
		if($cekseminar->num_rows() >0)
		{

			$cekupload=$this->Mmain->qRead("status_sempro WHERE mahasiswa_NIM='".$this->session->codeUser."' ","","");
			if($cekupload->num_rows()==0)
			{
				$nim =  $this->session->userdata("codeUser");
				$data['username'] = $this->session->userdata('username');
				$data['data_judul'] = $this->M_mahasiswa_sempro->ambil_jadwal();
				$this->load->view('mahasiswa/header', $data);
				$this->load->view('mahasiswa/sidebar', $data);
				$this->load->view('mahasiswa/daftar_sempro/v_upload_file');
				$this->load->view('mahasiswa/footer', $data);
			}
			else
			{
				$nim =  $this->session->userdata("codeUser");
				$data['username'] = $this->session->userdata('username');
				$data['data_jadwal'] = $this->M_mahasiswa_sempro->show_jadwalsempro();
				$ss = $this->M_mahasiswa_sempro->cek_status();
				$nilai = $ss->status;
				if ($nilai == 2)
				{
					$rv = $this->M_mahasiswa_sempro->cek_smprorev();
					$stat = $rv->status;
					if ($stat == 0)
					{
						$this->load->view('mahasiswa/header', $data);
						$this->load->view('mahasiswa/sidebar', $data);
						$this->load->view('mahasiswa/daftar_sempro/v_jadwalsempro', $data);
						$this->load->view('mahasiswa/footer', $data);
					}else{
						$this->load->view('mahasiswa/header', $data);
						$this->load->view('mahasiswa/sidebar', $data);
						$this->load->view('mahasiswa/daftar_sempro/v_sudahrevisi', $data);
						$this->load->view('mahasiswa/footer', $data);
					}
				}
				else
				{
					$this->load->view('mahasiswa/header', $data);
					$this->load->view('mahasiswa/sidebar', $data);
					$this->load->view('mahasiswa/daftar_sempro/v_sudahmendaftar', $data);
					$this->load->view('mahasiswa/footer', $data);
				}
			}

		}
		else
		{
        $nim =  $this->session->userdata("nama");
        $data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
		$this->load->view("mahasiswa/daftar_sempro/v_gagal");
		$this->load->view('mahasiswa/footer', $data);
		}





	}

	//fungsi upload untuk berkas-berkas persyaratan seminar proposal
	function multiple_upload()
	{

	//$id_pkl=$this->m_upload->getkode_pkl();
	$config['upload_path'] 		= './upload/';
	$config['allowed_types'] 	= 'pdf';
	$config['max_size'] 		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$config['max_width']		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$config['max_height']		= 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
	$this->load->library('upload',$config);
	$dok="";
	for($i=1;$i<=11;$i++)
	{

		$config['file_name'] = $this->session->userdata('codeUser')."_".$i;
		$this->upload->initialize($config);
		$this->upload->do_upload("file_".$i);
		$file_1 = $this->upload->data();
        //echo "<pre>";
        //print_r($file_1);
        //echo "</pre>";
		$dok[]=$file_1['file_name'];
	}

	$data = array(
			'iddokumen_kelengkapan_senpro' => 0,
			'proposal_TA' => $dok[0],
			'kartu_kendali' => $dok[1],
			'kk_senpro_lalu' => $dok[2],
			'makalah' => $dok[3],
			'lembar_berita_acara' => $dok[4],
			'lembar_pengusulan' => $dok[5],
			'lembar_revisi' => $dok[6],
			'lembar_hasil_senpro' => $dok[7],
			'lembar_daftar_hadir' => $dok[8],
			'lembar_pengesahan' => $dok[9],
			'kartu_kontrak_DP' => $dok[10]
			);
			$key = $this->M_mahasiswa_sempro->simpandokumen_kelengkapan_senpro($data);

			$datastatus = array(
			'idStatus_Sempro' => 0,
			'mahasiswa_NIM' => $this->session->userdata('codeUser'),
			'dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro' => $key,
			'status' => 0,
			'status_revisi' => 0
			);

			$this->M_mahasiswa_sempro->simpan($datastatus);
			//echo implode("<br>",$data);
			$this->load->view('mahasiswa/header', $data);
			$this->load->view('mahasiswa/sidebar', $data);
			$this->load->view('mahasiswa/daftar_sempro/v_sudahmendaftar', $data);
			$this->load->view('mahasiswa/footer', $data);

	}

	public function sempro_revisi()
	{
		$nim =  $this->session->userdata("codeUser");
		$data['username'] = $this->session->userdata('username');
		$this->load->view('mahasiswa/header', $data);
		$this->load->view('mahasiswa/sidebar', $data);
		$this->load->view('mahasiswa/daftar_sempro/v_upload_revisi', $data);
		$this->load->view('mahasiswa/footer', $data);
	}


	public function edit(){
		$data = array();
		if($this->input->post('submit')){
			$upload = $this->m_upload->upload();
			if($upload['result'] == "success"){
				$this->m_upload->editberkas($upload);
				redirect('admin');
			}else{
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('administrasi/daftar_sempro/v_sudahmendaftar', $data);
	}

	 public function uploadrevisi() {
    	$nim =  $this->session->userdata("codeUser");
        $config['upload_path']      = './upload/revisi_sempro/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 99999999999999999999999999999999999999;
        $config['max_width']        = 99999999999999999999999999999999999999;
        $config['max_height']       = 99999999999999999999999999999999999999;
        $this->load->library('upload',$config);
        $this->load->library('upload',$config);
		$dok="";
		for($i=1;$i<=1;$i++) {
			if (!$this->upload->do_upload('file_1')) {
	        	echo $this->upload->display_errors();
	        }
	        else {
		       	$config['file_name'] = $this->session->userdata('codeUser')."_".$i;
		        $this->upload->initialize($config);
				$this->upload->do_upload("file_".$i);
				$file_1 = $this->upload->data();
				//$dok[]=$file_1['file_name'];
				$data = $file_1['file_name'];
				$this->M_mahasiswa_sempro->simpan_revisi($data);
				$this->load->view('mahasiswa/header', $data);
				$this->load->view('mahasiswa/sidebar', $data);
				$this->load->view('mahasiswa/daftar_sempro/v_sudahrevisi');
				$this->load->view('mahasiswa/footer', $data);
	        }
		}

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
		}
}
<?php 

class M_upload extends CI_Model{	

	var $table = "dokumen_kelengkapan_senpro";
	
	function __construct(){
		parent::__construct();
	}
	
	public function upload(){
		$config['upload_path'] = base_url()."assets/uploads";
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		$retval="";
		if($this->upload->do_upload('proposal_TA')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return= $return;
		}else if($this->upload->do_upload('kartu_kendali')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('kk_senpro_lalu')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('makalah')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('lembar_berita_acara')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('lembar_pengusulan')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('lembar_revisi')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('lembar_hasil_sempro')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('lembar_daftar_hadir')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return =$return;
		}else if($this->upload->do_upload('kartu_kontakDP')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$return = $return;
		}
		
		return $return;
	}
	
	// Fungsi untuk menyimpan data ke database
	
	public function savepkl($upload){
		$id_pkl=$this->m_upload->getkode_pkl();
		$data_session = array(
				'iddokumen_kelengkapan_senpro' => $iddokumen_kelengkapan_senpro	
				);
		$this->session->set_userdata($data_session);
		$data = array(
			'iddokumen_kelengkapan_senpro	' => $kode,
			'proposal_TA' => $this->input->post('proposal_TA'),
			'kartu_kendali' => $this->input->post('kartu_kendali'),
			'kk_senpro_lalu' => $this->input->post('kk_senpro_lalu'),
			'makalah' => $this->input->post('makalah'),
			'lembar_berita_acara' => $this->input->post('lembar_berita_acara'),
			'lembar_pengusulan' => $this->input->post('lembar_pengusulan'),
			'lembar_revisi' => $this->input->post('lembar_revisi'),
			'lembar_hasil_senpro' => $this->input->post('lembar_hasil_senpro'),
			'lembar_daftar_hadir' => $this->input->post('lembar_daftar_hadir'),
			'lembar_pengesahan' => $this->input->post('lembar_pengesahan'),
			'kartu_kontrakDP' => $this->input->post('kartu_kontrakDP')
			
		);
		$this->db->insert('dokumen_kelengkapan_senpro', $data);
	}
	
	/*public function editpkl($upload){
		$ID= $this->session->userdata("id_pkl");
		$data = array(
			'bukti_laporanpkl' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_pkl',$ID);
		$this->db->update('berkas_pkl',$data);
	}
	
	public function saveta($upload){
		$id_ta=$this->m_upload->getkode_ta();
		$data_session = array(
				'id_ta' => $id_ta
				);
		$this->session->set_userdata($data_session);
		$data = array(
			'idberkas_ta' => $id_ta,
			'judul_ta' => $this->input->post('judul_ta'),
			'nilai_ta' => $this->input->post('nilai_ta'),
			'berita_acarata' => $upload['file']['file_name']
		);
		$this->db->insert('dokumen_kelengkapan_senpro', $data);
	}
	
	public function editta($upload){
		$ID= $this->session->userdata("id_ta");
		$data = array(
			'bukti_laporanta' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_ta',$ID);
		$this->db->update('berkas_ta',$data);
	}
	
	public function savekhs($upload){
		$id_bks=$this->m_upload->getkode_berkaskhs();
		$data_session = array(
				'id_bks' => $id_bks
				);
		$this->session->set_userdata($data_session);
		$data = array(
			'idberkas_khs' => $id_bks,
			'khs_semester1' => $upload['file']['file_name']
		);
		$this->db->insert('berkas_khs', $data);
		return $id_bks;
	}
	
	public function editkhs($upload){
		$ID= $this->session->userdata("id_bks");
		$data = array(
			'khs_semester2' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_khs',$ID);
		$this->db->update('berkas_khs',$data);
	}
	
	public function editkhs1($upload){
		$ID= $this->session->userdata("id_bks");
		$data = array(
			'khs_semester3' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_khs',$ID);
		$this->db->update('berkas_khs',$data);
	}
	
	public function editkhs2($upload){
		$ID= $this->session->userdata("id_bks");
		$data = array(
			'khs_semester4' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_khs',$ID);
		$this->db->update('berkas_khs',$data);
	}
	
	public function editkhs3($upload){
		$ID= $this->session->userdata("id_bks");
		$data = array(
			'khs_semester5' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_khs',$ID);
		$this->db->update('berkas_khs',$data);
	}
	
	public function editkhs4($upload){
		$ID= $this->session->userdata("id_bks");
		$data = array(
			'khs_semester6' => $upload['file']['file_name']
	);
		$this->db->where('idberkas_khs',$ID);
		$this->db->update('berkas_khs',$data);
	}
	
	public function save($upload){
			$ID=$this->m_upload->getkodeyudisium();
		$data = array(
			//'deskripsi'=>$this->input->post('input_deskripsi'),
			//'nama_file' => $upload['file']['file_name'],
			//'ukuran_file' => $upload['file']['file_size'],
			'idyudisium' => $ID,
			'angkatan' => $this->input->post('angkatan'),
			'srt_bebastanggungan' => $upload['file']['file_name'],
			'riwayat_ipmhs_idriwayat_ipmhs' => $this->session->userdata("id_berkasip"),
			'berkas_khs_idberkas_khs' => $this->session->userdata("id_bks"),
			'berkas_pkl_idberkas_pkl' => $this->session->userdata("id_pkl"),
			'berkas_TA_idberkas_TA' => $this->session->userdata("id_ta"),
			'mahasiswa_NIM' => $this->session->userdata("nama")
		);
		$this->db->insert('yudisium', $data);
	}
	
	public function editberkas($upload){
		$data = array(
			'konsep_daftarnilai' => $upload['file']['file_name']
	);
		$this->db->where('mahasiswa_NIM',$this->session->userdata("nama"));
		$this->db->update('yudisium',$data);
	}
	
	function getkode() {
	$this->db->select('RIGHT(tracer_study.id_Tracer,3) as kode', FALSE);
	$this->db->order_by('id_Tracer','DESC');
	$this->db->limit(1);
	$query = $this->db->get('tracer_study');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "STD-".$kodemax;
	return $kodejadi;
	}
	
	function getkodeyudisium() {
	$this->db->select('RIGHT(yudisium.idyudisium,3) as kode', FALSE);
	$this->db->order_by('idyudisium','DESC');
	$this->db->limit(1);
	$query = $this->db->get('yudisium');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "STD-".$kodemax;
	return $kodejadi;
	}
	
	function getkode_berkaskhs() {
	$this->db->select('RIGHT(berkas_khs.idberkas_khs,3) as kode', FALSE);
	$this->db->order_by('idberkas_khs','DESC');
	$this->db->limit(1);
	$query = $this->db->get('berkas_khs');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "BKS-".$kodemax;
	return $kodejadi;
	}
	
	function getkode_pkl() {
	$this->db->select('RIGHT(berkas_pkl.idberkas_pkl,3) as kode', FALSE);
	$this->db->order_by('idberkas_pkl','DESC');
	$this->db->limit(1);
	$query = $this->db->get('berkas_pkl');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "PKL-".$kodemax;
	return $kodejadi;
	}
	
	function getkode_ta() {
	$this->db->select('RIGHT(berkas_ta.idberkas_ta,3) as kode', FALSE);
	$this->db->order_by('idberkas_ta','DESC');
	$this->db->limit(1);
	$query = $this->db->get('berkas_ta');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "BTA-".$kodemax;
	return $kodejadi;
	}*/
}
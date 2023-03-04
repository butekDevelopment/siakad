<?php 

class M_modelcrud extends CI_Model{	

	var $table = "tracer_study";
	public function getUser($table_name)
	{
	$get_user=$this->db->get($table_name);
	return $get_user->result_array();
	}
	
	public function tambahData($table_name,$data)
	{
	$this->db->insert($table_name,$data);
	}
	
	
	public function simpandokumen_kelengkapan_senpro($data)
	{
	$this->db->insert ("dokumen_kelengkapan_senpro",$data);
	}
	
	public function simpan($data)
	{
	$this->db->insert ("status_sempro",$data);
	}

	public function simpan_revisi($data)
	{
		$this->db->set('berkas_revisi', $data);
        $this->db->where('mahasiswa_NIM', $this->session->userdata("codeUser"));
        $this->db->update('status_sempro');
	}

	public function cek_status()
	{
		$this->db->select('mahasiswa.NIM,status_sempro.status as status');
		$this->db->from('mahasiswa');
		$this->db->join('status_sempro','status_sempro.mahasiswa_NIM = mahasiswa.NIM');
		$this->db->where('mahasiswa.NIM', $this->session->userdata("codeUser"));
		return $this->db->get()->row();

	}

	function cek_smprorev()
	{
		$this->db->select('mahasiswa.NIM,status_sempro.status_revisi as status');
		$this->db->from('mahasiswa');
		$this->db->join('status_sempro','status_sempro.mahasiswa_NIM = mahasiswa.NIM');
		$this->db->where('mahasiswa.NIM', $this->session->userdata("codeUser"));
		return $this->db->get()->row();
	}

	public function show_jadwalsempro()
	{
		$this->db->select('mahasiswa.NIM,status_sempro.*,jadwal.*');
        $this->db->from('mahasiswa');
        $this->db->join('status_sempro','status_sempro.mahasiswa_NIM = mahasiswa.NIM');
        $this->db->join('jadwal','jadwal.idStatus_Sempro = status_sempro.idStatus_Sempro');
        $this->db->where('mahasiswa.NIM', $this->session->userdata("codeUser"));
        return $this->db->get()->row();
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
	
	function getkode_ipmhs() {
	$this->db->select('RIGHT(riwayat_ipmhs.idriwayat_ipmhs,3) as kode', FALSE);
	$this->db->order_by('idriwayat_ipmhs','DESC');
	$this->db->limit(1);
	$query = $this->db->get('riwayat_ipmhs');
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = Intval($data->kode) + 1;
	}
	else{
	$kode=1;
	}
	
	$kodemax = str_pad($kode,3, "0", STR_PAD_LEFT);
	$kodejadi = "KHS-".$kodemax;
	return $kodejadi;
	}
	
}
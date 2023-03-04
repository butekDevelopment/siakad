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
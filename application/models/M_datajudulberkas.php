<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_datajudulberkas extends CI_Model{
	public function view_by($nim){	
		$this->db->select("*");
		$this->db->from("mahasiswa");
		$this->db->where("NIM",$nim);
		$query = $this->db->get();
		return $query;
		//$this->db->where('nama_mahasiswa',$nim);
		//return $this->db->get('mahasiswa');
	}		
	
	function cek_datajudulberkas($table,$where){		
		return $this->db->get_where($table,$where);
	}
}
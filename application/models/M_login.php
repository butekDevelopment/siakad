<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	public function get_by_name()
	{
	$this->db->select('nama_mahasiswa');
	$this->db->from('mahasiswa');
	$this->db->where('NIM', e31150089);
	return $this->db->get('nmmhss')->result();
	}
	
}
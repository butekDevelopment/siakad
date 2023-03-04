<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_adminjudulberkas extends CI_Model{
    function judul(){
    	$query = $this->db->query('SELECT judul_TA FROM mahasiswa');
    	return $query->result();
    }
}
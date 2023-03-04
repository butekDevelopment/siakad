<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan_login extends CI_Model {
    
    public function login($data) {
        $query = $this->db->get_where('login_karyawan', $data);
            return $query;
    }
}
 // berikut adalah sebuah model dari controller karyawan login
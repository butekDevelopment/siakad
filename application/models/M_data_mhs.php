<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data_mhs extends CI_Model {
    
    public function tampil_data()
    {
        $this->db->select('mahasiswa.NIM','mahasiswa.nama_mahasiswa','mahasiswa.judul_TA','Status_sidang.status');
        $this->db->from('mahasiswa');
        $this->db->join('Status_sidang','mahasiswa.NIM = Status_sidang.mahasiswa_NIM');
        $query = $this->db->get();
        return $query->result();
    }
}
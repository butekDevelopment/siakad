<?php
    class m_psmpro extends CI_Model {

    function tampilPsempro()
    {
        $query=$this->db->query("
							SELECT 
								a.NIM, 
								a.nama_mahasiswa, 
								a.judul_TA
							FROM
								mahasiswa a LEFT OUTER JOIN status_sempro b ON a.NIM = b.mahasiswa_NIM 
							
							");
		//$this->db->select('mahasiswa.NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, Status_Sempro.status');
        //$this->db->from('mahasiswa');
        //$this->db->join('Status_Sempro', 'mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
        //$this->db->where('Status_Sempro.status', 0);
        //$query = $this->db->get();
        return $query->result();
    }

    public function tampil_regsempro($NIM = FALSE)
    {
        
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sempro.status');
            $this->db->from('mahasiswa');
            $this->db->join('status_sempro', 'mahasiswa.NIM = status_sempro.mahasiswa_NIM');
            $this->db->where('status_sempro.status', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, dp1.nm_dosen, status_sempro.status, dokumen_kelengkapan_senpro.*');
        $this->db->from('mahasiswa');
        $this->db->join('dp1','dp1.id_dp1 = mahasiswa.id_dp1');
        $this->db->join('status_sempro','mahasiswa.NIM = status_sempro.mahasiswa_NIM');
        $this->db->join('dokumen_kelengkapan_senpro','status_sempro.dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro = dokumen_kelengkapan_senpro.iddokumen_kelengkapan_senpro');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }


    public function tampil_revsempro($NIM = FALSE)
    {
        
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sempro.status_revisi,status_sempro.berkas_revisi');
            $this->db->from('mahasiswa');
            $this->db->join('status_sempro', 'mahasiswa.NIM = status_sempro.mahasiswa_NIM');
            $this->db->where('status_sempro.status_revisi', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang 
        //dengan view details

        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sempro.status_revisi,status_sempro.berkas_revisi');
        $this->db->from('mahasiswa');
        $this->db->join('status_sempro', 'mahasiswa.NIM = status_sempro.mahasiswa_NIM');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    public function acc_sempro($NIM)
    {
        $this->db->set('status', 1);
        $this->db->where('mahasiswa_NIM', $NIM);
        $this->db->update('status_sempro');
    }

    public function acc_revsempro($NIM)
    {
        $this->db->set('status_revisi', 1);
        $this->db->where('mahasiswa_NIM', $NIM);
        $this->db->update('status_sempro');
    }

}
<?php
    class m_psidang extends CI_Model {

    //function tampil_regsempro()
    //{
    //    $this->db->select('mahasiswa.NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, Status_Sempro.status');
    //    $this->db->from('mahasiswa');
    //    $this->db->join('Status_Sempro', 'mahasiswa.NIM = Status_Sempro.mahasiswa_NIM');
    //    $this->db->where('Status_Sempro.status', 0);
    //    $query = $this->db->get();
    //    return $query->result();
    //}

    public function tampil_regsidang($NIM = FALSE)
    {

        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sidang.status');
            $this->db->from('mahasiswa');
            $this->db->join('status_sidang', 'mahasiswa.NIM = status_sidang.mahasiswa_NIM');
            $this->db->where('status_sidang.status', 0);
            $query = $this->db->get();
            return $query->result();
        }
        //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang
        //dengan view details

        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, dp1.nm_dosen,status_sidang.id_statussidang as id, berkas.*');
        $this->db->from('mahasiswa');
        $this->db->join('dp1','dp1.id_dp1 = mahasiswa.id_dp1');
        $this->db->join('status_sidang','mahasiswa.NIM = status_sidang.mahasiswa_NIM');
        $this->db->join('berkas','status_sidang.berkas_id_berkas_kelengkapan = berkas.id_berkas_kelengkapan');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    public function acc_sidang($NIM)
    {
        $this->db->set('status', 1);
        $this->db->where('mahasiswa_NIM', $NIM);
        $this->db->update('status_sidang');
    }

    public function simpan_notifikasi($id ,$data)
    {
        $this->db->insert('notification', $data);
        $this->db->where('id_statussidang', $id)
        ->delete('status_sidang');
        return TRUE;
    }
    public function delete_berkas($id)
    {
        $this->db->select('berkas_id_berkas_kelengkapan')
        ->from('status_sidang')
        ->where('id_statussidang', $id);
        $id_berkas = $this->db->get()->num_rows();
        $this->db->where('id_berkas_kelengkapan', $id_berkas)
        ->delete('berkas');
    }
    public function tampil_pasca_sidang_nilai()
    {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, nilai_sidang.nilai_total, status_sidang.status');
            $this->db->from('status_sidang');
            $this->db->join('mahasiswa','mahasiswa.NIM=status_sidang.mahasiswa_NIM');
            $this->db->join('nilai_sidang', 'status_sidang.id_statussidang = nilai_sidang.status_sidang_id_statussidang');
            $this->db->where('status_sidang.status', 3);
            $query = $this->db->get();
            return $query->result();

    }

    public function tampil_pasca_sidang()
    {


            $this->db->select('status_sidang.id_statussidang as id, mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, status_sidang.status');
            $this->db->from('status_sidang');
            $this->db->join('mahasiswa','mahasiswa.NIM=status_sidang.mahasiswa_NIM');
            $this->db->where('status_sidang.status', 2);
            $query = $this->db->get();
            return $query->result();

    }
    function show_nilai(){
        $nilai=$this->db->query("SELECT * FROM nilai_sidang");
        return $nilai;
    }
    function simpan_nilai($id){
        $nilai_dp1      = $this->input->post('nilai_bimbingan_dp1');
        $nilai_dp2      = $this->input->post('nilai_bimbingan_dp2');
        $nilai_ujian    = $this->input->post('nilai_ujian');

        $total = ($nilai_dp1+$nilai_dp2+$nilai_ujian)/3;

        $data = array(
                'nilai_bimbingan_dp1'           => $nilai_dp1,
                'nilai_bimbingan_dp2'           => $nilai_dp2,
                'nilai_ujian'                   => $nilai_ujian,
                'nilai_total'                   => $total,
                'status_sidang_id_statussidang' => $id
            );
        $this->db->insert('nilai_sidang', $data);

        $this->db->set('status', 3)
        ->where('id_statussidang', $id)
        ->update('status_sidang');

        return TRUE;
    }

        /*$nilai=$this->db->query("INSERT INTO nilai_sidang (nilai_bimbingan_dp1,nilai_bimbingan_dp2,nilai_ujian,nilai_total,status_sidang_id_statussidang) VALUES ('$nilai_bimbingan_dp1','$nilai_bimbingan_dp2','$nilai_ujian','$nilai_total','3')");
        return $nilai;*/
        public function tampil_berkas($NIM)
        {
        $this->db->select('mahasiswa.NIM,status_sidang.berkas_id_berkas_kelengkapan,berkas.*');
        $this->db->from('mahasiswa');
        $this->db->join('status_sidang','mahasiswa.NIM=status_sidang.mahasiswa_NIM');
        $this->db->join('berkas','status_sidang.berkas_id_berkas_kelengkapan=berkas.id_berkas_kelengkapan');
        $this->db->where('mahasiswa.NIM',$NIM);
        return $this->db->get()->row();
    }
}

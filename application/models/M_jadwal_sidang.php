<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal_sidang extends CI_Model {

    //fungsi ini untuk menampilkan daftar mahasiswa yang terverifikasi admin yang nantinya
    //akan ditentukan jadwal untuk melakukan sidang

    public function get_data($limit, $start)
    {
        $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem, status_sidang.status as status')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.id_dp1')
        ->where('status_sidang.status', 1)
        ->limit($limit , $start);
        return $this->db->get()->result();
    }

    //fungsi untuk menghitung banyak data di tabel status_sidang
    // yang memiliki status 1

    public function counting()
    {
        $this->db->where('status', 1);
        return $this->db->get('status_sidang')->num_rows();
    }

    //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang
    //dengan view details

    public function get_data_details($id)
    {
     $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.id_dp1')
        ->where('status_sidang.id_statussidang', $id);
        return $this->db->get()->row();
    }



    //fungsi ini digunakan untuk memilih nama dosen dari sebuah dropdown
    public function show_dosen()
    {
        $this->db->select('nm_dosen')
        ->from('dp1')
        ->order_by('nm_dosen','asc');
        return $this->db->get()->result();
    }

    //fungsi ini berguna untuk menyimpan data di tabel penguji
    //yang digunakan untuk penentuan jadwal sidang tugas akhir

    public function save_data($id)
    {
            $data = array(
                'ketua'                         => $this->input->post('ketua'),
                'sekertaris'                    => $this->input->post('sekertaris'),
                'anggota'                       => $this->input->post('anggota'),
                'tanggal'                       => $this->input->post('tanggal'),
                'jam'                           => $this->input->post('jam'),
                'ruangan'                       => $this->input->post('ruangan'),
                'status_sidang_id_statussidang' => $id
            );



        return $this->db->insert('penguji', $data);
    }

    // fungsi ini berguna untuk mengupdate dari 1 menjadi 2
    // yang sebelumnya telah terverifikasi oleh admin menjadi 1
    // dan sekarang menjadi 2 karena telah terverifikasi oleh koordinator dan di tentukan jadwal nya

    public function acc_sidang($id)
    {
        $this->db->set('status', 2)
        ->where('id_statussidang', $id)
        ->update('status_sidang');

    }

    // fungsi ini berguna untuk menampilkan mahasiswa yang telah ditentukan jadwal untuk melakukan sidang
    public function acc_mhs($limit, $start)
    {
        $this->db->select('id_statussidang as id,mahasiswa_NIM as NIM,
        mahasiswa.nama_mahasiswa as nama,mahasiswa.judul_TA as judul, penguji.*')
        ->from('status_sidang')
        ->join('mahasiswa','mahasiswa.NIM=status_sidang.mahasiswa_NIM')
        ->join('penguji', 'penguji.status_sidang_id_statussidang=status_sidang.id_statussidang')
        ->where('status_sidang.status', 2)
        ->limit($limit , $start);
        return $this->db->get()->result();
    }

    //fungsi untuk menghitung banyak data di tabel status_sidang
    // yang memiliki status 2

    public function acc_counting()
    {
        $this->db->where('status', 2);
        return $this->db->get('status_sidang')->num_rows();
    }

    //menampilkan beberapa data yang dipilih yang menyesuaikan dengan controller jadwalsidang
    //dengan view details
    public function acc_mhs_detail($id)
    {
        $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,dp1.nm_dosen as dospem')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM=mahasiswa.NIM')
        ->join('dp1','dp1.id_dp1=mahasiswa.id_dp1')
        ->where('status_sidang.id_statussidang', $id);
        return $this->db->get()->row();
    }

    public function jadwal_mhs($id)
    {

        $this->db->select('*')
        ->from('penguji')
        ->where('status_sidang_id_statussidang', $id);
        return $this->db->get()->row();
    }

    //fungsi untuk menghapus mahasiswa yang telah ditentukan jadwalnya
    public function delete_jadwal($id)
    {
        $this->db->set('status', 1)
        ->where('id_statussidang', $id)
        ->update('status_sidang');

        $this->db->where('status_sidang_id_statussidang', $id)
        ->delete('penguji');

        return TRUE;
    }

    //fungsi untuk melakukan pencarian mahasiswa yang telah ditentukan jadwalnya melalui nim
    public function search_data($nim)
    {
        $this->db->select('id_statussidang as id,mahasiswa_NIM as NIM,
        mahasiswa.nama_mahasiswa as nama,mahasiswa.judul_TA as judul, penguji.sekertaris')
        ->from('status_sidang')
        ->join('mahasiswa','mahasiswa.NIM=status_sidang.mahasiswa_NIM')
        ->join('penguji', 'penguji.status_sidang_id_statussidang=status_sidang.id_statussidang')
        ->where('status_sidang.status', 2)
        ->like('mahasiswa_NIM', $nim);
        return $this->db->get()->result();
    }

    public function acc_mhs_view($id)
    {
        $this->db->select('status_sidang.id_statussidang as id,status_sidang.mahasiswa_NIM as NIM,
        nama_mahasiswa as nama,judul_TA as judul,penguji.*')
        ->from('status_sidang')
        ->join('mahasiswa','mahasiswa.NIM=status_sidang.mahasiswa_NIM')
        ->join('penguji', 'penguji.status_sidang_id_statussidang=status_sidang.id_statussidang')
        ->where('status_sidang.id_statussidang', $id);
        return $this->db->get()->row();
    }

    public function acc_update($id, $data)
    {
        $this->db->where('status_sidang_id_statussidang',$id);
        $this->db->update('penguji', $data);
        return TRUE;
    }
}



// ini adalah model untuk controller C_koordinator

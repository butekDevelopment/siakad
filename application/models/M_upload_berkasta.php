<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_upload_berkasta extends CI_Model{


    public function simpansidang($data)
    {
    $this->db->insert ("berkas",$data);
    $idberkas = $this->db->insert_id();
    return $idberkas;
    }

    public function simpan($data)
    {
    $this->db->insert ("status_sidang",$data);
    }

    public function view_by($nim) {
         $this->db->select("*");
         $this->db->from("mahasiswa");
         $this->db->where("NIM",$nim);
         return $this->db->get()->row();
    }

    public function check($NIM)
    {
         $this->db->select('dokumen_kelengkapan_senpro.lembar_revisi as revisi')
         ->from('status_sempro')
         ->join('dokumen_kelengkapan_senpro', 'status_sempro.dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro = dokumen_kelengkapan_senpro.iddokumen_kelengkapan_senpro')
         ->where('status_sempro.mahasiswa_NIM', $NIM);
         return $this->db->get()->row();
    }

    public function check_status($NIM)
    {
        $this->db->select('mahasiswa.NIM,status_sidang.status as status')
        ->from('mahasiswa')
        ->join('status_sidang','status_sidang.mahasiswa_NIM = mahasiswa.NIM')
        ->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    public function check_notif($NIM)
    {
       $this->db->select('*')
         ->from('notification')
         ->where('NIM', $NIM);
         return $this->db->get()->row();
    }
    public function view_penguji($NIM)
    {
        $this->db->select('*')
        ->from('penguji')
        ->join('status_sidang', 'status_sidang.id_statussidang = penguji.status_sidang_id_statussidang')
        ->where('mahasiswa_NIM', $NIM);
        return $this->db->get()->row();
    }

    public function update_penguji($id, $sekertaris, $anggota)
    {
        $this->db->set('sekertaris', $sekertaris);
        $this->db->set('anggota', $anggota);
        $this->db->where('status_sidang_id_statussidang', $id);
        $this->db->update('penguji');
        return TRUE;
    }

    public function show_dosen()
    {
        $this->db->select('nm_dosen')
        ->from('dp1')
        ->order_by('nm_dosen','asc');
        return $this->db->get()->result();
    }

    public function show_notif($NIM)
    {
        $this->db->select('*')
        ->from('notification')
        ->where('NIM', $NIM)
        ->order_by('timestamp','asc');
        return $this->db->get()->result();
    }

    public function del_notif($id)
    {
        $this->db->where('id_notification', $id)
        ->delete('notification');
    }
}
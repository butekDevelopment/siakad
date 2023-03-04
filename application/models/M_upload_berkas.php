<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_upload_berkas extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function view_by($nim) {  
        $this->db->select("*");
        $this->db->from("mahasiswa");
        $this->db->where("NIM",$nim);
        return $this->db->get();
    }       

    function cek_datajudulberkas($table,$where) {
        return $this->db->get_where($table,$where);
    }

    function cek_isi($table,$where) {
        return $this->db->get_where($table,$where);
    }

    function tampil_selesai_revsidang($NIM) {
        // if ($NIM === FALSE) {
            $this->db->select('nilai_total');
            $this->db->from('nilai_sidang');
            $this->db->join('status_sidang', 'status_sidang.id_statussidang = nilai_sidang.status_sidang_id_statussidang');
            $this->db->where('status_sidang.mahasiswa_NIM', $NIM);
            $this->db->where('status_sidang.status', 3);
            $query = $this->db->get();
            return $query->row(); 
        // }
        // $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA, berkasta.*');
        // $this->db->from('mahasiswa');
        // $this->db->join('berkasta','mahasiswa.NIM = berkasta.NIM');
        // $this->db->where('mahasiswa.NIM', $NIM);
        // return $this->db->get()->row();
    }

    function tampil_terverifikasi($NIM) {
        // if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA, berkasta.*');
            $this->db->from('mahasiswa');
            $this->db->join('berkasta', 'mahasiswa.NIM = berkasta.NIM');
            $this->db->where('mahasiswa.NIM', $NIM);
            $this->db->where('berkasta.statusBerkasTA', 1);
            $query = $this->db->get();
            return $query->result(); 
        // }
        // $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA, berkasta.*');
        // $this->db->from('mahasiswa');
        // $this->db->join('berkasta','mahasiswa.NIM = berkasta.NIM');
        // $this->db->where('mahasiswa.NIM', $NIM);
        // return $this->db->get()->row();
    }

    function check_status_berkas($data) {
        $this->db->select('*');
        $this->db->from('berkasta');
        $this->db->where('NIM', $data['NIM']);
        return $this->db->get(); 
    }

    function insert_berkas_ta($data) { 
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('file1')) {

        }
        else {
            $upload_data1          = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
            $data['beritaAcaraTA'] = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
        }

        if (!$this->upload->do_upload('file2')) {

        }
        else {
            $upload_data2   = array('upload_data2' => $this->upload->data());
            $data['sampul'] = $upload_data2['upload_data2']['file_name'];
        }

        if (!$this->upload->do_upload('file3')) {

        }
        else {
            $upload_data3         = array('upload_data3' => $this->upload->data());
            $data['pengesahanTA'] = $upload_data3['upload_data3']['file_name'];
        }

        if (!$this->upload->do_upload('file4')) {

        }
        else {
            $upload_data4        = array('upload_data4' => $this->upload->data());
            $data['persembahan'] = $upload_data4['upload_data4']['file_name'];
        }

        if (!$this->upload->do_upload('file5')) {

        }
        else {
            $upload_data5  = array('upload_data5' => $this->upload->data());
            $data['motto'] = $upload_data5['upload_data5']['file_name'];
        }

        if (!$this->upload->do_upload('file6')) {

        }
        else {
            $upload_data6         = array('upload_data6' => $this->upload->data());
            $data['pernyataanTA'] = $upload_data6['upload_data6']['file_name'];
        }

        if (!$this->upload->do_upload('file7')) {

        }
        else {
            $upload_data7    = array('upload_data7' => $this->upload->data());
            $data['abstrak'] = $upload_data7['upload_data7']['file_name'];
        }

        if (!$this->upload->do_upload('file8')) {

        }
        else {
            $upload_data8      = array('upload_data8' => $this->upload->data());
            $data['ringkasan'] = $upload_data8['upload_data8']['file_name'];
        }

        if (!$this->upload->do_upload('file9')) {

        }
        else {
            $upload_data9    = array('upload_data9' => $this->upload->data());
            $data['prakata'] = $upload_data9['upload_data9']['file_name'];
        }

        if (!$this->upload->do_upload('file10')) {

        }
        else {
            $upload_data10     = array('upload_data10' => $this->upload->data());
            $data['daftarIsi'] = $upload_data10['upload_data10']['file_name'];
        }

        if (!$this->upload->do_upload('file11')) {

        }
        else {
            $upload_data11       = array('upload_data11' => $this->upload->data());
            $data['daftarTabel'] = $upload_data11['upload_data11']['file_name'];
        }

        if (!$this->upload->do_upload('file12')) {

        }
        else {
            $upload_data12        = array('upload_data12' => $this->upload->data());
            $data['daftarGambar'] = $upload_data12['upload_data12']['file_name'];
        }

        if (!$this->upload->do_upload('file13')) {

        }
        else {
            $upload_data13          = array('upload_data13' => $this->upload->data());
            $data['daftarLampiran'] = $upload_data13['upload_data13']['file_name'];
        }

        if (!$this->upload->do_upload('file14')) {

        }
        else {
            $upload_data14 = array('upload_data14' => $this->upload->data());
            $data['bab1']  = $upload_data14['upload_data14']['file_name'];
        }

        if (!$this->upload->do_upload('file15')) {

        }
        else {
            $upload_data15  = array('upload_data15' => $this->upload->data());
            $data['bab2']   = $upload_data15['upload_data15']['file_name'];
        }

        if (!$this->upload->do_upload('file16')) {

        }
        else {
            $upload_data16 = array('upload_data16' => $this->upload->data());
            $data['bab3']  = $upload_data16['upload_data16']['file_name'];
        }

        if (!$this->upload->do_upload('file17')) {

        }
        else {
            $upload_data17 = array('upload_data17' => $this->upload->data());
            $data['bab4']  = $upload_data17['upload_data17']['file_name'];
        }

        if (!$this->upload->do_upload('file18')) {

        }
        else {
            $upload_data18 = array('upload_data18' => $this->upload->data());
            $data['bab5']  = $upload_data18['upload_data18']['file_name'];
        }

        if (!$this->upload->do_upload('file19')) {

        }
        else {
            $upload_data19         = array('upload_data19' => $this->upload->data());
            $data['daftarPustaka'] = $upload_data19['upload_data19']['file_name'];
        }

        if (!$this->upload->do_upload('file20')) {

        }
        else {
            $upload_data20    = array('upload_data20' => $this->upload->data());
            $data['lampiran'] = $upload_data20['upload_data20']['file_name'];
        }

        $data['statusBerkasTA'] = 'TIDAK VALID';
        $this->db->insert('berkasta', $data); //insert ke database
            redirect(site_url('mahasiswa/C_berkas'));
    }

    function update_berkas_ta($nim,$data) {
        $this->db->where('NIM', $nim);
        $this->db->update('berkasta', $data); //update ke database
        redirect(site_url('mahasiswa/C_berkas'));
    }

    function judul(){
        $query = $this->db->query('SELECT judul_TA FROM mahasiswa');
        return $query->result();
    }

    function baca_berkas_ta($NIM) {
        $this->db->select("*");
        $this->db->from("berkasta");
        $this->db->where("NIM",$NIM);
        return $this->db->get();
    }

    function tampil_berkas_ta($NIM = FALSE) {
        if ($NIM === FALSE) {
            $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA, berkasta.*');
            $this->db->from('mahasiswa');
            $this->db->join('berkasta', 'mahasiswa.NIM = berkasta.NIM');
            $this->db->where('berkasta.statusBerkasTA', 0);
            $query = $this->db->get();
            return $query->result(); 
        }
        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA, berkasta.*');
        $this->db->from('mahasiswa');
        $this->db->join('berkasta','mahasiswa.NIM = berkasta.NIM');
        $this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->row();
    }

    function acc_berkas_ta($NIM) {
        $this->db->set('statusBerkasTA', 1);
        $this->db->where('NIM', $NIM);
        $this->db->update('berkasta');
    }

    function cek_status_konfirm() {
        $this->db->select('mahasiswa.NIM as NIM, mahasiswa.nama_mahasiswa, mahasiswa.judul_TA, berkasta.statusBerkasTA');
        $this->db->from('mahasiswa');
        $this->db->join('berkasta', 'mahasiswa.NIM = berkasta.NIM');
        $this->db->where('berkasta.statusBerkasTA', 1);
        $query = $this->db->get();
        return $query->num_rows();
    }


    // function simpan_berkas_ta($data) {
    //     $this->db->insert ("berkasta",$data);
    // }    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar_senpro extends CI_controller {
public function __construct() { 
        parent::__construct();
        $this->load->model('M_pendaftaran_senpro');
        $this->load->model('M_jadwal_sidang');
        $this->load->library('pagination');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() { // menampilkan mahasiswa yg telah acc admin 
        $rows = $this->M_pendaftaran_senpro->counting();
        $config['base_url'] = base_url().'koordinator/pendaftar_senpro/index/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 4;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - Pendaftar Senpro",
            'heading' => "Pendaftar_senpro",
            'user' => $this->M_pendaftaran_senpro->get_data($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links()
        );
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);
        /*
        $data['title'] = ;
        $data['heading'] = ;
        $data['user'] = $this->M_pendaftaran_senpro->get_data();
        $this->load->view('koordinator/Pendaftar_senpro/index', $data);*/
    }

     public function view($id = NULL) { // menampilkan nama dosen dari databese
        $data['title'] = "Koordinator Panel System - Detail Jadwal ";
        $data['heading'] = "Detail Jadwal";
        $data['user_details'] = $this->M_pendaftaran_senpro->get_data_detail($id);
        $data['dosen'] = $this->M_jadwal_sidang->show_dosen();
        $this->load->view('koordinator/Pendaftar_senpro/detail', $data);
    }

    public function save_mhs($id) 
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('ruangan', 'ruangan', 'required');

        if ($this->form_validation->run() == TRUE) {

            $this->M_pendaftaran_senpro->save($id); // menyimpan
            $this->M_pendaftaran_senpro->acc($id); // mengubah status
            redirect('koordinator/pendaftar_senpro');
        }
        
    }
    public function daftar() // menampilkan mahasiswa yang telah mendapatkan jadwal
    {
        $rows = $this->M_pendaftaran_senpro->acc_counting();
        $config['base_url'] = base_url().'koordinator/Pendaftar_senpro/daftar/';
        $config['total_rows'] = $rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $start = $this->uri->segment(4);

        $this->pagination->initialize($config);
        
        $data = array(
            'title' => "Koordinator Panel System - List Mahasiswa yang telah di tentukan jadwalnya",
            'heading' => "List Detail Jadwal",
            'user_acc' => $this->M_pendaftaran_senpro->acc_mhs($config['per_page'], $start),
            'no' => $start,
            'pagination' => $this->pagination->create_links(),
            'dosen' => $this->M_jadwal_sidang->show_dosen()
        );
        $this->load->view('koordinator/Pendaftar_senpro/list_jadwal', $data);
        
    }
    public function delete_mhs() // pemanggilan pop up untuk menghapus mahasiswa yang tepilih
    {
        $id = $this->input->post('id');
        $this->M_pendaftaran_senpro->delete_jadwal($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('koordinator/Pendaftar_senpro/daftar');
    }

     public function update_jadwal() // pemanggilan pop up untuk mengubah jadwal mahasiwa yang dipilih
    {
        $id = $this->input->post('id');
        $data = array(
            'panelis_1'      => $this->input->post('panelis_1'),
            'panelis_2' => $this->input->post('panelis_2'),
            'panelis_3'    => $this->input->post('panelis_3'),
            'tanggal'    => $this->input->post('tanggal'),
            'jam'        => $this->input->post('jam'),
            'ruangan'    => $this->input->post('ruangan'),
            'idStatus_Sempro' => $id
        );
        $this->M_pendaftaran_senpro->acc_update($id, $data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('koordinator/Pendaftar_senpro/daftar');
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_login extends CI_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_karyawan_login');
        $this->load->database();
    }

    public function index() {
        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('login_karyawan');
    }
    }

    public function login() {
        $this->form_validation->set_rules('NIK', 'NIK', 'required|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $session = $this->session->userdata('status');
        if ($session == '') {
        $this->load->view('login_karyawan');
        }

        if ($this->form_validation->run() == TRUE) {
            $data = array('NIK' => $this->input->post('NIK'),
                        'password' => ($this->input->post('password'))
                    );

            $hasil = $this->M_karyawan_login->login($data);

            if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Masuk';
                $sess_data['id'] = $sess->id_karyawan;
                $sess_data['nik'] = $sess->NIK;
                $sess_data['status'] = $sess->status;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('status')=='admin') {
                redirect('admin/c_admin');
            }
            elseif ($this->session->userdata('status')=='koordinator') {
                redirect('koordinator/Chart_judul');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            redirect('karyawan_login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('status');
        session_destroy();
        redirect('karyawan_login');
        }

}
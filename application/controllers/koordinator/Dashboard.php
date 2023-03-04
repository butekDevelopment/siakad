<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_controller {
public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status')=="") {
            redirect('karyawan_login');
        }
        $this->load->helper('text');
    }
    public function index() {
        $data['title'] = "Koordinator Panel System - Dashboard";
        $data['heading'] = "Dashboard";
        $this->load->view('koordinator/index', $data);
    }
}
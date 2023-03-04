<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_versidang extends CI_Controller {
    function __construct(){
		parent::__construct();
        $this->load->model('m_psidang');
        $this->load->database();
        if ($this->session->userdata('status')=="") {
            redirect('auth');
        }
        #$this->load->helper('text');
	}

	public function index()
	{
        $data['mhs'] = $this->m_psidang->tampil_regsidang();
        $this->load->view('administrasi/sidang/v_versidang', $data);
    }

    public function konfirmasi($NIM = NULL) {
        $data['detail_mhs'] = $this->m_psidang->tampil_regsidang($NIM);
        $this->load->view('administrasi/sidang/v_konfirsidang', $data);
    }

    public function sidang_acc($NIM)
    {
        $this->m_psidang->acc_sidang($NIM);
        redirect('admin/sidang/C_versidang');
    }

     public function pasca_sidang()
    {
        $data['ps_sidang_nilai'] = $this->m_psidang->tampil_pasca_sidang_nilai();
        $data['ps_sidang'] = $this->m_psidang->tampil_pasca_sidang();
        $this->load->view('administrasi/sidang/v_pascasidang', $data);
    }

    public function simpan_notifikasi($id)
    {
        $data = array(
            'pesan'     => $this->input->post('pesan'),
            'pengirim'  => "administrasi",
            'NIM'       => $this->input->post('NIM'),
        );
        $this->m_psidang->delete_berkas($id);
        $this->m_psidang->simpan_notifikasi($id, $data);
        redirect('admin/sidang/C_versidang');
    }
 public function simpan_nilai()
    {
       $nilai_isi=$this->input->post('nilai_isi');
        $this->m_psidang->simpan_nilai($nilai_isi);
    }
    public function sNilai($id)
    {
        $this->form_validation->set_rules('nilai_bimbingan_dp1', 'nilai_bimbingan_dp1', 'required');
        $this->form_validation->set_rules('nilai_bimbingan_dp2', 'nilai_bimbingan_dp2', 'required');
        $this->form_validation->set_rules('nilai_ujian', 'nilai_ujian', 'required');
            if ($this->form_validation->run() == TRUE) {
                $this->m_psidang->simpan_nilai($id);
                redirect('admin/sidang/C_versidang/pasca_sidang');
            }
        /*$nilai_bimbingan_dp1=$this->input->post('nilai_bimbingan_dp1');
        $nilai_bimbingan_dp2=$this->input->post('nilai_bimbingan_dp2');
        $nilai_ujian=$this->input->post('nilai_ujian');
        $nilai_total=$this->input->post('nilai_total');
        $status=$this->input->post('status_sidang_id_statussidang');
        ($nilai_bimbingan_dp1,$nilai_bimbingan_dp2,$nilai_ujian,$nilai_total,$status);
        */


    }

    function print_pdf()
    {
          $data['data_mahasiswa'] = $this->mahasiswa_model->data();

    //     //load the view and saved it into $html variable
    //     $html=$this->load->view('mahasiswa/mahasiswa', $data, true);

    //     //this the the PDF filename that user will get to download
    //     $pdfFilePath = "mahasiswa.pdf";

    //    //generate the PDF from the given html
    //     $this->m_pdf->pdf->WriteHTML($html);

    //     //download it.
    //     $this->m_pdf->pdf->Output($pdfFilePath, "D");
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_sidang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->model('M_upload_berkasta');
        if(!isset($this->session->userdata['codeUser'])) {
            redirect("login","refresh");
        }
    }

    public function index(){
        $data['username'] = $this->session->userdata('username');
        $NIM = $this->session->userdata("codeUser");
        $data['mahasiswa'] = $this->M_upload_berkasta->view_by($NIM);
        $data['revisi'] = $this->M_upload_berkasta->check($NIM);
        $data['cek'] = $this->M_upload_berkasta->check_status($NIM);
        $notif = $this->M_upload_berkasta->check_notif($NIM);
        $sidang = $this->M_upload_berkasta->check_status($NIM);
        $data['notif'] = $this->M_upload_berkasta->show_notif($NIM);
        if (!empty($data['revisi'])) {
            if(!empty($notif) && empty($sidang)){
            $this->load->view('mahasiswa/sidang/v_sidang', $data);
            }elseif (!empty($sidang)) {
                $check = $this->M_upload_berkasta->check_status($NIM);
                $stat = $check->status;
                $penguji = $this->M_upload_berkasta->view_penguji($NIM);
                switch ($stat) {
                    case 1:
                    $this->load->view('mahasiswa/sidang/v_telah_acc', $data);
                        break;
                    case 2:
                    $data['penguji'] = $this->M_upload_berkasta->view_penguji($NIM);
                        if (empty($penguji->sekertaris && $penguji->anggota)) {
                            $data['dosen'] = $this->M_upload_berkasta->show_dosen();
                            $this->load->view('mahasiswa/sidang/v_penguji', $data);
                        }else{
                            $data['status'] = "Terverifikasi";
                            $this->load->view('mahasiswa/sidang/v_jadwal', $data);
                        }
                        break;
                    case 3:
                    $this->load->view('mahasiswa/sidang/v_sukses_sidang');
                        break;
                    default:
                $this->load->view('mahasiswa/sidang/V_sukses_upload', $data);
                            break;
                }
                }else {

                    $this->load->view('mahasiswa/sidang/v_sidang', $data);
                }
        }else{
            $this->load->view('mahasiswa/sidang/v_gagal', $data);
        }
    }

    public function proses_upload_berkas() {
     $nim = $data['NIM'] = $_SESSION['codeUser'];
    //$id_pkl=$this->m_upload->getkode_pkl();
    $config['upload_path']      = './upload/sidang/';
    $config['allowed_types']    = 'pdf|jpg|png';
    $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
    $this->load->library('upload',$config);
    $this->load->helper('file');
    $dok="";
    for($i=1;$i<=8;$i++)
    {
        $file = "file".$i;
        $config['file_name'] = $i.'_file_'.$nim;
        $this->upload->initialize($config);
        $this->upload->do_upload($file);
        $file_1 = $this->upload->data();
        $dok[]=$file_1['file_name'];
    }
    $data = array(
            'khs_semester_1' => $dok[0],
            'khs_semester_2' => $dok[1],
            'khs_semester_3' => $dok[2],
            'khs_semester_4' => $dok[3],
            'khs_semester_5' => $dok[4],
            'laporan_proposal' => $dok[5],
            'kartu_kendali' => $dok[6],
            'bukti_spp_terakhir' => $dok[7],
            );
            //$this->M_upload_berkasta->simpansidang($data);
            $id = $this->M_upload_berkasta->simpansidang($data);
            $datastatus = array(
            'mahasiswa_NIM' => $nim,
            'berkas_id_berkas_kelengkapan' => $id ,
            'status' => 0
            );
        $this->M_upload_berkasta->simpan($datastatus);
            //echo implode("<br>",$data);
            redirect('mahasiswa/C_sidang');
    }

    public function update_mhs()
    {
        $id = $this->input->post('id');
        $sekertaris = $this->input->post('sekertaris');
        $anggota = $this->input->post('anggota');
        $this->M_upload_berkasta->update_penguji($id, $sekertaris, $anggota);
        redirect('mahasiswa/C_sidang');
    }

    public function delete_notif($id)
    {
        $this->M_upload_berkasta->del_notif($id);
        redirect('mahasiswa/C_sidang');
    }

    public function logout(){
        $this->session->session_destroy();
         redirect('login');
     }
 }
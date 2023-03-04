<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class C_berkas extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->helper(array('string'));
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->model('M_upload_berkas');
        if(!isset($this->session->userdata['codeUser'])) {
            redirect("login","refresh");
        }
	}

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $NIM = $this->session->userdata("codeUser");
        $data['NIM']=$_SESSION['codeUser'];
        $data['data_berkas_ta'] = $this->M_upload_berkas->check_status_berkas($data)->row();
        $data['mahasiswa'] = $this->M_upload_berkas->view_by($NIM);
        $data['detail_bks'] = $this->M_upload_berkas->tampil_berkas_ta($NIM);
        $nilai = $this->M_upload_berkas->tampil_selesai_revsidang($NIM);
        $data['selesai_sidang'] = $this->M_upload_berkas->tampil_selesai_revsidang($NIM);
        $data['terverifikasi'] = $this->M_upload_berkas->tampil_terverifikasi($NIM);
        if($data['terverifikasi']) {
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/upload_berkas/V_terverifikasi', $data);
            $this->load->view('mahasiswa/footer', $data);
        } elseif($data['selesai_sidang']) { //$nilai === !NULL
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/upload_berkas/V_upload', $data);
            $this->load->view('mahasiswa/footer', $data);}
         else {
            $this->load->view('mahasiswa/header', $data);
            $this->load->view('mahasiswa/sidebar', $data);
            $this->load->view('mahasiswa/upload_berkas/V_tertutup', $data);
            $this->load->view('mahasiswa/footer', $data);
        }
	}

    public function proses_upload_berkas() {
        $data['NIM'] = $_SESSION['codeUser'];
        $data_berkas_ta = $this->M_upload_berkas->check_status_berkas($data)->row();
        $num_berkas_ta = count($data_berkas_ta);
        if(!$num_berkas_ta==1) { //jika belum pernah input
            $this->M_upload_berkas->insert_berkas_ta($data);
        }
        else {
        $nim = $_SESSION['codeUser'];
        $this->db->where('NIM',$nim);
        $query = $this->db->get('berkasta');
        $row = $query->row();

        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'pdf';
        $config['max_size']         = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_width']        = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $config['max_height']       = 9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999;
        $this->load->library('upload',$config);

        $error1=NULL;
        $error2=NULL;
        $error3=NULL;
        $error4=NULL;
        $error5=NULL;
        $error6=NULL;
        $error7=NULL;
        $error8=NULL;
        $error9=NULL;
        $error10=NULL;
        $error11=NULL;
        $error12=NULL;
        $error13=NULL;
        $error14=NULL;
        $error15=NULL;
        $error16=NULL;
        $error17=NULL;
        $error18=NULL;
        $error19=NULL;
        $error20=NULL;
        //error=0 (kalo input kosong) , error=1 (kalo format input salah) , error=2 (kalo mau upload)

        if (!$this->upload->do_upload('file1')) {
            $file1 = $_FILES['file1']['name']; //nama array [kolom] [type format]
            if($file1=='') {
                $error1=0;
            }
            else {
                $error1=1;
            }
        }
        else {
            $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
            $file1 = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
            $error1=2;
            // unlink("./upload/$file1");
        }

        if (!$this->upload->do_upload('file2')) {
            $file2 = $_FILES['file2']['name'];
            if($file2=='') {
                $error2=0;
            }
            else {
                $error2=1;
            }
        }
        else {
            $upload_data2 = array('upload_data2' => $this->upload->data());
            $file2 = $upload_data2['upload_data2']['file_name'];
            $error2=2;
            // unlink("./upload/$file2");
        }

        if (!$this->upload->do_upload('file3')) {
            $file3 = $_FILES['file3']['name'];
            if($file3=='') {
                $error3=0;
            }
            else {
                $error3=1;
            }
        }
        else {
            $upload_data3 = array('upload_data3' => $this->upload->data());
            $file3 = $upload_data3['upload_data3']['file_name'];
            $error3=2;
            // unlink("./upload/$file3");
        }

        if (!$this->upload->do_upload('file4')) {
            $file4 = $_FILES['file4']['name'];
            if($file4=='') {
                $error4=0;
            }
            else {
                $error4=1;
            }
        }
        else {
            $upload_data4 = array('upload_data4' => $this->upload->data());
            $file4 = $upload_data4['upload_data4']['file_name'];
            $error4=2;
            // unlink("./upload/$file4");
        }

        if (!$this->upload->do_upload('file5')) {
            $file5 = $_FILES['file5']['name'];
            if($file5=='') {
                $error5=0;
            }
            else {
                $error5=1;
            }
        }
        else {
            $upload_data5 = array('upload_data5' => $this->upload->data());
            $file5 = $upload_data5['upload_data5']['file_name'];
            $error5=2;
            // unlink("./upload/$file5");
        }

        if (!$this->upload->do_upload('file6')) {
            $file6 = $_FILES['file6']['name'];
            if($file6=='') {
                $error6=0;
            }
            else {
                $error6=1;
            }
        }
        else {
            $upload_data6 = array('upload_data6' => $this->upload->data());
            $file6 = $upload_data6['upload_data6']['file_name'];
            $error6=2;
            // unlink("./upload/$file6");
        }

        if (!$this->upload->do_upload('file7')) {
            $file7 = $_FILES['file7']['name'];
            if($file7=='') {
                $error7=0;
            }
            else {
                $error7=1;
            }
        }
        else {
            $upload_data7 = array('upload_data7' => $this->upload->data());
            $file7 = $upload_data7['upload_data7']['file_name'];
            $error7=2;
            // unlink("./upload/$file7");
        }

        if (!$this->upload->do_upload('file8')) {
            $file8 = $_FILES['file8']['name'];
            if($file8=='') {
                $error8=0;
            }
            else {
                $error8=1;
            }
        }
        else {
            $upload_data8 = array('upload_data8' => $this->upload->data());
            $file8 = $upload_data8['upload_data8']['file_name'];
            $error8=2;
            // unlink("./upload/$file8");
        }

        if (!$this->upload->do_upload('file9')) {
            $file9 = $_FILES['file9']['name'];
            if($file9=='') {
                $error9=0;
            }
            else {
                $error9=1;
            }
        }
        else {
            $upload_data9 = array('upload_data9' => $this->upload->data());
            $file9 = $upload_data9['upload_data9']['file_name'];
            $error9=2;
            // unlink("./upload/$file9");
        }

        if (!$this->upload->do_upload('file10')) {
            $file10 = $_FILES['file10']['name'];
            if($file10=='') {
                $error10=0;
            }
            else {
                $error10=1;
            }
        }
        else {
            $upload_data10 = array('upload_data10' => $this->upload->data());
            $file10 = $upload_data10['upload_data10']['file_name'];
            $error10=2;
            // unlink("./upload/$file10");
        }

        if (!$this->upload->do_upload('file11')) {
            $file11 = $_FILES['file11']['name'];
            if($file11=='') {
                $error11=0;
            }
            else {
                $error11=1;
            }
        }
        else {
            $upload_data11 = array('upload_data11' => $this->upload->data());
            $file11 = $upload_data11['upload_data11']['file_name'];
            $error11=2;
            // unlink("./upload/$file11");
        }

        if (!$this->upload->do_upload('file12')) {
            $file12 = $_FILES['file12']['name'];
            if($file12=='') {
                $error12=0;
            }
            else {
                $error12=1;
            }
        }
        else {
            $upload_data12 = array('upload_data12' => $this->upload->data());
            $file12 = $upload_data12['upload_data12']['file_name'];
            $error12=2;
            // unlink("./upload/$file12");
        }

        if (!$this->upload->do_upload('file13')) {
            $file13 = $_FILES['file13']['name'];
            if($file13=='') {
                $error13=0;
            }
            else {
                $error13=1;
            }
        }
        else {
            $upload_data13 = array('upload_data13' => $this->upload->data());
            $file13 = $upload_data13['upload_data13']['file_name'];
            $error13=2;
            // unlink("./upload/$file13");
        }

        if (!$this->upload->do_upload('file14')) {
            $file14 = $_FILES['file14']['name'];
            if($file14=='') {
                $error14=0;
            }
            else {
                $error14=1;
            }
        }
        else {
            $upload_data14 = array('upload_data14' => $this->upload->data());
            $file14 = $upload_data14['upload_data14']['file_name'];
            $error14=2;
            // unlink("./upload/$file14");
        }

        if (!$this->upload->do_upload('file15')) {
            $file15 = $_FILES['file15']['name'];
            if($file15=='') {
                $error15=0;
            }
            else {
                $error15=1;
            }
        }
        else {
            $upload_data15 = array('upload_data15' => $this->upload->data());
            $file15 = $upload_data15['upload_data15']['file_name'];
            $error15=2;
            // unlink("./upload/$file15");
        }

        if (!$this->upload->do_upload('file16')) {
            $file16 = $_FILES['file16']['name'];
            if($file16=='') {
                $error16=0;
            }
            else {
                $error16=1;
            }
        }
        else {
            $upload_data16 = array('upload_data16' => $this->upload->data());
            $file16 = $upload_data16['upload_data16']['file_name'];
            $error16=2;
            // unlink("./upload/$file16");
        }

        if (!$this->upload->do_upload('file17')) {
            $file17 = $_FILES['file17']['name'];
            if($file17=='') {
                $error17=0;
            }
            else {
                $error17=1;
            }
        }
        else {
            $upload_data17 = array('upload_data17' => $this->upload->data());
            $file17 = $upload_data17['upload_data17']['file_name'];
            $error17=2;
            // unlink("./upload/$file17");
        }

        if (!$this->upload->do_upload('file18')) {
            $file18 = $_FILES['file18']['name'];
            if($file18=='') {
                $error18=0;
            }
            else {
                $error18=1;
            }
        }
        else {
            $upload_data18 = array('upload_data18' => $this->upload->data());
            $file18 = $upload_data18['upload_data18']['file_name'];
            $error18=2;
            // unlink("./upload/$file18");
        }

        if (!$this->upload->do_upload('file19')) {
            $file19 = $_FILES['file19']['name'];
            if($file19=='') {
                $error19=0;
            }
            else {
                $error19=1;
            }
        }
        else {
            $upload_data19 = array('upload_data19' => $this->upload->data());
            $file19 = $upload_data19['upload_data19']['file_name'];
            $error19=2;
            // unlink("./upload/$file19");
        }

        if (!$this->upload->do_upload('file20')) {
            $file20 = $_FILES['file20']['name'];
            if($file20=='') {
                $error20=0;
            }
            else {
                $error20=1;
            }
        }
        else {
            $upload_data20 = array('upload_data20' => $this->upload->data());
            $file20 = $upload_data20['upload_data20']['file_name'];
            $error20=2;
            // unlink("./upload/$file20");
        }

        if($error1==0 && $error2==0 && $error3==0 && $error4==0 && $error5==0 && $error6==0 && $error7==0 && $error8==0 && $error9==0 && $error10==0 && $error11==0 && $error12==0 && $error13==0 && $error14==0 && $error15==0 && $error16==0 && $error17==0 && $error18==0 && $error19==0 && $error20==0) {
            redirect(site_url('C_berkas/index'));
        }
        else if ($error1==1 || $error2==1 || $error3==1 || $error4==1 || $error5==1 || $error6==1 || $error7==1 || $error8==1 || $error9==1 || $error10==1 || $error11==1 || $error12==1 || $error13==1 || $error14==1 || $error15==1 || $error16==1 || $error17==1 || $error18==1 || $error19==1 || $error20==1) {
            $data['NIM']=$_SESSION['username'];
            $data['data_berkas_ta']  = $this->M_upload_berkas->check_status_berkas($data)->row();
            $error = array('error'=>'format file salah harus format *.pdf');
            $this->load->view('mahasiswa/header', $data, TRUE);
            $this->load->view('mahasiswa/sidebar', $data, TRUE);
            $this->load->view('mahasiswa/upload_berkas/v_upload', $error, TRUE);
            $this->load->view('mahasiswa/footer', $data, TRUE);
            return;
        }
        else if($error1==2) {
            $this->upload->do_upload('file1');
            // unlink("./upload/$row->beritaAcaraTA");
            $upload_data1          = array('upload_data1' => $this->upload->data()); //memasukkan data file ke upload_data1
            $data['beritaAcaraTA'] = $upload_data1['upload_data1']['file_name']; //nama array [kolom] [type format]
        }
        if($error2==2) {
            $this->upload->do_upload('file2');
            // unlink("./upload/$row->sampul");
            $upload_data2   = array('upload_data2' => $this->upload->data());
            $data['sampul'] = $upload_data2['upload_data2']['file_name'];
        }
        if($error3==2) {
            $this->upload->do_upload('file3');
            // unlink("./upload/$row->pengesahanTA");
            $upload_data3         = array('upload_data3' => $this->upload->data());
            $data['pengesahanTA'] = $upload_data3['upload_data3']['file_name'];
        }
        if($error4==2) {
            $this->upload->do_upload('file4');
            // unlink("./upload/$row->persembahan");
            $upload_data4        = array('upload_data4' => $this->upload->data());
            $data['persembahan'] = $upload_data4['upload_data4']['file_name'];
        }
        if($error5==2) {
            $this->upload->do_upload('file5');
            // unlink("./upload/$row->motto");
            $upload_data5  = array('upload_data5' => $this->upload->data());
            $data['motto'] = $upload_data5['upload_data5']['file_name'];
        }
        if($error6==2) {
            $this->upload->do_upload('file6');
            // unlink("./upload/$row->pernyataanTA");
            $upload_data6         = array('upload_data6' => $this->upload->data());
            $data['pernyataanTA'] = $upload_data6['upload_data6']['file_name'];
        }
        if($error7==2) {
            $this->upload->do_upload('file7');
            // unlink("./upload/$row->abstrak");
            $upload_data7    = array('upload_data7' => $this->upload->data());
            $data['abstrak'] = $upload_data7['upload_data7']['file_name'];
        }
        if($error8==2) {
            $this->upload->do_upload('file8');
            // unlink("./upload/$row->ringkasan");
            $upload_data8      = array('upload_data8' => $this->upload->data());
            $data['ringkasan'] = $upload_data8['upload_data8']['file_name'];
        }
        if($error9==2) {
            $this->upload->do_upload('file9');
            // unlink("./upload/$row->prakata");
            $upload_data9    = array('upload_data9' => $this->upload->data());
            $data['prakata'] = $upload_data9['upload_data9']['file_name'];
        }
        if($error10==2) {
            $this->upload->do_upload('file10');
            // unlink("./upload/$row->daftarIsi");
            $upload_data10     = array('upload_data10' => $this->upload->data());
            $data['daftarIsi'] = $upload_data10['upload_data10']['file_name'];
        }
        if($error11==2) {
            $this->upload->do_upload('file11');
            // unlink("./upload/$row->daftarTabel");
            $upload_data11       = array('upload_data11' => $this->upload->data());
            $data['daftarTabel'] = $upload_data11['upload_data11']['file_name'];
        }
        if($error12==2) {
            $this->upload->do_upload('file12');
            // unlink("./upload/$row->daftarGambar");
            $upload_data12        = array('upload_data12' => $this->upload->data());
            $data['daftarGambar'] = $upload_data12['upload_data12']['file_name'];
        }
        if($error13==2) {
            $this->upload->do_upload('file13');
            // unlink("./upload/$row->daftarLampiran");
            $upload_data13          = array('upload_data13' => $this->upload->data());
            $data['daftarLampiran'] = $upload_data13['upload_data13']['file_name'];
        }
        if($error14==2) {
            $this->upload->do_upload('file14');
            // unlink("./upload/$row->bab1");
            $upload_data14 = array('upload_data14' => $this->upload->data());
            $data['bab1']  = $upload_data14['upload_data14']['file_name'];
        }
        if($error15==2) {
            $this->upload->do_upload('file15');
            // unlink("./upload/$row->bab2");
            $upload_data15 = array('upload_data15' => $this->upload->data());
            $data['bab2']  = $upload_data15['upload_data15']['file_name'];
        }
        if($error16==2) {
            $this->upload->do_upload('file16');
            // unlink("./upload/$row->bab3");
            $upload_data16 = array('upload_data16' => $this->upload->data());
            $data['bab3']  = $upload_data16['upload_data16']['file_name'];
        }
        if($error17==2) {
            $this->upload->do_upload('file17');
            // unlink("./upload/$row->bab4");
            $upload_data17 = array('upload_data17' => $this->upload->data());
            $data['bab4']  = $upload_data17['upload_data17']['file_name'];
        }
        if($error18==2) {
            $this->upload->do_upload('file18');
            // unlink("./upload/$row->bab5");
            $upload_data18 = array('upload_data18' => $this->upload->data());
            $data['bab5']  = $upload_data18['upload_data18']['file_name'];
        }
        if($error19==2) {
            $this->upload->do_upload('file19');
            // unlink("./upload/$row->daftarPustaka");
            $upload_data19         = array('upload_data19' => $this->upload->data());
            $data['daftarPustaka'] = $upload_data19['upload_data19']['file_name'];
        }
        if($error20==2) {
            $this->upload->do_upload('file20');
            // unlink("./upload/$row->lampiran");
            $upload_data20    = array('upload_data20' => $this->upload->data());
            $data['lampiran'] = $upload_data20['upload_data20']['file_name'];
        }
        $this->M_upload_berkas->update_berkas_ta($nim,$data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
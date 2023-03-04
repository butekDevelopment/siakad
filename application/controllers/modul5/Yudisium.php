    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Yudisium extends MY_Controller {  
    	function __construct(){
        parent::__construct();
        $this->load->model('yudisium/Yudisium_model');
        $this->load->model('yudisium/text_yudisium');
        }

        /*=== DAFTAR YUDISIUM ===*/
        public function daftar_yudisium(){    
        $data['NIM']=$_SESSION['codeUser'];
        $data['data_yudisium']  = $this->Yudisium_model->check_status_upload($data)->row();
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
        $this->load->view('mahasiswa/footer', $data);
        $this->render_page('modul5/mahasiswa/yudisium/daftar_yudisium',$data); //render_page ada di file MYController di folder CORE 
    	}

        public function daftar_yudisium_error(){ 
        $data['NIM']=$_SESSION['codeUser'];
        $data['data_yudisium']  = $this->Yudisium_model->check_status_upload($data)->row();
        $this->render_page('modul5/mahasiswa/yudisium/daftar_yudisium',$data); //render_page ada di file MYController di folder CORE 

        }
   
        public function proses_daftar_yudisium(){
            $data['NIM']=$_SESSION['codeUser'];
            $data_yudisium= $this->Yudisium_model->check_status_upload($data)->row();
            $num_data_yudisium = count($data_yudisium);
            if(!$num_data_yudisium==1){ //jika belum pernah input
                $this->Yudisium_model->insert_daftar_yudisium($data);
            }else{
                $nim=$_SESSION['codeUser'];
                 $this->db->where('NIM',$nim);
             $query = $this->db->get('tb_yudisium');
             $row = $query->row();
			
			
            $config['upload_path'] = './assets/img/yudisium/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width'] = '2048';
            $config['max_height'] = '1536';
            
            $this->load->library('upload', $config);
			
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
			
            //error=0 (kalo input kosong) , error=1 (kalo format input salah) , error=2 (kalo mau upload)
			
			//ubah data text yudisium
			
			$data['Angkatan'] = $this->input->post('Angkatan');
			$data['IP_SMT1'] = $this->input->post('t_ip1');
			$data['IP_SMT2'] = $this->input->post('t_ip2');
			$data['IP_SMT3'] = $this->input->post('t_ip3');
			$data['IP_SMT4'] = $this->input->post('t_ip4');
			$data['IP_SMT5'] = $this->input->post('t_ip5');
			$data['IP_SMT6'] = $this->input->post('t_ip6');
			
			
            if (!$this->upload->do_upload('file_khs1')){
                
                $file_khs1= $_FILES['file_khs1']['name'] ;  //nama array [kolom] [type format]
                if($file_khs1==''){
                    $error1=0;
                    //echo "belom1";
                    //return;
                }else{
                    $error1=1;
                //echo "belom12";
                    //return;
                }
            }else{  
                $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs1= $upload_data1['upload_data1']['file_name'];   //nama array [kolom] [type format]
                //echo $file_khs1;
                
                    $error1=2;
                    unlink("./assets/img/yudisium/$file_khs1");
                
            }

            
            if (!$this->upload->do_upload('file_khs2')){
                $file_khs2= $_FILES['file_khs2']['name'] ;   //nama array [kolom] [type format]
                if($file_khs2==''){
                    $error2=0;
                    //echo "belom21";
                    //return;
                }else{
                    $error2=1;
                    //echo $file_khs2;
                    //echo "belom22";
                    //return;
                //echo "belo1m";
                //    return;
                }
            }else{
                $upload_data2 = array('upload_data2' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs2= $upload_data2['upload_data2']['file_name'];   //nama array [kolom] [type format]
                
                    $error2=2;
                    unlink("./assets/img/yudisium/$file_khs2");
            }

            
            if (!$this->upload->do_upload('file_khs3')){
                
                $file_khs3= $_FILES['file_khs3']['name'] ;   //nama array [kolom] [type format]
                if($file_khs3==''){
                    $error3=0;
                    //echo "belom31";
                   // return;
                }else{
                    $error3=1;
                    //echo "belom32";
                    //return;
                }
            }else{
                
                $upload_data3 = array('upload_data3' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs3= $upload_data3['upload_data3']['file_name'];   //nama array [kolom] [type format]
                
                    $error3=2;
                    unlink("./assets/img/yudisium/$file_khs3");
                
            }

            if (!$this->upload->do_upload('file_khs4')){
                $file_khs4= $_FILES['file_khs4']['name'] ;   //nama array [kolom] [type format]
                if($file_khs4==''){
                    $error4=0;
                    //echo "belom41";
                   // return;
                }else{
                    $error4=1;
                    //echo "belom52";
                    //return;
                }
            }else{
                
                $upload_data4 = array('upload_data4' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs4= $upload_data4['upload_data4']['file_name'];   //nama array [kolom] [type format]
                
                    $error4=2;
                    unlink("./assets/img/yudisium/$file_khs4");
            }

            
            if (!$this->upload->do_upload('file_khs5')){
               $file_khs5= $_FILES['file_khs5']['name'] ;   //nama array [kolom] [type format]
                if($file_khs5==''){
                    $error5=0;
                    //echo "belom31";
                    //return;
                }else{
                    $error5=1;
                    //echo "belom32";
                    //return;
                }
            }else{
                
                $upload_data5 = array('upload_data5' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs5= $upload_data5['upload_data5']['file_name'];   //nama array [kolom] [type format]
                
                    $error5=2;
                    unlink("./assets/img/yudisium/$file_khs5");
                
            }

            
            if (!$this->upload->do_upload('file_khs6')){
                $file_khs6= $_FILES['file_khs6']['name'] ;   //nama array [kolom] [type format]
                if($file_khs6==''){
                    $error6=0;
                    //echo "belom61";
                    //return;
                }else{
                    $error6=1;
                    //echo "belom62";
                    //return;
                }
            }else{
                $upload_data6 = array('upload_data6' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_khs6= $upload_data6['upload_data6']['file_name'];   //nama array [kolom] [type format]
                
                    $error6=2;
                    unlink("./assets/img/yudisium/$file_khs6");
                
            }

            
            if (!$this->upload->do_upload('file_surat_tanggungan')){
                $file_surat_tanggungan= $_FILES['file_surat_tanggungan']['name'] ;   //nama array [kolom] [type format]
                if($file_surat_tanggungan==''){
                    $error7=0;
                    //echo "belom71";
                    //return;
                }else{
                    $error7=1;
                    //echo "belom72";
                    //return;
                };
            }else{
                
                $upload_data7 = array('upload_data7' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_surat_tanggungan= $upload_data7['upload_data7']['file_name'];   //nama array [kolom] [type format]
                
                    $error7=2;
                    unlink("./assets/img/yudisium/$file_surat_tanggungan");
            }
            

            
            if (!$this->upload->do_upload('file_bukti_spp')){
                $file_bukti_spp= $_FILES['file_bukti_spp']['name'] ;   //nama array [kolom] [type format]
                if($file_bukti_spp==''){
                    $error8=0;
                    //echo "belom81";
                    //return;
                }else{
                    $error8=1;
                    //echo "belom82";
                    //return;
                }
            }else{
                
                $upload_data8 = array('upload_data8' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_bukti_spp= $upload_data8['upload_data8']['file_name'];   //nama array [kolom] [type format]
                
                    $error8=2;
                    unlink("./assets/img/yudisium/$file_bukti_spp");
                
            }

            

            if (!$this->upload->do_upload('file_berita_ta')){
                $file_berita_ta= $_FILES['file_berita_ta']['name'] ;   //nama array [kolom] [type format]
                if($file_berita_ta==''){
                    $error9=0;
                    //echo "belom91";
                    //return;
                }else{
                    $error5=1;
                    //echo "belom92";
                    //return;
                }
            }else{
                $upload_data9 = array('upload_data9' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_berita_ta= $upload_data9['upload_data9']['file_name'];   //nama array [kolom] [type format]
                    $error9=2;
                    unlink("./assets/img/yudisium/$file_berita_ta");
            }

            
            if (!$this->upload->do_upload('file_berita_pkl')){
                $file_berita_pkl= $_FILES['file_berita_pkl']['name'] ;   //nama array [kolom] [type format]
                if($file_berita_pkl==''){
                    $error10=0;
                    //echo "belom101";
                    //return;
                }else{
                    $error10=1;
                    //echo "belom102";
                    //return;
                }
            }else{
                $upload_data10 = array('upload_data10' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_berita_pkl= $upload_data10['upload_data10']['file_name'];   //nama array [kolom] [type format]
                    $error10=2;
                    unlink("./assets/img/yudisium/$file_berita_pkl");
            }

            
            if (!$this->upload->do_upload('file_penyerahan_ta')){
                $file_penyerahan_ta= $_FILES['file_penyerahan_ta']['name'] ;  //nama array [kolom] [type format]
                if($file_penyerahan_ta==''){
                    $error11=0;
                    //echo "belom111";
                    //return;
                }else{
                    $error11=1;
                    //echo "belom112";
                    //return;
                }
            }else{
                $upload_data11 = array('upload_data11' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_penyerahan_ta= $upload_data11['upload_data11']['file_name'];   //nama array [kolom] [type format]
                
                    $error11=2;
                    unlink("./assets/img/yudisium/$file_penyerahan_ta");
                
            }

                if (!$this->upload->do_upload('file_penyerahan_pkl')){
                $file_penyerahan_pkl= $_FILES['file_penyerahan_pkl']['name'] ;   //nama array [kolom] [type format]
                if($file_penyerahan_pkl==''){
                    $error12=0;
                    //echo "belom121";
                    //return;
                }else{
                    $error5=1;
                    //echo "belom122";
                    //return;
                }
            }else{
                $error12=2;
                $upload_data12 = array('upload_data12' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_penyerahan_pkl= $upload_data12['upload_data12']['file_name'];   //nama array [kolom] [type format]
                
                    $error12=2;
                    unlink("./assets/img/yudisium/$file_penyerahan_pkl");
                
            }


            if (!$this->upload->do_upload('file_daftar_nilai')){
                $file_daftar_nilai= $_FILES['file_daftar_nilai']['name'] ;  //nama array [kolom] [type format]
                if($file_daftar_nilai==''){
                    $error13=0;
                    //echo "belom131";
                    //return;
                }else{
                    $error13=1;
                    //echo "belom132";
                    //return;
                }
            }else{
                $upload_data13 = array('upload_data13' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $file_daftar_nilai= $upload_data13['upload_data13']['file_name'];   //codeUser array [kolom] [type format]
                
                    $error13=2;
                    unlink("./assets/img/yudisium/$file_daftar_nilai");
                
            }
			
			
			

            if($error1==0 && $error2==0 && $error3==0 && $error4==0 && $error5==0 && $error6==0 && $error7==0 && $error8==0 && $error9==0 && $error10==0 && $error11==0 && $error12==0 && $error13==0){
				redirect(site_url('Yudisium/daftar_yudisium'));
            }else if ($error1==1 || $error2==1 || $error3==1 || $error4==1 || $error5==1 || $error6==1 || $error7==1 || $error8==1 || $error9==1 || $error10==1 || $error11==1 || $error12==1 || $error13==1){
                $data['NIM']=$_SESSION['codeUser'];
                $data['data_yudisium']  = $this->Yudisium_model->check_status_upload($data)->row();
                $error = array('error'=>'format file salah harus format png/jpg/jpeg');
                $data1['headernya'] = $this->load->view('template/header', $data, TRUE);
                $data1['contentnya'] = $this->load->view('mahasiswa/yudisium/daftar_yudisium', $error, TRUE);
                $data1['footernya'] = $this->load->view('template/footer', $data, TRUE);
                $this->load->view('template/index', $data1);
                //this->load->view('mahasiswa/yudisium/daftar_yudisium', $error,TRUE);
                 return;
            }else if($error1==2){
                $this->upload->do_upload('file_khs1');
                unlink("./assets/img/yudisium/$row->FILE_KHS1");
                $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $data['FILE_KHS1']                          = $upload_data1['upload_data1']['file_name'];   //codeUser array [kolom] [type format]
                $data['STATUS_KHS1']                          = "MENUNGGU KONFIRMASI";
            }if($error2==2){
                $this->upload->do_upload('file_khs2');
                unlink("./assets/img/yudisium/$row->FILE_KHS2");
                $upload_data2 = array('upload_data2' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $data['FILE_KHS2']                          = $upload_data2['upload_data2']['file_name'];   //nama array [kolom] [type format]
                $data['STATUS_KHS2']                          = "MENUNGGU KONFIRMASI";
            }if($error3==2){
                $this->upload->do_upload('file_khs3');
                unlink("./assets/img/yudisium/$row->FILE_KHS3");
                $upload_data3 = array('upload_data3' => $this->upload->data());
                $data['FILE_KHS3']                          = $upload_data3['upload_data3']['file_name'];
                $data['STATUS_KHS3']                          = "MENUNGGU KONFIRMASI";
            }if($error4==2){
                $this->upload->do_upload('file_khs4');
                unlink("./assets/img/yudisium/$row->FILE_KHS4");
                $upload_data4 = array('upload_data4' => $this->upload->data());
                $data['FILE_KHS4']                          = $upload_data4['upload_data4']['file_name'];
                $data['STATUS_KHS4']                          = "MENUNGGU KONFIRMASI";
            }if($error5==2){
                $this->upload->do_upload('file_khs5');
                unlink("./assets/img/yudisium/$row->FILE_KHS5");
                $upload_data5 = array('upload_data5' => $this->upload->data());
                $data['FILE_KHS5']                          = $upload_data5['upload_data5']['file_name'];
                $data['STATUS_KHS5']                          = "MENUNGGU KONFIRMASI";
            }if($error6==2){
                $this->upload->do_upload('file_khs6');
                unlink("./assets/img/yudisium/$row->FILE_KHS6");
                $upload_data6 = array('upload_data6' => $this->upload->data());
                $data['FILE_KHS6']                          = $upload_data6['upload_data6']['file_name'];
                $data['STATUS_KHS6']                          = "MENUNGGU KONFIRMASI";
            }if($error7==2){
                $this->upload->do_upload('file_surat_tanggungan');
                unlink("./assets/img/yudisium/$row->FILE_SURAT_BEBAS_TANGGUNGAN");
                $upload_data7 = array('upload_data7' => $this->upload->data());
                $data['FILE_SURAT_BEBAS_TANGGUNGAN']        = $upload_data7['upload_data7']['file_name'];
                $data['STATUS_SURAT_BEBAS_TANGGUNGAN']        = "MENUNGGU KONFIRMASI";
            }if($error8==2){
                $this->upload->do_upload('file_bukti_spp');
                unlink("./assets/img/yudisium/$row->FILE_SPP");
                $upload_data8 = array('upload_data8' => $this->upload->data());
                $data['FILE_SPP']                           = $upload_data8['upload_data8']['file_name'];
                $data['STATUS_SPP']                           = "MENUNGGU KONFIRMASI";
            }if($error9==2){
                $this->upload->do_upload('file_berita_ta');
                unlink("./assets/img/yudisium/$row->FILE_BERITA_ACARA_TA");
                $upload_data9 = array('upload_data9' => $this->upload->data());
                $data['FILE_BERITA_ACARA_TA']               = $upload_data9['upload_data9']['file_name'];
                $data['STATUS_BERITA_ACARA_TA']               = "MENUNGGU KONFIRMASI";
            }if($error10==2){
                $this->upload->do_upload('file_berita_pkl');
                unlink("./assets/img/yudisium/$row->FILE_BERITA_ACARA_PKL");
                $upload_data10 = array('upload_data10' => $this->upload->data());
                $data['FILE_BERITA_ACARA_PKL']              = $upload_data10['upload_data10']['file_name'];
                $data['STATUS_BERITA_ACARA_PKL']              = "MENUNGGU KONFIRMASI";
            }if($error11==2){
                $this->upload->do_upload('file_penyerahan_ta');
                unlink("./assets/img/yudisium/$row->FILE_PENYERAHAN_TA");
                $upload_data11 = array('upload_data11' => $this->upload->data());
                $data['FILE_PENYERAHAN_TA']                 = $upload_data11['upload_data11']['file_name'];
                $data['STATUS_PENYERAHAN_TA']                 = "MENUNGGU KONFIRMASI";
            }if($error12==2){
                $this->upload->do_upload('file_penyerahan_pkl');
                unlink("./assets/img/yudisium/$row->FILE_PENYERAHAN_PKL");
                $upload_data12 = array('upload_data12' => $this->upload->data());
                $data['FILE_PENYERAHAN_PKL']                = $upload_data12['upload_data12']['file_name'];
                $data['STATUS_PENYERAHAN_PKL']                = "MENUNGGU KONFIRMASI";
            }if($error13==2){
                $this->upload->do_upload('file_daftar_nilai');
                unlink("./assets/img/yudisium/$row->FILE_KONSEP_DAFTAR_NILAI_SEMENTARA");
                $upload_data13 = array('upload_data13' => $this->upload->data());
                $data['FILE_KONSEP_DAFTAR_NILAI_SEMENTARA'] = $upload_data13['upload_data13']['file_name'];
                $data['STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA'] = "MENUNGGU KONFIRMASI";
            }
			
            //error=0 (kalo input kosong) , error=1 (kalo format input salah) , error=2 (kalo mau upload)
			
			//ubah data text yudisium
            $this->Yudisium_model->update_daftar_yudisium($nim,$data);
            }     
        }

        //UNTUK ADMIN
        public function data_yudisium(){    
        $data['data_mahasiswa']  = $this->Yudisium_model->select_all_mahasiswa()->result();
        $this->render_page('modul5/dosen/data/yudisium/data_yudisium',$data); //render_page ada di file MYController di folder CORE 
        }

        public function cari_data_yudisium(){    
        $tahun  = $this->input->post('tahun');
        $status = $this->input->post('status');
        $data['data_mahasiswa']  = $this->Yudisium_model->select_all_mahasiswa_cari($tahun,$status);
        $this->render_page('modul5/dosen/data/yudisium/data_yudisium',$data); //render_page ada di file MYController di folder CORE 
        }

        public function edit_data_yudisium($nim){
        $data['data_yudisium_mahasiswa'] = $this->Yudisium_model->select_by_id_yudisium($nim)->row();
        $this->render_page('modul5/dosen/data/yudisium/form_edit_yudisium', $data); //untuk menampilkan form edit mobil}
        }

        public function proses_edit_data_yudisium(){
			
            $data['STATUS_KHS1'] = $this->input->post('status_khs1');
            $data['STATUS_KHS2'] = $this->input->post('status_khs2');
            $data['STATUS_KHS3'] = $this->input->post('status_khs3');
            $data['STATUS_KHS4'] = $this->input->post('status_khs4');
            $data['STATUS_KHS5'] = $this->input->post('status_khs5');
            $data['STATUS_KHS6'] = $this->input->post('status_khs6');
            $data['STATUS_SURAT_BEBAS_TANGGUNGAN'] = $this->input->post('status_surat_tanggungan');
            $data['STATUS_SPP'] = $this->input->post('status_bukti_spp');
            $data['STATUS_BERITA_ACARA_TA'] = $this->input->post('status_berita_ta');
            $data['STATUS_BERITA_ACARA_PKL'] = $this->input->post('status_berita_pkl');
            $data['STATUS_PENYERAHAN_TA'] = $this->input->post('status_penyerahan_ta');
            $data['STATUS_PENYERAHAN_PKL'] = $this->input->post('status_penyerahan_pkl');
            $data['STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA'] = $this->input->post('status_daftar_nilai');
            $data['STATUS_VALIDASI'] = $this->input->post('status_validasi_berkas');
			
            if ($data['STATUS_VALIDASI']=="TIDAK VALID"){
            $status_mahasiswa_alumni['STATUS_MAHASISWA']='Mahasiswa';
            $data['TGL_YUDISIUM'] = "";
            }else if ($data['STATUS_VALIDASI']=="VALID"){
            $status_mahasiswa_alumni['STATUS_MAHASISWA']='Mahasiswa';
            $data['TGL_YUDISIUM'] = date("Y-m-d");
            }
            //$data['foto_mobil'] = $this->input->post('email');
            $nim=$this->input->post('nim');
            $this->Yudisium_model->update_data_yudisium_mahasiswa($nim, $data); //memakai fungsi update_mobil pada model mobil di model
            $this->Yudisium_model->update_data_status_mahasiswa($nim, $status_mahasiswa_alumni); //memakai fungsi update_mobil pada model mobil di model
            redirect(site_url('modul5/Yudisium/data_yudisium'));
        }


        public function cetak_pendaftaran_yudisium(){
            $data['NIM']=$_SESSION['codeUser'];
            $data['data_form_yudisium_mahasiswa'] = $this->Yudisium_model->select_data_form_yudisium_mahasiswa($data)->row();
            $data['data_ketua_prodi_mif'] = $this->Yudisium_model->select_ketua_prodi_mif()->row();

            $this->load->view('modul5/mahasiswa/yudisium/cetak_form_pendaftaran_yudisium', $data); //untuk menampilkan form edit mobil}
        }

        
        public function grafik_data_yudisium(){
            $tahun_sekarang=date("Y");
            $tahun_pertama=$tahun_sekarang-4;
            $tahun_kedua=$tahun_sekarang-3;
            $tahun_ketiga=$tahun_sekarang-2;
            $tahun_keempat=$tahun_sekarang-1;
            $tahun_kelima=$tahun_sekarang;

            $data['report_belum1'] = $this->Yudisium_model->graph_belum_yudisium($tahun_pertama);
            $data['report_belum2'] = $this->Yudisium_model->graph_belum_yudisium($tahun_kedua);
            
            $data['report_belum3'] = $this->Yudisium_model->graph_belum_yudisium($tahun_ketiga);
            $data['report_belum4'] = $this->Yudisium_model->graph_belum_yudisium($tahun_keempat);
            $data['report_belum5'] = $this->Yudisium_model->graph_belum_yudisium($tahun_kelima);
            //echo $data['report_belum1'];
            $data['report_sudah1'] = $this->Yudisium_model->graph_sudah_yudisium($tahun_pertama);
            $data['report_sudah2'] = $this->Yudisium_model->graph_sudah_yudisium($tahun_kedua);
            $data['report_sudah3'] = $this->Yudisium_model->graph_sudah_yudisium($tahun_ketiga);
            $data['report_sudah4'] = $this->Yudisium_model->graph_sudah_yudisium($tahun_keempat);
            $data['report_sudah5'] = $this->Yudisium_model->graph_sudah_yudisium($tahun_kelima);
            $this->render_page('modul5/dosen/data/yudisium/grafik_data_yudisium',$data); //untuk menampilkan form edit mobil}
        }
    }
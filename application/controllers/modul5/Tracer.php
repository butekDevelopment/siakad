    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Tracer extends MY_Controller {  
    	function __construct(){
        parent::__construct();
        $this->load->model('m_datamahasiswa');
        $this->load->library('form_validation');
        }

		public function daftar_tracer(){    
        $data['NIM']=$_SESSION['codeUser'];
        $data['data_tracer']  = $this->m_datamahasiswa->check_status_upload_tracer($data)->row();
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
        $this->load->view('mahasiswa/footer', $data);
        $this->render_page('modul5/v_validasi_statusmahasiswa',$data); //render_page ada di file MYController di folder CORE 
		}
		
        public function daftar_yudisium_error(){ 
        $data['NIM']=$_SESSION['codeUser'];
        $data['data_yudisium']  = $this->m_datamahasiswa->check_status_upload($data)->row();
		
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/sidebar', $data);
        $this->load->view('mahasiswa/footer', $data);
        $this->render_page('modul5/v_validasi_statusmahasiswa',$data); //render_page ada di file MYController di folder CORE 

        }
   
        public function proses_daftar_tracer(){
            $data['NIM']=$_SESSION['codeUser'];
            $data_studytracer= $this->m_datamahasiswa->check_status_upload_tracer($data)->row();
            $num_data_studytracer = count($data_studytracer);
            if(!$num_data_studytracer==1){ //jika belum pernah input
                $this->m_datamahasiswa->insert_daftar_tracer($data);
            }else{
                $nim=$_SESSION['codeUser'];
                 $this->db->where('NIM',$nim);
             $query = $this->db->get('temp_mahasiswa');
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
            
            if (!$this->upload->do_upload('file_validasialumni')){
                
                $file_validasialumni= $_FILES['file_validasialumni']['name'] ;  //nama array [kolom] [type format]
                if($file_validasialumni==''){
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
                $file_validasialumni= $upload_data1['upload_data1']['file_name'];   //nama array [kolom] [type format]
                //echo $file_khs1;
                
                    $error1=2;
                    unlink("./assets/img/yudisium/$file_validasialumni");
                
            }


            if($error1==0 && $error2==0 && $error3==0 && $error4==0 && $error5==0 && $error6==0 && $error7==0 && $error8==0 && $error9==0 && $error10==0 && $error11==0 && $error12==0 && $error13==0){
                redirect(site_url('modul5/v_validasi_statusmahasiswa'));
            }else if ($error1==1 || $error2==1 || $error3==1 || $error4==1 || $error5==1 || $error6==1 || $error7==1 || $error8==1 || $error9==1 || $error10==1 || $error11==1 || $error12==1 || $error13==1){
                $data['NIM']=$_SESSION['codeUser'];
                $data['data_tracer']  = $this->m_datamahasiswa->check_status_upload($data)->row();
                $error = array('error'=>'format file salah harus format png/jpg/jpeg');
                $data1['headernya'] = $this->load->view('template/header', $data, TRUE);
                $data1['contentnya'] = $this->load->view('modul5/v_validasi_statusmahasiswa', $error, TRUE);
                $data1['footernya'] = $this->load->view('template/footer', $data, TRUE);
                $this->load->view('template/index', $data1);
                //this->load->view('mahasiswa/yudisium/daftar_yudisium', $error,TRUE);
                 return;
            }else if($error1==2){
                $this->upload->do_upload('file_validasialumni');
                unlink("./assets/img/yudisium/$row->file_validasialumni");
                $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $data['File_bukti_alumni']                          = $upload_data1['upload_data1']['file_name'];   //nama array [kolom] [type format]
                $data['Status_bukti_alumni']                          = "MENUNGGU KONFIRMASI";
            }
                $this->m_datamahasiswa->update_daftar_yudisium($nim,$data);
            }     
        }

        //UNTUK ADMIN
        public function data_yudisium(){    
        $data['data_mahasiswa']  = $this->m_datamahasiswa->select_all_mahasiswa()->result();
        $this->render_page('modul5/dosen/data/yudisium/data_yudisium',$data); //render_page ada di file MYController di folder CORE 
        }


        public function edit_data_yudisium($nim){
        $data['data_yudisium_mahasiswa'] = $this->m_datamahasiswa->select_by_id_yudisium($nim)->row();
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
            $status_mahasiswa_alumni['STATUS_MAHASISWA']='Alumni';
            $data['TGL_YUDISIUM'] = date("Y-m-d");
            }
            //$data['foto_mobil'] = $this->input->post('email');
            $nim=$this->input->post('nim');
            $this->m_datamahasiswa->update_data_yudisium_mahasiswa($nim, $data); //memakai fungsi update_mobil pada model mobil di model
            $this->m_datamahasiswa->update_data_status_mahasiswa($nim, $status_mahasiswa_alumni); //memakai fungsi update_mobil pada model mobil di model
            redirect(site_url('modul5/Yudisium/data_yudisium'));
        }
		
		//UNTUK ADMIN
        public function data_tracer(){    
        $data['data_mahasiswa']  = $this->m_datamahasiswa->select_all_mahasiswa()->result();
        $this->render_page('modul5/dosen/data/tracer/data_tracer',$data); //render_page ada di file MYController di folder CORE 
        }

        public function cari_data_tracer(){    
        $tahun  = $this->input->post('tahun');
        $status = $this->input->post('status');
        $data['data_mahasiswa']  = $this->m_datamahasiswa->select_all_mahasiswa_cari($tahun,$status);
        $this->render_page('modul5/dosen/data/tracer/data_tracer',$data); //render_page ada di file MYController di folder CORE 
        }
		
		public function edit_data_tracer($nim){
        $data['data_tracer_mahasiswa'] = $this->m_datamahasiswa->select_by_id_tracer($nim)->row();
        $this->render_page('modul5/dosen/data/tracer/form_edit_tracer', $data); //untuk menampilkan form edit mobil}
        }
		
		public function proses_edit_data_tracer(){
            $data['Status_bukti_alumni'] = $this->input->post('Status_bukti_alumni');
			
            if ($data['Status_bukti_alumni']=="MENUNGGU KONFIRMASI"){
            $status_mahasiswa_alumni['STATUS_MAHASISWA']='Mahasiswa';
            $data['Status_bukti_alumni'] = "MENUNGGU KONFIRMASI";
            }else if ($data['Status_bukti_alumni']=="TERVERIFIKASI"){
            $status_mahasiswa_alumni['STATUS_MAHASISWA']='Alumni';
            $data['Status_bukti_alumni'] = "TERVERIFIKASI";
            }
            //$data['foto_mobil'] = $this->input->post('email');
            $nim=$this->input->post('nim'); 
			$this->m_datamahasiswa->update_data_mahasiswa($nim, $data); //memakai fungsi update_mobil pada model mobil di model
            $this->m_datamahasiswa->update_data_status_mahasiswa($nim, $status_mahasiswa_alumni); //memakai fungsi update_mobil pada model mobil di model
            redirect(site_url('modul5/tracer/data_tracer'));
        }

    }
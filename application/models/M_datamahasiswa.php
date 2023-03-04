<?php 

class M_datamahasiswa extends CI_Model{	
	public function view_by($nim){	
		$this->db->select("*");
		$this->db->from("mahasiswa");
		$this->db->where("NIM",$nim);
		$query = $this->db->get();
		return $query;
		//$this->db->where('nama_mahasiswa',$nim);
		//return $this->db->get('mahasiswa');
	}		
	
	function check_status_upload_tracer($data){
        $this->db->select('*');
        $this->db->from('temp_mahasiswa');
        $this->db->where('NIM', $data['NIM']);
        return $this->db->get(); 
    }
	
	function update_daftar_yudisium($nim,$data){ 
            
            //PROSES update KE DATABASE
            $this->db->where('NIM', $nim);
            $this->db->update('temp_mahasiswa', $data);
            redirect(site_url('modul5/tracer/daftar_tracer'));         
    }
	
	function insert_daftar_tracer($data){ 
            $config['upload_path'] = './assets/img/yudisium/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width'] = '2048';
            $config['max_height'] = '1536';
           
            $this->load->library('upload', $config);
			
            if (!$this->upload->do_upload('file_validasialumni')){
            }else{
                $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $data['File_bukti_alumni']                          = $upload_data1['upload_data1']['file_name'];   //nama array [kolom] [type format]
                $data['Status_bukti_alumni']                          = "MENUNGGU KONFIRMASI";
            }

            //PROSES INSERT KE DATABASE
            $this->db->insert('temp_mahasiswa', $data);
            redirect(site_url('modul5/tracer/daftar_tracer'));
        }
	
	function cek_datastudytracer($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	function select_data_form_yudisium_mahasiswa($data){        
        $this->db->select('*');
        $this->db->from('tb_yudisium');
        $this->db->join("mahasiswa", "tb_yudisium.NIM = mahasiswa.NIM",'inner');
        $this->db->where('tb_yudisium.NIM', $data['NIM']);
        return $this->db->get();
    }
	
    function select_all_mahasiswa(){        
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join("tb_yudisium", "tb_yudisium.NIM = mahasiswa.NIM",'inner');
        $this->db->join("temp_mahasiswa", "temp_mahasiswa.NIM = mahasiswa.NIM",'inner');
        return $this->db->get(); 
    }
	
	function select_all_mahasiswa_cari($tahun,$status){        
        $data = $this->db->query("SELECT * from mahasiswa m inner join tb_yudisium y on m.NIM=y.NIM where m.Status_mahasiswa='$status' and y.Angkatan='$tahun'");
            return $data->result();
    }
	
	function select_by_id_tracer($nim){        
        $this->db->select('*');
        $this->db->from('temp_mahasiswa');
        $this->db->where('NIM', $nim);
        return $this->db->get();
    }
       
	function update_data_mahasiswa($nim, $data){
        $this->db->where('NIM', $nim);
        $this->db->update('temp_mahasiswa', $data);
    }
	
    function update_data_status_mahasiswa($nim, $data){
        $this->db->where('NIM', $nim);
        $this->db->update('mahasiswa', $data);
    }
}
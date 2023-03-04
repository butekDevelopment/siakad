<?php
class Yudisium_model extends CI_Model {
    function __construct(){
        parent::__construct();  
    }
    
    function check_status_upload($data){
        $this->db->select('*');
        $this->db->from('tb_yudisium');
        $this->db->where('NIM', $data['NIM']);
        return $this->db->get(); 
    }

	function update_data_yudisium_text($nim, $data){
        $this->db->where('NIM', $nim);
        $this->db->update('tb_yudisium', $data);
    }
		
    function insert_daftar_yudisium($data){ 
            $config['upload_path'] = './assets/img/yudisium/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width'] = '2048';
            $config['max_height'] = '1536';
           
            $this->load->library('upload', $config);
			
			$data['Angkatan'] = $this->input->post('Angkatan');
			$data['IP_SMT1'] = $this->input->post('t_ip1');
			$data['IP_SMT2'] = $this->input->post('t_ip2');
			$data['IP_SMT3'] = $this->input->post('t_ip3');
			$data['IP_SMT4'] = $this->input->post('t_ip4');
			$data['IP_SMT5'] = $this->input->post('t_ip5');
			$data['IP_SMT6'] = $this->input->post('t_ip6');
			
            if (!$this->upload->do_upload('file_khs1')){
            }else{
                $upload_data1 = array('upload_data1' => $this->upload->data()); //memaksukkan data file ke upload_data1
                $data['FILE_KHS1']                          = $upload_data1['upload_data1']['file_name'];   //nama array [kolom] [type format]
                $data['STATUS_KHS1']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_khs2')){

            }else{
                $upload_data2 = array('upload_data2' => $this->upload->data());
                $data['FILE_KHS2']                          = $upload_data2['upload_data2']['file_name'];
                $data['STATUS_KHS2']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_khs3')){
            }else{
                $upload_data3 = array('upload_data3' => $this->upload->data());
                $data['FILE_KHS3']                          = $upload_data3['upload_data3']['file_name'];
                $data['STATUS_KHS3']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_khs4')){
            }else{
                $upload_data4 = array('upload_data4' => $this->upload->data());
                $data['FILE_KHS4']                          = $upload_data4['upload_data4']['file_name'];
                $data['STATUS_KHS4']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_khs5')){
            }else{
                $upload_data5 = array('upload_data5' => $this->upload->data());
                $data['FILE_KHS5']                          = $upload_data5['upload_data5']['file_name'];
                $data['STATUS_KHS5']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_khs6')){
            }else{
                $upload_data6 = array('upload_data6' => $this->upload->data());
                $data['FILE_KHS6']                          = $upload_data6['upload_data6']['file_name'];
                $data['STATUS_KHS6']                          = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_surat_tanggungan')){
            }else{
                $upload_data7 = array('upload_data7' => $this->upload->data());
                $data['FILE_SURAT_BEBAS_TANGGUNGAN']        = $upload_data7['upload_data7']['file_name'];
                $data['STATUS_SURAT_BEBAS_TANGGUNGAN']        = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_bukti_spp')){
            }else{
                $upload_data8 = array('upload_data8' => $this->upload->data());
                $data['FILE_SPP']                           = $upload_data8['upload_data8']['file_name'];
                $data['STATUS_SPP']                           = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_berita_ta')){
            }else{
                $upload_data9 = array('upload_data9' => $this->upload->data());
                $data['FILE_BERITA_ACARA_TA']               = $upload_data9['upload_data9']['file_name'];
                $data['STATUS_BERITA_ACARA_TA']               = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_berita_pkl')){
            }else{
                $upload_data10 = array('upload_data10' => $this->upload->data());
                $data['FILE_BERITA_ACARA_PKL']              = $upload_data10['upload_data10']['file_name'];
                $data['STATUS_BERITA_ACARA_PKL']              = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_penyerahan_ta')){
            }else{
                $upload_data11 = array('upload_data11' => $this->upload->data());
                $data['FILE_PENYERAHAN_TA']                 = $upload_data11['upload_data11']['file_name'];
                $data['STATUS_PENYERAHAN_TA']                 = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_penyerahan_pkl')){
            }else{
                $upload_data12 = array('upload_data12' => $this->upload->data());
                $data['FILE_PENYERAHAN_PKL']                = $upload_data12['upload_data12']['file_name'];
                $data['STATUS_PENYERAHAN_PKL']                = "MENUNGGU KONFIRMASI";
            }

            if (!$this->upload->do_upload('file_daftar_nilai')){
            }else{
                $upload_data13 = array('upload_data13' => $this->upload->data());
                $data['FILE_KONSEP_DAFTAR_NILAI_SEMENTARA'] = $upload_data13['upload_data13']['file_name'];
                $data['STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA'] = "MENUNGGU KONFIRMASI";
            }

            $data['STATUS_VALIDASI']='TIDAK VALID';
            //PROSES INSERT KE DATABASE
            $this->db->insert('tb_yudisium', $data);
            redirect(site_url('modul5/Yudisium/daftar_yudisium'));
        }

        function update_daftar_yudisium($nim,$data){ 
            
            //PROSES update KE DATABASE
            $this->db->where('NIM', $nim);
            $this->db->update('tb_yudisium', $data);
            redirect(site_url('modul5/Yudisium/daftar_yudisium')); 
            
        }

        function select_all_mahasiswa(){        
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join("tb_yudisium", "tb_yudisium.NIM = mahasiswa.NIM",'inner');
        return $this->db->get(); 
        }

        function select_all_mahasiswa_cari($tahun,$status){        
        $data = $this->db->query("SELECT * from mahasiswa m inner join tb_yudisium y on m.NIM=y.NIM where m.Status_mahasiswa='$status' and y.Angkatan='$tahun'");
            return $data->result();
        }

        function select_by_id_yudisium($nim){        
        $this->db->select('*');
        $this->db->from('tb_yudisium');
        $this->db->where('NIM', $nim);
        return $this->db->get();
        }

        function update_data_yudisium_mahasiswa($nim, $data){
        $this->db->where('NIM', $nim);
        $this->db->update('tb_yudisium', $data);
        }

        function update_data_status_mahasiswa($nim, $data){
        $this->db->where('NIM', $nim);
        $this->db->update('mahasiswa', $data);
        }

        function select_data_form_yudisium_mahasiswa($data){        
        $this->db->select('*');
        $this->db->from('tb_yudisium');
        $this->db->join("mahasiswa", "tb_yudisium.NIM = mahasiswa.NIM",'inner');
        $this->db->join("tb_ta", "tb_yudisium.NIM = tb_ta.NIM",'inner');
        $this->db->join("tb_pkl", "tb_yudisium.NIM = tb_pkl.NIM",'inner');
        $this->db->join("tb_nilai_khs", "tb_yudisium.NIM = tb_nilai_khs.NIM",'inner');
        $this->db->join("tb_nilai_ta", "tb_yudisium.NIM = tb_nilai_ta.NIM",'inner');
        $this->db->where('tb_mahasiswa.NIM', $data['NIM']);
        return $this->db->get();
        }

        function select_ketua_prodi_mif(){        
        $this->db->select('*');
        $this->db->from('tb_dosen');
        $this->db->where('STATUS', 'Ketua Prodi MIF');
        return $this->db->get();
        }

        public function graph_belum_yudisium($tahun)
		{
			$data = $this->db->query("SELECT COUNT(m.status_mahasiswa) as nilai from mahasiswa m inner join tb_yudisium y on m.NIM=y.NIM where m.status_mahasiswa='Mahasiswa' and y.Angkatan='$tahun'");
			return $data->result();
		}

		 public function graph_sudah_yudisium($tahun)
		{
			$data = $this->db->query("SELECT COUNT(m.status_mahasiswa) as nilai from mahasiswa m inner join tb_yudisium y on m.NIM=y.NIM  where m.status_mahasiswa='Alumni' and y.Angkatan='$tahun'");
			return $data->result();
		}

    }

?>
<?php
class Text_yudisium extends CI_Model {
    function __construct(){
        parent::__construct();  
    }
    

        function update_daftar_yudisium($nim,$data){ 
            
            //PROSES update KE DATABASE
            $this->db->where('NIM', $nim);
            $this->db->update('tb_yudisium', $data);
            redirect(site_url('modul5/Yudisium/daftar_yudisium')); 
            
        }
}
?>
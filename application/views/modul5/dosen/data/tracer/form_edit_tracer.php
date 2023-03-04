
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-wrapper">

<section class="content">
	<div class="box">
	<div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
		
          <center><h3>Validasi Data Akses Mahasiswa menjadi Alumni</h3>
                <?php echo form_open_multipart('modul5/Tracer/proses_edit_data_tracer');?>
                <b>Perubahan akses mahasiswa menjadi alumni</b><hr>
                <table border="1" width="800px" class="table table-bordered table-striped table-hover">
                    <tr>
                    <td><b>File Bukti menjadi Alumni</b></td>
                    <td><b>Status : 
                        <select name="Status_bukti_alumni">
                        <?php  
                        if($data_tracer_mahasiswa->Status_bukti_alumni==""){
                           echo "<option value=''></option>";
                        }else if($data_tracer_mahasiswa->Status_bukti_alumni=="MENUNGGU KONFIRMASI"){
                           echo "<option value='MENUNGGU KONFIRMASI' selected>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI'>TERVERIFIKASI</option>";
                        }else if($data_tracer_mahasiswa->Status_bukti_alumni=="TERVERIFIKASI"){
                           echo "<option value='MENUNGGU KONFIRMASI'>MENUNGGU KONFIRMASI</option>"; 
                           echo "<option value='TERVERIFIKASI' selected>TERVERIFIKASI</option>";
                        }
                        ?>
                        </select>
                        </b>
                    </td>
                    <td><b>
                        <?php if(!$data_tracer_mahasiswa->File_bukti_alumni==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_tracer_mahasiswa->File_bukti_alumni."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                </table>
                <input type="hidden" name="nim" value="<?php echo $data_tracer_mahasiswa->NIM;?>" />
                <input type="submit" value="DATA VALID" class="btn btn-success"/><br><br>
				</center>
            
        </div>
      </div>
</section>
<!-- End Content Section  -->


</div>

<?php $this->load->view('administrasi/footer') ?>



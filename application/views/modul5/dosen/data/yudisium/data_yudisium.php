
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
          <center><h3>Validasi Data Yudisium</h3></center><hr>
    <div class="box-body" style="border:1px; #dedede double;width:auto; height:350px;overflow-y:scroll;overflow-x:scroll;">
          <?php echo form_open_multipart('modul5/Yudisium/cari_data_yudisium');?>
          <table>
                <tr>
                    <td>Tahun Angkatan</td>
                    <td width="20"></td>
                    <td>
                        <?php

                        echo "<select name='tahun'>";
                        $tahun=2003;
                        $tahun_sekarang=date("Y");
                        for ($i=$tahun; $i<=$tahun_sekarang ; $i++)
                        echo "<option value=$i>$i<br>";
                        echo "</option></select>";

                        ?>
                    </td>
                    <td width="20"></td>
                    <td>Status</td>
                    <td width="20"></td>
                    <td>
                        <select name="status">
                        <option value='Mahasiswa'>Belum Yudisium</option>"; 
                        <option value='Alumni'>Sudah Yudisium</option>";
                        </select>
                    </td>
                    <td width="20"></td>
                    <td>
                        <input type='submit' value='Cari' />
                    </td>
                </tr>
          </table>
          <br>
          
            

          <div class="table-responsive">
            <center>
            <table border="1" class="table table-bordered table-striped table-hover">
                <tr align="center" height="40">
                <td><u>No</u></td>
                <td><u>Nim</u></td>
                <td><u>Nama</u></td>
                <td><u>Prodi</u></td>
                <td><u>Tahun Angkatan</u></td>
                <td><u>Status</u></td>
                <td>Aksi</td>
                </tr>
            <?php 
            $i=1;
            foreach ($data_mahasiswa as $data) {?>
                <tr bgcolor='#FFFFFF' align='center' height='30'  id='tabel'>
                    <td><?php echo $i?></td>
                    <td><?php echo $data->NIM?></td>
                    <td><?php echo $data->nama_mahasiswa?></td>
                    <td><?php echo $data->program_studi?></td>
                    <td><?php echo $data->Angkatan?></td>
                    <td><?php if($data->STATUS_VALIDASI=='TIDAK VALID'){
                        echo 'Belum Yudisium';
                    }elseif($data->STATUS_VALIDASI=='VALID'){
                        echo 'Sudah Yudisium';
                    }
                    ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('modul5/Yudisium/edit_data_yudisium/'.$data->NIM);?>">Edit</a>
                    </td>
                </tr>
            <?php 
            $i++; } 
            ?>
            </tr>
            </table>
           </center>
        </div>
		</div>
	</div>
</section>
<!-- End Content Section  -->

</div>

<?php $this->load->view('administrasi/footer') ?>
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Verifikasi Sempro
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<!-- Main content -->
        <div class="container">
        <table class="table table-hover">
        <thead>
        <tr>
           <td><strong>No</strong></td>
           <td><strong>NIM</strong></td>
           <td><strong>Nama Mahasiswa</strong></td>
           <td><strong>Judul Tugas Akhir</strong></td>
        </tr> 
        </thead>
        <tbody>
           <?php
             $no = 1; 
             foreach($mhs as $mhsSempro){
           ?>
           <tr>
               <td><?=$no++;?></td>
               <td><?=$mhsSempro->NIM;?></td>
               <td><?=$mhsSempro->nama_mahasiswa;?></td>
               <td><?=$mhsSempro->judul_TA;?></td>
               <td>
                <div>
                    <a href="<?php echo site_url("admin/c_versempro/konfirmasi/".$mhsSempro->NIM); ?>" class="btn btn-primary">Konfirmasi</a>
                </div>
               </td>
        </tr>
        </tbody>     
      <?php }?>  
    </table>
</div>
</section><!-- /.content -->

<!--?php 
//$this->load->view('administrasi/js');
?-->
<!--tambahkan custom js disini-->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

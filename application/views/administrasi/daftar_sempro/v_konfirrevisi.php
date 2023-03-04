
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifikasi Seminar Proposal
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/c_admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
          <div class="section">
          <div class="col-md-12">
          <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_revisi->NIM; ?>">
          </div>
          <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_revisi->nama_mahasiswa; ?>">
          </div>
          <div class="form-group">
                        <label>Judul Tugas Akhir</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_revisi->judul_TA; ?>">
          </div>
          <div class="form-group">
                        <label>Status berkas revisi sempro</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                          if (empty($detail_revisi->berkas_revisi))
                          {
                            echo "Berkas belum terupload";
                          }
                          else
                          {
                            echo "Berkas terupload";
                          }
                         ?>">
          </div>
          <div class="form-group">
            <!-- <div class="col-md-3 col-md-offset-3"> -->
              <a href="<?php echo site_url('admin/daftar_sempro/c_versempro/revsempro_acc/'.$detail_revisi->NIM); ?> " class="btn btn-danger">Konfirmasi</a>
              <a class="btn btn-danger modal-trigger" data-target="modal21">Cek Berkas</a>
              <a href="<?php echo site_url('admin/daftar_sempro/c_versempro'); ?> " class="btn btn-danger">Tolak</a>              
        <!--   </div> -->
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--?php $this->load->view('administrasi/footer') ?-->
</body>
</html>

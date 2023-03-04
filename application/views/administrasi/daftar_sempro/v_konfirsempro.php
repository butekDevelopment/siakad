
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
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_sempro->NIM; ?>">
          </div>
          <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_sempro->nama_mahasiswa; ?>">
          </div>
          <div class="form-group">
                        <label>Judul Tugas Akhir</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_sempro->judul_TA; ?>">
          </div>
          <div class="form-group">
                        <label>Dosen Pembimbing 1</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_sempro->nm_dosen; ?>">
          </div>
          <div class="form-group">
                        <label>Berkas Kelengkapan Sempro</label>
                        <br>
                        <a class="btn btn-danger modal-trigger" data-target="modal29">Proposal TA</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal30">Kartu Kendali</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal31">Kartu Kendali Tahun Lalu</a>
                        <br>
                        <br>
                        <a class="btn btn-danger modal-trigger" data-target="modal32">Makalah</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal33">Berita Acara</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal34">Lembar Pengusulan TA</a>
                        <br>
                        <br>
                        <a class="btn btn-danger modal-trigger" data-target="modal35">Lembar Revisi</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal36">Lembar Hasil Sempro</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal37">Daftar Hadir</a>
                        <br>
                        <br>
                        <a class="btn btn-danger modal-trigger" data-target="modal38">Lembar Pengesahan</a>
                        <a class="btn btn-danger modal-trigger" data-target="modal39">Kartu Kontrak DP</a>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
                                <div class="col-md-7 col-md-offset-5">
                                <?php 
                                if (empty($detail_sempro->proposal_TA) || empty($detail_sempro->kartu_kendali) || empty($detail_sempro->kk_senpro_lalu) || empty($detail_sempro->makalah) || empty($detail_sempro->lembar_berita_acara) || empty($detail_sempro->lembar_pengusulan) || empty($detail_sempro->lembar_revisi) || empty($detail_sempro->lembar_hasil_senpro) || empty($detail_sempro->lembar_daftar_hadir) || empty($detail_sempro->lembar_pengesahan) || empty($detail_sempro->kartu_kontrak_DP))
                                {
                                  echo "<a href='".site_url('admin/daftar_sempro/c_versempro/sempro_acc/').$detail_sempro->NIM."' class='btn btn-success' disabled=''>Konfirmasi</a>";
                                }
                                else
                                {
                                  echo "<a href='".site_url('admin/daftar_sempro/c_versempro/sempro_acc/').$detail_sempro->NIM."' class='btn btn-success'>Konfirmasi</a>";
                                }
                               ?>
                                <!-- <a href="<?php //echo site_url("admin/daftar_sempro/c_versempro/sempro_acc/".$detail_sempro->NIM); ?> " class="btn btn-success">Konfirmasi</a> -->
                                <a href="<?php echo site_url('admin/daftar_sempro/c_versempro'); ?> " class="btn btn-danger">Tolak</a>
          </div>
          </div>
          </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

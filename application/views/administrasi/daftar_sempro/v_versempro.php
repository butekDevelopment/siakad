
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
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar peserta sempro</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>Nomer</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Judul Tugas Akhir</th>
                  <th>Aksi</th>
                </tr>
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
                          <a href="<?php echo site_url("admin/daftar_sempro/c_versempro/konfirmasi/".$mhsSempro->NIM); ?>" class="btn btn-primary">Konfirmasi</a>
                      </div>
                     </td>
                </tr>     
                <?php }?>
             
              </table>
            </div>
            <!-- /.box-body -->
          <!-- /.box -->

          <div class="box">
            
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar revisi sempro</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
               
                <tr>
                  <th>Nomer</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Judul Tugas Akhir</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                  <?php
                   $no = 1; 
                   foreach($revisi as $mhsrevisi){
                  ?>
                 <tr>
                     <td><?=$no++;?></td>
                     <td><?=$mhsrevisi->NIM;?></td>
                     <td><?=$mhsrevisi->nama_mahasiswa;?></td>
                     <td><?=$mhsrevisi->judul_TA;?></td>
                     <td>
                       <?php 
                          if (empty($mhsrevisi->berkas_revisi))
                          {
                            echo "Belum upload revisi";
                          }
                          else
                          {
                            echo "Sudah upload revisi";
                          }
                         ?>
                     </td>
                     <td>
                      <?php 
                          if (empty($mhsrevisi->berkas_revisi))
                          {
                            echo "<a href='".site_url('admin/daftar_sempro/c_versempro/knfr_revsempro/').$mhsrevisi->NIM."' class='btn btn-success' disabled=''>Cek Mahasiswa</a>";
                          }
                          else
                          {
                            echo "<a href='".site_url('admin/daftar_sempro/c_versempro/knfr_revsempro/').$mhsrevisi->NIM."' class='btn btn-success' >Cek Mahasiswa</a>";
                          }
                         ?>
                     </td>
                </tr>     
                <?php }?>
             
              </table>
            </div>
            <!-- /.box-body -->
          <!-- /.box -->

          <div class="box">
            
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

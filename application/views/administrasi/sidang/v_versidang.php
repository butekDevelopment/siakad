
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
        DATA MAHASISWA PENDAFTARAN TUGAS AKHIR
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
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                      <tr>
                         <td>No</td>
                         <td>NIM</td>
                         <td>Nama Mahasiswa</td>
                         <td>Judul Tugas Akhir</td>
                      </tr>
                         <?php
                           $no = 1; 
                           foreach($mhs as $mhsSidang){
                         ?>
                          <tr>
                             <td><?=$no++;?></td>
                             <td><?=$mhsSidang->NIM;?></td>
                             <td><?=$mhsSidang->nama_mahasiswa;?></td>
                             <td><?=$mhsSidang->judul_TA;?></td>
                             <td>
                              <div>
                                  <a href="<?php echo site_url("admin/sidang/c_versidang/konfirmasi/".$mhsSidang->NIM); ?>" class="btn btn-primary">Konfirmasi</a>
                              </div>
                             </td>
                          </tr>
                           
                    <?php }?>  
                  </table>
                </div>
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

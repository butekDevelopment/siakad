
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
        Daftar Nama Mahasiswa
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
                  <th>Nomer</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Judul Tugas Akhir</th>
                  <th>Verifikasi</th>
                </tr>
            
               
                <tr>
                  <td>1</td>
                  <td>E31150535</td>
                  <td>Fitri Nur Aini</td>
                  <td>Sistem Informasi</td>
                  <td> <a href="<?php echo base_url('admin/c_admin/load_mhs'); ?>" class="btn btn-sm btn-info btn-flat pull-left">Pilih</a></td>
                </tr>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            
            <!-- /.box-header -->
          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

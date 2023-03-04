
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
        Verifikasi Berkas TA
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
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Judul</th>
                  <th>Status</th>
                  <th>Verifikasi</th>
                </tr>
                  <?php
                   $no = 1; 
                   foreach($bks as $bksTa){
                  ?>
                 <tr>
                     <td><?=$no++;?></td>
                     <td><?=$bksTa->NIM;?></td>
                     <td><?=$bksTa->nama_mahasiswa;?></td>
                     <td><?=$bksTa->judul_TA;?></td>
                     <td><?php 
                     if (empty($bksTa->beritaAcaraTA) || empty($bksTa->sampul) || empty($bksTa->pengesahanTA) || empty($bksTa->persembahan) || empty($bksTa->motto) || empty($bksTa->pernyataanTA) || empty($bksTa->abstrak) || empty($bksTa->ringkasan) || empty($bksTa->prakata) || empty($bksTa->daftarIsi) || empty($bksTa->daftarTabel) || empty($bksTa->daftarGambar) || empty($bksTa->daftarLampiran) || empty($bksTa->bab1) || empty($bksTa->bab2) || empty($bksTa->bab3) || empty($bksTa->bab4) || empty($bksTa->bab5) || empty($bksTa->daftarPustaka) || empty($bksTa->lampiran)) {
                      echo "Berkas tidak lengkap";
                    }
                    else {
                      echo "Berkas lengkap";
                    }
                    ?></td>
                     <td>
                      <div>
                        <?php 
                     		if (empty($bksTa->beritaAcaraTA) || empty($bksTa->sampul) || empty($bksTa->pengesahanTA) || empty($bksTa->persembahan) || empty($bksTa->motto) || empty($bksTa->pernyataanTA) || empty($bksTa->abstrak) || empty($bksTa->ringkasan) || empty($bksTa->prakata) || empty($bksTa->daftarIsi) || empty($bksTa->daftarTabel) || empty($bksTa->daftarGambar) || empty($bksTa->daftarLampiran) || empty($bksTa->bab1) || empty($bksTa->bab2) || empty($bksTa->bab3) || empty($bksTa->bab4) || empty($bksTa->bab5) || empty($bksTa->daftarPustaka) || empty($bksTa->lampiran)) {
                            echo "<a href='".site_url('admin/upload_berkas/c_verberkas/konfirmasi/').$bksTa->NIM."' class='waves-effect waves-light indigo darken-4 btn btn-primary' disabled=''>Konfirmasi</a>";
                          	}
                          	else {
                            echo "<a href='".site_url('admin/upload_berkas/c_verberkas/konfirmasi/').$bksTa->NIM."' class='waves-effect waves-light indigo darken-4 btn btn-primary'>Konfirmasi</a>";
                          }
                        ?>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

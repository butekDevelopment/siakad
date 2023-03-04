
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
      <div class="container">
          <div class="section">
          <div class="col-md-12">
          <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->NIM; ?>">
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->nama_mahasiswa; ?>">
          </div>
          <div class="form-group">
            <label>Judul Tugas Akhir</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_bks->judul_TA; ?>">
          </div>
          <div class="form-group">
            <label>Status Berkas TA</label>
            <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
              if (empty($detail_bks->beritaAcaraTA) || empty($detail_bks->sampul) || empty($detail_bks->pengesahanTA) || empty($detail_bks->persembahan) || empty($detail_bks->motto) || empty($detail_bks->pernyataanTA) || empty($detail_bks->abstrak) || empty($detail_bks->ringkasan) || empty($detail_bks->prakata) || empty($detail_bks->daftarIsi) || empty($detail_bks->daftarTabel) || empty($detail_bks->daftarGambar) || empty($detail_bks->daftarLampiran) || empty($detail_bks->bab1) || empty($detail_bks->bab2) || empty($detail_bks->bab3) || empty($detail_bks->bab4) || empty($detail_bks->bab5) || empty($detail_bks->daftarPustaka) || empty($detail_bks->lampiran)) {
                echo "Berkas tidak lengkap";
              }
              else {
                echo "Berkas lengkap";
              }
            ?>">
          </div>

      <?php echo form_open_multipart('admin/upload_berkas/C_verberkas'); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td>
              <?php 
              if(empty($detail_bks->beritaAcaraTA)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal1' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal1''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->beritaAcaraTA)) {
                  echo "<input type='checkbox' class='veriBerkasTA filled-in' id='1' disabled=''/><label for='1'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='veriBerkasTA filled-in' id='1' onclick='check();'/><label for='1'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td>
              <?php 
              if(empty($detail_bks->sampul)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal2' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal2''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->sampul)) {
                  echo "<input type='checkbox' class='filled-in' id='2' disabled=''/><label for='2'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='2'/><label for='2'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td>
              <?php 
              if(empty($detail_bks->pengesahanTA)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal3' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal3''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->pengesahanTA)) {
                  echo "<input type='checkbox' class='veriBerkasTA filled-in' id='3' disabled=''/><label for='3'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='veriBerkasTA filled-in' id='3' onclick='check();'/><label for='3'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td>
              <?php 
              if(empty($detail_bks->persembahan)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal4' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal4''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->persembahan)) {
                  echo "<input type='checkbox' class='filled-in' id='4' disabled=''/><label for='4'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='4'/><label for='4'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td>
              <?php 
              if(empty($detail_bks->motto)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal5' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal5''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->motto)) {
                  echo "<input type='checkbox' class='filled-in' id='5' disabled=''/><label for='5'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='5'/><label for='5'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td>
              <?php 
              if(empty($detail_bks->pernyataanTA)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal6' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal6''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->pernyataanTA)) {
                  echo "<input type='checkbox' class='filled-in' id='6' disabled=''/><label for='6'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='6'/><label for='6'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td>
              <?php 
              if(empty($detail_bks->abstrak)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal7' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal7''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->abstrak)) {
                  echo "<input type='checkbox' class='filled-in' id='7' disabled=''/><label for='7'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='7'/><label for='7'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td>
              <?php 
              if(empty($detail_bks->ringkasan)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal8' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal8''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->ringkasan)) {
                  echo "<input type='checkbox' class='filled-in' id='8' disabled=''/><label for='8'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='8'/><label for='8'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td>
              <?php 
              if(empty($detail_bks->prakata)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal9' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal9''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->prakata)) {
                  echo "<input type='checkbox' class='filled-in' id='9' disabled=''/><label for='9'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='9'/><label for='9'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarIsi)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal10' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal10''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarIsi)) {
                  echo "<input type='checkbox' class='filled-in' id='10' disabled=''/><label for='10'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='10'/><label for='10'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarTabel)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal11' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal11''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarTabel)) {
                  echo "<input type='checkbox' class='filled-in' id='11' disabled=''/><label for='11'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='11'/><label for='11'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarGambar)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal12' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal12''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarGambar)) {
                  echo "<input type='checkbox' class='filled-in' id='12' disabled=''/><label for='12'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='12'/><label for='12'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarLampiran)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal13' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal13''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarLampiran)) {
                  echo "<input type='checkbox' class='filled-in' id='13' disabled=''/><label for='13'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='13'/><label for='13'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td>
              <?php 
              if(empty($detail_bks->bab1)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal14' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal14''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab1)) {
                  echo "<input type='checkbox' class='filled-in' id='14' disabled=''/><label for='14'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='14'/><label for='14'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td>
              <?php 
              if(empty($detail_bks->bab2)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal15' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal15''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab2)) {
                  echo "<input type='checkbox' class='filled-in' id='15' disabled=''/><label for='15'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='15'/><label for='15'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td>
              <?php 
              if(empty($detail_bks->bab3)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal16' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal16''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab3)) {
                  echo "<input type='checkbox' class='filled-in' id='16' disabled=''/><label for='16'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='16'/><label for='16'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td>
              <?php 
              if(empty($detail_bks->bab4)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal17' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal17''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab4)) {
                  echo "<input type='checkbox' class='filled-in' id='17' disabled=''/><label for='17'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='17'/><label for='17'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td>
              <?php 
              if(empty($detail_bks->bab5)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal18' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal18''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab5)) {
                  echo "<input type='checkbox' class='filled-in' id='18' disabled=''/><label for='18'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='18'/><label for='18'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarPustaka)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal19' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal19''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarPustaka)) {
                  echo "<input type='checkbox' class='filled-in' id='19' disabled=''/><label for='19'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='19'/><label for='19'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td>
              <?php 
              if(empty($detail_bks->lampiran)) {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal20' disabled=''>Cek File</a>";
              }else {
                  echo "<a class='waves-effect waves-light blue darken-1 btn modal-trigger' data-target='modal20''>Cek File</a>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->lampiran)) {
                  echo "<input type='checkbox' class='filled-in' id='20' disabled=''/><label for='20'>Verifikasi</label>";
              }else {
                  echo "<input type='checkbox' class='filled-in' id='20'/><label for='20'>Verifikasi</label>";
              } 
              ?>
            </td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
        <div class="col s3">*File berupa PDF</div>
        <div class="col s3"></div>
        <div class="col s3">
          <a id="konfirm" href="<?php echo site_url("admin/upload_berkas/C_verberkas/berkas_ta_acc/".$detail_bks->NIM); ?>" class="waves-effect waves-light indigo darken-4 btn btn-success">Konfirmasi</a>
        </div>
        <div class="col s3"><a href="<?php echo site_url('admin/upload_berkas/C_verberkas'); ?> " class="waves-effect waves-light indigo darken-4 btn btn-danger">Tolak</a></div>
      </div>
      <?php echo form_close() ?>

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

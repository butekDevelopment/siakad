
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
       DATA MAHASISWA PASCA SIDANG TUGAS AKHIR
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
                           foreach($ps_sidang as $mhs_psSidang){
                         ?>
                          <tr>
                             <td><?=$no++;?></td>
                             <td><?=$mhs_psSidang->NIM;?></td>
                             <td><?=$mhs_psSidang->nama_mahasiswa;?></td>
                             <td><?=$mhs_psSidang->judul_TA;?></td>
                             <td>
                              <div>
                                   <button type="button" class="btn btn-alert modal-trigger" data-toggle="modal" data-target="inputnilai">Nilai</button>
                              </div>
                             </td>
                          </tr>
                          <div id="inputnilai" class="modal fade" style="width: 700px !important; height: 583px !important;" role="dialog">
                          <div class="modal-content">

                                  <!-- heading modal -->
                                  <div class="modal-header">
                                    
                                    <h4 class="modal-title">Masukkan Nilai</h4>

                               <form class="form-horizontal" method="post" action="<?php echo base_url()."admin/sidang/C_versidang/sNilai/".$mhs_psSidang->id;?>">
                                <div class="modal-body">
                       
                                          <div class="form-group">
                                              <label class="control-label col-xs-3" >Nilai Pembimbing I</label>
                                              <div class="col-xs-8">
                                                  <input name="nilai_bimbingan_dp1" class="form-control" type="text" placeholder="Nilai Pembimbing I x 40%" required>
                                              </div>
                                          </div>
                       
                                          <div class="form-group">
                                              <label class="control-label col-xs-3" >Nilai Pembimbing II</label>
                                              <div class="col-xs-8">
                                                  <input name="nilai_bimbingan_dp2" class="form-control" type="text" placeholder="Nilai Pembimbing II x 30%" required>
                                              </div>
                                          </div>
                       
                                          <div class="form-group">
                                              <label class="control-label col-xs-3" >Nilai Ujian</label>
                                              <div class="col-xs-8">
                                                  <input name="nilai_ujian" class="form-control" type="text" placeholder="Nilai Ujian x 30%" required>
                                              </div>
                                          </div>                       
                                      </div>
                                     <!-- <div class ="form-group">
                                      <input type="text" class="form-control" name="isi" required>
                                      </div>-->
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-danger modal-close" data-dismiss="modal">Tutup</button>
                                        <input type="submit" class="btn btn-success" name="selesai" Value="Selesai"></input>
                                      </div>
                                 
                                  </form>
                          </div>
                        </div> 
                    <?php }?>  
                  </table>
                </div>
                  <div class="box">
                  <table id="example2" class="table table-bordered table-hover">
                      <tr>
                         <td>No</td>
                         <td>NIM</td>
                         <td>Nama Mahasiswa</td>
                         <td>Judul Tugas Akhir</td>
                         <td>Nilai</td>
                      </tr>
                         <?php
                           $no = 1; 
                           foreach($ps_sidang_nilai as $mhs_psSidang){
                         ?>
                          <tr>
                             <td><?=$no++;?></td>
                             <td><?=$mhs_psSidang->NIM;?></td>
                             <td><?=$mhs_psSidang->nama_mahasiswa;?></td>
                             <td><?=$mhs_psSidang->judul_TA;?></td>
                             <td><?=$mhs_psSidang->nilai_total;?></td>
                             <td>
                             <!--  <div>
                                   <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#inputnilai">Nilai</button>
                              </div> -->
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
<script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
</script>
</body>
</html>

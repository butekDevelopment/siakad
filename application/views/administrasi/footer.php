 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/eksternal/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/eksternal/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url(); ?>assets/eksternal/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/eksternal/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/eksternal/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

  <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
  <script>
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
      });
  })(jQuery);
  </script>
  <script>
    $(document).ready(function() {
      Materialize.updateTextFields();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });
  </script>
  <script src="<?php echo base_url('assets/js/jquery.media.js'); ?>"></script>
  <script>
    $(function () {
        $('.media').media({width: 955});
    });
  </script>

  <script>
    document.getElementById("Judul").disabled=true;
  </script>

  <script>
    $(document).ready(function () {
      $('#konfirm').click(function() {
        checked = ($("input[type=checkbox]:checked").length > 19);
        if(!checked) {
          alert("Anda harus memverifikasi semua file berkas TA pada halaman ini.");
          return false;
        }
      });
    });
  </script>
  <div id="modal1" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->beritaAcaraTA=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->beritaAcaraTA."'></a>"; } ?>
    </div>
  </div>

  <div id="modal2" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->sampul=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->sampul."'></a>"; } ?>
    </div>
  </div>

  <div id="modal3" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->pengesahanTA=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->pengesahanTA."'></a>"; } ?>
    </div>
  </div>

  <div id="modal4" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->persembahan=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->persembahan."'></a>"; } ?>
    </div>
  </div>

  <div id="modal5" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->motto=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->motto."'></a>"; } ?>
    </div>
  </div>

  <div id="modal6" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->pernyataanTA=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->pernyataanTA."'></a>"; } ?>
    </div>
  </div>

  <div id="modal7" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->abstrak=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->abstrak."'></a>"; } ?>
    </div>
  </div>

  <div id="modal8" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->ringkasan=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->ringkasan."'></a>"; } ?>
    </div>
  </div>

  <div id="modal9" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->prakata=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->prakata."'></a>"; } ?>
    </div>
  </div>

  <div id="modal10" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->daftarIsi=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->daftarIsi."'></a>"; } ?>
    </div>
  </div>

  <div id="modal11" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->daftarTabel=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->daftarTabel."'></a>"; } ?>
    </div>
  </div>

  <div id="modal12" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->daftarGambar=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->daftarGambar."'></a>"; } ?>
    </div>
  </div>

  <div id="modal13" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->daftarLampiran=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->daftarLampiran."'></a>"; } ?>
    </div>
  </div>

  <div id="modal14" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->bab1=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->bab1."'></a>"; } ?>
    </div>
  </div>

  <div id="modal15" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->bab2=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->bab2."'></a>"; } ?>
    </div>
  </div>

  <div id="modal16" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->bab3=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->bab3."'></a>"; } ?>
    </div>
  </div>

  <div id="modal17" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->bab4=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->bab4."'></a>"; } ?>
    </div>
  </div>

  <div id="modal18" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->bab5=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->bab5."'></a>"; } ?>
    </div>
  </div>

  <div id="modal19" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->daftarPustaka=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->daftarPustaka."'></a>"; } ?>
    </div>
  </div>

  <div id="modal20" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_bks->lampiran=="") { echo "<a class='media' href='".base_url('upload/').$detail_bks->lampiran."'></a>"; } ?>
    </div>
  </div>

  <div id="modal21" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_revisi->berkas_revisi=="") { echo "<a class='media' href='".base_url('upload/revisi_sempro/').$detail_revisi->berkas_revisi."'></a>"; } ?>
    </div>
  </div>

   <div id="modal22" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->khs_semester_1=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->khs_semester_1."'></a>"; } ?>
    </div>
  </div>

  <div id="modal23" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->khs_semester_2=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->khs_semester_2."'></a>"; } ?>
    </div>
  </div>

<div id="modal24" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->khs_semester_3=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->khs_semester_3."'></a>"; } ?>
    </div>
  </div>

  <div id="modal25" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->khs_semester_4=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->khs_semester_4."'></a>"; } ?>
    </div>
  </div>

  <div id="modal26" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->khs_semester_5=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->khs_semester_5."'></a>"; } ?>
    </div>
  </div>

  <div id="modal27" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->laporan_proposal=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->laporan_proposal."'></a>"; } ?>
    </div>
  </div>

  <div id="modal28" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_mhs->bukti_spp_terakhir=="") { echo "<a class='media' href='".base_url('upload/sidang/').$detail_mhs->bukti_spp_terakhir."'></a>"; } ?>
    </div>

    <div id="modal29" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->proposal_TA=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->proposal_TA."'></a>"; } ?>
    </div>

    <div id="modal30" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->kartu_kendali=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->kartu_kendali."'></a>"; } ?>
    </div>

    <div id="modal31" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->kk_senpro_lalu=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->kk_senpro_lalu."'></a>"; } ?>
    </div>

    <div id="modal32" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->makalah=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->makalah."'></a>"; } ?>
    </div>

    <div id="modal33" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_berita_acara=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_berita_acara."'></a>"; } ?>
    </div>

    <div id="modal34" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_pengusulan=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_pengusulan."'></a>"; } ?>
    </div>

    <div id="modal35" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_revisi=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_revisi."'></a>"; } ?>
    </div>

    <div id="modal36" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_hasil_senpro=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_hasil_senpro."'></a>"; } ?>
    </div>

    <div id="modal37" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_daftar_hadir=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_daftar_hadir."'></a>"; } ?>
    </div>

    <div id="modal38" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->lembar_pengesahan=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->lembar_pengesahan."'></a>"; } ?>
    </div>

    <div id="modal39" class="modal" style="width: 1000px !important; height: 453px !important;">
    <div class="modal-content">
      <?php if(!$detail_sempro->kartu_kontrak_DP=="") { echo "<a class='media' href='".base_url('upload/').$detail_sempro->kartu_kontrak_DP."'></a>"; } ?>
    </div>

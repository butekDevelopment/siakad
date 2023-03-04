  <nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa" class="brand-logo">Teknologi Informasi</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="#" data-activates="slide-out" class="button-collapse" style="display: initial !important;"">Menu</a></li>
  </ul>

  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="<?php echo base_url() ?>assets/img/bg.jpg">
      </div>
      <a href="<?php echo base_url(); ?>mahasiswa/Index_mahasiswa"><img class="circle" src="<?php echo base_url() ?>assets/img/logo.png"></a>
      <a href="#!name"><span class="white-text name">Polije | polije.ac.id</span></a>
      <a href="#!email"><span class="white-text email">Hey user, <?php echo $this->session->userdata("codeUser") ?>
    <a href="<?php echo base_url(); ?>index.php/login/logout">Log Out</a>
    </span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/Index_mahasiswa'); ?>">Pengajuan Judul</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/C_sempro'); ?>">Pendaftaran Seminar Proposal</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/C_sidang'); ?>">Pendaftaran Sidang TA</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/C_berkas'); ?>">Upload Berkas TA</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/C_studytracer'); ?>">Pendaftaran Tracer Study</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo base_url('mahasiswa/C_yudisium'); ?>">Pendaftaran Yudisium</a></li>
    <li><div class="divider"></div></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>
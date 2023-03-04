<?php $this->load->view('mahasiswa/header'); ?>
<?php $this->load->view('mahasiswa/sidebar'); ?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h4 class="header center text-center"> <b>Pendaftaran Sidang</b> </h4>
      <h5><p class="text-center"> Status : <b class="text-success"><?php echo $status;?> </b></p></h5><br>
    </div>
  </div>
   <div class="container">
    <div class="card white">
      <div class="card-content">
      <div class="text-center">
        <h6>
          <div class="row text-center" id="data">
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">NIM</label>
                <input type="text" class="form-control text-center" value="<?php echo $this->session->userdata("codeUser");?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Nama</label>
                <input type="text" class="form-control text-center" value="<?php echo $mahasiswa->nama_mahasiswa;?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Judul</label>
                <input type="text" class="form-control text-center" value="<?php echo $mahasiswa->judul_TA;?>" disabled>
              </div>
            </div>
            </div>
          <div class="row text-center" id="penguji">
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Penguji 1</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->ketua;?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Penguji 2</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->sekertaris;?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Penguji 3</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->anggota;?>" disabled>
              </div>
            </div>
            </div>
          <div class="row text-center" id="waktu">
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Pukul</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->jam;?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Hari, Tanggal</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->tanggal;?>" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="black-text">Tempat</label>
                <input type="text" class="form-control text-center" value="<?php echo $penguji->ruangan;?>" disabled>
              </div>
            </div>
            </div>
        </h6>
      </div>
      </div>
    </div>
        </div>
        <?php $this->load->view('mahasiswa/footer'); ?>
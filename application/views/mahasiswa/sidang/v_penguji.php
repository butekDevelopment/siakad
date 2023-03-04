<?php $this->load->view('mahasiswa/header'); ?>
<?php $this->load->view('mahasiswa/sidebar'); ?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <h2 class="header center text-center"> <b>Pendaftaran Sidang</b> </h2>
      <br><br><br>
      <h5><p class="text-center text-info"> Anda Mahasiswa ke-<?php echo $penguji->status_sidang_id_statussidang; ?>, anda berhak menentukan penguji yang datang pada saat sidang</p></h5><br>
    </div>
  </div>
   <div class="container">
    <div class="section center">
      <div class="col-md-offset-3">
      <?php echo form_open("mahasiswa/C_sidang/update_mhs", array('enctype'=>'multipart/form-data')); ?>
      <input type="hidden" value="<?php echo $penguji->status_sidang_id_statussidang; ?>" name="id">
      <div class="col-md-4">
        <div class="form-group">
          <label>Sekertaris</label>
          <select name="sekertaris" class="form-control border-input text-center" required>
            <option disabled selected>Pilih Penguji</option>
            <?php foreach($dosen as $row) { ?>
            <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Anggota</label>
          <select name="anggota" class="form-control border-input text-center" required>
            <option disabled selected>Pilih Penguji</option>
            <?php foreach($dosen as $row) { ?>
            <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="col-md-8">
        <br><br>
      <button class="btn waves-effect waves-light" type="submit">Simpan<i class="material-icons right">send</i></button>
      </div>
      <?php echo form_close() ?>
      </div>
      </div>
        </div>
        </div>
        <?php $this->load->view('mahasiswa/footer'); ?>
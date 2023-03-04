	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran Yudisium</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mendaftar yudisium bagi para mahasiswa Teknologi Informasi</h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <div class="container">
    <div class="section">
	<?php echo form_open("yudisium/tambahdata_berkas_ip", array('enctype'=>'multipart/form-data')); ?>
      <div class="row">
		<div class="input-field col s12">
          <input value="<?php 
			  foreach($mahasiswa->result() as $m)
			  {
			  echo $m->nama_mahasiswa;
			  }
			  ?>" id="nm_mhs" name="nm_mhs" type="text" class="validate" readonly>
          <label class="active" for="nm_mhs">Nama</label>
		</div>
		
		<div class="input-field col s12">
		  <input value="<?php echo $this->session->userdata("nama");?>" id="nim" name="mahasiswa_NIM" type="text" class="validate" readonly="readonly">
          <label class="active" for="nim">NIM</label>
		  
        </div>
		
		<div class="input-field col s12">
          <input value="<?php 
			  foreach($mahasiswa->result() as $m)
			  {
			  echo $m->program_studi;
			  }
			  ?>" id="prodi" name="prodi" type="text" class="validate" disabled>
          <label class="active" for="Judul">Program Studi</label>
		</div>
	</div>
	 <h6>IP MAHASISWA</h6>
	<div class="row">
        <div class="input-field col s2">
          <input value="" id="ipsmt1" name="ipsmt1" type="text" class="validate">
          <label class="active" for="ipsmt1">IP Semester 1</label>
		</div>
		<div class="input-field col s2">
          <input value="" id="ipsmt2" name="ipsmt2" type="text" class="validate">
          <label class="active" for="ipsmt2">IP Semester 2</label>
		</div>
		<div class="input-field col s2">
          <input value="" id="ipsmt3" name="ipsmt3" type="text" class="validate">
          <label class="active" for="nm_mhs">IP Semester 3</label>
		</div>
		<div class="input-field col s2">
          <input value="" id="ipsmt4" name="ipsmt4" type="text" class="validate">
          <label class="active" for="ipsmt4">IP Semester 4</label>
		</div>
		<div class="input-field col s2">
          <input value="" id="ipsmt5" name="ipsmt5" type="text" class="validate">
          <label class="active" for="ipsmt5">IP Semester 5</label>
		</div>
		<div class="input-field col s2">
          <input value="" id="ipsmt6" name="ipsmt6" type="text" class="validate">
          <label class="active" for="ipsmt6">IP Semester 6</label>
		</div>
		
		<div class="input-field col s2">
          <input value="" id="ipk" name="ipk" type="text" class="validate">
          <label class="active" for="ipk">IPK</label>
		</div>
	</div>

	<div class="row"><br><br>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"><input type="submit" name="submit" value="Lanjutkan" class="btn btn-success"></div>
      </div>
	  
	<?php echo form_close(); ?>
	</div>
</div>
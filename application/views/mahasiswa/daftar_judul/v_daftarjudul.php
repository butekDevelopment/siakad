	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran pengajuan judul tugas akhir</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mendaftarkan usul judul tugas akhir </h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <?php
  
  $nim=$this->session->userdata("codeUser");
  $nama=$this->input->post("nama_mahasiswa");
  $prodi=$this->input->post("program_studi");
  $cbodp1=$this->input->post["id_dp1"];
  $dospem2=$this->input->post("dospem2");
  $cborumpun=$this->input->post["id_rumpun"];
  $judul_TA=$this->input->post("judul_TA");
  $deskripsi=$this->input->post["deskripsi"];
  $cbodokumen=$this->input->post["id_dokumen"];
  
  
  if(isset($datamhs))
  {
	  $nama=$datamhs[1];
	  $prodi=$datamhs[2];
	  $cbodp1=$datamhs[3];
	  $dospem2=$datamhs[4];
	  $cborumpun=$datamhs[5];
	  $judul_TA=$datamhs[6];
	  $deskripsi=$datamhs[7];
	  $cbodokumen=$datamhs[8];
	  
	  
  }
  ?>
   <div class="container">
    <div class="section">
	<?php
	if(isset($isedit))
	{
		?>
		
	<form action="<?php echo base_url().'mahasiswa/C_judul/update';?>" method="post" id="form_studytracer">
		<?php
		
	}
	else
	{
		?>
		
	<form action="<?php echo base_url().'mahasiswa/Daftar_judul/save';?>" method="post" id="form_studytracer">
		<?php
	}
	?>
      <div class="row">
		
        <div class="input-field col s12">
          <input value="<?php echo  $nim; ?>" readonly id="nim" name="txt[0] type="text" class="validate" required="required">
			<label class="active" for="nim">Nomer Induk Mahasiswa</label>
		</div>
		
		<div class="input-field col s12">
          <input value="<?php echo $nama; ?>" id="nama_mahasiswa" name="txt[1]" type="text" class="validate" required="required">
          <label class="active" for="nama_mahasiswa">Nama Mahasiswa</label>
		</div>
		<div class="input-field col s12">
          <input value="<?php echo $prodi; ?>" id="program_studi" name="txt[2]" type="text" class="validate" required="required">
          <label class="active" for="program_studi">Program Studi</label>
		</div>

		<div class="form-group">
		<label for="id_dp1" class="col-md-4 control-label">Dosen Pembimbing 1</label>
		<div class="col-md-8">
			<?= $cbodp1?>
		
		</div>
	</div>
		
		<div class="input-field col s12">
          <input value="<?php echo $dospem2; ?>" id="dospem_2" name="txt[4]" type="text" class="validate" required="required">
          <label class="active" for="dospem_2">Dosen Pembimbing 2</label>
		</div>
	<div class="form-group">
		<label for="id_rumpun" class="col-md-4 control-label">Rumpun Mata Kuliah</label>
		<div class="col-md-8">
			<?= $cborumpun?>
			
		</div>
	</div>
		<div class="input-field col s12">
          <input value="<?php echo $judul_TA; ?>" id="judul_TA" name="txt[6]" type="text" class="validate" required="required">
          <label class="active" for="judul_TA">Judul Tugas Akhir</label>
		</div>
		<div class="input-field col s12">
          <input value="<?php echo $deskripsi; ?>" id="deskripsi" name="txt[7]" type="text" class="validate" required="required">
          <label class="active" for="deskripsi">Deskripsi</label>
		</div>
		
		   <input value="<?php echo $this->session->userdata("name"); ?>" id="deskripsi" name="txt[8]" type="hidden" class="validate" required="required">

		<div class="form-group">
		<label for="id_dp1" class="col-md-4 control-label">Referensi</label>
		<div class="col-md-8">
		<?= $cbodokumen ?>
		
		</div>
	<input value=0 id="status" name="txt[10]" type="hidden" class="validate" required="required">
	
	 <input value="mahasiswa" id="status_alumni" name="txt[11]" type="hidden" class="validate" required="required">
	 <input value="0" id="keterangan" name="txt[12]" type="hidden" class="validate" required="required">
		<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	</div>	
		</form>
		</div>
		</div>
	  
 
		
        
	  
			
  <section id="footer" class="section footer">
    <div class="container">
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            <a href="">Copyright &copy; 2017 DEVteam_Modul1_PSI</a><a href="https://bootstrapmade.com/">     | Bootstrap Themes</a> <a href="https://bootstrapmade.com/">  by BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </section>
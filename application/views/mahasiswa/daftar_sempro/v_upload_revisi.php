	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran Seminar Proposal</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mmengupload bukti acc revisi seminar proposal bagi para mahasiswa Teknologi Informasi</h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <div class="container">
    <div class="section">
	<?php echo form_open("mahasiswa/C_sempro/uploadrevisi", array('enctype'=>'multipart/form-data')); ?>
			<br><br><h6>Berkas Seminar Proposal</h6>
	<table class="bordered highlight">
        <tbody>
          <tr>
            <td>1.Berkas Revisi</td>
            <td><?php echo form_upload('file_1'); ?></td>
            <td><input type="checkbox" class="filled-in" id="1" checked="checked"/></td>
          </tr>
		</tbody>
	</table>
  <br><br>
  <label>*file yang di upload berformat .pdf dan harus berisi hasil scan 3 lembar revisi dari panelis 1,2 dan 3</label>
  <br><br>
			
	
	<div class="row"><br><br>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"><input type="submit" name="submitrevisi" value="Simpan" class="btn btn-success"></div>
      </div>
	  
	<?php echo form_close(); ?>
	</div>
</div>
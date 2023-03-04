	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran Seminar Proposal</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mendaftar Seminar Proposal bagi para mahasiswa Teknologi Informasi</h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <div class="container">
    <div class="section">

      <div class="form-group">
                        <label>Judul Tugas Akhir</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_judul->judul_TA; ?>">
      </div>

	<?php echo form_open("mahasiswa/C_sempro/multiple_upload", array('enctype'=>'multipart/form-data')); ?>
			<br><br><h6>Berkas Seminar Proposal</h6>
	<table class="bordered highlight">
        <tbody>
          <tr>
            <td>1.Proposal Tugas Akhir</td>
            <td><?php echo form_upload('file_1'); ?></td>
            <td><input type="checkbox" class="filled-in" id="1" checked="checked"/></td>
          </tr>
          <tr>
            <td>2.Kartu Kendali</td>
            <td><?php echo form_upload('file_2'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="2" checked="checked"/></td>
          </tr>
          <tr>
            <td>3.Kartu Kendali Tahun Lalu</td>
            <td><?php echo form_upload('file_3'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="3" checked="checked"/></td>
          </tr>
          <tr>
            <td>4.Makalah</td>
            <td><?php echo form_upload('file_4'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="4" checked="checked"/></td>
          </tr>
		    <tr>
            <td>5.Lembar Berita Acara</td>
            <td><?php echo form_upload('file_5'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="5" checked="checked"/></td>
          </tr>
		    <tr>
            <td>6.Lembar Pengusulan</td>
            <td><?php echo form_upload('file_6'); ?></td>
            <td><input type="checkbox" class="filled-in" id="6" checked="checked"/></td>
          </tr>
		    <tr>
            <td>7.Lembar Revisi</td>
            <td><?php echo form_upload('file_7'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="7" checked="checked"/></td>
          </tr>
		    <tr>
            <td>8.Lembar Hasil Sempro</td>
            <td><?php echo form_upload('file_8'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="8" checked="checked"/></td>
          </tr>
		     <tr>
            <td>9.Lembar Daftar Hadir</td>
            <td><?php echo form_upload('file_9'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="9" checked="checked"/></td>
          </tr>          
		  <tr>
            <td>10.Lembar Pengesahan</td>
            <td><?php echo form_upload('file_10'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="10" checked="checked"/></td>
          </tr>
		    <tr>
            <td>11.Kartu Kontrak DP</td>
            <td><?php echo form_upload('file_11'); ?></input></td>
            <td><input type="checkbox" class="filled-in" id="11" checked="checked"/></td>
          </tr>
		</tbody>
	</table>
			
	
	<div class="row"><br><br>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"><input type="submit" name="submitkhs1" value="Simpan" class="btn btn-success"></div>
      </div>
	  
	<?php echo form_close(); ?>
	</div>
</div>
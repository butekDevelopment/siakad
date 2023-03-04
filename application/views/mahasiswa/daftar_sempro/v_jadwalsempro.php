
  <section class="content">
      <div class="container">
          <div class="section">
          <div class="col-md-12">
          <center><h2>Jadwal Seminar Proposal</h2></center>
          <br><br>
          <br><br>
          <div class="form-group">
                        <label>Ruangan</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->ruangan; ?>">
          </div>
          <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->tanggal; ?>">
          </div>
          <div class="form-group">
                        <label>Jam</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->jam; ?>">
          </div>
          <div class="form-group">
                        <label>Panelis 1</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->panelis_1; ?>">
          </div>
          <div class="form-group">
                        <label>Panelis 2</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->panelis_2; ?>">
          </div>
          <div class="form-group">
                        <label>Panelis 3</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $data_jadwal->panelis_3; ?>">
          </div>
      </div>
    </div>
  </div>
</section>

      <div class="row center">
      <br>
      <br>
      <br>
      <label>Jika sudah melakukan sempro dan sudah menyelesaikan revisi harap upload lembar revisi yang sudah di acc</label>
      <br><br>
      <a href="<?= site_url();?>mahasiswa/C_sempro/sempro_revisi"<button type="submit" class="btn btn-success">Upload Revisi</a>
      <br><br>
      <br><br>
      <br>
      </div>
      </div>
      </div>
  
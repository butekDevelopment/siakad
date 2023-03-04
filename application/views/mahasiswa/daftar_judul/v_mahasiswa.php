	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran pengajuan judul tugas akhir</h3>
      <br><br>

    </div>
  </div>
   <div class="container">
    <div class="section">
	<form action="<?php echo base_url().'mahasiswa/C_judul/add';?>" method="post" id="form_studytracer">
      <table class="table">
		<thead>
			<tr>
				<th>Judul</th>
				<th>Deskripsi</th>
				<th>Dosen Pembimbing 1</th>
				<th>Dosen Pembimbing 2</th>
				<th>Referensi</th>
				<th>Status</th>				
				<th>Operasi</th>				

			</tr>
		</thead>
		<tbody>
		<?php
		foreach($render->result() as $row)
		{
			?>
			<tr>
				<td><?= $row->judul_TA;?></td>
				<td><?= $row->deskripsi;?></td>
				<td><?= $row->nm_dosen;?></td>
				<td><?= $row->dospem_2;?></td>
				<td><?= $row->berkas_dokumen;?></td>
				<td><?= $row->status;?></td>				
				<?php
				if($row->status == "Belum Dikonfirmasi")
				{
					?>
				<td>
				<a href="<?= site_url();?>mahasiswa/C_judul/add/<?= $row->id;?>"  class="btn btn-success">Edit
				</a>
				</td>
				<?php
				}
				?>

			</tr>
			<?php
		}
		?>
		<?php
		
		if($render->num_rows()==0)
		{
		?>
		<tr>
		<td colspan=8>
		
		<div class="col-sm-offset-4 col-sm-8">
		<a href="<?= site_url();?>mahasiswa/Daftar_judul/add"<button type="submit" class="btn btn-success">Daftar</a>	
        </div>
		
		</td>
		</tr>
		<?php
		}
		?>
		</tbody>
	
		</table>
		<div class="form-group">
	</div>
	
		</form>
		
		
	</div>	
		</div>
		</div>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('koordinator/daftar_judul/sidebar'); ?>
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?>
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Mahasiswa yang telah mengajukan judul Tugas Akhir </h4>
                            </div>
                                <table class="table table-striped datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
										<th>Program Studi</th>
                                        <th>Dosen Pembimbing 1</th>
										<th>Dosen Pembimbing 2</th>
										<th>Rumpun Mata Kuliah</th>
										<th>Judul Tugas Akhir</th>
										<th>Deskripsi</th>
										<th>ID Mahasiswa</th>
										<th>Referensi</th>
										<th>Status</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>
									<?php
									$i=1;
									foreach($render->result() as $row)
									{
									?>
                                        <tr>
                                            <td><?= $i;?></td>
											<td><?= $row->id;?></td>
											<td><?= $row->nama_mahasiswa;?></td>
											<td><?= $row->program_studi;?></td>
											<td><?= $row->nm_dosen;?></td>
											<td><?= $row->dospem_2;?></td>
											<td><?= $row->nm_rumpun;?></td>
											<td><?= $row->judul_TA;?></td>
											<td><?= $row->deskripsi;?></td>
											<td><?= $row->id_mhs;?></td>
											<td><?= $row->berkas_dokumen;?></td>
											<td><?= $row->status;?></td>
                                            <td>
                                                <div class="col-xs-3 text-right">
                                                    <a data-toggle="tooltip" title="Delete Data" href="<?= site_url();?>koordinator/Pengajuan/delete/<?= $row->id?>">
													<i class="fa fa-trash fa-fw fa-lg"></i>
													</a>
                                                </div>
                                            </td>
                                        </tr>
									<?php
									$i++;
									}
									?>	
								</tbody>
                                </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
    <?php $this->load->view('/koordinator/footer');

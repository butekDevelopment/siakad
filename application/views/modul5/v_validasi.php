
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
<!-- Content Header (Page header) -->

<!-- Content Header (Page header) -->
<div class="content-wrapper">

<section class="content-header">
    <h1>
        Study Tracer
        <small>Teknologi Informasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Study Tracer</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


	
	<div class="box">
	
        <div class="box-header with-border">
            <h3 class="box-title">Data Studytracer</h3>
        </div>
        <div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
				<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
				<br />
				<br />
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>Id Tracer</th>
							<th>NIM</th>
							<th>Timestamp</th>
							<th>Jenis Kelamin</th>
							<th>Angkatan</th>
							<th>Alamat</th>
							<th>No. Telp</th>
							<th>Status Alumni</th>
							<th>Masa Tunggu</th>
							<th>Tingkat Studi</th>
							<th>Jenis Usaha</th>
							<th>Jabatan</th>
							<th>Perusahaan</th>
							<th>Gaji</th>
							<th>Kesesuaian Bidang</th>
							<th>Saran dan Masukan</th>
							<th>Option</th>
								
								</td>
						</tr>
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
											<td><?= $row->mahasiswa_NIM;?></td>
											<td><?= $row->Time_Stamp;?></td>
											<td><?= $row->Jenis_Kelamin;?></td>
											<td><?= $row->Angkatan;?></td>
											<td><?= $row->Alamat_Sekarang;?></td>
											<td><?= $row->No_Telepon;?></td>
											<td><?= $row->Status_Alumni;?></td>
											<td><?= $row->Masa_Tunggu;?></td>
											<td><?= $row->Tingkat_Studi;?></td>
											<td><?= $row->Jenis_Usaha;?></td>
											<td><?= $row->Jabatan;?></td>
											<td><?= $row->Perusahaan;?></td>
											<td><?= $row->Gaji;?></td>
											<td><?= $row->Kesesuaian_Bidang;?></td>
											<td><?= $row->Saran_dan_Masukan;?></td>
                                            <td>
                                                <div class="col-xs-3 text-right">
                                                    <a data-toggle="tooltip" title="Print" href="<?= site_url();?>modul5/validasistudytracer/printing/<?= $row->id?>">
													<i class="fa fa-print fa-fw fa-lg"></i>
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
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->


</div>

<?php $this->load->view('administrasi/footer') ?>




<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<head>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
</head>
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

    <!-- Default box -->
    <div class="box">
		</div><!-- /.box -->
	
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Mahasiswa</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
				<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
				<br />
				<br />
				<table id="table2" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NIM</th>
							<th>Id Mahasiswa</th>
							<th>Nama Mahasiswa</th>
							<th>Prodi</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
        </div><!-- /.box-body -->
	</div>
	<div class="box">
	
        <div class="box-header with-border">
            <h3 class="box-title">Data Studytracer</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body" style="border:1px; #dedede double;width:auto; height:500px;overflow-y:scroll;overflow-x:scroll;">
				<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
				<br />
				<br />
				<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Id Tracer</th>
							<th>Timestamp</th>
							<th>NIM</th>
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
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->



<script src="<?php echo base_url('asset/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>

<script src="<?php echo base_url('asset/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js') ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url('asset/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>


<script type="text/javascript">

var save_method; //for save method string

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('modul5/panelstudytracer/get_data_user')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });
	
});

$(document).ready(function() {

    //datatables
    table = $('#table2').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('modul5/t_mahasiswa/get_data_mhs')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });
	
});

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

</script>

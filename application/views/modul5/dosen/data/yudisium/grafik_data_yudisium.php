
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
<!-- Content Header (Page header) -->

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>  
<script type="text/javascript" src="<?php echo base_url('assets/js/highcharts.js');?>"></script>

  <div class="content-wrapper">
<div id="container" style="width: 1010px;"></div>
</div>
<script type="text/javascript">
var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'GRAFIK DATA YUDISIUM'
    },

    subtitle: {
        text: '5 TAHUN'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['2014', '2015', '2016', '2017', '2018'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah Mahasiswa'
        }
    },

    series: [{
        name: 'Belum Yudisium',
        data: [<?php foreach($report_belum1 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum2 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum3 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum4 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum5 as $data){ echo $data->nilai; } ?>]
    }, {
        name: 'Sudah Yudisium',
        data: [<?php foreach($report_sudah1 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah2 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah3 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah4 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah5 as $data){ echo $data->nilai; } ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

</script>


<?php $this->load->view('administrasi/footer') ?>
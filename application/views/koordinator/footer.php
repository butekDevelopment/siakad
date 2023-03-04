<footer class="footer">
            <div class="container-fluid">

                <div class="copyright pull-right">
                    copyright &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">MIF A</a>
                </div>
            </div>
</footer>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/eksternal/datetimepicker/js/locales.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/eksternal/datetimepicker/js/datetimepicker.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery.autocomplete.js"></script>

    <!-- JS select2 -->
    <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-checkbox-radio.js"></script>


    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url(); ?>assets/eksternal/paper-dashboard.js"></script>

    <!-- My style javascript -->
    <script src="<?php echo base_url(); ?>assets/eksternal/style.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js" ></script>
	<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js" ></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.js"></script>

	 <script type="text/javascript">

		//setting datatable
		$('.datatable').DataTable({
			dom: 'Bfrtip',
			buttons:
			[
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Export to Excel'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'Export to PDF'
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print"></i>',
                titleAttr: 'Print'
            }
			],
			fixedHeader:true,
			"pageLength": 50,
			 responsive: {
        details: {
            renderer: function ( api, rowIdx, columns ) {
                var data = $.map( columns, function ( col, i ) {
                    return col.hidden ?
                        '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                            '<td>'+col.title+':'+'</td> '+
                            '<td>'+col.data+'</td>'+
                        '</tr>' :
                        '';
                } ).join('');

                return data ?
                    $('<table/>').append( data ) :
                    false;
            }
        }
    }

		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.js"></script>



  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/morris/morris.js" type="text/javascript"></script>
	  <script type="text/javascript">
	  //alert();
		  $.ajax({
			url	: "<?= site_url()?>"+"koordinator/chart_judul/grafik",
			success	: function(s){
				//alert(s);
				var data=s.split("++");
				//data.pop();  //memotong 1 data terakhir

				var row=data.length; //menghitung banyak data
				//alert(data.join("\n"));

				var anggota=Array("");
				var isi=Array("");
				for(var i =0;i<row;i++)
				{
					var det=data[i].split("||");
					anggota[i]=det[0];
					isi[i]=det[1];
					//alert(anggota[i]);
				}


				//var anggota=Array('aldi','amicong','tole','amicong','tole','amicong','tole','amicong','tole');
				var datatemp=Array({x: '0','a': 0});

				for(var i=0;i<anggota.length;i++)
				{
					datatemp[i]={x: anggota[i],'a': isi[i]};
				}


				// Use Morris.Bar
				Morris.Bar({
				  element: 'graph',
				  data: datatemp,
				  xkey: 'x',
				  ykeys: ['a'],
				  labels: ['a']
				}).on('click', function(i, row){
				  console.log(i, row);
				});

			}
		  });


    </script>

</html>

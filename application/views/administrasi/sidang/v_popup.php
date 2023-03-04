<html>
    <head>
        <title>Latihan Modal | Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
 
    </head>
    <body>
    <div class="container">      
    <!-- Tombol untuk menampilkan modal-->
    <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#myModal">Tolak</button>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Bagian heading modal</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <p>bagian body modal.</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                </div>
            </div>
        </div>
    </div>
   </div>        
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    </body>
</html>
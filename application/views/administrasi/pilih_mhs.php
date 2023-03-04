
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view('administrasi/header') ?>
<?php $this->load->view('administrasi/leftbar') ?>
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
         <!--<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
             
            </form>
          </div>-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-20">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Mahasiswa</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-center" novalidate="">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-20" for="name">NIM <span class="required"></span>
                        </label>
                        <label class="control-label col-md-3 col-sm-3 col-xs-20" for="name">:<span class="required">E31150535</span>
                        </label>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-20" for="email">Nama <span class="required"></span>
                        </label>
                          <label class="control-label col-md-3 col-sm-3 col-xs-20" for="name">:<span class="required">Fitri Nur Aini</span>
                        </label>
                        </label>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Judul Tugas Akhir<span class="required"></span>
                        </label>
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">:<span class="required"></span>
                        </label>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"><span class="required"></span>
                        </label>
                       
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Dokumen Tugas Akhir<span class="required"></span>
                        </label>
                       
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Bukti SPP Terakhir <span class="required"></span>
                        </label>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Kartu Kendali <span class="required"></span>
                        </label>
                      
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Tolak</button>
                          <button id="send" type="submit" class="btn btn-success">Terima</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>

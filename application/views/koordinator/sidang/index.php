<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('koordinator/sidang/sidebar'); ?>
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?> 
         <div class="content">
            <div class="container-fluid">
                
                    <a href="<?php echo base_url()."koordinator/jadwal_sidang/list_details";?>" class="btn pull-right btn-flat navbar-btn btn-sm btn-info"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Daftar mahasiswa yang telah mendapatkan jadwal</a>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Berikut adalah daftar mahasiswa yang telah terverifikasi oleh admin : </h4>
                                <br>
                                <p class="category">Tabel ini untuk memilih mahasiswa yang akan disetujui melakukan sidang, sehingga nantinya akan di tentukan jadwal sidangnya</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover" id="table">
                                    <thead>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Judul Tugas Akhir</th>
                                        <th>Pembimbing 1</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php if (is_null($user) || empty($user)): ?>
                                        <div class="text-center breadcrumb">
                                            <i class="glyphicon glyphicon-alert text-center text-danger"><p>data kosong</p></i>
                                        </div>
                                        <?php else: ?>
                                        <?php 
                                        foreach($user as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $data->NIM; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td><?php echo $data->judul; ?></td>
                                            <td><?php echo $data->dospem; ?></td>
                                            <td>
                                                <div class="col-xs-3 text-right">        
                                                <a href="<?php echo base_url()."koordinator/jadwal_sidang/view/". 
                                                $data->id; ?>" class="btn btn-md btn-info btn-icon">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <?php echo $pagination; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $this->load->view('koordinator/sidang/view'); ?> 
</div>
<script>document.body.style.overflow = "hidden";</script>
    <?php $this->load->view('/koordinator/footer');
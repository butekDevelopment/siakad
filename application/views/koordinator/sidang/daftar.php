<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('koordinator/header'); ?>
<body>
    <div class="wrapper">
        <?php $this->load->view('koordinator/sidang/sidebar'); ?>
        <div class="main-panel">
            <?php $this->load->view('koordinator/navbar'); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-4 col-xs-offset-2">
                        <form class="form-group input-group" action="<?php echo base_url()."koordinator/jadwal_sidang/search_details";?>" method="post">
                            <div class="form-group input-group-btn stylish-input-group">
                                <input type="text" class="form-control" name="search" placeholder="Cari mahasiswa berdasarkan NIM" style="min-height: 80%; border: 0;" required>
                                <button class="btn btn-default btn-xs" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                                <a href="<?php echo base_url()."koordinator/jadwal_sidang/list_details";?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-refresh"></span> Reload</a>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Berikut adalah daftar mahasiswa yang telah ditentukan jadwal sidangnya : </h4>
                                    <br>
                                    <p class="category">Pada tabel ini anda berhak melihat dan untuk mengganti jadwal sidang ataupun menghapus mahasiswa dari jadwal sidang yang ditentukan</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <div id="notifications">
                                       <?=$this->session->flashdata('notif')?>
                                    </div>
                                    <table class="table table-hover" id="table">
                                        <thead>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Judul Tugas Akhir</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php if (is_null($user_acc) || empty($user_acc)): ?>
                                            <div class="text-center breadcrumb">
                                                <i class="glyphicon glyphicon-alert text-center text-danger"><p>data kosong</p></i>
                                            </div>
                                            <?php else: ?>
                                            <?php
                                            foreach ($user_acc as $data) {
                                            ?>
                                            <tr>
                                                <td><?php echo ++$no; ?></td>
                                                <td><?php echo $data->NIM; ?></td>
                                                <td><?php echo $data->nama; ?></td>
                                                <td><?php echo $data->judul; ?></td>
                                                <?php if (empty($data->sekertaris && $data->anggota)): ?>
                                                <td class="text-danger"> Belum Lengkap</td>
                                                <?php else: ?>
                                                <td class="text-success"> Lengkap</td>
                                                <?php endif ?>
                                                <td>
                                                    <div class="button-group">
                                                        <a
                                                        data-id="<?php echo $data->id ?>"
                                                        data-ketua="<?php echo $data->ketua ?>"
                                                        data-sekertaris="<?php echo $data->sekertaris ?>"
                                                        data-anggota="<?php echo $data->anggota ?>"
                                                        data-tanggal="<?php echo $data->tanggal ?>"
                                                        data-jam="<?php echo $data->jam ?>"
                                                        data-ruangan="<?php echo $data->ruangan ?>"
                                                        class="btn btn-sm btn-default btn-flat" data-toggle="modal" data-target="#lihat">
                                                        <i class="glyphicon glyphicon-eye-open"></i> Lihat
                                                        </a>
                                                        <a
                                                        data-id="<?php echo $data->id ?>"
                                                        data-ketua="<?php echo $data->ketua ?>"
                                                        data-sekertaris="<?php echo $data->sekertaris ?>"
                                                        data-tanggal="<?php echo $data->tanggal ?>"
                                                        data-jam="<?php echo $data->jam ?>"
                                                        class="btn btn-sm btn-info btn-flat" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                        <a data-id="<?php echo $data->id ?>" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#hapus"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
    <?php $this->load->view('koordinator/sidang/edit') ?>
    <?php $this->load->view('koordinator/sidang/view') ?>
    <script>document.body.style.overflow = "hidden";</script>
    <?php $this->load->view('/koordinator/footer');
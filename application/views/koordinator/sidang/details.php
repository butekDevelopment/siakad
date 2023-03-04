<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
    <?php $this->load->view('koordinator/header'); ?>
<body>
<div class="wrapper">
<div class="main-panel">
    <?php $this->load->view('koordinator/navbar'); ?>
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tentukan Jadwal Sidang Dari Mahasiswa Terpilih : </h4>
                                <br>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()."koordinator/jadwal_sidang/select_mhs/".
                                                $user_details->id; ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Judul" value="<?php echo $user_details->NIM; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Nama" value="<?php echo $user_details->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Judul Tugas Akhir</label>
                                                <input type="text" class="form-control border-input text-center" disabled placeholder="Judul" value="<?php echo $user_details->judul; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="penguji">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ketua</label>
                                                <select name="ketua" class="form-control border-input text-center" required>
                                                    <option value="<?php echo $user_details->dospem; ?>"><?php echo $user_details->dospem; ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <?php if ($user_details->id > 15) { ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sekertaris</label>
                                                <select name="sekertaris" class="form-control border-input text-center" required>
                                                    <option disabled selected>Pilih Dosen</option>
                                                    <?php foreach($dosen as $row) { ?>
                                                    <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Anggota</label>
                                                <select name="anggota" class="form-control border-input text-center" required>
                                                    <option disabled selected>Pilih Dosen</option>
                                                    <?php foreach($dosen as $row) { ?>
                                                    <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php }else { ?>

                                            <div class="col-md-8 text-center text-info">
                                                <br><label>Keterangan : </label><br>
                                                <p>mahasiswa ke-<?php echo $user_details->id;?> bebas menentukan sekertaris dan anggota pada sidang nanti</p><br>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text" class="form-control border-input text-center" id="tanggal" placeholder="tanggal" name="tanggal" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jam</label>
                                                <input type="text" class="form-control border-input text-center" id="jam" placeholder="jam" name="jam" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ruangan</label>
                                                <select name="ruangan" class="form-control border-input text-center" required>
                                                    <option value="R.Sidang 1">Ruang Sidang 1</option>
                                                    <option value="R.Sidang 2">Ruang Sidang 2</option>
                                                    <option value="R.Sidang 3">Ruang Sidang 3</option>
                                                    <option value="R.Sidang 4">Ruang Sidang 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right pull-right">
                                            <button type="submit" class="btn btn-md btn-success btn-flat"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                                            <a href="<?php echo base_url();?>koordinator/Jadwal_sidang" class="btn btn-md btn-danger btn-flat"><i class="glyphicon glyphicon-ban-circle"></i> Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
<script>document.body.style.overflow = "hidden";</script>
<?php $this->load->view('/koordinator/footer');

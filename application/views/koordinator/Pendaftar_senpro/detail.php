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
                                <h4 class="title">Penentuan Jadwal Seminar Proposal : </h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()."koordinator/pendaftar_senpro/save_mhs/". 
                                                $user_details->id; ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $user_details->NIM; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Mahasiswa</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Nama" value="<?php echo $user_details->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Judul Tugas Akhir</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $user_details->judul; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="penguji">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 1</label>
                                                <select name="panelis_1" class="form-control border-input text-center" required>>
                                                    <option value="<?php echo $user_details->dospem; ?>"><?php echo $user_details->dospem; ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 2</label>
                                                <select name="panelis_2" class="form-control border-input text-center" required>
                                                    <option disabled selected>Pilih Dosen</option>
                                                    <?php foreach($dosen as $row) { ?>
                                                    <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Panelis 3</label>
                                                <select name="panelis_3" class="form-control border-input text-center" required>
                                                    <option disabled selected>Pilih Dosen</option>
                                                    <?php foreach($dosen as $row) { ?>
                                                    <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text" class="form-control border-input" id="tanggal" placeholder="tanggal" name="tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jam</label>
                                                <input type="text" class="form-control border-input" id="jam" placeholder="jam"  name="jam" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ruangan</label>
                                                <input type="text" class="form-control border-input" placeholder="ruangan" name="ruangan">
                                            </div>

                                        </div>
                                         <div class="col-md-4 text-right pull-right">
                                            <a href="<?php echo base_url(); ?>koordinator/pendaftar_senpro" class="btn btn-md btn-danger btn-flat">Batal</a>
                                            <button type="submit" class="btn btn-md btn-success btn-flat">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>document.body.style.overflow = "hidden";</script>
</div>
<?php $this->load->view('/koordinator/footer');

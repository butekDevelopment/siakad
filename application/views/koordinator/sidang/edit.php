<!--=================================
=            modal edit            =
==================================-->
<div class="modal fade" id="edit" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="">Edit Jadwal Sidang</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <form action="<?php echo base_url('koordinator/jadwal_sidang/update_jadwal'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ketua</label>
                                        <input type="hidden" id="id" name="id">
                                        <input type="text" class="form-control border-input text-center" id="ketua" name="ketua" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sekertaris</label>
                                        <select name="sekertaris" class="form-control border-input text-center" required id="e_sekertaris">
                                            <option disabled default selected>Pilih Dosen</option>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer button-group">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">  Batal  </button>
                    <button class="btn btn-info" type="submit">Simpan&nbsp;</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--====  End of modal edit  ====-->

<!--=================================
=            modal hapus            =
==================================-->
<div class="modal fade" id="hapus" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-danger text-center" id="">Peringatan !</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="container-fluid">
                        <H4><b>Anda Ingin Membatalkan Jadwal Mahasiswa Ini ?<b></H4>
                        <form action="<?php echo base_url('koordinator/jadwal_sidang/unselect_mhs'); ?>" method="post">
                        <input type="hidden" id="id" name="id">
                    </div>
                </div>
                <div class="modal-footer button-group text-center">
                    <button class="btn btn-danger" type="submit">Ya</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!--====  End of modal hapus  ====-->
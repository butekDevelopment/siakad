<!--=================================
=            modal edit            = // pop up untuk tampilan hapus dan edit 
==================================-->
<div class="modal fade" id="edit_sem" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="">Edit Jadwal Seminar Proposal</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <form action="<?php echo base_url('koordinator/Pendaftar_senpro/update_jadwal'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>panelis1</label>
                                        <input type="hidden" id="id" name="id">
                                        <input type="text" class="form-control border-input text-center" id="panelis1" name="panelis_1" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Panelis2</label>
                                        <select name="panelis_2" class="form-control border-input text-center" required id="e_sekertaris">
                                            <option disabled default selected>Pilih Dosen</option>
                                            <?php foreach($dosen as $row) { ?>
                                            <option value="<?php echo $row->nm_dosen;?>"><?php echo $row->nm_dosen;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Panelis3</label>
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
                                         <input type="text" class="form-control border-input" id="ruangan" placeholder="ruangan" name="ruangan">
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
<div class="modal fade" id="hapus_sem" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-danger text-center" id="">Peringatan !</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="container-fluid">
                        <H4><b>Anda Ingin Membatalkan Jadwal Mahasiswa Ini ?<b></H4>
                        <form action="<?php echo base_url('koordinator/Pendaftar_senpro/delete_mhs'); ?>" method="post">
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
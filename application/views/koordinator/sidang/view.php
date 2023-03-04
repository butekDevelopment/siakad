<!--=================================
=            modal lihat            =
==================================-->
<div class="modal fade" id="lihat" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="">Data Jadwal Sidang</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ketua</label>
                                        <input type="hidden" id="id" name="id">
                                        <input type="text" class="form-control border-input text-center" id="ketua" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sekertaris</label>
                                        <input type="text" class="form-control border-input text-center" id="sekertaris" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Anggota</label>
                                        <input type="text" class="form-control border-input text-center" id="anggota" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control border-input text-center" id="tanggal" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jam</label>
                                        <input type="text" class="form-control border-input text-center" id="jam" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ruangan</label>
                                        <input type="text" class="form-control border-input text-center" id="ruangan" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer button-group">
                    <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal"> Tutup </button>
                </div>
        </div>
    </div>
</div>
    <!--====  End of modal lihat  ====-->

    <div class="modal fade" id="hapus" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="">Data Jadwal Sidang</h4>
                </div>
                <div class="modal-body text-center">
                    <h5><b>Anda Ingin Menghapus Mahasiswa Ini ?</b></h5>
                </div>
                <div class="modal-footer button-group">
                    <a class="btn btn-md btn-info btn-flat" id="btn_edit" data-dismiss="modal" data-toggle="modal" data-target="#edit">Ya</a>
                    <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal"> Tidak </button>
                </div>
        </div>
    </div>
</div>
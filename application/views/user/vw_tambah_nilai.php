<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div>
            </div>
        </div>
    </div>

    <div class="col-md-11">
        <div class="options" style=" float:top !important;">
            <ul class="nav nav-tabs nav-primary">
                <li class="list-group-item list-group-item-light"><a href="<?= base_url('NilaiUSR') ?>"><i class="fa fa-list"></i> Daftar Semester</a></li>
                <li class="list-group-item list-group-item-light"><a href="<?= base_url('NilaiUSR/tambah') ?>"><i class="fa fa-plus"></i> Update Nilai</a></li>
            </ul>
        </div>
        <div class="tab-content">
                <div class="m-content">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Update Nilai Semester
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?= $user['id']; ?>" class="form-control" id="id_user">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Nama Lengkap:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="val_nama" value="<?= set_value('val_nama') ?>" class="form-control" id="val_nama" placeholder="Harap Masukan Nama Sesuai Dengan Yang Terdaftar">
                                        <?= form_error('val_nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Indeks Presentase Komulatif (IPK) of 4.0 :</label>
                                    <div class="col-lg-1">
                                        <input type="text" name="ipk" value="<?= set_value('ipk') ?>" class="form-control" id="ipk">
                                        <?= form_error('ipk', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Semester:</label>
                                    <div class="col-lg-2">
                                        <input type="number" name="semester" value="<?= set_value('semester') ?>" class="form-control" id="semester" placeholder="Inputkan Angka">
                                        <?= form_error('semester', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-lg-2 col-form-label">Bukti:</label>
                                    <div class="col-lg-4">
                                        <input type="file" name="bukti" class="custom-file-input" id="bukti">
                                        <label for="bukti" class="custom-file-label">Pilih File</label>
                                        <?= form_error('bukti', '<small class="text-danger p1-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                    <div class="m-form__actions m-form__actions--solid">
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                                <a href="<?= base_url('NilaiUSR') ?>" class="btn btn-secondary">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <br>

                        <!--end::Form-->
                    </div>
                </div>
        </div>
    </div>
</div>
            <!--end::Portlet-->
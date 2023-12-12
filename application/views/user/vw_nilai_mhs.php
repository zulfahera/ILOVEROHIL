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
                <!-- <li class="list-group-item list-group-item-light"><a href="<?= base_url('NilaiUSR') ?>"><i class="fa fa-list"></i> Daftar Semester</a></li> -->
                <button type="button" class="btn btn-info float-right" onclick="<?= base_url('NilaiUSR') ?>"><i class="fa fa-list"></i> Semester </button>&nbsp
                <!-- <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#insertModal"><i class="fa fa-plus"></i> Tambah Data</button> -->
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#insertModal"><i class="fa fa-plus"></i> Tambah Data</button>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="listtabs">
                <div class="m-content">
                    <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__body">
                            <!-- <?= $this->session->flashdata('message') ?> -->
                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>Semester</td>
                                        <td>Indeks Presentase Komulatif (IPK) of 4.0</td>
                                        <td>Bukti IPK</td>
                                        <td>Status Beasiswa</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($userN as $ni) : ?>
                                        <tr>
                                            <td><?= $i; ?>.</td>
                                            <td><?= $ni['val_nama']; ?></td>
                                            <td><?= $ni['semester']; ?></td>
                                            <td><?= $ni['ipk']; ?></td>
                                            <td><img src="<?= base_url('assets/img/nilai/') . $ni['bukti']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                            <?php if ($ni['ipk'] >= 2.75 && $ni['ipk'] <= 4.00) : ?>
                                                <td class="text-success"><?= $ni['status'] = "Lanjut"; ?></td>
                                            <?php else : ?>
                                                <td class="text-danger"><?= $ni['status'] = "Pending"; ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal Untuk Insert Data -->
                    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="insertModalLabel">INPUT DATA NILAI SEMESTER</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action='<?= base_url('NilaiUSR/tambah') ?>' enctype="multipart/form-data">
                                    <input type="hidden" name="id_user" id="id_user" value="<?= $user['id']; ?>" class="form-control">
                                        <div class="form-group">
                                            <!-- <label class=''> Nama Anda</label> -->
                                            <input type="hidden" name="val_nama" value="<?= $user['nama']; ?>" class="form-control" id="nama" placeholder="Harap Masukan Nama Lengkap">
                                            <?= form_error('val_nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class=''> Indeks Presentase Komulatif (IPK) of 4.0 :</label>
                                            <input type="text" name="ipk" value="<?= set_value('ipk') ?>" class="form-control" id="ipk" placeholder="IPK">
                                            <?= form_error('ipk', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class=''> Semester :</label>
                                            <input type="number" name="semester" value="<?= set_value('semester') ?>" class="form-control" id="semester" placeholder="Masukan Semester">
                                            <?= form_error('semester', '<small class="text-danger p1-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class=''> Bukti :</label>
                                            <div class="col-lg-8">
                                                <input type="file" name="bukti" class="custom-file-input" id="bukti">
                                                <label for="bukti" class="custom-file-label">Pilih File</label>
                                                <?= form_error('bukti', '<small class="text-danger p1-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: MODAL INSERT-->

                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

            <!-- <div class="tab-pane" id="addtabs">
                <div class="panel panel-default">
                    <div class="m-grid m-grid--hor m-grid--root m-page"> -->
                        <!--begin::Portlet-->
                        <!-- <div class="m-portlet">
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
                            </div> -->

                            <!--begin::Form-->
                            <!-- <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $user['id']; ?>" class="form-control">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-2 col-form-label">Nama Lengkap:</label>
                                        <div class="col-lg-6">
                                            <input type="text" name="val_nama" value="<?= set_value('val_nama') ?>" class="form-control" id="val_nama" placeholder="Harap Masukan Nama Lengkap">
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
                                            <input type="number" name="semester" value="<?= set_value('semester') ?>" class="form-control" id="semester" placeholder="Masukan Semester">
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
                                                    <a href="<?= base_url('NilaiUSR/tambah') ?>" class="btn btn-success">Submit</a>
                                                    <a href="<?= base_url('NilaiUSR') ?>" class="btn btn-secondary">Batal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            <br> -->

                            <!--end::Form-->
                        <!-- </div> -->
                    <!-- </div> -->

                <!-- </div> -->
                <!-- panel -->

            <!-- </div> -->

        </div>
        <!--tab content-->
    </div>
    <!--end::Portlet-->
</div>
</div>
</div>

<!-- end:: Body -->
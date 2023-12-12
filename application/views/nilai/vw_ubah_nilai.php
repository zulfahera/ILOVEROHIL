<!-- begin::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Halaman Ubah Data Nilai Mahasiswa
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" method="POST">
            <input type="hidden" name="id" value="<?= $nilai['id']; ?>">
            <!-- <input type="hidden" name="id" value="<?= $nilaiU['id']; ?>"> -->
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Lengkap:</label>
                        <div class="col-lg-6">
                           <select name="id_mhs" value="<?= $nilai['id_mhs']; ?>" id="id_mhs" class="form-control">
                                <option value="">Pilih Mahasiswa</option>
                                <?php foreach ($mhs as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['nama_mhs']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('id_mhs', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Validasi Nama:</label>
                        <div class="col-lg-2">
                            <input type="text" name="val_nama" value="<?= $nilai['val_nama']; ?>" class="form-control" id="val_nama" placeholder="Masukan Validasi Nama">
                            <?= form_error('val_nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Indeks Presentase Komulatif (IPK) of 4.0 :</label>
                        <div class="col-lg-1">
                            <input type="text" name="ipk" value="<?= $nilai['ipk']; ?>" class="form-control" id="ipk">
                            <?= form_error('ipk', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Semester:</label>
                        <div class="col-lg-2">
                            <input type="number" name="semester" value="<?= $nilai['semester']; ?>" class="form-control" id="semester" placeholder="Masukan Semester">
                            <?= form_error('semester', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Bukti:</label>
                        <div class="col-lg-4">
                            <input type="file" class="custom-file-input" name="bukti" value="<?= $nilai['bukti']; ?>" id="bukti" >
                            <label for="bukti" class="custom-file-label"><?= $nilai['bukti']; ?></label>
                            <!-- <input type="text" name="bukti"  class="form-control" id="bukti" placeholder="Masukan Bukti"> -->
                            <?= form_error('bukti', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>                    
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="<?= base_url('Nilai') ?>" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
            <br>

            <!--end::Form-->
        </div>
    </div>

    <!--end::Portlet-->
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
                            Halaman Ubah Data Mahasiswa
                        </h3>
                    </div>
                </div>
            </div>

            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" method="POST">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Lengkap:</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_mhs" value="<?= $mahasiswa['nama_mhs']; ?>" class="form-control" id="nama_mhs">
                            <?= form_error('nama_mhs', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="m-form__group m-form__group--last form-group row">
                        <label class="col-lg-2 col-form-label">Jenis Kelamin:</label>
                        <div class="col-lg-6">
                            <select name="jk" value="<?= set_value('jk') ?>" id="jk" class="form-control">
                                <option value="Laki-laki" <?php if ($mahasiswa['jk'] == "Laki-laki") {
                                                                echo "selected";
                                                            } ?>>Laki-laki</option>
                                <option value="Perempuan" <?php if ($mahasiswa['jk'] == "Perempuan") {
                                                                echo "selected";
                                                            } ?>>Perempuan</option>
                            </select>
                            <?= form_error('jk', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nomor Telpon:</label>
                        <div class="col-lg-4">
                            <input type="number" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp">
                            <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Program Studi:</label>
                        <div class="col-lg-6">
                            <input type="text" name="prodi" value="<?= $mahasiswa['prodi']; ?>" class="form-control" id="prodi">
                            <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Universitas:</label>
                        <div class="col-lg-5">
                            <select name="id_univ" value="<?= set_value('id_univ') ?>" id="id_univ" class="form-control">
                                <option value="">Pilih Universitas</option>
                                <?php foreach ($univ as $u) : ?>
                                    <option value="<?= $u['id']; ?>"><?= $u['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('universitas', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Tahun Akademik:</label>
                        <div class="col-lg-5">
                            <input type="text" name="tahun_akademik" value="<?= $mahasiswa['tahun_akademik']; ?>" class="form-control" id="tahun_akademik" placeholder="Masukan Tahun Akademik">
                            <?= form_error('tahun_akademik', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Semester:</label>
                        <div class="col-lg-3">
                            <input type="number" name="semester" value="<?= $mahasiswa['semester']; ?>" class="form-control" id="semester">
                            <?= form_error('semester', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Kecamatan:</label>
                        <div class="col-lg-4">
                            <input type="text" name="kecamatan" value="<?= $mahasiswa['kecamatan']; ?>" class="form-control" id="kecamatan">
                            <?= form_error('kecamatan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Bank:</label>
                        <div class="col-lg-3">
                            <input type="text" name="bank" value="<?= $mahasiswa['bank']; ?>" class="form-control" id="bank">
                            <?= form_error('bank', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Bank:</label>
                        <div class="col-lg-3">
                            <input type="text" name="no_rek" value="<?= $mahasiswa['no_rek']; ?>" class="form-control" id="no_rek">
                            <?= form_error('no_rek', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Ubah Data</button>
                                    <button href="<?= base_url('Mahasiswa') ?>" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            <!--end::Form-->
        </div>

        <!--end::Portlet-->
    </div>
    <br>
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
                <input type="hidden" name="id" value="<?= $universitas['id']; ?>">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Universitas:</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama" value="<?= $universitas['nama']; ?>" class="form-control" id="nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="m-form__group m-form__group--last form-group row">
                        <label class="col-lg-2 col-form-label">Akreditasi:</label>
                        <div class="col-lg-6">
                            <select name="akreditasi" value="<?= set_value('akreditasi') ?>" id="akreditasi" class="form-control">
                                <option value="A" <?php if ($universitas['akreditasi'] == "A") {
                                                        echo "selected";
                                                    } ?>>A</option>
                                <option value="B" <?php if ($universitas['akreditasi'] == "B") {
                                                        echo "selected";
                                                    } ?>>B</option>
                                <option value="C" <?php if ($universitas['akreditasi'] == "C") {
                                                        echo "selected";
                                                    } ?>>C</option>
                            </select>
                            <?= form_error('akreditasi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Alamat:</label>
                        <div class="col-lg-4">
                            <input type="text" name="alamat" value="<?= $universitas['alamat']; ?>" class="form-control" id="alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Email:</label>
                        <div class="col-lg-6">
                            <input type="text" name="email" value="<?= $universitas['email']; ?>" class="form-control" id="email">
                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
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
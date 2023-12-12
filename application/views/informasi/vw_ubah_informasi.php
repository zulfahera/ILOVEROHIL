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
                <input type="hidden" name="id" value="<?= $informasi['idinformasi']; ?>">
                <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Nama Universitas:</label>
                        <div class="col-lg-6">
                            <input type="text" name="universitas" value="<?= set_value('universitas') ?>" class="form-control" id="universitas" placeholder="Masukan Nama Universitas">
                            <?= form_error('universitas', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Deadline:</label>
                        <div class="col-lg-4">
                            <input type="text" name="waktu" value="<?= set_value('waktu') ?>" class="form-control" id="waktu" placeholder="Masukkkan Deadline Beasiswa dibuka">
                            <?= form_error('waktu', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Kuota:</label>
                        <div class="col-lg-6">
                            <input type="number" name="kuota" value="<?= set_value('kuota') ?>" class="form-control" id="kuota" placeholder="Masukan Jumlah Kuota">
                            <?= form_error('kuota', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-2 col-form-label">Syarat:</label>
                        <div class="col-lg-4">
                            <input type="file" name="syarat" class="custom-file-input"  id="syarat" >
                            <label for="syarat" class="custom-file-label">Pilih File</label>
                            <?= form_error('syarat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>      
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="<?= base_url('Informasi') ?>" class="btn btn-secondary">Batal</a>
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
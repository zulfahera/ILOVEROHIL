<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-7">
				<img src="<?= base_url('assets/') ?>vendor/images/register-page-img.png" alt="">
			</div>
			<div class="row align-items-center">
				<div class="m-login__logo">
					<a href="#">
						<img src="<?= base_url('assets/') ?>demo/default/media/img/logo/LOGOILOVEROHIL.png"
							style="width: 300px;">
					</a>
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Halaman Registrasi</h2>
						</div>
						<form class="user" method="post" action="<?= base_url('Auth/registrasi'); ?>">
							<section>
								<div class="form-wrap max-width-600 mx-auto">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
											<input name="email" id="email" type="email" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Username</label>
										<div class="col-sm-8">
											<input name="username" id="username" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Password</label>
										<div class="col-sm-8">
											<input name="password" id="password" type="password" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Ulangi Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<input name="nama" id="nama" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<div class="custom-control custom-radio custom-control-inline pb-0">
												<input type="radio" id="pria" name="jk" class="custom-control-input">
												<label class="custom-control-label" for="pria">Pria</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline pb-0">
												<input type="radio" id="wanita" name="jk" class="custom-control-input">
												<label class="custom-control-label" for="wanita">Wanita</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<input name="alamat" id="alamat" type="text" class="form-control">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-lg-4 col-form-label">Gambar:</label>
										<div class="col-lg-6">
											<input type="file" name="gambar" class="custom-file-input" id="gambar">
											<label for="gambar" class="custom-file-label">Pilih File</label>
											<?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="input-group mb-0">
												<!-- success Popup html Start -->
												<button class="btn btn-primary btn-lg btn-block"
													href="<?= base_url('auth/registrasi'); ?>" type="submit"
													id="success-modal-btn" data-toggle="modal"
													data-target="#success-modal" data-backdrop="static">Daftar</button>
												<div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
													aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered max-width-400"
														role="document">
														<div class="modal-content">
															<div class="modal-body text-center font-18">
																<h3 class="mb-20">Berhasil!</h3>
																<div class="mb-30 text-center"><img
																		src="<?= base_url('assets/') ?>vendor/images/success.png">
																</div>
																Selamat, Akun Anda Berhasil Dibuat!
															</div>
															<div class="modal-footer justify-content-center">
																<a href="<?= base_url('auth'); ?>"
																	class="btn btn-primary">Login</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
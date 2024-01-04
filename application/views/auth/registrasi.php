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
						<form class="user" method="post" action="<?= base_url('Auth/validasi_regis'); ?>" enctype="multipart/form-data">
							<section>
								<div class="form-wrap max-width-600 mx-auto">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
											<input name="email" id="email" type="email" class="form-control">
											<?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Username</label>
										<div class="col-sm-8">
											<input name="username" id="username" type="text" class="form-control">
											<?= form_error('username', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Password</label>
										<div class="col-sm-8">
											<input name="password" id="password" type="password" class="form-control">
											<?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
								
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<input name="nama" id="nama" type="text" class="form-control">
											<?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<input name="jk" id="jk" type="text" class="form-control">
											<?= form_error('jk', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<input name="alamat" id="alamat" type="text" class="form-control">
											<?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
										</div>
									</div>
						
									<div class="row">
										<div class="col-sm-12">
											<div class="input-group mb-0">
												<!-- success Popup html Start -->
												<button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
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
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin"
		id="m_login">
		<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
			<div class="m-stack m-stack--hor m-stack--desktop">
				<div class="m-stack__item m-stack__item--fluid">
					<div class="m-login__wrapper">
						<div class="m-login__logo">
							<a href="#">
								<img src="<?= base_url('assets/') ?>demo/default/media/img/logo/LOGOILOVEROHIL.png"
									style="width: 300px;">
							</a>
						</div>

						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Halaman Login</h3>
							</div>
							<?= $this->session->flashdata('message') ?>
							<form class="user" method="post" action="<?= base_url('auth'); ?>">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email"
										id="email">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" id="password"
										type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="remember"> Ingat Saya
											<span></span>
										</label>
									</div>
									<div class="col m--align-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Lupa Password
											?</a>
									</div>
								</div>
								<br>
								<div class="m-login__form-action">
									<button type="submit"
										class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Masuk</button>
									<a href="<?= base_url('auth/registrasi'); ?>"
										class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Daftar</a>
								</div>



							</form>
							<!-- <form class="user" method="post" action="<?= base_url('auth'); ?>">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" id="email">
										</div>
										<div class="form-group m-form__group">
											<input class="form-control m-input m-login__form-input--last" id="password" type="password" placeholder="Password" name="password">
										</div>
										<div class="row m-login__form-sub">
											<div class="col m--align-left">
												<label class="m-checkbox m-checkbox--focus">
													<input type="checkbox" name="remember"> Ingat Saya
													<span></span>
												</label>
											</div>
											<div class="col m--align-right">
												<a href="javascript:;" id="m_login_forget_password" class="m-link">Lupa Password ?</a>
											</div>
										</div>

										<div class="m-login__form-action">
											<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Masuk</button>
										</div>
									</form> -->
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">Halaman Registrasi</h3>
								<div class="m-login__desc">Masukan Data-data Anda:</div>
							</div>
							<form class="m-login__form m-form" method="post" action="<?= base_url('auth'); ?>">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Nama Lengkap"
										name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email"
										autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password"
										name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password"
										placeholder="Konfirmasi Password" name="rpassword">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree"> Saya Setuju
											<a href="#" class="m-link m-link--focus">Syarat & Ketentuan</a>.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit"
										class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Daftar</button>
									<button id="m_login_signup_cancel"
										class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">Batal</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Lupa Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email"
										id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit"
										class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
									<button id="m_login_forget_password_cancel"
										class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- <div class="m-stack__item m-stack__item--center">
							<div class="m-login__account">
								<span class="m-login__account-msg">
									Belum Punya Akun ?
								</span>&nbsp;&nbsp;
								<a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">Daftar</a>
							</div>
						</div> -->
			</div>
		</div>
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center"
			style="background-image: url(<?= base_url('assets/') ?>app/media/img//bg/bg-4.jpg)">
			<div class="m-grid__item">
				<h3 class="m-login__welcome">I LOVE ROHIL</h3>
				<p class="m-login__msg">
					Sumber Informasi Beasiswa untuk warga Rokan Hilir.
					<br> Di ILOVE ROHIL, anda dapat menemukan peluang
					<br>beasiswa pendidikan yang sesuai dengan kebutuhan Anda.
				</p>
			</div>
		</div>
	</div>
</div>
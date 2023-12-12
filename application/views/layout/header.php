<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>ILOVEROHIL | Informasi Lengkap Optimal Valid Efesien Rokan Hilir</title>
	<meta name="description" content="Headers datatables examples">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->

	<!--begin::Page Vendors Styles -->
	<link href="<?= base_url('assets/') ?>vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="<?= base_url('assets/') ?>vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Page Vendors Styles -->
	<!--begin::Page Vendors Styles -->
	<link href="<?= base_url('assets/') ?>vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

	<!--begin::Base Styles -->
	<link href="<?= base_url('assets/') ?>vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="<?= base_url('assets/') ?>vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
	<link href="<?= base_url('assets/') ?>demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="<?= base_url('assets/') ?>demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Base Styles -->
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>demo/default/media/img/logo/school.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">

		<!-- BEGIN: Header -->
		<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">

					<!-- BEGIN: Brand -->
					<div class="m-stack__item m-brand  m-brand--skin-dark ">
						<div class="m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<a href="<?= site_url('Admin/') ?>" class="m-brand__logo-wrapper">
									<img alt="" src="<?= base_url('assets/') ?>demo/default/media/img/logo/LOGOILR.png" />
								</a>
							</div>
							<div class="m-stack__item m-stack__item--middle m-brand__tools">

								<!-- BEGIN: Left Aside Minimize Toggle -->
								<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Aside Left Menu Toggler -->
								<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Header Menu Toggler -->
								<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Topbar Toggler -->
								<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
									<i class="flaticon-more"></i>
								</a>

								<!-- BEGIN: Topbar Toggler -->
							</div>
						</div>
					</div>

					<!-- END: Brand -->
					<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

						<!-- BEGIN: Horizontal Menu -->
						<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
							<i class="la la-close"></i>
						</button>
						<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
						<br>	
						<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
									<a href="javascript:;" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-add"></i>
										<span class="m-menu__link-text">Actions</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>

								</li>
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
									<a href="javascript:;" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-line-graph"></i>
										<span class="m-menu__link-text">Reports</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>

								</li>
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
									<a href="javascript:;" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-paper-plane"></i>
										<span class="m-menu__link-title">
											<span class="m-menu__link-wrap">
												<span class="m-menu__link-text">Apps</span>
												<span class="m-menu__link-badge">
												</span>
											</span>
										</span>
										<i class="m-menu__hor-arrow la la-angle-down"></i>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
								</li>
							</ul>
						</div>

						<!-- END: Horizontal Menu -->

						<!-- BEGIN: Topbar -->
						<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
							<div class="m-stack__item m-topbar__nav-wrapper">
								<ul class="m-topbar__nav m-nav m-nav--inline">
									<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-nav__link-icon">
												<i class="flaticon-search-1"></i>
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
											<div class="m-dropdown__inner ">
												<div class="m-dropdown__header">
													<form class="m-list-search__form">
														<div class="m-list-search__form-wrapper">
															<span class="m-list-search__form-input-wrapper">
																<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
															</span>
															<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																<i class="la la-remove"></i>
															</span>
														</div>
													</form>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
														<div class="m-dropdown__content">
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
										<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
											<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
											<span class="m-nav__link-icon">
												<i class="flaticon-music-2"></i>
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(<?= base_url('assets/') ?>app/media/img/misc/notification_bg.jpg); background-size: cover;">
													<span class="m-dropdown__header-title">9 New</span>
													<span class="m-dropdown__header-subtitle">User Notifications</span>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
																	Alerts
																</a>
															</li>
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
															</li>
															<li class="nav-item m-tabs__item">
																<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																				<span class="m-list-timeline__text">12
																					new users registered</span>
																				<span class="m-list-timeline__time">Just
																					now</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">System
																					shutdown
																					<span class="m-badge m-badge--success m-badge--wide">pending</span>
																				</span>
																				<span class="m-list-timeline__time">14
																					mins</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">New
																					invoice received</span>
																				<span class="m-list-timeline__time">20
																					mins</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">DB
																					overloaded 80%
																					<span class="m-badge m-badge--info m-badge--wide">settled</span>
																				</span>
																				<span class="m-list-timeline__time">1
																					hr</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">System
																					error -
																					<a href="#" class="m-link">Check</a>
																				</span>
																				<span class="m-list-timeline__time">2
																					hrs</span>
																			</div>
																			<div class="m-list-timeline__item m-list-timeline__item--read">
																				<span class="m-list-timeline__badge"></span>
																				<span href="" class="m-list-timeline__text">New
																					order received
																					<span class="m-badge m-badge--danger m-badge--wide">urgent</span>
																				</span>
																				<span class="m-list-timeline__time">7
																					hrs</span>
																			</div>
																			<div class="m-list-timeline__item m-list-timeline__item--read">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">Production
																					server down</span>
																				<span class="m-list-timeline__time">3
																					hrs</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge"></span>
																				<span class="m-list-timeline__text">Production
																					server up</span>
																				<span class="m-list-timeline__time">5
																					hrs</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
																<div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
																	<div class="m-list-timeline m-list-timeline--skin-light">
																		<div class="m-list-timeline__items">
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">New
																					order received</a>
																				<span class="m-list-timeline__time">Just
																					now</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																				<a href="" class="m-list-timeline__text">New
																					invoice received</a>
																				<span class="m-list-timeline__time">20
																					mins</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																				<a href="" class="m-list-timeline__text">Production
																					server up</a>
																				<span class="m-list-timeline__time">5
																					hrs</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">New
																					order received</a>
																				<span class="m-list-timeline__time">7
																					hrs</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">System
																					shutdown</a>
																				<span class="m-list-timeline__time">11
																					mins</span>
																			</div>
																			<div class="m-list-timeline__item">
																				<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																				<a href="" class="m-list-timeline__text">Production
																					server down</a>
																				<span class="m-list-timeline__time">3
																					hrs</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
																<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
																	<div class="m-stack__item m-stack__item--center m-stack__item--middle">
																		<span class="">All caught up!
																			<br>No new logs.</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-topbar__userpic">
												<img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="m--img-rounded m--marginless" alt="" />
											</span>
											<span class="m-topbar__username m--hide">Nick</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(<?= base_url('assets/') ?>app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
													<div class="m-card-user m-card-user--skin-dark">
														<div class="m-card-user__pic">
															<?php if ($user && isset($user['gambar'])) : ?>
																<img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="m--img-rounded m--marginless" alt="" />
															<?php endif; ?>

															<!--<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>-->
														</div>
														<div class="m-card-user__details">
															<span class="m-card-user__name m--font-weight-500">
																<?= $user['nama']; ?>
															</span>
														</div>
													</div>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav m-nav--skin-light">
															<li class="m-nav__section m--hide">
																<span class="m-nav__section-text">Section</span>
															</li>
															<li class="m-nav__item">
																<!-- <a href="../../../header/profile.html" class="m-nav__link"> -->
																<i class="m-nav__link-icon flaticon-profile-1"></i>
																<span class="m-nav__link-title">
																	<span class="m-nav__link-wrap">
																		<span class="m-nav__link-text">My Profile</span>
																	</span>
																</span>
																</a>
															</li>
															<li class="m-nav__item">
																<!-- <a href="../../../header/profile.html" class="m-nav__link"> -->
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
																</a>
															</li>
															<li class="m-nav__item">
																<!-- <a href="../../../header/profile.html" class="m-nav__link"> -->
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
																</a>
															</li>
															<li class="m-nav__separator m-nav__separator--fit">
															</li>
															<li class="m-nav__item">
																<!-- <a href="../../../header/profile.html" class="m-nav__link"> -->
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
																</a>
															</li>
															<li class="m-nav__item">
																<!-- <a href="../../../header/profile.html" class="m-nav__link"> -->
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
																</a>
															</li>
															<li class="m-nav__separator m-nav__separator--fit">
															</li>
															<li class="m-nav__item">
																<a href="<?= site_url('Auth/logout') ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- END: Topbar -->
					</div>
				</div>
			</div>
		</header>

		<!-- END: Header -->

		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

				<!-- BEGIN: Aside Menu -->
				<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<?php
						if ($user['role'] == 'Admin') { ?>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Admin/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Mahasiswa/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Mahasiswa</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Universitas/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Universitas</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Nilai/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-edit"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Nilai</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Informasi') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-edit"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Informasi</span>
										</span>
									</span>
								</a>
							</li>
						<?php } else if ($user['role'] == 'User') {
						?>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('User/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Profil/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-avatar"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Profil Saya</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('NilaiUSR/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Nilai Semester</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('InfoUser/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-edit"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Informasi</span>
										</span>
									</span>
								</a>
							</li>
						<?php } else {
						?>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('SuperAdmin/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Dashboard</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Mahasiswa/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Mahasiswa</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Universitas/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Universitas</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('Nilai/') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-edit"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Nilai</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item " aria-haspopup="true">
								<a href="<?= site_url('SuperAdmin/data') ?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-edit"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">Data Admin</span>
										</span>
									</span>
								</a>
							</li>
						<?php
						} ?>
					</ul>
				</div>
			</div>
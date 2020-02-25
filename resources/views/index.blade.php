<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Keen | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src="assets/media/logos/logo-6.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->

		<!-- begin:: Root -->
		<div class="kt-grid kt-grid--hor kt-grid--root">

			<!-- begin:: Page -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin::Aside Brand -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="index.html">
								<img alt="Logo" src="assets/media/logos/logo-6.png" />
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-graphic"></i><span class="kt-menu__link-text">Dashboards</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Dashboards</span></span></li>
											<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Navy Aside</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/brand-aside.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Brand Aside</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/navy-header.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Navy Header</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/light-aside.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Light Aside</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/brand-header.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Brand Header</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Custom</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Apps</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Users</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Users</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/list-columns-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/list-columns-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/list-columns-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Columns 3</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/list-row.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Row</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/list-datatable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List - Datatable</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/add.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Add User</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/users/edit.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit User</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Profile</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Profile</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/overview-1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Overview 1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/overview-2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Overview 2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/overview-3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Overview 3</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/personal-information.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Personal Information</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/account-settings.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Account Settings</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/change-password.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Change Password</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/profile/user-settings.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">User Settings</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="custom/inbox.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Inbox</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-copy"></i><span class="kt-menu__link-text">Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Pages</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Wizards</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Wizards</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/wizards/wizard-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Wizard v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/wizards/wizard-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Wizard v2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/wizards/wizard-v3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Wizard v3</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/wizards/wizard-v4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Wizard v4</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Blog</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Blog</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/blog/grid.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Blog Grid</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/blog/grid-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Blog Grid v2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/blog/list.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Blog List</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/blog/post.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Blog Post</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pricing</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Pricing</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/pricing/pricing-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pricing v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/pricing/pricing-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pricing v2</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Invoices</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Invoices</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/invoices/invoice-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Invoice v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/invoices/invoice-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Invoice v2</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQs</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">FAQs</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/faq/faq-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/faq/faq-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ v2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/faq/faq-v3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ v3</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/faq/faq-v4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">FAQ v4</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Login Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/login/login-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Login v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/login/login-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Login v2</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Error Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/error/404-v1.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">404 - v1</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/error/404-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">404 - v2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/error/404-v3.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">404 - v3</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="custom/error/404-v4.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">404 - v4</span></a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Layout</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-open-box"></i><span class="kt-menu__link-text">Features</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Features</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Header</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/header/non-fixed.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Non-fixed</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/header/menu-removed.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Menu Removed</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Subheader</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/subheader/fixed.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Fixed</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/subheader/subheader-v2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Subheader v2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/subheader/removed.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Removed</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Aside</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/aside/minimized.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Minimized</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/aside/non-fixed.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Non-fixed</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/aside/dropdown-menu.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Dropdown Menu</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/aside/no-aside.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">No Aside</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/aside/no-aside-fixed-content.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">No Aside & Fixed Content</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Misc</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/misc/fixed-content.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Fixed Content</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/misc/fixed-content-subheader.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Fixed Content & Subheader</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/misc/secondary-aside.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Secondary Aside</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/misc/fixed-footer.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Fixed Footer</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="layout/features/misc/blank-page.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Blank Page</span></a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a target="_blank" href="https://keenthemes.com/keen/preview/demo1/builder.html" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Builder</span></a></li>
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Components</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-layers-1"></i><span class="kt-menu__link-text">Base</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Base</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/alert.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Alert</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/buttons.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Buttons</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/button-group.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Button Group</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/card.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Card</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/collapse.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Collapse</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/accordions.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Accordions</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/dropdown.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Dropdown</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/list-group.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List Group</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/modal.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Modal</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/navs.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Navs</span></a></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tabs</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/tabs/base.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base Tabs</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/tabs/line.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Line Tabs</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/tabs/button.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Button Tabs</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/badge.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Badge</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/spinners.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Spinners</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/toasts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Toasts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/pagination.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pagination</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/popovers.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Popovers</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/tooltips.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tooltips</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/progress.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Progress</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/breadcrumb.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Breadcrumb</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/base/table.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Table</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-start-up"></i><span class="kt-menu__link-text">Custom</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Custom</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Colors</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Typography</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/spinners.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Spinners</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/notes.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Notes</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/lists.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Lists</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/notifications.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Notifications</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/media.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Media</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/timeline.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Timeline</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/navs.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Navs</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/pagination.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pagination</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/custom/head.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Head</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-cube-1"></i><span class="kt-menu__link-text">Extended</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--brand">2</span></span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Extended</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--brand">2</span></span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/sticky-panels.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Sticky Panels</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/blockui.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Block UI</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/scroll.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Perfect Scroll</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/toastr.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Toastr</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/treeview.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tree View</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/sweetalert2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">SweetAlert2</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/dual-listbox.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Dual Listbox</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/cropper.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Image Cropper</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/session-timeout.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Session Timeout</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/extended/idle-timer.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Idle Timer</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-pie-chart-4"></i><span class="kt-menu__link-text">Widgets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Widgets</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/widgets/charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/widgets/general.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">General</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-copy"></i><span class="kt-menu__link-text">Forms</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Forms</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Controls</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/base.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base Inputs</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/input-group.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Input Groups</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/checkbox.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Checkbox</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/radio.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Radio</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/switch.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Switch</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/option.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Options</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/controls/avatar.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Avatar Inputs</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Widgets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-datepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Datepicker</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-datetimepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Datetimepicker</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-timepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Timepicker</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-daterangepicker.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Daterangepicker</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-touchspin.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Touchspin</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-maxlength.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Maxlength</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/tagify.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tagify</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/select2.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Select2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-multipleselectsplitter.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multiple Select Splitter</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/bootstrap-select.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Bootstrap Select</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/typeahead.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Typeahead</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/nouislider.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">noUiSlider</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/input-mask.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Input Masks</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/autosize.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Autosize</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/clipboard.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Clipboard</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/dropzone.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Dropzone</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/widgets/recaptcha.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google reCaptcha</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Editors</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/tinymce.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">TinyMCE</span></a></li>
														<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">CKEditor</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
															<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
																<ul class="kt-menu__subnav">
																	<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/ckeditor-classic.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CKEditor Classic</span></a></li>
																	<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/ckeditor-inline.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CKEditor Inline</span></a></li>
																	<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/ckeditor-balloon.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CKEditor Balloon</span></a></li>
																	<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/ckeditor-balloon-block.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CKEditor Balloon Block</span></a></li>
																	<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/ckeditor-document.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">CKEditor Document</span></a></li>
																</ul>
															</div>
														</li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/quill.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Quill Text Editor</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/summernote.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Summernote</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/editors/bootstrap-markdown.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Markdown</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Layouts</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/layouts/basic.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/layouts/multi-column.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multi Column</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/layouts/action-bars.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic Action Bar</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/layouts/sticky-action-bars.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Sticky Action Bars</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/layouts/repeater.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Form Repeater</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Validation</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/validation/states.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">States</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/validation/controls.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Controls</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/validation/widgets.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Widgets</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">File Upload</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/file-upload/dropzonejs.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">DropzoneJS</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/forms/file-upload/uppy.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Uppy</span></a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-browser-2"></i><span class="kt-menu__link-text">Keen Datatable</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Keen Datatable</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/data-local.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Data</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/data-json.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">JSON Data</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/data-ajax.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Data</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/html-table.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HTML Table</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/local-sort.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Sort</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/base/translation.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Translation</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/advanced/record-selection.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Record Selection</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/advanced/row-details.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Details</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/advanced/modal.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Modal Examples</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/advanced/column-rendering.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Rendering</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/advanced/column-width.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Width</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Scrolling</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/scrolling/vertical.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Vertical Scrolling</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/scrolling/horizontal.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Horizontal Scrolling</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Child Datatables</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/child/data-local.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Local Data</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/child/data-ajax.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Remote Data</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">API</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/api/methods.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">API Methods</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/keen-datatable/api/events.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Events</span></a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-list-3"></i><span class="kt-menu__link-text">DataTables</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">DataTables</span></span></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/basic/basic.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic Tables</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/basic/scrollable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Scrollable Tables</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/basic/headers.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Complex Headers</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/basic/paginations.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Pagination Options</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/column-rendering.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Rendering</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/multiple-controls.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Multiple Controls</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/column-visibility.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Visibility</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/row-callback.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Callback</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/row-grouping.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Row Grouping</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/advanced/footer-callback.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Footer Callback</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Data sources</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/data-sources/html.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HTML</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/data-sources/javascript.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Javascript</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/data-sources/ajax-client-side.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Client-side</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/data-sources/ajax-server-side.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Ajax Server-side</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Search Options</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/search-options/column-search.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Column Search</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/search-options/advanced-search.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Advanced Search</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Extensions</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/buttons.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Buttons</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/colreorder.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">ColReorder</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/keytable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">KeyTable</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/responsive.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Responsive</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/rowgroup.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">RowGroup</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/rowreorder.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">RowReorder</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/scroller.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Scroller</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="components/datatables/extensions/select.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Select</span></a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-gift-1"></i><span class="kt-menu__link-text">Icons</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/icons/flaticon.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Flaticon</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/icons/fontawesome5.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Fontawesome 5</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/icons/lineawesome.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Lineawesome</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/icons/socicons.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Socicons</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-browser-1"></i><span class="kt-menu__link-text">Portlets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Portlets</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/portlets/base.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/portlets/tools.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tools</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/portlets/draggable.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Draggable</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/portlets/sticky.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Sticky</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-calendar-2"></i><span class="kt-menu__link-text">Calendar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Calendar</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/basic.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Basic</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/list-view.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List View</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/agenda-week.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Agenda Week View</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/google.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google Calendar</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/external.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">External Events</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/calendar/rendering.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Event Rendering</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-graph-1"></i><span class="kt-menu__link-text">Charts</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Charts</span></span></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/charts/flotcharts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Flot Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/charts/google-charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Google Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/charts/morris-charts.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Morris Charts</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="components/charts/chart-js.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Chart JS</span></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->

					<!-- begin:: Aside Footer -->
					<div class="kt-aside__footer kt-grid__item" id="kt_aside_footer">
						<div class="kt-aside__footer-nav">
							<div class="kt-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
							</div>
							<div class="kt-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-cube"></i></a>
							</div>
							<div class="kt-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-bell-alarm-symbol"></i></a>
							</div>
							<div class="kt-aside__footer-item">
								<button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flaticon2-add"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-left">
									<ul class="kt-nav">
										<li class="kt-nav__section kt-nav__section--first">
											<span class="kt-nav__section-text">Export Tools</span>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-print"></i>
												<span class="kt-nav__link-text">Print</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-copy"></i>
												<span class="kt-nav__link-text">Copy</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-excel-o"></i>
												<span class="kt-nav__link-text">Excel</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-text-o"></i>
												<span class="kt-nav__link-text">CSV</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-pdf-o"></i>
												<span class="kt-nav__link-text">PDF</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="kt-aside__footer-item">
								<a href="#" class="btn btn-icon"><i class="flaticon2-calendar-2"></i></a>
							</div>
						</div>
					</div>

					<!-- end:: Aside Footer-->
				</div>

				<!-- end:: Aside -->

				<!-- begin:: Wrapper -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
								<ul class="kt-menu__nav ">
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel kt-menu__item--active" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pages</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
											<ul class="kt-menu__subnav">
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create New Post</span></a></li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Generate Reports</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">2</span></span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Manage Orders</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Latest Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Pending Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Processed Orders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Delivery Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Payments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customers</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Customer Feedbacks</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customer Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Supplier Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reviewed Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Resolved Feedbacks</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Feedback Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Register Member</span></a></li>
											</ul>
										</div>
									</li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
											<div class="kt-menu__subnav">
												<ul class="kt-menu__content">
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finance Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Annual Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">HR Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-clipboard"></i><span class="kt-menu__link-text">IPO Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Finance Margins</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-2"></i><span class="kt-menu__link-text">Revenue Reports</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coca Cola CRM</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Delta Airlines Booking Site</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Malibu Accounting</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Vineseed Website Rewamp</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Zircon Mobile App</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Mercury CMS</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HR Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Directory</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Client Directory</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Salary Reports</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Payslips</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Corporate Expenses</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Expenses</span></a></li>
														</ul>
													</li>
													<li class="kt-menu__item ">
														<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reporting Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
														<ul class="kt-menu__inner">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Adjusments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Sources & Mediums</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reporting Settings</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Conversions</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Flows</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Apps</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
										<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
											<ul class="kt-menu__subnav">
												<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">eCommerce</span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Audience</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Active Users</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-1"></i><span class="kt-menu__link-text">User Explorer</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-lifebuoy"></i><span class="kt-menu__link-text">Users Flows</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Market Segments</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic"></i><span class="kt-menu__link-text">User Reports</span></a></li>
														</ul>
													</div>
												</li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Marketing</span></a></li>
												<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Campaigns</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">3</span></span></a></li>
												<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cloud Manager</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
													<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
														<ul class="kt-menu__subnav">
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add"></i><span class="kt-menu__link-text">File Upload</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">3</span></span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-signs-1"></i><span class="kt-menu__link-text">File Attributes</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-folder"></i><span class="kt-menu__link-text">Folders</span></a></li>
															<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text">System Settings</span></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- end:: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: Search -->
							<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
									<div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
										<form method="get" class="kt-quick-search__form">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
												<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
												<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
											</div>
										</form>
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>

							<!--end: Search -->

							<!--begin: Notifications -->
							<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
									<span class="kt-header__topbar-icon">
										<i class="flaticon2-bell-alarm-symbol"></i>
										<span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
									<form>
										<div class="kt-head" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
											<h3 class="kt-head__title">User Notifications</h3>
											<div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span></div>
										</div>
										<div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-line-chart kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New order has been received
													</div>
													<div class="kt-notification__item-time">
														2 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-box-1 kt-font-brand"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer is registered
													</div>
													<div class="kt-notification__item-time">
														3 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-chart2 kt-font-danger"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Application has been approved
													</div>
													<div class="kt-notification__item-time">
														3 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-image-file kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New file has been uploaded
													</div>
													<div class="kt-notification__item-time">
														5 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-user kt-font-info"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New user feedback received
													</div>
													<div class="kt-notification__item-time">
														8 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-pie-chart-2 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														System reboot has been successfully completed
													</div>
													<div class="kt-notification__item-time">
														12 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-favourite kt-font-focus"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New order has been placed
													</div>
													<div class="kt-notification__item-time">
														15 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item kt-notification__item--read">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-safe kt-font-primary"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Company meeting canceled
													</div>
													<div class="kt-notification__item-time">
														19 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-psd kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New report has been received
													</div>
													<div class="kt-notification__item-time">
														23 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon-download-1 kt-font-danger"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Finance report has been generated
													</div>
													<div class="kt-notification__item-time">
														25 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon-security kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer comment recieved
													</div>
													<div class="kt-notification__item-time">
														2 days ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-pie-chart kt-font-focus"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer is registered
													</div>
													<div class="kt-notification__item-time">
														3 days ago
													</div>
												</div>
											</a>
										</div>
									</form>
								</div>
							</div>

							<!--end: Notifications -->

							<!--begin: Quick Actions -->
							<div class="kt-header__topbar-item">
								<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_quick_actions_toggler_btn">
									<span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
								</div>
							</div>

							<!--end: Quick Actions -->

							<!--begin:: Languages -->
							<div class="kt-header__topbar-item kt-header__topbar-item--langs">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<img class="" src="assets/media/flags/226-united-states.svg" alt="" />
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
									<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
										<li class="kt-nav__item kt-nav__item--active">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/226-united-states.svg" alt="" /></span>
												<span class="kt-nav__link-text">English</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/128-spain.svg" alt="" /></span>
												<span class="kt-nav__link-text">Spanish</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/162-germany.svg" alt="" /></span>
												<span class="kt-nav__link-text">German</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<!--end:: Languages -->

							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">

									<!--use "kt-rounded" class for rounded avatar style-->
									<div class="kt-header__topbar-user kt-rounded-">
										<span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-header__topbar-username kt-hidden-mobile">Sean</span>
										<img alt="Pic" src="assets/media/users/300_25.jpg" class="kt-rounded-" />

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
									<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
										<div class="kt-user-card__wrapper">
											<div class="kt-user-card__pic">

												<!--use "kt-rounded" class for rounded avatar style-->
												<img alt="Pic" src="assets/media/users/300_21.jpg" class="kt-rounded-" />
											</div>
											<div class="kt-user-card__details">
												<div class="kt-user-card__name">Alex Stone</div>
												<div class="kt-user-card__position">CTO, Loop Inc.</div>
											</div>
										</div>
									</div>
									<ul class="kt-nav kt-margin-b-10">
										<li class="kt-nav__item">
											<a href="custom/profile/personal-information.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
												<span class="kt-nav__link-text">My Profile</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="custom/profile/overview-1.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
												<span class="kt-nav__link-text">My Tasks</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="custom/profile/overview-2.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
												<span class="kt-nav__link-text">Messages</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="custom/profile/account-settings.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
												<span class="kt-nav__link-text">Settings</span>
											</a>
										</li>
										<li class="kt-nav__separator kt-nav__separator--fit"></li>
										<li class="kt-nav__custom kt-space-between">
											<a href="custom/login/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
											<i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
										</li>
									</ul>
								</div>
							</div>

							<!--end: User Bar -->

							<!--begin:: Quick Panel Toggler -->
							<div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
								<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
									<i class="flaticon2-grids"></i>
								</span>
							</div>

							<!--end:: Quick Panel Toggler -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">Dashboard</h3>
									<span class="kt-subheader__separator kt-hidden"></span>
									<div class="kt-subheader__breadcrumbs">
										<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="" class="kt-subheader__breadcrumbs-link">
											Dashboards </a>
										<span class="kt-subheader__breadcrumbs-separator"></span>
										<a href="" class="kt-subheader__breadcrumbs-link">
											Navy Aside </a>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Reports" data-placement="top"><i class="flaticon2-writing"></i></a>
										<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Calendar" data-placement="top"><i class="flaticon2-hourglass-1"></i></a>
										<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
											<a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon2-add-1"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
												<ul class="kt-nav kt-nav--active-bg" role="tablist">
													<li class="kt-nav__item">
														<a href="" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-psd"></i>
															<span class="kt-nav__link-text">Document</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a class="kt-nav__link" role="tab">
															<i class="kt-nav__link-icon flaticon2-supermarket"></i>
															<span class="kt-nav__link-text">Message</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-shopping-cart"></i>
															<span class="kt-nav__link-text">Product</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a class="kt-nav__link" role="tab">
															<i class="kt-nav__link-icon flaticon2-chart2"></i>
															<span class="kt-nav__link-text">Report</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded">pdf</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-sms"></i>
															<span class="kt-nav__link-text">Post</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-avatar"></i>
															<span class="kt-nav__link-text">Customer</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<a href="#" class="btn btn-sm btn-elevate btn-brand btn-elevate" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
											<span class="kt-opacity-7" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
											<span class="kt-font-bold" id="kt_dashboard_daterangepicker_date">Jan 11</span>
											<i class="flaticon-calendar-with-a-clock-time-tools kt-padding-l-5 kt-padding-r-0"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--begin::Dashboard 1-->

							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Author Sales</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-19">
												<div class="kt-widget-19__title">
													<div class="kt-widget-19__label"><small>$</small>64M</div>
													<img class="kt-widget-19__bg" src="assets/media/misc/iconbox_bg.png" alt="bg" />
												</div>
												<div class="kt-widget-19__data">

													<!--Doc: For the chart bars you can use state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-19__chart">
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-45" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="45"></div>
														</div>
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-95" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="95"></div>
														</div>
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-63" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="63"></div>
														</div>
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-11" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="11"></div>
														</div>
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-46" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="46"></div>
														</div>
														<div class="kt-widget-19__bar">
															<div class="kt-widget-19__bar-88" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="88"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Technologies</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Export Options
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Users</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">Reports</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--danger">9</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Statements</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Customer Support</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-brand btn-bold btn-sm" href="#">Proceed</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>

															<!--end::Nav-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-21">
												<div class="kt-widget-21__title">
													<div class="kt-widget-21__label">9.3M</div>
													<img src="assets/media/misc/iconbox_bg.png" class="kt-widget-21__bg" alt="bg" />
												</div>
												<div class="kt-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-21__legends">
														<div class="kt-widget-21__legend">
															<i class="kt-bg-brand"></i>
															<span>HTML</span>
														</div>
														<div class="kt-widget-21__legend">
															<i class="kt-shape-bg-color-4"></i>
															<span>CSS</span>
														</div>
														<div class="kt-widget-21__legend">
															<i class="kt-shape-bg-color-3"></i>
															<span>Angular</span>
														</div>
													</div>
													<div class="kt-widget-21__chart">
														<div class="kt-widget-21__stat">+37%</div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_technologies_chart" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Total Orders</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-20">
												<div class="kt-widget-20__title">
													<div class="kt-widget-20__label">17M</div>
													<img class="kt-widget-20__bg" src="assets/media/misc/iconbox_bg.png" alt="bg" />
												</div>
												<div class="kt-widget-20__data">
													<div class="kt-widget-20__chart">

														<!--Doc: For the chart initialization refer to "widgetTotalOrdersChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_total_orders_chart"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-widget ">
										<div class="kt-portlet__body">
											<div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="kt-slider__head">
													<div class="kt-slider__label">Announcements</div>
													<div class="kt-slider__nav">
														<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-1" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-1" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Keen Admin Launch Day</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	<div class="btn btn-sm btn-label btn-bold">
																		07 OCT, 2018
																	</div>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Incredibly Positive Reviews</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__title">
																	<div class="btn btn-sm btn-label btn-bold">
																		17 NOV, 2018
																	</div>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Award Winning Theme</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	<div class="btn btn-sm btn-label btn-bold">
																		03 SEP, 2018
																	</div>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
										<div class="kt-portlet__body">
											<div id="kt-widget-slider-13-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="4000">
												<div class="kt-slider__head">
													<div class="kt-slider__label">Projects</div>
													<div class="kt-slider__nav">
														<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-2" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-2" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Keen Admin Launch Day</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__progress">
																	<div class="kt-widget-13__progress-info">
																		<div class="kt-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="kt-widget-13__progress-value">78%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">First Milestone Achivement</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__progress">
																	<div class="kt-widget-13__progress-info">
																		<div class="kt-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="kt-widget-13__progress-value">55%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Reached 50,000 sales</a>
																<div class="kt-widget-13__desc">
																	To start a blog, think of a topic about and first brainstorm party is ways to write details
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__progress">
																	<div class="kt-widget-13__progress-info">
																		<div class="kt-widget-13__progress-status">
																			Progress
																		</div>
																		<div class="kt-widget-13__progress-value">24%</div>
																	</div>
																	<div class="progress">
																		<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
										<div class="kt-portlet__body">
											<div id="kt-widget-slider-13-3" class="kt-slider carousel slide" data-ride="carousel" data-interval="12000">
												<div class="kt-slider__head">
													<div class="kt-slider__label">Today's Schedule</div>
													<div class="kt-slider__nav">
														<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-3" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-3" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Octa Pre-Launch Meeting</a>
																<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
																	9:20AM - 10:00AM
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>
																	<span class="kt-label-font-color-2">490 E Main St. Norwich...</span>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">UI/UX Design Updates</a>
																<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
																	11:15AM - 12:30PM
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>
																	<span class="kt-label-font-color-2">246 R St. Manhattan NY...</span>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
													<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																<a class="kt-widget-13__title" href="#">Sales Report Summary Meet-up</a>
																<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
																	4:30PM - 5:30PM
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>
																	<span class="kt-label-font-color-2">492 F Sub St. Norwich CT...</span>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>

							<!--end::Row-->

							<!--begin::Row-->
							<div class="row">
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Top Products</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-1">
												<ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_tabs_19_15e310a35c9ba7" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-graphic"></i></span>
															<span class="nav-link-title">Settings</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_tabs_19_25e310a35c9ba7" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-position"></i></span>
															<span class="nav-link-title">Code</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_tabs_19_35e310a35c9ba7" role="tab">
															<span class="nav-link-icon"><i class="flaticon2-layers-1"></i></span>
															<span class="nav-link-title">Design</span>
														</a>
													</li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="kt_tabs_19_15e310a35c9ba7" role="tabpanel">
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">
																	HTML 5 Templates
																</a>
																<div class="kt-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+79%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">
																	Wordpress Themes
																</a>
																<div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+21%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
																<div class="kt-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">-16%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
																<div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+4%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
																<div class="kt-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+34</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="kt_tabs_19_25e310a35c9ba7" role="tabpanel">
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
																<div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+4%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">HTML 5 Templates</a>
																<div class="kt-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+79%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">Wordpress Themes</a>
																<div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+21%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
																<div class="kt-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">-16%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
																<div class="kt-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+34</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="kt_tabs_19_35e310a35c9ba7" role="tabpanel">
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
																<div class="kt-widget-1__item-desc">Shops, Fasion wep sites & atc</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">-16%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
																<div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+4%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">Latest Trends</a>
																<div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+34%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">HTML 5 Templates</a>
																<div class="kt-widget-1__item-desc">Font-end,Admin & Email</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+79%</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
																<div class="kt-widget-1__item-desc">Font-end & Admin</div>
															</div>
															<div class="kt-widget-1__item-stats">
																<div class="kt-widget-1__item-value">+34</div>
																<div class="kt-widget-1__item-progress">
																	<div class="progress">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Sales Statistics</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-label-brand btn-sm btn-bold dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Export
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-9">
												<div class="kt-widget-9__panel">
													<div class="kt-widget-9__legends">
														<div class="kt-widget-9__legend">
															<div class="kt-widget-9__legend-bullet kt-bg-brand"></div>
															<div class="kt-widget-9__legend-label">Author</div>
														</div>
														<div class="kt-widget-9__legend">
															<div class="kt-widget-9__legend-bullet kt-label-bg-color-1"></div>
															<div class="kt-widget-9__legend-label">Customer</div>
														</div>
													</div>
													<div class="kt-widget-9__toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-default dropdown-toggle btn-font-sm btn-bold btn-upper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																August
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="kt-nav">
																	<li class="kt-nav__section kt-nav__section--first">
																		<span class="kt-nav__section-text">Export Tools</span>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-print"></i>
																			<span class="kt-nav__link-text">Print</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-copy"></i>
																			<span class="kt-nav__link-text">Copy</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-excel-o"></i>
																			<span class="kt-nav__link-text">Excel</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-text-o"></i>
																			<span class="kt-nav__link-text">CSV</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																			<span class="kt-nav__link-text">PDF</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget-9__chart">

													<!--Doc: For the chart initialization refer to "widgetSalesStatisticsChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
													<canvas id="kt_chart_sales_statistics" height="300"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet--tabs">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Tasks
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#kt_portlet_tabs_1_1_content" role="tab" aria-selected="false">
															Today
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_2_content" role="tab" aria-selected="false">
															Week
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_3_content" role="tab" aria-selected="true">
															Month
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane fade active show" id="kt_portlet_tabs_1_1_content" role="tabpanel">
													<div class="kt-widget-5">
														<div class="kt-widget-5__item kt-widget-5__item--info">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Management meeting
																</a>
																<div class="kt-widget-5__item-datetime">
																	09:30 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="kt-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--brand">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="kt-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--success">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="kt-widget-5__item-datetime">
																	03: 00 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Project Launch
																</a>
																<div class="kt-widget-5__item-datetime">
																	11: 00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--success">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Server maintenance
																</a>
																<div class="kt-widget-5__item-datetime">
																	4: 30 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="kt_portlet_tabs_1_2_content" role="tabpanel">
													<div class="kt-widget-5">
														<div class="kt-widget-5__item kt-widget-5__item--brand">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="kt-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="kt-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--brand">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="kt-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="kt-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--success">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="kt-widget-5__item-datetime ">
																	03: 00 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check ">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--info ">
															<div class="kt-widget-5__item-info ">
																<a href="#" class="kt-widget-5__item-title">
																	Management meeting
																</a>
																<div class="kt-widget-5__item-datetime ">
																	09:30 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check ">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade " id="kt_portlet_tabs_1_3_content" role="tabpanel">
													<div class="kt-widget-5 ">
														<div class="kt-widget-5__item kt-widget-5__item--success">
															<div class="kt-widget-5__item-info ">
																<a href="#" class="kt-widget-5__item-title">
																	NYCS internal discussion
																</a>
																<div class="kt-widget-5__item-datetime">
																	03: 00 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info ">
																<a href="#" class="kt-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="kt-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--danger">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Replace datatables rows color
																</a>
																<div class="kt-widget-5__item-datetime">
																	12:00 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--brand">
															<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="kt-widget-5__item-datetime">
																	01:20 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--brand">
															<div class="kt-widget-5__item-info ">
																<a href="#" class="kt-widget-5__item-title">
																	Export Navitare booking table
																</a>
																<div class="kt-widget-5__item-datetime ">
																	01:20 PM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
														<div class="kt-widget-5__item kt-widget-5__item--info">
															<div class="kt-widget-5__item-info ">
																<a href="#" class="kt-widget-5__item-title">
																	Management meeting
																</a>
																<div class="kt-widget-5__item-datetime">
																	09:30 AM
																</div>
															</div>
															<div class="kt-widget-5__item-check">
																<label class="kt-radio">
																	<input type="radio" checked="checked" name="radio1">
																	<span></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-14">
										<div class="kt-portlet__body">

											<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
											<div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="kt-slider__head">
													<div class="kt-slider__label">New Products</div>
													<div class="kt-slider__nav">
														<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-1" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-1" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="kt-widget-14__body">
															<div class="kt-widget-14__product">
																<div class="kt-widget-14__thumb">
																	<a href="#"><img src="assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="kt-widget-14__content">
																	<a href="#">
																		<h3 class="kt-widget-14__title">Active Smartwatch</h3>
																	</a>
																	<div class="kt-widget-14__desc">
																		Beautifully designed watch that helps you track your fitness and diet – while keeping you motivated!
																	</div>
																</div>
															</div>
															<div class="kt-widget-14__data">
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title kt-font-brand">246</div>
																	<div class="kt-widget-14__desc">Purchases</div>
																</div>
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title">37</div>
																	<div class="kt-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-14__foot">
															<div class="kt-widget-14__foot-info">
																<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="kt-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="kt-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="kt-widget-14__body">
															<div class="kt-widget-14__product">
																<div class="kt-widget-14__thumb">
																	<a href="#"><img src="assets/media/blog/2.jpg" class="kt-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="kt-widget-14__content">
																	<a href="#">
																		<h3 class="kt-widget-14__title">DSLR Lens</h3>
																	</a>
																	<div class="kt-widget-14__desc">
																		Wide-angle, Quick Focus. Emphasis is on modern lenses for 35 mm film SLRs and for DSLRs with sensor sizes less than or equal to 35 mm.
																	</div>
																</div>
															</div>
															<div class="kt-widget-14__data">
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title kt-font-brand">142</div>
																	<div class="kt-widget-14__desc">Purchases</div>
																</div>
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title">25</div>
																	<div class="kt-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-14__foot">
															<div class="kt-widget-14__foot-info">
																<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="kt-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="kt-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="kt-widget-14__body">
															<div class="kt-widget-14__product">
																<div class="kt-widget-14__thumb">
																	<a href="#"><img src="assets/media/blog/4.jpg" class="kt-widget-14__image--landscape" alt="" title="" /></a>
																</div>
																<div class="kt-widget-14__content">
																	<a href="#">
																		<h3 class="kt-widget-14__title">Polaroid Camera</h3>
																	</a>
																	<div class="kt-widget-14__desc">
																		Instant is back! Make photos fun again with the new range of Polaroid Instant Cameras with Vintage Effects and Built in Flash
																	</div>
																</div>
															</div>
															<div class="kt-widget-14__data">
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title kt-font-brand">3578</div>
																	<div class="kt-widget-14__desc">Purchases</div>
																</div>
																<div class="kt-widget-14__info">
																	<div class="kt-widget-14__info-title">457</div>
																	<div class="kt-widget-14__desc">Reviews</div>
																</div>
															</div>
														</div>
														<div class="kt-widget-14__foot">
															<div class="kt-widget-14__foot-info">
																<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
																	24 Nov, 2018
																</div>
																<div class="kt-widget-14__foot-desc">Date of Release</div>
															</div>
															<div class="kt-widget-14__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
										<div class="kt-portlet__body">

											<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
											<div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
												<div class="kt-slider__head">
													<div class="kt-slider__label">New Authors</div>
													<div class="kt-slider__nav">
														<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-2" role="button" data-slide="prev">
															<i class="fa fa-angle-left"></i>
														</a>
														<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-2" role="button" data-slide="next">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
												</div>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<div class="kt-widget-15__body">
															<div class="kt-widget-15__author">
																<div class="kt-widget-15__photo">
																	<a href="#"><img src="assets/media/users/100_14.jpg" alt="" title="" /></a>
																</div>
																<div class="kt-widget-15__detail">
																	<a href="#" class="kt-widget-15__name">Andy John</a>
																	<div class="kt-widget-15__desc">
																		AngularJS Expert
																	</div>
																</div>
															</div>
															<div class="kt-widget-15__wrapper">
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="kt-widget-15__info--item">sale@boatline.com</a>
																</div>
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="kt-widget-15__info--item">(+44) 345 345 4705</a>
																</div>
															</div>
														</div>
														<div class="kt-widget-15__foot">
															<div class="kt-widget-15__foot-info">
																<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="kt-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="kt-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="kt-widget-15__body">
															<div class="kt-widget-15__author">
																<div class="kt-widget-15__photo">
																	<a href="#"><img src="assets/media/users/100_3.jpg" alt="" title="" /></a>
																</div>
																<div class="kt-widget-15__detail">
																	<a href="#" class="kt-widget-15__name">Patrick Smith</a>
																	<div class="kt-widget-15__desc">
																		ReactJS Expert
																	</div>
																</div>
															</div>
															<div class="kt-widget-15__wrapper">
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="kt-widget-15__info--item">patrick@boatline.com</a>
																</div>
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="kt-widget-15__info--item">(+44) 345 345 5574</a>
																</div>
															</div>
														</div>
														<div class="kt-widget-15__foot">
															<div class="kt-widget-15__foot-info">
																<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="kt-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="kt-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
													<div class="carousel-item">
														<div class="kt-widget-15__body">
															<div class="kt-widget-15__author">
																<div class="kt-widget-15__photo">
																	<a href="#"><img src="assets/media/users/100_7.jpg" alt="" title="" /></a>
																</div>
																<div class="kt-widget-15__detail">
																	<a href="#" class="kt-widget-15__name">Amanda Collin</a>
																	<div class="kt-widget-15__desc">
																		Project Manager
																	</div>
																</div>
															</div>
															<div class="kt-widget-15__wrapper">
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a>
																	<a href="#" class="kt-widget-15__info--item">amanda@boatline.com</a>
																</div>
																<div class="kt-widget-15__info">
																	<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a>
																	<a href="#" class="kt-widget-15__info--item">(+44) 345 345 1247</a>
																</div>
															</div>
														</div>
														<div class="kt-widget-15__foot">
															<div class="kt-widget-15__foot-info">
																<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	01 Sep, 2018
																</div>
																<div class="kt-widget-15__foot-desc">Joined Date</div>
															</div>
															<div class="kt-widget-15__foot-toolbar">
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
																<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Uploads</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-actions">
													<a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
											<div class="kt-widget-7">
												<div class="kt-widget-7__items">
													<div class="kt-widget-7__item">
														<div class="kt-widget-7__item-pic">
															<img src="assets/media/files/doc.svg" alt="" />
														</div>
														<div class="kt-widget-7__item-info">
															<a href="#" class="kt-widget-7__item-title">
																Keeg Design Reqs
															</a>
															<div class="kt-widget-7__item-desc">
																95 MB
															</div>
														</div>
														<div class="kt-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-eye"></i>
																				<span class="kt-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-comment-o"></i>
																				<span class="kt-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-widget-7__item">
														<div class="kt-widget-7__item-pic">
															<img src="assets/media/files/pdf.svg" alt="" />
														</div>
														<div class="kt-widget-7__item-info">
															<a href="#" class="kt-widget-7__item-title">
																S.E.R Agreement
															</a>
															<div class="kt-widget-7__item-desc">
																805 MB
															</div>
														</div>
														<div class="kt-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-eye"></i>
																				<span class="kt-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-comment-o"></i>
																				<span class="kt-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-widget-7__item">
														<div class="kt-widget-7__item-pic">
															<img src="assets/media/files/jpg.svg" alt="" />
														</div>
														<div class="kt-widget-7__item-info">
															<a href="#" class="kt-widget-7__item-title">
																FlyMore Screenshot
															</a>
															<div class="kt-widget-7__item-desc">
																4 MB
															</div>
														</div>
														<div class="kt-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-eye"></i>
																				<span class="kt-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-comment-o"></i>
																				<span class="kt-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-widget-7__item">
														<div class="kt-widget-7__item-pic">
															<img src="assets/media/files/zip.svg" alt="" />
														</div>
														<div class="kt-widget-7__item-info">
															<a href="#" class="kt-widget-7__item-title">
																ST.11 Dacuments
															</a>
															<div class="kt-widget-7__item-desc">
																Unknown
															</div>
														</div>
														<div class="kt-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-eye"></i>
																				<span class="kt-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-comment-o"></i>
																				<span class="kt-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-widget-7__item">
														<div class="kt-widget-7__item-pic">
															<img src="assets/media/files/xml.svg" alt="" />
														</div>
														<div class="kt-widget-7__item-info">
															<a href="#" class="kt-widget-7__item-title">
																XML AOL Data Fetchin
															</a>
															<div class="kt-widget-7__item-desc">
																4 MB
															</div>
														</div>
														<div class="kt-widget-7__item-toolbar">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon-more-1"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">EXPORT TOOLS</span>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-eye"></i>
																				<span class="kt-nav__link-text">View</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-comment-o"></i>
																				<span class="kt-nav__link-text">Coments</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget-7__foot">
													<img src="assets/media/misc/clouds.png" alt="" />
													<div class="kt-widget-7__upload">
														<a href="#"><i class="flaticon-upload"></i></a>
														<span>Drag files here</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								<div class="col-lg-12 col-xl-8 order-lg-3 order-xl-1">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Recent Orders <small>32500 total</small></h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-wrapper kt-form">
													<div class="kt-form__group kt-form__group--inline kt-margin-r-10">
														<div class="kt-form__label">Sort By:</div>
														<div class="kt-form__control" style="width: 160px;">
															<select class="form-control bootstrap-select" id="kt_form_status" title="Status">
																<option value="1">Pending</option>
																<option value="2">Delivered</option>
																<option value="3">Canceled</option>
																<option value="4">Success</option>
																<option value="5">Info</option>
																<option value="6">Danger</option>
															</select>
														</div>
													</div>
													<a href="#" class="btn btn-brand btn-upper btn-bold">New Record</a>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">

											<!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
											<div class="kt-datatable" id="kt_recent_orders"></div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
							</div>

							<!--end::Row-->

							<!--end::Dashboard 1-->
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2018&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/keen" target="_blank" class="kt-link">Keenthemes Inc</a>
							</div>
							<div class="kt-footer__menu">
								<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>

				<!-- end:: Wrapper -->
			</div>

			<!-- end:: Page -->
		</div>

		<!-- end:: Root -->

		<!-- begin:: Topbar Offcanvas Panels -->

		<!-- begin::Offcanvas Toolbar Quick Actions -->
		<div id="kt_offcanvas_toolbar_quick_actions" class="kt-offcanvas-panel">
			<div class="kt-offcanvas-panel__head">
				<h3 class="kt-offcanvas-panel__title">
					Quick Actions
				</h3>
				<a href="#" class="kt-offcanvas-panel__close" id="kt_offcanvas_toolbar_quick_actions_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-offcanvas-panel__body">
				<div class="kt-grid-nav-v2">
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
						<div class="kt-grid-nav-v2__item-title">Orders</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
						<div class="kt-grid-nav-v2__item-title">Uploades</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
						<div class="kt-grid-nav-v2__item-title">Products</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
						<div class="kt-grid-nav-v2__item-title">Customers</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
						<div class="kt-grid-nav-v2__item-title">Blog Posts</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
						<div class="kt-grid-nav-v2__item-title">Settings</div>
					</a>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Quick Actions -->

		<!-- end:: Topbar Offcanvas Panels -->

		<!-- begin:: Quick Panel -->
		<div id="kt_quick_panel" class="kt-offcanvas-panel">
			<div class="kt-offcanvas-panel__nav">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">Actions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
				<button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></button>
			</div>
			<div class="kt-offcanvas-panel__body">
				<div class="tab-content">
					<div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">

						<!--Begin::Timeline -->
						<div class="kt-timeline">

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--success">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-feed kt-font-success"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">02:30 PM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="kt-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--danger">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-safe-shield-protection kt-font-danger"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="kt-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--brand">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon2-box kt-font-brand"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">Yestardey</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
								</a>
								<div class="kt-timeline__item-info">
									PSD, Sketch, AJ
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--warning">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-pie-chart-1 kt-font-warning"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">Aug 13,2018</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
								</a>
								<div class="kt-timeline__item-info">
									Meeting, Customer
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--info">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-notepad kt-font-info"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">May 09, 2018</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="kt-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--accent">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-bell kt-font-success"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="kt-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->
						</div>

						<!--End::Timeline -->
					</div>
					<div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_actions" role="tabpanel">

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-success">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="kt-portlet__head-title">Recent Bills</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-focus">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="kt-portlet__head-title">Latest Orders</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-info">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Latest Invoices</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-warning">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">New Comments</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-brand">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Recent Posts</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->
					</div>
					<div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--space-sm">Notifications</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable audit log:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notify on new orders:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--space-sm">Orders</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable order tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable orders reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow order status auto update:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--space-sm">Customers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customer singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customers reporting:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notifiy on new customer registration:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin:: Demo Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--demo-toggle" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class="">Demos</a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--builder" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/keen/preview/demo1/builder.html" target="_blank"><i class="flaticon2-box"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--docs" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/keen/?page=docs" target="_blank"><i class="flaticon2-file"></i></a>
			</li>
		</ul>

		<!-- end:: Demo Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head">
				<h3 class="kt-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body">
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo1.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo1/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo2.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo2/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo3.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo3/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo4.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo4/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo5.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo5/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo6.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="https://keenthemes.com/keen/preview/demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Default</a>
							<a href="https://keenthemes.com/keen/preview/demo6/rtl/index.html" class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo7.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo8.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Keen Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
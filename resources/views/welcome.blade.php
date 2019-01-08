<!doctype html>
<html lang="en" dir="ltr">

<!-- NRTindex.html by NRT, Mon, 31 Dec 2018 06:25:12 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#ff685c">
		<meta name="theme-color" content="#32cafe">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Admin Dashboard</title>
		<link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="assets/css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- Morris.js Charts Plugin -->
		<link href="assets/plugins/morris/morris.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />
	</head>
	<body class="app sidebar-mini rtl">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-main">
				<div class="app-header header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="assets/images/brand/logo.png" class="header-brand-img" alt="NRT logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-none d-lg-block horizontal">
								<ul class="nav">
									<li class="">
										<div class="dropdown d-none d-md-flex">
											<a href="#" class="d-flex nav-link pr-0 mt-3 country-flag1" data-toggle="dropdown">
												<span><img src="assets/images/us_flag.jpg" alt="img" class="avatar country-Flag mr-2 align-self-center"></span>
												<div>
													<strong class="text-dark mr-3 mt-0">English</strong>
												</div>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class=" mr-3 align-self-center"><img src="assets/images/french_flag.jpg" alt="img" class="avatar Flag"></span>
													<div>
														<strong>French</strong>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class= "mr-3 align-self-center"><img src="assets/images/germany_flag.jpg" alt="img" class="avatar Flag"></span>
													<div>
														<strong>Germany</strong>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="mr-3 align-self-center"><img src="assets/images/italy_flag.jpg" alt="img" class="avatar Flag"></span>
													<div>
														<strong>Italy</strong>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="mr-3 align-self-center"><img src="assets/images/russia_flag.jpg" alt="img" class="avatar Flag"></span>
													<div>
														<strong>Russia</strong>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="mr-3 align-self-center"><img src="assets/images/spain_flag.jpg" alt="img" class="avatar Flag"></span>
													<div>
														<strong>NRT</strong>
													</div>
												</a>
											</div>
										</div>
									</li>

									<li class="">
									    <div class="dropdown d-none d-md-flex border-right">
											<a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
												<i class="fe fe-mail floating"></i>
												<span class=" nav-unread badge badge-warning  badge-pill">2</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item text-center">2 New Messages</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="avatar brround mr-3 align-self-center"><img src="assets/images/faces/male/41.jpg" class="avatar brround " alt="user-img"></span>
													<div>
														<strong>Madeleine</strong> Hey! there I' am available....
														<div class="small text-muted">3 hours ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="avatar brround mr-3 align-self-center"><img src="assets/images/faces/female/1.jpg"  class="avatar brround " alt="user-img"></span>
													<div>
														<strong>Anthony</strong> New product Launching...
														<div class="small text-muted">5  hour ago</div>
													</div>
												</a>
												<a href="#" class="dropdown-item d-flex pb-3">
													<span class="avatar brround mr-3 align-self-center"><img src="assets/images/faces/female/18.jpg"  class="avatar brround " alt="user-img"></span>
													<div>
														<strong>Olivia</strong> New Schedule Realease......
														<div class="small text-muted">45 mintues ago</div>
													</div>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item text-center">See all Messages</a>
											</div>
										</div>
									</li>
								</ul>
						    </div>

							<div class="d-flex order-lg-2 ml-auto">
							    <div class="mt-2">
									<div class="searching mt-2 ml-2 mr-3">
										<a href="javascript:void(0)" class="search-open mt-3">
											<i class="fa fa-search text-dark"></i>
										</a>
										<div class="search-inline">
											<form>
												<input type="text" class="form-control" placeholder="Search here">
												<button type="submit">
													<i class="fa fa-search"></i>
												</button>
												<a href="javascript:void(0)" class="search-close">
													<i class="fa fa-times"></i>
												</a>
											</form>
										</div>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex " >
									<a  class="nav-link icon full-screen-link">
										<i class="mdi mdi-arrow-expand-all"  id="fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="mdi mdi-bell-outline "></i>
										<span class="nav-unread bg-success"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>

										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid floating"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow p-0">
										<ul class="drop-icon-wrap p-0 m-0">
											<li>
												<a href="email.html" class="drop-icon-item">
													<i class="fe fe-mail"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="calendar2.html" class="drop-icon-item">
													<i class="fe fe-calendar"></i>
													<span class="block">calendar</span>
												</a>
											</li>
											<li>
												<a href="maps.html" class="drop-icon-item">
													<i class="fe fe-map-pin"></i>
													<span class="block">map</span>
												</a>
											</li>
											<li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart"></i>
													<span class="block">Cart</span>
												</a>
											</li>
											<li>
												<a href="chat.html" class="drop-icon-item">
													<i class="fe fe-message-square"></i>
													<span class="block">chat</span>
												</a>
											</li>
											<li>
												<a href="profile.html" class="drop-icon-item">
													<i class="fe fe-phone-outgoing"></i>
													<span class="block">contact</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround"><img src="assets/images/faces/male/40.jpg" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user">Anthony</a>

											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body">
							<div>
								<img src="assets/images/faces/male/40.jpg" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info mb-2">
								<h4 class="font-weight-semibold text-dark mb-1">Anthony</h4>
								<span class="mb-0 text-muted">Ui Designer</span>
							</div>
							<a href="#" title="settings" class="user-button"><i class="fa fa-cog"></i></a>
							<a href="#" title="Comments" class="user-button"><i class="fa fa-comments"></i></a>
							<a href="#" title="logout" class="user-button"><i class="fa fa-power-off"></i></a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Home</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="index.html">IT Dashboard</a></li>
								<li><a class="slide-item" href="index2.html">Service Dashboard</a></li>
								<li><a class="slide-item" href="index3.html">Gaming Dashboard</a></li>
								<li><a class="slide-item" href="index4.html">Big DataDashboard</a></li>
								<li><a class="slide-item" href="index5.html">Crypto Currency</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="chart-chartist.html" class="slide-item">Chartjs Charts </a>
								</li>
								<li>
									<a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a>
								</li>
								<li>
									<a href="chart-am.html" class="slide-item">Am Charts</a>
								</li>
								<li>
									<a href="chart-peity.html" class="slide-item">Pie Charts</a>
								</li>
								<li>
									<a href="chart-echart.html" class="slide-item">Echart Charts</a>
								</li>
								<li>
									<a href="chart-flot.html" class="slide-item">Flot Charts</a>
								</li>
								<li>
									<a href="chart-high.html" class="slide-item">High Charts</a>
								</li>
								<li>
									<a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
								</li>
								<li>
									<a href="chart-morris.html" class="slide-item">Morris Charts</a>
								</li>
								<li>
									<a href="chart-c3.html" class="slide-item">C3 Charts</a>
								</li>

							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-th-large"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="cards.html" class="slide-item">Cards design</a>
								</li>
								<li>
									<a href="cards-image.html" class="slide-item">Image  Cards design</a>
								</li>
								<li>
									<a href="chat.html" class="slide-item">Default Chat</a>
								</li>
								<li>
									<a href="notify.html" class="slide-item">Notifications</a>
								</li>
								<li>
									<a href="sweetalert.html" class="slide-item">Sweet alerts</a>
								</li>
								<li>
									<a href="rangeslider.html" class="slide-item">Range slider</a>
								</li>
								<li>
									<a href="scroll.html" class="slide-item">Content Scroll bar</a>
								</li>
								<li>
									<a href="counters.html" class="slide-item">Counters</a>
								</li>
								<li>
									<a href="loaders.html" class="slide-item">Loaders</a>
								</li>
								<li>
									<a href="time-line.html" class="slide-item">Time Line</a>
								</li>
								<li>
									<a href="rating.html" class="slide-item">Rating </a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bandcamp"></i><span class="side-menu__label">UI Kit</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="alerts.html" class="slide-item">Alerts</a>
								</li>
								<li>
									<a href="buttons.html" class="slide-item">Buttons</a>
								</li>
								<li>
									<a href="colors.html" class="slide-item">Colors</a>
								</li>
								<li>
									<a href="avatars.html" class="slide-item">Avatars</a>
								</li>
								<li>
									<a href="dropdown.html" class="slide-item">Drop downs</a>
								</li>
								<li>
									<a href="thumbnails.html" class="slide-item">Thumbnails</a>
								</li>
								<li>
									<a href="mediaobject.html" class="slide-item">Media Object</a>
								</li>
								<li>
									<a href="list.html" class="slide-item">List</a>
								</li>
								<li>
									<a href="tags.html" class="slide-item">Tags</a>
								</li>
								<li>
									<a href="pagination.html" class="slide-item">Pagination</a>
								</li>
								<li>
									<a href="navigation.html" class="slide-item">Navigation</a>
								</li>
								<li>
									<a href="typography.html" class="slide-item">Typography</a>
								</li>
								<li>
									<a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
								</li>
								<li>
									<a href="badge.html" class="slide-item">Badges</a>
								</li>
								<li>
									<a href="jumbotron.html" class="slide-item">Jumbotron</a>
								</li>
								<li>
									<a href="panels.html" class="slide-item">Panels</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cubes"></i><span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="modal.html" class="slide-item">Modal</a>
								</li>
								<li>
									<a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
								</li>
								<li>
									<a href="progress.html" class="slide-item">Progress</a>
								</li>
								<li>
									<a href="chart.html" class="slide-item">Charts</a>
								</li>
								<li>
									<a href="carousel.html" class="slide-item">Carousels</a>
								</li>
								<li>
									<a href="accordion.html" class="slide-item">Accordions</a>
								</li>
								<li>
									<a href="tabs.html" class="slide-item">Tabs</a>
								</li>
								<li>
									<a href="headers.html" class="slide-item">Headers</a>
								</li>
								<li>
									<a href="footers.html" class="slide-item">Footers</a>
								</li>
								<li>
									<a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
								</li>
								<li>
									<a href="users-list.html" class="slide-item">User List</a>
								</li>
								<li>
									<a href="search.html" class="slide-item">Search page</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-window-maximize"></i><span class="side-menu__label">Widget</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-newspaper-o"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="profile.html" class="slide-item">Profile</a>
								</li>
								<li>
									<a href="editprofile.html" class="slide-item">Edit Profile</a>
								</li>
								<li>
									<a href="email.html" class="slide-item">Email</a>
								</li>
								<li>
									<a href="emailservices.html" class="slide-item">Email Inbox</a>
								</li>
								<li>
									<a href="gallery.html" class="slide-item">Gallery</a>
								</li>
								<li>
									<a href="about.html" class="slide-item">About Company</a>
								</li>

								<li>
									<a href="services.html" class="slide-item">Services</a>
								</li>
								<li>
									<a href="faq.html" class="slide-item">FAQS</a>
								</li>
								<li>
									<a href="terms.html" class="slide-item">Terms and Conditions</a>
								</li>
								<li>
									<a href="empty.html" class="slide-item">Empty Page</a>
								</li>
								<li>
									<a href="construction.html" class="slide-item">Under Construction</a>
								</li>
								<li>
									<a href="blog.html" class="slide-item">Blog</a>
								</li>
								<li>
									<a href="invoice.html" class="slide-item">Invoice</a>
								</li>
								<li>
									<a href="pricing.html" class="slide-item">Pricing Tables</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text-o"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="form-elements.html" class="slide-item">Form Elements</a>
								</li>
								<li>
									<a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
								</li>
								<li>
									<a href="wysiwyag.html" class="slide-item">Text Editor</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-info-circle"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="icons.html" class="slide-item">Font Awesome</a>
								</li>
								<li>
									<a href="icons2.html" class="slide-item">Material Design Icons</a>
								</li>
								<li>
									<a href="icons3.html" class="slide-item">Simple Line Iocns</a>
								</li>
								<li>
									<a href="icons4.html" class="slide-item">Feather Icons</a>
								</li>
								<li>
									<a href="icons5.html" class="slide-item">Ionic Icons</a>
								</li>
								<li>
									<a href="icons6.html" class="slide-item">Flag Icons</a>
								</li>
								<li>
									<a href="icons7.html" class="slide-item">pe7 Icons</a>
								</li>
								<li>
									<a href="icons8.html" class="slide-item">Themify Icons</a>
								</li>
								<li>
									<a href="icons9.html" class="slide-item">Typicons Icons</a>
								</li>
								<li>
									<a href="icons10.html" class="slide-item">Weather Icons</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="calendar.html" class="slide-item">Default calendar</a>
								</li>
								<li>
									<a href="calendar2.html" class="slide-item">Full calendar</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="maps.html"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Vector Maps</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-unlock-alt"></i><span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="login.html" class="slide-item">Login</a>
								</li>
								<li>
									<a href="register.html" class="slide-item">Register</a>
								</li>
								<li>
									<a href="forgot-password.html" class="slide-item">Forgot password</a>
								</li>
								<li>
									<a href="lockscreen.html" class="slide-item">Lock screen</a>
								</li>

							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="tables.html" class="slide-item">Default table</a>
								</li>
								<li>
									<a href="datatable.html" class="slide-item">Data Table</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="shop.html" class="slide-item">Products</a>
								</li>
								<li>
									<a href="shop-des.html" class="slide-item">Product Details</a>
								</li>
								<li>
									<a href="cart.html" class="slide-item">Shopping Cart</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-exclamation-circle"></i><span class="side-menu__label">Error pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="400.html" class="slide-item">400 Error</a>
								</li>
								<li>
									<a href="401.html" class="slide-item">401 Error</a>
								</li>
								<li>
									<a href="403.html" class="slide-item">403 Error</a>
								</li>
								<li>
									<a href="404.html" class="slide-item">404 Error</a>
								</li>
								<li>
									<a href="500.html" class="slide-item">500 Error</a>
								</li>
								<li>
									<a href="503.html" class="slide-item">503 Error</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="#"><i class="side-menu__icon fa fa-question-circle"></i><span class="side-menu__label">Help & Support</span></a>
						</li>
					</ul>
				</aside>

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">IT Dashboard</li>
							</ol>
						</div>

						<div class="row row-cards">
							<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3 ">
								<div class="card card-img-holder">
								    <div class="card-body">
										<p class="card-text text-muted font-weight-semibold mb-1">Total Projects</p>
										<div class="clearfix">
											<div class="float-left  mt-2">
												<h1>6,525</h1>
											</div>
											<div class="float-right text-right">
												<span class="pie" data-peity='{ "fill": ["#ff685c", "#f2f2f2"]}'>226,134</span>
											</div>
										</div>
										<div class="progress progress-md mt-1 h-2">
											<div class="progress-bar  bg-gradient-primary w-70"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
								<div class="card card-img-holder">
								    <div class="card-body">
										<p class="card-text text-muted font-weight-semibold mb-1">Completed Task</p>
										<div class="clearfix">
											<div class="float-left  mt-2">
												<h1>2,435</h1>
											</div>
											<div class="float-right text-right">
												<span class="pie" data-peity='{ "fill": ["#32cafe", "#f2f2f2"]}'>1,4</span>
											</div>
										</div>
										<div class="progress progress-md mt-1 h-2">
											<div class="progress-bar  bg-gradient-secondary w-50"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
							    <div class="card card-img-holder">
								    <div class="card-body">
										<p class="card-text text-muted font-weight-semibold mb-1">Ongoing Projects</p>
										<div class="clearfix">
											<div class="float-left  mt-2">
												<h1>3,546</h1>
											</div>
											<div class="float-right text-right">
												<span class="pie" data-peity='{ "fill": ["#5ed84f", "#f2f2f2"]}'>0.52/1.561</span>
											</div>
										</div>
										<div class="progress progress-md mt-1 h-2">
											<div class="progress-bar  bg-gradient-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
							    <div class="card card-img-holder">
								    <div class="card-body">
										<p class="card-text text-muted font-weight-semibold mb-1">Successful Task</p>
										<div class="clearfix">
											<div class="float-left  mt-2">
												<h1>1,657</h1>
											</div>
											<div class="float-right text-right">
												<span class="pie" data-peity='{ "fill": ["#fdb901", "#f2f2f2"]}'>0.52,1.041</span>
											</div>
										</div>
										<div class="progress progress-md mt-1 h-2">
											<div class="progress-bar  progress-bar-animated bg-warning w-55"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
								<div class="card overflow-hidden">
								    <div class="card-header">
										<h3 class="card-title">Return On Investiment</h3>
									</div>
									<div class="card-body">
										<div class="dash2 ">
											<div class="">
												<p>Lorem ipsum dolor sit amet consectetur At vero eos et accusamus et iusto odio.</p>
												<div class="mb-0">
													<h3 class="text-primary mb-1">12,450</h3>
													<span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>+24%</span></span><span class="text-muted ml-2">From Last Month</span>
												</div>
											</div>
										</div>
									</div>
									<div class="chart-wrapper ">
										<canvas id="widgetChart1" class="mb-0 p-0 chart-dropshadow"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-md-6 col-xl-4">
								<div class="card ">
								    <div class="card-header">
										<h3 class="card-title">Current Budget</h3>
									</div>
									<div class="card-body">
									   <div id="placeholder03" class="chartsh demo-placeholder"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-sm-12 col-xl-4">
								<div class="row">
									<div class="col-lg-12">
										<div class="card ">
											<div class="card-body">
												<div class="card-value float-right text-purple">
													<div class="sparkline22 h-100"></div>
												</div>
												<h3 class="mb-1 counter font-30">5673</h3>
												<div class="text-muted">Active Projects</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="card overflow-hidden bg-gradient-secondary text-white work-progress">
											<div class="card-body">
												<div class="clearfix mb-4">
													<div class="float-left  mt-2  ">
														<h4 class="card-text font-weight-semibold">Work Progress</h4>
													</div>
													<div class="float-right text-right  ">
														<h3 class="mb-0">39.05%</h3>
													</div>
												</div>
											</div>
											<span class="updating-chart1 br-bl-7 br-br-7" data-peity='{ "fill": ["#32cafe"], "stroke": ["#32cafe"] }'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row row-deck">
							<div class="col-lg-6 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Project Budget</h3>
									</div>
									<div class="card-body text-center">
										<div id="echart" class="chartsh chart-dropshadow "></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Avg Handle Time For Project [In Months]</h3>
									</div>
									<div class="card-body text-center">
										<div id="echart9" class="chartsh chart-dropshadow"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-deck">
							<div class="col-md-12 col-xl-4 col-lg-4 col-sm-12">
							   <div class="card">
									<div class="card-body text-center">
										<h3 class="mb-3 counter ">Server1</h3>
										<div class="">
											<div class="chart-circle mt-4" data-value="0.77" data-thickness="10" data-color="#ff695c"><canvas width="128" height="128"></canvas></div>
										</div>
										<h6 class=" mb-0 mt-3 text-muted"><span class="text-success"><i class="fe fe-arrow-up-circle "></i></span> Last Down 75 days Ago</h6>
									    <div class="chart-circle-value text-center h3 mt-1"><div class="text-xxl mt-2">75</div><small></small></div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4 col-sm-12">
							    <div class="card">
									<div class="card-body text-center">
										<h3 class="mb-3 counter ">Server2</h3>
										<div class="mt-3 mb-2">
											<div class="chart-circle mt-4" data-value="0.55" data-thickness="10" data-color="#32cafe"><canvas width="128" height="128"></canvas></div>
										  </div>
										<h6 class=" mb-0 mt-3 text-muted"><span class="text-success"><i class="fe fe-arrow-up-circle "></i></span> Last Down 55 days Ago</h6>
									    <div class="chart-circle-value text-center h3 mt-1"><div class="text-xxl mt-2">55</div><small></small></div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4 col-sm-12">
							    <div class="card">
									<div class="card-body text-center">
										<h3 class="mb-3 counter ">Server3</h3>
										<div class="mt-3 mb-2">
											<div class="chart-circle mt-4" data-value="0.39" data-thickness="10" data-color="#fdb901"><canvas width="128" height="128"></canvas></div>
										</div>
										<h6 class=" mb-0 mt-3 text-muted"><span class="text-danger"><i class="fe fe-arrow-down-circle "></i></span> Last Down 38 days Ago</h6>
									    <div class="chart-circle-value text-center h3 mt-1"><div class="text-xxl mt-2">39</div><small></small></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row ">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Upcoming Deadlines</h3>

									</div>
									<div class="table-responsive">
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
											<thead>
											  <tr>
												<th scope="col">ID</th>
												<th scope="col">Employee</th>
												<th scope="col">Project Name</th>
												<th scope="col">Issues</th>
												<th scope="col">Deadline</th>
												<th scope="col">Team Members</th>
												<th scope="col">WorkLoad </th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<th scope="row">1</th>
												<td>Juliette</td>
												<td>At vero eos et accusamus et iusto odio </td>
												<td>CMS Issue</td>
												<td>02/01/2019</td>
												<td>5 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-success w-70"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">2</th>
												<td>Brock Lee</td>
												<td>voluptatum deleniti atque corrupti quos</td>
												<td>DNS Issue</td>
												<td>13/01/2019</td>
												<td>4 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-primary w-30"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">3</th>
												<td>Brock Lee</td>
												<td >dignissimos ducimus qui blanditiis praesentium</td>
												<td>Hardware Failure</td>
												<td >18/01/2019</td>
												<td >5 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-warning w-45"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">4</th>
												<td>Robin</td>
												<td>deleniti atque corrupti quos dolores </td>
												<td>Host Provider</td>
												<td >21/01/2019</td>
												<td >10 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-secondary w-35"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">5</th>
												<td>Anne Fibbiyon</td>
												<td>et quas molestias excepturi sint occaecati</td>
												<td>Hardware Failure</td>
												<td >28/01/2019</td>
												<td >3 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-pink w-60"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">6</th>
												<td>Anthony</td>
												<td>At vero eos et accusamus et iusto odio </td>
												<td>CMS Issue</td>
												<td>05/02/2019</td>
												<td>6 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-success w-40"></div>
													</div>
												</td>
											  </tr>
											  <tr>
												<th scope="row">7</th>
												<td>Jennifer</td>
												<td>At vero eos et accusamus et iusto odio </td>
												<td>DNS Issue</td>
												<td>12/02/2019</td>
												<td>4 Members</td>
												<td>
													<div class="progress progress-md mt-1 h-2">
														<div class="progress-bar  progress-bar-animated bg-primary w-60"></div>
													</div>
												</td>
											  </tr>
											</tbody>
										  </table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
									Copyright © 2018 - 2019 <a href="#">NRT</a>. Designed by <a href="#">NRT</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
			</div>
		</div>
		<div class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel2">Enter Project Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="listname">Project name</label>
								<input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
							</div>
							<div class="form-group">
								<label for="listname">Backend</label>
								<select name="Language" id="select-Language" class="form-control custom-select">
									<option value="ph" data-data="">PHP</option>
									<option value="aj" data-data="">Angular js</option>
									<option value="jv" data-data="">Java</option>
									<option value="nt" data-data="" selected="">.Net</option>
									<option value="py" data-data="" >Phython</option>
									<option value="js" data-data="" >Javascript</option>
									<option value="ui" data-data="" >UI Design</option>
								</select>
							</div>
							<div class="form-group">
								<label >Deadline</label>
								<input type="Date" name="Date" class="form-control">
							</div>
							<div class="form-group">
								<label for="listname">Team Members</label>
								<input type="text" class="form-control" name="listname" id="listname2" placeholder="How many Team memebers?">
							</div>
							<div class="form-group">
								<label for="listname">Description</label>
								<textarea class="form-control" name="example-textarea-input" rows="3" placeholder="text here.."></textarea>
							</div>
							<div class="form-group">
								<label>Add a list item</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="example-file-input-custom">
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-block btn-primary">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="assets/js/vendors/selectize.min.js"></script>
		<script src="assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="assets/js/vendors/circle-progress.min.js"></script>
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/flot/jquery.flot.js"></script>
		<script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="assets/plugins/flot/jquery.flot.pie.js"></script>


		<!-- Echarts Js-->
		<script src="assets/plugins/echarts/echarts.js"></script>
		<script src="assets/js/index1.js"></script>

		<!--othercharts js-->
		<script src="assets/js/othercharts.js"></script>

		<!-- Charts Plugin -->
		<script src="assets/plugins/chart/Chart.bundle.js"></script>
		<script src="assets/plugins/chart/utils.js"></script>

		<!--Jquery.knob js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>

		<!--Amcharts Charts Plugin -->
		<script src="assets/plugins/am-chart/amcharts.js"></script>
		<script src="assets/plugins/am-chart/serial.js"></script>

		<!-- peitychart -->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- Fullside-menu Js-->
		<script src="assets/plugins/toggle-sidebar/sidemenu.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="assets/js/custom.js"></script>

	</body>

<!-- NRTindex.html by NRT, Mon, 31 Dec 2018 06:26:03 GMT -->
</html>

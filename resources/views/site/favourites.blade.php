<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/favourites.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index-2.html" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
						
							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>	 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Ryan Taylor">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Richard Wilson</h6>
										<p class="text-muted mb-0">Patient</p>
									</div>
								</div>
								<a class="dropdown-item" href="patient-dashboard.html">Dashboard</a>
								<a class="dropdown-item" href="profile-settings.html">Profile Settings</a>
								<a class="dropdown-item" href="login.html">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Médicos</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Médicos</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/patients/patient.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="patient-dashboard.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="favourites.html">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											
											<li>
												<a href="profile-settings.html">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.html">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor.jpg">
											</a>
											
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
											
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor.jpg">
											</a>
											
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
											
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="doctor-profile.html">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="doctor-profile.html">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
											
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking.html" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/footer-logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Seu bem-estar, nosso dever. </p>
										<div class="footer-widget footer-contact">
										
											
										</div>
										<div class="social-icon">

											
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										
											
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
							
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contacto</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					


					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
						
									<!-- Copyright Menu -->
									<div class="copyright-menu text-center">
										<ul class="policy-menu">
											
											<li><a href="#">&copy Copyrigh 2024 PDC.AO </a></li>
											<li><a href="#">SIS</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
					
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/favourites.html  30 Nov 2019 04:12:17 GMT -->
</html>
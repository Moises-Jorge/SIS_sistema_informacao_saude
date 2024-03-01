<!DOCTYPE html>
<html lang="en">

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->

<head>
	<meta charset="utf-8">
	<title>Doccure</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<!-- Favicons -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

</head>

<body class="account-page">
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
					<a href="{{route('index.home')}}" class="navbar-brand logo">
						<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="{{route('index.home')}}" class="menu-logo">
							<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);">
							<i class="fas fa-times"></i>
						</a>
					</div>
					<ul class="main-nav">
						{{-- <li>
							<a href="{{route('index.home')}}">Home</a>
						</li> --}}


						<li class="login-link">
							<a href="{{route('user.create')}}">Registrar</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item contact-item">
						<div class="header-contact-img">
							<i class="far fa-hospital"></i>
						</div>
						<div class="header-contact-detail">
							<p class="contact-header">SIS-UAN </p>
							<p class="contact-info-header">+244 952 573 924</p>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link header-login" href="{{route('user.create')}}">Registrar </a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->

		<!-- Page Content -->
		<div class="content">
			@if(isset($success))
			<div class="alert alert-success" role="alert">
				{{$success}}
			</div>
			@endif

			@if (session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
			@endif


			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 offset-md-2">

						<!-- Login Tab Content -->
						<div class="account-content">
							<div class="row align-items-center justify-content-center">
								<div class="col-md-7 col-lg-6 login-left">
									<img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">
								</div>
								<div class="col-md-12 col-lg-6 login-right">
									<div class="login-header">
										<h3>Login <span>SIS</span></h3>
									</div>
									<form action="{{route('login.logar')}}" method="post">
										@csrf
										<div class="form-group form-focus">
											<input type="number" name="numeroUser" class="form-control floating" required>
											<label class="focus-label">Numero do utilizador</label>
										</div>
										<div class="form-group form-focus">
											<input type="password" name="password" class="form-control floating" required>
											<label class="focus-label">Password</label>
										</div>
										<div class="text-right">
											<a class="forgot-link" href="forgot-password.html">Esqueceu a senha ?</a>
										</div>
										<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>


										<div class="text-left dont-have">Não tem uma conta? <a href="{{route('user.create')}}">Registar</a></div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Login Tab Content -->

					</div>
				</div>

			</div>

		</div>
		<!-- /Page Content -->

		<!-- Footer -->
			@include('site.main_footer')
		<!-- /Footer -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->

</html>
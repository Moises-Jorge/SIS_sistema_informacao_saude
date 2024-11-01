<!DOCTYPE html>
<html lang="en">

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->

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
		@include('site.main_header')
		<!-- /Header -->

		<!-- Page Content -->
		<div class="content">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="container">
							@if(isset($error))
							<div class="alert alert-danger">
								{{$error}}
							</div>
							@endif
						</div>
						<!-- Register Content -->
						<div class="account-content">
							<div class="row align-items-center justify-content-center">
								<div class="col-md-7 col-lg-6 login-left">
									<img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Register">
								</div>
								<div class="col-md-12 col-lg-6 login-right">

									<!-- Register Form -->
									<form action="{{route('user.store')}}" method="post">
										@csrf
										<div class="form-group form-focus">
											<input type="text" class="form-control" name="nome" title="Nome Inválido, precisamos de nome completo" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+ [A-Za-zÀ-ÖØ-öø-ÿ\s]+">
											<label class="focus-label">Nome</label>
										</div>

										<div class="form-group form-focus">
											<input type="email" class="form-control" name="email" title="Email Inválido" required pattern="[a-z0-9]+@(gmail\.com|hotmail\.com|gmail\.org|hotmail\.org|gmail\.uan|hotmail\.uan)">


											<label class="focus-label">Email</label>
										</div>

										<div class="form-group form-focus">
											<select class="form-control" name="sexo" required>
												<option value=""></option>
												<option>Masculino</option>
												<option>Femenino</option>
											</select>

											<label class="focus-label">Genero</label>
										</div>

										<div class="form-group form-focus" style="margin-bottom: 80px;">
											<input type="password" class="form-control" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}">
											<span class="password-info">Deve conter pelo menos 8 caracteres, contendo letra maiúscula, letra minúscula, número e caractere especial.</span>

											<label class="focus-label">Senha</label>
										</div>

										<div class="form-group form-focus" style="display: none;">
											<input type="text" class="form-control" value="3" name="tipo_utilizador">
										</div>


										<div class="text-right">
											<a class="forgot-link" href="{{route('login.page')}}">Ja possui uma conta?</a>
										</div>
										<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Registrar</button>

									</form>
									<!-- /Register Form -->

								</div>
							</div>
						</div>
						<!-- /Register Content -->

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

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->

</html>
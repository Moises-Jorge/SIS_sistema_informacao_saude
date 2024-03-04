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
												<input type="text" class="form-control floating @if($errors->has('nome')) is-invalid @endif" name="nome" required>
												@if ($errors->has('nome'))
													<div class="invalid-feedback">
														@foreach ($errors->get('nome') as $error)
															{{$error}}
														@endforeach
													</div>
												@endif
												<label class="focus-label">Nome</label>
											</div>

											<div class="form-group form-focus">
												<input type="email" class="form-control floating @if($errors->has('email')) is-invalid @endif" name="email" required>
												@if ($errors->has('email'))
													<div class="invalid-feedback">
														@foreach ($errors->get('email') as $error)
															{{$error}}
														@endforeach
													</div>
												@endif
												<label class="focus-label">Email</label>
											</div>

											<div class="form-group form-focus">
												<select class="form-control floating" name="sexo" required>
													<option value=""></option>
													<option>Masculino</option>
													<option>Femenino</option>
												</select>
												<label class="focus-label">Genero</label>
											</div>

											<div class="form-group form-focus">
												<input type="password" class="form-control floating @if($errors->has('password')) is-invalid @endif" name="password" required>
												@if ($errors->has('password'))
													<div class="invalid-feedback">
														@foreach ($errors->get('password') as $error)
															{{$error}}
														@endforeach
													</div>
												@endif
												<label class="focus-label">Senha</label>
											</div>
												
											<div class="form-group form-focus" style="display: none;">
												<input  type="text" class="form-control floating" value="3" name="tipo_utilizador">
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
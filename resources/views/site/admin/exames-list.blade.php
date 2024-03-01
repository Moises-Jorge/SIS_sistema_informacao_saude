<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Specialities Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables/datatables.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="{{ route('menu.index') }}" class="logo">
						<img src="{{asset('admin/assets/img/logo.png')}}" alt="Logo">
					</a>
					<a href="{{ route('menu.index') }}" class="logo logo-small">
						<img src="{{asset('admin/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						@include('site.admin.user_menu')
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						@include('site.admin.menu')
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								@if(isset($success))
									<div class="alert alert-success" role="alert">
										{{$success}}
									</div>
								@endif
								<h3 class="page-title">Exames</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Exames</li>
								</ul>
							</div>
							{{-- <div class="col-sm-5 col">
								<a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
							</div> --}}
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">

										<button class="btn btn-primary mb-4" style="float: right" data-toggle="modal" data-target="#cadastroExame">Cadastrar Exame</button>

										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Nome</th>
													<th>Descrição</th>
													<th>especialidade</th>
													<th>Preço</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($todos_exames as $exame)
													<tr>
														<td>{{ $exame->nome }}</td>
														<td>{{ $exame->descricao }}</td>
														<td>{{ $exame->nomeEspecialidade }}</td>
														<td>{{ $exame->preco }} KZ</td>
														<td>
															<div class="dropdown">
																<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$loop->iteration}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Ações
																</button>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$loop->iteration}}">
																	<a class="dropdown-item" href="#">Editar</a>
																	<a class="dropdown-item" href="#">Deletar</a>
																</div>
															</div>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->

		<!-- Add Modal -->
		<div class="modal fade" id="cadastroExame" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Meu Formulário</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <!-- Seu formulário aqui -->
				<form action="{{ route('exame.store') }}" method="POST">
					@csrf
					<div class="form-group row">
						<label class="col-form-label col-md-2">Nome</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="nome">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Descrição</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="descricao">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Especialidade</label>
						<div class="col-md-10">
							<select class="form-control" name="especialidade_id">
								@foreach ($especialidades as $especialidade)
									<option value="{{$especialidade->id}}">{{$especialidade->nome}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Preço</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="preco">
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary">Salvar Mudanças</button>
					</div>
				</form>
				</div>
				
			  </div>
			</div>
		</div>
		<!-- /ADD Modal -->
		
		<!-- Edit Details Modal -->
		
		<!-- /Edit Details Modal -->
		
		<!-- Delete Modal -->
		
		<!-- /Delete Modal -->
		
		<!-- jQuery -->
        <script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{asset('admin/assets/js/script.js')}}"></script>

		<script>
			document.getElementById("exame").classList.add("active");
		</script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
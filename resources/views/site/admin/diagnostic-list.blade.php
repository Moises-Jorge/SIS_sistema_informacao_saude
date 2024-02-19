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
				<a href="index.html" class="logo">
					<img src="assets/img/logo.png" alt="Logo">
				</a>
				<a href="index.html" class="logo logo-small">
					<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
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
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar.jpg" width="31" alt="Ryan Taylor"></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="assets/img/profiles/avatar.jpg" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>Ryan Taylor</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
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
							<h3 class="page-title">Diagnósticos</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Diagnósticos</li>
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

									<button class="btn btn-primary mb-4" style="float: right" data-toggle="modal" data-target="#modalInformacao">Cadastrar Diagnóstico</button>
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Id Utente</th>
												<th>Nome Utente</th>
												<th>Tipo de Doença</th>
												<th>Nome Doença</th>
												<th>Grupo Sanguinio</th>
												<th>Estado</th>
												<th>Data</th>
												<th>Descricao</th>
												<th class="text-right">#</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($todos_diagnosticos as $diagnostico)
											<tr>
												<td>{{ $diagnostico->idUser }}</td>
												<td>{{ $diagnostico->nomeUser }}</td>
												<td>{{ $diagnostico->tipo_doenca }}</td>
												<td>
													
													@if($diagnostico->nome==null)
														{{ $diagnostico->nomeAlergia }}
													@else
														{{ $diagnostico->nome }}
													@endif
												</td>
												<td>{{ $diagnostico->grupo_sang }}</td>
												<td>{{ $diagnostico->estado}}</td>
												<td>{{ $diagnostico->data }}</td>
												<td>{{ $diagnostico->descricao }}</td>
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

	<!-- Modal -->
	<div class="modal fade" id="modalInformacao" tabindex="-1" role="dialog" aria-labelledby="modalInformacaoLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalInformacaoLabel">Agendamentos dos Utentes</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Id Utente</th>
								<th>Nome Utente</th>
								<th>Telefone</th>
								<th>Data Agendada</th>
								<th>Hora Agendada</th>
								<th class="text-right">Açao</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($todos_agendamentos as $agendamento)
							<tr>
								<td>{{ $agendamento->id }}</td> {{-- MODIFICAR ESSA CONTAGEM --}}
								<td>{{ $agendamento->nomeUser }}</td>
								<td>{{ $agendamento->telefone }}</td>
								<td>{{ $agendamento->data }}</td>
								<td>{{ $agendamento->hora }}</td>
								<td class="text-right">
									<button class="btn btn-primary" name="{{$controller->temRCU($agendamento->idUser)}}" id="{{$agendamento->idUser}}" type="{{$agendamento->id}}"  onclick="chamaModal(this)">cadastroDiagnostico</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<!-- Adicione aqui qualquer outro botão ou link que você deseje na parte inferior da modal   data-toggle="modal" data-target="#cadastroDiagnostico"-->
				</div>
			</div>
		</div>
	</div>



	<div class="modal fade" id="cadastroDiagnostico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<form action="{{ route('diagnostico.store') }}" method="POST">
						@csrf

						<div class="form-group row">
							<label class="col-form-label col-md-2">Tipo de Doença</label>
							<div class="col-md-10">
								<select name="tipo_doenca" id="" class="form-control" onchange="apareca(this.value)">
									<option value="" selected disabled>Escolha uma opçao</option>
									<option>Alergico</option>
									<option>Não Alergico</option>
								</select>
							</div>
						</div>

						<div class="form-group row" id="nomeDoenca" style="display: none;">
							<label class="col-form-label col-md-2">Nome</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="nome">
							</div>
						</div>

						<div class="form-group row" id="nomeDoenca" style="display: none;">
							<label class="col-form-label col-md-2">id agendamneto</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="agendamentoId" id="agendamentoId">
							</div>
						</div>

						
						<div class="form-group row" id="nomeAlergia" style="display: none;">
							<label class="col-form-label col-md-2">Nome da Alergia</label>
							<div class="col-md-10">
								<select class="form-control" name="alergia_id">
									<option value="">Selecione a alergia</option>
									@foreach ($todas_alergias as $alergia)
									<option value="{{$alergia->id}}">{{$alergia->nome}}</option>
									@endforeach
								</select>
							</div>
						</div>



						{{-- <div class="form-group row">
							<label class="col-form-label col-md-2">Grupo sanguineo</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="grupo_sang" >
							</div>
						</div> --}}


						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2"></label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="reg__clinico__utente_id" id="registroClinico">
							</div>
						</div>

						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2"></label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="pessoal__clinico_id" value="1">
							</div>
						</div>


						<div class="form-group row">
							<label class="col-form-label col-md-2">Estado</label>
							<div class="col-md-10">
								<select name="estado" id="" class="form-control">
									<option>Activo</option> {{-- Quando está doente --}}
									<option >Inativo</option> {{-- Quando já não está doente --}}
									{{-- <option value="Morto">Morto</option> --}}
								</select>
							</div>
						</div>




						<div class="form-group row">
							<label class="col-form-label col-md-2">Descrição</label>
							<div class="col-md-10">
								<textarea name="descricao" id="" class="form-control"></textarea>
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


	<div class="modal fade" id="cadastroRCU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadasdramento de RCU</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Seu formulário aqui -->
					<form action="{{ route('rcu.store') }}" method="POST">
						@csrf

						<div class="form-group row">
							<label class="col-form-label col-md-2">Grupo sanguineo</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="grupo_sang" require>
							</div>
						</div>
						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2">Grupo sanguineo</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="user_id"  id="user_idRc">
							</div>
						</div>
						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2">Grupo sanguineo</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="status"  value="1">
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

	<script>
		function apareca(informacao) {
			if (informacao == "Alergico") {
				document.getElementById("nomeAlergia").style.display = "block"
				document.getElementById("nomeDoenca").style.display = "none"
			} else {
				document.getElementById("nomeAlergia").style.display = "none"
				document.getElementById("nomeDoenca").style.display = "block"
			}
		}
		function chamaModal(btn){
			valor=btn.name
			if(valor==0){
				idUser=btn.id
				//alert(idUser)
				document.getElementById("user_idRc").value=idUser
				$("#cadastroRCU").modal("show");
			}else{
				informacao=valor.split(',')
				document.getElementById("agendamentoId").value=btn.getAttribute('type')
				document.getElementById("registroClinico").value=informacao[1];
				$("#cadastroDiagnostico").modal("show");
			}

		}
	</script>

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
	<script src="{{asset('admin/assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/specialities.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->

</html>
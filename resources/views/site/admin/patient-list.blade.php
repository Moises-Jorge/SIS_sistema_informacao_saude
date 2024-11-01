<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure - Patient List Page</title>

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
		@include('site.admin.header')
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
						<div class="col-sm-12">
							@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
							@endif
							<h3 class="page-title">Lista de Pacientes</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								{{-- <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li> --}}
								<li class="breadcrumb-item active">Pacientes</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">

										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													{{-- <th>ID do Paciente</th> --}}
													<th>Nome do Paciente</th>
													<th>Idade do Paciente</th>
													<th>Endereço</th>
													<th>Telefone</th>
													<th>Ações</th>
													{{-- <th>Last Visit</th>
													<th class="text-right">Paid</th> --}}
												</tr>
											</thead>
											<tbody>
												@foreach ($todos_usuarios as $usuario)
												@if($usuario->tipo_utilizador==3)
												<tr>
													{{-- <td>{{ $usuario->id }}</td> --}}
													<td>{{ $usuario->nome }}</td>
													<td>{{ $usuario->idade }}</td>
													<td>{{ $usuario->morada }}</td>
													<td>{{ $usuario->telefone }}</td>
													<td>
														<div class="dropdown">
															<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$loop->iteration}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																Ações
															</button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$loop->iteration}}">
																{{-- <a class="dropdown-item"   
                                                                    		data-toggle="modal"
                                                                    		data-target="#editarDados{{$usuario->id}}" href="#">Editar</a> --}}
																<a class="dropdown-item" class="dropdown-item" data-toggle="modal" data-target="#confirmModal{{ $usuario->id }}" href="#">Deletar</a>
															</div>
														</div>
													</td>
												</tr>
												@endif
												<div class="modal fade" id="confirmModal{{ $usuario->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="confirmModalLabel">
																	Confirmação de
																	Exclusão</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Você tem certeza que deseja realizar esta ação?
															</div>
															<div class="modal-footer">
																<a type="button" class="btn btn-secondary" data-dismiss="modal">Não</a>
																<a type="button" class="btn btn-danger" id="confirmBtn" href="{{ route('user.destroy',$usuario->id)}}">Sim</a>
															</div>
														</div>
													</div>
												</div>

												{{-- <div class="modal fade" id="editarDados{{$usuario->id}}" tabindex="-1"
												role="dialog" aria-labelledby="exampleModalLabel"
												aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Editar
																Dados</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<!-- Seu formulário aqui -->
															<form action="{{route('user.update', $usuario->id) }}" method="POST">
																@csrf
																<div class="form-group row">
																	<label class="col-form-label col-md-2">Nome</label>
																	<div class="col-md-10">
																		<input type="text" class="form-control" name="nome" value="{{$usuario->nome}}" required>
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-form-label col-md-2">email</label>
																	<div class="col-md-10">
																		<input type="email" class="form-control" name="email" value="{{$usuario->email}}" required>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-form-label col-md-2">senha</label>
																	<div class="col-md-10">
																		<input type="password" class="form-control" name="password" value="{{$usuario->password}}" required>
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-form-label col-md-2">Genero</label>
																	<div class="col-md-10">
																		<select class="form-control" name="sexo" value="{{$usuario->sexo}}" required>
																			<option>Masculino</option>
																			<option>Femenino</option>
																		</select>
																	</div>
																</div>

																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																	<button type="submit" class="btn btn-primary">Salvar</button>
																</div>
															</form>
														</div>

													</div>
												</div>
									</div> --}}
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
	</div>
	<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->

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

	<script>
		document.getElementById("paciente").classList.add("active");
	</script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->

</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Prescrição Médica</title>

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
							<h3 class="page-title">Lista de Prescrições</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								{{-- <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li> --}}
								<li class="breadcrumb-item active">Prescrições</li>
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
													@if(Auth::user()->tipo_utilizador != 2)
													<th>Nome do Pessoal Clinico</th>
													@endif

													@if(Auth::user()->tipo_utilizador != 3)
													<th>Nome do Paciente</th>
													@endif

													<th>Prescrição</th>
													<th>Ações</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($receitas as $receita)

												<tr>
													@if(Auth::user()->tipo_utilizador == 3)
													<td>{{$receita->nome_pc}}</td>
													@endif

													@if(Auth::user()->tipo_utilizador == 2)
													<td>{{$receita->nome_user}}</td>
													@endif

													@if(Auth::user()->tipo_utilizador == 1)
													<td>{{$receita->nome_pc}}</td>
													<td>{{$receita->nome_pa}}</td>
													@endif

													<td>{{$receita->prescricao}}</td>
													{{-- <td>
																<div class="dropdown">
																	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$loop->iteration}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Ações
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$loop->iteration}}">
														<a class="dropdown-item" data-toggle="modal" data-target="#editarDados{{$->id}}" href="#">Editar</a>
														<a class="dropdown-item" class="dropdown-item" data-toggle="modal" data-target="#confirmModal{{ $->id }}" href="#">Deletar</a>
													</div>
									</div>
									</td> --}}
									</tr>

									{{-- <div class="modal fade" id="confirmModal{{ $->id }}"
									tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
									aria-hidden="true">
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
												<a type="button" class="btn btn-danger" id="confirmBtn" href="{{ route('.destroy',$->id)}}">Sim</a>
											</div>
										</div>
									</div>
								</div>

								<div class="modal fade" id="editarDados{{$->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
												<form action="{{route('.update', $->id) }}" method="POST">
													@csrf
													<div class="form-group row">
														<label class="col-form-label col-md-2">Nome do Pessoal Clinico</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="nome" value="{{$->nome}}" required>
														</div>
													</div>

													<div class="form-group row">
														<label class="col-form-label col-md-2">Nome do Paciente</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="nome" value="{{$->nome}}" required>
														</div>
													</div>

													<div class="form-group row">
														<label class="col-form-label col-md-2">Prescricao</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="prescricao" value="{{$->nome}}" required>
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
		document.getElementById("prescricao").classList.add("active");
	</script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->

</html>
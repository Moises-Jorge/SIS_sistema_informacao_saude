<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure - Appointment List Page</title>

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
							<h3 class="page-title">Agendamento</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Agendamento</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-md-12">

						<!-- Recent Orders -->
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									@if(Auth::user()->tipo_utilizador==3)
									<button class="btn btn-primary mb-4" style="float: right" data-toggle="modal" data-target="#modalEscolha">Criar Agendamento</button>
									@endif
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												@if(Auth::user()->tipo_utilizador==1)
												<th>Nome Paciente</th>
												@endif
												<th>Nome do Pessoal Clinico</th>
												<th>Especialidade</th>
												<th>Tipo de Serviço</th>
												<th>Nome da Consulta/Exame</th>
												<th>Preço</th>
												<th>Data</th>
												<th>Horario</th>
												<th>Data de Atendimento</th>
												<th>Horário de Atendimento</th>
												<th>Status</th>
												<th>Descricao</th>
												<th>Ações</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($todos_agendamentos as $agendamento)
											<tr>
												@if(Auth::user()->tipo_utilizador==1)
												<td>{{$class->get_name_pacient($agendamento->user_id)}}</td>
												@endif
												<td>{{$agendamento->nomePessoalClinico}}</td>
												<td>{{$agendamento->nome_especialidade}}</td>
												<td>
													@if($agendamento->exame_id!=null)
													Exame
													@else
													Consulta
													@endif
												</td>
												<td>
													@if($agendamento->exame_id!=null)
													{{$agendamento->nome_exame}}
													@else
													{{$agendamento->nome_consulta}}
													@endif
												</td>
												<td>
													@if($agendamento->exame_id!=null)
													{{$agendamento->preco_exame}}
													@else
													{{$agendamento->preco_consulta}}
													@endif
												</td>
												<td>{{$agendamento->data}}</td>
												<td>{{$agendamento->hora}}</td>
												<td>{{$agendamento->data_atendimento}}</td>
												<td>{{$agendamento->hora_atendimento}}</td>
												@if($agendamento->estado==0)
												<td>Não atendido</td>
												@else
												<td>Atendido</td>
												@endif

												<td>{{$agendamento->descricao}}</td>
												<td>
													<div class="dropdown">
														<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$loop->iteration}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Ações
														</button>
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$loop->iteration}}">
															<a class="dropdown-item" href="#">Editar</a>
															<a class="dropdown-item" class="dropdown-item" data-toggle="modal" data-target="#confirmModal{{ $agendamento->id }}" href="#">Deletar</a>
														</div>
													</div>
												</td>
											</tr>
											<div class="modal fade" id="confirmModal{{ $agendamento->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
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
															<a type="button" class="btn btn-danger" id="confirmBtn" href="{{ route('agendamento.destroy',$agendamento->id)}}">Sim</a>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Recent Orders -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->

	<!-- Modal -->
	<div class="modal fade" id="modalEscolha" tabindex="-1" role="dialog" aria-labelledby="modalEscolhaLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalEscolhaLabel">Escolha uma Opção</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Por favor, escolha o tipo de serviço que deseja:</p>
					<div class="text-center">
						<a class="btn btn-primary mr-2" data-toggle="modal" data-target="#agendamentoConsulta">Consulta</a>
						<a class="btn btn-primary" data-toggle="modal" data-target="#agendamentoExame">Exame</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="agendamentoConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agendar Consulta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Seu formulário aqui -->
					<form action="{{route('agendamento.store')}}" method="POST">
						@csrf

						<div class="form-group row">
							<label class="col-form-label col-md-2">Consulta</label>
							<div class="col-md-10">
								<select onchange="mostrarPreco(this)" class="form-control" name="consulta_id" required>
									<option value="">Selecione a Consulta</option>
									@foreach ($todas_consultas as $consulta)
									<option id="{{$consulta->preco}}" value="{{$consulta->id}}">{{$consulta->nome}}</option>
									@endforeach
								</select>
							</div>

						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-2">Preço</label>
							<div class="col-md-10">
								<span id="preco_consulta" style="font: 15pt arial;font-weight: bold;"></span>
							</div>
						</div>
						<script>
							function mostrarPreco(select) {
								console.log(select.options)
								option = select.options[select.options.selectedIndex];
								document.getElementById("preco_consulta").innerHTML = option.id + " kz";
							}
						</script>

						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2"></label>
							<div class="col-md-10">
								<input type="text" value="2" class="form-control" name="tipo_utilizador">
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

	<div class="modal fade" id="agendamentoExame" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agendar Exame</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Seu formulário aqui -->
					<form action="{{route('agendamento.store')}}" method="POST">
						@csrf

						<div class="form-group row">
							<label class="col-form-label col-md-2">Exame</label>
							<div class="col-md-10">
								<select onchange="mostrarPrecos(this)" class="form-control" name="exame_id" required>
									<option value="">Selecione a Consulta</option>
									@foreach ($todos_exames as $exame)
									<option id="{{$consulta->preco}}" value="{{$exame->id}}">{{$exame->nome}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-2">Preço</label>
							<div class="col-md-10">
								<span id="preco_consultas" style="font: 15pt arial;font-weight: bold;"></span>
							</div>
						</div>
						<script>
							function mostrarPrecos(select) {
								console.log(select.options)
								option = select.options[select.options.selectedIndex];
								document.getElementById("preco_consultas").innerHTML = option.id + " kz";
							}
						</script>

						<div class="form-group row" style="display: none">
							<label class="col-form-label col-md-2"></label>
							<div class="col-md-10">
								<input type="text" value="2" class="form-control" name="tipo_utilizador">
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
	</div>

	<!-- jQuery -->
	<script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

	<!-- Datatables JS -->
	<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatables/datatables.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('admin/assets/js/script.js')}}"></script>
	<script>
		document.getElementById("Agendamento").classList.add("active");
	</script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->

</html>
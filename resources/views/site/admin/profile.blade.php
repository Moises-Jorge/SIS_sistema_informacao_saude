<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Profile</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">
		
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
							<div class="col">
								<h3 class="page-title">Perfil</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Perfil</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{Auth::user()->nome}}</h4>
										<h6 class="text-muted">{{Auth::user()->email}}</h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i> {{Auth::user()->localidade}}, {{Auth::user()->morada}}</div>
									</div>
								</div>
							</div>

							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Detalhes Pessoal</span> 
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Editar</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Nome</p>
														<p class="col-sm-10">{{Auth::user()->nome}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Data de Nascimento</p>
														<p class="col-sm-10">{{Auth::user()->data_nascimento}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
														<p class="col-sm-10">{{Auth::user()->email}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Idade</p>
														<p class="col-sm-10">{{Auth::user()->idade}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Sexo</p>
														<p class="col-sm-10">{{Auth::user()->sexo}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Morada</p>
														<p class="col-sm-10 mb-0">{{Auth::user()->localidade}},<br>
														{{Auth::user()->morada}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Telefone</p>
														<p class="col-sm-10">{{Auth::user()->telefone}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Entidade Financeira</p>
														<p class="col-sm-10">{{Auth::user()->nome_entidade_fin}}</p>
													</div>
												</div>
											</div>
											
											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Detalhes Pessoal</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form >
																<div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Nome</label>
																			<input type="text" class="form-control" name="nome" value="{{Auth::user()->nome}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Idade</label>
																			<input type="number" class="form-control" name="idade" value="{{Auth::user()->idade}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Genero</label>
																			<select class="form-control" name="sexo" value="{{Auth::user()->sexo}}" required>
																				<option>Masculino</option>
																				<option>Femenino</option>
																			</select>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Data de Nascimento</label> {{-- BUG NO TIPO DE DADOS DA LABEL --}}
																			<input type="text" class="form-control" name="data_nascimento" value="{{Auth::user()->data_nascimento}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Localidade</label>
																			<input type="text" class="form-control" name="localidade" value="{{Auth::user()->localidade}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Morada</label>
																			<input type="text" class="form-control" name="morada" value="{{Auth::user()->morada}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Email</label>
																			<input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Telefone</label>
																			<input type="text" name="telefone" value="{{Auth::user()->telefone}}" class="form-control" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Senha</label>
																			<input type="text" class="form-control" name="password" value="{{Auth::user()->password}}" required>
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Entidade Financeira</label>
																			<input type="text" name="nome_entidade_fin" value="{{Auth::user()->nome_entidade_fin}}" class="form-control">
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Numero na Entidade Financeira</label>
																			<input type="text" class="form-control" name="num_user_entidade_fin" value="{{Auth::user()->num_user_entidade_fin}}">
																		</div>
																	</div>
																	
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
		                   {{-- SO PARA PESSOAL CLINICO --}}				<label>Numero de Ordem</label> {{-- SO PARA PESSOAL CLINICO --}}
																			<input type="text" name="num_ordem" value="{{Auth::user()->num_ordem}}" class="form-control" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6"> {{-- BUG --}}
																		<div class="form-group">
								{{-- SO PARA PESSOAL CLINICO --}}			<label>Especialidade</label> {{-- SO PARA PESSOAL CLINICO --}}
																			<input type="text" value="{{Auth::user()->especialidade_id}}" class="form-control" required>
																		</div>
																	</div>

																	<div class="col-12 col-sm-6"> {{-- BUG --}}
																		<div class="form-group">
								{{-- SO PARA PESSOAL ADM --}}				<label>Cargo</label> {{-- SO PARA PESSOAL ADM --}}
																			<input type="text" value="{{Auth::user()->cargo}}" class="form-control" required>
																		</div>
																	</div>
																	</div>
																</div>
																<button type="submit" class="btn btn-primary btn-block">Salvar Alterações</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->
											
										</div>

									
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Alterar Palavra-passe</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Palavra-passe Antiga</label>
															<input type="password" class="form-control" required>
														</div>
														<div class="form-group">
															<label>Nova Palavra-passe</label>
															<input type="password" class="form-control" required>
														</div>
														<div class="form-group">
															<label>Confirme a Palavra-passe</label>
															<input type="password" class="form-control" required>
														</div>
														<button class="btn btn-primary" type="submit">Salvar Alterações</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
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
		
		<!-- Custom JS -->
		<script  src="{{asset('admin/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>
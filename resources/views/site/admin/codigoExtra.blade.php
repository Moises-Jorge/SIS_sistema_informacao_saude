<button class="btn btn-primary mb-4" style="float: right" data-toggle="modal" data-target="#cadastroPaciente">Cadastrar Paciente</button>

<!-- Add Modal -->
<div class="modal fade" id="cadastroPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-form-label col-md-2">Nome</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">senha</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">Genero</label>
                <div class="col-md-10">
                    <select class="form-control" name="sexo">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>

            <div class="form-group row" style="display: none">
                <label class="col-form-label col-md-2"></label>
                <div class="col-md-10">
                    <input type="text"  value="3" class="form-control" name="tipo_utilizador">
                </div>
            </div>

            {{-- <div class="form-group row">
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
            </div> --}}

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
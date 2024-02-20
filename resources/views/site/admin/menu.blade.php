<ul>
    <li class="menu-title">
        <span>Main</span>
    </li>
    <li id="Dashboard">
        <a href="{{ route('menu.index') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
    </li>
    @if(Auth::user()->tipo_utilizador==2 || Auth::user()->tipo_utilizador==1)
    <li>
        <a href="{{ route('alergia.index') }}"><i class="fe fe-layout"></i> <span>Alergia</span></a>
    </li>

    <li id="diagnostico">
        <a href="{{ route('diagnostico.index') }}"><i class="fe fe-users"></i> <span>Diagnostico</span></a>
    </li>
    @if(Auth::user()->tipo_utilizador!=2)
        <li>
            <a href="{{ route('especialidade.index') }}"><i class="fe fe-users"></i> <span>Especialidades</span></a>
        </li>
   
        <li>
            <a href="{{ route('clinico.index') }}"><i class="fe fe-user-plus"></i> <span>Pessoal Clinico</span></a>
        </li>

        <li>
            <a href="{{ route('user.index') }}"><i class="fe fe-user"></i> <span>Pacientes</span></a>
        </li>
    @endif
    <li>
        <a href="{{ route('consulta.index') }}"><i class="fe fe-star-o"></i> <span>Consultas</span></a>
    </li>
    <li>
        <a href="{{ route('exame.index') }}"><i class="fe fe-activity"></i> <span>Exames</span></a>
    </li>
    @endif

    @if(Auth::user()->tipo_utilizador==3)
        <li id="Agendamento">
            <a href="{{ route('agendamento.index') }}"><i class="fe fe-vector"></i> <span>Agendamento</span></a>
        </li>
        <li>
            <a href="{{ route('rcu.index') }}"><i class="fe fe-user"></i> <span>RCU</span></a>
        </li>
    @endif
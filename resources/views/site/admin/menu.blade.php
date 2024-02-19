<ul>
    <li class="menu-title"> 
        <span>Main</span>
    </li>
    <li class="active"> 
        <a href="{{ route('menu.index') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
    </li>
    <li> 
        <a href="{{ route('alergia.index') }}"><i class="fe fe-layout"></i> <span>Alergia</span></a>
    </li>
    <li> 
        <a href="{{ route('diagnostico.index') }}"><i class="fe fe-users"></i> <span>Diagnostico</span></a>
    </li>
    <li> 
        <a href="{{ route('especialidade.index') }}"><i class="fe fe-users"></i> <span>Especialidades</span></a>
    </li>
    <li> 
        <a href="{{ route('clinico.index') }}"><i class="fe fe-user-plus"></i> <span>Pessoal Clinico</span></a>
    </li>
    <li> 
        <a href="{{ route('user.index') }}"><i class="fe fe-user"></i> <span>Pacientes</span></a>
    </li>
    <li> 
        <a href="{{ route('consulta.index') }}"><i class="fe fe-star-o"></i> <span>Consultas</span></a>
    </li>
    <li> 
        <a href="{{ route('exame.index') }}"><i class="fe fe-activity"></i> <span>Exames</span></a>
    </li>
    <li> 
        <a href="{{ route('agendamento.index') }}"><i class="fe fe-vector"></i> <span>Agendamento</span></a>
    </li>
    <li> 
        <a href="{{ route('rcu.index') }}"><i class="fe fe-user"></i> <span>RCU</span></a>
    </li>
    {{-- END --}}

    <li class="menu-title"> 
        <span>Pages</span>
    </li>
    <li> 
        <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
    </li>
    <li class="submenu">
        <a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="login.html"> Login </a></li>
            <li><a href="register.html"> Register </a></li>
            <li><a href="forgot-password.html"> Forgot Password </a></li>
            <li><a href="lock-screen.html"> Lock Screen </a></li>
        </ul>
    </li>
    <li class="submenu">
        <a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="error-404.html">404 Error </a></li>
            <li><a href="error-500.html">500 Error </a></li>
        </ul>
    </li>
    <li> 
        <a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
    </li>
    <li class="menu-title"> 
        <span>UI Interface</span>
    </li>
    <li> 
        <a href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
    </li>
    <li class="submenu">
        <a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
            <li><a href="form-input-groups.html">Input Groups </a></li>
            <li><a href="form-horizontal.html">Horizontal Form </a></li>
            <li><a href="form-vertical.html"> Vertical Form </a></li>
            <li><a href="form-mask.html"> Form Mask </a></li>
            <li><a href="form-validation.html"> Form Validation </a></li>
        </ul>
    </li>
    <li class="submenu">
        <a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="tables-basic.html">Basic Tables </a></li>
            <li><a href="data-tables.html">Data Table </a></li>
        </ul>
    </li>
    <li class="submenu">
        <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li class="submenu">
                <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="javascript:void(0);">Level 3</a></li>
                            <li><a href="javascript:void(0);">Level 3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);"> <span>Level 1</span></a>
            </li>
        </ul>
    </li>
</ul>


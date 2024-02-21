<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
    <span class="user-img"><img class="rounded-circle" src="" width="31" alt="{{Auth::user()->nome}}"></span>
</a>
<div class="dropdown-menu">
    <div class="user-header">
        <div class="avatar avatar-sm">
            <img src="" alt="User Image" class="avatar-img rounded-circle">
        </div>
        <div class="user-text">
            <h6>{{Auth::user()->nome}}</h6>
            <p class="text-muted mb-0">
                @if(Auth::user()->tipo_utilizador==1)
                    Administrativo
                @elseif(Auth::user()->tipo_utilizador==2)
                    Pessaol Clinico
                @else
                    Paciente
                @endif
            </p>
        </div>
    </div>
    <a class="dropdown-item" href="profile.html">My Profile</a>
    <a class="dropdown-item" href="settings.html">Settings</a>
    <a class="dropdown-item" href="{{route('login.logout')}}">Logout</a>
</div>
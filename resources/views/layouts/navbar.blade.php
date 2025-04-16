<nav class="navbar navbar-expand navbar-dark" id="main-nav">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-outline-light ml-3">
            <i class="fas fa-align-left"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown user">
                    <a class="nav-link dropdown-toggle py-0 position-absolute top-0 end-0 text-white"
                       style="right: -50px; top: -40px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <span class="user-name my-auto">{{ Auth::user()->name }} <i class="material-icons-outlined align-text-top mr-1">settings</i></span>
                        <div class="user-img rounded-circle d-inline-block"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/users/{{ Auth()->user()->id }}"><i class="material-icons-outlined">settings</i> Settings</a>
                        <a class="dropdown-item" href="/change_member_pass/{{ Auth()->user()->id }}"><i class="material-icons-outlined">key</i> Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="material-icons">logout</i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

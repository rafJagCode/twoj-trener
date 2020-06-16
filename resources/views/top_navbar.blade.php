<nav id='top-navbar' class="navbar navbar-expand-md">
    <a href="/" title="Return to the homepage" id="logo">
        <img class="img-logo" src="{{ asset('/images/TwójTrenerLogo.png') }}" alt="Logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
    </button>
    <div id="navbarText" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item px-2 py-2">
                    <a class="nav-link" href="{{ route('login') }}"> <span class="input-group-addon"><i
                                class="fa fa-user" aria-hidden="true"></i></span> Zaloguj</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="{{ route('register') }}">
                        <div class="btn btn-lg btn-rounded btn-orange">Zarejestruj</div>
                    </a></li>
            @else
                @if( auth()->user()->isTrainer())
                    <li class="nav-item px-2 py-2"><a class="nav-link"
                                                      href="{{route('trainer-dashboard.index')}}">Dashboard</a></li>
                    <li class="nav-item px-2 py-2"><a class="nav-link"
                                                      href="trainer/{{auth()->user()->id}}">Profil</a></li>
                @else
                    <li class="nav-item px-2 py-2"><a class="nav-link"
                                                      href="{{route('user.dashboard')}}">Profil</a></li>
                @endif
                <div class="dropdown">
                    <li class="nav-item px-2 py-2">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <div class="account-icon"><i class="fas fa-user fa-2x"></i></div>
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            @endguest
        </ul>
    </div>
</nav>

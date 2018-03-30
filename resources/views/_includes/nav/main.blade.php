<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png"
                     alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>

            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Tutorials</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Forum</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
            </div>
            <div class="nav-end">
                @if (Auth::guest())
                    <a href="{{route('login')}}" class="nav-item is-tab">Login</a>
                    <a href="{{route('register')}}" class="nav-item is-tab">Register</a>
                @else
                    <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Hi {{ Auth::user()->name }}
                            </a>

                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                            <span class="icon">
                                            <i class="fas fa-user-circle"></i>
                                            </span>User Profile
                                </a>
                                <a class="navbar-item">
                                            <span class="icon">
                                            <i class="fas fa-bell"></i>
                                            </span>
                                    Notifications
                                </a>
                                <a class="navbar-item" href="{{route('manage.dashboard')}}">
                                            <span class="icon">
                                            <i class="fas fa-cog"></i>
                                            </span>
                                    Settings
                                </a>
                                <hr class="navbar-divider">
                                <div class="navbar-item">
                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault(); document.getElementById('logout-system').submit(); ">
                                            <span class="icon">
                                            <i class="fas fa-sign-out-alt"></i>
                                            </span>
                                        Logout
                                    </a>
                                    @include('_includes.logout.logout')
                                </div>
                            </div>
                        </div>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</nav>
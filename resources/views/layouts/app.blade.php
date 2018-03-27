<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
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
                        <a href="#" class="nav-item is-tab">Login</a>
                        <a href="#" class="nav-item is-tab">Register</a>
                    @else
                        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Hi
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        <span class="icon">
                                        <i class="fa fa-fw fa-user-circle-o"></i>
                                        </span>User Profile
                                   </a>
                                    <a class="navbar-item">
                                        Notifications
                                    </a>
                                    <a class="navbar-item">
                                        Settings
                                    </a>
                                    <hr class="navbar-divider">
                                    <div class="navbar-item">
                                        Logout
                                    </div>
                                </div>
                            </div>
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>

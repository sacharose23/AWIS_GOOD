<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item title" ref="{{ url('/') }}">
                {{ config('app.name', 'Advancement of Women in Science') }}
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start"></div>

                <div class="navbar-end">
                    @guest
                        <div class="navbar-item">
                            <div class="buttons">                        
                                <a class="button is-light" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                                @if(Route::has('register'))
                                    <a class="button is-primary" href="{{ route('register') }}">
                                        <strong>Sign up</strong>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @else                          
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Admin
                            </a>
                            <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="{{ url('/home') }}">
                                Manage Posts
                            </a>                                
                            <a class="navbar-item" href="{{ url('/post/create') }}">
                                Create Post
                            </a>
                            <a class="navbar-item">
                                Delete Post
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Manage Users
                            </a>
                            </div>
                        </div> 
                        <div class="navbar-item">
                            <div class="buttons">                        
                                <a class="button is-primary" href="{{ route('logout') }}"
                                        onclick="
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                        ">
                                        {{ __('Logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>                                
                            </div>
                        </div>                        
                    @endguest
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

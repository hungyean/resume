<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LiewResume') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
            table, td, th {
            border: 1px solid #ddd;
            text-align: left;
            }

            table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            padding: 15px;
            }

            input[type="file"]{
            color: transparent;
             }
            .hghltLightYellow { color: #000000; background-color: #FFFF99; font-style:oblique; }
            .hghltBrightYellow { color: #000000; background-color: #FFFF00; font-style:oblique; }
            .hghltLightBlue { color: #000000; background-color: #33FFFF; font-style:oblique; }
            .hghltBrightBlue { color: #FFFFFF; background-color: #0000FF; font-style:oblique; }
            .hghltLightRed { color: #000000; background-color: #FF6266; font-style:oblique; }
            .hghltDrkRed { color: #FFFFFF; background-color: #993300; font-style:oblique; }

            .inlinePara {display:inline; }
            .inline {display: inline; margin-left:0px; padding-left:0px; line-height:3em; }
            .inline li { display:inline; }
            .inline li a {padding: 0.5em 1em; border: 2px solid #000000; }
    </style>
    <script type='text/javascript'>
    function changeColor(hghltColor)
    {
    // collects table data cells into an array

    var els = document.getElementsByTagName('table');

    // for each item in the array, look for a class name starting with "hghlt"
    // if found, change the class value to the current selection
    // note that this script assumes the  'td' class attribute is only used for highlighting

    for (var i=0; i<els.length; i++)
    {
        if (els[i].className.indexOf("hghlt") == 0) { els[i].className = hghltColor; }
    }
    }
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-LiewResume">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LiewResume') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
        </main>
    </div>
</body>
</html>

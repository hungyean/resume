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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->
    


<link href="https://www.dvmtrucks.com/css/custom.css" rel="stylesheet">
    <style>
            

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

            img{max-width:100%;}
	*{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
        .my-list {
           
            width:170px; 
            max-width:170px; 
            display: inline-block;
            padding: 10px;
            border: 1px solid #f5efef;
            float: left;
            margin: 15px 0;
            border-radius: 5px;
            box-shadow: 2px 3px 0px #e4d8d8;
            position:relative;
            overflow:hidden;
            background-attachment: fixed;
        }
        .my-list h3{
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            margin: 0px;
            padding: 0px;
            border-bottom: 1px solid #ccc4c4;
            margin-bottom: 5px;
            padding-bottom: 5px;
            }
            .my-list span{float:left;font-weight: bold;}
            .my-list span:last-child{float:right;}
            .my-list .offer{
            width: 100%;
            float: left;
            margin: 5px 0;
            border-top: 1px solid #ccc4c4;
            margin-top: 5px;
            padding-top: 5px;
            color: #afadad;
            }
            .detail {
            position: absolute;
            top: -100%;
            left: 0;
            text-align: center;
            background: #fff;height: 100%;width:100%;
            
        }
            
        .my-list:hover .detail{top:0;}

        .size{
            position: relative;
            float: left;
            width:  250px;
            height: 200px;
            background-position: 50% 50%;
            background-repeat:   no-repeat;
            background-size:     cover;
            max-width: 100%;
        }
        .space{
            margin-top: 5px;
        }

        .login-form {
		width: 340px;
    	margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }

           .addCart{
               margin-top:-25px;
           }
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
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand home" href="#" data-animate-hover="bounce">
<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/669dbabb-d4c5-4170-bbe6-1fffd7b4bb09/d1dghop-0187fed5-591f-43a8-afae-dfaa510f12b2.png/v1/fill/w_1528,h_523,strp/one_piece_logo_by_zerocustom1989_d1dghop-pre.png" alt="logo" class="hidden-sm hidden-xs" style="width:250px; height:61px; max-width:250px;">
<img src="https://res.cloudinary.com/teepublic/image/private/s--cQAM2otg--/t_Preview/b_rgb:ffffff,c_limit,f_jpg,h_630,q_90,w_630/v1486400189/production/designs/1187350_1.jpg" alt="logo-small" class="visible-sm visible-xs"><span class="sr-only">DVM Trucks - go to homepage</span>
</a>
</div>

<div class="navbar-collapse collapse" id="navigation">
<ul class="nav navbar-nav navbar-left">
<li class="">
<a href="{{url('home')}}">Home</a>
</li>
<li class="">
<a href="#">Stock List</a>
</li>
<li class="">
<a href="#">About Us</a>
</li>
<li class="">
<a href="#">Contact Us</a>
</li>
</ul>
</div>


<div >
<ul class="nav navbar-nav navbar-right navbar-collapse collapse" id="navigation">
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
    </div>

        <main class="py-4">

            @yield('content')
        </main>
<div id="footer" data-animate="fadeInUp">
<div class="container">
<div class="row">
<div class="col-sm-3 col-xs-12">
<h4>Information</h4>
<ul>
<li><a href="#">Home</a>
</li>
<li><a href="#">Stock List</a>
</li>
<li><a href="#">About Us</a>
</li>
<li><a href="#">Contact Us</a>
</li>
</ul>
</div>

<div class="col-sm-3 col-xs-12">
<h4>Contact</h4>
<p>
Tel: +6 082-62 9866
<br>
Fax: +6 082-62 8966
</p>
</div>

<div class="col-sm-3 col-xs-12">
<h4>Where to find us</h4>
<p>Lot 262, 9th Mile, Kuching-Serian Road, 93350 Kuching, Sarawak, Malaysia</p>
<a href="#">Go to contact page</a>
</div>

<div class="col-sm-3 col-xs-12">
<h4>Stay in touch</h4>
<p class="social">
<a href="#" class="facebook external data-animate-hover=" shake""><i class="fa fa-facebook"></i></a>
</p>
</div>

</div>

</div>

</div>

<div id="copyright">
<div class="container">
<div class="col-md-6">
<p class="pull-left">&copy;Copyright - Double Vision Marketing Sdn. Bhd. All rights reserved</p>
</div>
<div class="col-md-6">
<p class="pull-right">
Website by <a href="#">Goodsane</a>
</p>
</div>
</div>
</div>
    </div>

</body>
</html>

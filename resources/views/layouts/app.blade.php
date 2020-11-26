<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- datepicker -->
    
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/dist/css/theme.min.css')}}">
    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body >
    <div id="app" class = "main-img">  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"style="background-color: #6C757D;" >
      
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"style="color:white; ">
                <!-- Logo Image -->
                    <img src="/banner/logo.PNG" width="100" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                    {{ config('app.name', 'Laravel') }}
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
                        @if(auth()->check()&& auth()->user()->role->name === 'patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my.booking') }}" 
                                style="color: #fff; font-size:16px; font-weight: bold;">{{ __('My Booking') }}</a>
                            </li>
                        @endif

                        @if(auth()->check()&& auth()->user()->role->name === 'patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my.prescription') }}" 
                                style="color: #fff; font-size:16px; font-weight: bold;">{{ __('My Prescription') }}</a>
                            </li>
                        @endif

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #fff; font-size:16px; font-weight: bold;"id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <!-- adding my profile -->
                               
                                    
                                    <!-- adding logout button style -->

                                <div class="dropdown-menu dropdown-menu-right" 
                                aria-labelledby="navbarDropdown">
                                <a href="{{url('userprofile')}}"  class="dropdown-item">profile</a>
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

    <script>
    var dateToday = new Date();
  $( function() {
    $("#datepicker").datepicker({
        dateFormat:"yy-mm-dd",
        showButtonPanel:true,
        numberOfMonths:2,
        minDate:dateToday,
    });
});

  </script>  
  <style type="text/css">
   .ui-corner-\\\\f{
        background: #A0A0A0;
        color: #fff;

    }
    label.btn{
        padding:0;
    }
    label.btn.input{
        opacity:0;
        position: absolute;
    }
    label.btm.span{
        text-align:center;
        padding:6px 12px;
        display:block;
        min-width:80px;
    }
    label.btn input:checked+span{
        background-color: rgb(80,110,228);      
        color: #fff;
    }
    .navbar{
        background:#6610f2!important;
        color: #fff!important;
    }
  </style>     
</body>
</html>

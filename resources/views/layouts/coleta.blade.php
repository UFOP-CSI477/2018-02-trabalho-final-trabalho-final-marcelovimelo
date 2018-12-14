<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReciclaJM</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative:700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/navbar.css')?>" type="text/css">
    <script src="{{ asset('js/check.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>

      <nav class="navbar bg-transparent navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>


          </div>
          <a class="navbar-left" href="#"><img src="/img/reciclajm.png" height="50" alt=""></a>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                        @endif
                    </li>
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
      <div class="view" style="background-image: url('/img/card.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <br>
        <br>
        <br>
    <div class="container">

    <div class="row">
      <div class="col-md-12 col-lg-12">
          @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
            @endforeach
          @endif
          @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
          @endif
          @yield('content')
      </div>
    </div>
    </div>
<footer class="footer text-center">
    <div class="container">
        <p>Copyright 2018 &copy; ReciclaJM - Design by Marcelo Melo</p>
    </div>
</footer>

  </body>
</html>

<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReciclaJM</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative:700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/navbar.css')?>" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    @include('inc.navbar')
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
<br>
<br>
<footer class="footer text-center">
    <div class="container">
        <p>Copyright 2018 &copy; ReciclaJM</p>
    </div>
</footer>

  </body>
</html>

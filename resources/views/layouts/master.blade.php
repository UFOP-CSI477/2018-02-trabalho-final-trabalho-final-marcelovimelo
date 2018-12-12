<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReciclaJM</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative:700" rel="stylesheet">
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
<footer id="footer" class="text-center">
<p>Copyright 2018 &copy; ReciclaJM - Design by Marcelo Melo</p>
</footer>

  </body>
</html>

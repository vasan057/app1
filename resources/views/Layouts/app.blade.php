<html>
   <head>
      <title>
          @section('title')
            Mentor ::
          @show
     </title>
      <meta charset="utf-8">
      <meta name="Sreenivasan" content="Inysol">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="description" content="">
      <link rel="stylesheet" href="{{ asset('assets/css/base.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
      <!-- <link rel="stylesheet" href="{{ asset('assets/css/service_trans.css')}}"> -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_changes.css')}}">
      <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}">
      <!-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> -->
      <!-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}"> -->
      <!-- <link rel="icon" type="images/png" href="{{ asset('assets/images/logo.png')}}"> -->
      @stack('style')
   </head>
   <body>
      @include('Layouts.header')
      @yield('alerts')
      @yield('content')
      @include('Layouts.footer')
      <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>
      @stack('foot')
   </body>
</html>
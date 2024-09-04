<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
      <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="{{asset('assets/css/johndoe.css')}}">


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>

@yield('maincontent')





<!-- ui auth nav code  -->
<div id="app">
  
    <main class="py-4">
        @yield('content')
    </main>
</div>





	<!-- core  -->
    <script src="{{asset('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Isotope  -->
    <script src="{{asset('assets/vendors/isotope/isotope.pkgd.js')}}"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{asset('assets/js/johndoe.js')}}"></script>
 
   
</body>
</html>
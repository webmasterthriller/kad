<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>@yield('title') | Kredit Angebote Deutsch</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

@yield('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">
<META NAME="ROBOTS" CONTENT="index,all">
<META NAME="REVISIT-AFTER" CONTENT="1">
<META NAME="TITLE" CONTENT="kredit angebote deutsch">
<META NAME="AUTHOR" CONTENT="kad-gmbh">
<META NAME="OWNER" CONTENT="kreditangebote-deutsch">
<META NAME="ROBOTS" CONTENT="index,all">
<META NAME="Reply-to" CONTENT="kad-gmbh@kreditangebote-deutsch.com">
<META NAME="REVISIT-AFTER" CONTENT="2">

<!-- Favicons -->
<link href="{{asset('assets/img/favicon.png')}}"
	rel="icon">

<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
	rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}"
	rel="stylesheet">

<!-- Libraries CSS Files -->
<link
	href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}"
	rel="stylesheet">
<link href="{{asset('assets/lib/animate/animate.min.css')}}"
	rel="stylesheet">
<link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}"
	rel="stylesheet">
<link
	href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}"
	rel="stylesheet">
<link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}"
	rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">

</head>

<body >
  
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="scrollto"><img src="{{asset('assets/img/logo.png')}}" alt="Kredit Angebote Deutsch" class="img-fluid"></a>
      </div>
      
      @yield('content')
      
  </footer><!-- #footer -->
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<!-- Uncomment below i you want to use a preloader -->
	<!-- <div id="preloader"></div> -->

	<!-- JavaScript Libraries -->
	<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
	<script
		src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('assets/lib/mobile-nav/mobile-nav.js')}}"></script>
	<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
	<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
	<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

	<!-- Template Main Javascript File -->
	<script src="{{asset('assets/js/main.js')}}"></script>

	<!-- Contact Form JavaScript File -->
	<script src="{{asset('assets/js/form.js')}}"></script>

</body>
</html>
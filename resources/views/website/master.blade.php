

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Library Management System</title>
  <meta name="robots" content="noindex, nofollow">
  <meta content="" name="description">
  <meta content="" name="keywords">
  @notifyCss
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('frontend/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/aos.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('website.fixed.header')
@include('notify::components.notify')
  @yield('content')

  @include('website.fixed.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script data-cfasync="false" src="{{url('frontend/js/email-decode.min.js')}}"></script>
  <script src="{{url('frontend/js/purecounter.js')}}"></script>
  <script src="{{url('frontend/js/aos.js')}}"></script>
  <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('frontend/js/glightbox.min.js')}}"></script>
  <script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('frontend/js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('frontend/js/noframework.waypoints.js')}}"></script>
  <script src="{{url('frontend/js/validate.js')}}"></script>
  @notifyJs
  <!-- Template Main JS File -->
  <script src="{{url('frontend/js/main.js')}}"></script>

  <script>if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); } </script>
</body>

</html>
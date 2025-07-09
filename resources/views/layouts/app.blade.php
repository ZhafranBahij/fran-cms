<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("templatemo-real-agency/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("templatemo-real-agency/assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{ asset("templatemo-real-agency/assets/css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("templatemo-real-agency/assets/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("templatemo-real-agency/assets/css/templatemo-villa-agency.css") }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <livewire:component.navbar />

  @yield('content')

  @include('layouts.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset("templatemo-real-agency/vendor/jquery/jquery.min.js") }}"></script>
  <script src="{{ asset("templatemo-real-agency/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("templatemo-real-agency/assets/js/isotope.min.js") }}"></script>
  <script src="{{ asset("templatemo-real-agency/assets/js/owl-carousel.js") }}"></script>
  <script src="{{ asset("templatemo-real-agency/assets/js/counter.js") }}"></script>
  <script src="{{ asset("templatemo-real-agency/assets/js/custom.js") }}"></script>

  </body>
</html>
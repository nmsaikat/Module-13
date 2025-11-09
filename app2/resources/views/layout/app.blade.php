<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An awesome single page portfolio template. You can easily design your portfolio website using this template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuda - An awesome single page portfolio template </title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- NORMALIZE CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/css/normalize.css') }}">
    <!-- GRID CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/css/grid.css') }}">
    <!-- ANIMATED-CIRCLE CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/css/animated-circle.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('resources/css/responsive.css') }}">
</head>
<body>

    <!-- Header -->
    @include('layout.header')
    <!-- Body -->
     @yield('content')
    <!-- Footer -->
    @include('layout.footer')
    <!-- JQUERY -->
    <script src="{{ asset('vendors/js/jquery.min.js') }}"></script>
    <!-- html5shiv HTML5SHIV -->
    <script src="{{ asset('vendors/js/html5shiv.min.js') }}"></script>
    <!-- RESPOND -->
    <script src="{{ asset('vendors/js/respond.min.js') }}"></script>
    <!-- SELECTIVIZR -->
    <script src="{{ asset('vendors/js/selectivizr-min.js') }}"></script>
    <!-- JQUERY WAYPOINTS -->
    <script src="{{ asset('vendors/js/jquery.waypoints.min.js') }}"></script>
    <!-- ANIMATADE-CIRCLE JS -->
    <script src="{{ asset('vendors/js/animated-circle.js') }}"></script>
    <!-- MIXITUP -->
    <script src="{{ asset('vendors/js/mixitup.min.js') }}"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('resources/js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139623206-1"></script>


    <!-- JS Code -->
     <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139623206-1');
    </script>
</body>
</html>
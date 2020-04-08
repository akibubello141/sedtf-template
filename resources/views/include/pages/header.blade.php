 <!DOCTYPE HTML> 
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- style -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('styles/news_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/news_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('styles/main_styles.css')}}">
    <link rel="stylesheet" href="{{ asset('styles/responsive.css')}}">
    <!--styles -->
    @auth
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endauth

    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('header')
</head>
<body>
    <div class="super_container">
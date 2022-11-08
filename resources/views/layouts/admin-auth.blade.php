<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>
    <meta name="description" content="Ecommerce Application">
    <meta name="author" content="Ahmad Zaid">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{--
    <meta name="robots" content="all,follow"> --}}
    <!-- gLightbox gallery-->
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    @yield('style')
</head>

<body class="bg-gradient-primary">

    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js"')}}"></script>
<script src="{{asset(' backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
</body>

</html>
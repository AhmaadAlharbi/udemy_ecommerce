<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta name="description" content="">
    {{--
    <meta name="robots" content="all,follow"> --}}
    <!-- gLightbox gallery-->
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/lightbox2/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/choices.js/public/assets/styles/choices.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.carousel.min.css') }}">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css') }}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
    <div id="app" class="page-holder {{request()->routeIs('frontend.detail') ? 'bg-light' : null}}">
        <!-- navbar-->
        @include('partial.frontend.header')

        <div class="container">
            @yield('content')
        </div>
        @include('partial.frontend.footer')
    </div>
    @include('partial.frontend.modal')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>
    <!-- JavaScript files-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{ asset('frontend/js/front.js') }}"></script>
    <script>
        // ------------------------------------------------------- //
       //   Inject SVG Sprite - 
       //   see more here 
       //   https://css-tricks.com/ajaxing-svg-sprite/
       // ------------------------------------------------------ //
       function injectSvgSprite(path) {
       
           var ajax = new XMLHttpRequest();
           ajax.open("GET", path, true);
           ajax.send();
           ajax.onload = function(e) {
           var div = document.createElement("div");
           div.className = 'd-none';
           div.innerHTML = ajax.responseText;
           document.body.insertBefore(div, document.body.childNodes[0]);
           }
       }
       // this is set to BootstrapTemple website as you cannot 
       // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
       // while using file:// protocol
       // pls don't forget to change to your domain :)
       injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
       
    </script>

</body>

</html>
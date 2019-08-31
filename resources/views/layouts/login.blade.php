<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('signin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('signin/vendor/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('signin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{asset('signin/vendor/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('signin/css/util.css')}}" rel="stylesheet">
    <link href="{{asset('signin/css/main.css')}}" rel="stylesheet">



    @stack('css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @if(Request::is('admin*'))
        @include('layouts.partial.sidebar')
    @endif
    <div class="main-panel">
        @if(Request::is('admin*'))
            @include('layouts.partial.topbar')
        @endif
        @yield('content')
        @if(Request::is('admin*'))
            @include('layouts.partial.footer')
        @endif
        @if(Request::is('admin*'))
            @include('layouts.partial.settings')
        @endif
    </div>
</div>



    <script src="{{asset('signin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('signin/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('signin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('signin/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('signin/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('signin/js/main.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
@stack('scripts')
</body>
</html>

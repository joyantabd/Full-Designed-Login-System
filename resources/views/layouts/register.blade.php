<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('signup/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <link href="{{asset('signup/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('signup/vendor/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('signup/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('signup/css/main.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


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


    <script src="{{asset('signup/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('signup/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('signup/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('signup/vendor/datepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('signup/js/global.js')}}"></script>

@stack('scripts')
</body>
</html>

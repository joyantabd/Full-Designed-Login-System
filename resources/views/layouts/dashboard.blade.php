<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/jvectormap/jquery-jvectormap.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/dist/css/AdminLTE.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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



    <script src="{{asset('dashboard/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/chart.js/Chart.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<div class="control-sidebar-bg"></div>


@stack('scripts')
</body>
</html>

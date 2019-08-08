<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>


@section('css')
    <!-- Bootstrap -->
    <link href="{{URL::asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{URL::asset('theme/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>

        <!-- Custom Theme Style -->
    <link href="{{URL::asset('theme/build/css/custom.min.css')}}" rel="stylesheet">
    @show
    @yield('extra-css')

</head>
<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">
@include('layout.elements.sidebar')
@include('layout.elements.topnav')

@yield('content')
@include('layout.elements.footer')
    </div>
</div>

@section('scripts')
    <!-- jQuery -->
<script src="{{URL::asset('theme/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('theme/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{URL::asset('theme/vendors/nprogress/nprogress.js')}}"></script>
<!-- jQuery custom content scroller -->
<script src="{{URL::asset('theme/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    
<!-- Custom Theme Scripts -->
<script src="{{URL::asset('theme/build/js/custom.min.js')}}"></script>
@show
@yield('extra-scripts')

</body>
</html>

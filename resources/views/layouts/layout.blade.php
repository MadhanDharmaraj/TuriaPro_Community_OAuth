<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    {{-- csrf_token --}}
<meta content="{{csrf_token()}}" name="csrf_token" />
{{-- base url --}}
<meta content="{{url('/')}}" name="base_url" />
{{-- current url --}}
<meta content="{{addQueryInCurrentUrl()}}" name="current_url" />


    <title>@yield('title',siteName())</title>
    <link rel="icon" href="{{favicon()}}" sizes="16x16">

    @include('layouts.styles')
        <!-- BEGIN: Vendor JS-->
    <script src="{{asset('packa/js/vendors.min.js')}}"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    @include('layouts.sidenavbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        @include('layouts.topnavbar')
        <!-- END: Header-->

        @yield('content')

        
        
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    
    @include('layouts.footer')

    @include('layouts.scripts')
    @include('common.toastr')

</body>
<!-- END: Body-->

</html>

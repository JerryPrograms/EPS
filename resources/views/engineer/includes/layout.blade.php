<!doctype html>
<html lang="en">

@include('engineer.includes.head')

<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    @include('engineer.includes.header')


    <div class="main_container">
        <!-- ========== Left Sidebar Start ========== -->
        @include('engineer.includes.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        @yield('body')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
@include('engineer.includes.scripts')
@yield('custom-script')

</body>

</html>

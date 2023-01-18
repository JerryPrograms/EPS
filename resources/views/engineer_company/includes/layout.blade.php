<!doctype html>
<html lang="en">

@include('engineer_company.includes.head')
<style>

</style>
<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    @include('engineer_company.includes.header')


    <div class="main_container">
        <!-- ========== Left Sidebar Start ========== -->
        @include('engineer_company.includes.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        @yield('body')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    @yield('modal')
    <!-- JAVASCRIPT -->
@include('engineer_company.includes.scripts')
@yield('custom-script')

</body>

</html>

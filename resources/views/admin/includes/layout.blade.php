<!doctype html>
<html lang="en">

@include('admin.includes.head')

<body data-sidebar="dark" data-layout-mode="light">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- ========== Header Start ========== -->
    @include('admin.includes.header')
    <!-- Header End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.includes.left_side_bar')
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('body')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@include('admin.includes.scripts')

</body>
</html>

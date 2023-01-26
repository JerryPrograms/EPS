<!doctype html>
<html lang="en">

@include('engineer_company.includes.head')
<style>
    @page {
        size: auto;
        margin: 10px;
    }

    .monthly-inspection-listing-img {
        width: 50px;
        height: auto;
    }

    .search_btn_attachments {
        border: 1px solid #6281FE;
        background: rgba(98, 129, 254, 0.1);
        border-radius: 4px;
        padding: 7px 10px 7px 10px;
    }
    .delete_btn_attachments {
        border: 1px solid #FF6633;
        background: rgba(255, 102, 51, 0.1);
        border-radius: 4px;
        padding: 7px 10px 7px 10px;
    }

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

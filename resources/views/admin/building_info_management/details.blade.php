@extends('admin.includes.layout')
@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">File Manager</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">File Manager</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body-3 mb-4 mt-5">
                                <div class="profile_border">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="text-right">
                                                <h5 class="m-0 p-0 building_text mb-3 custom_font-w">
                                                    Building(Customer)Info Management (350)
                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="table-responsive  mt-3">
                                    <table class="table align-middle mb-0 table-striped">
                                        <thead>
                                        <tr>
                                            <th class="align-center custom_color_theme">No.</th>
                                            <th class="text-center custom_color_theme">Registration Date</th>
                                            <th class="text-center custom_color_theme">Building Name</th>
                                            <th class="text-center custom_color_theme">Address</th>
                                            <th class="text-center custom_color_theme">Building Manager</th>
                                            <th class="text-center custom_table_head_widt custom_color_theme">
                                                Building Management
                                                Company
                                            </th>
                                            <th class="text-center custom_color_theme">Customer Number</th>
                                            <th class="text-center custom_color_theme">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0">
                                                <p class="m-0 p-0 text-center">
                                                    126
                                                </p>
                                            </td>
                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    2022-12-01
                                                </p>
                                            </td>

                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    aaa Tower
                                                </p>
                                            </td>
                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    서울12
                                                </p>
                                            </td>

                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    Alexis
                                                </p>
                                            </td>

                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    이피에스(주)
                                                </p>
                                            </td>
                                            <td>
                                                <p class="m-0 p-0 text-center">
                                                    612363217
                                                </p>
                                            </td>
                                            <td class="d-flex">
                                                <button class="del_button">
                                                    <i class="fa-sharp fa-solid fa-pen  del_icon"></i>
                                                </button>
                                                <button class="edit_button">
                                                    <i class="fa-solid fa-trash-can del_icon"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="profile_border mt-5">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="text-right mt-5">
                                                <h5 class="m-0 p-0 building_text mb-4 custom_color_blk">
                                                    Building Info
                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <button onclick="window.location.href='{{route('admin.GetCreateCustomerInfo')}}'" class="searchbar_img border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (2).png')}}" style="height: 50px;">
                                                <p class="searchbar_text custom_mar_top">
                                                    Create Customer Info
                                                </p>
                                            </button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchbar_img_2 border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (3).png')}}" style="height: 60px;">
                                                <p class="searchbar_text">
                                                    Fill Dispatch Confirmation
                                                </p>
                                            </button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchbar_img_2 border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (1).png')}}" style="height: 60px;">
                                                <p class="searchbar_text">
                                                    Fill Regular Inspection Log
                                                </p>
                                            </button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchbar_img border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (2).png')}}" style="height: 50px;">
                                                <p class="searchbar_text custom_mar_top">
                                                    Contract Managment
                                                </p>
                                            </button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchbar_img_3 border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (3).png')}}" style="height: 60px;">
                                                <p class="searchbar_text_2">
                                                    Quote Management
                                                </p>
                                            </button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="searchbar_img_2 border-0">
                                                <img src="{{asset('admin/assets/images/Date_range_2 (1).png')}}" style="height: 60px;">
                                                <p class="searchbar_text">
                                                    Construction <br>
                                                    Completion Report
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->

    </div>
@endsection

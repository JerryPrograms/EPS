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
                            <div class="card-body-2 mt-5">
                                <div class="profile_border">

                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="text-right">
                                                <h5 class="m-0 p-0 building_text custom_font-w">
                                                    Building(Customer)Info Management (350)
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="custom_margin_tp">
                                                <div class="row">
                                                    <div class="col-lg-3 col-4 custom_responsive"
                                                         style="margin-left: 27px;">
                                                        <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                            <button id="dropdownMenu-calendarType"
                                                                    class="btn d-flex mt-4  btn_drop" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" style="margin-left: -20px;">
                                                                <i id="calendarTypeIcon"
                                                                   class="calendar-icon ic_view_month"
                                                                   style="margin-right: 4px;"></i>
                                                                <span id="calendarTypeName">Filter</span>
                                                                <span class="icon_img">
                                                                    <img
                                                                        src="{{asset('admin/assets/images/Polygon 4.png')}}"
                                                                        alt="">
                                                                </span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end text-center"
                                                                role="menu"
                                                                aria-labelledby="dropdownMenu-calendarType">
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>All
                                                                    </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>
                                                                        Registration Date
                                                                    </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>
                                                                        Building name
                                                                    </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>
                                                                        Customer number
                                                                    </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>
                                                                        Address
                                                                    </a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a class="dropdown-item" role="menuitem"
                                                                       data-action="toggle-daily">
                                                                        <i class="calendar-icon ic_view_day"></i>
                                                                        Building management company
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-7" style="padding-left: 0px;">
                                                        <div class="custom_search">
                                                            <div class="search mt-4">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Search">
                                                                <button class="btn btn-primary searchbar_button">
                                                                    <div class="search_img">
                                                                        <img
                                                                            src="{{asset('admin/assets/images/gray-search.png')}}"/>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <th class="text-center custom_table_head_widt custom_color_theme">Building
                                                Management
                                                Company
                                            </th>
                                            <th class="text-center custom_color_theme">Customer Number</th>
                                            <th class="text-center custom_color_theme">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">1</a></td>
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
                                                <a href="{{route('admin.GetBuildingDetails')}}" class="del_button">
                                                    <i class="fa-sharp fa-solid fa-pen  del_icon"></i>
                                                </a>
                                                <button class="edit_button">
                                                    <i class="fa-solid fa-trash-can del_icon"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">2</a></td>
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


                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">3</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">4</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">5</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">6</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">7</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">8</a></td>
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


                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">9</a></td>
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

                                        <tr class="mt-5">
                                            <td class="border-bttom-0 border-top-0"><a
                                                    href="javascript: void(0);" class="text-body">10</a></td>
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


                                <div class="col-lg-12">
                                    <ul class="pagination mt-5">
                                        <li class="left_icon"><img src="{{asset('admin/images/left-black.png')}}"/>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item custom_mar ml-5"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item custom_mar"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item custom_mar"><a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item custom_mar"><a class="page-link" href="#">5</a>
                                        </li>
                                        <li class="right_icon custom_mar"><img
                                                src="{{asset('admin/images/right-black.png')}}"/>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
@endsection

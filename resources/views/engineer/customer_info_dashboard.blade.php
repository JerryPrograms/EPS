@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->


                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body" style="padding-bottom: 50px;">
                                    <h4 class="card-title mb-4">고객 정보</h4>
                                    <div class="row">

                                        <div class="col-md-1">
                                            <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                <button id="dropdownMenu-calendarType" class="btn d-flex mt-4  btn_drop"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="true">
                                                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month"
                                                       style="margin-right: 4px;"></i>
                                                    <span id="calendarTypeName">Filter</span>
                                                    <span class="icon_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/Polygon 4.png')}}"
                                                                alt="">
                                                        </span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" role="menu"
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
                                                            Building management company </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="custom_search">
                                                <div class="search mt-4">
                                                    <input type="text" class="form-control" placeholder="검색하기">
                                                    <button class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/search.png')}}"/>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="align-middle">No.</th>
                                                <th class="text-center">Registraion Date</th>
                                                <th class="text-center">Customer number</th>
                                                <th class="text-center">Building name</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Building Management Company</th>
                                                <th class="text-center">Engineer
                                                    company
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a
                                                        href="javascript: void(0);"
                                                        class="text-body  tble_text">20</a></td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        2022.11.01
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        223456-5032
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        포포인츠호텔
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        서울시 강남구 대로 168
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        대광산업
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        이피에스
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- end table-responsive -->
                                    <div class="row m-0">
                                        <div class="searchbar_main_section">
                                            <div class="col-lg-12">
                                                <h4 class="card-title mt-5 border-bottom-0 mb-4"> <span
                                                        class="bor_lef">&nbsp;</span> Input Customer Information</h4>
                                            </div>

                                            <div class="button_section">
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Create Customer Info
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Fill Dispatch Confirmation
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Fill Regular Inspection Log
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Contract Managment
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Quote Management
                                                    </p>
                                                </button>
                                                <button class="searchbar_img_2 border-0 mt-2">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
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
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection

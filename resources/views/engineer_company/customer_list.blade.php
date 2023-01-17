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
                                <div class="card-body">
                                    <h4 class="card-title mb-4">고객 정보</h4>
                                    <div class="row">

                                        <div class="col-md-1 col-6">
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

                                        <div class="col-md-3 col-6">
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
                                        <div class="col-md-8 col-12 text-end">
                                            <button data-bs-toggle="modal" data-bs-target="#customerInfoModal"
                                                    type="button" class="btn btn-primary waves-effect waves-light w-sm">
                                                <i class="mdi mdi-plus d-block font-size-16"></i>
                                            </button>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">No.</th>
                                                <th class="text-center">registration date
                                                </th>
                                                <th class="text-center">customer number
                                                </th>
                                                <th class="text-center">building name
                                                </th>
                                                <th class="text-center">address</th>
                                                <th class="text-center">building management company
                                                </th>
                                                <th class="text-center">maintenance company
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a href="javascript: void(0);"
                                                                                   class="text-body fw-bold">20</a></td>
                                                <td class="custom_br_theme_clr_2">
                                                    <input type="email"
                                                           class="form-control col-lg-12 custom_input_tble"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="2022.11.01">
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <input type="email"
                                                           class="form-control col-lg-12 custom_input_tble"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="223456-5032">
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <input type="email"
                                                           class="form-control col-lg-12 custom_input_tble"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Four Points ">
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <input type="email"
                                                           class="form-control col-lg-12 custom_input_tble"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="168 Dosan-daero,
                                                                ">
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Daekwang In                                                                ">
                                                </td>

                                                <td class="custom_br_theme_clr_3">
                                                    <a href="{{route('ec.GetCustomerInfoDashboard')}}">
                                                        <input type="email"
                                                               class="form-control col-lg-2 custom_input_tble"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="EPS">
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                    class="text-body fw-bold">19</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">2022.11.01</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">223456-5032</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Four Points</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">168 Dosan</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Daekwang In</button>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <!-- Button trigger modal -->
                                                    <button class="date_button_2 border-0">EPS</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                    class="text-body fw-bold">18</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">2022.11.01</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">223456-5032</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Four Points</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">168 Dosan</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Daekwang In</button>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <!-- Button trigger modal -->
                                                    <button class="date_button_2 border-0">EPS</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                    class="text-body fw-bold">17</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">2022.11.01</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">223456-5032</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Four Points</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">168 Dosan</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Daekwang In</button>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <!-- Button trigger modal -->
                                                    <button class="date_button_2 border-0">EPS</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                    class="text-body fw-bold">16</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">2022.11.01</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">223456-5032</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Four Points</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">168 Dosan</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Daekwang In</button>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <!-- Button trigger modal -->
                                                    <button class="date_button_2 border-0">EPS</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                    class="text-body fw-bold">15</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">2022.11.01</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button border-0">223456-5032</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Four Points</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">168 Dosan</button>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <button class="date_button_2 border-0">Daekwang In</button>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <!-- Button trigger modal -->
                                                    <button class="date_button_2 border-0">EPS</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>


                                        <div class="col-lg-12 text-center">
                                            {{$customer->links('common_files.paginate')}}
                                        </div>


                                    </div>
                                    <!-- end table-responsive -->

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
@section('modal')
    @include('common_files.customer_add_modal')
@endsection

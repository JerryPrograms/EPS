@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">

                    <!-- start page title -->

                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body mb-4">
                                    <h4 class="card-title mb-4">Fill in customer information
                                    </h4>
                                    <div class="row">

                                        <div class="col-md-1 col-3">
                                            <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                <button id="dropdownMenu-calendarType"
                                                        class="btn d-flex mt-4  btn_drop" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="true">
                                                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month"
                                                       style="margin-right: 4px;"></i>
                                                    <span id="calendarTypeName">Filter</span>
                                                    <span class="icon_img">
                                                            <img src="{{asset('engineer_company/assets/images/Polygon 4.png')}}" alt="">
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

                                        <div class="col-md-8 col-9">
                                            <div class="custom_search_2">
                                                <div class="search mt-4">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <button class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img src="{{asset('engineer_company/assets/images/gray_searchbar.png')}}"/>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-12">
                                            <div class="circle_main_section">
                                                <button class="circle_img_section">
                                                    <img src="{{asset('engineer_company/images/user2.png')}}">
                                                    <p class="circle_img_text mt-3">홍길동 기사님</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">No.</th>
                                                <th class="text-center">registration date
                                                </th>
                                                <th class="text-center">customer number
                                                </th>
                                                <th class="text-center">building name
                                                </th>
                                                <th class="text-center">address
                                                </th>
                                                <th class="text-center">building management company
                                                </th>
                                                <th class="text-center">maintenance company
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a href="javascript: void(0);"
                                                                                   class="text-body  tble_text">20</a>
                                                </td>
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
                                                        Four Points Hotel
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        168 Dosan
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        Daekwang In

                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        EPS
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <div class="card_section_2">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-11">
                                                <div class="">
                                                    <h4 class="card_tittle_2">Customer information creation page
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <h4 class="card_tittle_2" style="text-align: end;">3 / 8</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- form row 1 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11 col-6">
                                            <h4 class="card-title mt-2 border-bottom-0 mb-4"><span class="bor_lef">&nbsp;</span>customer
                                                information
                                            </h4>
                                        </div>
                                        <div class="col-lg-1 col-6">
                                            <div class="file_main_section">
                                                <button class="file_button">
                                                    <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                </button>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="d-flex align-items-baseline">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 인증번호</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="Incheon No. 3-87
                                                        ">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> type</label>
                                                <div class="col-lg-3">
                                                    <div class="dropdown">
                                                        <button class="btn drop_section_3"
                                                                type="button" id="dropdownMenuButton1"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                              <span style="margin-right: 10px;">multi-layer circulation
                                                            </span>
                                                            <span class="drop_img">
                                                                    <img src="{{asset('engineer_company/assets/images/Icon Color.png')}}"
                                                                         style="padding-left: 12px;">
                                                                </span>
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">multi-layer
                                                                    circulation
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#"> elevator type
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">plane reciprocating
                                                                </a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">plane reciprocating
                                                                </a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Staca
                                                                </a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">puzzle
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="#">puzzle
                                                                </a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> Number of parking spaces
                                                </label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="56">
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> producer
                                                </label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="Dongyang Menics
                                                        ">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> year of installation
                                                </label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="April 1, 2010
                                                        ">
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> Inspection date
                                                </label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="June 25, 2010
                                                        ">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span>Additional Information
                                                </label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="1 lift 5 carts
                                                        ">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- form row 1 end  -->
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>


                    <!-- section 2 end  -->

                    <!---------------------------- tabel 2 start----------------  -->
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body mb-4">
                                    <h4 class="card-title mt-2 border-bottom-0 mb-4"><span class="bor_lef">&nbsp;</span>
                                        Inspection confirmation certificate (latest version)
                                    </h4>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light custom_bor_2">
                                            <tr>

                                                <th class="align-middle custom_heading custom_br_rd">Inspection
                                                    Classification
                                                </th>
                                                <th class="text-center align-middle custom_heading_2 custom_br_rd">
                                                    manager name
                                                </th>
                                                <th class="text-center custom_heading_2 align-middle  custom_br_rd">
                                                    installation place
                                                </th>
                                                <th class="text-center custom_br_rd">Periodic inspection (validity
                                                    period)
                                                </th>
                                                <th class="text-center custom_br_rd">confirmation</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd">
                                                    <button class="chines_button">Precise Safety
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Hong
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="158 Dosan-daero
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="From December 5, 2020 to August
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('engineer_company/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button">
                                                            <img src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <div class="bluebar_img_section">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd">
                                                    <button class="chines_button">Precise Safety
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Hong
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="158 Dosan-daero
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="From December 5, 2020 to August
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('engineer_company/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button">
                                                            <img src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <div class="bluebar_img_section">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd">
                                                    <button class="chines_button">Precise Safety
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Hong
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="158 Dosan-daero
                                                                ">
                                                </td>
                                                <td class="custom_br_rd">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="From December 5, 2020 to August
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('engineer_company/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button">
                                                            <img src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <div class="bluebar_img_section">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- form row 4 start  -->
                                    <div class="row justify-content-end">
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button_2 mb-5 mt-5">Back page
                                            </button>
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button mb-5 mt-5">Save and Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- container-fluid -->
                <!-------------------------------- table 2 end---------------  -->

            </div>
            <!-- End Page-content -->
        </div>
    </div>
@endsection

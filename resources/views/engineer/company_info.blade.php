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
                                <div class="card-body mb-4">
                                    <h4 class="card-title mb-4">Fill in customer information
                                    </h4>
                                    <div class="row">

                                        <div class="col-md-1 col-3">
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

                                        <div class="col-md-3 col-9">
                                            <div class="custom_search">
                                                <div class="search mt-4">
                                                    <input type="text" class="form-control" placeholder="search">
                                                    <button class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/gray_searchbar.png')}}"/>
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
                                                <h4 class="card_tittle_2" style="text-align: end;">2 / 4</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- form row 1 start  -->
                                    <div class="custom_padding_form">
                                        <div class="row mt-3">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0 mb-4 mt-3"> <span
                                                        class="bor_lef">&nbsp;</span> customer information
                                                </h4>
                                            </div>
                                            <div class="col-lg-1">
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
                                                            class="star_section">*</span> Building name
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Kyobo Life Insurance Co., Ltd.
                                                        ">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> manager</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Jewon Lee
                                                        ">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> Building manager name / <br>
                                                        contact information</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Hong Gil Dong/ 010-8021-5235  ">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Contract manager name / <br>
                                                        contact information
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Kim Jeong-soo/  010-4846-4843">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> address</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Kyobo Life Insurance Seocho Office Building, 465 Gangnam-daero.">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> fax</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="{{__('translation.02-4347-4893')}}">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> e-mail
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="angelina@gmail.com">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- form row 1 end  -->

                                    <!-- form row 2 start  -->
                                    <div class="custom_padding_form">
                                        <div class="row mt-5">
                                            <div class="col-lg-12">
                                                <h4 class="card-title border-bottom-0 mb-4"> <span
                                                        class="bor_lef">&nbsp;</span>Building management company
                                                    information</h4>
                                            </div>
                                            <form>
                                                <div class="d-flex align-items-baseline">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> building name
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Kyobo Life Insurance Co., Ltd.
                                                        ">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> manager</label>

                                                    <input type="email"
                                                           class="form-control col-lg-3 custom_input_2 custom_widt_inp"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Sangyoon Lee">

                                                    <span
                                                        class="star_section  custom_padd_inp">*</span>
                                                    <input type="email"
                                                           class="form-control col-lg-3 custom_input_3  custom_widt_inp_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Company Registration Number
                                                            ">

                                                    <input type="email"
                                                           class="form-control col-lg-3 custom_input_2  custom_widt_inp"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="436-84-94234 ">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>address</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="3rd floor, Yeomchang Building, 333 Yeomchang-dong, Gangseo-gu, Seoul
                                                        ">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>business</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Comprehensive building management
                                                        ">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Contact 1, 2
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="010-3837-4894    /    02-4847-3856">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> fax</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="{{__('translation.02-4347-4893')}}">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> Email</label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="angelina@gmail.com">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- form row 2 end  -->


                                    <!-- form row 4 start  -->
                                    <div class="row justify-content-end">
                                        <div class="col-lg-2 col-6">
                                            <a href="Building-Information .html">
                                                <button class="form_button_2 mb-5 mt-5">Back page
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            <a href="company-info.html">
                                                <button class="form_button mb-5 mt-5">Save and Next
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- section 2 end  -->
            </div>
            <!-- End Page-content -->


        </div>
    </div>

@endsection


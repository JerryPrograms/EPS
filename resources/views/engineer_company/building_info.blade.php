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
                                    <h4 class="card-title mb-4">Customer Info
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
                                                                                   class="text-body  tble_text">1</a>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$customer->created_at->format('Y.m.d')}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$customer->customer_number}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$customer->building_name}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$customer->address}}
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$customer->building_management_company}}

                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        {{$customer->maintenance_company}}
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
<<<<<<< Updated upstream
                                    <form id="buildingInformationForm">
=======

                                    <form id="createBuildingInformation">
>>>>>>> Stashed changes
                                        @csrf
                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">Building Info
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">1 / 4</h4>
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
<<<<<<< Updated upstream
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="file_main_section">
                                                        <button class="file_button">
                                                            <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                        </button>
                                                    </div>
=======
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="file_main_section">
                                                        <button class="file_button">
                                                            <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-baseline">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> Building name
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="aaaaa Tower
                                                        ">
>>>>>>> Stashed changes
                                                </div>
                                                <form>
                                                    <div class="d-flex align-items-baseline">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">*</span> Building name
                                                        </label>
                                                        <input type="text" name="building_name"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter building Name
                                                        " required>
                                                    </div>

                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">*</span> Building Manager
                                                            Name</label>
                                                        <input type="text" name="building_manager_name"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter building manager name
                                                        " required>
                                                    </div>


                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">*</span> Building Manager
                                                            Contact</label>
                                                        <input type="number" min="0" name="building_manager_contact"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter contact (010-8021-5235)" required>
                                                    </div>


                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">*</span>Address
                                                        </label>
                                                        <input type="text" name="address"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter address" required>
                                                    </div>

                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">*</span>Contract Manager / contact</label>
                                                        <input type="text" name="manager_contact"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter manager contact number" required>
                                                    </div>


                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">&nbsp;</span> fax</label>
                                                        <input type="text" name="bi_tax"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter fax">
                                                    </div>

                                                    <div class="d-flex align-items-baseline mt-4">
                                                        <label for="exampleInputEmail1"
                                                               class="form-label custom_lab col-lg-4"> <span
                                                                class="star_section">&nbsp;</span> e-mail
                                                        </label>
                                                        <input type="email" name="bi_email"
                                                               class="form-control col-lg-8 custom_input"
                                                               id="exampleInputEmail1" aria-describedby="emailHelp"
                                                               placeholder="Enter email">
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

                                                <div class="d-flex align-items-baseline">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> Company Name
                                                    </label>
                                                    <input type="text" name="company_name"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter company name
                                                        " required>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> CEO Name</label>

                                                    <input type="text" name="ceo_name"
                                                           class="form-control col-lg-2 custom_input_2 custom_widt_inp"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter ceo name" required>

<<<<<<< Updated upstream
=======
                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> e-mail
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="angelina@gmail.com">
                                                </div>
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
                                                <div class="d-flex align-items-baseline">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> Company Name
                                                    </label>
                                                    <input type="email" class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Kyobo Life Insurance Co., Ltd.
                                                        ">
                                                </div>
>>>>>>> Stashed changes

                                                </div>
                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Company Registration
                                                        Number</label>

                                                    <input type="text" name="company_reg_number"
                                                           class="form-control col-lg-3 custom_input_2  custom_widt_inp"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter registration number" required>

                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Address</label>
                                                    <input type="text" name="ci_address"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter address" required>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span> Industry Category</label>
                                                    <input type="text" name="industry_category"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Industry Category" required>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Contact 1, 2
                                                    </label>
                                                    <input type="text" name="ci_contacts"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Contact 1/Contact 2">
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> fax</label>
                                                    <input type="text" name="ci_fax"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="02-4347-4893">
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> Email</label>
                                                    <input type="email" name="ci_email"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter email">
                                                </div>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
                                            </div>
                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2">
<<<<<<< Updated upstream
                                                <button type="submit" class="form_button mb-5 mt-5">Save and Next
                                                </button>
                                            </div>
                                        </div>
                                        <!-- form row 4 end  -->

                                    </form>
=======
                                                <a href="AS-information.html">
                                                    <button class="form_button mb-5 mt-5">Save and Next
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- form row 4 end  -->
>>>>>>> Stashed changes
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    </form>
                </div>
                <!-- section 2 end  -->
            </div>
            <!-- End Page-content -->


        </div>
    </div>
@endsection
@section('custom-script')
<<<<<<< Updated upstream
=======
    <script>
        $('#createBuildingInformation').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#createBuildingInformation'), "{{ route('engineer_signup_action') }}", $('.login_buton'), "{{ route('e.GetCustomerInfoDashboard') }}", onRequestSuccess);
        });
    </script>
>>>>>>> Stashed changes
@endsection

@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <form id="parkingFacilityInformationForm">
                        @csrf
                        <input name="customer_id" value="{{$customer->id}}" hidden="">

                        @if(!empty($customer->ParkingFacilityCertificate))
                            <input name="p_id" value="{{$customer->ParkingFacilityCertificate->id}}" hidden>
                        @endif
                        <!-- start page title -->

                        <!-- end page title -->
                        <div class="row no-print">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body mb-4">
                                        <div class="prompt w-100"></div>
                                        <h4 class="card-title mb-4">

                                            {{ __('translation.Fill in customer information') }}

                                        </h4>
                                        <div class="row">


                                            <div class="col-12">
                                                <div class="circle_main_section">
                                                    <button type="button" class="circle_img_section">
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


                                                    <th class="">
                                                        {{ __('translation.no.') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Registration Date') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Customer Number') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Building Name') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.address') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Building Management Company') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Maintenance Company') }}

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

                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">

                                                    <div class="">
                                                        <h4 class="card_tittle_2">

                                                            {{ __('translation.customer info') }}

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
                                                <h4 class="card-title mt-2 border-bottom-0 mb-4"><span class="bor_lef">&nbsp;</span>Parking

                                                    {{ __('translation.facility certification information') }}

                                                </h4>
                                            </div>
                                            <div class="col-lg-1 col-6 no-print">
                                                <div class="file_main_section">
                                                    <button type="button"
                                                            onclick="printForm($('#parkingFacilityInformationForm'))"
                                                            class="file_button">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-4 col-12">
                                                    <label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>

                                                            {{ __('translation.Certification Number') }}

                                                        </label>
                                                </div>
                                                <div class="col-md-8 col-12"><input type="text"
                                                                                    name="certification_number"
                                                                                    class="form-control w-100 custom_input"



                                                    placeholder="{{ __('translation.Enter certification number') }}

                                                        " required
                                                                                    @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->certification_number}}" @endif>
                                                </div>
                                            </div>

                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.type') }}
                                                        </label></div>
                                                <div class="col-md-3 col-12 mr-auto">
                                                    <select class="form-select" name="type" autocomplete="off" required>
                                                        <option value=""
                                                                @if(empty($customer->ParkingFacilityCertificate)) selected
                                                                @endif disabled>--Select Type--
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Multilayer Circulation') selected
                                                            @endif value="Multilayer Circulation">Multilayer Circulation
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Elevator type') selected
                                                            @endif value="Elevator type">Elevator type
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Plane Reciprocating') selected
                                                            @endif value="Plane Reciprocating">Plane Reciprocating
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Rotary system') selected
                                                            @endif value="Rotary system">Rotary system
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Multilayer Circulation') selected
                                                            @endif value="Multilayer Circulation">Multilayer Circulation
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Stacca') selected
                                                            @endif value="Stacca">Stacca
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ParkingFacilityCertificate) && $customer->ParkingFacilityCertificate->type == 'Puzzle') selected
                                                            @endif value="Puzzle">Puzzle
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>

                                                            {{ __('translation.Number of parking spaces') }}

                                                    </label></div>
                                                <div class="col-md-8 col-12"><input type="number" min="1"
                                                                                    name="parking_space"
                                                                                    class="form-control w-100  custom_input"


                                            placeholder="{{ __('translation.Enter number of parking space') }}"
                                            required

                                                                                    @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->parking_space}}" @endif
                                                    ></div>
                                            </div>


                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.producer') }}
                                                    </label></div>
                                                <div class="col-md-8 col-12"><input type="text" name="producer"
                                                                                    class="form-control w-100  custom_input"



                         placeholder="{{ __('translation.Enter producer name') }}" required

                                                                                    @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->producer}}" @endif
                                                    ></div>
                                            </div>

                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>

                                                            {{ __('translation.year of installation') }}

                                                    </label></div>
                                                <div class="col-md-8 col-12"><input type="date"
                                                                                    name="year_of_installation"
                                                                                    class="form-control w-100  custom_input"
                                                                                    required
                                                                                    @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->year_of_installation}}" @endif
                                                    ></div>
                                            </div>


                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.Inspection date') }}
                                                    </label></div>
                                                <div class="col-md-8 col-12"><input type="date" name="inspection_date"
                                                                                    class="form-control w-100  custom_input"


                                                                                    required
                                                                                    @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->inspection_date}}" @endif
                                                    ></div>
                                            </div>

                                            <div class="row align-items-center mt-4">
                                                <div class="col-md-4 col-12"><label
                                                        class="form-label custom_lab mb-0 "> <span
                                                            class="star_section">*</span>

                                                            {{ __('translation.Additional Information') }}
                                                    </label></div>
                                                <div class="col-md-8 col-12"><input type="text"
                                        name="addition_information"
                                        class="form-control w-100  custom_input"


                                        placeholder="{{ __('translation.Enter additional details') }}"
                                        @if(!empty($customer->ParkingFacilityCertificate)) value="{{$customer->ParkingFacilityCertificate->addition_information}}"
                                        @endif
                                        required></div>

                                            </div>

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
                                        <h4 class="card-title mt-2 border-bottom-0 mb-4"><span
                                                class="bor_lef">&nbsp;</span>

                                                {{ __('translation.Inspection confirmation certificate (latest version)') }}

                                        </h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light custom_bor_2">

                                                <tr>

                                                    <th class="align-middle custom_heading custom_br_rd">
                                                        {{ __('translation.Inspection Classification') }}
                                                    </th>
                                                    <th class="text-center align-middle custom_heading_2 custom_br_rd">
                                                        {{ __('translation.Manager Name') }}
                                                    </th>
                                                    <th class="text-center custom_heading_2 align-middle  custom_br_rd">
                                                        {{ __('translation.Installation place') }}
                                                    </th>
                                                    <th class="text-center custom_br_rd">
                                                        {{ __('translation.Periodic inspection (validity period)') }}
                                                    </th>
                                                    <th class="text-center custom_br_rd">
                                                        {{ __('translation.confirmation') }}
                                                    </th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr class="tb_bor mt-5">

                                                    @if(count($customer->InspectionCertificate) > 0)
                                                        <input name="pc_id[]"
                                                               value="{{$customer->InspectionCertificate[0]->id}}"
                                                               hidden>
                                                    @endif
                                                    <td class="custom_br_rd">
                                                        <button class="chines_button">

                                                            {{ __('translation.Precision safety inspection') }}

                                                        </button>
                                                        <input id="1sad" name="inspection_type[]"
                                                               value="Precision safety inspection"
                                                               hidden>
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="2adsdas" type="text" name="manager_name[]"
                                                               class="form-control col-lg-2 custom_input_tble_4"

                                                               placeholder="{{ __('translation.Manager Name') }}" required
                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[0]->manager_name}}" @endif
                                                        >
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="d1d21" type="text" name="installation_place[]"
                                                               class="form-control col-lg-2 custom_input_tble_3"

                                                               placeholder="{{ __('translation.Enter Place') }}" required

                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[0]->installation_place}}" @endif
                                                        >
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <div class="d-flex">
                                                            <div>
                                                                <input id="d111c" type="date" name="inspection_period_from[]"
                                                                       style="width: 147px !important;"
                                                                       class="form-control col-lg-2 custom_input_tble_2 w-50"

                                                                       placeholder="{{ __('translation.From December 5, 2020 to August') }}"
                                                                       onchange="RestrictNextDate($(this))"
                                                                       required
                                                                       @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[0]->inspection_period_from}}" @endif
                                                                >
                                                            </div>
                                                            <div>
                                                                <input id="asd1d11" type="date" name="inspection_period_to[]"
                                                                       style="width: 147px !important;"
                                                                       class="form-control col-lg-2 custom_input_tble_2 w-50"


                                                                       placeholder="{{ __('translation.Regular Inspection inspection') }}"

                                                                       required
                                                                       @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[0]->inspection_period_to}}" @endif
                                                                >
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center custom_br_rd">
                                                        <div class="aroow_main_section">
                                                            <button type="button"
                                                                    onclick="$(this).next().trigger('click')"
                                                                    class="aroow_button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/aroow.png')}}">

                                                            </button>
                                                            <input type="file" hidden name="inspection_certificate[]"
                                                                   @if(empty($customer->InspectionCertificate)) required @endif>
                                                            <button class="search_button"
                                                                    @if(count($customer->InspectionCertificate) > 0)  onclick="setImage('{{asset($customer->InspectionCertificate[0]->inspection_certificate)}}')"
                                                                    @endif type="button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                            </button>

                                                            <div class="bluebar_img_section">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="tb_bor mt-5">
                                                    @if(count($customer->InspectionCertificate) > 0)
                                                        <input name="pc_id[]"
                                                               value="{{$customer->InspectionCertificate[1]->id}}"
                                                               hidden>
                                                    @endif
                                                    <td class="custom_br_rd">
                                                        <button class="chines_button">

                                                            {{ __('translation.Regular Inspection inspection') }}

                                                        </button>
                                                        <input id="1d2dcas" name="inspection_type[]"
                                                               value="Regular Inspection inspection"
                                                               hidden>
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="asdqwqwc" type="text" name="manager_name[]"
                                                               class="form-control col-lg-2 custom_input_tble_4"


                                                               placeholder="{{ __('translation.Manager Name') }}" required

                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[1]->manager_name}}" @endif
                                                        >

                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="d11111cc" type="text" name="installation_place[]"
                                                               class="form-control col-lg-2 custom_input_tble_3"


                                                               placeholder="{{ __('translation.Enter Place') }}" required

                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[1]->installation_place}}" @endif
                                                        >
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <div class="d-flex">
                                                           <div>
                                                               <input id="dq1i9hvubhkj" type="date" name="inspection_period_from[]"
                                                                      style="width: 147px !important;"
                                                                      class="form-control col-lg-2 custom_input_tble_2 w-50"


                                                                      placeholder="{{ __('translation.From December 5, 2020 to August') }}"
                                                                      required
                                                                      onchange="RestrictNextDate($(this))"
                                                                      @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[1]->inspection_period_from}}" @endif
                                                               >
                                                           </div>
                                                            <div>
                                                                <input id="cqqew211223f" type="date" name="inspection_period_to[]"
                                                                       style="width: 147px !important;"
                                                                       class="form-control col-lg-2 custom_input_tble_2 w-50"

                                                                       placeholder="{{ __('translation.From December 5, 2020 to August') }}"
                                                                       required
                                                                       @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[1]->inspection_period_to}}" @endif
                                                                >
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center custom_br_rd">
                                                        <div class="aroow_main_section">
                                                            <button type="button"
                                                                    onclick="$(this).next().trigger('click')"
                                                                    class="aroow_button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/aroow.png')}}">

                                                            </button>
                                                            <input type="file" hidden
                                                                   name="inspection_certificate[]"
                                                                   @if(empty($customer->InspectionCertificate)) required @endif>
                                                            <button class="search_button"
                                                                    @if(count($customer->InspectionCertificate) > 0) onclick="setImage('{{asset($customer->InspectionCertificate[1]->inspection_certificate)}}')"
                                                                    @endif type="button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                            </button>

                                                            <div class="bluebar_img_section">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr class="tb_bor mt-5">
                                                    @if(count($customer->InspectionCertificate) > 0)
                                                        <input name="pc_id[]"
                                                               value="{{$customer->InspectionCertificate[2]->id}}"
                                                               hidden>
                                                    @endif
                                                    <td class="custom_br_rd">

                                                        <button class="chines_button">
                                                            {{ __('translation.Inspection of Use') }}
                                                        </button>

                                                        <input name="inspection_type[]" value="Inspection of Use"
                                                               hidden>
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="ffrtyhjh" type="text" name="manager_name[]"
                                                               class="form-control col-lg-2 custom_input_tble_4"


                                                               placeholder="{{ __('translation.Manager_Name') }}" required

                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[2]->manager_name}}" @endif
                                                        >
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <input id="pppodi1k" type="text" name="installation_place[]"
                                                               class="form-control col-lg-2 custom_input_tble_3"


                                                               placeholder="{{ __('translation.Enter Place') }}" required

                                                               @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[2]->installation_place}}" @endif
                                                        >
                                                    </td>
                                                    <td class="custom_br_rd">
                                                        <div class="d-flex">

                                                            <div class="">
                                                                <input id="1d1fvvv3" type="date" name="inspection_period_from[]"
                                                                       style="width: 147px !important;"
                                                                       class="form-control col-lg-2 custom_input_tble_2 w-50"

                                                                       placeholder="{{ __('translation.From December 5, 2020 to August') }}"
                                                                       required
                                                                       onchange="RestrictNextDate($(this))"
                                                                       @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[2]->inspection_period_from}}" @endif
                                                                >
                                                            </div>
                                                            <div class="">
                                                                <input id="d11d2d12d1d2" type="date" name="inspection_period_to[]"
                                                                       style="width: 147px !important;"
                                                                       class="form-control col-lg-2 custom_input_tble_2 w-50"

                                                                       placeholder="{{ __('translation.From December 5, 2020 to August') }}"
                                                                       required
                                                                       @if(count($customer->InspectionCertificate) > 0) value="{{$customer->InspectionCertificate[2]->inspection_period_to}}" @endif
                                                                >
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center custom_br_rd">
                                                        <div class="aroow_main_section">
                                                            <button type="button"
                                                                    onclick="$(this).next().trigger('click')"
                                                                    class="aroow_button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/aroow.png')}}">

                                                            </button>
                                                            <input type="file" hidden name="inspection_certificate[]"
                                                                   @if(empty($customer->InspectionCertificate)) required @endif>
                                                            <button class="search_button"
                                                                    @if(count($customer->InspectionCertificate) > 0) onclick="setImage('{{asset($customer->InspectionCertificate[2]->inspection_certificate)}}')"
                                                                    @endif type="button">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/bluebar.png')}}">
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
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2 col-6">
                                                <button
                                                    onclick="window.location.href = '{{route("ec.CreateCompanyInfo",request()->segment(3))}}'"

                                                    type="button" class="form_button_2 mb-5 mt-5">
                                                    {{ __('translation.Back_page') }}
                                                </button>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5">
                                                    {{ __('translation.Save and Next') }}

                                                </button>
                                            </div>
                                        </div>
                                        <!-- form row 4 end  -->

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>

                    </form>
                </div>
                <!-- container-fluid -->
                <!-------------------------------- table 2 end---------------  -->

            </div>
            <!-- End Page-content -->
        </div>
    </div>
@endsection
@section('modal')
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">
                        {{ __('translation.Parking Facility Certification') }}
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img id="certificate_image" class="w-100 h-auto">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('custom-script')
    <script>
        //DISABLE PREVIOUS DATES
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('input[type=date]').attr('min', today);

        $('#parkingFacilityInformationForm').validate({
            submitHandler: function () {
                ajaxCall($('#parkingFacilityInformationForm'), "{{ route('CreateParkingFacilityAndCertificate') }}", $('.form_button'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
            }
        });

        function setImage(path) {
            $('#certificate_image').attr('src', path);
            $('.bs-example-modal-center').modal('show');
        }

        function RestrictNextDate(element) {
            console.log(element.val());
            element.parent().next().children('input').attr('min', element.val());
        }
    </script>
@endsection

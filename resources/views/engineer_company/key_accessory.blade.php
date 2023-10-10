@extends('engineer_company.includes.layout')
@section('body')
    @php
        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
    @endphp
    <style>
        .collapse_button1 {
            background: rgba(42, 65, 87, 0.24);
            border-radius: 4px;
            padding: 6px 10px;
            right: 60px;
            position: absolute;
            top: 10px;
            border: none;
        }
        .colllap_section_5{
            padding-top: 40px;
        }
        .collapse-icon-section{
            width: 70%;
        }
        .colllap_section_4{
            padding: 60px 5px;
            border-right: none;
        }
        .form_box{
            width: 95%;
        }
        @media print{
            .row .col-lg-6 {
                display: inline-block !important;
                width: 49% !important;
                margin-right: 1% !important;
                float: left !important;
                page-break-inside: avoid;
            }
            .row .part_name_area {
                display: inline-block !important;
                width: 33% !important;
                margin-right: 1% !important;
                float: left !important;
            }
            .row .part_data_area {
                display: inline-block !important;
                width: 65% !important;
                margin-right: 1% !important;
                float: left !important;
            }
            .row::after {
                content: "";
                display: table;
                clear: both;
            }
            .part-add-box{
                display: none;
            }
            .card-info{
                padding-bottom: 200px;
                overflow: visible !important;
                height: auto !important;
            }
            .part-actions{
                display: none !important;
            }
            .colllap_section_5{
                padding-top: 20px !important;
            }
        }
    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->
                <div class="main_content">
                    <!-- start page title -->
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="main_content_section_2">

                                <!-- start page title -->

                                <!-- end page title -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="w-100 prompt"></div>
                                        <div class="card">
                                            <div class="card-body mb-4">
                                                <h4 class="card-title mb-4">

                                                    {{ __('translation.Fill in customer information') }}

                                                </h4>

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
                                                            <td class="custom_br_theme_clr"><a
                                                                    href="javascript: void(0);"
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
                                                                    @if (!empty($building_name))
                                                                        {{ $building_name }}
                                                                    @endif
                                                                </p>
                                                            </td>
                                                            <td class="custom_br_theme_clr_2">
                                                                <p class="tble_text">
                                                                    @if(!empty($building_name))
                                                                        {{$address}}
                                                                    @endif
                                                                </p>
                                                            </td>

                                                            <td class="custom_br_theme_clr_2">
                                                                <p class="tble_text">
                                                                    {{ $customer->company_registration_number }}
                                                                </p>
                                                            </td>
                                                            <td class="custom_br_theme_clr_3">
                                                                <p class="tble_text">
                                                                    {{ $customer->representative }}
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
                                @if(!empty($customer->building_id))
                                <!-- section 2 start  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body card-info">
                                                <!-- end table-responsive -->

                                                <div class="card_section_2">
                                                    <div class="row align-items-baseline">
                                                        <div class="col-lg-11">
                                                            <div>
                                                                <h4 class="card_tittle_2">

                                                                    {{ __('translation.Customer information creation page') }}

                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <h4 class="card_tittle_2" style="text-align: end;">4 / 8
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- form row 1 start  -->
                                                <div id="customer_info_div" class="row mt-3">
                                                    <div class="col-lg-8 col-6">
                                                        <h4 class="card-title mt-2 border-bottom-0 mb-4">
                                                            <span>&nbsp;</span>
                                                            &nbsp;</h4>
                                                    </div>
                                                    <div class="col-lg-4 col-6 no-print">
                                                        <div class="file_main_section d-flex justify-content-end">
                                                            @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                            <form class="w-100 d-flex" id="key_import">
                                                            @endif
                                                                <input name="customer_id" value="{{$customer->id}}"
                                                                       hidden="">
                                                                @csrf
                                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                <div class="mb-3">
                                                                    <div class="dropdown me-2">
                                                                        <button
                                                                            class="btn btn-secondary dropdown-toggle"
                                                                            type="button" id="dropdownMenuButton"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            {{__('translation.Select Buildings')}}
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                             aria-labelledby="dropdownMenuButton">
                                                                            @if($buildings->count() > 0)
                                                                                @foreach($buildings as $building)
                                                                                    <div class="w-100 p-2">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            name="buildings[]"
                                                                                            value="{{$building->id}}">
                                                                                        {{$building->building_information->building_name}}
                                                                                    </div>
                                                                                @endforeach
                                                                            @else
                                                                                <a href="javascript:void(0)" class="dropdown-item w-100">{{ __('translation.No Building Found') }}</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                @endif
                                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                <button type="submit"
                                                                        class="file_button me-2">
                                                                    <img
                                                                        src="{{asset('engineer_company/images/Vector(2).png')}}">
                                                                </button>
                                                                @endif

                                                                <button type="button"
                                                                        onclick="printForm($('#parkingFacilityInformationForm'))"
                                                                        class="file_button">
                                                                    <img
                                                                        src="{{asset('engineer_company/images/Vector.png')}}">
                                                                </button>
                                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                            </form>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row mt-3">
                                                    @if(count($customer->MainAccessory) > 0)
                                                        @foreach($customer->MainAccessory as $main_accessory)

                                                            <div class="col-lg-6 mt-2">

                                                                <div class="colllap_section">

                                                                    <div class="row">

                                                                        <div class="col-lg-4 part_name_area"
                                                                             style="border-right: 1px solid rgba(225, 227, 236, 1);">

                                                                            <div class="colllap_section_4">
                                                                                <div class="d-flex align-items-center justify-content-center flex-column">
                                                                                    @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                    <button
                                                                                        class="btn btn-primary btn-sm mb-2"
                                                                                        onclick="SetPartData('{{$main_accessory->id}}','{{$main_accessory->tag}}','{{$main_accessory->title}}','{{$main_accessory->color}}')"
                                                                                        data-bs-target="#EditPartModal"
                                                                                        data-bs-toggle="modal"><i
                                                                                            class="fa fa-edit"></i></button>
                                                                                            @endif

                                                                                    @if(!empty($main_accessory->tag))
                                                                                        <button
                                                                                            class="collap_yello_section"
                                                                                            style="background: {{!empty($main_accessory->color) ? $main_accessory->color : ''}}">
                                                                                            <p id="part_tag_name">
                                                                                                {{ $main_accessory->tag}}</p>
                                                                                        </button>
                                                                                    @endif
                                                                                </div>
                                                                                <p class="colllap_section_text mt-2">
                                                                                    {{$main_accessory->title}}
                                                                                </p>

                                                                            </div>

                                                                        </div>


                                                                        <div class="col-lg-8 part_data_area">
                                                                            @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                            <div class="d-flex align-items-center justify-content-right part-actions">
                                                                                <button
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#DeletePart"
                                                                                    onclick="DeleteCompletePart('{{$main_accessory->id}}')"
                                                                                    class="collapse_button1">
                                                                                    <i class="fa fa-trash"></i>

                                                                                </button>

                                                                                <button
                                                                                    onclick="AppendList($('#ol{{$loop->index}}'),'{{$main_accessory->id}}')"
                                                                                    class="collapse_button">
                                                                                    <i class="fa-regular fa-plus"></i>

                                                                                </button>
                                                                            </div>
                                                                            @endif

                                                                            <div class="@if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer')) colllap_section_5 @endif">

                                                                                <ol id="ol{{$loop->index}}"
                                                                                    class="collape_list_text"></ol>
                                                                                @if(count($main_accessory->SubParts) > 0)
                                                                                    @foreach($main_accessory->SubParts as $SubParts)

                                                                                        <li onclick="HideShow($('#form_{{$SubParts->id}}'),$(this))"
                                                                                            class="d-flex align-items-start justify-content-between parent-li">
                                                                                            <div
                                                                                                class="collapse-icon-section">
                                                                                                <p class="collape_list_text">
                                                                                                    {{$loop->index+1}} )
                                                                                                    {{$SubParts->title}}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="d-flex align-items-center justify-content-right px-2">
                                                                                                <span class="mb-3"><i class="fa-solid fa-chevron-down"></i></span>
                                                                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                                <span data-bs-toggle="modal"
                                                                                                    data-bs-target="#EditSubPartModal"
                                                                                                    onclick="setSubPartData('{{$SubParts->id}}','{{$SubParts->title}}')"
                                                                                                    class="ms-1 mb-3 edit-part-btn"><i
                                                                                                      class="fa fa-edit"></i></span>
                                                                                               <button data-bs-toggle="modal" data-bs-target="#DeleteSubPartModal" onclick="setsubPartID('{{$SubParts->id}}')" style="background: transparent; border: none;margin-top: -15px;">
                                                                                                   <i class="fa fa-trash"></i>
                                                                                               </button>
                                                                                               @endif
                                                                                            </div>
                                                                                        </li>
                                                                                        <div id="form_{{$SubParts->id}}"
                                                                                             class="d-flex d-none custom_border">
                                                                                            <div class="form_box">
                                                                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                                <form
                                                                                                    id="parts_form_{{$SubParts->id}}">
                                                                                                    @csrf
                                                                                                    @endif

                                                                                                    <div class="form-group mb-3">
                                                                                                        <label>{{ __('translation.Standard') }}</label>
                                                                                                        <input type="text"
                                                                                                           name="standard"
                                                                                                           required
                                                                                                           class="form-control custom_input_tble"

                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->standard))  value="{{$SubParts->standard}}" @endif>
                                                                                                    </div>

                                                                                                    <div class="form-group mb-3">
                                                                                                        <label>{{ __('translation.quantity') }}</label>
                                                                                                        <input type="number"
                                                                                                           name="quantity"
                                                                                                           required
                                                                                                           class="form-control custom_input_tble"

                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->quantity))  value="{{$SubParts->quantity}}" @endif>
                                                                                                    </div>

                                                                                                    <div class="form-group mb-3">
                                                                                                        <label>{{ __('translation.work history') }}</label>
                                                                                                        <textarea
                                                                                                        type="text"
                                                                                                        class="form-control custom_input_tble"
                                                                                                        required
                                                                                                        aria-describedby="emailHelp"
                                                                                                        placeholder=""
                                                                                                        name="work_history"
                                                                                                    >@if(!empty($SubParts->work_history))
                                                                                                            {{$SubParts->work_history}}
                                                                                                        @endif</textarea>
                                                                                                    </div>


                                                                                                    <input
                                                                                                        name="id"
                                                                                                        value="{{$SubParts->id}}"
                                                                                                        hidden>

                                                                                                    <div
                                                                                                        class="d-flex align-items-start gap-1">
                                                                                                        <div>
                                                                                                            @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                onclick="$(this).next().trigger('click')"
                                                                                                                class="collape_button">
                                                                                                                {{ __('translation.Attachments upload') }}
                                                                                                            </button>
                                                                                                            @endif

                                                                                                            <input
                                                                                                                class="sub_part_image"
                                                                                                                type="file"
                                                                                                                name="picture"
                                                                                                                @if(!empty($SubParts->image)) required
                                                                                                                @endif
                                                                                                                hidden>
                                                                                                            <p id="file_name">@if(!empty($SubParts->picture))
                                                                                                                    <a target="_blank"
                                                                                                                       href="{{asset($SubParts->picture)}}">{{explode('/',$SubParts->picture)[3]}}</a>
                                                                                                                @endif
                                                                                                            </p>
                                                                                                        </div>

                                                                                                        @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                                        <div
                                                                                                            style="text-align: end;">
                                                                                                            <button
                                                                                                                onclick="submitFunction($('#parts_form_{{$SubParts->id}}'),$(this))"
                                                                                                                class="collape_button_2 mb-3">
                                                                                                                {{ __('translation.save') }}
                                                                                                            </button>

                                                                                                        </div>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                    @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                                                                </form>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>

                                                                                    @endforeach
                                                                                @endif

                                                                            </div>

                                                                        </div>


                                                                    </div>

                                                                </div>

                                                            </div>

                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- form row 1 end  -->


                                                <!--------------------- collapse section  update start-------------------- -->


                                                <!--------------------- collapse section  update start-------------------- -->

                                                @if(activeGuard() == 'admin')
                                                    <!-- form row  start  -->
                                                    <div style="cursor: pointer" onclick="showPartAddModal()"
                                                         class="row mt-3 part-add-box">
                                                        <div class="col-lg-8">
                                                            <div class="collap_section_lst">
                                                                <p class="collap_section_lst_text">
                                                                    {{ __('translation.+add') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- form row  end  -->
                                                @endif

                                                <!-- form row 4 start  -->
                                                <div class="row justify-content-end no-print">
                                                    <div class="col-lg-2 col-6">
                                                        <a href="{{route('ec.CreateParkingFacility',request()->segment(3))}}">
                                                            <button type="button" class="form_button_2 mb-5 mt-5">
                                                                {{ __('translation.Back page') }}
                                                            </button>
                                                        </a>
                                                    </div>
                                                    @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                    <div class="col-lg-2 col-6">
                                                        <button
                                                            onclick="window.location.href = '{{route("ec.CreatePartsReplacementHistory",$customer->user_uid)}}'"
                                                            class="form_button mb-5 mt-5">

                                                            {{ __('translation.Save and Next') }}

                                                        </button>
                                                    </div>
                                                    @endif
                                                </div>
                                                <!-- form row 4 end  -->


                                            </div>

                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- section 2 end  -->
                                @else
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-danger">
                                            Please enter the building information
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <!---------------------------- tabel 2 start----------------  -->

                            </div>
                            <!-- container-fluid -->
                            <!-------------------------------- table 2 end---------------  -->
                        </div>
                        <!-- End Page-content -->
                    </div>
                    <!-- start page title -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        @endsection
        @section('modal')

            <div id="partAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="add_main_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Part Name') }}
                                                            </label>
                                                            <input id="form_part_name" type="text" name="title"
                                                                   class="form-control part_name"

                                                                   placeholder="{{ __('translation.Enter Part Name') }}"
                                                                   required>

                                                        </div>
                                                        <input name="customer_id" value="{{$customer->id}}" hidden>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Tag Name') }}
                                                            </label>
                                                            <input id="form_tag_name" type="text" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="tag"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                {{ __('translation.Enter Tag Color') }}
                                                            </label>
                                                            <input id="form_tag_name1" type="color" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="color"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.create') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>

                    </div><!-- /.modal-dialog -->
                </div>
            </div>

            <div id="subPartModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <form id="sub_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Sub Part Name') }}
                                                            </label>
                                                            <input type="text" name="title"
                                                                   class="form-control part_name"
                                                                   id="sub_part_name"
                                                                   placeholder="{{ __('translation.Enter sub-part name') }}"
                                                                   required>

                                                            <input name="main_part_id" id="main_part_id" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <input type="text" id="selector_value" hidden>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.create') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>
                    </div><!-- /.modal-dialog -->
                </div>
            </div>

            <div id="EditPartModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="edit_main_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Part Name') }}
                                                            </label>
                                                            <input id="edit_part" type="text" name="title"
                                                                   class="form-control part_name"

                                                                   placeholder="{{ __('translation.Enter Part Name') }}"
                                                                   required>

                                                        </div>
                                                        <input name="id" id="edit_part_id" hidden>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Tag Name') }}
                                                            </label>
                                                            <input id="edit_tag" type="text" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="tag"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                {{ __('translation.Enter Tag Color') }}
                                                            </label>
                                                            <input id="edit_color" type="color" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="color"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.Update') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>

                    </div><!-- /.modal-dialog -->
                </div>
            </div>

            <div id="EditSubPartModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="edit_sub_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Part Name') }}
                                                            </label>
                                                            <input id="edit_sub_part" type="text" name="title"
                                                                   class="form-control part_name"

                                                                   placeholder="{{ __('translation.Enter Part Name') }}"
                                                                   required>

                                                        </div>
                                                        <input name="id" id="edit_sub_part_id" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.Update') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>

                    </div><!-- /.modal-dialog -->
                </div>
            </div>

            <div id="DeletePart" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Delete Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="delete_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <p>{{__('translation.Are you sure you want to delete this part?')}}</p>
                                                        <input name="id" id="delete_part_id" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.delete') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>

                    </div><!-- /.modal-dialog -->
                </div>
            </div>

            <div id="DeleteSubPartModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Delete Part') }}

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="delete_sub_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <p>{{__('translation.Are you sure you want to delete this part?')}}</p>
                                                        <input name="id" id="delete_sub_part_id" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.delete') }}
                                    </button>
                                </div>

                            </div><!-- /.modal-content -->
                        </form>

                    </div><!-- /.modal-dialog -->
                </div>
            </div>

        @endsection
        @section('custom-script')
            <script>
                let div_count = 0;

                function showPartAddModal() {
                    $('#partAddModal').modal('show');
                }

                function AppendList(element, main_part_id) {

                    $('#selector_value').val(element.attr('id'));
                    $('#main_part_id').val(main_part_id);
                    $('#subPartModal').modal('show');
                }

                var li_count = 1;


                //create main accessory part modal
                $('#add_main_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#add_main_part_form'), "{{ route('CreateMainKeyAccessoryInformation') }}", $('#add_main_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });


                //create sub part
                $('#sub_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#sub_part_form'), "{{ route('CreateSubPartTitle') }}", $('#sub_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });

                //import key
                $('#key_import').validate({
                    submitHandler: function () {
                        ajaxCall($('#key_import'), "{{ route('ImportKey') }}", $('#key_import').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });

                //edit main part request
                $('#edit_main_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#edit_main_part_form'), "{{ route('UpdateKeyAccessoryMainPart') }}", $('#edit_main_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });


                $('#edit_sub_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#edit_sub_part_form'), "{{ route('EditSubPartTitle') }}", $('#edit_sub_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });


                $('#delete_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#delete_part_form'), "{{ route('DeletePart') }}", $('#delete_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });

                $('#delete_sub_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#delete_sub_part_form'), "{{ route('delete_sub_part_form') }}", $('#delete_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });

                function submitFunction(element, btn) {

                    element.validate({
                        submitHandler: function () {
                            ajaxCall(element, "{{ route('CreateKeyAccessoryInformation') }}", element.find('button.collape_button_2'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                        }
                    });

                }

                $(document).on("change", ".sub_part_image", function (e) {
                    $(this).next().text($(this).val().replace(/C:\\fakepath\\/i, ''));
                })

                function SetPartData(id, title, description, color) {
                    $('#edit_part_id').val(id);
                    $('#edit_part').val(description);
                    $('#edit_tag').val(title);
                    $('#edit_color').val(color);
                }

                function setSubPartData(id, title) {
                    $('#edit_sub_part_id').val(id);
                    $('#edit_sub_part').val(title);
                }

                function DeleteCompletePart(id) {
                    $('#delete_part_id').val(id);
                }

                function setsubPartID(id){
                    $('#delete_sub_part_id').val(id);
                }

            </script>
@endsection

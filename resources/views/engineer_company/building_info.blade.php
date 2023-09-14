@extends('engineer_company.includes.layout')
@php
    $address = $customer
        ->GetBuildingInfo()
        ->pluck('address')
        ->implode(',');
    $building_name = $customer
        ->GetBuildingInfo()
        ->pluck('building_name')
        ->implode(',');
    $buidling_code_name = $customer
        ->GetBuildingInfo()
        ->pluck('building_number')
        ->implode(',');
@endphp

@section('custom-styles')
    <style>
        @media print{
            .print-row {
                display: block;
                page-break-after: always;
            }
            .print-row .col-lg-6 {
                display: inline-block !important;
                width: 49% !important;
                margin-right: 1% !important;
                float: left !important;
            }
            .print-row::after {
                content: "";
                display: table;
                clear: both;
            }
            .main_content_section button{
                display: none !important;
            }
            .main_content_section .card-body{
                margin-bottom: 0 !important;
            }
            .card_section_2{
                padding: 0 !important;
            }
        }
    </style>
@endsection

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
                                    <div class="prompt w-100"></div>
                                    <h4 class="card-title mb-4">{{ __('translation.customer info') }}
                                    </h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                                <tr>

                                                    <th class="">{{ __('translation.no.') }}</th>
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
                                                            {{ $customer->created_at->format('Y.m.d') }}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{ $customer->customer_number }}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if (!empty($building_name))
                                                                {{ $building_name }}
                                                            @endif
                                                        </p>
                                                        {{-- <p class="tble_text">
                                                            {{ $customer->company_name }}
                                                        </p> --}}
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if (!empty($building_name))
                                                                {{ $address }}
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        {{-- <p class="tble_text">
                                                            @if (!empty($customer->CompanyInformation))
                                                                {{ $customer->CompanyInformation->company_name }}
                                                            @endif
                                                        </p> --}}
                                                        <p class="tble_text">
                                                            {{ $customer->company_registration_number }}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        {{-- <p class="tble_text">
                                                            @if (!empty($customer->RepairCompanyInformation))
                                                                {{ $customer->RepairCompanyInformation->company_name }}
                                                            @endif
                                                        </p> --}}
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

                    <!-- section 2 start  -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <form id="createBuildingInformation">

                                        @if (!empty($customer->BuildingInformation))
                                            <input name="building_id" value="{{ $customer->BuildingInformation->id }}"
                                                hidden="">
                                            <input name="company_id" value="{{ $customer->CompanyInformation->id }}"
                                                hidden="">
                                        @endif
                                        @if (!empty($customer->ASInformation))
                                            <input name="as_id" value="{{ $customer->ASInformation->id }}" hidden>
                                            <input name="repair_id" value="{{ $customer->RepairCompanyInformation->id }}"
                                                hidden>
                                        @endif
                                        <input name="customer_id" value="{{ $customer->id }}" hidden>
                                        @csrf
                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            {{ __('translation.Customer Information') }}
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">1 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row print-row">
                                            <div class="col-lg-6">
                                                <div class="custom_padding_form">
                                                    <div class="row mt-3">
                                                        <div class="col-lg-11">
                                                            <h4 class="card-title border-bottom-0 mb-4 mt-3"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                                1. {{ __('translation.Building Info') }}
                                                            </h4>

                                                        </div>
                                                        <div class="col-lg-1 no-print">
                                                            <div class="file_main_section">
                                                                <button type="button"
                                                                    onclick="printBuildingInfoForm($('.main_content_section'))"
                                                                    class="file_button">
                                                                    <img
                                                                        src="{{ asset('engineer_company/images/Vector.png') }}">
                                                                </button>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Building Code Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                @if (empty($customer->building_id))
                                                                    <select class="SlectBox" onchange="SetAddress($(this))"
                                                                        class="form-select mt-4" name="b_building_name[]"
                                                                        autocomplete="off" required="">
                                                                        <option selected="" value=""
                                                                            disabled="">
                                                                            {{ __('translation.Enter building code Name') }}
                                                                        </option>
                                                                        @foreach ($buildings as $building)
                                                                            <option
                                                                                {{ $customer->building_name == $building->id ? 'selected' : '' }}
                                                                                address="{{ $building->address }}"
                                                                                value="{{ $building->id }}">
                                                                                {{ $building->building_number }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                @else
                                                                    <input type="text"
                                                                        class="form-control w-100 custom_input"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="{{ __('translation.Enter building manager name') }}"
                                                                        value="{{ $buidling_code_name }}" disabled
                                                                        required>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Building Manager Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_building_manager_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter building manager name') }}"
                                                                    @if (!empty($customer->BuildingInformation)) value="{{ $customer->BuildingInformation->building_manager_name }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Building Manager Contact') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_building_manager_contact"
                                                                    class="format-number form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter contact (010-8021-5235)') }}"
                                                                    @if (!empty($customer->BuildingInformation)) value="{{ $customer->BuildingInformation->building_manager_contact }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input id="address"
                                                                    type="text" name="b_address"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    @if (!empty($customer->BuildingInformation)) readonly @endif
                                                                    placeholder="{{ __('translation.Enter address') }}"
                                                                    @if (!empty($customer->BuildingInformation)) value="{{ $customer->BuildingInformation->address }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Contract Manager /contact') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_manager_contact"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter manager contact number') }}"
                                                                    @if (!empty($customer->BuildingInformation)) value="{{ $customer->BuildingInformation->manager_contact }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_bi_tax"
                                                                    class="format-number form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter fax') }}"
                                                                    @if (!empty($customer->BuildingInformation) && !empty($customer->BuildingInformation->fax)) value="{{ $customer->BuildingInformation->fax }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0">
                                                                    {{ __('translation.e-mail') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12"><input type="email"
                                                                    name="b_bi_email"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter email') }}"
                                                                    @if (!empty($customer->BuildingInformation) && !empty($customer->BuildingInformation->email)) value="{{ $customer->BuildingInformation->email }}" @endif>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- form row 1 end  -->
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- form row 1 start  -->
                                                <div class="custom_padding_form">
                                                    <div class="row mt-3">
                                                        <div class="col-lg-11">
                                                            <h4 class="card-title border-bottom-0 mb-4 mt-3"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                                3. {{ __('translation.AS Information') }}
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-1 no-print">
                                                            <div class="file_main_section">
                                                                <button type="button"
                                                                    onclick="printBuildingInfoForm($('.main_content_section'))"
                                                                    class="file_button">
                                                                    <img
                                                                        src="{{ asset('engineer_company/images/Vector.png') }}">
                                                                </button>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 col-12">
                                                                <label class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Company Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="repair_company_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter company name') }}"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->repair_company_name }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12">
                                                                <label class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Company Manager Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="repair_company_manager_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter company manager name') }}"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->repair_company_manager_name }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Term') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12 d-flex align-items-center gap-1">
                                                                @php
                                                                    if (!empty($customer->ASInformation) && !empty($customer->ASInformation->contract_date)) {
                                                                        $contract_date = explode('to', $customer->ASInformation->contract_date);
                                                                        $contract_date_from = $contract_date[0];
                                                                        $contract_date_to = $contract_date[1];
                                                                    }
                                                                @endphp
                                                                <input type="date" name="contract_date_from"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Jewon Lee') }}"
                                                                    @if (isset($contract_date_from)) value="{{ $contract_date_from }}" @endif>
                                                                <span class="small">-</span>
                                                                <input type="date" name="contract_date_to"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Jewon Lee') }}"
                                                                    @if (isset($contract_date_to)) value="{{ $contract_date_to }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.fee') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    min="1" name="fee"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp" placeholder="₩ 100"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->fee }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Tax invoice issue date') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="invoice_issue_date"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->invoice_issue_date }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Payment Date') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="payment_date"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_date }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Payment method') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="payment_method"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Payment method') }}"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_method }}" @endif>

                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.payment account') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="payment_information"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your payment account information') }}"
                                                                    @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_information }}" @endif>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- form row 1 end  -->
                                            </div>
                                        </div>
                                        <div class="row print-row">
                                            <div class="col-lg-6">
                                                <!-- form row 2 start  -->
                                                <div class="custom_padding_form">
                                                    <div class="row mt-5">
                                                        <div class="col-lg-12">
                                                            <h4 class="card-title border-bottom-0 mb-4"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                                2.
                                                                {{ __('translation.Building management company information') }}
                                                            </h4>
                                                        </div>

                                                        @if (activeGuard() == 'admin')
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-lg-4 col-12">
                                                                    <label class="form-label custom_lab mb-0"> <span
                                                                            class="star_section">*</span>
                                                                        {{ __('translation.Building Management Company') }}
                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    {{-- @if (empty($customer->engineer_company_id) || empty($customer->EngineerCompany)) --}}
                                                                    <select class="form-select"
                                                                        onchange="GetData($(this).val())"
                                                                        name="engineer_company_id" autocomplete="off"
                                                                        required="">
                                                                        <option selected="" value=""
                                                                            disabled="">
                                                                            {{ __('translation.Building Management Company') }}
                                                                        </option>
                                                                        @foreach ($company as $building)
                                                                            <option
                                                                                {{ $customer->engineer_company_id == $building->id ? 'selected' : '' }}
                                                                                value="{{ $building->id }}">
                                                                                {{ $building->company_registration_number }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{-- @else
                                                                        <input type="text"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Enter company name') }}"
                                                                            required disabled
                                                                            value="{{ $customer->EngineerCompany->company_name }}">
                                                                    @endif --}}
                                                                </div>
                                                            </div>
                                                        @else
                                                            <input name="engineer_company_id"
                                                                value="{{ auth(activeGuard())->id() }}" hidden="">
                                                        @endif


                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Company') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_company_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your company name') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->company_name }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Ceo Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_ceo_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter ceo name') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->ceo_name }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Company Registration Number') }}
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_company_reg_number"
                                                                    class="form-control w-100 custom_input_2"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter registration number') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->company_reg_number }}" @endif>
                                                            </div>


                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_ci_address"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter address') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->address }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.business') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_industry_category"
                                                                    class="form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your business type') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->industry_category }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Sector') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_ci_sectors"
                                                                    class="format-number form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your industry') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->b_ci_sectors)) value="{{ $customer->CompanyInformation->b_ci_sectors }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.contact 1, 2') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_ci_contacts"
                                                                    class="form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your contact information') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation)) value="{{ $customer->CompanyInformation->contacts }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="b_ci_fax"
                                                                    class="format-number form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.02-4347-4893') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->fax)) value="{{ $customer->CompanyInformation->fax }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Email') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    id="c_email" name="c_email"
                                                                    class="format-number form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp" required
                                                                    @if (!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->email)) value="{{ $customer->CompanyInformation->email }}" @endif
                                                                    placeholder="이메일주소를 입력해주세요" />
                                                            </div>
                                                        </div>


                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- form row 2 start  -->
                                                <div class="custom_padding_form ">
                                                    <div class="row mt-5">
                                                        <div class="col-lg-12">
                                                            <h4 class="card-title border-bottom-0 mb-4"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                                4. {{ __('translation.Repair Company Information') }}
                                                            </h4>
                                                        </div>

                                                        @if (activeGuard() == 'admin')
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-lg-4 col-12">
                                                                    <label class="form-label custom_lab mb-0"> <span
                                                                            class="star_section">*</span>
                                                                        {{ __('translation.Engineer Company1') }}
                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    {{-- @if (empty($customer->engineer_company_id) || empty($customer->EngineerCompany)) --}}
                                                                    <select class="form-select"
                                                                        onchange="GetDataRepairCompany($(this).val())"
                                                                        autocomplete="off" required=""
                                                                        name="repair_company_id">
                                                                        <option selected="" value=""
                                                                            disabled="">
                                                                            {{ __('translation.Engineer Companies') }}
                                                                        </option>
                                                                        @foreach ($company as $building)
                                                                            <option
                                                                                {{ $customer->repair_company_id == $building->id ? 'selected' : '' }}
                                                                                value="{{ $building->id }}">
                                                                                {{ $building->company_registration_number }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{-- @else
                                                                        <input type="text"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Enter company name') }}"
                                                                            required disabled
                                                                            value="{{ $customer->EngineerCompany->company_name }}">
                                                                    @endif --}}
                                                                </div>
                                                            </div>
                                                        @else
                                                            <input name="engineer_company_id"
                                                                value="{{ auth(activeGuard())->id() }}" hidden="">
                                                        @endif


                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Company Name') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="company_name"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter company name') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->company_name }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Ceo Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="ceo_name"
                                                                    class="form-control col-lg-3 custom_input_2  w-100"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter ceo name') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->ceo_name }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="address" class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter address') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->address }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.industry') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="industry_category"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter industry category') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->industry_category }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Sector') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    id="new-sectors"
                                                                    class="format-number form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Please enter your industry') }}"
                                                                    required
                                                                    @if (!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->b_ci_sectors)) value="{{ $customer->CompanyInformation->b_ci_sectors }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.contact 1, 2') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="contacts"
                                                                    class="form-control w-100 custom_input"
                                                                    placeholder="{{ __('translation.Please enter your contact information') }}"
                                                                    aria-describedby="emailHelp" required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->contacts }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="fax"
                                                                    class="format-number form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.02-4347-4893') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->fax }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.e-mail') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="email"
                                                                    name="email" class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter email') }}"
                                                                    required
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->email }}" @endif>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Maintenance company registration number') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                    name="mc_reg" class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp" required
                                                                    placeholder="{{ __('translation.Please enter your maintenance company registration number') }}"
                                                                    @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->mc_reg }}" @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- form row 2 end  -->
                                            </div>
                                        </div>

                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button class="form_button mb-5 mt-5">
                                                    {{ __('translation.Save and Next') }}
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                    <!-- form row 4 end  -->

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
    <script>
        $('#createBuildingInformation').validate({
            submitHandler: function() {

                ajaxCall($('#createBuildingInformation'),
                    "{{ route('CreateBuildingAndCompanyInformation') }}", $('.form_button'),
                    "{{ route('ec.CreateParkingFacility', request()->segment(3)) }}", onRequestSuccess);

            }
        });

        function GetData(id) {
            $.ajax({

                type: "POST",
                url: '{{ route('GetEngineerCompanyData') }}',
                dataType: 'json',
                data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                },
                beforeSend: function() {

                },
                success: function(res) {


                    // window.location.reload();
                    if (res.Error == true) {


                    } else if (res.Error == false) {


                        $("input[name=b_company_name]").val(res.Data.company_name);
                        $("input[name=b_ceo_name]").val(res.Data.representative);
                        $("input[name=b_company_reg_number]").val(res.Data.company_registration_number);
                        $("input[name=b_ci_address]").val(res.Data.address);
                        $("input[name=b_industry_category]").val(res.Data.business_email);
                        $("input[name=b_ci_contacts]").val(res.Data.contact);
                        $("input[name=b_ci_sectors]").val(res.Data.sectors);
                        $("#c_email").val(res.Data.email);
                        $("input[name=b_ci_fax]").val(res.Data.fax);


                    }
                },
                error: function(e) {

                }

            });
        }


        function GetDataRepairCompany(id) {
            $.ajax({

                type: "POST",
                url: '{{ route('GetEngineerCompanyData') }}',
                dataType: 'json',
                data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                },
                beforeSend: function() {

                },
                success: function(res) {


                    // window.location.reload();
                    if (res.Error == true) {


                    } else if (res.Error == false) {


                        $("input[name=company_name]").val(res.Data.company_name);
                        $("input[name=ceo_name]").val(res.Data.representative);
                        $("input[name=mc_reg]").val(res.Data.maintenance_business_registration_number);
                        $("input[name=address]").val(res.Data.address);
                        $("input[name=industry_category]").val(res.Data.business_email);
                        $("input[name=contacts]").val(res.Data.contact);
                        $("input[name=fax]").val(res.Data.fax);
                        $("input[name=email]").val(res.Data.email);
                        $("#new-sectors").val(res.Data.sectors);


                    }
                },
                error: function(e) {

                }

            });
        }

        function SetAddress(element) {
            $('#address').val(element.find(':selected').attr('address'))
        }

        $(document).ready(function() {
            $('.double-contact').on('input', function() {
                // Get the input value
                var inputValue = $(this).val();

                // Remove all non-numeric characters
                var numericInput = inputValue.replace(/\D/g, '');

                // Format the numeric input value with hyphens and slashes
                var formattedInput = '';
                if (numericInput.length > 3) {
                    formattedInput += numericInput.slice(0, 3) + '-';
                    if (numericInput.length > 6) {
                        formattedInput += numericInput.slice(3, 6) + '-';
                        if (numericInput.length > 9) {
                            formattedInput += numericInput.slice(6, 10) + ' / ';
                            if (numericInput.length > 13) {
                                formattedInput += numericInput.slice(10, 13) + '-';
                                if (numericInput.length > 16) {
                                    formattedInput += numericInput.slice(13, 16) + '-';
                                    formattedInput += numericInput.slice(16, 20);
                                } else {
                                    formattedInput += numericInput.slice(13, 20);
                                }
                            } else {
                                formattedInput += numericInput.slice(10, 20);
                            }
                        } else {
                            formattedInput += numericInput.slice(6, 10) + ' / ';
                            formattedInput += numericInput.slice(10, 20);
                        }
                    } else {
                        formattedInput += numericInput.slice(3, 10);
                    }
                } else {
                    formattedInput += numericInput.slice(0, 3);
                }

                // Set the input value to the formatted input
                $(this).val(formattedInput);
            });
        });

        $('input[name="contract_date"]').daterangepicker();

        $('.SlectBox').SumoSelect();

        function printBuildingInfoForm(form){
            form.find('.page-break').css('page-break-before', 'always');
            form.print({
                globalStyles: true,
                mediaPrint: false,
                stylesheet: null,
                noPrintSelector: ".no-print",
                iframe: true,
                append: null,
                prepend: null,
                manuallyCopyFormValues: true,
                deferred: $.Deferred(),
                timeout: 750,
                title: null,
                doctype: '<!doctype html>'
            });
        }
    </script>
@endsection

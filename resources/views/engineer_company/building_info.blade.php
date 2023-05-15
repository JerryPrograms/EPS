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

                                    <form id="createBuildingInformation">

                                        @if(!empty($customer->BuildingInformation))
                                            <input name="building_id" value="{{$customer->BuildingInformation->id}}"
                                                   hidden="">
                                            <input name="company_id" value="{{$customer->CompanyInformation->id}}"
                                                   hidden="">
                                        @endif
                                        @if (!empty($customer->ASInformation))
                                            <input name="as_id" value="{{ $customer->ASInformation->id }}" hidden>
                                            <input name="repair_id"
                                                   value="{{ $customer->RepairCompanyInformation->id }}" hidden>
                                        @endif
                                        <input name="customer_id" value="{{$customer->id}}" hidden>
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
                                        <div class="row">
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
                                                                        onclick="printForm($('#createBuildingInformation'))"
                                                                        class="file_button">
                                                                    <img
                                                                        src="{{asset('engineer_company/images/Vector.png')}}">
                                                                </button>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-12">
                                                                <label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Building Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                @if(empty($customer->building_id))
                                                                    <select onchange="SetAddress($(this))"
                                                                            class="form-select mt-4"
                                                                            name="b_building_name"
                                                                            autocomplete="off" required="">
                                                                        <option selected="" value="" disabled="">
                                                                            {{ __('translation.Enter building Name') }}
                                                                        </option>
                                                                        @foreach($buildings as $building)
                                                                            <option
                                                                                {{$customer->building_name == $building->id ? 'selected' : ''}} address="{{$building->address}}"
                                                                                value="{{$building->id}}">
                                                                                {{$building->building_name}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                @else
                                                                    <input type="text"
                                                                           class="form-control w-100 custom_input"
                                                                           aria-describedby="emailHelp"
                                                                           placeholder="{{ __('translation.Enter building manager name') }}"
                                                                           value="{{$customer->GetBuildingInfo->building_name}}"
                                                                           disabled
                                                                           required>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Building Manager Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_building_manager_name"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter building manager name') }}"
                                                                       @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->building_manager_name}}"
                                                                       @endif required>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Building Manager Contact') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" maxlength="12"
                                                                       onkeypress="return ( (event.charCode >= 48 && event.charCode < 58))"
                                                                       name="b_building_manager_contact"
                                                                       class="format-number form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter contact (010-8021-5235)') }}"
                                                                       @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->building_manager_contact}}"
                                                                       @endif required>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input id="address"
                                                                                                type="text"
                                                                                                name="b_address"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                @if(!empty($customer->BuildingInformation)) readonly
                                                                                                @endif
                                                                                                placeholder="{{ __('translation.Enter address') }}"
                                                                                                @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->address}}"
                                                                                                @endif
                                                                                                required></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Contract Manager /contact') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="b_manager_contact"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter manager contact number') }}"
                                                                                                @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->manager_contact}}"
                                                                                                @endif
                                                                                                required></div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class=" star_section">*</span>
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                required
                                                                                                name="b_bi_tax"
                                                                                                onkeypress="return ( (event.charCode >= 48 && event.charCode < 58))"
                                                                                                maxlength="12"
                                                                                                class="format-number form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter fax') }}"
                                                                                                @if(!empty($customer->BuildingInformation) && !empty($customer->BuildingInformation->fax))  value="{{$customer->BuildingInformation->fax}}"
                                                                    @endif></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.e-mail') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="email"
                                                                                                required
                                                                                                name="b_bi_email"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter email') }}"
                                                                                                @if(!empty($customer->BuildingInformation) && !empty($customer->BuildingInformation->email))  value="{{$customer->BuildingInformation->email}}"
                                                                    @endif
                                                                ></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- form row 1 end  -->
                                                <!-- form row 2 start  -->
                                                <div class="custom_padding_form pt-3">
                                                    <div class="row mt-5">
                                                        <div class="col-lg-12">
                                                            <h4 class="card-title border-bottom-0 mb-4"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                                2. {{ __('translation.Building management company information') }}
                                                            </h4>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Company Name') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="b_company_name"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter company name') }}"
                                                                                                required
                                                                                                @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->company_name}}"
                                                                    @endif
                                                                ></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Ceo Name') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_ceo_name"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter ceo name') }}"
                                                                       required
                                                                       @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->ceo_name}}"
                                                                    @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Company Registration Number') }}
                                                                </label></div>

                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_company_reg_number"
                                                                       class="form-control w-100 custom_input_2"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter registration number') }}"
                                                                       required
                                                                       @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->company_reg_number}}"
                                                                    @endif>
                                                            </div>


                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="b_ci_address"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter address') }}"
                                                                       required
                                                                       @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->address}}"
                                                                    @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.industry') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="b_industry_category"
                                                                                                class="form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Industry Category') }}"
                                                                                                required
                                                                                                @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->industry_category}}"
                                                                    @endif></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.contact 1, 2') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="b_ci_contacts"
                                                                                                class="form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.contact 1/contact 2') }}"
                                                                                                @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->contacts}}"
                                                                                                @endif
                                                                                                required
                                                                ></div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                required
                                                                                                name="b_ci_fax"
                                                                                                maxlength="12"
                                                                                                class="format-number form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{__('translation.02-4347-4893')}}"
                                                                                                @if(!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->fax))  value="{{$customer->CompanyInformation->fax}}"
                                                                    @endif></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.e-mail') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="email"
                                                                                                required
                                                                                                name="b_ci_email"
                                                                                                class="form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter email') }}"
                                                                                                @if(!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->email)) value="{{$customer->CompanyInformation->email}}"
                                                                    @endif></div>
                                                        </div>
                                                    </div>


                                                </div>
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
                                                                        onclick="printForm($('#createASAndRepairCompanyInformationForm'))"
                                                                        class="file_button">
                                                                    <img
                                                                        src="{{ asset('engineer_company/images/Vector.png') }}">
                                                                </button>
                                                            </div>
                                                        </div>

                                                        @if(activeGuard() == 'admin')
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-4 col-12">
                                                                    <label
                                                                        class="form-label custom_lab mb-0"> <span
                                                                            class="star_section">*</span>
                                                                        {{__('translation.Engineer Company1')}}
                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    @if(empty($customer->engineer_company_id))
                                                                        <select class="form-select mt-4"
                                                                                name="engineer_company_id"
                                                                                autocomplete="off" required="">
                                                                            <option selected="" value="" disabled="">
                                                                                {{__('translation.Engineer Companies')}}
                                                                            </option>
                                                                            @foreach($company as $building)
                                                                                <option
                                                                                    {{$customer->engineer_company_id == $building->id ? 'selected' : ''}}
                                                                                    value="{{$building->id}}">
                                                                                    {{$building->company_name}}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    @else
                                                                        <input type="text"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{ __('translation.Enter company name') }}"
                                                                               required
                                                                               disabled
                                                                               value="{{$customer->EngineerCompany->company_name}}">

                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @else
                                                            <input name="engineer_company_id"
                                                                   value="{{auth(activeGuard())->id()}}" hidden="">
                                                        @endif

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12">
                                                                <label class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.maintenance manager') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="repair_company_name"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Enter company name') }}"
                                                                       required
                                                                       @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->repair_company_name }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    <span
                                                                        class="star_section">*</span>{{ __('translation.Contract Date') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="date"
                                                                                                name="contract_date"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Jewon Lee') }}"
                                                                                                required
                                                                                                @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->contract_date }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    <span class="star_section">*</span>
                                                                    {{ __('translation.fee') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="number" min="1"
                                                                                                name="fee"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="₩ 100"
                                                                                                required
                                                                                                @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->fee }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    <span class="star_section">*</span>
                                                                    {{ __('translation.Tax invoice issue date') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="date"
                                                                                                name="invoice_issue_date"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                required
                                                                                                @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->invoice_issue_date }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    <span class="star_section">*</span>
                                                                    {{ __('translation.Payment Date') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-md-8 col-12"><input type="date"
                                                                                                name="payment_date"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                required
                                                                                                @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_date }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Payment method') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="payment_method"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Payment method') }}"
                                                                       required
                                                                       @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_method }}" @endif>

                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.payment account') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="payment_information"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{ __('translation.Please enter your payment account information') }}"
                                                                       required
                                                                       @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->payment_information }}" @endif>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- form row 1 end  -->

                                                <!-- form row 2 start  -->
                                                <div class="custom_padding_form pt-3">
                                                    <div class="row mt-5">
                                                        <div class="col-lg-12">
                                                            <h4 class="card-title border-bottom-0 mb-4"> <span
                                                                    class="bor_lef">&nbsp;</span>
                                                               4. {{ __('translation.Repair Company Information') }}
                                                            </h4>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
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
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
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
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.address') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                                                name="address"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter address') }}"
                                                                                                required
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->address }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
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
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.contact 1, 2') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                                                name="contacts"
                                                                                                class="form-control w-100 custom_input"
                                                                                                placeholder="{{ __('translation.contact 1/contact 2') }}"
                                                                                                aria-describedby="emailHelp"
                                                                                                required
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->contacts }}" @endif>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                                                required
                                                                                                maxlength="12"
                                                                                                onkeypress="return ( (event.charCode >= 48 && event.charCode < 58))"
                                                                                                name="fax"
                                                                                                class="format-number form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{__('translation.02-4347-4893')}}"
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->fax }}" @endif>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.e-mail') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="email"
                                                                                                required
                                                                                                name="email"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Enter email') }}"
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->email }}" @endif>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Maintenance company registration number') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                                                required
                                                                                                name="mc_reg"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Please enter your maintenance company registration number') }}"
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->mc_reg }}" @endif>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-md-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Sectors') }}
                                                                </label></div>
                                                            <div class="col-md-8 col-12"><input type="text"
                                                                                                required
                                                                                                name="indus"
                                                                                                class="form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{ __('translation.Please enter your industry') }}"
                                                                                                @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->indus }}" @endif>
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
            submitHandler: function () {

                ajaxCall($('#createBuildingInformation'), "{{ route('CreateBuildingAndCompanyInformation') }}", $('.form_button'), "{{ route('ec.CreateParkingFacility', request()->segment(3)) }}", onRequestSuccess);

            }
        });

        function SetAddress(element) {
            $('#address').val(element.find(':selected').attr('address'))
        }

        $('.format-number').keyup(function () {
            var foo = $(this).val().split("-").join(""); // remove hyphens

            foo = foo.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");

            $(this).val(foo);

        });


        $(document).ready(function () {
            $('.double-contact').on('input', function () {
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

    </script>
@endsection

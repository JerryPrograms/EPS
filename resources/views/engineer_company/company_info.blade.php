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
                                                            {{ $customer->building_name }}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{ $customer->address }}
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{ $customer->building_management_company }}

                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        <p class="tble_text">
                                                            {{ $customer->maintenance_company }}
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
                            <form id="createASAndRepairCompanyInformationForm">
                                <input name="customer_id" value="{{ $customer->id }}" hidden>
                                @if (!empty($customer->ASInformation))
                                    <input name="as_id" value="{{ $customer->ASInformation->id }}" hidden>
                                    <input name="repair_id" value="{{ $customer->RepairCompanyInformation->id }}" hidden>
                                @endif
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <!-- end table-responsive -->

                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                        {{ __('translation.Customer information creation page') }}
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">2 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="custom_padding_form">
                                            <div class="row mt-3">
                                                <div class="col-lg-11">
                                                    <h4 class="card-title border-bottom-0 mb-4 mt-3"> <span
                                                            class="bor_lef">&nbsp;</span>
                                                        {{ __('translation.AS Information') }}
                                                    </h4>
                                                </div>
                                                <div class="col-lg-1 no-print">
                                                    <div class="file_main_section">
                                                        <button type="button"
                                                            onclick="printForm($('#createASAndRepairCompanyInformationForm'))"
                                                            class="file_button">
                                                            <img src="{{ asset('engineer_company/images/Vector.png') }}">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-4 col-12">
                                                        <label class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                                {{ __('translation.Repair Company Name') }}
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
                                                    <div class="col-md-4 col-12"><label class="form-label custom_lab mb-0">
                                                            <span class="star_section">*</span>{{ __('translation.Contract Date') }}</label></div>
                                                    <div class="col-md-8 col-12"><input type="date" name="contract_date"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="{{ __('translation.Jewon Lee') }}"
                                                            required
                                                            @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->contract_date }}" @endif>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-md-4 col-12"><label class="form-label custom_lab mb-0">
                                                            <span class="star_section">*</span>
                                                            {{ __('translation.fee') }}
                                                        </label></div>
                                                    <div class="col-md-8 col-12"><input type="number" min="1"
                                                            name="fee" class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp" placeholder="₩ 100" required
                                                            @if (!empty($customer->ASInformation)) value="{{ $customer->ASInformation->fee }}" @endif>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-md-4 col-12"><label class="form-label custom_lab mb-0">
                                                            <span class="star_section">*</span>
                                                            {{ __('translation.Tax invoice issue date') }}
                                                        </label></div>
                                                    <div class="col-md-8 col-12"><input type="date"
                                                            name="invoice_issue_date"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp" required
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
                                                            name="payment_date" class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp" required
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

                                            </div>
                                        </div>
                                        <!-- form row 1 end  -->

                                        <!-- form row 2 start  -->
                                        <div class="custom_padding_form">
                                            <div class="row mt-5">
                                                <div class="col-lg-12">
                                                    <h4 class="card-title border-bottom-0 mb-4"> <span
                                                            class="bor_lef">&nbsp;</span>
                                                            {{ __('translation.Repair Company Information') }}
                                                    </h4>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-md-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                                {{ __('translation.Company Name') }}
                                                        </label></div>
                                                    <div class="col-md-8 col-12"><input type="text"
                                                            name="company_name" class="form-control w-100 custom_input"
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
                        aria-describedby="emailHelp" placeholder="{{ __('translation.Enter ceo name') }}"
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
                                                    <div class="col-md-8 col-12"><input type="text" name="address"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp" placeholder="{{ __('translation.Enter address') }}"
                                                            required
                                                            @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->address }}" @endif>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-md-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                                {{ __('translation.Industry Category') }}
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
                                                    <div class="col-md-8 col-12"><input type="text" name="contacts"
                                                            class="form-control w-100 custom_input"
                                                                                        placeholder="{{ __('translation.contact 1/contact 2') }}"
                                                            aria-describedby="emailHelp" required
                                                            @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->contacts }}" @endif>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-md-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">&nbsp;</span>
                                                                {{ __('translation.fax') }}
                                                            </label></div>
                                                    <div class="col-md-8 col-12"><input type="text" maxlength="11"  name="fax"
                                                            class="format-number form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                                                        placeholder="{{__('translation.02-4347-4893')}}"
                                                            @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->fax }}" @endif>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-md-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">&nbsp;</span>
                                                                {{ __('translation.e-mail') }}
                                                            </label></div>
                                                    <div class="col-md-8 col-12"><input type="email" name="email"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                                                        placeholder="{{ __('translation.Enter email') }}"
                                                            @if (!empty($customer->RepairCompanyInformation)) value="{{ $customer->RepairCompanyInformation->email }}" @endif>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2 col-6">
                                                <a href="{{ route('ec.CreateBuildingInfo', request()->segment(3)) }}">
                                                    <button type="button" class="form_button_2 mb-5 mt-5">
                                                        {{ __('translation.Back page') }}
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5">
                                                    {{ __('translation.Save and Next') }}
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
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
@section('custom-script')
    <script>

        // //DISABLE PREVIOUS DATES
        // var today = new Date();
        // var dd = String(today.getDate()).padStart(2, '0');
        // var mm = String(today.getMonth() + 1).padStart(2, '0');
        // var yyyy = today.getFullYear();
        //
        // today = yyyy + '-' + mm + '-' + dd;
        // $('input[type=date]').attr('min', today);

        $('#createASAndRepairCompanyInformationForm').validate({
            submitHandler: function() {
                ajaxCall($('#createASAndRepairCompanyInformationForm'),
                    "{{ route('CreateASAndRepairCompanyInformation') }}", $('.form_button'),
                    "{{ route('ec.CreateParkingFacility', request()->segment(3)) }}", onRequestSuccess);
            }
        });

        // $('.format-number').keyup(function () {
        //     var foo = $(this).val().split("-").join(""); // remove hyphens
        //
        //     foo = foo.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");
        //
        //     $(this).val(foo);
        //
        // });

    </script>
@endsection

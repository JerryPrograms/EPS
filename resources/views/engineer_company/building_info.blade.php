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
                                        <div class="custom_padding_form">
                                            <div class="row mt-3">
                                                <div class="col-lg-11">
                                                    <h4 class="card-title border-bottom-0 mb-4 mt-3"> <span
                                                            class="bor_lef">&nbsp;</span>
                                                        {{ __('translation.Building Info') }}
                                                    </h4>

                                                </div>
                                                <div class="col-lg-1 no-print">
                                                    <div class="file_main_section">
                                                        <button type="button"
                                                                onclick="printForm($('#createBuildingInformation'))"
                                                                class="file_button">
                                                            <img src="{{asset('engineer_company/images/Vector.png')}}">
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
                                                        <select onchange="SetAddress($(this))" class="form-select mt-4"
                                                                name="building_name"
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
                                                        <input type="text" name="building_manager_name"
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
                                                               name="building_manager_contact"
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
                                                                                        type="text" name="address"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
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
                                                                                        name="manager_contact"
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
                                                                class=" star_section">&nbsp;</span>
                                                            {{ __('translation.fax') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="bi_tax"
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
                                                                class="star_section">&nbsp;</span>
                                                            {{ __('translation.e-mail') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="email" name="bi_email"
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
                                        <div class="custom_padding_form">
                                            <div class="row mt-5">
                                                <div class="col-lg-12">
                                                    <h4 class="card-title border-bottom-0 mb-4"> <span
                                                            class="bor_lef">&nbsp;</span>
                                                        {{ __('translation.Building management company information') }}
                                                    </h4>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            {{ __('translation.Company Name') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="company_name"
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
                                                        <input type="text" name="ceo_name"
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
                                                        <input type="text" name="company_reg_number"
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
                                                        <input type="text" name="ci_address"
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
                                                            {{ __('translation.Industry Category') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text"
                                                                                        name="industry_category"
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
                                                    <div class="col-lg-8 col-12"><input type="text" name="ci_contacts"
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
                                                                class="star_section">&nbsp;</span>
                                                            {{ __('translation.fax') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="ci_fax"
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
                                                                class="star_section">&nbsp;</span>
                                                            {{ __('translation.e-mail') }}
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="email" name="ci_email"
                                                                                        class="form-control w-100   custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="{{ __('translation.Enter email') }}"
                                                                                        @if(!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->email)) value="{{$customer->CompanyInformation->email}}"
                                                            @endif></div>
                                                </div>
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

                ajaxCall($('#createBuildingInformation'), "{{ route('CreateBuildingAndCompanyInformation') }}", $('.form_button'), "{{ route('ec.CreateCompanyInfo',request()->segment(3)) }}", onRequestSuccess);

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

    </script>
@endsection

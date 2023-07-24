@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->
                <div class="main_content_section">
                    @if (isset($client))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body mb-4">
                                        <div class="prompt w-100"></div>
                                        <h4 class="card-title mb-4">
                                            {{ __('translation.Account information') }}
                                        </h4>
                                        <div class="table-responsive mt-3">
                                            <table class="table" style="border-collapse: collapse;">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th class="">
                                                            {{ __('translation.no') }}
                                                        </th>
                                                        <th class="text-center">
                                                            {{ __('translation.Registration Date') }}
                                                        </th>
                                                        <th class="text-center">
                                                            {{ __('translation.Customer No') }}
                                                        </th>
                                                        <th class="text-center">
                                                            {{ __('translation.Company Name') }}
                                                        </th>
                                                        <th class="text-center">
                                                            {{ __('translation.Address') }}
                                                        </th>

                                                        <th class="text-center">
                                                            {{ __('translation.Division') }}
                                                        </th>
                                                        <th class="text-center">{{ __('translation.Actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class=" mt-5  selected-row-blue">
                                                        <td class=""><a href="javascript: void(0);"
                                                                class="text-body  ">1</a>
                                                        </td>
                                                        <td class="">
                                                            <p class="">
                                                                2023.05.02
                                                            </p>
                                                        </td>
                                                        <td class="">
                                                            <p class="">
                                                                nsnop998lM
                                                            </p>
                                                        </td>
                                                        <td class="">
                                                            <p class="">
                                                                9
                                                            </p>
                                                        </td>
                                                        <td class="">
                                                            <p class="">
                                                                asdasd
                                                            </p>
                                                        </td>

                                                        <td class="">
                                                            <p class="">
                                                                asdasdassdasdasasd
                                                            </p>
                                                        </td>
                                                        <td class=" d-flex gap-1">
                                                            <a href="http://127.0.0.1:8000/eps-panel/view-completion-reports/4"
                                                                class="btn back-green btn-outline btn-sm">
                                                                <img
                                                                    src="{{ asset('engineer_company/images/edit_icon.png') }}">
                                                            </a>
                                                            <a href="{{ route('add_client') }}"
                                                                class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                <img
                                                                    src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                                                            </a>
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
                    @endif
                    <!-- container-fluid -->

                    <!-- section 2 start  -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="prompt w-100"></div>
                            <div class="card">

                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <form id="CreateClientForm">
                                        @csrf
                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            {{ __('translation.Registration of business partners') }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="custom_padding_form">
                                                    <div class="row mt-3">
                                                        <div class="col-lg-11">
                                                            <h4 class="card-title border-bottom-0 mb-4 mt-3"><span
                                                                    class="bor_lef">&nbsp;</span>
                                                                {{ __('translation.Company Information') }}
                                                            </h4>

                                                        </div>
                                                        <div class="col-lg-1 no-print">
                                                            <div class="file_main_section">
                                                                <button type="button"
                                                                    onclick="printForm($('#createBuildingInformation'))"
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
                                                                    {{ __('translation.Customer Number') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" min="1" name="customer_number"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    value="{{ $client_number }}" readonly
                                                                    placeholder="{{ __('translation.Enter customer number') }}"
                                                                    required="">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Master ID') }}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="master_id"
                                                                    class="form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter Master ID') }}"
                                                                    required="">
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Master PW') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="password" name="password"
                                                                    class="format-number form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter Password') }}"
                                                                    required="">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Company Name') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="text" name="company_name"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Enter Company Name') }}"
                                                                            required="">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label class="form-label custom_lab mb-0"> <span
                                                                                class="star_section">*</span>
                                                                            {{ __('translation.Company Registration Number') }}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" id="ssn"
                                                                            name="company_registration_number"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="111-22-33333" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Representative') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="text" name="representative"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Enter Representative') }}">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label class="form-label custom_lab mb-0">
                                                                            {{ __('translation.Maintenance business registration number') }}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text"
                                                                            name="maintenance_business_registration_number"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Maintenance business registration number') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Address') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="address"
                                                                    class="format-number form-control w-100 custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter Address') }}">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Business Email') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="text" name="business_email"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Enter Business Email') }}">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label class="form-label custom_lab mb-0 mt-2">
                                                                            {{ __('translation.Sectors') }}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text" name="sectors"
                                                                            class="form-control w-100 custom_input"
                                                                            aria-describedby="emailHelp"
                                                                            placeholder="{{ __('translation.Please enter your industry') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.Contact') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="contact"
                                                                    class="form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter Contact') }}">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0">
                                                                    {{ __('translation.fax') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                    name="fax"
                                                                    class="format-number form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.02-4347-4893') }}">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{ __('translation.Email') }}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="email"
                                                                    name="email" required
                                                                    class="form-control w-100   custom_input"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="{{ __('translation.Enter email') }}">
                                                            </div>
                                                        </div>

                                                        @if (activeGuard() == 'admin')
                                                            <div id="type_divivsion" class="row align-items-center mt-4">
                                                                <div class="col-lg-4 col-12"><label
                                                                        class="form-label custom_lab mb-0"> <span
                                                                            class="star_section">*</span>
                                                                        {{ __('translation.Division') }}
                                                                    </label></div>

                                                                <div class="col-lg-8 col-12">
                                                                    <select class="form-select mt-4 valid" name="division"
                                                                        autocomplete="off" required="">
                                                                        <option selected="" value=""
                                                                            disabled="">
                                                                            {{ __('translation.Select Division') }}
                                                                        </option>
                                                                        <option value="engineer company">
                                                                            {{ __('translation.Engineer Company') }}
                                                                        </option>
                                                                        <option value="building owner">
                                                                            {{ __('translation.Building Owner') }}
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                    </div>
                                                @else
                                                    <input name="division" value="building owner" hidden="">
                                                    @endif
                                                </div>
                                                <!-- form row 1 end  -->
                                                <!-- form row 2 start  -->
                                            </div>
                                        </div>

                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button class="form_button mb-5 mt-5 submit_btn">
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

                </div>
                <!-- section 2 end  -->
            </div>
            <!-- End Page-content -->


        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        @if (activeGuard() == 'admin')
            $('#CreateClientForm').validate({
                submitHandler: function() {
                    ajaxCall($('#CreateClientForm'), "{{ route('create_client') }}", $('.submit_btn'),
                        "{{ route('clients_listing') }}", onRequestSuccess);
                }
            });
        @else
            $('#CreateClientForm').validate({
                submitHandler: function() {
                    ajaxCall($('#CreateClientForm'), "{{ route('create_client') }}", $('.submit_btn'),
                        "{{ route('ec.GetCustomerInfoListing') }}", onRequestSuccess);
                }
            });
        @endif

        const ssnInput = document.getElementById('ssn');

        ssnInput.addEventListener('input', formatSSN);

        function formatSSN() {
            let value = ssnInput.value.replace(/[^0-9]/g, '');
            let formattedValue = '';

            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            if (value.length > 5) {
                formattedValue += value.substr(0, 3) + '-';
                formattedValue += value.substr(3, 2) + '-';
                formattedValue += value.substr(5);
            } else if (value.length > 3) {
                formattedValue += value.substr(0, 3) + '-';
                formattedValue += value.substr(3);
            } else {
                formattedValue += value;
            }

            ssnInput.value = formattedValue;
        }

        ssnInput.addEventListener('keydown', function(event) {
            if (event.key === 'Backspace') {
                const formattedValue = ssnInput.value.replace(/[^0-9]/g, '');

                if (formattedValue.length <= 1) {
                    ssnInput.value = '';
                } else {
                    ssnInput.value = formattedValue.substr(0, formattedValue.length - 1);
                }
            }
        });
    </script>
@endsection

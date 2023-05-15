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
                                    <h4 class="card-title mb-4">{{__('translation.Registration of business partners')}}
                                    </h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table" style="border-collapse: collapse;">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">{{__('translation.no.')}}</th>
                                                <th class="text-center">
                                                    {{__('translation.Registration Date')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Customer Number')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Company Name')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Address')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Division')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Action')}}
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="mt-5  selected-row-blue">
                                                <td class=""><a href="javascript: void(0);"
                                                                class="text-body  ">1</a>
                                                </td>
                                                <td class="">
                                                    <p class="">
                                                        {{$data->created_at->format('d M Y')}}
                                                    </p>
                                                </td>
                                                <td class="">
                                                    <p class="">
                                                        {{$data->customer_number}}
                                                    </p>
                                                </td>
                                                <td class="">
                                                    <p class="">
                                                        {{$data->company_name}}
                                                    </p>
                                                </td>
                                                <td class="">
                                                    <p class="">
                                                        {{$data->address}}
                                                    </p>
                                                </td>

                                                <td class="">
                                                    <p class="">
                                                        {{$data->division}}
                                                    </p>
                                                </td>
                                                <td class=" d-flex gap-1">
                                                    <a href="javascript:void(0)"
                                                       class="btn back-green btn-outline btn-sm">
                                                        <img
                                                            src="{{asset('engineer_company/images/edit_icon.png')}}">
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                       class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                        <img
                                                            src="{{asset('engineer_company/assets/images/red-search.png')}}">
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
                    <!-- container-fluid -->

                    <!-- section 2 start  -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <form id="CreateClientForm">
                                        <input name="id" value="{{$data->id}}" hidden="">
                                        @csrf
                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                           {{__('translation.Account information')}}
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
                                                                {{__('translation.Company Information')}}
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
                                                                <label class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Customer Number')}}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="number" min="1"
                                                                       name="customer_number"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       placeholder="{{__('translation.Enter customer number')}}"
                                                                       value="{{$data->customer_number}}"
                                                                       required="">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12">
                                                                <label class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Master ID')}}
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text" name="master_id"
                                                                       class="form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       value="{{$data->master_id}}"
                                                                       placeholder="{{__('translation.Enter Master ID')}}"
                                                                       required="">
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Master PW')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <input type="text"
                                                                       name="password"
                                                                       class="format-number form-control w-100 custom_input"
                                                                       aria-describedby="emailHelp"
                                                                       value="{{$data->show_password}}"
                                                                       placeholder="{{__('translation.Enter Password')}}"
                                                                       required="">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Company Name')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="text"
                                                                               name="company_name"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{__('translation.Enter Company Name')}}"
                                                                               value="{{$data->company_name}}"
                                                                               required="">
                                                                    </div>
                                                                    <div class="col-3 mt-3">
                                                                        <label
                                                                            class="form-label custom_lab mb-0"> <span
                                                                                class="star_section">*</span>
                                                                            {{__('translation.Company Registration Number')}}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text"
                                                                               name="company_registration_number"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{__('translation.Enter Company Registration Number')}}"
                                                                               value="{{$data->company_registration_number}}"
                                                                               required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Representative')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="text"
                                                                               name="representative"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="Enter Representative"
                                                                               value="{{$data->representative}}"
                                                                               required="">
                                                                    </div>
                                                                    <div class="col-3 mt-3">
                                                                        <label
                                                                            class="form-label custom_lab mb-0"> <span
                                                                                class="star_section">*</span>
                                                                            {{__('translation.Maintenance business registration number')}}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text"
                                                                               name="maintenance_business_registration_number"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{__('translation.Enter Maintenance business registration number')}}"
                                                                               value="{{$data->maintenance_business_registration_number}}"
                                                                               required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class=" star_section">&nbsp;</span>
                                                                    {{__('translation.Address')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="address"
                                                                                                class="format-number form-control w-100 custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                value="{{$data->address}}"
                                                                                                placeholder="{{__('translation.Enter address')}}">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Business Email')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <input type="email"
                                                                               name="business_email"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{__('translation.Enter Business Email')}}"
                                                                               value="{{$data->business_email}}"
                                                                               required="">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label
                                                                            class="form-label custom_lab mb-0 mt-2"> <span
                                                                                class="star_section">*</span>
                                                                            {{__('translation.Sectors')}}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <input type="text"
                                                                               name="sectors"
                                                                               class="form-control w-100 custom_input"
                                                                               aria-describedby="emailHelp"
                                                                               placeholder="{{__('translation.Enter Sectors')}}"
                                                                               value="{{$data->sectors}}"
                                                                               required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">*</span>
                                                                    {{__('translation.Contact')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="contact"
                                                                                                class="form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="{{__('translation.Enter Contact')}}"
                                                                                                value="{{$data->contact}}"
                                                                                                required=""></div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">&nbsp;</span>
                                                                    {{__('translation.fax')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="text"
                                                                                                name="fax"
                                                                                                maxlength="12"
                                                                                                class="format-number form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                value="{{$data->fax}}"
                                                                                                placeholder="02-4347-4893">
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-lg-4 col-12"><label
                                                                    class="form-label custom_lab mb-0"> <span
                                                                        class="star_section">&nbsp;</span>
                                                                    {{__('translation.Email')}}
                                                                </label></div>
                                                            <div class="col-lg-8 col-12"><input type="email"
                                                                                                name="email"
                                                                                                class="form-control w-100   custom_input"
                                                                                                aria-describedby="emailHelp"
                                                                                                value="{{$data->email}}"
                                                                                                placeholder="{{__('translation.Enter email')}}">
                                                            </div>
                                                        </div>
                                                        <input name="division" value="{{$data->division}}" hidden="">
                                                    </div>
                                                </div>
                                                <!-- form row 1 end  -->
                                                <!-- form row 2 start  -->
                                            </div>
                                        </div>

                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button type="submit"
                                                        class="form_button mb-5 mt-5 submit_btn">
                                                    {{__('translation.Update')}}
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
        $('#CreateClientForm').validate({
            submitHandler: function () {
                ajaxCall($('#CreateClientForm'), "{{ route('update_client') }}", $('.submit_btn'), "{{ route('clients_listing') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

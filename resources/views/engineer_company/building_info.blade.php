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
                                    <h4 class="card-title mb-4">Customer Info
                                    </h4>
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


                                    <form id="createBuildingInformation">
                                        @if(!empty($cutomer->BuildingInformation))
                                            <input name="building_id" value="{{$customer->BuildingInformation->id}}">
                                            <input name="company_id" value="{{$customer->CompanyInformation->id}}">
                                        @endif
                                        <input name="customer_id" value="{{$customer->id}}" hidden>
                                        @csrf
                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            Customer Information
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
                                                            class="bor_lef">&nbsp;</span>Building Info
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
                                                                class="star_section">*</span> Building name
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="building_name"
                                                               class="form-control custom_input w-100"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter building Name
                                                        " value="{{$customer->building_name}}" required>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12">
                                                        <label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span> Building Manager
                                                            Name</label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="building_manager_name"
                                                               class="form-control w-100 custom_input"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter building manager name
                                                        "
                                                               @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->building_manager_name}}"
                                                               @endif required>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span> Building Manager
                                                            Contact</label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="number" min="0"
                                                               name="building_manager_contact"
                                                               class="form-control w-100 custom_input"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter contact (010-8021-5235)"
                                                               @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->building_manager_contact}}"
                                                               @endif required>
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>Address
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="address"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="Enter address"
                                                                                        @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->address}}"
                                                                                        @endif
                                                                                        required></div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>Contract Manager /
                                                            contact</label></div>
                                                    <div class="col-lg-8 col-12"><input type="text"
                                                                                        name="manager_contact"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="Enter manager contact number"
                                                                                        @if(!empty($customer->BuildingInformation))  value="{{$customer->BuildingInformation->manager_contact}}"
                                                                                        @endif
                                                                                        required></div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">&nbsp;</span> fax</label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="bi_tax"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="Enter fax"
                                                                                        @if(!empty($customer->BuildingInformation) && !empty($customer->BuildingInformation->fax))  value="{{$customer->BuildingInformation->fax}}"
                                                            @endif></div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12">
                                                        <label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">&nbsp;</span> e-mail
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="email" name="bi_email"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="Enter email"
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
                                                            class="bor_lef">&nbsp;</span>Building management company
                                                        information</h4>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span> Company Name
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input type="text" name="company_name"
                                                                                        class="form-control w-100 custom_input"
                                                                                        aria-describedby="emailHelp"
                                                                                        placeholder="Enter company name
                                                        " required
                                                                                        @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->company_name}}"
                                                            @endif
                                                        ></div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span> Ceo Name
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="ceo_name"
                                                               class="form-control w-100 custom_input"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter ceo name
                                                        " required
                                                               @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->ceo_name}}"
                                                            @endif>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12">
                                                        <label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>Company Registration
                                                            Number</label></div>

                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="company_reg_number"
                                                               class="form-control w-100 custom_input_2"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter registration number" required
                                                               @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->company_reg_number}}"
                                                            @endif>
                                                    </div>


                                                </div>


                                                <div class="row align-items-center mt-4">
                                                  <div class="col-lg-4 col-12">   <label
                                                        class="form-label custom_lab mb-0"> <span
                                                            class="star_section">*</span>Address</label>  </div>
                                                  <div class="col-lg-8 col-12">
                                                      <input type="text" name="ci_address"
                                                           class="form-control w-100 custom_input"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter address" required
                                                           @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->address}}"
                                                        @endif>
                                                  </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                   <div class="col-lg-4 col-12">  <label
                                                        class="form-label custom_lab mb-0"> <span
                                                            class="star_section">*</span> Industry Category</label>  </div>
                                                  <div class="col-lg-8 col-12">   <input type="text" name="industry_category"
                                                           class="form-control w-100   custom_input"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Industry Category" required
                                                           @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->industry_category}}"
                                                        @endif>  </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                   <div class="col-lg-4 col-12">   <label
                                                        class="form-label custom_lab mb-0"> <span
                                                            class="star_section">*</span>Contact 1, 2
                                                    </label></div>
                                                     <div class="col-lg-8 col-12"> <input type="text" name="ci_contacts"
                                                           class="form-control w-100   custom_input"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Contact 1/Contact 2"
                                                           @if(!empty($customer->CompanyInformation))  value="{{$customer->CompanyInformation->contacts}}"
                                                           @endif
                                                           required
                                                    ></div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                   <div class="col-lg-4 col-12">   <label
                                                        class="form-label custom_lab mb-0"> <span
                                                            class="star_section">&nbsp;</span> fax</label></div>
                                                   <div class="col-lg-8 col-12">   <input type="text" name="ci_fax"
                                                           class="form-control w-100   custom_input"
                                                           aria-describedby="emailHelp"
                                                           placeholder="02-4347-4893"
                                                           @if(!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->fax))  value="{{$customer->CompanyInformation->fax}}"
                                                        @endif></div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                   <div class="col-lg-4 col-12">   <label
                                                        class="form-label custom_lab mb-0"> <span
                                                            class="star_section">&nbsp;</span> Email</label></div>
                                                   <div class="col-lg-8 col-12">   <input type="email" name="ci_email"
                                                           class="form-control w-100   custom_input"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Enter email"
                                                           @if(!empty($customer->CompanyInformation) && !empty($customer->CompanyInformation->email)) value="{{$customer->CompanyInformation->email}}"
                                                        @endif></div>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button class="form_button mb-5 mt-5">Save and Next
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
    </script>
@endsection

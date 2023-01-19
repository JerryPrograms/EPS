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
                                    <h4 class="card-title mb-4">Fill in customer information
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
                            <form id="createASAndRepairCompanyInformationForm">
                                <input name="customer_id" value="{{$customer->id}}" hidden>
                                @if(!empty($customer->ASInformation))
                                    <input name="as_id" value="{{$customer->ASInformation->id}}" hidden>
                                    <input name="repair_id" value="{{$customer->RepairCompanyInformation->id}}" hidden>
                                @endif
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <!-- end table-responsive -->

                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">Customer information creation page
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
                                                            class="bor_lef">&nbsp;</span> AS Information
                                                    </h4>
                                                </div>
                                                <div class="col-lg-1 no-print">
                                                    <div class="file_main_section">
                                                        <button type="button" onclick="printForm($('#createASAndRepairCompanyInformationForm'))" class="file_button">
                                                            <img
                                                                src="{{asset('engineer_company/images/Vector.png')}}">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-baseline">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Repair Company Name
                                                    </label>
                                                    <input type="text" name="repair_company_name"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter repair company name
                                                        " required
                                                           @if(!empty($customer->ASInformation)) value="{{$customer->ASInformation->repair_company_name}}" @endif>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Contract Date</label>
                                                    <input type="date" name="contract_date"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Jewon Lee
                                                        " required
                                                           @if(!empty($customer->ASInformation)) value="{{$customer->ASInformation->contract_date}}" @endif>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Fee</label>
                                                    <input type="number" min="1" name="fee"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="₩ 100" required
                                                           @if(!empty($customer->ASInformation)) value="{{$customer->ASInformation->fee}}" @endif>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Tax invoice issue
                                                        date</label>
                                                    <input type="date" name="invoice_issue_date"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           required
                                                           @if(!empty($customer->ASInformation)) value="{{$customer->ASInformation->invoice_issue_date}}" @endif>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4">
                                                        <span class="star_section">*</span>Payment Date</label>
                                                    <input type="date" name="payment_date"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           required
                                                           @if(!empty($customer->ASInformation)) value="{{$customer->ASInformation->payment_date}}" @endif>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> Payment
                                                        method</label>
                                                    <select class="form-select col-lg-8 custom_input"
                                                            name="payment_method"
                                                            autocomplete="off" required
                                                    >
                                                        <option value="" @if(empty($customer->ASInformation)) selected
                                                                @endif disabled>--Select payment method--
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ASInformation) && $customer->ASInformation->payment_method == 'stripe') selected
                                                            @endif value="stripe">Stripe
                                                        </option>
                                                        <option
                                                            @if(!empty($customer->ASInformation) && $customer->ASInformation->payment_method == 'paypal') selected
                                                            @endif  value="paypal">Paypal
                                                        </option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- form row 1 end  -->

                                        <!-- form row 2 start  -->
                                        <div class="custom_padding_form">
                                            <div class="row mt-5">
                                                <div class="col-lg-12">
                                                    <h4 class="card-title border-bottom-0 mb-4"> <span
                                                            class="bor_lef">&nbsp;</span>Repair Company Information
                                                    </h4>
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
                                                        " required
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->company_name}}" @endif>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>CEO Name</label>

                                                    <input type="text" name="ceo_name"
                                                           class="form-control col-lg-3 custom_input_2 custom_widt_inp"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter ceo name" required
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->ceo_name}}" @endif>

                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Address</label>
                                                    <input type="text" name="address"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter address" required
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->address}}" @endif>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Industry Category</label>
                                                    <input type="text" name="industry_category"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Enter industry category
                                                        " required
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->industry_category}}" @endif>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">*</span>Contact 1, 2
                                                    </label>
                                                    <input type="text" name="contacts"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="010-3837-4894    /    02-4847-3856"
                                                           required
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->contacts}}" @endif>
                                                </div>


                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> fax</label>
                                                    <input type="text" name="fax"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="02-4347-4893"
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->fax}}" @endif>
                                                </div>

                                                <div class="d-flex align-items-baseline mt-4">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom_lab col-lg-4"> <span
                                                            class="star_section">&nbsp;</span> Email</label>
                                                    <input type="email" name="email"
                                                           class="form-control col-lg-8 custom_input"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="angelina@gmail.com"
                                                           @if(!empty($customer->RepairCompanyInformation)) value="{{$customer->RepairCompanyInformation->email}}" @endif>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2 col-6">
                                                <a href="{{route('ec.CreateBuildingInfo',request()->segment(3))}}">
                                                    <button type="button" class="form_button_2 mb-5 mt-5">Back page
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5">Save and Next
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

        //DISABLE PREVIOUS DATES
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('input[type=date]').attr('min', today);

        $('#createASAndRepairCompanyInformationForm').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#createASAndRepairCompanyInformationForm'), "{{ route('CreateASAndRepairCompanyInformation') }}", $('.form_button'), "{{ route('ec.CreateParkingFacility',request()->segment(3)) }}", onRequestSuccess);
        });
    </script>
@endsection

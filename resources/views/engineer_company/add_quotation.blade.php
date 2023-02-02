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
                                <div>


                                    <!-- end table-responsive -->
                                    <!-- end page title -->
                                    <div class="main_content_section_4">
                                        <!-- start page title -->
                                        <!-- section 2 start  -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card mb-0">
                                                    <div class="card-body custom-card-body-color">
                                                        <!-- end table-responsive -->

                                                        <div class="card_section_2">
                                                            <div class="row ">
                                                                <div class="col-lg-11">
                                                                    <div class="">
                                                                        <h4 class="card_tittle_2">. Issuance Of
                                                                            Quotation
                                                                        </h4>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- form row 1 start  -->
                                                        <div class="row mt-3">
                                                            <form id="createQuote">
                                                                @csrf
                                                                <input name="customer_id" value="{{$customer->id}}"
                                                                       hidden>
                                                                <div class="form-group mb-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-2 col-md-6 col-12">
                                                                            <label for="customer_number" class="mb-0">Customer
                                                                                Number</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <input type="text"
                                                                                   class="form-control form-theme-input"
                                                                                   placeholder="Enter contract date"

                                                                                   value="{{$customer->customer_number}}"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-2 col-md-6 col-12">
                                                                            <label for="contract_date" class="mb-0">Contract
                                                                                Date</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <input type="date"
                                                                                   class="form-control form-theme-input"
                                                                                   name="contract_date"
                                                                                   placeholder="Enter contract date"
                                                                                   value=""
                                                                                   required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-2 col-md-6 col-12">
                                                                            <label for="building_name" class="mb-0">Building
                                                                                Name</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <input type="text"
                                                                                   class="form-control form-theme-input"

                                                                                   id="building_name"
                                                                                   placeholder="Enter building name"
                                                                                   disabled
                                                                                   value="{{$customer->building_name}}"
                                                                            >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-2 col-md-6 col-12">
                                                                            <label for="building_address" class="mb-0">Building
                                                                                Address</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <input type="text"
                                                                                   class="form-control form-theme-input"

                                                                                   id="building_address"
                                                                                   placeholder="Enter building address"
                                                                                   value="{{$customer->BuildingInformation->address}}"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <label for="exampleInputEmail1"
                                                                                   class="mb-0">Quotation Contents
                                                                            </label>
                                                                        </div>
                                                                        <div id="quotation_contents" class="col-lg-10">
                                                                            <div class="content-form-section">
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">Quote
                                                                                                Item
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="text"
                                                                                                   class="form-control qitem  custom_input"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   name="quote_item[]"
                                                                                                   placeholder="Enter quote item"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">Quantity
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
                                                                                                   min="1"
                                                                                                   class="form-control  custom_input"
                                                                                                   name="quantity[]"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="Enter quantity"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">
                                                                                                Unit Price
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
                                                                                                   class="form-control price  custom_input"
                                                                                                   name="price[]"
                                                                                                   min="1"
                                                                                                   onkeyup="calculateSum()"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="Enter price"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4" style="cursor: pointer"
                                                                     onclick="appendQuoteContent()">
                                                                    <div class="row mt-3">
                                                                        <div class="col-lg-2">
                                                                            <label for="exampleInputEmail1"
                                                                                   class="form-label custom_lab col-5">&nbsp;
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-lg-10">
                                                                            <div class="d-flex align-items-baseline ">

                                                                                <div
                                                                                    class="collap_section_lst_7 col-lg-8">
                                                                                    <p class="collap_section_lst_text">
                                                                                        + Add
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-lg-2 col-md-6 col-12">
                                                                            <label for="building_address" class="mb-0">
                                                                                Total Amount</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <input type="text"
                                                                                   class="form-control form-theme-input"
                                                                                   placeholder="Total amount"
                                                                                   id="total_amount"

                                                                                   required
                                                                                   disabled>
                                                                            <input name="total_amount"
                                                                                   id="hidden_total_amount" hidden>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-5">
                                                                    <button class="btn btn-primary submitbtn">Save
                                                                        Changes
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                        <!-- form row 1 end  -->
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>


                                        <!-- section 2 end  -->


                                    </div>
                                </div> <!-- container-fluid -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('custom-script')
    <script>

        $('#createQuote').validate({

            submitHandler: function () {

                ajaxCall($('#createQuote'), "{{ route('CreateQuote') }}", $('#createQuote').find('.submitbtn'), "{{ route('ec.GetQuoteManagement',request()->segment(3)) }}", onRequestSuccess);
            }
        });

        function appendQuoteContent() {
            $('#quotation_contents').append(` <div class="content-form-section mt-3">
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">Quote
                                                                                                Item
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="text"
                                                                                                   class="form-control qitem  custom_input"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   name="quote_item[]"
                                                                                                   placeholder="Enter quote item"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">Quantity
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
                                                                                                   min="1"
                                                                                                   class="form-control  custom_input"
                                                                                                   name="quantity[]"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="Enter quantity"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">
                                                                                                Unit Price
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
required
                                                                                                   class="form-control price  custom_input"
                                                                                                   name="price[]"
 onkeyup="calculateSum()"
                                                                                                   min="1"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="Enter price"
required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
<div class="form-group">
<div class="row">
<div class="col-12">
<button class="btn btn-danger" type="button" onclick="$(this).parent().parent().parent().parent().remove()"><i class="fa fa-trash"></i></button>
</div>
</div>
</div>
                                                                            </div>`
            );
        }

        function calculateSum() {
            var sum = 0;
            $('.price').each(function () {
                if ($(this).val() != '') {
                    sum = sum + parseInt($(this).val());
                }
            });
            $('#total_amount').val('');
            $('#total_amount').val(sum);
            $('#hidden_total_amount').val('');
            $('#hidden_total_amount').val(sum);
        }
    </script>
@endsection

@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->
                <form id="add_contract_completion_form">
                    @csrf
                    <input name="customer_id" value="{{request()->segment(3)}}" hidden>
                    <div class="main_content_section">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <!-- end table-responsive -->


                                        <input name="customer_id" value="4" hidden="">

                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            Construction Completion Report
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="custom_padding_form">
                                            <div class="row mt-3">


                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-12">
                                                        <label class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Project Number
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="project_number"
                                                               class="form-control custom_input w-100"
                                                               aria-describedby="emailHelp"
                                                               value="{{$completion_report->project_number}}"
                                                               placeholder="Enter Project Number" required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12">
                                                        <label class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Site Name
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" name="site_name"
                                                               class="form-control w-100 custom_input"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter site name"
                                                               required=""
                                                               value="{{$completion_report->site_name}}"
                                                        >
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Joint Nmae
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="text" min="0" name="joint_name"
                                                               class="form-control w-100 custom_input"
                                                               aria-describedby="emailHelp"
                                                               placeholder="Enter joint name"
                                                               value="{{$completion_report->joint_name}}"
                                                               required="">
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Down Payment
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input
                                                            type="number" min="1"
                                                            name="down_payment"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter down payment"
                                                            value="{{$completion_report->down_payment}}"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Contract Amount
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input
                                                            type="number" min="1"
                                                            name="contract_amount"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter contract payment"
                                                            value="{{$completion_report->contract_amount}}"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Completion Fund
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input
                                                            type="number    " min="1"
                                                            name="completion_fund"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter completion fund"
                                                            value="{{$completion_report->completion_fund}}"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Other Settlement Fund
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input
                                                            type="number" min="1"
                                                            name="other_settlement_fund"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter other settlement"
                                                            value="{{$completion_report->other_settlement_fund}}"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Microbial Fund
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input
                                                            type="number" min="1"
                                                            name="microbial_fund"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter microbial fund"
                                                            value="{{$completion_report->microbial_fund}}"
                                                            required="">
                                                    </div>
                                                </div>


                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Contract Date
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input
                                                            onchange="RestrictNextDate($(this))"
                                                            type="date"
                                                            name="contract_date"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            value="{{$completion_report->contract_date}}"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Production Date
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input
                                                            onchange="RestrictNextDate($(this))" type="date"
                                                            name="production_date"
                                                            value="{{$completion_report->production_date}}"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Completion Date
                                                        </label></div>
                                                    <div class="col-lg-8 col-12"><input
                                                            onchange="RestrictNextDate($(this))" type="date"
                                                            name="completion_date"
                                                            value="{{$completion_report->completion_date}}"
                                                            class="form-control w-100 custom_input"
                                                            aria-describedby="emailHelp"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mt-4">
                                                    <div class="col-lg-4 col-12"><label
                                                            class="form-label custom_lab mb-0"> <span
                                                                class="star_section">*</span>
                                                            Confirmation Date
                                                        </label></div>
                                                    <div class="col-lg-8 col-12">
                                                        <input type="date"
                                                               name="confirmation_date"
                                                               class="form-control w-100 custom_input"
                                                               value="{{$completion_report->confirmation_date}}"
                                                               aria-describedby="emailHelp"
                                                               required="">
                                                    </div>
                                                </div>

                                                @for($i = 0 ; $i < count(json_decode($completion_report->title)) ; $i++)
                                                    <div class="row align-items-center mt-4">
                                                        <div id="data_div" class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-6 pb-3">
                                                                            <div class="d-flex">

                                                                                <label
                                                                                    class="form-label custom_lab">Title</label>
                                                                                <input
                                                                                    class="form-control w-100 custom_input"
                                                                                    name="title[]" type="text"
                                                                                value="{{json_decode($completion_report->title)[$i]}}"
                                                                                required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 pb-3">
                                                                            <div class="d-flex">
                                                                                <label
                                                                                    class="form-label custom_lab">Site</label>
                                                                                <input
                                                                                    class="form-control w-100 custom_input"
                                                                                    name="site[]" type="text"
                                                                                    value="{{json_decode($completion_report->site)[$i]}}"
                                                                                    required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 pb-3">
                                                                            <div class="d-flex">
                                                                                <label
                                                                                    class="form-label custom_lab">Date</label>
                                                                                <input
                                                                                    class="form-control w-100 custom_input"
                                                                                    name="date[]" type="date"
                                                                                    value="{{json_decode($completion_report->date)[$i]}}"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <input name="id" value="{{$completion_report->id}}" hidden>
                                                                        <div class="col-6 pb-3">
                                                                            <div class="d-flex">
                                                                                <label
                                                                                    class="form-label custom_lab me-2">Photo</label>
                                                                                <input
                                                                                    class="form-control w-100 custom_input"
                                                                                    name="photo[]" type="file"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="button_div" class="col-12 text-end">
                                                            <button type="button" onclick="AddData()"
                                                                    class="btn btn-primary"><i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endfor

                                            </div>
                                        </div>
                                        <!-- form row 1 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button class="form_button mb-5 mt-5">
                                                    Save and Next
                                                </button>

                                            </div>
                                        </div>

                                        <!-- form row 4 end  -->

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </form>
                <!-- section 2 end  -->
            </div>
            <!-- End Page-content -->


        </div>
    </div>
@endsection
@section('custom-script')
    <script>

        function RestrictNextDate(element) {
            element.parent().parent().next().children().find('input').attr('min', element.val());
        }

        function AddData() {
            $('#button_div').prepend(`<div id="data_div" class="col-12 position-relative">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-6 pb-3">
                                                                        <div class="d-flex">
                                                                            <label
                                                                                class="form-label custom_lab">Title</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="title[]" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 pb-3">
                                                                        <div class="d-flex">
                                                                            <label
                                                                                class="form-label custom_lab">Site</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="site[]" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 pb-3">
                                                                        <div class="d-flex">
                                                                            <label
                                                                                class="form-label custom_lab">Date</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="date[]" type="date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 pb-3">
                                                                        <div class="d-flex">
                                                                            <label class="form-label custom_lab me-2">Photo</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="photo[]" type="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
<button type="button" onclick="$(this).parent().remove()" style="top: -13px;
    right: -16px;" class="btn btn-danger position-absolute"><i class="fa fa-times"></i></button>
                                                    </div>`);
        }


        $('#add_contract_completion_form').validate({
            submitHandler: function () {
                ajaxCall($('#add_contract_completion_form'), "{{ route('update_construction_completion') }}", $('#add_contract_completion_form').find('button.form_button'), "{{ route('construction_completion') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

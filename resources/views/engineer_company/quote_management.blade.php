@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .selected-row {
            border: 3px solid #6281FE !important;
        }
    </style>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Quote Managemnet List</h4>
                                    <div class="d-flex align-items-center table-top-actions gap-1">
                                        <div class="buttons d-flex align-items-center justify-content-between gap-1">
                                            <div class="d-flex">
                                                <form class="d-flex">
                                                    <input class="form-control me-2" placeholder="Search here" required type="text">
                                                    <a href="javascript:void(0)" class="btn btn-primary">Search</a>
                                                </form>
                                            </div>

                                            <a href="{{route('ec.AddQuote',$customer->user_uid)}}"
                                               class="btn btn-primary">Add</a>
                                            <a onclick="OpenModal()" href="javascript:void(0)" class="btn btn-primary">Delete</a>
                                        </div>
                                    </div>
                                    <div id="customer_list_table" class="table-responsive mt-3">
                                        @include('engineer_company.templates.quote_listing_template',['quote'=>$customer->GetQuote])
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
@section('modal')

    <!-- view modal -->
    <div class="modal fade" id="exampleModal0" tabindex="-1"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom-modal-width">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">
                        View Quoatation
                    </h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-2">
                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" mb-0">
                                <div>
                                    <!-- end table-responsive -->
                                    <div class="row">
                                        <div
                                            class="col-lg-5 col-9 p-0">
                                            <h4
                                                class="card-title mt-2 border-bottom-0 mb-4 custom_margin_2">
                                                                                                            <span
                                                                                                                class="bor_lef">&nbsp;</span>
                                                Provider
                                                Info
                                            </h4>
                                        </div>
                                        <div class="col-lg-7 col-3"
                                             style="text-align: end;">
                                            <div
                                                class="file_main_section">
                                                <button
                                                    class="file_button">
                                                    <img
                                                        src="images/Vector.png">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 1 start  -->
                                    <div class="row">
                                        <form>
                                            <div
                                                class="row align-items-baseline quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label for="exampleInputEmail1"
                                                           class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Provider
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="EPS Co., Ltd.
">
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Company..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="142-52-19287">
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-baseline mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Address
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="132 Sinsa-dong,..">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-baseline mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        CEO Name...
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Hong Gil Dong
                                                ">
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Manager Name
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control  custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Junghwan Park
                                                ">
                                                </div>
                                            </div>


                                            <div
                                                class="row mt-4">
                                                <div
                                                    class="col-lg-5 col-9 p-0">
                                                    <h4
                                                        class="card-title mt-2 border-bottom-0 mb-3 custom_margin_2">
                                                    <span
                                                        class="bor_lef">&nbsp;</span>
                                                        customer
                                                        information
                                                    </h4>
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-center mt-2 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Customer ..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter contract date
                                                ">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>Manager Name..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter building name
                                                ">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>Manager Contact..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control col-lg-8 custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter contract date
                                                ">
                                                </div>
                                            </div>


                                            <div
                                                class="row mt-4">
                                                <div
                                                    class="col-lg-5 col-9 p-0">
                                                    <h4
                                                        class="card-title mt-2 border-bottom-0  custom_margin_2">
                                                    <span
                                                        class="bor_lef">&nbsp;</span>
                                                        Quotation Info
                                                    </h4>
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-center mt-3 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Quotation...
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Main motor replacement
                                                ">
                                                </div>
                                            </div>


                                            <div
                                                class="row align-items-center mt-3 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>
                                                        Quote Date
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="2023.01.15">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-3 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>Quotation..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control  custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="1">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-3 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>Total Amount
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="500,000">
                                                </div>
                                            </div>

                                            <div class="mt-5 mb-5">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-3">
                                                        <p class="modal-footer-text m-0 p-0">January 15, 2023 </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p class="modal-footer-text m-0 p-0">EPS Co., Ltd.</p>
                                                    </div>
                                                </div>
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

            </div>
        </div>
    </div>
    <!-- delete modal -->
    <div id="deleteQuoteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel112"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel112">
                        {{ __('translation.Delete_Parts_history_Replacement') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deleteQuoteForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <p>
                                {{ __('translation.Are_you_sure_you_want_to_delete_this_data?') }}
                            </p>
                            <div class="mb-3">

                                <input name="id" id="quoteId" hidden autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">
                                {{ __('translation.close') }}
                            </button>
                            <button type="submit"
                                    class="btn btn-primary waves-effect waves-light submitbtn ">
                                {{ __('translation.delete') }}
                            </button>
                        </div>

                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
@section('custom-script')

    <script>

        function SelectRow(row, id) {
            $('tr').each(function () {
                $(this).removeClass('selected-row');
            });
            row.addClass('selected-row');
            $('#quoteId').val(id);
        }

        function OpenModal() {
            if ($('#quoteId').val() == '') {
                Command: toastr["error"]("You need to select row first")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": 300,
                    "hideDuration": 1000,
                    "timeOut": 2000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            } else {
                $('#deleteQuoteModal').modal('show');

            }
        }

        $('#deleteQuoteForm').validate({
            submitHandler: function () {
                ajaxCall($('#deleteQuoteForm'), "{{ route('DeleteQuote') }}", $('.submitbtn'), "{{ route('ec.GetQuoteManagement',request()->segment(3)) }}", onRequestSuccess);
            }
        });


        $('#customerSearchForm').submit(function (e) {

            $('.searchbar_button').attr('disabled', true);
            e.preventDefault();
            var form = $('#customerSearchForm')[0];
            var formData = new FormData(form);
            let prompt = $('.prompt');

            $.ajax({

                type: "POST",
                url: '{{route('SearchCustomerInfo')}}',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                mimeType: "multipart/form-data",
                beforeSend: function () {
                    $('#clearFilter').removeClass('d-none');
                },
                success: function (res) {

                    $('.searchbar_button').attr('disabled', false);

                    if (res.success == false) {
                        prompt.html('<div class="alert alert-danger">' + res.message + '</div>');

                        $("div.prompt").fadeIn();
                        setTimeout(function () {
                            $("div.prompt").fadeOut();
                        }, 2000);

                    } else if (res.success == true) {

                        $('#customer_list_table').html('');
                        $('#customer_list_table').append(res.html);
                    }
                },
                error: function (e) {


                }
            });
        });

    </script>
@endsection

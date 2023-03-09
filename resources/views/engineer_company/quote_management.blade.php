@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .selected-row {
            border: 3px solid #6281FE !important;
        }

        .modal-body-2 {
            height: auto;
            padding: 20px 20px 0px 40px;
            border-top: 1px solid #000000;
        }

        .custom-modal-width {
            width: 600px;
            padding: 0px 10px 0px 10px;
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
                                    <h4 class="card-title mb-4">{{ __('translation.Quote Managemnet List') }}</h4>
                                    <div class="d-flex align-items-center table-top-actions gap-1">
                                        <div class="buttons d-flex align-items-center justify-content-between gap-1">
                                            <div class="d-flex">
                                                <input id="search" onkeyup="myFunction()" class="form-control me-2" name="keyword"
                                                       placeholder="{{ __('translation.Search here') }}" required
                                                       type="text"
                                                       autocomplete="off">

                                            </div>

                                            <a href="{{route('ec.AddQuote',$customer->user_uid)}}"
                                               class="btn btn-primary">{{__('translation.Add')}}</a>
                                            <a onclick="OpenModal()" href="javascript:void(0)"
                                               class="btn btn-primary">{{ __('translation.delete') }}</a>
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
    <div class="modal fade dsadasda" id="exampleModal0" tabindex="-1"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom-modal-width">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">
                        {{ __('translation.View Quotation') }}
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
                                                <span class="bor_lef">&nbsp;</span>
                                                {{ __('translation.Provider Info') }}
                                            </h4>
                                        </div>
                                        <div class="col-lg-7 col-3"
                                             style="text-align: end;">
                                            <div
                                                class="file_main_section">
                                                <button type="button" onclick="printForm($('.dsadasda'))"
                                                        class="file_button">
                                                    <img
                                                        src="{{asset('engineer_company/images/Vector.png')}}">
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
                                                        {{ __('translation.Provider') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.EPS Co Ltd') }}.
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
                                                        {{ __('translation.Company') }}..
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
                                                        {{ __('translation.address') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.132 Sinsa-dong') }}...">
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
                                                        {{ __('translation.Ceo Name') }}...
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Hong Gil Dong') }}">
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
                                                        {{ __('translation.Manager Name') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control  custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Junghwan Park') }}">
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
                                                        {{ __('translation.customer information') }}
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
                                                        {{ __('translation.customer') }} ..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Enter contract date') }}">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>{{ __('translation.Manager Name') }}..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Enter building name') }}">
                                                </div>
                                            </div>

                                            <div
                                                class="row align-items-center mt-4 quoatation-info-form">
                                                <div class="col-lg-3 col-md-12">
                                                    <label
                                                        for="exampleInputEmail1"
                                                        class="form-label custom-lab-2 mb-0">
                                                <span
                                                    class="star_section">*</span>{{ __('translation.Manager Contact') }}
                                                        ..
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control col-lg-8 custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Enter contract date') }}">
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
                                                        {{ __('translation.Quotation Info') }}
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
                                                        {{ __('translation.Quotation') }}...
                                                    </label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control custom_input"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="{{ __('translation.Main motor replacement') }}">
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
                                                        {{ __('translation.Quote Date') }}
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
                                                    class="star_section">*</span>{{ __('translation.Quotation') }}..
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
                                                    class="star_section">*</span>{{ __('translation.Total Amount') }}
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
                                                        <p class="modal-footer-text m-0 p-0">{{ __('translation.EPS Co Ltd') }}
                                                            .</p>
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
                        {{ __('translation.Delete Parts history Replacement') }}
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
                                {{ __('translation.Are you sure you want to delete') }}
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


        // var $rows = $('#level1_listin_table_old tr');
        // $('#search').keyup(function () {
        //     var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        //
        //     $rows.show().filter(function () {
        //         var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        //         return !~text.indexOf(val);
        //     }).hide();
        // });

        let hiddenCount = 0;

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("quote_tbody");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].classList.remove('d-none');
                    } else {
                        tr[i].classList.add('d-none');
                        $('#noRecord').addClass('d-none');
                    }
                }
            }

            if ($("#quote_tbody tbody tr.main-tr").length == $("#quote_tbody tbody tr.d-none.main-tr").length) {
                $('#noRecord').removeClass('d-none');
            } else {
                $("#noRecord").addClass('d-none')
            }
        }


        function GetQuoteData(id) {
            $.ajax({

                type: "POST",
                url: '{{route('GetQuote')}}',
                dataType: 'json',
                data: {
                    'id': id,
                    '_token': '{{csrf_token()}}',
                },
                beforeSend: function () {
                },
                success: function (res) {
                },
                error: function (e) {


                }
            });
        }

    </script>
@endsection

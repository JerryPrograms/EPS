@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div
                                            class="card-title d-flex align-items-center justify-content-between mobile-flex-column mb-0 py-2">
                                            <h5 class="mb-0 font-15">{{ __('translation.Quotation Management') }}</h5>

                                        </div>
                                    </div>
                                    <div class="mt-3 left-content d-flex align-items-center">
                                        <div class="custom_search">
                                            <div class="search">
                                                <input id="myInput" onchange="myFunction()" type="text"
                                                       class="form-control" name="keyword"
                                                       placeholder="{{ __('translation.search') }}"
                                                       autocomplete="off"
                                                       required="">
                                                <button type="button" class="btn btn-primary searchbar_button">
                                                    <div class="search_img">
                                                        <img
                                                            src="{{asset('engineer_company/assets/images/search.png')}}">
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count($quotations) > 0)
                                        <div class="table-responsive data-set-list mt-3">
                                            <table class="table table-striped align-middle mb-0 table-theme">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>{{ __('translation.no') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Quote Date') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Customer Number') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Building Name') }}</th>
                                                    <th>{{ __('translation.Number') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Customer Number') }}</th>
                                                    <th>{{ __('translation.Amount') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Action') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody id="myTable">
                                                @foreach ($quotations as $v)

                                                    @php
                                                        $address = $v->getCustomer->GetBuildingInfo()->pluck('address')->implode(',');
                                                        $building_name = $v->getCustomer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                                    @endphp

                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $v->created_at->format('Y-m-d') }}</td>
                                                        <td>{{ $v->getCustomer->customer_number }}</td>
                                                        <td>{{ $building_name }}</td>
                                                        <td>{{ count($v->GetQuoteContent) }}</td>
                                                        <td>{{ $v->GetCustomer->customer_number }}</td>
                                                        <td>{{ $v->total_amount }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a @if(activeGuard() == 'admin') style="background-color: #6281FE !important; border: none"
                                                                   @endif href="{{ route('GetQuoteDetails', $v->id) }}"
                                                                   class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                   <img src="https://eps.beckapps.co/eps/public/engineer_company/assets/images/red-search.png">
                                                                </a>
                                                                @if(activeGuard() != 'web')
                                                                    <a href="{{ route('GetQuoteDetails', $v->id) }}"
                                                                       class="btn back-green btn-outline btn-sm">
                                                                       <img src="https://eps.beckapps.co/eps/public/engineer_company/images/edit_icon.png">
                                                                    </a>
                                                                    <a data-bs-toggle="modal" data-del-id="{{ $v->id }}"
                                                                       data-bs-target="#delModal"
                                                                       class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm delBtn">
                                                                       <img src="https://eps.beckapps.co/eps/public/engineer_company/assets/images/delete.png">
                                                                    </a>
                                                                @endif
                                                                @if(activeGuard() == 'web')
                                                                    <button @if($v->alarm == 1) data-bs-toggle="modal"
                                                                            data-bs-target="#customerTurnOffAlarm"
                                                                            onclick="set_contract_id('{{$v->id}}')"
                                                                            class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm btn-background-light-yellow"
                                                                            @else class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm disabled" @endif>
                                                                        @if($v->alarm == 1)
                                                                            <img
                                                                                src="{{ asset('engineer_company/images/alarm.png') }}">
                                                                        @else
                                                                            <img
                                                                                src="{{ asset('engineer_company/images/alarm_grey.png') }}">
                                                                        @endif
                                                                    </button>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center mt-3">
                                            {!! $quotations->links('common_files.paginate') !!}
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img style="height: 200px;"
                                                 src="{{asset('engineer_company/images/no-data-found.png')}}"
                                                 alt="No Records Found">
                                        </div>
                                    @endif
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

    <div id="delModal" class="modal fade" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delModalLabel">{{ __('translation.Confirm Delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delinput">
                    <div class="del-prompt"></div>
                    <p>{{ __('translation.Are you sure you want to delete') }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">{{ __('translation.close') }}</button>
                    <button type="button" id="delBtnAction"
                            class="btn btn-primary waves-effect waves-light">{{ __('translation.Save changes') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div id="customerTurnOffAlarm" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Turn Off Alarm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="contract_turn_off">
                    <input type="hidden" name="_token" value="xTg25t9cWyiCMS7WjnAiFUCyLA8AsqAWJQurqbd2">
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="col-md-12">
                                <div class="prompt w-100"></div>
                            </div>
                            <p>Are you sure you want to turn off alarm?</p>
                            <input name="id" id="contract_id" hidden>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close
                        </button>
                        <button type="submit"
                                class="btn btn-primary waves-effect waves-light submitbtn">Turn Off
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('custom-script')
    <script>
        $('.delBtn').on('click', function () {
            $('#delinput').val($(this).attr('data-del-id'));
        });

        $('#delBtnAction').on('click', function () {
            var btn = $(this);
            $.ajax({
                type: "POST",
                url: '{{ route("del_dispatch_confirmation_record") }}',
                dataType: 'json',
                data: {'del_id': $('#delinput').val(), '_token': '{{ csrf_token() }}'},
                beforeSend: function () {
                    btn.prop('disabled', true);
                    btn.html('<i class="fa fa-spinner fa-spin me-1"></i> Processing');
                },
                success: function (response) {
                    if (response.success == true) {
                        $('.del-prompt').html('<div class="alert alert-success mb-3">' + response.message + '</div>');
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        $('.del-prompt').html('<div class="alert alert-danger mb-3">' + response.message + '</div>');
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                },
                error: function () {
                }
            });
        });

        var $rows = $('#myTable tr');
        $('#myInput').keyup(function () {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });

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

        function set_contract_id(id) {
            $('#contract_id').val(id);
        }

        $('#contract_turn_off').validate({
            submitHandler: function () {
                ajaxCall($('#contract_turn_off'), "{{ route('customer.TurnOffQuote') }}", $('#contract_turn_off').find('.submitbtn'), "{{ route('quotation_management') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

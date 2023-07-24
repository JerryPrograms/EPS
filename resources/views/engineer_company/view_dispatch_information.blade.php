@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .error {
            display: block;
        }

        .custom_color_gray_2 {
            color: black !important;
        }
    </style>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->
                <div class="main_content_section">

                    <!-- container-fluid -->

                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="createDispatchConfirmation">
                                        @csrf
                                        <!-- end table-responsive -->

                                        <div class="card_section_2">
                                            <div class="row ">
                                                <div class="prompt w-100"></div>
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">

                                                            {{ __('translation.Dispatch Confirmation') }}

                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2 text-center">1 / 4</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-5">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0 mb-4"> <span
                                                        class="bor_lef">&nbsp;</span>

                                                    {{ __('translation.Reception Information') }}

                                                </h4>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>

                                                        {{ __('translation.Building name') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input disabled type="text"
                                                           required name="site_name"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"

                                                           placeholder="{{ __('translation.site name') }}"

                                                           value="{{$dispatch->site_name}}"
                                                    >
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.Reception date and time') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input disabled type="datetime-local" required
                                                           name="reception_date_and_time"
                                                           class=" custom_input w-100"
                                                           aria-describedby="emailHelp"
                                                           placeholder="2022-05-30 5 PM "
                                                           value="{{$dispatch->reception_date_and_time}}"
                                                    >
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.Model and number') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input disabled type="text"
                                                           required name="model_and_type"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"

                                                           placeholder="{{ __('translation.type and number') }}"

                                                           value="{{$dispatch->model_and_type}}"
                                                    >
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.Submission details') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea disabled required name="submission_details"
                                                              class="form-control custom_color_gray_2"

                                                              placeholder="{{ __('translation.Receipt details: Receipt received..') }}"

                                                              rows="10">{{$dispatch->submission_details}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- form row 1 end  -->

                                        <!-- form row 2 start  -->

                                        <div class="card_section_2 mt-3">
                                            <div class="row ">
                                                <div class="col-lg-11">
                                                    <div></div>
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-5">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0 mb-4"> <span

                                                        class="bor_lef">&nbsp;</span>
                                                    {{ __('translation.Dispatch Information') }}

                                                </h4>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.Failure cause') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea disabled required name="failure_cause"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="{{ __('translation.Write the cause of failure') }}"

                                                              rows="7">{{$dispatch->failure_cause}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.measures') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea disabled required name="measures"
                                                              class="form-control custom_color_gray_2"

                                                              placeholder="{{ __('translation.Write action details') }}"

                                                              rows="7">{{$dispatch->measures}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.undecided') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea disabled required name="undecided"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="{{ __('translation.undecided') }}"
                                                              rows="7">{{$dispatch->undecided}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.dispatcher') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input disabled type="text" required name="dispatcher"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="{{ __('translation.Fill in pending issues') }}"

                                                           value="{{$dispatch->dispatcher}}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span

                                                            class="star_section">*</span>
                                                        {{ __('translation.Customer Confirmation') }}
                                                    </label>

                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <div id="previous_image" class="w-100">
                                                        <label

                                                            class="form-label ">
                                                            {{ __('translation.Contact Person / Signature') }}</label>
                                                        @if(!empty($dispatch->output))
                                                            <img class="w-100" src="{{asset($dispatch->output)}}">
                                                        @else
                                                            <div>
                                                                <span class="badge bg-danger text-white">Not signed</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        @if(activeGuard() != 'web')
                                            <div class="">
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-2">
                                                        <button
                                                            onclick="window.location.href='{{route("ec.ListDispatchInformation",$dispatch->getCustomer->user_uid)}}'"
                                                            type="button" class="confirm_button_2 mb-5 mt-5 submitbtn">
                                                            {{ __('translation.Back') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="">
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-2">
                                                        <button data-bs-toggle="modal"
                                                                data-bs-target="#customerTurnOffAlarm"
                                                                onclick="set_contract_id('{{$dispatch->id}}')"
                                                                class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm btn-background-light-yellow">
                                                            <img src="{{ asset('engineer_company/images/alarm.png') }}">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- form row 4 end  -->
                                    </form>
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
@section('modal')
    <div id="customerTurnOffAlarm" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">{{__('Turn Off Alarm')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="contract_turn_off">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="col-md-12">
                                <div class="prompt w-100"></div>
                            </div>
                            <p>{{__('Are you sure you want to turn off alarm?')}}</p>
                            <input name="id" id="contract_id" hidden>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">{{__('translation.close')}}
                        </button>
                        <button type="submit"
                                class="btn btn-primary waves-effect waves-light submitbtn">{{__('Turn Off')}}</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('custom-script')
    <script>
        function set_contract_id(id) {
            $('#contract_id').val(id);
        }

        $('#contract_turn_off').validate({
            submitHandler: function () {
                ajaxCall($('#contract_turn_off'), "{{ route('customer.TurnOffContract') }}", $('#contract_turn_off').find('.submitbtn'), "{{ route('contract_management') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

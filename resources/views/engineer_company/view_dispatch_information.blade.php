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
                                                            {{ __('translation.site name') }}
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
                                                    <input disabled type="datetime-local" required name="reception_date_and_time"
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
                                                        <img class="w-100" src="{{asset($dispatch->output)}}">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="">
                                            <div class="row justify-content-end">
                                                <div class="col-lg-2">
                                                    <button onclick="window.location.href='{{route("ec.ListDispatchInformation",$dispatch->getCustomer->user_uid)}}'" type="button" class="confirm_button_2 mb-5 mt-5 submitbtn">Back
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
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
 
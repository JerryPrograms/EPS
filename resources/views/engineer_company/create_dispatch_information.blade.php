@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .error {
            display: block;
        }
        .custom_color_gray_2{
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
                                                <div class="col-lg-11">
                                                    <div class="prompt w-100"></div>
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            {{ __('translation.Dispatch_Confirmation') }}
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
                                                        {{ __('translation.Reception_Information') }}
                                                </h4>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.site_name') }}
                                                        </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="text"
                                                           required name="site_name"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="{{ __('translation.site_name') }}">
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
                                                    <input type="date" required name="reception_date_and_time"
                                                           class=" custom_input w-100"
                                                           aria-describedby="emailHelp"
                                                           placeholder="2022-05-30 5 PM ">
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.Model_and_number') }}
                                                        </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="text"
                                                           required name="model_and_type"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="{{ __('translation.type_and_number') }}">
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.Submission_details') }}
                                                        </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="submission_details"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="{{ __('translation.Receipt_details:_Receipt_received..') }}"
                                                              rows="10"></textarea>
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
                                                        {{ __('translation.Dispatch_Information') }}
                                                </h4>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.Failure_cause') }}
                                                        </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="failure_cause"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="{{ __('translation.Write_the_cause_of_failure') }}"
                                                              rows="7"></textarea>
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
                                                    <textarea required name="measures"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="{{ __('translation.Write_action_details') }}"
                                                              rows="7"></textarea>
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
                                                    <textarea required name="undecided"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="고장원인 작성"
                                                              rows="7"></textarea>
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
                                                    <input type="text" required name="dispatcher"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="{{ __('translation.Fill_in_pending_issues') }}">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>
                                                            {{ __('translation.Customer_Information') }}
                                                        </label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <div class="w-100">
                                                        <label
                                                            class="form-label ">
                                                            {{ __('translation.Contact_Person_/_Signature') }}
                                                        </label>
                                                        <canvas id="signature-pad" class="signature-pad w-100" style="touch-action: none;
                                                    height: 223px;
                                                    border: 1px solid;
                                                    padding: 10px;"></canvas>
                                                        <button class="btn btn-danger" type="button" id="clear"><i
                                                                class="fa fa-remove"></i></button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="">
                                            <div class="row justify-content-end">
                                                <div class="col-lg-2">
                                                    <button class="confirm_button_2 mb-5 mt-5 submitbtn">
                                                        {{ __('translation.confirm') }}
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
@section('custom-script')
    <script>
        var canvas = document.getElementById('signature-pad');

        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
        function resizeCanvas() {
            // When zoomed out to less than 100%, for some very strange reason,
            // some browsers report devicePixelRatio as less than 1
            // and only part of the canvas is cleared then.
            var ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });
    </script>
    <script src="{{asset('signature_plugin/assets/json2.min.js')}}"></script>
    <script>
        //create sub part
        $('#createDispatchConfirmation').validate({
            submitHandler: function () {
                ajaxCall($('#createDispatchConfirmation'), "{{ route('CreateDispatchInformation') }}", $('#createDispatchConfirmation').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
            }
        });
    </script>
@endsection

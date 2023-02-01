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
                                                        <h4 class="card_tittle_2">Dispatch Confirmation
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
                                                        class="bor_lef">&nbsp;</span> Reception Information
                                                </h4>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span> Site name</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="text"
                                                           required name="site_name"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="site name"
                                                           value="{{$dispatch->site_name}}"
                                                    >
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span> Reception date and
                                                        time</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="datetime-local" required name="reception_date_and_time"
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
                                                            class="star_section">*</span> Model and number</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="text"
                                                           required name="model_and_type"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="type and number"
                                                           value="{{$dispatch->model_and_type}}"
                                                    >
                                                </div>
                                            </div>


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Submission details</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="submission_details"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="Receipt details: Receipt received.."
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
                                                        class="bor_lef">&nbsp;</span> Dispatch Information
                                                </h4>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Failure cause</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="failure_cause"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="Write the cause of failure"
                                                              rows="7">{{$dispatch->failure_cause}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Measures</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="measures"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="Write action details"
                                                              rows="7">{{$dispatch->measures}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Undecided</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <textarea required name="undecided"
                                                              class="form-control custom_color_gray_2"
                                                              placeholder="undecided"
                                                              rows="7">{{$dispatch->undecided}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Dispatcher</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <input type="text" required name="dispatcher"
                                                           class=" custom_input w-100 custom_color_gray"
                                                           aria-describedby="emailHelp"
                                                           placeholder="Fill in pending issues"
                                                           value="{{$dispatch->dispatcher}}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-12">
                                                    <label
                                                        class="form-label "> <span
                                                            class="star_section">*</span>Customer Confirmation</label>
                                                </div>
                                                <div class="col-lg-8 col-12">
                                                    <div id="canvas_image" class="w-100 ">
                                                        <label
                                                            class="form-label ">Contact Person /
                                                            Signature</label>
                                                        <canvas id="signature-pad" name="signature"
                                                                class="signature-pad w-100" style="touch-action: none;
                                                    height: 223px;
                                                    border: 1px solid;
                                                    padding: 10px;"></canvas>
                                                        <span id="canvas_error" class="error d-none">Please add
                                                            signature</span>
                                                        <input type="hidden" name="output" class="output">
                                                        <button class="btn btn-danger" type="button" id="clear"><i
                                                                class="fa fa-remove"></i></button>
                                                    </div>
                                                    <div id="previous_image" class="w-100">
                                                        <label
                                                            class="form-label ">Contact Person /
                                                            Signature</label>
                                                        <img class="w-100" src="{{asset($dispatch->output)}}">
                                                        <button onclick="ChangeSignature()" class="btn btn-primary"
                                                                type="button" id="clear"><i
                                                                class="fa fa-edit"></i></button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- form row 2 end  -->


                                        <!-- form row 4 start  -->
                                        <div class="">
                                            <div class="row justify-content-end">
                                                <div class="col-lg-2">
                                                    <button class="confirm_button_2 mb-5 mt-5 submitbtn">Confirm
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form row 4 end  -->
                                        <input name="dispatch_id" value="{{$dispatch->id}}" hidden>
                                        <input name="customer_id" value="{{$dispatch->customer_id}}" hidden>
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

        $('#canvas_image').addClass('d-none');

        function ChangeSignature() {
            $('#canvas_image').removeClass('d-none');
            $('#previous_image').addClass('d-none');
        }
    </script>
    <script src="{{asset('signature_plugin/assets/json2.min.js')}}"></script>
    <script>
        //create sub part
        $('#createDispatchConfirmation').validate({

            submitHandler: function () {
                var imageData = signaturePad.toDataURL();
                document.getElementsByName("output")[0].setAttribute("value", imageData);
                if (signaturePad.isEmpty()) {
                    document.getElementsByName("output")[0].setAttribute("value", '1');
                }

                ajaxCall($('#createDispatchConfirmation'), "{{ route('CreateDispatchInformation') }}", $('#createDispatchConfirmation').find('.submitbtn'), "{{ route('ec.EditDispatchInformation',request()->segment(3)) }}", onRequestSuccess);

            }
        });


    </script>
@endsection

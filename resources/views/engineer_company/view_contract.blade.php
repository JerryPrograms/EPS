@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content" id="print_div">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card_section_2 mb-4 pt-0">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-12">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="fw-bold mb-2 ms-1">.</span>
                                                        <h4 class="card_tittle_2 d-flex align-items-center mb-0">
                                                            {{ __('translation.Contract Details') }}
                                                        </h4>
                                                    </div>
                                                    <button onclick="printForm($('#print_div'))" type="button" class="file_button mb-2">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="addContractForm">
                                        @csrf
                                        <div class="prompt"></div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="customer_number"
                                                           class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="customer_number"
                                                           placeholder="{{ __('translation.Enter customer number') }}"
                                                           value="{{ $contract->get_customer->customer_number }}"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="contract_date"
                                                           class="mb-0">{{ __('translation.Contract Date') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input disabeled class="form-control form-theme-input"
                                                           name="contract_date" id="contract_date"
                                                           placeholder="{{ __('translation.Enter contract date') }}"
                                                           value="{{$contract->contract_date}}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $address = $contract->get_customer->GetBuildingInfo()->pluck('address')->implode(',');
                                            $building_name = $contract->get_customer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                        @endphp
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="building_name"
                                                           class="mb-0">{{ __('translation.Building Name') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="building_name"
                                                           placeholder="{{ __('translation.Enter building name') }}"
                                                           value="{{ $building_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="building_address"
                                                           class="mb-0">{{ __('translation.Building Address') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="building_address"
                                                           placeholder="{{ __('translation.Enter building address') }}"
                                                           value="{{ $address }}"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="contract_file"
                                                           class="mb-0">{{ __('translation.Upload Contract') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <a href="{{asset($contract->contract_file)}}">View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    {!! $contract->contract_description !!}
                                                </div>
                                            </div>
                                        </div>
                                        <input name="id" value="{{$contract->id}}" hidden="">

                                        @if(empty($contract->output))

                                            <div class="form-group mb-3"
                                                 style="padding: 12px 20px;border: 1px solid #E1E3EC;">
                                                <div class="d-flex align-items-center justify-content-between pb-2">
                                                    <h4 class="mb-0" style="font-size: 14px;">
                                                        {{ __('translation.Customer side verifier') }}</h4>
                                                    <button class="btn btn-danger btn-sm" type="button"
                                                            id="clear">{{ __('translation.clear') }}</button>
                                                </div>
                                                <canvas id="signature-pad" name="signature"
                                                        class="signature-pad w-100"
                                                        style="touch-action: none;height: 180px;padding: 10px;border: 1px solid #E1E3EC;"></canvas>
                                                <input type="hidden" name="output" class="output">
                                                <small id="canvas_error"
                                                       class="text-danger d-none">{{ __('translation.Signature is required') }}</small>


                                            </div>


                                        @else
                                            <div class="form-group mb-3"
                                                 style="padding: 12px 20px;border: 1px solid #E1E3EC;">
                                            <img src="{{asset($contract->output)}}" class="img-fluid">
                                            </div>
                                        @endif


                                        <div class="d-flex">
                                            <div class="form-btn me-2">
                                                <a href="{{route('contracts_management_list',$contract->get_customer->user_uid)}}"
                                                   id="addContractBtn"
                                                   class="btn btn-primary">{{ __('translation.go back') }}</a>
                                            </div>
                                            @if(empty($contract->output))
                                                <div class="form-btn">
                                                    <button class="btn btn-primary"
                                                            type="submit">{{__('translation.save')}}</button>
                                                </div>
                                            @endif
                                        </div>

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

        window.onresize = resizeCanvas();
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });


        $('#addContractForm').validate({
            submitHandler: function () {
                var imageData = signaturePad.toDataURL();
                document.getElementsByName("output")[0].setAttribute("value", imageData);
                if (signaturePad.isEmpty()) {
                    $('#canvas_error').removeClass('d-none');
                } else {
                    ajaxCall($('#addContractForm'), "{{ route('SignContract') }}", $('#addContractForm'),
                        "{{ route('contract_management_list',$contract->get_customer->id) }}", onRequestSuccess);
                }
            }
        });

    </script>


    {{--    <script>--}}
    {{--        // Intializing summer note--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#contract_description').summernote({--}}
    {{--                height: 150--}}
    {{--            });--}}
    {{--        });--}}

    {{--        // For custom file input--}}
    {{--        $('#contract_file').change(function () {--}}
    {{--            var file = $('#contract_file')[0].files[0].name;--}}
    {{--            $(this).prev('.position-absolute').find('.contract-file-name').text(file);--}}
    {{--        });--}}

    {{--        $('#addContractForm').validate({--}}
    {{--            submitHandler: function () {--}}
    {{--                ajaxCall($('#addContractForm'), "{{ route('add_contract_action') }}", $('#addContractBtn'),--}}
    {{--                    "{{ route('contract_management_list',$contract->id) }}", onRequestSuccess);--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection

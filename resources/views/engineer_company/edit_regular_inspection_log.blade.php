@extends('engineer_company.includes.layout')
@section('body')
    @php
        $check_content = json_decode($customer->check_contents,true);
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    @if (!empty($customer->getCustomer->BuildingInformation) && !empty($customer->getCustomer->ParkingFacilityCertificate))
                        <form id="inspectionForm">
                            @csrf
                            <input type="hidden" name="user_uid" value="{{ $customer->getCustomer->id }}">
                            <input type="hidden" name="inspection_id" value="{{ $customer->id }}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card_section_2 mb-4 pt-0">
                                                <div class="row align-items-baseline">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="fw-bold mb-2 ms-1">.</span>
                                                            <h4 class="card_tittle_2 d-flex align-items-center mb-0">
                                                                {{ __('translation.Parking Facility Periodic Inspection Table') }}
                                                                - {{ __('translation.'.str_replace('_', ' ', $customer->getCustomer->ParkingFacilityCertificate->type)) }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $address = $customer->getCustomer->GetBuildingInfo()->pluck('address')->implode(',');
                                                $building_name = $customer->getCustomer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                            @endphp
                                            <div class="prompt"></div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="building_name"
                                                               class="mb-0">{{ __('translation.Building Name') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                               id="building_name"
                                                               value="{{ $building_name }}"
                                                               disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="inspection_date"
                                                               class="mb-0">{{ __('translation.Inspection date') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="date" class="form-control form-theme-input"
                                                               name="inspection_date"
                                                               value="{{ $customer->inspection_date->format('Y-m-d') }}"
                                                               id="inspection_date" required @if(activeGuard() == 'web') readonly @endif>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="type_and_number"
                                                               class="mb-0">{{ __('translation.Type and number') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                               id="type_and_number"
                                                               value="{{ __('translation.'.str_replace('_', ' ', $customer->type)) }}"
                                                               disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="arrival_time"
                                                               class="mb-0">{{ __('translation.Arrival time') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input" @if(activeGuard() != 'web') hidden @endif
                                                               id="arrival_time"
                                                               value="{{ $customer->arrival_time }}"
                                                               name="arrival_time" required @if(activeGuard() == 'web') readonly @endif>
                                                        @if(activeGuard() != 'web')
                                                        <div class="w-50" id="arrival_time_picker"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="completion_time"
                                                               class="mb-0">{{ __('translation.Completion time') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input @if(activeGuard() != 'web') hidden @endif type="text" class="form-control form-theme-input"
                                                               id="completion_time"
                                                               value="{{ $customer->completion_time }}"
                                                               name="completion_time" required @if(activeGuard() == 'web') readonly @endif>
                                                        @if(activeGuard() != 'web')
                                                        <div class="w-50" id="completion_time_picker"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="checker"
                                                               class="mb-0">{{ __('translation.Checker') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                               id="checker" name="inspection_manager"
                                                               value="{{ $customer->inspection_manager }}"
                                                               required @if(activeGuard() == 'web') readonly @endif>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card_section_2 mb-4 pt-0">
                                                <div class="row align-items-baseline">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <span class="fw-bold mb-2 ms-1">.</span>
                                                            <h4
                                                                class="card_tittle_2 d-flex align-items-center mb-2 text-capitalize">
                                                                {{ __('translation.Parking Facility Periodic Inspection Table') }}
                                                                -
                                                                {{ __('translation.'.str_replace('_', ' ', $customer->getCustomer->ParkingFacilityCertificate->type)) }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- accordion start --}}
                                            <div class="custom-accordion">
                                                @php
                                                    $loopContent = 0;
                                                @endphp
                                                @foreach ($file_content as $key => $item)
                                                    @php
                                                        $obj1 = new ArrayIterator($item);
                                                        $main_category = $obj1->key();
                                                    @endphp
                                                    {{-- accordion item start --}}
                                                    <div class="custom-accordion-item">
                                                        <div class="ca-action gap-2">
                                                            <div class="ca-action-left-content gap-2">
                                                                <div class="heading-text">
                                                                    <h4 class="mb-0">{{ $loop->index + 1 }}.
                                                                        {{ string_capitalize($main_category) }}</h4>
                                                                </div>
                                                                <div
                                                                    class="tags d-flex align-items-center gap-1 flex-wrap-wrap">
                                                                    @foreach($item->$main_category as $k => $v)
                                                                        @php
                                                                            $obj2 = new ArrayIterator($v);
                                                                            $sub_category = $obj2->key();
                                                                        @endphp
                                                                        <span
                                                                            class="badge bg-light">{{ string_capitalize($sub_category) }}</span>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="ca-action-right-content">
                                                                <i class="fa fa-chevron-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ca-content">
                                                            <div class="table-responsive">
                                                                <table class="table table-inspection mb-0">
                                                                    <thead>
                                                                    <tr class="bg-light">
                                                                        <th
                                                                            class="text-center text-theme-dark min-width-600">
                                                                            {{ __('translation.Check contents') }}</th>
                                                                        <th class="text-center text-theme-dark">
                                                                            {{ __('translation.Situation') }}
                                                                        </th>
                                                                        <th class="text-center text-theme-dark">
                                                                            {{ __('translation.Inspection month') }}
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="bg-light">
                                                                        <th></th>
                                                                        <th>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-center gap-4">
                                                                                <p
                                                                                    class="mb-0 text-black inspection-grade">
                                                                                    {{ __('translation.A') }}
                                                                                </p>
                                                                                <p
                                                                                    class="mb-0 text-black inspection-grade">
                                                                                    {{ __('translation.B') }}
                                                                                </p>
                                                                                <p
                                                                                    class="mb-0 text-black inspection-grade">
                                                                                    {{ __('translation.C') }}
                                                                                </p>
                                                                            </div>
                                                                        </th>
                                                                        <th></th>
                                                                    </tr>
                                                                    @foreach($item->$main_category as $k2 => $v2)
                                                                        @php
                                                                            $obj3 = new ArrayIterator($v2);
                                                                            $sub_category_accordion = $obj3->key();
                                                                        @endphp
                                                                        {{-- panel start --}}
                                                                        <tr class="bg-theme-light-sky">
                                                                            <td colspan="3"
                                                                                class="text-left text-black fw-bold">
                                                                                {{ string_capitalize($sub_category_accordion) }}</td>
                                                                        </tr>
                                                                        @foreach($v2->$sub_category_accordion as $k3 => $v3)
                                                                            <tr>
                                                                                <td class="text-black text-left">{{ $v3->question_title }}</td>
                                                                                <td>
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-center gap-4">
                                                                                        <input type="radio"
                                                                                               class="inspection-grade @if(activeGuard() == 'web') non-editable-radio @endif"
                                                                                               name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                               value="양호" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == '양호' ? 'checked' : '' }}>
                                                                                        <input type="radio"
                                                                                               class="inspection-grade @if(activeGuard() == 'web') non-editable-radio @endif"
                                                                                               name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                               value="주의" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == '주의' ? 'checked' : '' }}>
                                                                                        <input type="radio"
                                                                                               class="inspection-grade @if(activeGuard() == 'web') non-editable-radio @endif"
                                                                                               name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                               value="불량" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == '불량' ? 'checked' : '' }}>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-black">{{  $v3->inspection_duration }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        {{-- panel end --}}
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- accordion item end --}}
                                                    @php
                                                        $loopContent++;
                                                    @endphp
                                                @endforeach

                                                {{-- accordion item start --}}
                                                <div class="custom-accordion-item">
                                                    <div class="ca-action gap-2">
                                                        <div class="ca-action-left-content gap-2">
                                                            <div class="heading-text">
                                                                <h4 class="mb-0">{{ $loopContent + 1 }}
                                                                    . {{ __('translation.Special notes') }}</h4>
                                                            </div>
                                                        </div>
                                                        <div class="ca-action-right-content">
                                                            <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ca-content">
                                                        <div class="table-responsive">
                                                            <table class="table table-inspection mb-0">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <textarea name="special_notes"
                                                                                  id="special_notes" rows="5"
                                                                                  class="form-control"
                                                                                  style="border-radius: 0;" @if(activeGuard() == 'web') readonly @endif>{{ $customer->special_notes }}</textarea>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- accordion item end --}}
                                                <div class="form-group mt-3"
                                                     style="padding: 12px 20px;border: 1px solid #E1E3EC;">
                                                    <div class="d-flex align-items-center justify-content-between pb-2">
                                                        <h4 class="mb-0" style="font-size: 14px;">
                                                            . {{ __('translation.Customer side verifier') }}</h4>
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
                                            </div>
                                            {{-- accordion end --}}
                                            <div class="form-action mt-3 text-right">
                                                <button type="submit" id="formBtn"
                                                        class="btn btn-primary">{{ __('translation.Edit Inspection') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </form>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div
                                            class="alert alert-danger mb-0">{{ __('translation.Please enter Building information & Parking facility certification information') }}
                                            .<a
                                                href="{{ route('regular_inspection_log', $customer->getCustomer->user_uid) }}"
                                                class="text-primary mx-2 text-decoration-underline">{{ __('translation.Back') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
    </script>
    <script src="{{asset('signature_plugin/assets/json2.min.js')}}"></script>
    <script>
        $('.custom-accordion-item .ca-action').on('click', function () {
            var accordionIcon = $(this).find('.ca-action-right-content').find('i');
            $(this).next('.ca-content').slideToggle();
            if (accordionIcon.hasClass('rotate-180')) {
                accordionIcon.removeClass('rotate-180');
            } else {
                accordionIcon.addClass('rotate-180');
            }
        });
        $('#inspectionForm').validate({
            submitHandler: function () {

                var imageData = '';


                if(signaturePad.isEmpty())
                {
                    imageData = ''
                    document.getElementsByName("output")[0].setAttribute("value", imageData);
                }else{
                    imageData = signaturePad.toDataURL();
                    document.getElementsByName("output")[0].setAttribute("value", imageData);
                }
                if("{{ activeGuard() }}" != 'web'){
                    ajaxCall($('#inspectionForm'), "{{ route('edit_inspection_action') }}", $('#formBtn'),
                    "{{ route('regular_inspection_log',$customer->getCustomer->user_uid) }}", onRequestSuccess);
                }else{
                    ajaxCall($('#inspectionForm'), "{{ route('edit_inspection_action') }}", $('#formBtn'),
                    "{{ route('regular_inspection_logs') }}", onRequestSuccess);
                }
            }
        });


        $("#arrival_time_picker").timepicker({
            value: $('#arrival_time').val(),
            onChange: function (value) {
                $('#arrival_time').val(value);
            }
        });
        $("#completion_time_picker").timepicker({
            value: $('#completion_time').val(),
            onChange: function (value) {
                $('#completion_time').val(value);
            }
        });


    </script>
@endsection

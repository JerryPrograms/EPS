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
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prompt"></div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="building_name" class="mb-0">{{ __('translation.Building Name') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                            id="building_name" value="{{ $customer->getCustomer->building_name }}"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="inspection_date" class="mb-0">{{ __('translation.Inspection date') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="date" class="form-control form-theme-input"
                                                            name="inspection_date" value="{{ $customer->inspection_date->format('Y-m-d') }}" id="inspection_date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="type_and_number" class="mb-0">{{ __('translation.Type and number') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                            id="type_and_number"
                                                            value="{{ str_replace('_', ' ', $customer->type) }}"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="arrival_time" class="mb-0">{{ __('translation.Arrival time') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="date" class="form-control form-theme-input"
                                                            id="arrival_time" value="{{ $customer->arrival_time->format('Y-m-d') }}" name="arrival_time" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="completion_time" class="mb-0">{{ __('translation.Completion time') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="date" class="form-control form-theme-input"
                                                            id="completion_time" value="{{ $customer->completion_time->format('Y-m-d') }}" name="completion_time" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="checker" class="mb-0">{{ __('translation.Checker') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                            id="checker" name="inspection_manager"
                                                            value="{{ $customer->getCustomer->ParkingFacilityCertificate->producer }}"
                                                            required>
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
                                                                {{ __('translation.Parking Facility Periodic Inspection Table') }} -
                                                                {{ str_replace('_', ' ', $customer->getCustomer->ParkingFacilityCertificate->type) }}
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
                                                                        <span class="badge bg-light">{{ string_capitalize($sub_category) }}</span>
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
                                                                                        class="inspection-grade"
                                                                                        name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                        value="A" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == 'A' ? 'checked' : '' }}>
                                                                                    <input type="radio"
                                                                                        class="inspection-grade"
                                                                                        name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                        value="B" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == 'B' ? 'checked' : '' }}>
                                                                                    <input type="radio"
                                                                                        class="inspection-grade"
                                                                                        name="inspection[{{ $main_category }}][{{ $sub_category_accordion }}][{{ $v3->input_name }}]"
                                                                                        value="C" {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] == 'C' ? 'checked' : '' }}>
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
                                                                <h4 class="mb-0">{{ $loopContent + 1 }}. {{ __('translation.Special notes') }}</h4>
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
                                                                            <textarea name="special_notes" id="special_notes" rows="5" class="form-control" style="border-radius: 0;">{{ $customer->special_notes }}</textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- accordion item end --}}
                                            </div>
                                            {{-- accordion end --}}
                                            <div class="form-action mt-3 text-right">
                                                <button type="submit" id="formBtn" class="btn btn-primary">{{ __('translation.Edit Inspection') }}</button>
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
                                        <div class="alert alert-danger mb-0">{{ __('translation.Please enter Building information & Parking facility certification information') }}.<a
                                                href="{{ route('regular_inspection_log', $customer->getCustomer->user_uid) }}"
                                                class="text-primary mx-2 text-decoration-underline">{{ __('translation.Back') }}</a></div>
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
        $('.custom-accordion-item .ca-action').on('click', function() {
            var accordionIcon = $(this).find('.ca-action-right-content').find('i');
            $(this).next('.ca-content').slideToggle();
            if (accordionIcon.hasClass('rotate-180')) {
                accordionIcon.removeClass('rotate-180');
            } else {
                accordionIcon.addClass('rotate-180');
            }
        });
        $('#inspectionForm').validate({
            submitHandler: function() {
                ajaxCall($('#inspectionForm'), "{{ route('edit_inspection_action') }}", $('#formBtn'),
                    "{{ route('regular_inspection_log',$customer->getCustomer->user_uid) }}", onRequestSuccess);
            }
        });
    </script>
@endsection

@extends('engineer_company.includes.layout')
@section('body')
    @php
        $check_content = json_decode($customer->check_contents, true);
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    @if (!empty($customer->getCustomer->BuildingInformation) && !empty($customer->getCustomer->ParkingFacilityCertificate))
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
                                                            {{ __('translation.Parking Facility Periodic Inspection Table') }} - {{ __('translation.'.str_replace('_', ' ', $customer->getCustomer->ParkingFacilityCertificate->type)) }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive data-set-list">
                                            <table class="table mb-0 table-bordered table-striped table-inspection">
                                                <tbody>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Building Name') }}</th>
                                                    <td class="text-left">{{ $customer->getCustomer->building_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Inspection date') }}</th>
                                                    <td class="text-left">{{ $customer->inspection_date->format('Y-m-d') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Type and number') }}</th>
                                                    <td class="text-left">{{ __('translation.'.str_replace('_', ' ', $customer->getCustomer->ParkingFacilityCertificate->type) ) }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Arrival time') }}</th>
                                                    <td class="text-left">{{ $customer->arrival_time->format('Y-m-d') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Completion time') }}</th>
                                                    <td class="text-left">{{ $customer->completion_time->format('Y-m-d') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">{{ __('translation.Checker') }}</th>
                                                    <td class="text-left">{{ $customer->getCustomer->ParkingFacilityCertificate->producer }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
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
                                                $loopCount = 0;
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
                                                                @foreach ($item->$main_category as $k => $v)
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
                                                        <div class="table-responsive data-set-list">
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
                                                                @foreach ($item->$main_category as $k2 => $v2)
                                                                    @php
                                                                        $obj3 = new ArrayIterator($v2);
                                                                        $sub_category_accordion = $obj3->key();
                                                                    @endphp
                                                                    {{-- panel start --}}
                                                                    <tr class="bg-theme-light-sky">
                                                                        <td colspan="3"
                                                                            class="text-left text-black fw-bold">
                                                                            {{ string_capitalize($sub_category_accordion) }}
                                                                        </td>
                                                                    </tr>
                                                                    @foreach ($v2->$sub_category_accordion as $k3 => $v3)
                                                                        <tr>
                                                                            <td class="text-black text-left">
                                                                                {{ $v3->question_title }}</td>
                                                                            <td class="fw-bold text-dark">
                                                                                {{ $check_content[$main_category][$sub_category_accordion][$v3->input_name] }}
                                                                            </td>
                                                                            <td class="text-black">
                                                                                {{ $v3->inspection_duration }}</td>
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
                                                    $loopCount++;
                                                @endphp
                                            @endforeach

                                            {{-- accordion item start --}}
                                            <div class="custom-accordion-item">
                                                <div class="ca-action gap-2">
                                                    <div class="ca-action-left-content gap-2">
                                                        <div class="heading-text">
                                                            <h4 class="mb-0">{{ $loopCount + 1 }}
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
                                                                <td class="text-left text-dark">
                                                                    {{ $customer->special_notes }}
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- accordion item end --}}
                                            {{-- accordion item start --}}
                                            <div class="custom-accordion-item">
                                                <div class="ca-action gap-2">
                                                    <div class="ca-action-left-content gap-2">
                                                        <div class="heading-text">
                                                            <h4 class="mb-0">{{ $loopCount + 2 }}
                                                                . {{ __('translation.Customer side verifier') }}</h4>
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
                                                                    <img src="{{ asset($customer->signature) }}"
                                                                         alt="signature" class="img-fluid">
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

                                        @if(activeGuard() != 'web')
                                            <div class="form-action mt-3 text-right">
                                                <a href="{{ route('regular_inspection_log',$customer->getCustomer->user_uid) }}"
                                                   class="btn btn-primary">{{ __('translation.Back') }}</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    @else

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div
                                            class="alert alert-danger mb-0">{{ __('translation.Please enter Building information & Parking facility certification information') }}
                                            . <a
                                                href="{{ route('regular_inspection_log', $customer->getCustomer->user_uid) }}"
                                                class="text-primary mx-2 text-decoration-underline">Back</a></div>
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
        $('.custom-accordion-item .ca-action').on('click', function () {
            var accordionIcon = $(this).find('.ca-action-right-content').find('i');
            $(this).next('.ca-content').slideToggle();
            if (accordionIcon.hasClass('rotate-180')) {
                accordionIcon.removeClass('rotate-180');
            } else {
                accordionIcon.addClass('rotate-180');
            }
        });
    </script>
@endsection

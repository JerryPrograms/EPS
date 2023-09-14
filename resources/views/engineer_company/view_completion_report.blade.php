@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .contract-details-section {
            padding: 50px 0px 50px 50px;
            text-align: center;
        }

        .contract-details {
            padding: 50px 20px 100px 20px;
        }

        .construction-text_2 {
            font-size: 14px;
            color: black;
            font-weight: 500;
            text-align: left;
            width: 18%;
        }

        .construction-text {
            font-size: 14px;
            color: black;
            font-weight: 500;
        }

        .custom-padding-left {
            padding-left: 10px;
        }

        .construction-text {
            font-size: 14px;
            color: black;
            font-weight: 500;
        }

        .custom-padding-left {
            padding-left: 10px;
        }

        .customer-info-2 .table tr th {
            border: 1px solid #6F6F6F;
            color: black;
        }

        .table th {
            font-weight: 500;
            font-size: 12px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 0px !important;
        }
    </style>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->

                <!-- end row -->


                <!-- end page title -->

                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12 text-end mb-3">
                        <button onclick="printForm($('#print_form'))" type="button" class="file_button">
                            <img src="{{asset('engineer_company/images/Vector.png')}}">
                        </button>
                    </div>
                </div>
                <!-- end page title -->
                <div id="print_form" class="main_content_section">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="add_contract_completion_form">
                                        @csrf
                    
                                        <div class="main_content_section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                    
                                                        <div class="card-body">
                                                            <!-- end table-responsive -->
                    
                    
                                                            <div class="card_section_2">
                                                                <div class="row align-items-baseline">
                                                                    <div class="col-lg-11">
                                                                        <div class="">
                                                                            <h4 class="card_tittle_2">
                                                                                {{ __('translation.Construction Completion Report') }}
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            @csrf
                                                            <div class="prompt"></div>
                    
                                                            <div class="form-group my-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-6 col-12">
                                                                        <label for="customer_number" class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-6 col-12">
                                                                        <input type="text" class="form-control form-theme-input" id="customer_number"
                                                                            placeholder="{{ __('translation.Enter customer number') }}"
                                                                            value="{{ $completion_report->GetCustomer->customer_number }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="form-group mb-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-6 col-12">
                                                                        <label for="contract_date" class="mb-0">{{ __('translation.Contract Date') }}</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-6 col-12">
                                                                        <input type="date" class="form-control form-theme-input"
                                                                            name="contract_date" id="contract_date"
                                                                            placeholder="{{ __('translation.Enter contract date') }}" value="{{ $completion_report->contract_date }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="form-group mb-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-6 col-12">
                                                                        <label for="building_name" class="mb-0">{{ __('translation.Building Name') }}</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-6 col-12">
                                                                        @php
                                                                            $address = $completion_report->GetCustomer->GetBuildingInfo()->pluck('address')->implode(',');
                                                                            $building_name = $completion_report->GetCustomer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                                                        @endphp
                                                                        <input type="text" class="form-control form-theme-input" id="building_name"
                                                                            placeholder="{{ __('translation.Enter building name') }}"
                                                                            value="{{ $building_name }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="form-group mb-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-6 col-12">
                                                                        <label for="building_address" class="mb-0">{{ __('translation.Building Address') }}</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-6 col-12">
                                                                        <input type="text" class="form-control form-theme-input"
                                                                            id="building_address"
                                                                            placeholder="{{ __('translation.Enter building address') }}"
                                                                            value="{{ $completion_report->GetCustomer->BuildingInformation->address }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="form-group mb-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-2 col-md-6 col-12">
                                                                        <label for="construction_completion_file" class="mb-0">{{ __('translation.Upload Contract') }}</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-6 col-12">
                                                                        <div class="col-lg-10 col-md-6 col-12">
                                                                            <a href="{{asset($completion_report->construction_completion_file)}}" class="btn btn-sm btn-primary">{{ __('translation.View') }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-4">
                                                                <div class="row align-items-center">
                                                                    <div class="col-12">
                                                                        <div style="border: 1px solid #c8c8c8;" class="px-3 py-2">
                                                                            {!! $completion_report->construction_description !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <input name="added_by_user" value="{{ activeGuard() }}" hidden>
                                    </form>
                                    <!-- end table-responsive -->

                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="contract-details_2 border-0">

                                            @for($i = 0 ; $i < count(json_decode($completion_report->title)); $i++)
                                                <div class="contract-details-section">
                                                    <p class="construction-heading">{{json_decode($completion_report->title)[$i]}}
                                                    </p>

                                                    <div class="process-photo-section border-bottom-0">
                                                        <img src="{{asset(json_decode($completion_report->photo)[$i])}}"
                                                             class="w-100 mt-5">

                                                        <div class="customer-info-2 mt-5">
                                                            <div class="table-responsive">
                                                                <table class="table  mb-0">

                                                                    <thead>
                                                                    <tr>
                                                                        <th class="construction-text">{{__('translation.Site Name')}}</th>
                                                                        <th class="construction-text">{{json_decode($completion_report->site)[$i]}}
                                                                        </th>
                                                                        <th class="construction-text">{{__('translation.Date')}}</th>
                                                                        <th class="construction-text">{{json_decode($completion_report->date)[$i]}}
                                                                        </th>
                                                                    </tr>
                                                                    </thead>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- row end  -->
                    </div> --}}
                </div>
                <!-- end row -->


            </div>
        </div>
        <!-- end main content-->

    </div>

@endsection
@section('custom-script')
    <script>
        function printForm(form) {
            form.print({
                globalStyles: true,
                mediaPrint: false,
                stylesheet: null,
                noPrintSelector: ".no-print",
                iframe: true,
                append: null,
                prepend: null,
                manuallyCopyFormValues: true,
                deferred: $.Deferred(),
                timeout: 750,
                title: null,
                doctype: '<!doctype html>'
            });
        }
    </script>
@endsection

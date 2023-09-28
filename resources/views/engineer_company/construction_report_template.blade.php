<div id="print_form1" class="main_content_section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body p-0">
                    <!-- end table-responsive -->

                    <div class="card_section_2 p-0">
                        <div class="row align-items-baseline">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="card_tittle_2">
                                        {{ __('translation.Construction Completion Report') }}
                                    </h4>
                                    <button onclick="printForm($('#print_form'))" type="button" class="file_button mb-2">
                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <a href="{{asset($completion_report->construction_completion_file)}}">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div>
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

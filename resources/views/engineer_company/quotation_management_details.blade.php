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
                                                    <h4 class="card_tittle_2 d-flex align-items-center">
                                                        {{ __('translation.Quotation') }}
                                                    </h4>
                                                </div>
                                                <button onclick="printForm($('#print_div'))" type="button" class="file_button mb-2">
                                                    <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form>
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
                                                       value="{{ $getQuote->GetCustomer->customer_number }}"
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
                                                <input disabled type="text" class="form-control form-theme-input"
                                                       name="contract_date" id="contract_date"
                                                       placeholder="{{ __('translation.Enter contract date') }}"
                                                       value="{{\Carbon\Carbon::parse($getQuote->contract_date)->format('Y-m-d');}}"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $address = $getQuote->GetCustomer->GetBuildingInfo()->pluck('address')->implode(',');
                                        $building_name = $getQuote->GetCustomer->GetBuildingInfo()->pluck('building_name')->implode(',');
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
                                                <a href="{{asset($getQuote->quote_file)}}">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                {!! $getQuote->quote_description !!}
                                            </div>
                                        </div>
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

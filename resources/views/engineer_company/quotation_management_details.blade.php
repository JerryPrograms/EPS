@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class=" mb-0">
                                        <div>
                                            <!-- end table-responsive -->
                                            <div class="row p-3">
                                                <div class="col-lg-12 col-3" style="text-align: end;">
                                                    <div class="file_main_section">
                                                        <button type="button" onclick="printForm($('.dsadasda'))"
                                                            class="file_button">
                                                            <img src="{{ asset('engineer_company/images/Vector.png') }}">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form row 1 start  -->
                                            <div class="row p-3">
                                                <form>


                                                    <div class="row mt-4">
                                                        <div class="col-lg-5 col-9 p-0">
                                                            <h4
                                                                class="card-title mt-2 border-bottom-0 mb-3 custom_margin_2">
                                                                <span class="bor_lef">&nbsp;</span>
                                                                {{ __('translation.customer information') }}
                                                            </h4>
                                                        </div>
                                                    </div>


                                                    <div class="row align-items-center mt-2 quoatation-info-form">
                                                        <div class="col-lg-3 col-md-12">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label custom-lab-2 mb-0">
                                                                <span class="star_section">*</span>
                                                                {{ __('translation.customer') }} ..
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <input type="email" class="form-control custom_input"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                disabled value="{{ $getQuote->GetCustomer->company_name }}"
                                                                placeholder="{{ __('translation.Enter contract date') }}">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mt-4 quoatation-info-form">
                                                        <div class="col-lg-3 col-md-12">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label custom-lab-2 mb-0">

                                                                <span
                                                                    class="star_section">*</span>{{ __('translation.Manager Name') }}..
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <input type="email" class="form-control custom_input"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                disabled
                                                                value="{{ $getQuote->GetCustomer->BuildingInformation->building_manager_name }}"
                                                                placeholder="{{ __('translation.Enter building name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mt-4 quoatation-info-form">
                                                        <div class="col-lg-3 col-md-12">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label custom-lab-2 mb-0">
                                                                <span
                                                                    class="star_section">*</span>{{ __('translation.Manager Contact') }}
                                                                ..
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <input type="email" class="form-control col-lg-8 custom_input"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                disabled value="{{ $getQuote->contract_date }}"
                                                                placeholder="{{ __('translation.Enter contract date') }}">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mt-4 quoatation-info-form">
                                                        <div class="col-lg-3 col-md-12">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label custom-lab-2 mb-0">
                                                                <span
                                                                    class="star_section">*</span>{{ __('translation.Quote File') }}
                                                                ..
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <a href="{{ $getQuote->quote_file }}" class="btn btn-success" target="_blank">View</a>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mt-4 quoatation-info-form">
                                                        <div class="col-lg-3 col-md-12">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label custom-lab-2 mb-0">
                                                                <span
                                                                    class="star_section">*</span>{{ __('translation.Quote Description') }}
                                                                ..
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <div style="border: 1px solid #f2f2f2;padding: 10px;">{!! $getQuote->quote_description !!}</div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-5 mb-5">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-3">
                                                                <p class="modal-footer-text m-0 p-0">
                                                                    {{ now()->format('D M Y ') }}</p>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p class="modal-footer-text m-0 p-0">
                                                                    {{ __('translation.EPS Co Ltd') }}
                                                                    .</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                            <!-- form row 1 end  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection

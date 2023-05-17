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
                                    <div class="card_section_2 mb-4 pt-0">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-12">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold mb-2 ms-1">.</span>
                                                    <h4 class="card_tittle_2 d-flex align-items-center mb-0">
                                                        {{ __('translation.Add Contract') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="addContractForm">
                                        @csrf
                                        <div class="prompt"></div>
                                        <div class="form-group mb-4">
                                            <input disabeled type="text" class="form-control form-theme-input"
                                                   id="customer_number"
                                                   placeholder="{{ __('translation.Enter customer number') }}"
                                                   value="{{ $contract->type }}" disabled>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="customer_number"
                                                           class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="customer_number"
                                                           placeholder="{{ __('translation.Enter customer number') }}"
                                                           value="{{ $contract->get_customer->customer_number }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="contract_date"
                                                           class="mb-0">{{ __('translation.Contract Date') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input disabeled  class="form-control form-theme-input"
                                                           name="contract_date" id="contract_date"
                                                           placeholder="{{ __('translation.Enter contract date') }}"
                                                           value="{{$contract->contract_date}}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="building_name"
                                                           class="mb-0">{{ __('translation.Building Name') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="building_name"
                                                           placeholder="{{ __('translation.Enter building name') }}"
                                                           value="{{ $contract->get_customer->GetBuildingInfo->building_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="building_address"
                                                           class="mb-0">{{ __('translation.Building Address') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input disabeled type="text" class="form-control form-theme-input"
                                                           id="building_address"
                                                           placeholder="{{ __('translation.Enter building address') }}"
                                                           value="{{ $contract->get_customer->GetBuildingInfo->address }}"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="contract_file"
                                                           class="mb-0">{{ __('translation.Upload Contract') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
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
                                        <div class="form-btn">
                                            <a href="{{route('contracts_management_list',$contract->get_customer->user_uid)}}" id="addContractBtn" class="btn btn-primary">{{ __('translation.go back') }}</a>
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

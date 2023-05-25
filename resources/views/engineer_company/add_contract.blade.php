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
                                    @if (empty($customer->BuildingInformation))
                                        <div class="alert alert-danger">{{ __('translation.Please add building information first to countinue') }} : <a class="text-danger text-decoration-underline" href="{{ route('ec.CreateBuildingInfo',$customer->user_uid) }}">Click Here</a>
                                        </div>
                                    @else
                                        <form id="addContractForm">
                                            @csrf
                                            <div class="prompt"></div>
                                            <input type="hidden" value="{{ $customer->id }}" name="customer_id">
                                            <div class="form-group mb-4">
                                                <select name="contract_type" class="form-control" required>
                                                    <option value="">{{ __('translation.Contract Type') }}</option>
                                                    <option value="daily">{{ __('translation.daily') }}</option>
                                                    <option value="monthly">{{ __('translation.monthly') }}</option>
                                                    <option value="yearly">{{ __('translation.yearly') }}</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="customer_number" class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input" id="customer_number"
                                                            placeholder="{{ __('translation.Enter customer number') }}"
                                                            value="{{ $customer->customer_number }}" disabled>
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
                                                            placeholder="{{ __('translation.Enter contract date') }}" required>
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
                                                            $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
                                                            $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
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
                                                            value="{{ $customer->BuildingInformation->address }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label for="contract_file" class="mb-0">{{ __('translation.Upload Contract') }}</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <div class="position-relative">
                                                            <div class="position-absolute">
                                                                <label for="contract_file"
                                                                    class="btn btn-sm btn-outline-success btn-theme-success-outline mb-0">
                                                                    <img src="{{ asset('engineer_company/assets/images/aroow.png') }}"alt="Upload"
                                                                        height="15">
                                                                </label>
                                                                <small class="contract-file-name"></small>
                                                            </div>
                                                            <input type="file" class="form-control form-theme-input"
                                                                name="contract_file" id="contract_file" required
                                                                style="visibility: hidden" accept=".pdf">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-12">
                                                        <textarea class="form-control" id="contract_description" rows="10" placeholder="{{ __('translation.Enter Contract Description') }}"
                                                            name="contract_description" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button id="addContractBtn" class="btn btn-primary"
                                                    type="submit">{{ __('translation.Save') }}</button>
                                            </div>
                                        </form>
                                    @endif
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
        // Intializing summer note
        $(document).ready(function() {
            $('#contract_description').summernote({
                height: 150
            });
        });

        // For custom file input
        $('#contract_file').change(function() {
            var file = $('#contract_file')[0].files[0].name;
            $(this).prev('.position-absolute').find('.contract-file-name').text(file);
        });

        $('#addContractForm').validate({
            submitHandler: function() {
                ajaxCall($('#addContractForm'), "{{ route('add_contract_action') }}", $('#addContractBtn'),
                    "{{ route('contract_management_list',$customer->id) }}", onRequestSuccess);
            }
        });
    </script>
@endsection

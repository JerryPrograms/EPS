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
                                    <div class="card_section_2 mb-4">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-12">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="fw-bold mb-2 ms-1">.</span>
                                                    <h4 class="card_tittle_2 d-flex align-items-center mb-0">
                                                        {{ __('translation.Add_Contract') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="createBuildingInformation">
                                        @csrf
                                        <div class="form-group mb-4">
                                            <select name="contract_type" class="form-control">
                                                <option value="">{{ __('translation.Contract_Type') }}</option>
                                                <option value="daily">
                                                    {{ __('translation.Daily') }}
                                                </option>
                                                <option value="monthly">
                                                    {{ __('translation.Monthly') }}
                                                </option>
                                                <option value="yearly">
                                                    {{ __('translation.Yearly') }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="customer_number" class="mb-0">
                                                        {{ __('translation.Customer_Number') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <select name="customer_number" id="customer_number"
                                                        class="form-control form-theme-input">
                                                        <option value="">
                                                            {{ __('translation.Select_Customer') }}
                                                        </option>
                                                        <option name="john_doe">
                                                            {{ __('translation.John_Doe') }}
                                                        </option>
                                                        <option name="kate_wilson">
                                                            {{ __('translation.Kate_Wilson') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="contract_date" class="mb-0">
                                                        {{ __('translation.Contract_Date') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input type="date" class="form-control form-theme-input"
                                                        name="contract_date" id="contract_date"
                                                        placeholder="{{ __('translation.Enter_contract_date') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="building_name" class="mb-0">
                                                        {{ __('translation.Building_Name') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        name="building_name" id="building_name"
                                                        placeholder="{{ __('translation.Enter_building_Name') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="building_address" class="mb-0">
                                                        {{ __('translation.Building_Address') }}
                                                    </label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        name="building_address" id="building_address"
                                                        placeholder="{{ __('translation.Enter_building_address') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-6 col-12">
                                                    <label for="contract_file" class="mb-0">{{ __('translation.Upload_Contract') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-6 col-12">
                                                    <label for="contract_file"
                                                        class="btn btn-sm btn-outline-success btn-theme-success-outline mb-0">
                                                        <img src="{{ asset('engineer_company/assets/images/aroow.png') }}"
                                                            alt="Upload" height="15">
                                                    </label>
                                                    <small class="d-block contract-file-name"></small>
                                                    <input type="file" class="form-control form-theme-input d-none"
                                                        name="contract_file" id="contract_file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-12">
<textarea class="form-control" id="contract_description"
rows="10" placeholder="{{ __('translation.Enter_Contract_Description') }}" name="contract_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- form row 4 end  -->

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    </form>
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
            $(this).prev('.contract-file-name').text(file);
        });
    </script>

    {{-- <script>
        $('#createBuildingInformation').validate({
            submitHandler: function () {

                ajaxCall($('#createBuildingInformation'), "{{ route('CreateBuildingAndCompanyInformation') }}", $('.form_button'), "{{ route('ec.CreateCompanyInfo', request()->segment(3)) }}", onRequestSuccess);

            }
        });
    </script> --}}
@endsection

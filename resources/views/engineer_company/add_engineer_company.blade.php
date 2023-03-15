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
                                                        {{ __('translation.Register as a partner') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="addEngineerCompanyForm">
                                        @csrf
                                        <div class="prompt"></div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="name"
                                                        class="mb-0">{{ __('translation.Company Name') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        name="name" id="name"
                                                        placeholder="{{ __('translation.Enter business name') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="email"
                                                        class="mb-0">{{ __('translation.Company Email') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="email" class="form-control form-theme-input"
                                                        name="email" id="email"
                                                        placeholder="{{ __('translation.Write company email') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="password"
                                                        class="mb-0">{{ __('translation.Password') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="password" class="form-control form-theme-input"
                                                        name="password" id="password"
                                                        placeholder="{{ __('translation.Write password') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="phone"
                                                        class="mb-0">{{ __('translation.Company Number') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="number" class="form-control form-theme-input"
                                                        name="phone" id="phone"
                                                        placeholder="{{ __('translation.Write company number') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="address"
                                                        class="mb-0">{{ __('translation.Address') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        name="address" id="address"
                                                        placeholder="{{ __('translation.Write address') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="manager_name"
                                                           class="mb-0">{{ __('translation.Name of person in charge') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                           name="manager_name" id="manager_name"
                                                           placeholder="{{ __('translation.Enter the person in charge') }}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-action mt-4 text-end">
                                            <button id="addEngineerCompanyBtn" type="submit"
                                                class="btn btn-primary">{{ __('translation.Register') }}</button>
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
    <script>
        $('#addEngineerCompanyForm').validate({
            submitHandler: function() {
                ajaxCall($('#addEngineerCompanyForm'), "{{ route('add_engineer_company_action') }}", $('#addEngineerCompanyBtn'),
                    "{{ route('engineer_companies') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

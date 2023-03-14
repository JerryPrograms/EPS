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
                                                        {{ __('translation.Edit Engineer') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="editEngineerForm">
                                        @csrf
                                        <div class="prompt"></div>
                                        <input type="hidden" name="id" value="{{ $engineer->id }}">
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="company_name"
                                                        class="mb-0">{{ __('translation.Affliated Company Name') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <select name="company_name" id="company_name"
                                                        class="form-control form-theme-input" required>
                                                        <option value="">
                                                            {{ __('translation.Write affliated company name') }}
                                                        </option>
                                                        @foreach ($engineer_companies as $engineer_company)
                                                            <option value="{{ $engineer_company->id }}" {{ ($engineer->affiliated_company == $engineer_company->id) ? 'selected' : '' }}>
                                                                {{ $engineer_company->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="name"
                                                        class="mb-0">{{ __('translation.Name') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        name="name" id="name" value="{{ $engineer->name }}"
                                                        placeholder="{{ __('translation.Write name') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="name"
                                                        class="mb-0">{{ __('translation.Email') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="email" class="form-control form-theme-input"
                                                        name="email" id="name" value="{{ $engineer->email }}"
                                                        placeholder="{{ __('translation.Write email') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="phone_number"
                                                        class="mb-0">{{ __('translation.Phone number') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="number" class="form-control form-theme-input"
                                                        name="phone" id="phone_number" value="{{ $engineer->phone }}"
                                                        placeholder="{{ __('translation.Write phone number') }}" required>
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
                                                        placeholder="{{ __('translation.Write password') }}">
                                                    <small class="d-block text-dark">{{ __('translation.Enter password if you want to change') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-action mt-4 text-end">
                                            <button id="editEngineerBtn" type="submit"
                                                class="btn btn-primary">{{ __('translation.correction') }}</button>
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
        $('#editEngineerForm').validate({
            submitHandler: function() {
                ajaxCall($('#editEngineerForm'), "{{ route('edit_engineer_action') }}", $('#editEngineerBtn'),
                    "{{ route('engineers') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

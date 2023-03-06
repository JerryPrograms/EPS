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
                                                        {{ __('translation.Register Engineer') }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="addEngineerForm">
                                        @csrf
                                        <div class="prompt"></div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="company_name"
                                                           class="mb-0">{{ __('translation.Affliated Company Name') }}</label>
                                                </div>
                                                @if(activeGuard() == 'engineer_company')
                                                    <div class="col-lg-9 col-md-6 col-12">
                                                        <input type="text" class="d-none form-control form-theme-input"
                                                               name="company_name" value="{{auth(activeGuard())->id()}}"

                                                               placeholder="{{ __('translation.Write name') }}"
                                                               required>
                                                        <input type="text" class="form-control form-theme-input"
                                                               value="{{auth(activeGuard())->user()->name}}"

                                                               placeholder="{{ __('translation.Write name') }}"
                                                               disabled>
                                                    </div>
                                                @else
                                                    <div class="col-lg-9 col-md-6 col-12">
                                                        <select name="company_name" id="company_name"
                                                                class="form-control form-theme-input" required>
                                                            <option value="">
                                                                {{ __('translation.Write affiliated company name') }}
                                                            </option>
                                                            @foreach ($engineer_companies as $engineer_company)
                                                                <option value="{{ $engineer_company->id }}">
                                                                    {{ $engineer_company->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label
                                                           class="mb-0">{{ __('translation.Name') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                           name="name"
                                                           placeholder="{{ __('translation.Write name') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label
                                                           class="mb-0">{{ __('translation.Email') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="email" class="form-control form-theme-input"
                                                           name="email"
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
                                                           name="phone" id="phone_number"
                                                           placeholder="{{ __('translation.Write phone number') }}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="id" class="mb-0">{{ __('translation.ID') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                           name="id" id="id"
                                                           placeholder="{{ __('translation.Write ID') }}" required>
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
                                                           placeholder="{{ __('translation.Write password') }}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-action mt-4 text-end">
                                            <button id="addEngineerBtn" type="submit"
                                                    class="btn btn-primary">{{__('translation.Register')}}
                                            </button>
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
        $('#addEngineerForm').validate({
            submitHandler: function () {
                ajaxCall($('#addEngineerForm'), "{{ route('add_engineer_action') }}", $('#addEngineerBtn'),
                    "{{ route('engineers') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

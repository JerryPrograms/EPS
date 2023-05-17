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
                                                <input name="company_name" value="{{$engineer_companies->id}}"
                                                       hidden="">
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
                                                           value=""
                                                           placeholder="{{ __('translation.Write name') }}"
                                                           required>
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
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <label for="phone_number"
                                                           class="mb-0">{{ __('translation.Phone number') }}</label>
                                                </div>
                                                <div class="col-lg-9 col-md-6 col-12">
                                                    <input type="text"
                                                           class="form-control form-theme-input format-number"
                                                           name="phone" id="phone_number"
                                                           maxlength="11"

                                                           placeholder="{{ __('translation.Write phone number') }}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        @if(activeGuard() == 'admin')
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-3 col-md-6 col-12">
                                                        <label for="phone_number"
                                                               class="mb-0">{{ __('translation.Social Security') }}</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-12">
                                                        <input type="text"
                                                               class="form-control form-theme-input format-number"
                                                               name="social_security" id="phone_number"
                                                               maxlength="11"
                                                               placeholder="{{ __('translation.Write Social Security') }}"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-3 col-md-6 col-12">
                                                        <label for="id"
                                                               class="mb-0">{{ __('translation.Rank') }}</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-12">
                                                        <input type="text" class="form-control form-theme-input"
                                                               name="rank" id="id"
                                                               placeholder="{{ __('translation.Please enter your rank') }}"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-3 col-md-6 col-12">
                                                        <label for="id"
                                                               class="mb-0">{{ __('translation.Approval Rights') }}</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-12">
                                                        <select class="form-select valid" name="approval_rights"
                                                                autocomplete="off"
                                                                required="">
                                                            <option value="" disabled="">
                                                                --{{__('translation.Please enter your industry')}}--
                                                            </option>

                                                            <option value="Manager">{{__('translation.manager')}}
                                                            </option>
                                                            <option value="Article">{{__('translation.Article')}}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
        @if(activeGuard() == 'admin')
        $('#addEngineerForm').validate({
            submitHandler: function () {
                ajaxCall($('#addEngineerForm'), "{{ route('add_engineer_action') }}", $('#addEngineerBtn'),
                    "{{ route('engineerscc',$engineer_companies->id) }}", onRequestSuccess);
            }
        });
        @else
        $('#addEngineerForm').validate({
            submitHandler: function () {
                ajaxCall($('#addEngineerForm'), "{{ route('add_engineer_action') }}", $('#addEngineerBtn'),
                    "{{ route('engineers') }}", onRequestSuccess);
            }
        });
        @endif

        // $('.format-number').keyup(function () {
        //     var foo = $(this).val().split("-").join(""); // remove hyphens
        //
        //     foo = foo.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");
        //
        //     $(this).val(foo);
        //
        // });
    </script>
@endsection

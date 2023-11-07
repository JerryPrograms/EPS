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

                                    <div
                                        class="card-title d-flex align-items-center justify-content-between mobile-flex-column mb-0 py-2">
                                        <h4 class="">
                                            {{__('translation.Change Password')}}
                                        </h4>

                                    </div>
                                    <form id="changePasswordForm" class="pt-4">
                                        <div class="prompt"></div>
                                        @csrf
                                        <div class="form-group mb-3 w-50 m-auto">
                                            <label for="currentPassword">{{ __('translation.Current Password') }}</label>
                                            <input type="password" id="currentPassword" name="current_password" class="form-control" placeholder="{{ __('translation.Enter your current password') }}" required>
                                        </div>
                                        <div class="form-group mb-3 w-50 m-auto">
                                            <label for="newPassword">{{ __('translation.New Password') }}</label>
                                            <input type="password" id="newPassword" name="password" class="form-control" placeholder="{{ __('translation.Enter your new password') }}" required>
                                        </div>
                                        <div class="form-group mb-3 w-50 m-auto">
                                            <label for="confirmPassword">{{ __('translation.Confirm Password') }}</label>
                                            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="{{ __('translation.Enter your new password again') }}" class="form-control" required>
                                        </div>
                                        <div class="form-action text-center">
                                            <button type="submit" class="btn btn-primary" id="changePasswordFormBtn">{{ __('translation.Submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
@section('custom-script')
    <script>
        $('#changePasswordForm').validate({
            submitHandler: function () {
                ajaxCall($('#changePasswordForm'), "{{ route('admin.change_password_action') }}", $('#changePasswordFormBtn'), "{{ route('ec.GetCustomerInfoListing') }}", onRequestSuccess);
            }
        });
    </script>
@endsection

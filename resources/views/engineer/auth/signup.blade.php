<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awwesome file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('engineer_company/css/style.css') }}">


</head>

<body>
<div class="loading-bar" style="width: 0;"></div>
<!-- /* header section start  */ -->
<navbar>
    <div class="Main_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-2">
                        <img src="{{ asset('engineer_company/images/logo.png') }}" alt="image"
                             height="50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</navbar>
<!-- /* header section end */ -->

<!-- /* form section start  */ -->
<header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="Main_form_section">

                    <form class="card-body p-lg-5" id="loginForm">
                        @csrf
                        <div>
                            <h3>{{ __('translation.Sign up') }}</h3>
                            <p>{{ __('translation.EVERY PARKING SOLUTION') }}</p>
                            <div class="prompt"></div>
                            <div class="form-floating mt-5 d-flex flex-column">
                                <input type="text" name="name" class="form-control custom_input" id="name"
                                       placeholder="{{ __('translation.Enter your username') }}" required>
                                <label for="name" class="custom_color_theme">{{ __('translation.Name') }}</label>

                            </div>
                            <div class="form-floating mt-3 d-flex flex-column">
                                <input type="email" name="email" class="form-control custom_input" id="email"
                                       placeholder="{{ __('translation.Enter your email address') }}" required>
                                <label for="email" class="custom_color_theme">{{ __('translation.Email (ID)') }}</label>
                                <span class="Custom_icon">
                                        <img src="{{ asset('engineer_company/images/profile_gray.png') }}"
                                             class="user_icon">
                                    </span>
                            </div>
                            <div class="form-floating mt-3 d-flex flex-column">
                                <input type="password" name="password" minlength="6" class="form-control custom_input"
                                       id="password"
                                       placeholder="{{ __('translation.Enter a strong password') }}" required>
                                <label for="password"
                                       class="custom_color_theme">{{ __('translation.Password') }}</label>
                                <span class="Custom_icon">
                                        <img src="{{ asset('engineer_company/images/lock.png') }}" class="lock_icon">
                                    </span>
                            </div>
                            <div class="form-floating mt-3 d-flex flex-column">
                                <input type="number" name="phone" class="form-control custom_input" id="phone"
                                       placeholder="{{ __('translationEnter your phone number') }}" required>
                                <label for="phone"
                                       class="custom_color_theme">{{ __('translation.Phone number') }}</label>
                            </div>
                            <div class="form-floating mt-3 d-flex flex-column">
                                <select name="affiliated_company" required class="form-control custom_input" aria-label="Default select example">
                                    <option selected>{{__('translation.select affiliate company')}}</option>
                                    @foreach($engineer_company as $ec)
                                        <option value="{{$ec->id}}">{{$ec->name}}</option>
                                    @endforeach
                                </select>
                                <label for="phone"
                                       class="custom_color_theme">{{ __('translation.Engineer Companies') }}</label>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check_2 d-flex align-items-center gap-2 mt-4">
                                    <input type="checkbox" class="form-check-input mt-0" id="AllTermsConditions"
                                           id="allterms">
                                    <label class="form-check-label mt-0 ml-2" for="termsCheck1">
                                        {{ __('translation.I agree to all the terms and conditions') }}</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input type="checkbox" class="form-check-input mt-0 termsCheck" id="termsCheck2">
                                    <label class="form-check-label mt-0" for="termsCheck2">
                                        {{ __('translation.[Essential] Personal Information Handling Policy') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input type="checkbox" class="form-check-input mt-0 termsCheck" id="termsCheck3">
                                    <label class="form-check-label mt-0 ml-1" for="termsCheck3">
                                        {{ __('translation.[Essential] Terms and Conditions of Service') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input type="checkbox" class="form-check-input mt-0 termsCheck" id="termsCheck4">
                                    <label class="form-check-label mt-0 ml-1" for="termsCheck4">
                                        {{ __('translation.[Choice] Accept receiving marketing information') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 pl-2 pr-2">
                                <div class="buton_sett mt-5">
                                    <button type="submit" id="login_btn" class="btn btn-primary btn-theme-auth w-100"
                                            disabled>{{ __('translation.Sign up') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /* form section end  */ -->


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="{{ asset('engineer/assets/js/theme.js') }}"></script>
<script src="{{asset('engineer_company/assets/js/validate.min.js')}}"></script>

<script>
    // Handling button on terms check
    $('#AllTermsConditions').on('change', function () {
        if ($(this).prop('checked') == true) {
            $('.termsCheck').each(function () {
                $(this).prop('checked', true);
            });
            $('#login_btn').prop('disabled', false);
        } else {
            $('.termsCheck').each(function () {
                $(this).prop('checked', false);
            });
            $('#login_btn').prop('disabled', true);
        }
    });
    $('.termsCheck').on('change', function () {
        var flag = 0;
        $('.termsCheck').each(function () {
            if ($(this).prop('checked') == true) {
                flag = flag + 1;
            }
        });
        if (flag == 3) {
            $('#login_btn').prop('disabled', false);
        } else {
            $('#login_btn').prop('disabled', true);
        }
    });


    $('#loginForm').validate({
        submitHandler: function () {
            'use strict';
            ajaxCall($('#loginForm'), "{{ route('engineer_signup_action') }}", $('#login_btn'), "{{ route('e.GetECLogin') }}", onRequestSuccess);
        }
    });

</script>
</body>

</html>

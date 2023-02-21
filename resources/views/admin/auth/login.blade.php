<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awwesome file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">


</head>

<body>



    <!-- /* header section start  */ -->
    <div>
        <div class="Main_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="p-2">
                            <img src="{{ asset('admin/images/logo.png') }}" alt="image" height="40">
                        </div>
                    </div>
                    <div class="col-lg-9">
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /* header section end */ -->

    <!-- /* form section start  */ -->
    <main class="form-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="Main_form_section">

                        <form class="card-body p-lg-5" id="loginForm">
                            @csrf
                            <div>
                                <div class="custom_responsive">
                                    <h3>ADMIN Login</h3>
                                    <p>EVERY PARKING SOLUTION</p>
                                </div>
                                <div class="prompt"></div>
                                <div class="form-floating mt-5 d-flex flex-column">
                                    <input type="email" class="form-control custom_input" id="email"
                                        placeholder="Email Email Address" name="email" required>
                                    <label for="email">ID</label>
                                    <span class="Custom_icon">
                                        <img src="images/profile_gray.png" class="user_icon">
                                    </span>
                                </div>

                                <div class="form-floating mt-4 d-flex flex-column">
                                    <input type="password" name="password" class="form-control custom_input" id="password"
                                        placeholder="Enter your password" required>
                                    <label for="password">Password
                                    </label>
                                    <span class="Custom_icon">
                                        <img src="images/lock.png" class="lock_icon">
                                    </span>
                                </div>

                                <div class="col-lg-12 pl-2 pr-2">
                                    <div class="buton_sett mt-5">
                                        <button type="submit" id="login_btn" class="btn btn-primary btn-theme-auth w-100">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /* form section end  */ -->



    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{ asset('engineer/assets/js/theme.js') }}"></script>
<script src="{{asset('engineer_company/assets/js/validate.min.js')}}"></script>
<script>
    $( '#loginForm' ).validate( {
            submitHandler: function () {
                'use strict';
                ajaxCall($('#loginForm'), "{{ route('admin_login_action') }}", $('#login_btn'), "{{ route('ec.GetCustomerInfoListing') }}", onRequestSuccess);
            }
        } );
</script>

</body>

</html>
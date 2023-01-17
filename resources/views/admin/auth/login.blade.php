<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Font Awwesome file-->
    <link rel="stylesheet" href="{{asset('admin/assets/css/all.min.css')}}"/>
    <link href="{{asset('admin/assets/css/css2.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/css2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
</head>


<body>


<!-- /* header section start  */ -->
<div>
    <div class="Main_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-2">
                        <img src="{{('images/logo.png')}}" alt="image" height="40">
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

                    <form class="card-body p-lg-5">
                        <div>
                            <div class="custom_responsive">
                                <h3>ADMIN Login</h3>
                                <p>EVERY PARKING SOLUTION</p>
                            </div>
                            <div class="form-floating mt-5 d-flex">
                                <input type="email" class="form-control custom_input" id="floatingInput"
                                       placeholder="Email Email Address">
                                <label for="floatingInput">ID</label>
                                <span class="Custom_icon">
                                        <img src="{{asset('admin/images/profile_gray.png')}}" class="user_icon">
                                    </span>
                            </div>

                            <div class="form-floating mt-4 d-flex">
                                <input type="password" class="form-control custom_input" id="floatingInput"
                                       placeholder="Enter your password">
                                <label for="floatingInput">비밀번호</label>
                                <span class="Custom_icon">
                                        <img src="{{asset('admin/images/lock.png')}}" class="lock_icon">
                                    </span>
                            </div>


                            <div class="col-lg-12 pl-2 pr-2 pt-5">
                                <div class="buton_sett mt-5">
                                    <button type="button" class="pt-2 login_buton" disabled>로그인
                                    </button>
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


<script src="{{asset('admin/assets/js/jquery-3.2.1.slim.min.js')}}"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>

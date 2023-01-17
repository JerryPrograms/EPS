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

    <link rel="stylesheet" href="{{asset('engineer_company/css/style.css')}}">


</head>

<body>



<!-- /* header section start  */ -->
<navbar>
    <div class="Main_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-2">
                        <img src="{{asset('engineer_company/images/logo.png')}}')}}" alt="image" height="40">
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

                    <form class="card-body p-lg-5">
                        <div>
                            <h3>Sign up</h3>
                            <p>EVERY PARKING SOLUTION</p>

                            <div class="form-floating mt-5 d-flex">
                                <input type="email" class="form-control custom_input" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="custom_color_theme">Name</label>

                            </div>


                            <div class="form-floating mt-3 d-flex">
                                <input type="email" class="form-control custom_input" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="custom_color_theme">Email (ID)</label>
                                <span class="Custom_icon">
                                        <img src="{{asset('engineer_company/images/profile_gray.png')}}" class="user_icon">
                                    </span>
                            </div>



                            <div class="form-floating mt-3 d-flex">
                                <input type="password" class="form-control custom_input" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="custom_color_theme">Password</label>
                                <span class="Custom_icon">
                                        <img src="{{asset('engineer_company/images/lock.png')}}" class="lock_icon">
                                    </span>
                            </div>


                            <div class="form-floating mt-3 d-flex">
                                <input type="email" class="form-control custom_input" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="custom_color_theme">Phone number</label>
                            </div>



                            <div class="col-lg-12">
                                <div class="form-check_2 mt-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label mt-1 ml-2" for="exampleCheck1">
                                        I agree to all the terms and conditions.</label>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label mt-1" for="exampleCheck1">
                                        [Essential] Personal Information Handling Policy
                                    </label>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label mt-1 ml-1" for="exampleCheck1">
                                        [Essential] Terms and Conditions of Service
                                    </label>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label mt-1 ml-1" for="exampleCheck1">
                                        [Choice] Accept receiving marketing information
                                    </label>
                                </div>
                            </div>


                            <div class="col-lg-12 pl-2 pr-2">
                                <div class="buton_sett mt-5">
                                    <a href="{{route('ec.GetECLogin')}}">
                                        <button type="button" class="pt-2 login_buton" >Sign up
                                        </button>
                                    </a>
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



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>

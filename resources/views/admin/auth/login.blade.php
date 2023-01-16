<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

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


@include('admin.includes.scripts')


</body>

</html>

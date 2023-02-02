<header id="page-topbar">
    <div class="navbar-header">
        <div class="row">
            <div class="col-lg-3 col-6">
                <img src="{{asset('engineer_company/assets/images/logo.png')}}" class="img-fluid" style="width: 50%;"
                     alt="">
            </div>
            <div class="col-lg-9 d-flex col-6">
                <div style="text-align: right;display: flex;" class="profile_section">
                    <img src="{{asset('engineer_company/assets/images/Vector.png')}}" class="user_img mr-4">
                    <div class="dropdown">
                        <p id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                           class="mb-sm-0 font-size-18 user_test dropdown-toggle">{{auth('engineer_company')->user()->name}}</p>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('ec.EngineerCompanyLogout')}}"><i
                                    class="text-danger fa fa-power-off me-2"></i>logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

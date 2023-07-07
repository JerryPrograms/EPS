<header id="page-topbar">
    <div class="navbar-header">
        <div class="row">
            <div class="col-lg-3 col-6">
                <img src="{{asset('engineer_company/assets/images/logo.png')}}" class="img-fluid" style="width: 50%;"
                     alt="">
            </div>
            <div class="col-lg-9 d-flex col-6">
                <div style="text-align: right;display: flex;" class="profile_section">
                    <img src="{{asset('engineer_company/assets/images/Vector(2).png')}}" class="user_img mr-4">
                    <div class="dropdown" sty>
                        @if(activeGuard() == 'admin')
                            <p id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                               class="mb-sm-0 font-size-18 user_test dropdown-toggle">{{auth(activeGuard())->user()->name}}</p>
                        @elseif(activeGuard() == 'engineer_company')
                            <p id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                               class="mb-sm-0 font-size-18 user_test dropdown-toggle">{{auth(activeGuard())->user()->company_name}}</p>
                        @elseif(activeGuard() == 'engineer')
                            <p id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                               class="mb-sm-0 font-size-18 user_test dropdown-toggle">{{auth(activeGuard())->user()->name}}</p>
                        @else
                            <p id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                               class="mb-sm-0 font-size-18 user_test dropdown-toggle">{{auth(activeGuard())->user()->company_name}}</p>
                        @endif
                        <div class="dropdown-menu" style="left: -64px !important;"  aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('ec.EngineerCompanyLogout',activeGuard())}}"><i
                                    class="text-danger fa fa-power-off me-2"></i>{{ __('translation.logout') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

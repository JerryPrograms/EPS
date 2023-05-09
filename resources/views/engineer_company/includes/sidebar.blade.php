<div class="vertical-menu">
    @php
        $routes = ['building-info','as-and-engineer-company','parking-facility','key-accessory-history','parts-replacement-history','monthly-regular-inspection','emergency-dispatch-checklist','manage-attachments'];
    @endphp


    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->


            <ul class="metismenu list-unstyled" id="side-menu">
                @if(activeGuard() == 'admin')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('clients_listing') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Done_ring_round.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Clients List') }}</span>
                        </a>
                    </li>
                @endif
                @if (!empty(activeGuard()) && activeGuard() != 'engineer' && activeGuard() != 'web')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('engineers') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Done_ring_round.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Engineer Management') }}</span>
                        </a>
                    </li>
                @endif
{{--                <li class="sidebr_button mt-2">--}}
{{--                    <a href="{{ route('ASCompanyList') }}" class=" waves-effect dropdown_toggle">--}}
{{--                        <!-- <i class="bx bx-calendar"></i> -->--}}
{{--                        <img src="{{ asset('engineer_company/assets/images/Frame.png') }}"--}}
{{--                             class="double_ring_img p-0" style="margin-left: -1px;">--}}
{{--                        <span key="t-dashboards"--}}
{{--                              class="dropdown_text">{{ __('translation.AS Company List') }}</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                @if (activeGuard() != 'web')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('ec.GetCustomerInfoListing') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/user.png') }}"
                                 class="double_ring_img p-0"
                                 style="margin-left: -1px;">
                            <span key="t-dashboardsasdas"
                                  class="dropdown_text">{{ __('translation.Customer List') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="a"><a key="t-default" class="list_menubar_text"
                                             title="Information & Building Management Company Information"><span
                                        class="custom_dot">.</span>{{ __('translation.Building Information1') }}
                                </a></li>

                            {{--                            <li class="b"><a key="t-saas" class="list_menubar_text"--}}
                            {{--                                             title="AS Info & Engineer company Info"><span--}}
                            {{--                                        class="custom_dot">.</span>--}}
                            {{--                                    {{ __('translation.Info & Engineer') }}.</a></li>--}}

                            <li class="c"><a key="t-crypto" class="list_menubar_text"
                                             title="Parking facility certification information & inspection certificate
                                "><span
                                        class="custom_dot">.</span>{{ __('translation.Parking facility certification') }}

                                </a></li>

                            <li class="d"><a key="t-blog" class="list_menubar_text"
                                             title="Key Accessories History"><span
                                        class="custom_dot">.</span>{{ __('translation.Key Accessories History') }}
                                </a></li>

                            <li class="e"><a key="t-blog" class="list_menubar_text"
                                             title="Component replacement history">
                                            <span
                                                class="custom_dot">.</span>{{ __('translation.Component replacement') }}
                                </a></li>

                            <li class="f"><a key="t-blog" class="list_menubar_text"
                                             title="Monthly Inspection list
                                ">
                                            <span
                                                class="custom_dot">.</span>{{ __('translation.Monthly Inspection list') }}
                                </a></li>

                            <li class="g"><a key="t-blog" class="list_menubar_text"
                                             title="Emergency dispatch confirmation list
                                ">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Emergency dispatch') }}
                                </a></li>

                            <li class="h"><a key="t-blog" class="list_menubar_text"
                                             title="Manage attachments">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Manage attachments') }}
                                </a></li>
                            <li class="b"><a key="t-blog" class="list_menubar_text"
                                             title="Manage attachments">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Fill Regular Inspection Log') }}
                                </a></li>
                            <li class="i"><a key="t-blog" class="list_menubar_text"
                                             title="Manage attachments">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Contract Management') }}
                                </a></li>
                            <li class="j"><a key="t-blog" class="list_menubar_text"
                                             title="Manage attachments">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Quote Management') }}
                                </a></li>
                        </ul>
                    </li>
                    {{--                    <li class="sidebr_button mt-2">--}}

                    {{--                        <a href="javascript:void(0)"--}}
                    {{--                           class=" waves-effect dropdown_toggle" aria-expanded="false">--}}
                    {{--                            <!-- <i class="bx bx-calendar"></i> -->--}}
                    {{--                            <!-- <i class="fa-solid fa-list list_icon"></i> -->--}}
                    {{--                            <img src="{{ asset('engineer_company/assets/images/user.png') }}"--}}
                    {{--                                 class="double_ring_img p-0"--}}
                    {{--                                 style="margin-left: -1px;">--}}

                    {{--                            <span class="dropdown_text">--}}
                    {{--                                        {{ __('translation.Fill in customer information') }}--}}
                    {{--                                    </span>--}}

                    {{--                        </a>--}}


                    {{--                    </li>--}}

                @endif


                @if (!empty(activeGuard()) && activeGuard() == 'admin')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('engineer_companies') }}" class="waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Done_ring_round.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Engineer Companies') }}</span>
                        </a>
                    </li>

                @endif

                <li class="sidebr_button mt-2">
                    <a href="{{ route('distpatch_confirmation_listing') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{ asset('engineer_company/assets/images/Group 427323401.png') }}"
                             class="double_ring_img p-0" style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Dispatch Confirmation') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('regular_inspection_logs') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{ asset('engineer_company/assets/images/Group 427323320.png') }}"
                             class="double_ring_img p-0" style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Regular inspection log') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('contract_management') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{ asset('engineer_company/assets/images/Group.png') }}"
                             class="double_ring_img p-0" style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Contract Management') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('quotation_management') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{ asset('engineer_company/assets/images/Book_check.png') }}"
                             class="double_ring_img p-0" style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Quote Management') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('construction_completion') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{ asset('engineer_company/assets/images/Vector.png') }}"
                             class="double_ring_img p-0" style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Construction completion report management') }} </span>
                    </a>
                </li>

                @if (activeGuard() != 'web' && activeGuard() != 'admin')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('ec.GetCalender') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Frame.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards" class="dropdown_text">{{ __('translation.Calendar') }}</span>
                        </a>
                    </li>
                @endif
                @if(!empty(activeGuard()) && activeGuard() == 'admin')
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('admin.GetCreateAddress') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Frame.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Building name registration management') }}</span>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

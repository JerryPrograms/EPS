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
                                  class="dropdown_text">{{ __('translation.List of business partners') }}</span>
                        </a>
                    </li>
                @endif
                @if (!empty(activeGuard()) && activeGuard() != 'engineer' && activeGuard() != 'web' && activeGuard() != 'admin')
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
                            @if(activeGuard() !== 'engineer')
                            <li class="a"><a key="t-default" class="list_menubar_text"
                                             title="Information & Building Management Company Information"><span
                                        class="custom_dot">.</span>{{ __('translation.Building Information1') }}
                                </a></li>
                            @endif
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
                            @if((activeGuard() !== 'engineer_company'))   
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
                                @endif
                            @if((activeGuard() !== 'engineer') && (activeGuard() !== 'engineer_company'))
                            <li class="h"><a key="t-blog" class="list_menubar_text"
                                             title="Manage attachments">
                                                <span
                                                    class="custom_dot">.</span>{{ __('translation.Manage attachments') }}
                                </a></li>
                            @endif
                        </ul>
                    </li>
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
                @if(activeGuard() != 'admin' && activeGuard() !='web')
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

                    @if(activeGuard() != 'engineer')
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
                                  class="dropdown_text">{{ __('translation.quote_management') }}</span>
                        </a>
                    </li>
                    @endif


                    <li class="sidebr_button mt-2">
                        <a href="{{ route('construction_completion') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{ asset('engineer_company/assets/images/Vector.png') }}"
                                 class="double_ring_img p-0" style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Construction completion report management') }} </span>
                        </a>
                    </li>
                @endif
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
                @if(activeGuard() == 'web')
                        <li class="sidebr_button mt-2">
                            <a href="{{ route('GetCustomerDashboard') }}" class=" waves-effect dropdown_toggle">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <img src="{{ asset('engineer_company/assets/images/Frame.png') }}"
                                     class="double_ring_img p-0" style="margin-left: -1px;">
                                <span key="t-dashboards"
                                      class="dropdown_text">{{ __('translation.Parking Facility Management') }}</span>
                            </a>
                        </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

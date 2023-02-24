<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->


            <ul class="metismenu list-unstyled" id="side-menu">
                @if((!empty(activeGuard())) && (activeGuard() != 'engineer') && (activeGuard() != 'web'))
                    <li class="sidebr_button">
                        <a href="javascript: void(0);" class="waves-effect dropdown_toggle">
                            <img src="{{asset('engineer_company/assets/images/user.png')}}"
                                 class="double_ring_img p-0"
                                 style="margin-left: -1px;">
                            <span key="t-dashboards" class="dropdown_text">{{ __('translation.Customer List') }}</span>
                            <div class="plus_section_5">
                                <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                                <i class="fa-solid fa-plus plus_icon"></i>
                            </div>
                        </a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li>
                                <a key="t-level-1-1" href="{{route('ec.GetCustomerInfoListing')}}"
                                   class="waves-effect  dropdown_toggle_2">
                                    <i class="fa-solid fa-list list_icon"></i>
                                    <span key="t-dashboards" class="dropdown_text_2">{{ __('translation.customer info') }}
                            </span>

                                </a>

                            <li>

                                <a key="t-level-1-2" href="javascript: void(0);"
                                   class=" waves-effect {{request()->segment(2) == 'customer-info-dashboard' ? 'active' : ''}}  dropdown_toggle_2 pt-0">
                                    <!-- <i class="bx bx-calendar"></i> -->
                                    <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                    <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                    <span key="t-dashboards" class="dropdown_text_2">
                                {{ __('translation.Fill in customer information') }}
                            </span>

                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a key="t-default"
                                           class="list_menubar_text"
                                           title="Information & Building Management Company Information"><span
                                                class="custom_dot">.</span>{{ __('translation.Building Information') }} {{ __('translation.&') }}
                                            ...</a></li>

                                    <li><a key="t-saas" class="list_menubar_text"
                                           title="AS Info & Engineer company Info"><span class="custom_dot">.</span>
                                            {{ __('translation.Info & Engineer') }}...</a></li>

                                    <li><a key="t-crypto"
                                           class="list_menubar_text"
                                           title="Parking facility certification information & inspection certificate
                                "><span class="custom_dot">.</span>{{ __('translation.Parking facility certification') }}
                                            ..
                                        </a></li>

                                    <li><a key="t-blog" class="list_menubar_text"
                                           title="Key Accessories History"><span
                                                class="custom_dot">.</span>{{ __('translation.Key Accessories History') }}
                                            ..</a>
                                    </li>

                                    <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"
                                           title="Component replacement history">
                                            <span
                                                class="custom_dot">.</span>{{ __('translation.Component replacement') }}
                                            ..</a></li>

                                    <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text" title="Monthly Inspection list
                                ">
                                            <span
                                                class="custom_dot">.</span>{{ __('translation.Monthly Inspection list') }}
                                        </a></li>

                                    <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text" title="Emergency dispatch confirmation list
                                ">
                                            <span class="custom_dot">.</span>{{ __('translation.Emergency dispatch') }}
                                            ...</a></li>

                                    <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"
                                           title="Manage attachments">
                                            <span class="custom_dot">.</span>{{ __('translation.Manage attachments') }}
                                            ...</a></li>
                                </ul>

                            </li>
                        </ul>
                    </li>

                @endif
                @if((!empty(activeGuard())) && (activeGuard() != 'engineer') && (activeGuard() != 'web'))
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('engineers') }}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{asset('engineer_company/assets/images/Done_ring_round.png')}}"
                                 class="double_ring_img p-0"
                                 style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Engineer Management') }}</span>
                        </a>
                    </li>
                @endif

                @if((!empty(activeGuard())) && (activeGuard() == 'admin'))
                    <li class="sidebr_button mt-2">
                        <a href="{{ route('engineer_companies') }}" class="waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{asset('engineer_company/assets/images/Done_ring_round.png')}}"
                                 class="double_ring_img p-0"
                                 style="margin-left: -1px;">
                            <span key="t-dashboards"
                                  class="dropdown_text">{{ __('translation.Engineer Companies') }}</span>
                        </a>
                    </li>
                @endif

                <li class="sidebr_button mt-2">
                    <a href="{{ route('distpatch_confirmation_listing') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/Done_ring_round.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Dispatch Confirmation') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('regular_inspection_logs') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Regular inspection log') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('contract_management') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Contract Management') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{ route('quotation_management') }}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">{{ __('translation.Quote Management') }}</span>
                    </a>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="{{route('construction_completion')}}" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards"
                              class="dropdown_text">{{ __('translation.Construction Completion') }} </span>
                    </a>
                </li>

                @if(activeGuard() != 'web')
                    <li class="sidebr_button mt-2">
                        <a href="{{route('ec.GetCalender')}}" class=" waves-effect dropdown_toggle">
                            <!-- <i class="bx bx-calendar"></i> -->
                            <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                                 class="double_ring_img p-0"
                                 style="margin-left: -1px;">
                            <span key="t-dashboards" class="dropdown_text">{{ __('translation.Calendar') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

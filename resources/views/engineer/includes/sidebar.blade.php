<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li class="sidebr_button">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/blue-profile.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Customer List</span>
                        <div class="plus_section_5">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="{{route('ec.GetCustomerInfoListing')}}" class="waves-effect  dropdown_toggle_2">
                                <i class="fa-solid fa-list list_icon"></i>
                                <span key="t-dashboards" class="dropdown_text_2">Customer Info
                            </span>

                            </a>


                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text_2">
                                Create Customer Information
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a  key="t-default"
                                       class="list_menubar_text"
                                       title="Information & Building Management Company Information"><span
                                            class="custom_dot">.</span>Building Information & ...</a></li>

                                <li><a href="{{route('ec.CreateCompanyInfo')}}" key="t-saas" class="list_menubar_text"
                                       title="AS Info & Engineer company Info"><span class="custom_dot">.</span>AS
                                        Info & Engineer...</a></li>

                                <li><a href="{{route('ec.CreateParkingFacility')}}" key="t-crypto"
                                       class="list_menubar_text"
                                       title="Parking facility certification information & inspection certificate
                                "><span class="custom_dot">.</span>Parking facility certification..
                                    </a></li>

                                <li><a href="{{route('ec.CreateKeyAccessoryHistory')}}" key="t-blog" class="list_menubar_text"
                                       title="Key Accessories History"><span class="custom_dot">.</span>Key
                                        Accessories History..</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"
                                       title="Component replacement history">
                                        <span class="custom_dot">.</span>Component replacement ..</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text" title="Monthly Inspection list
                                ">
                                        <span class="custom_dot">.</span>Monthly Inspection list
                                    </a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text" title="Emergency dispatch confirmation list
                                ">
                                        <span class="custom_dot">.</span>Emergency dispatch...</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"
                                       title="Manage attachments">
                                        <span class="custom_dot">.</span>Manage attachments...</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/Done_ring_round.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Dispatch Confirmation</span>
                        <div class="plus_section_6">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Regular inspection log</span>
                        <div class="plus_section_6">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Contract Management</span>
                        <div class="plus_section_8">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Quote Management</span>
                        <div class="plus_section_9">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Construction Completion </span>
                        <div class="plus_section_10">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="sidebr_button mt-2">
                    <a href="javascript: void(0);" class=" waves-effect dropdown_toggle">
                        <!-- <i class="bx bx-calendar"></i> -->
                        <img src="{{asset('engineer_company/assets/images/gray-calender.png')}}"
                             class="double_ring_img p-0"
                             style="margin-left: -1px;">
                        <span key="t-dashboards" class="dropdown_text">Calendar</span>
                        <div class="plus_section_7">
                            <!-- <img src="{{asset('engineer_company/assets/images/gray-plus.png')}}" alt=""> -->
                            <i class="fa-solid fa-plus plus_icon"></i>
                        </div>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <i class="fa-solid fa-list list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>


                    <ul class="sub-menu" aria-expanded="false">
                        <li class="sidebr_button">
                            <a href="javascript: void(0);" class=" waves-effect  dropdown_toggle_2 pt-0">
                                <!-- <i class="bx bx-calendar"></i> -->
                                <!-- <i class="fa-solid fa-list list_icon"></i> -->
                                <i class="fa-sharp fa-solid fa-pen list_icon"></i>

                                <span key="t-dashboards" class="dropdown_text">고객 정보 생성
                            </span>

                            </a>

                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" key="t-default" class="list_menubar_text"><span
                                            class="custom_dot">.</span>건물 정보 & 건물관리회사 정보</a></li>
                                <li><a href="dashboard-saas.html" key="t-saas" class="list_menubar_text"><span
                                            class="custom_dot">.</span>AS 정보 & 보수업체 정보</a></li>
                                <li><a href="dashboard-crypto.html" key="t-crypto"
                                       class="list_menubar_text"><span class="custom_dot">.</span> 주차설비 인증정보 &
                                        검사확인증
                                    </a></li>
                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text"><span
                                            class="custom_dot">.</span>주요 부속품 내역</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>월정기점검 리스트</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>부품교체 이력</a></li>

                                <li><a href="dashboard-blog.html" key="t-blog" class="list_menubar_text">
                                        <span class="custom_dot">.</span>첨부파일 관리</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

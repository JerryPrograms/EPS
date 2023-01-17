@extends('admin.includes.layout')
@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">File Manager</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">File Manager</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="main_content_section_3">

                    <!-- start page title -->

                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body mb-4">
                                    <h4 class="card-title mb-4">고객 정보 작성</h4>
                                    <div class="row">

                                        <div class="col-lg-1 col-3">
                                            <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                <button id="dropdownMenu-calendarType"
                                                        class="btn d-flex mt-4 btn_drop" type="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month"
                                                       style="margin-right: 4px;"></i>
                                                    <span id="calendarTypeName">Filter</span>
                                                    <span class="icon_img">
                                                            <img src="{{asset('admin/assets/images/Polygon 4.png')}}" alt="">
                                                        </span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end text-center custom_dropdown"
                                                    role="menu" aria-labelledby="dropdownMenu-calendarType">
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>All
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>
                                                            Registration Date
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>
                                                            Building name
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>
                                                            Customer number
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>
                                                            Address
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a class="dropdown-item" role="menuitem"
                                                           data-action="toggle-daily">
                                                            <i class="calendar-icon ic_view_day"></i>
                                                            Building management company
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-9" style="padding-left: 10px;">
                                            <div class="custom_search">
                                                <div class="search mt-4">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <button class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img src="{{asset('admin/assets/images/gray-search.png')}}">
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 col-12">
                                            <div class="circle_main_section">
                                                <button class="circle_img_section">
                                                    <img src="{{asset('admin/images/user2.png')}}">
                                                    <p class="circle_img_text mt-3">홍길동 기사님</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="align-middle custom_color_gry">No.</th>
                                                <th class="text-center custom_color_gry">등록일</th>
                                                <th class="text-center custom_color_gry">고객번호</th>
                                                <th class="text-center custom_color_gry">건물명</th>
                                                <th class="text-center custom_color_gry">주소</th>
                                                <th class="text-center custom_color_gry">건물관리업체</th>
                                                <th class="text-center custom_color_gry">보수업체</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a href="javascript: void(0);"
                                                                                   class="text-body  tble_text">20</a>
                                                </td>
                                                <td class="custom_br_theme_clr_2 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        2022.11.01
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        223456-5032
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        포포인츠호텔
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        서울시 강남구 도산대로 168
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        대광산업
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3 text-center">
                                                    <p class="tble_text p-0 m-0">
                                                        이피에스
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <div class="card_section_2">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-11">
                                                <div class="">
                                                    <h4 class="card_tittle_2">고객 정보 작성 페이지</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <h4 class="card_tittle_2" style="text-align: end;">3 / 8</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- form row 1 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11 col-6">
                                            <h4 class="card-title mt-2 border-bottom-0 mb-4 custom_margin_2"> <span
                                                    class="bor_lef">&nbsp;</span> 고객 정보</h4>
                                        </div>
                                        <div class="col-lg-1 col-6" style="text-align: end;">
                                            <div class="file_main_section">
                                                <button class="file_button">
                                                    <img src="{{asset('admin/images/Vector.png')}}">
                                                </button>
                                            </div>
                                        </div>
                                        <form class="custom_form">
                                            <div class="d-flex align-items-baseline">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 인증번호</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="인천제3-87호">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 타입</label>
                                                <div class="col-lg-3">
                                                    <div class="dropdown">
                                                        <button class="btn drop_section_3" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                            <span style="margin-right: 10px;">다층 순환식</span>
                                                            <span class="drop_img">
                                                                    <img src="{{asset('admin/assets/images/Icon Color.png')}}"
                                                                         style="padding-left: 12px;">
                                                                </span>
                                                        </button>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">다층 순환식</a></li>
                                                            <li><a class="dropdown-item" href="#"> 승강기식</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">평면왕복식</a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">평면왕복식</a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">스태카</a></li>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">퍼즐</a></li>
                                                            <li><a class="dropdown-item" href="#">퍼즐즐</a></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 주차대수</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="56대 ">
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 제작사</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="동양메닉스">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 설치년도</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="2010년 4월 1일">
                                            </div>


                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span> 사용검사일</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="2010년 6월 25일">
                                            </div>

                                            <div class="d-flex align-items-baseline mt-4">
                                                <label for="exampleInputEmail1"
                                                       class="form-label custom_lab col-lg-4"> <span
                                                        class="star_section">*</span>추가정보</label>
                                                <input type="email" class="form-control col-lg-8 custom_input"
                                                       id="exampleInputEmail1" aria-describedby="emailHelp"
                                                       placeholder="리프트1기 카트 5기">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- form row 1 end  -->
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>


                    <!-- section 2 end  -->

                    <!---------------------------- tabel 2 start----------------  -->
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body mb-4 mt-5">
                                    <h4 class="card-title mt-2 border-bottom-0 mb-4 custom_margin_2"> <span
                                            class="bor_lef">&nbsp;</span> 검사확인증 (최신버전)</h4>
                                    <div class="table-responsive mt-5">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light custom_bor_2">
                                            <tr>

                                                <th class="align-middle custom_heading custom_br_rd">검사구분</th>
                                                <th
                                                    class="text-center align-middle custom_heading_2 custom_br_rd">
                                                    관리자명
                                                </th>
                                                <th
                                                    class="text-center custom_heading_2 align-middle  custom_br_rd">
                                                    설치장소
                                                </th>
                                                <th class="text-center custom_br_rd">정기검사 (유효기간)</th>
                                                <th class="text-center custom_br_rd">확인증</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd tb_bor">
                                                    <button
                                                        class="chines_button">정밀안전검사
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="홍길동">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="서울시 도산대로 158">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="2020년 12월 5일부터 ~ 2022년 8월 10일
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd tb_bor">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('admin/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                            <img src="{{asset('admin/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                             aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">정기안전검사</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="{{asset('admin/assets/images/image 451.png')}}"
                                                                             class="img-fluid" alt="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd tb_bor">
                                                    <button
                                                        class="chines_button">정밀안전검사
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="홍길동">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="서울시 도산대로 158">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="2020년 12월 5일부터 ~ 2022년 8월 10일
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd tb_bor">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('admin/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                            <img src="{{asset('admin/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                             aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">정기안전검사</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="{{asset('admin/assets/images/image 451.png')}}"
                                                                             class="img-fluid" alt="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr class="tb_bor mt-5">
                                                <td class="custom_br_rd tb_bor">
                                                    <button
                                                        class="chines_button">정밀안전검사
                                                    </button>
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_4"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="홍길동">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_3"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="서울시 도산대로 158">
                                                </td>
                                                <td class="custom_br_rd tb_bor">
                                                    <input type="email"
                                                           class="form-control col-lg-2 custom_input_tble_2"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="2020년 12월 5일부터 ~ 2022년 8월 10일
                                                            ">
                                                </td>
                                                <td class="text-center custom_br_rd tb_bor">
                                                    <div class="aroow_main_section">
                                                        <button class="aroow_button">
                                                            <img src="{{asset('admin/assets/images/aroow.png')}}">
                                                        </button>

                                                        <button class="search_button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                            <img src="{{asset('admin/assets/images/bluebar.png')}}">
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                             aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">정기안전검사</h5>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img src="{{asset('admin/assets/images/image 451.png')}}"
                                                                             class="img-fluid" alt="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- form row 4 start  -->
                                    <div class="row justify-content-end">
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button_2 mb-5 mt-5">이전페이지</button>
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button mb-5 mt-5">저장 및 다음</button>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
@endsection

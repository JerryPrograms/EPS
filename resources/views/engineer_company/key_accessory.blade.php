@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">

                    <!-- start page title -->

                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body mb-4">
                                    <h4 class="card-title mb-4">Fill in customer information
                                    </h4>
                                    <div class="row">


                                        <div class="col-md-3 mt-4 col-9">
                                            <div class="input-group" id="datepicker1">
                                                <input type="text" class="form-control  custom_clr_blk" placeholder="2022.12.25  14:30 ~ 16:30"
                                                       data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">

                                                <span class="input-group-text">
                                                            <img src=""{{asset('engineer_company/assets/images/dark-gray-calander.png')}}" alt="">
                                                        </span>
                                            </div><!-- input-group -->
                                        </div>

                                        <div class="col-md-9">
                                            <div class="circle_main_section">
                                                <button class="circle_img_section">
                                                    <img src="{{asset('engineer_company/images/user2.png')}}">
                                                    <p class="circle_img_text mt-3">홍길동 기사님</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">No.</th>
                                                <th class="text-center">registration date
                                                </th>
                                                <th class="text-center">customer number
                                                </th>
                                                <th class="text-center">building name
                                                </th>
                                                <th class="text-center">address
                                                </th>
                                                <th class="text-center">building management company
                                                </th>
                                                <th class="text-center">maintenance company
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a href="javascript: void(0);"
                                                                                   class="text-body  tble_text">20</a> </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        2022.11.01
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        223456-5032
                                                    </p>
                                                </td>
                                                <td  class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        Four Points Hotel
                                                    </p>
                                                </td>
                                                <td  class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        168 Dosan
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        Daekwang In

                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        EPS
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
                            <div class="card">
                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <div class="card_section_2">
                                        <div class="row align-items-baseline">
                                            <div class="col-lg-11">
                                                <div>
                                                    <h4 class="card_tittle_2">Kếng Động Đồng Đồng Página
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <h4 class="card_tittle_2" style="text-align: end;">3 / 4</h4>
                                            </div>
                                        </div>
                                    </div>




                                    <!--------------------- collapse section  update start-------------------- -->

                                    <!-- form row 1 start  -->
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="colllap_section_12 mt-5">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="height: auto;border-right: 0px;">
                                                            <p class="colllap_section_text">
                                                                기타 수리
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="d-flex custom_padd-left">
                                                            <div class="w-100 colllap_section_3">
                                                                <ol class="collape_list_text">
                                                                    <li  onclick="HideShow($('#form_32'))">
                                                                        <p class="collape_list_text">
                                                                            1. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_32" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <li  onclick="HideShow($('#form_33'))">
                                                                        <p class="collape_list_text">
                                                                            2. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_33" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <li  onclick="HideShow($('#form_34'))">
                                                                        <p class="collape_list_text">
                                                                            3. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_34" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ol>

                                                            </div>
                                                            <button class="collapse_button">
                                                                <i class="fa-regular fa-plus"></i>
                                                            </button>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-1">

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div></div>
                                    <!-- form row 1 end  -->

                                    <!-- form row 2 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section_12">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="height: auto;border-right: none;">
                                                            <p class="colllap_section_text">
                                                                기타 수리
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="d-flex custom_padd-left">
                                                            <div class="w-100 colllap_section_3">
                                                                <ol class="collape_list_text">
                                                                    <li  onclick="HideShow($('#form_29'))">
                                                                        <p class="collape_list_text">
                                                                            1. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_29" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <li  onclick="HideShow($('#form_30'))">
                                                                        <p class="collape_list_text">
                                                                            2. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_30" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <li  onclick="HideShow($('#form_31'))">
                                                                        <p class="collape_list_text">
                                                                            3. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_31" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ol>

                                                            </div>
                                                            <button class="collapse_button">
                                                                <i class="fa-regular fa-plus"></i>
                                                            </button>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-1">

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div></div>
                                    <!-- form row 2 end  -->

                                    <!-- form row 3 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section_12">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="height: auto;border-right: none;">
                                                            <p class="colllap_section_text">
                                                                기타 수리
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="d-flex custom_padd-left">
                                                            <div class="w-100 colllap_section_3">
                                                                <ol class="collape_list_text">
                                                                    <li  onclick="HideShow($('#form_26'))">
                                                                        <p class="collape_list_text">
                                                                            1. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_26" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <li  onclick="HideShow($('#form_27'))">
                                                                        <p class="collape_list_text">
                                                                            2. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_27" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <li  onclick="HideShow($('#form_28'))">
                                                                        <p class="collape_list_text">
                                                                            3. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_28" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ol>

                                                            </div>
                                                            <button class="collapse_button">
                                                                <i class="fa-regular fa-plus"></i>
                                                            </button>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-1">

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div></div>
                                    <!-- form row 3 end  -->

                                    <!-- form row 4 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="border-right: none;">
                                                            <p class="colllap_section_text">
                                                                팔레트
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="colllap_section_3 custom_padd_2">
                                                            <ol class="collape_list_text">
                                                                <li  onclick="HideShow($('#form_24'))">
                                                                    <p class="collape_list_text">
                                                                        1. 중앙리
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_24" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_25'))">
                                                                    <p class="collape_list_text">
                                                                        2. 중앙리
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_25" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="plus_icn_section">
                                                            <i class="fa-regular fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->


                                    <!-- form row 5 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_4" style="border-right: none;">
                                                            <p class="colllap_section_text">
                                                                팔레트
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="colllap_section_13">
                                                            <ol class="collape_list_text">
                                                                <li  onclick="HideShow($('#form_17'))">
                                                                    <p class="collape_list_text">
                                                                        1 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_17" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_18'))">
                                                                    <p class="collape_list_text">
                                                                        1-2. 중앙리프
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_18" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_19'))">
                                                                    <p class="collape_list_text">
                                                                        1-3. 중앙리프
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_19" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_20'))">
                                                                    <p class="collape_list_text">
                                                                        2. 중앙리프
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_20" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_21'))">
                                                                    <p class="collape_list_text">
                                                                        2-1. 중앙리
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_21" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_22'))">
                                                                    <p class="collape_list_text">
                                                                        2-2. 중앙리
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_22" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_23'))">
                                                                    <p class="collape_list_text">
                                                                        2-3. 중앙리
                                                                        <span class="custom_padd-left"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_23" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="plus_icn_section">
                                                            <i class="fa-regular fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 5 end  -->

                                    <!-- form row 6 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="border-right: 0px;">
                                                            <p class="colllap_section_text mb-0">
                                                                도면 및
                                                            </p>
                                                            <p class="colllap_section_text">
                                                                프로그램 관리
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="colllap_section_6">
                                                            <ol class="collape_list_text">
                                                                <li  onclick="HideShow($('#form_14'))">
                                                                    <p class="collape_list_text">
                                                                        1. 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_14" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <li  onclick="HideShow($('#form_15'))">
                                                                    <p class="collape_list_text">
                                                                        2 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_15" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <li  onclick="HideShow($('#form_16'))">
                                                                    <p class="collape_list_text">
                                                                        3 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_16" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="plus_icn_section">
                                                            <i class="fa-regular fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 6 end  -->



                                    <!-- form row 7 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_4" style="border-right: 0px;">
                                                            <button class="collap_yello_section">
                                                                <p>
                                                                    센서
                                                                </p>
                                                            </button>
                                                            <p class="colllap_section_text mt-2">
                                                                전기파트
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="colllap_section_5">
                                                            <ol class="collape_list_text">
                                                                <li  onclick="HideShow($('#form_7'))">
                                                                    <p class="collape_list_text">
                                                                        1) 중앙리
                                                                        <span  class="custom_padd"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_7" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_8'))">
                                                                    <p class="collape_list_text">
                                                                        2) 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_8" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_9'))">
                                                                    <p class="collape_list_text">
                                                                        3) 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_9" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_10'))">
                                                                    <p class="collape_list_text">
                                                                        4) 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_10" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_11'))">
                                                                    <p class="collape_list_text">
                                                                        5) 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_11" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <li  onclick="HideShow($('#form_12'))">
                                                                    <p class="collape_list_text">
                                                                        6) 중앙리
                                                                        <span  class="custom_padd"><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_12" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_13'))">
                                                                    <p class="collape_list_text">
                                                                        7) 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_13" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="plus_icn_section">
                                                            <i class="fa-regular fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 7 end  -->


                                    <!-- form row 8 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_7" style="border-right: 0px;">
                                                            <button class="collap_section_button">
                                                                <p>
                                                                    센서
                                                                </p>
                                                            </button>
                                                            <p class="colllap_section_text mt-2">
                                                                전기파트 2
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="colllap_section_6">
                                                            <ol class="collape_list_text">
                                                                <li  onclick="HideShow($('#form_4'))">
                                                                    <p class="collape_list_text">
                                                                        1. 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_4" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_5'))">
                                                                    <p class="collape_list_text">
                                                                        2. 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_5" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <li  onclick="HideShow($('#form_6'))">
                                                                    <p class="collape_list_text">
                                                                        3. 중앙리프트
                                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                    </p>
                                                                </li>
                                                                <div id="form_6" class="d-flex d-none custom_border">
                                                                    <div class="col-lg-2">
                                                                        <div class="colllap_section_11">
                                                                            <ol class="collape_list_text">
                                                                                <li>
                                                                                    <p class="collape_list_text">규격 </p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text pt-2">수량</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4">작업이력</p>
                                                                                </li>

                                                                                <li>
                                                                                    <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                </li>


                                                                            </ol>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                        <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4 mt-2">
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                    </div>
                                                                                    <!-- input-group -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-9">
                                                                                <button class="collape_button mb-3">첨부파일
                                                                                    업로드</button>
                                                                            </div>
                                                                            <div class="col-lg-3" style="text-align: end;">
                                                                                <button class="collape_button_2 mb-3">저장</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="plus_icn_section">
                                                            <i class="fa-regular fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 8 end  -->


                                    <!-- form row 9 start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-11">
                                            <div class="colllap_section_12">
                                                <div class="row">
                                                    <div class="col-lg-3" style="border-right: 1px solid rgba(225, 227, 236, 1);">
                                                        <div class="colllap_section_2" style="height: auto; border-right: 0px;">
                                                            <p class="colllap_section_text">
                                                                기타 수리
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="d-flex custom_padd-left">
                                                            <div class="w-100 colllap_section_3">
                                                                <ol class="collape_list_text">
                                                                    <li  onclick="HideShow($('#form'))">
                                                                        <p class="collape_list_text">
                                                                            1. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <li  onclick="HideShow($('#form_2'))">
                                                                        <p class="collape_list_text">
                                                                            2. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_2" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <li  onclick="HideShow($('#form_3'))">
                                                                        <p class="collape_list_text">
                                                                            3. 중앙리프트
                                                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                                                        </p>
                                                                    </li>
                                                                    <div id="form_3" class="d-flex d-none custom_border">
                                                                        <div class="col-lg-2">
                                                                            <div class="colllap_section_11">
                                                                                <ol class="collape_list_text">
                                                                                    <li>
                                                                                        <p class="collape_list_text">규격 </p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text pt-2">수량</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4">작업이력</p>
                                                                                    </li>

                                                                                    <li>
                                                                                        <p class="collape_list_text mt-4 pt-3">사진</p>
                                                                                    </li>


                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">


                                                                            <input type="email" class="form-control col-lg-12 custom_input_tble mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="mb-4 mt-2">
                                                                                        <div class="input-group" id="datepicker1">
                                                                                            <input type="text" class="form-control" placeholder="2022-12-09      교체함" data-date-format="dd M, yyyy" data-date-container="#datepicker1" data-provide="datepicker">
                                                                                        </div>
                                                                                        <!-- input-group -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-9">
                                                                                    <button class="collape_button mb-3">첨부파일
                                                                                        업로드</button>
                                                                                </div>
                                                                                <div class="col-lg-3" style="text-align: end;">
                                                                                    <button class="collape_button_2 mb-3">저장</button>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ol>

                                                            </div>
                                                            <button class="collapse_button">
                                                                <i class="fa-regular fa-plus"></i>
                                                            </button>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="col-lg-1">

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div></div>
                                    <!-- form row 9 end  -->
                                    <!--------------------- collapse section  update start-------------------- -->

                                    <!-- form row  start  -->
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <div class="collap_section_lst">
                                                <p class="collap_section_lst_text">
                                                    + add
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row  end  -->


                                    <!-- form row 4 start  -->
                                    <div class="row justify-content-end">
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button_2 mb-5 mt-5">previous page
                                            </button>
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            <button class="form_button mb-5 mt-5">Save and Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>


                    <!-- section 2 end  -->

                    <!---------------------------- tabel 2 start----------------  -->

                </div>
                <!-- container-fluid -->
                <!-------------------------------- table 2 end---------------  -->

            </div>
            <!-- End Page-content -->

            <!-- Transaction Modal -->
            <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
                 aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                            <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src=""{{asset('engineer_company/assets/images/product/img-7.png')}}" alt=""
                                                     class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone
                                                    (Black)
                                                </h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src=""{{asset('engineer_company/assets/images/product/img-4.png')}}" alt=""
                                                     class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Phone patterned cases
                                                </h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Sub Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Shipping:</h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->



            <!-- <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        </div>
    </div>
@endsection

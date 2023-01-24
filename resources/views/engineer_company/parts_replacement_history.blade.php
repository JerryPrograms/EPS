@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">

                    <!-- start page title -->
                    <form id="add_part_replacement_form">
                        <input name="customer_id" value="{{$customer->id}}" hidden>
                        @csrf
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="prompt w-100"></div>
                                <div class="card">
                                    <div class="card-body mb-4">
                                        <h4 class="card-title mb-4">Fill in customer information
                                        </h4>
                                        <div class="row">

                                            <div class="col-md-1 col-3">
                                                <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                    <button id="dropdownMenu-calendarType"
                                                            class="btn d-flex mt-4  btn_drop" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        <i id="calendarTypeIcon" class="calendar-icon ic_view_month"
                                                           style="margin-right: 4px;"></i>
                                                        <span id="calendarTypeName">filter
                                                            </span>
                                                        <span class="icon_img">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/Polygon 4.png')}}"
                                                                    alt="">
                                                            </span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu"
                                                        aria-labelledby="dropdownMenu-calendarType">
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
                                                                Building management company </a>
                                                        </li>


                                                    </ul>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-9">
                                                <div class="custom_search_2">
                                                    <div class="search mt-4">
                                                        <input type="text" class="form-control" placeholder="search">
                                                        <button class="btn btn-primary searchbar_button">
                                                            <div class="search_img">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/gray_searchbar.png')}}"/>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="circle_main_section">
                                                    <button class="circle_img_section">
                                                        <img src="{{asset('engineer_company/images/user2.png')}}">
                                                        <p class="circle_img_text mt-3">기사 홍길동

                                                        </p>
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
                                                    <td class="custom_br_theme_clr"><a
                                                            href="javascript: void(0);"
                                                            class="text-body  tble_text">1</a>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->created_at->format('Y.m.d')}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->customer_number}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->building_name}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->address}}
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->building_management_company}}

                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        <p class="tble_text">
                                                            {{$customer->maintenance_company}}
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
                                                    <div class="">
                                                        <h4 class="card_tittle_2">Customer information creation page
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">5 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-4">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0"> <span
                                                        class="bor_lef">&nbsp;</span> customer information
                                                </h4>
                                            </div>
                                            <div class="col-lg-1">

                                                <div class="file_main_section">
                                                    <button class="file_button">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- form row 1 end  -->

                                        <!-- row 2 start  -->
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="circle_img_text mt-3">
                                                    Initial installation date
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mt-2">
                                                <div class="input-group" id="datepicker1">
                                                    <input id="initial_date"
                                                           type="date" name="initial_date"
                                                           class="form-control frm_section_inp"
                                                           placeholder="2022-12-06" data-date-format="dd M, yyyy"
                                                           data-date-container='#datepicker1'
                                                           data-provide="datepicker">
                                                </div><!-- input-group -->
                                            </div>

                                        </div>
                                        <!-- row 2 end  -->


                                        <!-- row 2 start  -->
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <p class="circle_img_text mt-3">
                                                    <b>Failure and replacement history
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="dropdown align-self-start mt-sm-0 mb-2">
                                                    <select onchange="FilterData($(this).val())" autocomplete="off"
                                                            class="form-select mt-2">
                                                        <option value="" disabled selected>--Select registration date
                                                            --
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-01">{{now()->format('Y')}}
                                                            - 01
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-02">{{now()->format('Y')}}
                                                            - 02
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-03">{{now()->format('Y')}}
                                                            - 03
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-04">{{now()->format('Y')}}
                                                            - 04
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-05">{{now()->format('Y')}}
                                                            - 05
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-06">{{now()->format('Y')}}
                                                            - 06
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-07">{{now()->format('Y')}}
                                                            - 07
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-08">{{now()->format('Y')}}
                                                            - 08
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-09">{{now()->format('Y')}}
                                                            - 09
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-10">{{now()->format('Y')}}
                                                            - 10
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-11">{{now()->format('Y')}}
                                                            - 11
                                                        </option>
                                                        <option value="{{now()->format('Y')}}-12">{{now()->format('Y')}}
                                                            - 12
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end">
                                                <button type="button" onclick="addReplacementHistoryRow()"
                                                        class="history_add_btn">Add
                                                </button>
                                            </div>
                                        </div>
                                        <!-- row 2 end----------------------------------------------------------------------------------------------------------------  -->


                                    </div>

                                    <!-- end row -->


                                    <!-- section 2 end  -->

                                    <!--- tabel 2 start--- -->
                                    <!-- end page title------------------------------- -->
                                    <div class="table-responsive mt-3" style="margin: 0px 20px;">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th>No.</th>
                                                <th class="text-center custom_inp_widt_2">registration date
                                                </th>
                                                <th class="text-center custom_inp_widt_2">part
                                                </th>
                                                <th class="text-center custom_inp_widt_2 custom_wisth_input_2">manager
                                                </th>
                                                <th class="text-center">AS content
                                                </th>
                                                <th class="text-center">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="partReplacemnetTbody">
                                            @php
                                                $PartsReplacementHistory = $customer->PartReplacementHistory()->paginate(5);
                                            @endphp
                                            @foreach($PartsReplacementHistory as $rh)
                                                <tr>
                                                    <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                                                        class="text-body fw-bold">{{$loop->index + 1}}</a>
                                                    </td>
                                                    <td class="custom_br_theme_gray_2">
                                                        <button
                                                            class="date_button border-0">{{$rh->created_at->format('Y.m.d')}}</button>
                                                    </td>

                                                    <td class="custom_br_theme_gray_2">
                                                        <button class="date_button_2 border-0">{{$rh->part}}
                                                        </button>
                                                    </td>

                                                    <td class="custom_br_theme_gray_2">
                                                        <button class="date_button_2 border-0">{{$rh->manager}}
                                                        </button>
                                                    </td>
                                                    <td class="custom_br_theme_gray_3">
                                                        <!-- Button trigger modal -->
                                                        <button class="date_button_2 border-0">{{$rh->as_content}}
                                                        </button>
                                                    </td>
                                                    <td class="custom_br_theme_gray_3">
                                                        <!-- Button trigger modal -->
                                                        <a>

                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


                                        <div id="PartsReplacementHistoryPagination" class="col-lg-12">
                                            {!! $PartsReplacementHistory->links('common_files.paginate') !!}
                                        </div>


                                        <!-- end table-responsive -->
                                    </div>

                                    <!-- end table-responsive -->

                                    <!-- end page title end---------------------  -->
                                    <!-- form row 4 start  -->
                                    <div class="main_section_buttn">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button_2 mb-5 mt-5">Back page
                                                </button>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5 submitbtn">Save and Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- container-fluid -->
                <!---table 2 end----  -->
            </div>
            <!-- End Page-content -->
        </div>
    </div>
@endsection
@section('custom-script')
    <script>


        var counter = 0;

        function addReplacementHistoryRow() {
            counter++;
            $('#initial_date').attr('required', true);
            $('#partReplacemnetTbody').prepend(`
   <tr class="mt-5">
                                            <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                    class="text-body fw-bold">#</a> </td>
                                            <td class="custom_br_theme_gray_2">
                                                <input type="date" name="registration_date[]"
                                                    class="form-control col-lg-12 custom_input_tble"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="2022.11.01" required>
                                            </td>


                                            <td class="custom_br_theme_gray_2">
                                                <input type="text" name="part[]"
                                                    class="form-control col-lg-2 custom_input_tble"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="Part name"
                                                     required>
                                            </td>

                                            <td class="custom_br_theme_gray_2">
                                                <input type="text" name="manager[]"
                                                    class="form-control col-lg-12 custom_input_tble"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="Manager Name
                                                    " required>
                                            </td>

                                            <td class="custom_br_theme_gray_3">
                                                <input type="text" name="as_content[]"
                                                    class="form-control col-lg-2 custom_input_tble"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                    placeholder="AS content
                                                    " required>
                                            </td>

                                 <td class="custom_br_theme_gray_3">
                            <button type="button" onclick="removeRow($(this).parent().parent())" class="transparent-btn"><i class=" fa fa-trash-can"></i></button>
                                 </td>
                                        </tr>
             `);
        }

        function removeRow(element) {
            element.remove();
            counter--;
            if(counter == 0)
            {
                $('#initial_date').attr('required', false);
            }
        }

        $('#add_part_replacement_form').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#add_part_replacement_form'), "{{ route('CreatePartReplacementHistory') }}", $('#add_part_replacement_form').find('.submitbtn'), "{{ route('ec.CreatePartsReplacementHistory',request()->segment(3)) }}", onRequestSuccess);
        });


        function FilterData(date) {
            console.log(date);
            $.ajax({
                type: "POST",
                url: '{{route('FilterPartReplacementHistory')}}',
                dataType: 'json',
                cache: false,
                data: {
                    '_token': '{{csrf_token()}}',
                    'date': date,
                },
                beforeSend: function () {


                },
                success: function (res) {
                    $('#partReplacemnetTbody').html('');
                    $('#partReplacemnetTbody').html(res.html);
                    $('#PartsReplacementHistoryPagination').remove();
                },
                error: function (e) {
                }
            });
        }
    </script>
@endsection

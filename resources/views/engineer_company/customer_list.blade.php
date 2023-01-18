@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->


                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">고객 정보</h4>
                                    <div class="row">

                                        <div class="col-md-1 col-6">
                                            <div class="dropdown align-self-start mt-3 mt-sm-0 mb-2">
                                                <button id="dropdownMenu-calendarType" class="btn d-flex mt-4  btn_drop"
                                                        type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="true">
                                                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month"
                                                       style="margin-right: 4px;"></i>
                                                    <span id="calendarTypeName">Filter</span>
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
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-6">
                                            <div class="custom_search">
                                                <div class="search mt-4">
                                                    <input type="text" class="form-control" placeholder="검색하기">
                                                    <button class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/search.png')}}"/>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12 text-end">
                                            <button data-bs-toggle="modal" data-bs-target="#customerInfoModal"
                                                    type="button" class="btn btn-primary waves-effect waves-light w-sm">
                                                <i class="mdi mdi-plus d-block font-size-16"></i>
                                            </button>
                                        </div>
                                    </div>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">No.</th>
                                                <th class="text-center">registration date
                                                </th>
                                                <th class="text-center">customer number
                                                </th>
                                                <th class="text-center">building name
                                                </th>
                                                <th class="text-center">address</th>
                                                <th class="text-center">building management company
                                                </th>
                                                <th class="text-center">maintenance company
                                                </th>
                                                <th class="text-center">action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($customer as $c)
                                                <tr @if($loop->index == 0) class="active" @endif>
                                                    <td class=""><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">{{$loop->index +1}}</a>
                                                    </td>
                                                    <td class="">
                                                        <button
                                                            class="date_button border-0">{{$c->created_at->format('Y.d.m')}}</button>
                                                    </td>
                                                    <td class="">
                                                        <button class="date_button border-0">{{$c->id}}</button>
                                                    </td>
                                                    <td class="">
                                                        <button
                                                            class="date_button_2 border-0">{{$c->building_name}}</button>
                                                    </td>
                                                    <td class="">
                                                        <button title="{{$c->address    }}"
                                                                class="date_button_2 border-0">{{substr($c->address,0,10)}}
                                                            ....
                                                        </button>
                                                    </td>
                                                    <td class="">
                                                        <button
                                                            class="date_button_2 border-0">{{$c->building_management_company}}</button>
                                                    </td>
                                                    <td class="">
                                                        <!-- Button trigger modal -->
                                                        <button
                                                            class="date_button_2 border-0">{{$c->maintenance_company}}</button>
                                                    </td>
                                                    <td class="d-flex">
                                                        <!-- Button trigger modal -->
                                                        <a class="date_button_2 border-0"><i class="fa fa-edit"></i></a>
                                                        <button onclick="$('#customerInfoID').val('{{$c->id}}')"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#customerDeleteModal"
                                                                class="date_button_2 border-0"><i
                                                                class="fa fa-trash-can"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


                                        <div class="col-lg-12 text-center">
                                            {{$customer->links('common_files.paginate')}}
                                        </div>


                                    </div>
                                    <!-- end table-responsive -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
@endsection
@section('modal')
    @include('common_files.customer_add_modal')
    @include('common_files.customer_delete_modal')
@endsection

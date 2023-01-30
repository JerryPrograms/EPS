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
                                <div class="card-body" style="padding-bottom: 50px;">
                                    <h4 class="card-title mb-4">Customer Information</h4>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="align-middle">No.</th>
                                                <th class="text-center">Registraion Date</th>
                                                <th class="text-center">Customer Number</th>
                                                <th class="text-center">Building Name</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Building Management Company</th>
                                                <th class="text-center">Engineer
                                                    company
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a
                                                        href="javascript: void(0);"
                                                        class="text-body  tble_text">1</a></td>
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

                                    <!-- end table-responsive -->
                                    <div class="row m-0">
                                        <div class="searchbar_main_section">
                                            <div class="col-lg-12">
                                                <h4 class="card-title mt-5 border-bottom-0 mb-4"> <span
                                                        class="bor_lef">&nbsp;</span> Input Customer Information</h4>
                                            </div>

                                            <div class="button_section">
                                                <button onclick="window.location.href= '{{route('ec.CreateBuildingInfo',$customer->user_uid)}}'" class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Create Customer Info
                                                    </p>
                                                </button>
                                                <button onclick="window.location.href= '{{route('ec.CreateDispatchInformation',$customer->user_uid)}}'" class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Fill Dispatch Confirmation
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Fill Regular Inspection Log
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Contract Managment
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Quote Management
                                                    </p>
                                                </button>
                                                <button class="searchbar_img_2 border-0 mt-2">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        Construction <br>
                                                        Completion Report
                                                    </p>
                                                </button>
                                            </div>

                                        </div>
                                    </div>


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

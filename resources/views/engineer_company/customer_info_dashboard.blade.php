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
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.Customer_Information') }}
                                    </h4>


                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">
                                                    {{ __('translation.no.') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Registration_Date') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Customer_Number') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Building_Name') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.address') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Building_Management_Company') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Engineer_company') }}
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
                                                        class="bor_lef">&nbsp;</span>
                                                        {{ __('translation.Input_Customer_Information') }}
                                                        </h4>
                                            </div>

                                            <div class="button_section">
                                                <button onclick="window.location.href= '{{route('ec.CreateBuildingInfo',$customer->user_uid)}}'" class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.Create_Customer_Info') }}
                                                    </p>
                                                </button>
                                                <button onclick="window.location.href= '{{route('ec.CreateDispatchInformation',$customer->user_uid)}}'" class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.Fill_Dispatch_Confirmation') }}
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.Fill_Regular_Inspection_Log') }}
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.Contract_Managment') }}
                                                    </p>
                                                </button>
                                                <button class="searchbar_img border-0">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.Quote_Management') }}
                                                    </p>
                                                </button>
                                                <button class="searchbar_img_2 border-0 mt-2">
                                                    <img
                                                        src="{{asset('engineer_company/assets/images/searchbar.png')}}">
                                                    <p class="searchbar_text mt-3">
                                                        {{ __('translation.construction') }} <br>

                                                        {{ __('translation.Completion_Report') }}
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

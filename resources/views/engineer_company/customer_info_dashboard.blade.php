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
                                        {{ __('translation.Customer Information') }}
                                    </h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle custom_mrg">
                                            <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">
                                                    {{ __('translation.no.') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Registration Date') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Customer Number') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Building Name') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.address') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Building Management Company') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Engineer company') }}
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a href="javascript: void(0);"
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
                                                        @if(!empty($customer->GetBuildingInfo))
                                                            {{$customer->GetBuildingInfo->building_name}}
                                                        @endif
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        @if(!empty($customer->GetBuildingInfo))
                                                            {{$customer->GetBuildingInfo->address}}
                                                        @endif
                                                    </p>
                                                </td>

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        @if(!empty($customer->CompanyInformation))
                                                            {{$customer->CompanyInformation->company_name}}
                                                        @endif
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        @if(!empty($customer->CompanyInformation))
                                                            {{$customer->CompanyInformation->company_name}}
                                                        @endif
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
                                                    {{ __('translation.Input Customer Information') }}
                                                </h4>
                                            </div>
                                            <div class="button_section">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('ec.CreateBuildingInfo',$customer->user_uid)}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                src="{{asset('engineer_company/assets/images/1.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Create Customer Info') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        @if(count($customer->DispatchInformation) > 0)
                                                            <button
                                                                onclick="window.location.href= '{{route('ec.ListDispatchInformation',$customer->user_uid)}}'"
                                                                class="searchbar_img border-0 w-100">
                                                                <img style="height: 50px;width: 50px;"
                                                                    src="{{asset('engineer_company/assets/images/2.png')}}">
                                                                <p class="searchbar_text mt-3">
                                                                    {{ __('translation.Fill Dispatch Confirmation') }}
                                                                </p>
                                                            </button>
                                                        @else
                                                            <button
                                                                onclick="window.location.href= '{{route('ec.CreateDispatchInformation',$customer->user_uid)}}'"
                                                                class="searchbar_img border-0 w-100">
                                                                <img style="height: 50px;width: 50px;"
                                                                    src="{{asset('engineer_company/assets/images/3.png')}}">
                                                                <p class="searchbar_text mt-3">
                                                                    {{ __('translation.Fill Dispatch Confirmation') }}
                                                                </p>
                                                            </button>
                                                        @endif
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('regular_inspection_log',$customer->user_uid)}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                src="{{asset('engineer_company/assets/images/1.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Fill Regular Inspection Log') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('contract_management_list',$customer->id)}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                src="{{asset('engineer_company/assets/images/2.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Contract Managment') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('ec.GetQuoteManagement',$customer->user_uid)}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                src="{{asset('engineer_company/assets/images/3.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Quote Management') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('create_construction_completion',$customer->user_uid)}}'"
                                                            class="searchbar_img border-0  w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                src="{{asset('engineer_company/assets/images/3.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.construction') }}

                                                                {{ __('translation.Completion Report') }}
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
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection

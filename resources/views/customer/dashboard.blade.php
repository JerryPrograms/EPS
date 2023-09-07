@extends('engineer_company.includes.layout')
@section('body')
    @php
        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
    @endphp
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
                                                    {{ __('translation.Site') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.address') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.AS company') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.Building Management Company') }}
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
                                                        @if(!empty($building_name))
                                                            {{$building_name}}
                                                        @endif
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        @if(!empty($building_name))
                                                            {{$address}}
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
                                                        @if(!empty($customer->RepairCompanyInformation))
                                                            {{ $customer->RepairCompanyInformation->company_name }}
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
                                                    {{-- <div class="col-lg-2 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('ec.CreateBuildingInfo',auth(activeGuard())->user()->user_uid)}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                 src="{{asset('engineer_company/assets/images/1.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Create Customer Info') }}
                                                            </p>
                                                        </button>
                                                    </div> --}}
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2">

                                                            <button
                                                                onclick="window.location.href= '{{route('distpatch_confirmation_listing')}}'"
                                                                class="searchbar_img border-0 w-100">
                                                                <img style="height: 50px;width: 50px;"
                                                                     src="{{asset('engineer_company/assets/images/3.png')}}">
                                                                <p class="searchbar_text mt-3">
                                                                    {{ __('translation.Dispatch Confirmation') }}
                                                                </p>
                                                            </button>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('regular_inspection_logs')}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                 src="{{asset('engineer_company/assets/images/1.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.regular_inspection_log') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('contract_management')}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                 src="{{asset('engineer_company/assets/images/2.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Contract Managment') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('quotation_management')}}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                 src="{{asset('engineer_company/assets/images/3.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Quote Management') }}
                                                            </p>
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                                                        <button
                                                            onclick="window.location.href= '{{route('construction_completion')}}'"
                                                            class="searchbar_img border-0  w-100">
                                                            <img style="height: 50px;width: 50px;"
                                                                 src="{{asset('engineer_company/assets/images/3.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.construction_completion_report') }}
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

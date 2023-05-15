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
                                                <th>{{ __('translation.no') }}</th>
                                                <th>{{ __('translation.Register Date') }}</th>
                                                <th>{{ __('translation.Company Name') }}</th>
                                                <th>{{ __('translation.Company Number') }}</th>
                                                <th>{{ __('translation.Address') }}</th>
{{--                                                <th>{{ __('translation.Manager Name') }}</th>--}}
                                                <th>{{ __('translation.Contact') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="custom_bor mt-5">
                                                <td class="custom_br_theme_clr"><a
                                                        href="javascript: void(0);"
                                                        class="text-body  tble_text">1</a></td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$company->created_at->format('Y.m.d')}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$company->company_name}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$company->company_registration_number}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$company->address}}
                                                    </p>
                                                </td>
{{--                                                <td class="custom_br_theme_clr_2">--}}
{{--                                                    <p class="tble_text">--}}
{{--                                                        {{$company->company_registration_number}}--}}
{{--                                                    </p>--}}
{{--                                                </td>--}}
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        {{$company->contact}}
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
                                            {{--                                            <div class="button_section">--}}
                                            {{--                                            </div>--}}
                                            <div class="row">
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{ route('engineerscc',$company->id) }}'"
                                                            class="searchbar_img border-0 w-100">
                                                            <img style="width: 50px; height: 50px"
                                                                 src="{{asset('admin/images/company_1.png')}}">
                                                            <p class="searchbar_text mt-3">
                                                                {{ __('translation.Engineer Management') }}
                                                            </p>
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{route('distpatch_confirmation_listing_company',$company->id)}}'"

                                                            class="searchbar_img border-0 w-100">
                                                        <img style="width: 50px; height: 50px"
                                                            src="{{asset('admin/images/company_2.png')}}">
                                                        <p class="searchbar_text mt-3">
                                                            {{ __('translation.Dispatch Confirmation') }}
                                                        </p>
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{route('regular_inspection_logs_company',$company->id)}}'"

                                                            class="searchbar_img border-0 w-100">
                                                        <img style="width: 50px; height: 50px"
                                                            src="{{asset('admin/images/company_3.png')}}">
                                                        <p class="searchbar_text mt-3">
                                                            {{ __('translation.Regular Inspection Log') }}
                                                        </p>
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{route('contract_management_company',$company->id)}}'"

                                                            class="searchbar_img border-0 w-100">
                                                        <img style="width: 50px; height: 50px"
                                                            src="{{asset('admin/images/company_4.png')}}">
                                                        <p class="searchbar_text mt-3">
                                                            {{ __('translation.Contract Managment') }}
                                                        </p>
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{route('quotation_management_company',$company->id)}}'"

                                                            class="searchbar_img border-0 w-100">
                                                        <img style="width: 50px; height: 50px"
                                                            src="{{asset('admin/images/company_5.png')}}">
                                                        <p class="searchbar_text mt-3">
                                                            {{ __('translation.Quote Management') }}
                                                        </p>
                                                    </button>
                                                </div>
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <button onclick="window.location.href = '{{route('construction_completion_company',$company->id)}}'"

                                                            class="searchbar_img border-0 w-100">
                                                        <img style="width: 50px; height: 50px"
                                                            src="{{asset('admin/images/company_6.png')}}">
                                                        <p class="searchbar_text mt-3">
                                                            {{ __('translation.Construction completion report management') }}
                                                        </p>
                                                    </button>
                                                </div>
{{--                                                <div class="col-sm-12 col-md-4 col-lg-2 mt-3">--}}
{{--                                                    <button onclick="window.location.href = '{{route('ec.GetCalenderCompany',$company->id)}}'"--}}

{{--                                                            class="searchbar_img border-0 w-100">--}}
{{--                                                        <img style="width: 50px; height: 50px"--}}
{{--                                                            src="{{asset('admin/images/company_7.png')}}">--}}
{{--                                                        <p class="searchbar_text mt-3">--}}
{{--                                                            {{ __('translation.calender') }}--}}
{{--                                                        </p>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
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

@extends('engineer_company.includes.layout')
@section('body')
    @php
        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="card-title mb-4 d-flex align-items-center justify-content-between mobile-flex-column">
                                        <h5 class="mb-0">{{ __('translation.Regular inspection logs') }}</h5>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="custom_search">
                                                <div class="search">
                                                    <input type="text" id="search" onkeyup="myFunction()"
                                                           class="form-control" name="keyword"
                                                           placeholder="{{ __('translation.search') }}" autocomplete="off"
                                                           required="">
                                                    <button type="submit" class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/search.png')}}">
                                                        </div>
                                                    </button>
    
                                                </div>
                                            </div>
                                            <a href="{{ route('ec.GetCustomerInfoDashboard',request()->segment(3)) }}"
                                                class="btn btn-dark">{{ __('translation.Menu') }}</a>
                                            @if (!empty($customer->BuildingInformation))
                                                <a href="{{ route('write_regular_inspection_log', $customer->user_uid) }}"
                                                class="btn btn-primary">{{ __('translation.Add Inspection') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                    @if (!empty($customer->BuildingInformation))
                                        <div class="table-responsive data-set-list">
                                            <table class="bg-light table bg-light customer-info-table-view">
                                                <thead>
                                                <tr>

                                                    <th class="text-center max-width-18">

                                                        {{ __('translation.Building Name') }}


                                                        <br>
                                                        <div class="custom_info_text_2"> @if(!empty($building_name))
                                                                {{$building_name}}
                                                            @endif
                                                        </div>
                                                    </th>
                                                    <th class="text-center max-width-20">
                                                        {{ __('translation.address') }}

                                                        <br>
                                                        <div class="custom_info_text_2"> @if(!empty($address))
                                                                {{$address}}
                                                            @endif
                                                        </div>
                                                    </th>

                                                    <th class="text-center">

                                                        {{ __('translation.Building Management') }}

                                                        <br>
                                                        <div
                                                            class="custom_info_text_2">
                                                            @if(!empty($customer->CompanyInformation))
                                                                {{$customer->CompanyInformation->company_name}}
                                                            @endif
                                                        </div>
                                                    </th>
                                                    <th class="text-center">

                                                        {{ __('translation.Building Management Company') }}


                                                        <br>
                                                        <div class="custom_info_text_2">
                                                            @if(!empty($customer->RepairCompanyInformation))
                                                                {{$customer->RepairCompanyInformation->company_name}}
                                                            @endif
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>

                                        @if (count($customer->MonthlyRegularInspection) > 0)
                                            <div class="table-responsive data-set-list mt-3">
                                                <table class="table align-middle mb-0 table-theme" id="myTable">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>{{ __('translation.no') }}.</th>
                                                        <th>{{ __('translation.Inspection date') }}</th>
                                                        <th>{{ __('translation.emphysema') }}</th>
                                                        <th>{{ __('translation.site name') }}</th>
                                                        <th>{{ __('translation.Installation place') }}</th>
                                                        <th>{{ __('translation.View more') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($customer->MonthlyRegularInspection as $v)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $v->inspection_date->format('d-m-y') }}</td>
                                                            <td>{{ $v->arrival_time }}</td>
                                                            <td>{{ $building_name }}</td>
                                                            <td>{{ $address}}</td>
                                                            <td class="d-flex gap-1 justify-content-center">
                                                                @if(empty($v->signature))
                                                                <a href="{{ route('edit_regular_inspection_log', $v->id) }}"
                                                                   class="btn btn-outline-success btn-theme-success-outline btn-outline btn-sm">
                                                                    <img
                                                                        src="{{ asset('engineer_company/images/edit_icon.png') }}">
                                                                </a>
                                                                @endif
                                                                <a href="{{ route('view_regular_inspection_log', $v->id) }}"
                                                                   class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                    <img
                                                                        src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <p class="text-center mb-0 mt-4">{{ __('translation.No Logs Found') }}</p>
                                        @endif
                                    @else

                                        <div
                                            class="alert alert-danger">{{ __('translation.Please enter Building information & Parking facility certification information') }}
                                            .<a href="{{ route('ec.CreateBuildingInfo',$customer->user_uid) }}"
                                                class="mx-2 text-decoration-underline">{{ __('translation.Continue') }}</a>
                                        </div>

                                    @endif
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
@section('custom-script')
<script>
    function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].classList.remove('d-none');
                    } else {
                        tr[i].classList.add('d-none');
                    }
                }
            }

            if ($("#myTable tbody tr.main-tr").length == $("#myTable tbody tr.d-none.main-tr").length) {
                $('#no_record').removeClass('d-none');
            } else {
                $("#no_record").addClass('d-none')
            }
        }
</script>
@endsection

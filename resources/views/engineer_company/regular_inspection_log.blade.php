{{-- {{ dd($customer) }} --}}
@extends('engineer_company.includes.layout')
@section('body')
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
                                        @if (!empty($customer->BuildingInformation))
                                            <a href="{{ route('write_regular_inspection_log', $customer->user_uid) }}"
                                               class="btn btn-primary">{{ __('translation.Add Inspection') }}</a>
                                        @endif
                                    </div>
                                    @if (!empty($customer->BuildingInformation))
                                        <div class="table-responsive data-set-list">
                                            <table class="bg-light table bg-light customer-info-table-view">
                                                <thead>
                                                <tr>
                                                    <th>{{ __('translation.info') }}</th>
                                                    <th style="min-width:180px;">{{ __('translation.Customer number') }}</th>
                                                    <th style="min-width:180px;">{{ __('translation.Building name') }}</th>
                                                    <th style="min-width:180px;">{{ __('translation.address') }}</th>
                                                    <th style="min-width:250px;">{{ __('translation.Building management company') }}</th>
                                                    <th style="min-width:180px;">{{ __('translation.Maintenance Company') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $customer->customer_number }}
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $customer->building_name }}
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $customer->BuildingInformation->address }}
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $customer->building_management_company }}
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $customer->maintenance_company }}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @if (count($customer->MonthlyRegularInspection) > 0)
                                            <div class="table-responsive data-set-list mt-3">
                                                <table class="table align-middle mb-0 table-theme">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>{{ __('translation.no') }}.</th>
                                                        <th>{{ __('translation.Inspection date') }}</th>
                                                        <th>{{ __('translation.Emphysema') }}</th>
                                                        <th>{{ __('translation.site name') }}</th>
                                                        <th>{{ __('translation.Installation place') }}</th>
                                                        <th>{{ __('translation.View more') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($customer->MonthlyRegularInspection as $v)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $v->inspection_date->format('d-m-Y') }}</td>
                                                            <td>{{ $v->arrival_time->format('d-m-Y') }}</td>
                                                            <td>{{ $customer->building_name }}</td>
                                                            <td>{{ $customer->building_name }}</td>
                                                            <td class="d-flex gap-1 justify-content-center">
                                                                <a href="{{ route('edit_regular_inspection_log', $v->id) }}"
                                                                   class="btn btn-outline-success btn-theme-success-outline btn-outline btn-sm">
                                                                    <img
                                                                        src="{{ asset('engineer_company/images/edit_icon.png') }}">
                                                                </a>
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
@endsection

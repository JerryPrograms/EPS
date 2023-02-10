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
                                    <h4 class="card-title mb-4">Contract Managemnet List</h4>
                                    <div id="customer_list_table" class="table-responsive mt-3">
                                        <table class="table align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                                <tr>
                                        
                                                    <th class="">No.</th>
                                                    <th class="text-center">Contract Date
                                                    </th>
                                                    <th class="text-center">Customer No
                                                    </th>
                                                    <th class="text-center">Building Name
                                                    </th>
                                                    <th class="text-center">Address</th>
                                        
                                                    <th class="text-center">Building Management Company
                                                    </th>
                                                    <th class="text-center">Contents
                                                    </th>
                                                    <th class="text-center">Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        2022.11.01
                                                    </td>
                                                    <td>
                                                        223456-5032
                                                    </td>
                                                    <td>
                                                        강남을지병원
                                                    </td>
                                                    <td>
                                                        서울시 서초구 남부순환로 158
                                                    </td>
                                                    <td>
                                                        이병로
                                                    </td>
                                                    <td>
                                                        일반유지보수
                                                    </td>
                                                    <td class="d-flex gap-1">
                                                        <button class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                            <img src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                                                        </button>
                                                        <button class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                                                            <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">
                                                        </button>
                                                        <button class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                            <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Contract Details</h4>
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

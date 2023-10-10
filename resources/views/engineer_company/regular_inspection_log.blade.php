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
                                                            <td>{{ $v->inspection_date->format('Y-m-d') }}</td>
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
                                                                @if(activeGuard() != 'web')
                                                                <a @if(activeGuard() == 'admin') style="background-color: #FF3E1D !important; border: none !important;"
                                                                       @endif data-bs-toggle="modal"
                                                                       data-del-id="{{ $v->id }}"
                                                                       data-bs-target="#delModal"
                                                                       class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm delBtn">
                                                                       <img src="https://eps.beckapps.co/eps/public/engineer_company/assets/images/delete.png">
                                                                </a>
                                                                @endif
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
@section('modal')
    <div id="delModal" class="modal fade" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delModalLabel">{{ __('translation.Confirm Delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delinput">
                    <div class="del-prompt"></div>
                    <p>{{ __('translation.Are you sure you want to delete') }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">{{ __('translation.close') }}</button>
                    <button type="button" id="delBtnAction"
                            class="btn btn-primary waves-effect waves-light">{{ __('translation.Save changes') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
@section('custom-script')
<script>
    $('.delBtn').on('click', function () {
            $('#delinput').val($(this).attr('data-del-id'));
        });
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
        $('#delBtnAction').on('click', function () {
            var btn = $(this);
            $.ajax({
                type: "POST",
                url: '{{ route("del_regular_inspection_log") }}',
                dataType: 'json',
                data: {'del_id': $('#delinput').val(), '_token': '{{ csrf_token() }}'},
                beforeSend: function () {
                    btn.prop('disabled', true);
                    btn.html('<i class="fa fa-spinner fa-spin me-1"></i> Processing');
                },
                success: function (response) {
                    if (response.success == true) {
                        $('.del-prompt').html('<div class="alert alert-success mb-3">' + response.message + '</div>');
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        $('.del-prompt').html('<div class="alert alert-danger mb-3">' + response.message + '</div>');
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                },
                error: function () {
                }
            });
        });
</script>
@endsection

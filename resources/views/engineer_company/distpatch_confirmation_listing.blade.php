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
                                        <h5 class="mb-0 font-15">{{ __('translation.Dispatch Confirmation Management') }}</h5>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center">
                                            <div class="custom_search">
                                                <div class="search">
                                                    <input id="myInput" type="text"
                                                           class="form-control" name="keyword"
                                                           placeholder="{{ __('translation.search') }}"
                                                           autocomplete="off"
                                                           required="">
                                                    <button type="submit" class="btn btn-primary searchbar_button">
                                                        <div class="search_img">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/search.png')}}">
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count($dispatch_information_data) > 0)
                                        <div class="table-responsive data-set-list mt-3">
                                            <table class="table table-striped align-middle mb-0 table-theme">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>{{ __('translation.no') }}</th>
                                                    <th>{{ __('translation.Reception date') }}</th>
                                                    <th>{{ __('translation.Reception Time') }}</th>
                                                    <th>{{ __('translation.Dispatcher Name') }}</th>
                                                    <th>{{ __('translation.Dispatch content') }}</th>
                                                    <th>{{ __('translation.Customer Name') }}</th>
                                                    <th>{{ __('translation.Address') }}</th>
                                                    <th>{{ __('translation.Action') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody id="myTable">
                                                @foreach ($dispatch_information_data as $v)
                                                    @php
                                                        $reception_date_and_time = explode(' ',$v->reception_date_and_time);
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $reception_date_and_time[0] }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($reception_date_and_time[1])->format('g:i A') }}</td>
                                                        <td>{{ $v->dispatcher }}</td>
                                                        <td title="{{ $v->submission_details }}">{{ Str::limit($v->submission_details, 10, '...') }}</td>
                                                        <td>{{ $v->GetCustomer->customer_number }}</td>
                                                        <td title="{{ $v->GetCustomer->address }}">{{ Str::limit($v->GetCustomer->address, 10, '...') }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a href="{{ route('ec.ViewDispatchInformation', $v->id) }}"
                                                                   class="btn btn-success btn-custom-table btn-sm">
                                                                    <i class="bx bx-search-alt-2"></i>
                                                                </a>
                                                                @if(activeGuard() != 'web')
                                                                    <a @if(activeGuard() == 'admin') style="background-color: #696CFF !important; border: none !important;"
                                                                       @endif href="{{ route('ec.EditDispatchInformation', $v->id) }}"
                                                                       class="btn btn-primary btn-custom-table btn-sm">
                                                                        <i class="bx bxs-edit-alt"></i>
                                                                    </a>
                                                                    <a data-bs-toggle="modal" data-del-id="{{ $v->id }}"
                                                                       data-bs-target="#delModal"
                                                                       class="btn btn-danger btn-custom-table btn-sm delBtn">
                                                                        <i class="bx bx-trash-alt"></i>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center mt-3">
                                            {!! $dispatch_information_data->links('common_files.paginate') !!}
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img style="height: 200px;"
                                                 src="{{asset('engineer_company/images/no-data-found.png')}}"
                                                 alt="No Records Found">
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

        $('#delBtnAction').on('click', function () {
            var btn = $(this);
            $.ajax({
                type: "POST",
                url: '{{ route("del_dispatch_confirmation_record") }}',
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
        })

        var $rows = $('#myTable tr');
        $('#myInput').keyup(function () {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>
@endsection

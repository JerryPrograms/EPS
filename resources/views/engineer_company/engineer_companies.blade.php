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
                                        <h5 class="mb-0 font-15">{{ __('translation.Engineer Company Management') }}
                                            ({{count($engineer_companies)}})</h5>

                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="left-content d-flex align-items-center me-3">
                                                <div class="custom_search">
                                                    <div class="search">
                                                        <input id="myInput" onchange="myFunction()" type="text"
                                                               class="form-control" name="keyword"
                                                               placeholder="{{ __('translation.search') }}"
                                                               autocomplete="off"
                                                               required="">

                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('add_engineer_company') }}"
                                               class="btn btn-primary">{{ __('translation.Add Company') }}</a>
                                        </div>

                                    </div>
                                    <div class="table-responsive data-set-list mt-3">
                                        <table
                                            class="table {{ (count($engineer_companies) != 0) ? 'table-striped' : '' }} align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>
                                                <th>{{ __('translation.no') }}</th>
                                                <th>{{ __('translation.Register Date') }}</th>
                                                <th>{{ __('translation.Company Name') }}</th>
                                                <th>{{ __('translation.Company Number') }}</th>
                                                <th>{{ __('translation.Address') }}</th>
                                                <th>{{ __('translation.Manager Name') }}</th>
                                                <th>{{ __('translation.Contact') }}</th>
                                                <th>{{ __('translation.Actions') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="myTable">
                                            @if(count($engineer_companies) > 0)
                                                @foreach ($engineer_companies as $engineer_company)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $engineer_company->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $engineer_company->name }}</td>
                                                        <td>{{ $engineer_company->phone }}</td>
                                                        <td>{{ $engineer_company->address }}</td>
                                                        <td>{{ $engineer_company->manager_name }}</td>
                                                        <td>{{ $engineer_company->contract_number }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a href="{{ route('edit_engineer_company',$engineer_company->id) }}"
                                                                   class="btn btn-primary btn-custom-table btn-sm">
                                                                    <i class="bx bxs-edit-alt"></i>
                                                                </a>
                                                                <a data-bs-toggle="modal"
                                                                   data-del-id="{{ $engineer_company->id }}"
                                                                   data-bs-target="#delModal"
                                                                   class="btn btn-danger btn-custom-table btn-sm delBtn">
                                                                    <i class="bx bx-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        <img style="height: 200px" class="img-fluid"
                                                             src="{{asset('engineer_company/images/no-data-found.png')}}">
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        {!! $engineer_companies->links('common_files.paginate') !!}
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
                url: "{{ route('del_engineer_company_action') }}",
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

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
                                    <div>
                                        <div
                                            class="card-title d-flex align-items-center justify-content-between mobile-flex-column mb-0 py-2">
                                            <h5 class="mb-0 font-15">{{ __('translation.Quotation Management') }}</h5>
                                            <div class="left-content d-flex align-items-center">
                                                <div class="custom_search">
                                                    <div class="search">
                                                        <input id="myInput" onchange="myFunction()" type="text"
                                                               class="form-control" name="keyword"
                                                               placeholder="{{ __('translation.search') }}"
                                                               autocomplete="off"
                                                               required="">
                                                        <button type="button" class="btn btn-primary searchbar_button">
                                                            <div class="search_img">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/search.png')}}">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count($quotations) > 0)
                                        <div class="table-responsive data-set-list mt-3">
                                            <table class="table table-striped align-middle mb-0 table-theme">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>{{ __('translation.no') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Quote Date') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Customer Number') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Building Name') }}</th>
                                                    <th>{{ __('translation.Number') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Customer Number') }}</th>
                                                    <th>{{ __('translation.Amount') }}</th>
                                                    <th style="min-width: 150px;">{{ __('translation.Action') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody id="myTable">
                                                @foreach ($quotations as $v)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $v->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $v->getCustomer->customer_number }}</td>
                                                        <td>{{ $v->getCustomer->building_name }}</td>
                                                        <td>{{ count($v->GetQuoteContent) }}</td>
                                                        <td>{{ $v->GetCustomer->customer_number }}</td>
                                                        <td>{{ $v->total_amount }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a @if(activeGuard() == 'admin') style="background-color: #6281FE !important; border: none"
                                                                   @endif href="{{ route('ec.ViewDispatchInformation', $v->id) }}"
                                                                   class="btn btn-success btn-custom-table btn-sm">
                                                                    <i class="bx bx-search-alt-2"></i>
                                                                </a>
                                                                @if(activeGuard() != 'web')
                                                                    <a href="{{ route('ec.EditDispatchInformation', $v->id) }}"
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
                                            {!! $quotations->links('common_files.paginate') !!}
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img src="{{asset('engineer_company/images/no-data-found.png')}}"
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

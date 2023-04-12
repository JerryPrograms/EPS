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
                                        <h5 class="mb-0 font-15">{{ __('translation.Engineer Management') }}</h5>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center me-3">
                                            <div class="custom_search">
                                                <div class="search">
                                                    <input id="myInput" onchange="myFunction()" type="text"
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
                                    <div class="table-responsive data-set-list mt-3">
                                        <table
                                            class="table {{ (count($as_information) != 0) ? 'table-striped' : '' }} align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Company Name</th>
                                                <th>Contract Date</th>
                                                <th>Fee</th>
                                                <th>Tax Invoice Issue Date</th>
                                                <th>Payment Date</th>
                                                <th>Payment Method</th>
                                            </tr>
                                            </thead>
                                            <tbody id="myTable">
                                            @if(count($as_information) > 0)
                                                @foreach ($as_information as $engineer)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $engineer->repair_company_name }}</td>
                                                        <td>{{ $engineer->contract_date }}</td>
                                                        <td>{{ $engineer->fee}}</td>
                                                        <td>{{ $engineer->invoice_issue_date }}</td>
                                                        <td>{{ $engineer->payment_date }}</td>
                                                        <td>{{ $engineer->payment_method }}</td>
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
                                            <tr id="no_record_found" class="text-center d-none">
                                                <td colspan="8"><img style="height: 200px;"
                                                                     src="{{asset('engineer_company/images/no-data-found.png')}}"
                                                                     alt="No Records Found"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        {!! $as_information->links('common_files.paginate') !!}
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
                url: "{{ route('del_engineer_action') }}",
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
            let count = 0;
            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                if (!~text.indexOf(val)) {
                    count++;
                }
                return !~text.indexOf(val);
            }).hide();
            if (count == $rows.length) {
                $('#no_record_found').removeClass('d-none').show();
            } else {
                if (!$('#no_record_found').hasClass('d-none')) {
                    $('#no_record_found').addClass('d-none').hide();
                }
            }
        });
    </script>
@endsection

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
                                        <div class="d-flex w-75 align-items-center">
                                            <h5 class="mb-0 font-15">{{ __('translation.Regular Inspection Log Management') }}</h5>
                                            <select
                                                onchange="window.location.href = '{{route('regular_inspection_logs','id')}}'.replace('id',$(this).val())"
                                                class="form-select valid w-25 ms-3" name="type" autocomplete="off"
                                                required="">
                                                <option selected value="" disabled="">
                                                    --Select Filter--
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '1' ? 'selected' : ''}} value="1">{{ date("Y")}}
                                                    -01
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '2' ? 'selected' : ''}} value="2">{{ date("Y")}}
                                                    -02
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '3' ? 'selected' : ''}} value="3">{{ date("Y")}}
                                                    -03
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '4' ? 'selected' : ''}} value="4">{{ date("Y")}}
                                                    -04
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '5' ? 'selected' : ''}} value="5">{{ date("Y")}}
                                                    -05
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '6' ? 'selected' : ''}} value="6">{{ date("Y")}}
                                                    -06
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '7' ? 'selected' : ''}} value="7">{{ date("Y")}}
                                                    -07
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '8' ? 'selected' : ''}} value="8">{{ date("Y")}}
                                                    -08
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '9' ? 'selected' : ''}} value="9">{{ date("Y")}}
                                                    -09
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '10' ? 'selected' : ''}} value="10">{{ date("Y")}}
                                                    -10
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '11' ? 'selected' : ''}} value="11">{{ date("Y")}}
                                                    -11
                                                </option>
                                                <option
                                                    {{request()->segment(3) == '12' ? 'selected' : ''}} value="12">{{ date("Y")}}
                                                    -12
                                                </option>
                                            </select>
                                            @if(!empty(request()->segment(3)))
                                                <a href="{{route('regular_inspection_logs')}}"
                                                   class="btn btn-primary ms-2">Clear Filter</a>
                                            @endif
                                        </div>


                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center">
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
                                    @if (count($logs) > 0)
                                        <div class="table-responsive data-set-list mt-3">
                                            <table class="table table-striped align-middle mb-0 table-theme">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>{{ __('translation.no') }}</th>
                                                    <th>{{ __('translation.Inspection date') }}</th>
                                                    <th>{{ __('translation.Inspector') }}</th>
                                                    <th>{{ __('translation.Inspection Content') }}</th>
                                                    <th>{{ __('translation.Building Name') }}</th>
                                                    <th>{{ __('translation.address') }}</th>
                                                    <th>{{ __('translation.action') }}</th>
                                                </tr>
                                                </thead>
                                                <tbody id="myTable">
                                                @foreach ($logs as $v)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $v->inspection_date }}</td>
                                                        <td>{{ $v->inspection_manager }}</td>
                                                        <td>{{ $v->special_notes }}</td>
                                                        <td title="{{ $v->getCustomer->building_name }}">{{ $v->getCustomer->building_name }}</td>
                                                        <td title="{{ $v->GetCustomer->address }}">{{ Str::limit($v->GetCustomer->address, 20, '...') }}</td>
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a @if(activeGuard() == 'admin') style="background-color: #4ADE80 !important; border: none"
                                                                   @endif href="{{ route('view_regular_inspection_log', $v->id) }}"
                                                                   class="btn btn-success btn-custom-table btn-sm">
                                                                    <i class="bx bx-search-alt-2"></i>
                                                                </a>
                                                                @if(activeGuard() != 'web')
                                                                    <a @if(activeGuard() == 'admin') style="background-color: #696CFF !important; border: none !important;"
                                                                       @endif href="{{ route('edit_regular_inspection_log', $v->id) }}"
                                                                       class="btn btn-primary btn-custom-table btn-sm">
                                                                        <i class="bx bxs-edit-alt"></i>
                                                                    </a>
                                                                    <a @if(activeGuard() == 'admin') style="background-color: #FF3E1D !important; border: none !important;"
                                                                       @endif data-bs-toggle="modal"
                                                                       data-del-id="{{ $v->id }}"
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
                                            {!! $logs->links('common_files.paginate') !!}
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

@extends('engineer_company.includes.layout')
@section('body')
    @php

        if(activeGuard() != 'admin')
            {
                  $company = \App\Models\Engineer_company::where('id',auth(activeGuard())->id())->first();
            }
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
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
                                                <th>{{ __('translation.Manager Name') }}</th>
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
                                                </td>
                                                </td>
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

                                                <td class="custom_br_theme_clr_2">
                                                    <p class="tble_text">
                                                        {{$company->company_registration_number}}
                                                    </p>
                                                </td>
                                                <td class="custom_br_theme_clr_3">
                                                    <p class="tble_text">
                                                        {{$company->contact}}
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="card-title mb-4 d-flex align-items-center justify-content-between mobile-flex-column">
                                        <h5 class="mb-0 font-15">{{ __('translation.Engineer Management') }}</h5>
                                        <div class="d-flex gap-3">
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
                                            @if(activeGuard() == 'admin')
                                                <a href="{{ route('add_engineer_by_company',$company->id) }}"
                                                   class="btn btn-primary">{{ __('translation.Add') }}</a>
                                            @else
                                                <a href="{{ route('add_engineer_by_company',auth(activeGuard())->id()) }}"
                                                   class="btn btn-primary">{{ __('translation.Add') }}</a>
                                            @endif
                                            <a href="javascript:void(0)" onclick="OpenModal()"
                                               class="btn btn-primary">{{ __('translation.delete') }}</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive data-set-list mt-3">
                                        <table
                                            class="table {{ (count($engineers) != 0) ? 'table-striped' : '' }} align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>
                                                <th>{{ __('translation.no') }}</th>
                                                <th>{{ __('translation.Register Date') }}</th>
                                                <th>{{ __('translation.Affiliate Company Name') }}</th>
                                                <th>{{ __('translation.Name') }}</th>
                                                <th>{{ __('translation.Phone number') }}</th>
                                                @if(activeGuard() == 'admin')
                                                    <th>{{__('translation.Password')}}</th>
                                                @endif
                                                <th>{{ __('translation.Action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="myTable">
                                            @if(count($engineers) > 0)
                                                @foreach ($engineers as $engineer)
                                                    <tr onclick="selectRow($(this),'{{$engineer->id}}')">
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $engineer->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $engineer->getEngineerCompany->company_name }}</td>
                                                        <td>{{ $engineer->name }}</td>
                                                        <td>{{ $engineer->phone }}</td>
                                                        @if(activeGuard() == 'admin')
                                                            <td>
                                                                <span class="">*********</span>
                                                                <span class="d-none">{{ $engineer->pwd }}</span>
                                                                <button onclick="showPassword($(this))"
                                                                        style="background: transparent; border: none;">
                                                                    <i class="fa fa-eye"></i></button>
                                                            </td>
                                                        @endif
                                                        <td>
                                                            <div class="d-flex gap-1 justify-content-center">
                                                                <a @if(activeGuard() == 'admin')
                                                                   @endif href="{{ route('edit_engineer',$engineer->id) }}"
                                                                   class="btn back-green btn-outline btn-sm">
                                                                    <img
                                                                        src="{{asset('engineer_company/images/edit_icon.png')}}">
                                                                </a>
                                                                <a @if(activeGuard() == 'admin')
                                                                   @endif data-bs-toggle="modal"
                                                                   data-del-id="{{ $engineer->id }}"
                                                                   data-bs-target="#delModal"
                                                                   class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                    <img
                                                                        src="{{asset('engineer_company/assets/images/red-search.png')}}">
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
                                            <tr id="no_record_found" class="text-center d-none">
                                                <td colspan="8"><img style="height: 200px;"
                                                                     src="{{asset('engineer_company/images/no-data-found.png')}}"
                                                                     alt="No Records Found"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        {!! $engineers->links('common_files.paginate') !!}
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


        function showPassword(element) {
            if (element.prev().hasClass('d-none')) {
                element.prev().removeClass('d-none');
                element.prev().prev().addClass('d-none');
            } else {
                element.prev().addClass('d-none');
                element.prev().prev().removeClass('d-none');
            }
        }

        function selectRow(id, value) {

            $('tr').each(function () {

                $(this).removeClass('selected-row-blue');

            });

            if (id.hasClass('selected-row-blue')) {
                id.removeClass('selected-row-blue');
            } else {
                id.addClass('selected-row-blue');
            }
            // console.log(value);
            $('#delinput').val(value);
        }

        function OpenModal() {
            console.log($('#delinput').val());
            if ($('#delinput').val() == '') {
                console.log('asd');
                Command: toastr["error"]("{{__('translation.Please select a row first')}}")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": 300,
                    "hideDuration": 1000,
                    "timeOut": 2000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            } else {
                $('#delModal').modal('show');

            }
        }
    </script>
@endsection

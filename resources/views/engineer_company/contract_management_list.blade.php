@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .selected-row {
            border: 3px solid #6281FE !important;
        }
    </style>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.Contract Managemnet List') }}
                                    </h4>
                                    <div class="d-flex align-items-center table-top-actions gap-1">
                                        <select class="form-select select_filter" name="filter" autocomplete="off"
                                                required>
                                            <option selected="" value=""
                                                    disabled="">{{ __('translation.Filter') }}</option>
                                            <option value="all">
                                                {{ __('translation.all') }}
                                            </option>
                                            <option value="created_at">
                                                {{ __('translation.Registration Date') }}
                                            </option>
                                            <option value="building_name">
                                                {{ __('translation.Building Name') }}
                                            </option>
                                            <option value="customer_number">
                                                {{ __('translation.Customer Number') }}
                                            </option>
                                            <option value="address">
                                                {{ __('translation.address') }}
                                            </option>
                                            <option value="building_management company">
                                                {{ __('translation.Building Management Company') }}
                                            </option>
                                        </select>
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
                                        <a href="{{ route('ec.GetCustomerInfoDashboard',$customer->user_uid) }}"
                                            class="btn btn-dark">{{ __('translation.Menu') }}</a>
                                        <button type="button" onclick="openDeleteModal()"
                                                class="btn btn-primary">
                                            {{__('translation.delete')}}
                                        </button>
                                        <div class="buttons d-flex align-items-center justify-content-between gap-1">
                                            <a href="{{ route('add_contract', $customer->user_uid) }}"
                                               class="btn btn-primary">{{ __('translation.Add') }}</a>
                                        </div>
                                    </div>
                                    @if (count($contracts) > 0)
                                        <div id="customer_list_table" class="table-responsive mt-3 data-set-list">
                                            @include('engineer_company.templates.contract_listing', [
                                                'contracts' => $contracts,
                                            ])
                                        </div>
                                        <div class="w-100 mt-4">
                                            <div class="text-center">
                                                {{ $contracts->links('common_files.paginate') }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img src="{{ asset('engineer_company/images/no-data-found.png') }}"
                                                 style="height:250px;" class="img-fluid" alt="No Record Found">
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
    <div id="customerDeleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">{{__('translation.delete')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="customerDeleteForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="col-md-12">
                                <div class="prompt w-100"></div>
                            </div>
                            <p>{{__('translation.Are you sure you want to delete this data?')}}</p>
                            <input name="id" id="customerInfoID" hidden>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">{{__('translation.close')}}
                        </button>
                        <button type="submit"
                                class="btn btn-primary waves-effect waves-light submitbtn">{{__('translation.delete')}}</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

@endsection
@section('custom-script')
    <script>
        //ajax to search customer basic information
        $('#customerSearchForm').submit(function (e) {

            $('.searchbar_button').attr('disabled', true);
            e.preventDefault();
            var form = $('#customerSearchForm')[0];
            var formData = new FormData(form);
            let prompt = $('.prompt');

            $.ajax({

                type: "POST",
                url: '{{ route('SearchCustomerInfo') }}',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                mimeType: "multipart/form-data",
                beforeSend: function () {
                    $('#clearFilter').removeClass('d-none');
                },
                success: function (res) {

                    $('.searchbar_button').attr('disabled', false);

                    if (res.success == false) {
                        prompt.html('<div class="alert alert-danger">' + res.message + '</div>');

                        $("div.prompt").fadeIn();
                        setTimeout(function () {
                            $("div.prompt").fadeOut();
                        }, 2000);

                    } else if (res.success == true) {

                        $('#customer_list_table').html('');
                        $('#customer_list_table').append(res.html);
                    }
                },
                error: function (e) {


                }
            });
        });


        function ClearFilter() {
            $.ajax({

                type: "POST",
                url: '{{ route('ClearCustomerInfo') }}',
                dataType: 'json',
                data: {
                    '_token': '{{ csrf_token() }}',
                },
                beforeSend: function () {
                    $('#clearFilter').addClass('d-none');
                },
                success: function (res) {


                    if (res.success == false) {


                    } else if (res.success == true) {

                        $('#customer_list_table').html('');
                        $('#customer_list_table').append(res.html);
                    }
                },
                error: function (e) {


                }
            });
        }


        let hiddenCount = 0;

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
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

        function openDeleteModal() {


            if ($('#customerInfoID').val() == '') {
                Command: toastr["error"]("{{ __('translation.You need to select row first') }}")

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
                $('#customerDeleteModal').modal('show');

            }
        }

        $('#customerDeleteForm').validate({
            submitHandler: function () {
                $('.submitbtn').html('<i class="fa fa-spinner fa-spin me-1"></i> 처리').attr('disabled', true);
                $('.submitbtn').prev().attr('disabled', true);
                var form = $('#customerDeleteForm')[0];
                var formData = new FormData(form);
                let prompt = $('.prompt');

                $.ajax({

                    type: "POST",
                    url: '{{route('delete_contract')}}',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    mimeType: "multipart/form-data",
                    beforeSend: function () {

                    },
                    success: function (res) {

                        $('.submitbtn').html('처리').attr('disabled', false);
                        $('.submitbtn').prev().attr('disabled', false);

                        if (res.success == false) {


                            prompt.html('<div class="alert alert-danger">' + res.message + '</div>');

                            $("div.prompt").fadeIn();
                            setTimeout(function () {
                                $("div.prompt").fadeOut();
                            }, 2000);

                        } else if (res.success == true) {

                            prompt.html('<div class="alert alert-success">' + res.message + '</div>');

                            $("div.prompt").fadeIn();
                            setTimeout(function () {
                                window.location.reload();
                            }, 2000);

                            setTimeout(function () {
                                $("div.prompt").fadeOut();
                                {
                                    {

                                    }
                                }

                            }, 2000);

                        }
                    },
                    error: function (e) {


                        $('.submitbtn').html('처리').attr('disabled', false);
                        $('.submitbtn').prev().attr('disabled', false);
                        var first_error = '';
                        $.each(e.responseJSON.errors, function (index, item) {

                            first_error = item[0];

                        });
                        $("div.prompt").fadeIn();
                        {
                            {
                                $('.prompt').html('<div class="alert alert-danger">' + first_error + '</div>');
                            }
                        }
                        setTimeout(function () {
                            $("div.prompt").fadeOut();
                            {
                                {
                                    prompt.html('<div class="alert alert-danger">' + first_error + '</div>');
                                }
                            }

                        }, 2000);


                    }

                });
            }
        });

        function SelectRow(row, id) {
            $('tr').each(function () {
                $(this).removeClass('selected-row');
            });
            row.addClass('selected-row');
            $('#customerInfoID').val(id);
        }
    </script>
@endsection

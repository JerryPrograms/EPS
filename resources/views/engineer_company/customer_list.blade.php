@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->


                <div class="main_content_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.Customer Information') }}
                                    </h4>
                                    <form id="customerSearchForm">
                                        <div class="row">
                                            @csrf
{{--                                            <div class="col-md-2 col-6">--}}
{{--                                                <select class="form-select mt-4" name="filter" autocomplete="off"--}}
{{--                                                        required>--}}
{{--                                                    <option selected value="" disabled>--}}
{{--                                                        {{ __('translation.filter') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="all">--}}
{{--                                                        {{ __('translation.all') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="created_at">--}}
{{--                                                        {{ __('translation.Registration Date') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="building_name">--}}
{{--                                                        {{ __('translation.Building Name') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="customer_number">--}}
{{--                                                        {{ __('translation.Customer Number') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="address">--}}
{{--                                                        {{ __('translation.address') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="building_management_company">--}}
{{--                                                        {{ __('translation.Building Management Company') }}--}}
{{--                                                    </option>--}}
{{--                                                    <option value="building_management_company">--}}
{{--                                                        {{ __('translation.Building Management Company') }}--}}
{{--                                                    </option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between">
                                                    <div class="custom_search">
                                                        <div class="search mt-4">
                                                            <input id="myInput" type="text" class="form-control" name="keyword"
                                                                   placeholder="{{__('translation.search')}}"
                                                                   autocomplete="off" required>

                                                            <button type="submit" class="btn btn-primary searchbar_button">
                                                                <div class="search_img">
                                                                    <img
                                                                        src="{{asset('engineer_company/assets/images/search.png')}}"/>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    @if(activeGuard() == 'admin')
                                                    <a  href="{{route('add_client')}}" class=" btn btn-primary waves-effect waves-light w-sm mt-4">
                                                        {{ __('translation.Add') }}
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-6">

                                            </div>
                                        </div>
                                    </form>

                                    <div id="customer_list_table" class="table-responsive mt-3">
                                        @include('engineer_company.customer_list_template',['customer'=>$customer])
                                    </div>
                                    <!-- end table-responsive -->

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
    @include('common_files.customer_add_modal')
    @include('common_files.customer_delete_modal')
@endsection
@section('custom-script')
    <script>
        //ajax to create customer basic information
        $('#customerCreateForm').validate({
            submitHandler: function () {
                $('.submitbtn').html('<i class="fa fa-spinner fa-spin me-1"></i> 처리').attr('disabled', true);
                $('.submitbtn').prev().attr('disabled', true);
                var form = $('#customerCreateForm')[0];
                var formData = new FormData(form);
                let prompt = $('.prompt');

                $.ajax({

                    type: "POST",
                    url: '{{route('CustomerInfo')}}',
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

        //ajax to delete customer basic information
        $('#customerDeleteForm').submit(function (e) {

            e.preventDefault();
            if ($('#customerInfoID').val() == '') {
                $('.prompt').html('<div class="alert alert-danger">{{__('translation.Please select a row first')}}</div>');

                $("div.prompt").fadeIn();
                setTimeout(function () {
                    $("div.prompt").fadeOut();
                }, 2000);
            } else {
                $('.submitbtn').html('<i class="fa fa-spinner fa-spin me-1"></i> 처리').attr('disabled', true);
                $('.submitbtn').prev().attr('disabled', true);

                var form = $('#customerDeleteForm')[0];
                var formData = new FormData(form);
                let prompt = $('.prompt');

                $.ajax({

                    type: "POST",
                    url: '{{route('DeleteCustomerInfo')}}',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    mimeType: "multipart/form-data",
                    beforeSend: function () {

                    },
                    success: function (res) {

                        $('.submitbtn').html('삭제').attr('disabled', false);
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


                        $('.submitbtn').html('삭제').attr('disabled', false);
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

        //ajax to search customer basic information
        $('#customerSearchForm').submit(function (e) {

            $('.searchbar_button').attr('disabled', true);
            e.preventDefault();
            var form = $('#customerSearchForm')[0];
            var formData = new FormData(form);
            let prompt = $('.prompt');

            $.ajax({

                type: "POST",
                url: '{{route('SearchCustomerInfo')}}',
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

        function selectRow(id, value) {

            $('tr').each(function () {

                $(this).removeClass('selected-row-blue');

            });

            if (id.hasClass('selected-row-blue')) {
                id.removeClass('selected-row-blue');
            } else {
                id.addClass('selected-row-blue');
            }
            console.log(value);
            $('#customerInfoID').val(value);
            $('#customerInfoID').val();
        }

        function ClearFilter() {
            $.ajax({

                type: "POST",
                url: '{{route('ClearCustomerInfo')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                },
                beforeSend: function () {
                    $('#clearFilter').addClass('d-none');
                },
                success: function (res) {


                    if (res.success == false) {


                    } else if (res.success == true) {

                        $('#customer_list_table').html('');
                        $('#customer_list_table').append(res.html);
                        $('#searchbar_button').attr('disabled', false);
                    }
                },
                error: function (e) {


                }
            });
        }

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

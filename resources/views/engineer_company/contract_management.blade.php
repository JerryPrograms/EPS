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
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.Contract Management') }}
                                    </h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center">
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
                    <h5 class="modal-title" id="myModalLabel">{{__('translation.Delete Report')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="customerDeleteForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="col-md-12">
                                <div class="prompt w-100"></div>
                            </div>
                            <p>{{__('translation.Are you sure you want to delete this completion report?')}}</p>
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

        var $rows = $('#myTable tr');
        $('#myInput').keyup(function () {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });

        function openDeleteModal(id) {
            $('#customerDeleteModal').modal('show');
            $('#customerInfoID').val(id);
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
    </script>
@endsection

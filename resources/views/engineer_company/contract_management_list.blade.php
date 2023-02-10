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
                                    <h4 class="card-title mb-4">Contract Managemnet List</h4>
                                    <div class="d-flex align-items-center table-top-actions gap-1">
                                        <select class="form-select select_filter" name="filter" autocomplete="off" required>
                                            <option selected="" value="" disabled="">Filter</option>
                                            <option value="all">All</option>
                                            <option value="created_at">Registration Date</option>
                                            <option value="building_name">Building Name</option>
                                            <option value="customer_number">Customer Number</option>
                                            <option value="address">Address</option>
                                            <option value="building_management_company">Building Management
                                                Company
                                            </option>
                                        </select>
                                        <div class="custom_search">
                                            <div class="search">
                                                <input type="text" class="form-control" name="keyword" placeholder="search" autocomplete="off" required="">
                                                <button type="submit" class="btn btn-primary searchbar_button">
                                                    <div class="search_img">
                                                        <img src="http://127.0.0.1:8000/engineer_company/assets/images/search.png">
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="buttons d-flex align-items-center justify-content-between gap-1">
                                            <a href="{{ route('add_contract',$customer->user_uid) }}" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                    <div id="customer_list_table" class="table-responsive mt-3">
                                        @include('engineer_company.templates.contract_listing',['contracts' => $contracts])
                                    </div>
                                    <div class="w-100 mt-4">
                                        <div class="text-center">
                                            {{ $contracts->links('common_files.paginate') }}
                                        </div>
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
                    }
                },
                error: function (e) {


                }
            });
        }
    </script>
@endsection

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
                                        class="card-title d-flex align-items-center justify-content-between mobile-flex-column mb-0 py-2">
                                        <h4 class="">
                                            Construction Completion Management
                                        </h4>

                                    </div>
                                    <div class="mt-3 left-content d-flex align-items-center">
                                        <div class="custom_search" style="display: flex;
                                        width: 100%;
                                        justify-items: flex-start;
                                        justify-content: end">
                                            <input id="search" class="form-control w-25 me-2 d-none" >
                                            <button type="button" onclick="$(this).prev().removeClass('d-none')"
                                                    class="btn btn-primary me-2">Search
                                            </button>
                                            <button type="button" onclick="OpenModal()"
                                                    class="btn btn-primary me-2">Delete
                                            </button>
                                            <a href="{{route('add_client')}}"
                                               class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                    <div id="customer_list_table" class="table-responsive mt-3 data-set-list">
                                        <table class="table align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">
                                                    No.
                                                </th>
                                                <th class="text-center">
                                                    Registration Date
                                                </th>
                                                <th class="text-center">
                                                    Customer No
                                                </th>
                                                <th class="text-center">
                                                    Company Name
                                                </th>
                                                <th class="text-center">
                                                    Address
                                                </th>

                                                <th class="text-center">
                                                    Division
                                                </th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($pagedData) > 0)
                                                @foreach($pagedData as $customer)

                                                    <tr onclick="selectRow($(this),'{{$customer->id}}','{{$customer->division}}')">
                                                        <td>
                                                            {{$loop->index +1 }}
                                                        </td>
                                                        <td>
                                                            {{$customer->created_at->format('d M Y')}}
                                                        </td>
                                                        <td>
                                                            {{$customer->customer_number}}
                                                        </td>
                                                        <td>
                                                            {{$customer->company_name}}
                                                        </td>
                                                        <td>
                                                            {{$customer->address}}
                                                        </td>
                                                        <td>
                                                            {{$customer->division}}
                                                        </td>
                                                        <td class="d-flex gap-1">
                                                            <a href="{{route('edit_client',[$customer->division,$customer->id])}}"
                                                               class="btn back-green btn-outline btn-sm">
                                                                <img
                                                                    src="{{asset('engineer_company/images/edit_icon.png')}}">
                                                            </a>
                                                            <a href="{{route('view_client',[$customer->division,$customer->id])}}"
                                                               class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/red-search.png')}}">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="w-100 text-center">
                                                            No Data Avaialble
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="w-100 mt-4">
                                        <div class="text-center vvv">
                                            {!! $pagedData->links('common_files.paginate') !!}
                                        </div>
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
    <div id="deleteQuoteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel112"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel112">
                        {{ __('translation.Delete Parts history Replacement') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deleteQuoteForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <p>
                                {{ __('translation.Are you sure you want to delete') }}
                            </p>
                            <div class="mb-3">

                                <input name="id" id="quoteId" autocomplete="off" hidden="">
                                <input name="type" id="quoteType" autocomplete="off" hidden="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">
                                {{ __('translation.close') }}
                            </button>
                            <button type="submit"
                                    class="btn btn-primary waves-effect waves-light submitbtn ">
                                {{ __('translation.delete') }}
                            </button>
                        </div>

                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        function selectRow(id, value, type) {

            $('tr').each(function () {

                $(this).removeClass('selected-row-blue');

            });

            if (id.hasClass('selected-row-blue')) {
                id.removeClass('selected-row-blue');
            } else {
                id.addClass('selected-row-blue');
            }
            // console.log(value);
            $('#quoteId').val(value);
            $('#quoteType').val(type);
        }

        function OpenModal() {
            if ($('#quoteId').val() == '') {
                console.log('asd');
                Command: toastr["error"]("You need to select row first")

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
                $('#deleteQuoteModal').modal('show');

            }
        }

        $('#deleteQuoteForm').validate({
            submitHandler: function () {
                ajaxCall($('#deleteQuoteForm'), "{{ route('delete_client') }}", $('.submit_btn'), "{{ route('clients_listing') }}", onRequestSuccess);
            }
        });

        var $rows = $('table tr');
        $('#search').keyup(function () {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>
@endsection

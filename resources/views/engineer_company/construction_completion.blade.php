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
                                        {{__('translation.Construction Completion Management')}}
                                    </h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="left-content d-flex align-items-center">
                                            <select class="form-select select_filter w-25" name="filter"
                                                    autocomplete="off"
                                                    required>
                                                <option selected="" value=""
                                                        disabled="">{{__('translation.filter')}}</option>
                                                <option value="all">
                                                    {{__('translation.all')}}
                                                </option>
                                                <option value="created_at">
                                                    {{__('translation.Registration Date')}}
                                                </option>
                                                <option value="building_name">
                                                    {{__('translation.Building Name')}}
                                                </option>
                                                <option value="customer_number">
                                                    {{__('translation.Customer Number')}}
                                                </option>
                                                <option value="address">
                                                    {{__('translation.Address')}}
                                                </option>
                                                <option value="building_management company">
                                                    {{__('translation.Building Management Company')}}
                                                </option>
                                            </select>
                                            <div class="custom_search">
                                                <div class="search">
                                                    <input type="text" class="form-control" name="keyword"
                                                           placeholder="{{__('translation.search')}}" autocomplete="off"
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
                                    <div id="customer_list_table" class="table-responsive mt-3 data-set-list">
                                        <table class="table align-middle mb-0 table-theme">
                                            <thead class="table-light">
                                            <tr>

                                                <th class="">
                                                    {{__('translation.no.')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Registration Date')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Customer No')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.site name')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Construction Name')}}
                                                </th>

                                                <th class="text-center">
                                                    {{__('translation.Building Management Company')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.Note')}}
                                                </th>
                                                <th class="text-center">{{__('translation.Actions')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($completion_reports as $c)
                                                <tr>
                                                    <td>
                                                        {{$loop->index + 1}}
                                                    </td>
                                                    <td>
                                                        {{$c->created_at->format('d-m-Y')}}
                                                    </td>
                                                    <td>
                                                        {{$c->GetCustomer->customer_number}}
                                                    </td>
                                                    <td>
                                                        {{$c->site_name}}
                                                    </td>
                                                    <td>
                                                        {{$c->joint_name}}
                                                    </td>
                                                    <td>
                                                        ....
                                                    </td>
                                                    <td>
                                                        ....
                                                    </td>
                                                    <td class="d-flex gap-1">
                                                        <a href="{{route('view_construction_completion',$c->id)}}"
                                                           class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/red-search.png')}}">
                                                        </a>
                                                        @if(activeGuard() != 'web')
                                                            <a href="{{route('edit_construction_completion',$c->id)}}"
                                                               class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/Arhive_fill.png')}}">
                                                            </a>
                                                        @endif
                                                        <button onclick="print('{{$c->id}}')"
                                                                class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/archive_icon.png')}}">
                                                        </button>
                                                        @if(activeGuard() != 'web')
                                                            <button onclick="openDeleteModal('{{$c->id}}')"
                                                                    class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/delete.png')}}">
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="w-100 mt-4">
                                        <div class="text-center">

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
    <div id="sadasdasda" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div id="print_form">

        </div>
    </div>

@endsection
@section('custom-script')
    <script>
        function openDeleteModal(id) {
            $('#customerDeleteModal').modal('show');
            $('#customerInfoID').val(id);
        }

        $('#customerDeleteForm').validate({
            submitHandler: function () {
                ajaxCall($('#customerDeleteForm'), "{{ route('post_construction_completion') }}", $('.submitbtn'), "{{ route('construction_completion') }}", onRequestSuccess);
            }
        });

        function print(id) {
            $.ajax({
                type: "POST",
                url: '{{ route("print_construction_completion") }}',
                dataType: 'json',
                data: {'id': id, '_token': '{{ csrf_token() }}'},
                beforeSend: function () {

                },
                success: function (response) {
                    $('#print_form').html('');
                    $('#print_form').html(response.html);
                    $('#print_form').print({
                        globalStyles: true,
                        mediaPrint: false,
                        stylesheet: null,
                        noPrintSelector: ".no-print",
                        iframe: true,
                        append: null,
                        prepend: null,
                        manuallyCopyFormValues: true,
                        deferred: $.Deferred(),
                        timeout: 750,
                        title: null,
                        doctype: '<!doctype html>'
                    });
                    $('#print_form').addClass('d-none');

                },
                error: function () {
                }
            });
        }
    </script>
@endsection

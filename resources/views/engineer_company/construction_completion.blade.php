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
                                            {{__('translation.Construction Completion Management')}}
                                        </h4>

                                    </div>
                                    <div class="mt-3 left-content d-flex align-items-center">
                                        <div class="custom_search" style="display: flex;
                                        width: 100%;
                                        justify-items: flex-start;
                                        justify-content: space-between;">
                                            <div class="search">
                                                <input id="search" onkeyup="myFunction()" type="text"
                                                       class="form-control" name="keyword"
                                                       placeholder="{{__('translation.search')}}" autocomplete="off"
                                                       required="">
                                                <button type="submit" class="btn btn-primary searchbar_button">
                                                    <div class="search_img">
                                                        <img
                                                            src="{{asset('engineer_company/assets/images/search.png')}}">
                                                    </div>
                                                </button>
                                            </div>
                                            <a href="{{route('create_construction_completion')}}" class="btn btn-primary">{{__('translation.add')}}</a>
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
                                            @if(count($completion_reports) > 0)
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
                                                        <a @if(activeGuard() == 'admin') style="background-color: #6281FE1A !important; border: 1px solid #6281FE"
                                                           @endif href="{{route('view_construction_completion',$c->id)}}"
                                                           class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                            @if(activeGuard() == 'admin')
                                                                <img
                                                                    src="{{asset('engineer_company/images/Vector(3).png')}}">
                                                            @else
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/red-search.png')}}">
                                                            @endif
                                                        </a>
                                                        @if(activeGuard() != 'web' && activeGuard() != 'admin')
                                                            <a href="{{route('edit_construction_completion',$c->id)}}"
                                                               class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
{{--                                                                <img--}}
{{--                                                                    src="{{asset('engineer_company/assets/images/Arhive_fill.png')}}">--}}
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        @endif
                                                        @if(activeGuard() != 'admin')
                                                            <button onclick="print('{{$c->id}}')"
                                                                    class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                                <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                            </button>
                                                        @endif
                                                        @if(activeGuard() != 'web' && activeGuard() != 'admin')
                                                            <button onclick="openDeleteModal('{{$c->id}}')"
                                                                    class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                                <img
                                                                    src="{{asset('engineer_company/assets/images/delete.png')}}">
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                                <tr  class="text-center">
                                                   <td colspan="8"> <img style="height: 200px;" src="{{asset('engineer_company/images/no-data-found.png')}}"
                                                             alt="No Records Found"></td>
                                                </tr>
                                            @endif
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

        let hiddenCount = 0;

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("customer_list_table");
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

            if ($("#customer_list_table tbody tr.main-tr").length == $("#customer_list_table tbody tr.d-none.main-tr").length) {
                $('#no_record').removeClass('d-none');
            } else {
                $("#no_record").addClass('d-none')
            }
        }
    </script>
@endsection

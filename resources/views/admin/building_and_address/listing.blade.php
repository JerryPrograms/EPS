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
                                    <div class="mt-3 left-content d-flex text-right">
                                        <div class="custom_search w-100">

                                            <a href="javascript:void(0)"
                                               class="btn btn-primary">{{__('translation.search')}}</a>
                                            <button type="button" onclick="AddRow()"
                                                    class="btn btn-primary">{{__('translation.add')}}</button>

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
                                                    {{__('translation.Building name')}}
                                                </th>
                                                <th class="text-center">
                                                    {{__('translation.address')}}
                                                </th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $d)
                                                <tr>
                                                    <td>
                                                        {{$loop->index + 1}}
                                                    </td>
                                                    <td>
                                                        {{$d->building_name}}
                                                    </td>
                                                    <td>
                                                        {{$d->address}}
                                                    </td>
                                                    <td class="d-flex gap-1 justify-content-center">
                                                        <button type="button" onclick="openEditModal('{{$d->id}}','{{$d->building_name}}','{{$d->address}}')"
                                                                class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">


                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <button onclick="openDeleteModal('{{$d->id}}')"
                                                                class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                            <img
                                                                src="{{asset('engineer_company/assets/images/delete.png')}}">
                                                        </button>
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
                            <p>{{__('Are you sure you want to delete this data?')}}</p>
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

    <div id="EditeModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">{{__('translation.Delete Report')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="EditForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="col-md-12">
                                <div class="prompt w-100"></div>
                            </div>

                        </div>
                        <div class="col-12">
                            <label>Building Name</label>
                            <input class="form-control" name="building_name" id="bn" type="text" maxlength="250">
                        </div>
                        <div class="col-12">
                            <label>Address</label>
                            <input class="form-control" name="address" id="ad" type="text" maxlength="250">
                        </div>
                    </div>
                    <input name="id" id="editid" hidden="">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">{{__('translation.close')}}
                        </button>
                        <button type="submit"
                                class="btn btn-primary waves-effect waves-light submitbtn123">{{__('translation.Edit')}}</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

@endsection
@section('custom-script')
    <script>
        function openDeleteModal(id) {
            $('#customerDeleteModal').modal('show');
            $('#customerInfoID').val(id);
        }

        function openEditModal(id, buidling_name, address) {
            $('#EditeModal').modal('show');
            $('#editid').val(id);
            $('#bn').val(buidling_name);
            $('#ad').val(address);
        }

        $('#customerDeleteForm').validate({
            submitHandler: function () {
                ajaxCall($('#customerDeleteForm'), "{{ route('admin.DeleteAddress') }}", $('.submitbtn'), "{{ route('admin.GetCreateAddress') }}", onRequestSuccess);
            }
        });


        $('#EditForm').validate({
            submitHandler: function () {
                ajaxCall($('#EditForm'), "{{ route('admin.EditAddress') }}", $('.submitbtn123'), "{{ route('admin.GetCreateAddress') }}", onRequestSuccess);
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

        function AddRow() {
            let html = `   <tr>
            @csrf
            <td>
                #
            </td>
            <td>
                <input class="form-control" name="building_name" placeholder="{{__('translation.Enter building Name')}}" type="text" maxlength="100" required>
                <span class="mt-3 text-danger d-none">This field is required</span>
                                                </td>
                                                <td>
                                                    <input class="form-control"  name="address" placeholder="{{__('translation.address')}}" type="text" maxlength="100" required>
                                                   <span class="mt-3 text-danger d-none">This field is required</span>
                                                </td>
                                                <td class="d-flex gap-1 justify-content-center">

                                                    <button type="button" onclick="submitForm($(this).parent().prev().find('input'),$(this).parent().prev().prev().find('input'),$(this))"
                                                            class="btn btn-primary">
                                                            Add
                                                    </button>
                                                </td>

                                            </tr>`;
            $('tbody').append(html);
        }

        function submitForm(building_name, address, btn) {
            if (building_name.val() == '') {
                building_name.next().removeClass('d-none');
                setTimeout(function () {
                    building_name.next().addClass('d-none');
                }, 3000);
                return false;
            }
            if (address.val() == '') {
                address.next().removeClass('d-none');
                setTimeout(function () {
                    address.next().addClass('d-none');
                }, 3000);
                return false;
            }
            $.ajax({

                type: "POST",
                url: '{{route('admin.PostCreateAddress')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'building_name': building_name.val(),
                    'address': address.val(),
                },

                beforeSend: function () {
                    btn.prop('disabled', true);
                    btn.html('<i class="fa fa-spinner fa-spin me-1"></i> 처리');
                },
                success: function (res) {


                    let html = ` <tr>
                                                <td>
                                                    ${res.count}
                                                </td>
                                                <td>
                                                    ${building_name.val()}
                                                </td>
                                                <td>
                                                    ${address.val()}
                                                </td>
                                                <td class="d-flex gap-1 justify-content-center">

                                                   <button
                                                       class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">


                                                        <i class="fa fa-edit"></i>
                                                    </button>

                                                    <button onclick="openDeleteModal('${res.id}')"
                                                            class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                                                        <img
                                                            src="{{asset('engineer_company/assets/images/delete.png')}}">
                                                    </button>
                                                </td>
                                            </tr>`;

                    $('tbody').append(html);
                    btn.parent().parent().remove();

                },
                error: function (e) {


                }

            });

        }
    </script>
@endsection
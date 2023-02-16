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
                                        <h5 class="mb-0 font-15">Dispatch Confirmation Management</h5>
                                    </div>
                                    @if (count($dispatch_information_data) > 0)
                                        <div class="table-responsive data-set-list mt-3">
                                            <table class="table table-striped align-middle mb-0 table-theme">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Reception date</th>
                                                        <th>Reception Time</th>
                                                        <th>Dispatcher Name</th>
                                                        <th>Dispatch content</th>
                                                        <th>Customer Name</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dispatch_information_data as $v)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>2022-12-02</td>
                                                            <td>14:00</td>
                                                            <td>Alexis</td>
                                                            <td>Main motor fixed</td>
                                                            <td>Kelly</td>
                                                            <td>서울시 도산대로 158</td>
                                                            <td>
                                                                <div class="d-flex gap-1 justify-content-center">
                                                                    <a href="{{ route('ec.ViewDispatchInformation', $v->id) }}"
                                                                        class="btn btn-success btn-custom-table btn-sm">
                                                                        <i class="bx bx-search-alt-2"></i>
                                                                    </a>
                                                                    <a href="{{ route('ec.EditDispatchInformation', $v->id) }}"
                                                                        class="btn btn-primary btn-custom-table btn-sm">
                                                                        <i class="bx bxs-edit-alt"></i>
                                                                    </a>
                                                                    <a data-bs-toggle="modal" data-del-id="{{ $v->id }}" data-bs-target="#delModal"
                                                                        class="btn btn-danger btn-custom-table btn-sm delBtn">
                                                                        <i class="bx bx-trash-alt"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center mt-3">
                                            {!! $dispatch_information_data->links('common_files.paginate') !!}
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <img src="{{asset('engineer_company/images/no-data-found.png')}}" alt="No Records Found">
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
                <h5 class="modal-title" id="delModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="delinput">
                <div class="del-prompt"></div>
                <p>Are you sure you wan't to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" id="delBtnAction" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection
@section('custom-script')
<script>
    $('.delBtn').on('click',function(){
        $('#delinput').val($(this).attr('data-del-id'));
    });

    $('#delBtnAction').on('click',function(){
        var btn = $(this);
        $.ajax({
            type: "POST",
            url: '{{ route("del_dispatch_confirmation_record") }}',
            dataType: 'json',
            data: {'del_id':$('#delinput').val() , '_token':'{{ csrf_token() }}'},
            beforeSend: function () {
                btn.prop('disabled', true);
                btn.html('<i class="fa fa-spinner fa-spin me-1"></i> Processing');
            },
            success: function (response) {
                if(response.success == true){
                    $('.del-prompt').html('<div class="alert alert-success mb-3">' + response.message + '</div>');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }else{
                    $('.del-prompt').html('<div class="alert alert-danger mb-3">' + response.message + '</div>');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            },
            error: function () {}
        });
    });
</script>
@endsection

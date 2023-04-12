<div id="customerDeleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">{{__('translation.Delete Customer')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="customerDeleteForm">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="col-md-12">
                            <div class="prompt w-100"></div>
                        </div>
                        <p>{{__('Are you sure you want to delete this')}} <span id="bname"></span>?</p>
                        <input name="id" id="customerInfoID" hidden>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">{{__('translation.close')}}</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light submitbtn">{{__('translation.delete')}}</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

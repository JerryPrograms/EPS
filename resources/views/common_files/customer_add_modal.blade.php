<div id="customerInfoModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add customer Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="customerCreateForm">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="prompt w-100"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Building
                                                Name</label>
                                            <input type="text" name="building_name" class="form-control"
                                                   id="formrow-firstname-input"
                                                   placeholder="Enter building name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">Address</label>
                                            <textarea class="form-control" id="formrow-password-input"
                                                      name="address" placeholder="Enter Address" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-building-company" class="form-label">Building Management
                                                Company </label>
                                            <input type="text" class="form-control" id="formrow-building-company"
                                                   name="building_management_company"
                                                   placeholder="Enter Building management company " required>
                                        </div>
                                    </div>
                                    <input name="added_by" value="engineer company" hidden>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-maintenance-company" class="form-label">Maintenance
                                                Company</label>
                                            <input type="text" class="form-control" id="formrow-maintenance-company"
                                                   name="maintenance_company" placeholder="Enter maintenance company"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-building-company" class="form-label">Name </label>
                                            <input type="text" class="form-control" id="formrow-building-company"
                                                   name="name"
                                                   placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-building-company" class="form-label">Email </label>
                                            <input type="email" class="form-control" id="formrow-building-company"
                                                   name="email"
                                                   placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-building-company" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="formrow-building-company"
                                                   name="password"
                                                   placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light submitbtn">Create</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

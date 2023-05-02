<div id="customerInfoModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">{{__('translation.Create Customer Information')}}</h5>
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
                                    @php
                                    $buildings = \App\Models\BuildingAddress::latest()->get();
                                    @endphp
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input"
                                                   class="form-label">{{__('translation.Building name')}}</label>
                                            <select name="building_name" id="company_name"
                                                    class="form-control form-theme-input" required>
                                                <option value="">
                                                    {{__('translation.Enter building Name')}}
                                                </option>
                                                @foreach ($buildings as $engineer_company)
                                                    <option value="{{ $engineer_company->id }}">
                                                        {{ $engineer_company->building_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-password-input"
                                                   class="form-label">{{__('translation.Address')}}</label>
                                            <textarea class="form-control" id="formrow-password-input"
                                                      name="address" placeholder="{{__('translation.Enter address')}}"
                                                      required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for=""
                                                   class="form-label">{{__('translation.Building management company information')}} </label>
                                            <input type="text" class="form-control" id=""
                                                   name="building_management_company"
                                                   placeholder="{{__('translation.Enter Building management company')}} "
                                                   required>
                                        </div>
                                    </div>
                                    <input name="added_by" value="engineer company" hidden>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="formrow-maintenance-company"
                                                   class="form-label">{{__('translation.Maintenance Company')}}</label>
                                            <input type="text" class="form-control" id="formrow-maintenance-company"
                                                   name="maintenance_company"
                                                   placeholder="{{__('translation.Enter maintenance company')}}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{__('translation.name')}}</label>
                                            <input type="text" class="form-control" id=""
                                                   name="name"
                                                   placeholder="{{__('translation.Enter Name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{__('translation.Email')}}</label>
                                            <input type="email" class="form-control" id=""
                                                   name="email"
                                                   placeholder="{{__('translation.Enter email')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">{{__('translation.Password')}}</label>
                                            <input type="password" class="form-control" id=""
                                                   name="password"
                                                   placeholder="{{__('translation.Enter your password')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        @if(activeGuard() == 'admin')
                                            <div class="mb-3">
                                                @php
                                                    $engineer_companies = \App\Models\Engineer_company::latest()->get();
                                                @endphp
                                                <select name="added_by_id" id="company_name"
                                                        class="form-control form-theme-input" required>
                                                    <option value="">
                                                        {{ __('translation.Write affiliated company name') }}
                                                    </option>
                                                    @foreach ($engineer_companies as $engineer_company)
                                                        <option value="{{ $engineer_company->id }}">
                                                            {{ $engineer_company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">{{__('translation.close')}}</button>
                    <button type="submit"
                            class="btn btn-primary waves-effect waves-light submitbtn">{{__('translation.create')}}</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

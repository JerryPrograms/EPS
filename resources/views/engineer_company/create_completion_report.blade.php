@extends('engineer_company.includes.layout')
@section('body')
    @php
        $customerId = '';
        if(!empty($customer)){
            $customerId = $customer->id;
        }
    @endphp
    <input type="hidden" id="checkCustomerId" value="{{ $customerId }}">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->
                <form id="add_contract_completion_form">
                    @csrf

                    <div class="main_content_section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <!-- end table-responsive -->


                                        <div class="card_section_2">
                                            <div class="row align-items-baseline">
                                                <div class="col-lg-11">
                                                    <div class="">
                                                        <h4 class="card_tittle_2">
                                                            {{ __('translation.Construction Completion Report') }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @csrf
                                        <div class="prompt"></div>

                                        @if (count($customers) > 0)
                                            <div class="form-group my-4">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2 col-md-6 col-12">
                                                        <label class="text-capatilize">
                                                            {{ __('translation.customer') }}
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-6 col-12">
                                                        <select class="form-select w-100 custom_input" name="customer_id"
                                                            autocomplete="off" required="">
                                                            <option selected="" value="" disabled="">
                                                                {{ __('translation.Select Customer') }}
                                                            </option>
                                                            @foreach ($customers as $c)
                                                                <option value="{{ $c->id }}">
                                                                    {{ $c->representative }}
                                                                </option>
                                                            @endforeach
                                                        </select>
    
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            @php
                                                $customer = \App\Models\CustomerInfo::where('user_uid', request()->segment(3))->first();
                                                
                                            @endphp
                                            <input name="customer_id" value="{{ $customer->id }}" hidden>
                                        @endif

                                        @if(!empty($customer))
                                        <div class="form-group my-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="customer_number" class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" class="form-control form-theme-input" id="customer_number"
                                                        placeholder="{{ __('translation.Enter customer number') }}"
                                                        value="{{ $customer->customer_number }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="contract_date" class="mb-0">{{ __('translation.Contract Date') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="date" class="form-control form-theme-input"
                                                        name="contract_date" id="contract_date"
                                                        placeholder="{{ __('translation.Enter contract date') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        @if(!empty($customer))
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="building_name" class="mb-0">{{ __('translation.Building Name') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    @php
                                                        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
                                                        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                                    @endphp
                                                    <input type="text" class="form-control form-theme-input" id="building_name"
                                                        placeholder="{{ __('translation.Enter building name') }}"
                                                        value="{{ $building_name }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(!empty($customer))

                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="building_address" class="mb-0">{{ __('translation.Building Address') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" class="form-control form-theme-input"
                                                        id="building_address"
                                                        placeholder="{{ __('translation.Enter building address') }}"
                                                        value="{{ $customer->BuildingInformation->address }}" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        @endif

                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2 col-md-3 col-12">
                                                    <label for="construction_completion_file" class="mb-0">{{ __('translation.Upload Contract') }}</label>
                                                </div>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <div class="position-relative">
                                                        <div class="position-absolute">
                                                            <label for="construction_completion_file"
                                                                class="btn btn-sm btn-outline-success btn-theme-success-outline mb-0">
                                                                <img src="{{ asset('engineer_company/assets/images/aroow.png') }}"alt="Upload"
                                                                    height="15">
                                                            </label>
                                                            <small class="contract-file-name"></small>
                                                        </div>
                                                        <input type="file" class="form-control form-theme-input"
                                                            name="construction_completion_file" id="construction_completion_file" required
                                                            style="visibility: hidden" accept=".pdf">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <textarea class="form-control" id="construction_description" rows="10" placeholder="{{ __('translation.Enter construction completion description') }}"
                                                        name="construction_description" required></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- form row 4 start  -->
                                        <div class="row justify-content-end no-print">
                                            <div class="col-lg-2">


                                                <button class="form_button mb-5 mt-5">
                                                    {{ __('translation.Save and Next') }}
                                                </button>

                                            </div>
                                        </div>

                                        <!-- form row 4 end  -->

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <input name="added_by_user" value="{{ activeGuard() }}" hidden>
                </form>
                <!-- section 2 end  -->
            </div>
            <!-- End Page-content -->


        </div>
    </div>
@endsection
@section('custom-script')
    <script>

        // Intializing summer note
        $(document).ready(function() {
            $('#construction_description').summernote({
                height: 150
            });
        });

        // For custom file input
        $('#construction_completion_file').change(function() {
            var file = $('#construction_completion_file')[0].files[0].name;
            $(this).prev('.position-absolute').find('.contract-file-name').text(file);
        });

        function RestrictNextDate(element) {
            element.parent().parent().next().children().find('input').attr('min', element.val());
        }

        function AddData() {
            $(`<div id="data_div" class="col-12 position-relative">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-12 pb-3">
                                                                        <div class="d-flex align-items-end">
                                                                            <label
                                                                                class="form-label custom_lab w-25">{{ __('translation.Title') }}</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="title[]" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12 pb-3">
                                                                        <div class="d-flex align-items-end">
                                                                            <label
                                                                                class="form-label custom_lab w-25">{{ __('translation.Site') }}</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="site[]" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12 pb-3">
                                                                        <div class="d-flex align-items-end">
                                                                            <label
                                                                                class="form-label custom_lab w-25">{{ __('translation.Date') }}</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="date[]" type="date">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12 pb-3">
                                                                        <div class="d-flex align-items-end">
                                                                            <label class="form-label custom_lab w-25">{{ __('translation.Photo') }}</label>
                                                                            <input
                                                                                class="form-control w-100 custom_input"
                                                                                name="photo[]" type="file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
<button type="button" onclick="$(this).parent().remove()" style="top: -13px;
    right: -16px;" class="btn btn-danger position-absolute"><i class="fa fa-times"></i></button>
                                                    </div>`).insertBefore('#button_div');
        }
        $(document).ready(function(){
            var customerId = $('#checkCustomerId').val();
            $('#add_contract_completion_form').validate({
                submitHandler: function() {
                    ajaxCall($('#add_contract_completion_form'), "{{ route('add_construction_completion') }}", $(
                            '#add_contract_completion_form').find('button.form_button'),
                        "{{ route('construction_completion',$customerId) }}", onRequestSuccess);
                }
            });
        });
        
    </script>
@endsection

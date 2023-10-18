@extends('engineer_company.includes.layout')
@section('body')
    @if (!empty($customer->BuildingInformation) && !empty($customer->CompanyInformation))
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->

                    <!-- end page title -->


                    <div class="main_content_section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div>


                                        <!-- end table-responsive -->
                                        <!-- end page title -->
                                        <div class="main_content_section_4">
                                            <!-- start page title -->
                                            <!-- section 2 start  -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card mb-0">
                                                        <div class="card-body custom-card-body-color">
                                                            <!-- end table-responsive -->

                                                            <div class="card_section_2">
                                                                <div class="row ">
                                                                    <div class="col-lg-11">
                                                                        <div class="">
                                                                            <h4 class="card_tittle_2">
                                                                                {{ __('translation.Issue Quotation') }}</h4>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!-- form row 1 start  -->
                                                            <div class="row mt-3">
                                                                <form id="createQuote">
                                                                    <div class="prompt"></div>
                                                                    @csrf
                                                                    <input name="customer_id" value="{{ $customer->id }}"
                                                                        hidden>
                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2 col-md-3 col-12">
                                                                                <label for="customer_number"
                                                                                    class="mb-0">{{ __('translation.Customer Number') }}</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-9 col-12">
                                                                                <input type="text"
                                                                                    class="form-control form-theme-input"
                                                                                    placeholder="{{ __('translation.Enter customer number') }}"
                                                                                    value="{{ $customer->customer_number }}"
                                                                                    disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2 col-md-3 col-12">
                                                                                <label for="contract_date"
                                                                                    class="mb-0">{{ __('translation.Quote Date') }}</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-9 col-12">
                                                                                <input type="date"
                                                                                    class="form-control form-theme-input"
                                                                                    name="contract_date"
                                                                                    placeholder="{{ __('translation.Enter contract date') }}"
                                                                                    value="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @php
                                                                        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
                                                                        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
                                                                    @endphp
                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2 col-md-3 col-12">
                                                                                <label for="building_name"
                                                                                    class="mb-0">{{ __('translation.company_name') }}</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-9 col-12">
                                                                                <input type="text"
                                                                                    class="form-control form-theme-input"
                                                                                    id="building_name"
                                                                                    placeholder="{{ __('translation.Enter building name') }}"
                                                                                    disabled
                                                                                    value="{{ $building_name }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2 col-md-3 col-12">
                                                                                <label for="building_address"
                                                                                    class="mb-0">{{ __('translation.Building Address') }}</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-9 col-12">
                                                                                <input type="text"
                                                                                    class="form-control form-theme-input"
                                                                                    id="building_address"
                                                                                    placeholder="{{ __('translation.Enter building address') }}"
                                                                                    value="{{ $address }}"
                                                                                    disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-lg-2 col-md-3 col-12">
                                                                                <label for="quote_file" class="mb-0">{{ __('translation.Upload Quote') }}</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-9 col-12">
                                                                                <div class="position-relative">
                                                                                    <div class="position-absolute">
                                                                                        <label for="quote_file"
                                                                                            class="btn btn-sm btn-outline-success btn-theme-success-outline mb-0">
                                                                                            <img src="{{ asset('engineer_company/assets/images/aroow.png') }}"alt="Upload"
                                                                                                height="15">
                                                                                        </label>
                                                                                        <small class="quote-file-name"></small>
                                                                                    </div>
                                                                                    <input type="file" class="form-control form-theme-input"
                                                                                        name="quote_file" id="quote_file" required
                                                                                        style="visibility: hidden" accept=".pdf">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group mb-4">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12">
                                                                                <textarea class="form-control" id="quote_description" rows="10" placeholder="{{ __('translation.Enter quote description') }}"
                                                                                    name="quote_description" required></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mt-5">
                                                                        <button
                                                                            class="btn btn-primary submitbtn">{{ __('translation.Save changes') }}</button>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                            <!-- form row 1 end  -->
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>


                                            <!-- section 2 end  -->


                                        </div>
                                    </div> <!-- container-fluid -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
    @else
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="main_content_section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div>
                                        <!-- end table-responsive -->
                                        <!-- end page title -->
                                        <div class="main_content_section_4">
                                            <!-- start page title -->
                                            <!-- section 2 start  -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card mb-0">
                                                        <div class="card-body custom-card-body-color">
                                                            <!-- end table-responsive -->

                                                            <div class="card_section_2">
                                                                <div class="row ">
                                                                    <div class="col-lg-11">
                                                                        <div class="">
                                                                            <h4 class="card_tittle_2">
                                                                                {{ __('translation.Issue Quotation') }}
                                                                            </h4>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!-- form row 1 start  -->
                                                            <div class="row mt-3">
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ __('translation.You need to add Business and Company Information first') }}.
                                                                    <a
                                                                        href="{{ route('ec.CreateBuildingInfo', request()->segment(3)) }}">{{ __('translation.Continue') }}</a>
                                                                </div>
                                                            </div>
                                                            <!-- form row 1 end  -->
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>


                                            <!-- section 2 end  -->


                                        </div>
                                    </div> <!-- container-fluid -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('custom-script')
    <script>

        // Intializing summer note
        $(document).ready(function() {
            $('#quote_description').summernote({
                height: 150
            });
        });

        // For custom file input
        $('#quote_file').change(function() {
            var file = $('#quote_file')[0].files[0].name;
            $(this).prev('.position-absolute').find('.quote-file-name').text(file);
        });

        $('#createQuote').validate({

            submitHandler: function() {

                ajaxCall($('#createQuote'), "{{ route('CreateQuote') }}", $('#createQuote').find('.submitbtn'),
                    "{{ route('ec.GetQuoteManagement', request()->segment(3)) }}", onRequestSuccess);
            }
        });

        function appendQuoteContent() {
            $('#quotation_contents').append(` <div class="content-form-section mt-3">
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">{{ __('translation.Quote Item') }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="text"
                                                                                                   class="form-control qitem  custom_input"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   name="quote_item[]"
                                                                                                   placeholder="{{ __('translation.Enter quote item') }}"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">{{ __('translation.Quantity') }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
                                                                                                   min="1"
                                                                                                   onkeyup="calculateSum()"
                                                                                                   class="form-control  custom_input"
                                                                                                   name="quantity[]"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="{{ __('translation.Enter quantity') }}"
                                                                                                   required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <div
                                                                                        class="row align-items-center ">
                                                                                        <div class="col-lg-2">
                                                                                            <label
                                                                                                for="exampleInputEmail1"
                                                                                                class="form-label custom_lab_2">
                                                                                                {{ __('translation.Unit Price') }}
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-lg-10">
                                                                                            <input type="number"
required
                                                                                                   class="form-control price  custom_input"
                                                                                                   name="price[]"
 onkeyup="calculateSum()"
                                                                                                   min="1"
                                                                                                   aria-describedby="emailHelp"
                                                                                                   placeholder="{{ __('translation.Enter price') }}"
required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
<div class="form-group">
<div class="row">
<div class="col-12">
<button class="btn btn-danger" type="button" onclick="$(this).parent().parent().parent().parent().remove(),calculateSum()"><i class="fa fa-trash"></i></button>
</div>
</div>
</div>
                                                                            </div>`);
        }

        function calculateSum() {
            var sum = 0;
            $('.price').each(function() {
                var total = $(this).parent().parent().parent().prev().children().find('input[type="number"]').val();
                if ($(this).val() != '' && total != '') {
                    sum = sum + parseInt($(this).val()) * parseInt(total);
                }
            });
            $('#total_amount').val('');
            $('#total_amount').val(sum);
            $('#hidden_total_amount').val('');
            $('#hidden_total_amount').val(sum);
        }
    </script>
@endsection

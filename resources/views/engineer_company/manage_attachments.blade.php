@extends('engineer_company.includes.layout')
@section('body')
    @php
        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">
                    <form id="monthlyRegularInspectionForm">
                        @csrf
                        <!-- start page title -->

                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body mb-4">
                                        <div class="w-100 prompt"></div>
                                        <h4 class="card-title mb-4">

                                            {{ __('translation.Fill in customer information') }}

                                        </h4>
                                        <div class="row">

                                        </div>


                                        <div class="table-responsive mt-3">
                                            <table class="table align-middle custom_mrg">
                                                <thead class="table-light">
                                                <tr>

                                                    <th class="">
                                                        {{ __('translation.no.') }}
                                                    </th>
                                                    <th class="text-center">

                                                        {{ __('translation.Registration Date') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Customer Number') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Building Name') }}

                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.address') }}
                                                    </th>
                                                    <th class="text-center">

                                                        {{ __('translation.Building Management Company') }}
                                                    </th>
                                                    <th class="text-center">
                                                        {{ __('translation.Maintenance Company') }}

                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="custom_bor mt-5">
                                                    <td class="custom_br_theme_clr"><a href="javascript: void(0);"
                                                                                       class="text-body  tble_text">1</a>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->created_at->format('Y.m.d')}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->customer_number}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if (!empty($building_name))
                                                                {{ $building_name }}
                                                            @endif
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if(!empty($building_name))
                                                                {{$address}}
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{ $customer->company_registration_number }}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        <p class="tble_text">
                                                            {{ $customer->representative }}
                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- container-fluid -->

                        <!-- section 2 start  -->
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

                                                            {{ __('translation.Manage Attachments') }}

                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">8 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-4">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0"> <span
                                                        class="bor_lef">&nbsp;</span>

                                                    {{ __('translation.Manage Attachments') }}
                                                </h4>

                                            </div>
                                            <div class="col-lg-1">
                                                <div class="file_main_section">
                                                    <button type="button" onclick="printForm($('.main-content'))" class="file_button">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- form row 1 end  -->


                                        <!-- row 2 start  -->
                                        <div class="row mt-2">
                                            <div class="col-lg-12 text-end">
                                                <button type="button" onclick="addMonthlyregularInspection()"
                                                        class="history_add_btn">
                                                    {{ __('translation.add') }}
                                                </button>
                                            </div>

                                        </div>
                                        <!-- row -->
                                    </div>

                                    <!-- end row -->


                                    <!-- section 2 end  -->

                                    <!--- tabel 2 start--- -->
                                    <!-- end page title------------------------------- -->
                                    @php
                                        $MonthlyRegularInspections = $customer->ManageAttachments()->paginate(10);
                                    @endphp
                                    <div class="card-body py-0">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-11 p-0">
                                                <div class="table-responsive">
                                                    <table class="table align-middle table-nowrap mb-0">
                                                        <thead class="table-light">
                                                        <tr>
    
                                                            <th class="align-middle border-0">
    
                                                                {{ __('translation.no.') }}
                                                            </th>
                                                            <th class="text-center custom_inp_widt  border-0">
                                                                {{ __('translation.upload date') }}
                                                            </th>
                                                            <th class="custom_inp_widt  border-0" style="min-width:280px;">
                                                                {{ __('translation.File') }}
    
                                                            </th>
                                                            <th class="text-center  border-0">
    
                                                                {{ __('translation.title') }}
                                                            </th>
                                                            <th class="text-center border-0">
                                                                {{ __('translation.action') }}
    
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="monthly_regular_inspection_tbody">
    
                                                        @foreach($MonthlyRegularInspections as $mr)
                                                            <tr class="custom_bor_clr">
                                                                <td class="border-bottom-0"><a
                                                                        href="javascript: void(0);"
                                                                        class="text-body fw-bold">{{$loop->index + 1}}</a>
                                                                </td>
                                                                <td class="border-bottom-0">
                                                                    <button
                                                                        class="date_button border-0">{{$mr->date}}
                                                                    </button>
                                                                </td>
    
                                                                <td class="border-bottom-0">
                                                                    <a class="monthly-inspection-listing-img" download=""
                                                                         href="{{asset($mr->file)}}"
                                                                       class="gallery_img">{{explode('/',$mr->file)[3]}}</a>
                                                                </td>
                                                                <td class="border-bottom-0">
                                                                    <button
                                                                        class="date_button_2 border-0">{{$mr->title}}
                                                                    </button>
                                                                </td>
    
                                                                <td class="border-bottom-0 text-center">
                                                                    <button type="button" data-bs-toggle="modal"
                                                                            data-bs-target="#manageFileView"
                                                                            onclick="$('#attachment_id').attr('src','{{asset($mr->file)}}')"
                                                                            class="search_btn_attachments">
                                                                        <img
                                                                            src="{{asset('engineer_company/assets/images/bluebar.png')}}">
                                                                    </button>
                                                                    <button
                                                                        onclick="$('#partReplacementID').val('{{$mr->id}}')"
                                                                        type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#deleteReplacementHistory"
                                                                        class="delete_btn_attachments">
                                                                        <img
                                                                            src="{{asset('engineer_company/assets/images/delete.png')}}">
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end table-responsive -->
                                    <div id="monthlyInspectionListingPagination" class="row justify-content-center">
                                        <div class="col-lg-12">
                                            {!! $MonthlyRegularInspections->links('common_files.paginate') !!}
                                        </div>
                                    </div>
                                    <!-- end page title end---------------------  -->
                                    <!-- form row 4 start  -->
                                    <div class="main_section_buttn">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2 col-6">
                                                <button type="button"
                                                        onclick="window.location.href='{{route('ec.CreateEmergencyDispatchChecklist',$customer->user_uid)}}'"
                                                        class="form_button_2 mb-5 mt-5">

                                                    {{ __('translation.Back page') }}

                                                </button>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5">

                                                    {{ __('translation.Save and Next') }}

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->
                                </div>
                            </div>
                        </div>
                        <input name="customer_id" hidden value="{{$customer->id}}">
                    </form>
                </div>
                <!-- container-fluid -->
                <!---table 2 end----  -->
            </div>
            <!-- End Page-content -->
        </div>
    </div>
@endsection
@section('modal')
    <div id="deleteReplacementHistory" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">

                        {{ __('translation.Delete Attachments') }}

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deleteMonthlyInspectionModal">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <p>

                                {{ __('translation.Are you sure you want to delete this data?') }}

                            </p>
                            <div class="mb-3">

                                <input name="id" id="partReplacementID" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">
                                {{ __('translation.close') }}
                            </button>
                            <button type="submit"
                                    class="btn btn-primary waves-effect waves-light submitbtn">
                                {{ __('translation.delete') }}
                            </button>
                        </div>

                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div>
    </div>
    <div id="manageFileView" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="myModalLabel">{{ __('translation.attachment') }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <img class="img-fluid" id="attachment_id" alt="file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">

                            {{ __('translation.cancel') }}

                        </button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        var count = 0;

        function addMonthlyregularInspection() {
            $('#monthly_regular_inspection_tbody').prepend(`<tr class="custom_bor_3 border-top-0 mt-5">
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#</a>
                                                        </td>
                                                        <td>
                                                            <input type="date" name="date[]" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>

                                                        <td>
                                                             <input type="file" name="file[]" onchange="setFileName($(this))" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>

                                                        <td>
                                                            <input type="text" name="title[]" required class="form-control col-lg-2 custom_input_tble"  aria-describedby="emailHelp"
                                                             placeholder="{{ __('translation.Enter Title') }}">
                                                        </td>

                                                        <td class="text-center">
                                                            <button type="button" onclick="removeMonthlyRegularInspection($(this))" class="search_button">
                                                               <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>`);
            count++;
        }

        function removeMonthlyRegularInspection(element) {
            element.parent().parent().remove();
            count--;
        }

        $('#monthlyRegularInspectionForm').validate({
            submitHandler: function () {
                if (count == 0) {
                    window.location.href = '{{route("ec.GetCustomerInfoListing")}}';
                } else {
                    ajaxCall($('#monthlyRegularInspectionForm'), "{{ route('CreateManageAttachments') }}", $('#monthlyRegularInspectionForm').find('button.form_button'), "{{ route('ec.CreateManageAttachments',request()->segment(3)) }}", onRequestSuccess);
                }
            }
        });

        $('#deleteMonthlyInspectionModal').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#deleteMonthlyInspectionModal'), "{{ route('DeleteAttachments') }}", $('#deleteMonthlyInspectionModal').find('button.submitbtn'), "{{ route('ec.CreateManageAttachments',request()->segment(3)) }}", onRequestSuccess);
        });

        function setFileName(element) {

            var maxFileSize = 1 * 1024 * 1024 * 20;

            var file = element[0].files[0];

            if (file.size > maxFileSize) {


                Command: toastr["error"]("{{ __('translation.File size exceeds the limit of 20MB.') }}")

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
                element.val(null); // Clear the file input
            }
        }

    </script>
@endsection

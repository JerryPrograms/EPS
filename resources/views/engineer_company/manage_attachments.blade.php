@extends('engineer_company.includes.layout')
@section('body')
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
                                        <h4 class="card-title mb-4">Fill in customer information
                                        </h4>
                                        <div class="row">

                                            <div class="col-md-12 text-end">
                                                <div class="circle_main_section">
                                                    <button class="circle_img_section">
                                                        <img src="{{asset('engineer_company/images/user2.png')}}">
                                                        <p class="circle_img_text mt-3">홍길동 기사님</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="table-responsive mt-3">
                                            <table class="table align-middle custom_mrg">
                                                <thead class="table-light">
                                                <tr>

                                                    <th class="">No.</th>
                                                    <th class="text-center">Registration Date
                                                    </th>
                                                    <th class="text-center">Customer Number
                                                    </th>
                                                    <th class="text-center">Building Name
                                                    </th>
                                                    <th class="text-center">Address
                                                    </th>
                                                    <th class="text-center">Building Management Company
                                                    </th>
                                                    <th class="text-center">Maintenance Company
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="custom_bor mt-5">
                                                    <td class="custom_br_theme_clr"><a
                                                            href="javascript: void(0);"
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
                                                            {{$customer->building_name}}
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->address}}
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            {{$customer->building_management_company}}

                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        <p class="tble_text">
                                                            {{$customer->maintenance_company}}
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
                                                        <h4 class="card_tittle_2">Manage Attachments
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
                                                        class="bor_lef">&nbsp;</span>Manage Attachments
                                                </h4>
                                            </div>
                                            <div class="col-lg-1">

                                                <div class="file_main_section">
                                                    <button class="file_button">
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
                                                        class="history_add_btn">Add
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
                                    <div class="row justify-content-center">
                                        <div class="col-lg-11 p-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                    <tr>

                                                        <th class="align-middle border-0">No.</th>
                                                        <th class="text-center custom_inp_widt  border-0">upload date

                                                        </th>
                                                        <th class="custom_inp_widt  border-0">file
                                                        </th>
                                                        <th class="custom_inp_widt  border-0 ">name</th>
                                                        <th class="text-center  border-0">title
                                                        </th>
                                                        <th class="text-center  border-0">Action
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
                                                                <img class="monthly-inspection-listing-img"
                                                                     src="{{asset($mr->file)}}"
                                                                     class="gallery_img">
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <button class="date_button_2 border-0">{{$mr->name}}
                                                                </button>
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
                                                        class="form_button_2 mb-5 mt-5">Back page
                                                </button>
                                            </div>
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5">Save and Next
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
                    <h5 class="modal-title" id="myModalLabel">Delete Attachments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deleteMonthlyInspectionModal">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <p>Are you sure you want to delete this data?</p>
                            <div class="mb-3">

                                <input name="id" id="partReplacementID" hidden>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit"
                                    class="btn btn-primary waves-effect waves-light submitbtn">
                                Create
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
                    <h5 class="modal-title" id="myModalLabel">Attachment</h5>
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
                            Close
                        </button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        function addMonthlyregularInspection() {
            $('#monthly_regular_inspection_tbody').prepend(`<tr class="custom_bor_3 border-top-0 mt-5">
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#</a>
                                                        </td>
                                                        <td>
                                                            <input type="date" name="date[]" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>

                                                        <td>
                                                             <input type="file" name="file[]" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>


                                                        <td>
                                                            <input type="text" name="name[]" required class="form-control col-lg-12 custom_input_tble_6"  aria-describedby="emailHelp" placeholder="name">
                                                        </td>

                                                        <td>
                                                            <input type="text" name="title[]" required class="form-control col-lg-2 custom_input_tble"  aria-describedby="emailHelp" placeholder="Enter Title
                                                                        ">
                                                        </td>

                                                        <td class="text-center">
                                                            <button type="button" onclick="removeMonthlyRegularInspection($(this))" class="search_button">
                                                               <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>`);
        }

        function removeMonthlyRegularInspection(element) {
            element.parent().parent().remove();
        }

        $('#monthlyRegularInspectionForm').validate({
            submitHandler: function () {
                ajaxCall($('#monthlyRegularInspectionForm'), "{{ route('CreateManageAttachments') }}", $('#monthlyRegularInspectionForm').find('button.form_button'), "{{ route('ec.CreateManageAttachments',request()->segment(3)) }}", onRequestSuccess);
            }
        });

        $('#deleteMonthlyInspectionModal').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#deleteMonthlyInspectionModal'), "{{ route('DeleteAttachments') }}", $('#deleteMonthlyInspectionModal').find('button.submitbtn'), "{{ route('ec.CreateManageAttachments',request()->segment(3)) }}", onRequestSuccess);
        });

    </script>
@endsection

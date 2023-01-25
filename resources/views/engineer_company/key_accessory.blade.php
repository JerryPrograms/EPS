@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">File Manager</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">File Manager</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="main_content">
                    <!-- start page title -->
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="main_content_section_2">

                                <!-- start page title -->

                                <!-- end page title -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="w-100 prompt"></div>
                                        <div class="card">
                                            <div class="card-body mb-4">
                                                <h4 class="card-title mb-4">Fill in customer information
                                                </h4>
                                                <div class="row">

                                                    <div class="col-md-3 mt-4 col-9">
                                                        <div class="input-group" id="datepicker1">
                                                            <input type="text" class="form-control  custom_clr_blk"
                                                                   placeholder="2022.12.25  14:30 ~ 16:30"
                                                                   data-date-format="dd M, yyyy"
                                                                   data-date-container="#datepicker1"
                                                                   data-provide="datepicker">

                                                            <span class="input-group-text">
                                                                    <img
                                                                        src="http://127.0.0.1:8000/engineer_company/assets/images/dark-gray-calander.png"
                                                                        alt="">
                                                                </span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                    <div class="col-md-9 col-2">
                                                        <div class="circle_main_section">
                                                            <button type="button" class="circle_img_section">
                                                                <img
                                                                    src="{{asset('engineer_company/images/user2.png')}}">
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
                                                            <th class="text-center">registration date
                                                            </th>
                                                            <th class="text-center">customer number
                                                            </th>
                                                            <th class="text-center">building name
                                                            </th>
                                                            <th class="text-center">address
                                                            </th>
                                                            <th class="text-center">building management company
                                                            </th>
                                                            <th class="text-center">maintenance company
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
                                                            <div>
                                                                <h4 class="card_tittle_2">Customer information creation
                                                                    page
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <h4 class="card_tittle_2" style="text-align: end;">4 / 8
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- form row 1 start  -->
                                                <div id="customer_info_div" class="row mt-3">
                                                    <div class="col-lg-11 col-6">
                                                        <h4 class="card-title mt-2 border-bottom-0 mb-4">
                                                            <span>&nbsp;</span>
                                                            &nbsp;</h4>
                                                    </div>
                                                    <div class="col-lg-1 col-6 no-print">
                                                        <div class="file_main_section">
                                                            <button type="button"
                                                                    onclick="printForm($('#parkingFacilityInformationForm'))"
                                                                    class="file_button">
                                                                <img
                                                                    src="{{asset('engineer_company/images/Vector.png')}}">
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>


                                                @if(count($customer->MainAccessory) > 0)
                                                    @foreach($customer->MainAccessory as $main_accessory)
                                                        <div class="row mt-3">

                                                            <div class="col-lg-11">

                                                                <div class="colllap_section">

                                                                    <div class="row">

                                                                        <div class="col-lg-3"
                                                                             style="border-right: 1px solid rgba(225, 227, 236, 1);">

                                                                            <div class="colllap_section_4">

                                                                                @if(!empty($main_accessory->tag))
                                                                                    <button
                                                                                        class="collap_yello_section" style="background: {{!empty($main_accessory->color) ? $main_accessory->color : ''}}">
                                                                                        <p id="part_tag_name">
                                                                                            {{ $main_accessory->tag}}</p>
                                                                                    </button>
                                                                                @endif
                                                                                <p class="colllap_section_text mt-2">
                                                                                    {{$main_accessory->title}}
                                                                                </p>

                                                                            </div>

                                                                        </div>


                                                                        <div class="col-lg-8">

                                                                            <div class="colllap_section_5">

                                                                                <ol id="ol{{$loop->index}}"
                                                                                    class="collape_list_text"></ol>
                                                                                @if(count($main_accessory->SubParts) > 0)
                                                                                    @foreach($main_accessory->SubParts as $SubParts)
                                                                                        <li onclick="HideShow($('#form_{{$SubParts->id}}'),$(this))"
                                                                                            class="d-flex parent-li">
                                                                                            <div
                                                                                                class="collapse-icon-section">
                                                                                                <p class="collape_list_text">
                                                                                                    {{$loop->index+1}} )
                                                                                                    {{$SubParts->title}}
                                                                                                </p>
                                                                                            </div>
                                                                                            <span><i
                                                                                                    class="fa-solid fa-chevron-down"></i></span>
                                                                                        </li>
                                                                                        <div id="form_{{$SubParts->id}}"
                                                                                             class="d-flex d-none custom_border">

                                                                                            <div class="col-lg-2">
                                                                                                <div
                                                                                                    class="colllap_section_11">
                                                                                                    <ol class="collape_list_text">
                                                                                                        <li>
                                                                                                            <p class="collape_list_text">
                                                                                                                standard
                                                                                                            </p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text pt-2">
                                                                                                                Quantity</p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text mt-4">
                                                                                                                work
                                                                                                                history
                                                                                                            </p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text mt-4 pt-3">
                                                                                                                Picture
                                                                                                            </p>
                                                                                                        </li>


                                                                                                    </ol>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-9">
                                                                                                <form
                                                                                                    id="parts_form_{{$SubParts->id}}">
                                                                                                    @csrf
                                                                                                    <input type="text"
                                                                                                           name="standard"
                                                                                                           required
                                                                                                           class="form-control col-lg-12 custom_input_tble mt-3"
                                                                                                           id="exampleInputEmail1"
                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->standard))  value="{{$SubParts->standard}}" @endif>

                                                                                                    <input type="number"
                                                                                                           name="quantity"
                                                                                                           required
                                                                                                           class="form-control col-lg-12 custom_input_tble mt-3"
                                                                                                           id="exampleInputEmail1"
                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->quantity))  value="{{$SubParts->quantity}}" @endif
                                                                                                    >

                                                                                                    <textarea
                                                                                                        type="text"
                                                                                                        class="form-control col-lg-12 custom_input_tble mt-2"
                                                                                                        id="exampleInputEmail1"
                                                                                                        aria-describedby="emailHelp"
                                                                                                        placeholder=""
                                                                                                        name="work_history"
                                                                                                    >@if(!empty($SubParts->work_history))
                                                                                                            {{$SubParts->work_history}}
                                                                                                        @endif</textarea>


                                                                                                    <input
                                                                                                        name="id"
                                                                                                        value="{{$SubParts->id}}"
                                                                                                        hidden>

                                                                                                    <div
                                                                                                        class="row mt-3">
                                                                                                        <div
                                                                                                            class="col-lg-9">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                onclick="$(this).next().trigger('click')"
                                                                                                                class="collape_button mb-3">
                                                                                                                Attachments
                                                                                                                upload
                                                                                                            </button>

                                                                                                            <input
                                                                                                                class="sub_part_image"
                                                                                                                type="file"
                                                                                                                name="picture"
                                                                                                                @if(!empty($SubParts->image)) required
                                                                                                                @endif
                                                                                                                hidden>
                                                                                                            <p id="file_name"></p>
                                                                                                        </div>


                                                                                                        <div
                                                                                                            class="col-lg-3"
                                                                                                            style="text-align: end;">
                                                                                                            <button
                                                                                                                onclick="submitFunction($('#parts_form_{{$SubParts->id}}'),$(this))"
                                                                                                                class="collape_button_2 mb-3">
                                                                                                                Save
                                                                                                            </button>

                                                                                                        </div>

                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                @endif

                                                                            </div>

                                                                        </div>

                                                                        <div class="col-lg-1">

                                                                            <button
                                                                                onclick="AppendList($('#ol{{$loop->index}}'),'{{$main_accessory->id}}')"
                                                                                class="collapse_button">
                                                                                <i class="fa-regular fa-plus"></i>

                                                                            </button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    @endforeach
                                                @endif

                                                <!-- form row 1 end  -->


                                                <!--------------------- collapse section  update start-------------------- -->


                                                <!--------------------- collapse section  update start-------------------- -->

                                                <!-- form row  start  -->
                                                <div style="cursor: pointer" onclick="showPartAddModal()"
                                                     class="row mt-3">
                                                    <div class="col-lg-8">
                                                        <div class="collap_section_lst">
                                                            <p class="collap_section_lst_text">
                                                                + Add
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- form row  end  -->

                                                <!-- form row 4 start  -->
                                                <div class="row justify-content-end no-print">
                                                    <div class="col-lg-2 col-6">
                                                        <a href="{{route('ec.CreateParkingFacility',request()->segment(3))}}">
                                                            <button type="button" class="form_button_2 mb-5 mt-5">Back
                                                                page
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-2 col-6">
                                                        <button onclick="window.location.href = '{{route("ec.CreatePartsReplacementHistory",$customer->user_uid)}}'" class="form_button mb-5 mt-5">Save and Next
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- form row 4 end  -->


                                            </div>

                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>


                                <!-- section 2 end  -->

                                <!---------------------------- tabel 2 start----------------  -->

                            </div>
                            <!-- container-fluid -->
                            <!-------------------------------- table 2 end---------------  -->
                        </div>
                        <!-- End Page-content -->
                    </div>
                    <!-- start page title -->

                </div>


            </div> <!-- container-fluid -->
        </div>
        @endsection
        @section('modal')

            <div id="partAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Add Part</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form id="add_main_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname-input" class="form-label">
                                                                Enter Part Name
                                                            </label>
                                                            <input id="form_part_name" type="text" name="title"
                                                                   class="form-control part_name"
                                                                   id="formrow-firstname-input"
                                                                   placeholder="Enter part name" required>
                                                        </div>
                                                        <input name="customer_id" value="{{$customer->id}}" hidden>
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname-input" class="form-label">
                                                                Enter Tag Name
                                                            </label>
                                                            <input id="form_tag_name" type="text" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="tag"
                                                                   placeholder="Enter tag name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname-input" class="form-label">
                                                                Enter Tag Color
                                                            </label>
                                                            <input id="form_tag_name" type="color" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="color"
                                                                   placeholder="Enter tag name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
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


            <div id="subPartModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Add Part</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <form id="sub_part_form">
                            @csrf
                            <div class="modal-body">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="no-value-prompt w-100">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="prompt w-100"></div>
                                                        <div class="mb-3">
                                                            <label for="formrow-firstname-input" class="form-label">
                                                                Enter Sub Part Name
                                                            </label>
                                                            <input type="text" name="title"
                                                                   class="form-control part_name"
                                                                   id="sub_part_name"
                                                                   placeholder="Enter sub-part name" required>
                                                            <input name="main_part_id" id="main_part_id" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <input type="text" id="selector_value" hidden>
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
        @endsection
        @section('custom-script')
            <script>
                let div_count = 0;

                function showPartAddModal() {
                    $('#partAddModal').modal('show');
                }

                function AppendList(element, main_part_id) {

                    $('#selector_value').val(element.attr('id'));
                    $('#main_part_id').val(main_part_id);
                    $('#subPartModal').modal('show');
                }

                var li_count = 1;


                //create main accessory part modal
                $('#add_main_part_form').on('submit', function (e) {
                    e.preventDefault();
                    ajaxCall($('#add_main_part_form'), "{{ route('CreateMainKeyAccessoryInformation') }}", $('#add_main_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                });


                //create sub part
                $('#sub_part_form').on('submit', function (e) {
                    e.preventDefault();
                    ajaxCall($('#sub_part_form'), "{{ route('CreateSubPartTitle') }}", $('#sub_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                });

                function submitFunction(element, btn) {
                    element.on('submit', function (e) {
                        e.preventDefault();
                        ajaxCall(element, "{{ route('CreateKeyAccessoryInformation') }}", element.find('button.collape_button_2'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    });
                }

                $(document).on("change", ".sub_part_image", function (e) {
                    $(this).next().text($(this).val().replace(/C:\\fakepath\\/i, ''));
                })
            </script>
@endsection

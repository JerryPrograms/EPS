@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
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
                                                <h4 class="card-title mb-4">

                                                    {{ __('translation.Fill in customer information') }}

                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-12 col-2 text-end">
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
                                                                <h4 class="card_tittle_2">

                                                                    {{ __('translation.Customer information creation page') }}

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

                                                <div class="row mt-3">
                                                    @if(count($customer->MainAccessory) > 0)
                                                        @foreach($customer->MainAccessory as $main_accessory)

                                                            <div class="col-lg-6 mt-2">

                                                                <div class="colllap_section">

                                                                    <div class="row">

                                                                        <div class="col-lg-3"
                                                                             style="border-right: 1px solid rgba(225, 227, 236, 1);">

                                                                            <div class="colllap_section_4">

                                                                                @if(!empty($main_accessory->tag))
                                                                                    <button
                                                                                        class="collap_yello_section"
                                                                                        style="background: {{!empty($main_accessory->color) ? $main_accessory->color : ''}}">
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
                                                                                                                {{ __('translation.Standard') }}
                                                                                                            </p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text pt-2">
                                                                                                                {{ __('translation.quantity') }}
                                                                                                            </p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text mt-4">
                                                                                                                {{ __('translation.work history') }}
                                                                                                            </p>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <p class="collape_list_text mt-4 pt-3">
                                                                                                                {{ __('translation.picture') }}
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

                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->standard))  value="{{$SubParts->standard}}" @endif>

                                                                                                    <input type="number"
                                                                                                           name="quantity"
                                                                                                           required
                                                                                                           class="form-control col-lg-12 custom_input_tble mt-3"

                                                                                                           aria-describedby="emailHelp"
                                                                                                           placeholder=""
                                                                                                           @if(!empty($SubParts->quantity))  value="{{$SubParts->quantity}}" @endif
                                                                                                    >

                                                                                                    <textarea
                                                                                                        type="text"
                                                                                                        class="form-control col-lg-12 custom_input_tble mt-2"
                                                                                                        required
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
                                                                                                            class="col-lg-6">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                onclick="$(this).next().trigger('click')"
                                                                                                                class="collape_button mb-3">
                                                                                                                {{ __('translation.Attachments upload') }}
                                                                                                            </button>

                                                                                                            <input
                                                                                                                class="sub_part_image"
                                                                                                                type="file"
                                                                                                                name="picture"
                                                                                                                @if(!empty($SubParts->image)) required
                                                                                                                @endif
                                                                                                                hidden>
                                                                                                            <p id="file_name">@if(!empty($SubParts->picture))
                                                                                                                    <a target="_blank"
                                                                                                                       href="{{asset($SubParts->picture)}}">{{explode('/',$SubParts->picture)[3]}}</a>
                                                                                                                @endif
                                                                                                            </p>
                                                                                                        </div>


                                                                                                        <div
                                                                                                            class="col-lg-6"
                                                                                                            style="text-align: end;">
                                                                                                            <button
                                                                                                                onclick="submitFunction($('#parts_form_{{$SubParts->id}}'),$(this))"
                                                                                                                class="collape_button_2 mb-3">
                                                                                                                {{ __('translation.save') }}
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

                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!-- form row 1 end  -->


                                                <!--------------------- collapse section  update start-------------------- -->


                                                <!--------------------- collapse section  update start-------------------- -->

                                                @if(activeGuard() == 'admin')
                                                    <!-- form row  start  -->
                                                    <div style="cursor: pointer" onclick="showPartAddModal()"
                                                         class="row mt-3">
                                                        <div class="col-lg-8">
                                                            <div class="collap_section_lst">
                                                                <p class="collap_section_lst_text">
                                                                    {{ __('translation.+add') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- form row  end  -->
                                                @endif

                                                <!-- form row 4 start  -->
                                                <div class="row justify-content-end no-print">
                                                    <div class="col-lg-2 col-6">
                                                        <a href="{{route('ec.CreateParkingFacility',request()->segment(3))}}">
                                                            <button type="button" class="form_button_2 mb-5 mt-5">
                                                                {{ __('translation.Back page') }}
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-2 col-6">
                                                        <button
                                                            onclick="window.location.href = '{{route("ec.CreatePartsReplacementHistory",$customer->user_uid)}}'"
                                                            class="form_button mb-5 mt-5">

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
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
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
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Part Name') }}
                                                            </label>
                                                            <input id="form_part_name" type="text" name="title"
                                                                   class="form-control part_name"

                                                                   placeholder="{{ __('translation.Enter Part Name') }}"
                                                                   required>

                                                        </div>
                                                        <input name="customer_id" value="{{$customer->id}}" hidden>
                                                        <div class="mb-3">
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Tag Name') }}
                                                            </label>
                                                            <input id="form_tag_name" type="text" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="tag"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                {{ __('translation.Enter Tag Color') }}
                                                            </label>
                                                            <input id="form_tag_name1" type="color" maxlength="100"
                                                                   class="form-control part_name"
                                                                   name="color"
                                                                   placeholder="{{ __('translation.Enter tag name') }}">

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
                                        {{ __('translation.close') }}
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.create') }}
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
                            <h5 class="modal-title" id="myModalLabel">

                                {{ __('translation.Add Part') }}

                            </h5>
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
                                                            <label class="form-label">

                                                                {{ __('translation.Enter Sub Part Name') }}
                                                            </label>
                                                            <input type="text" name="title"
                                                                   class="form-control part_name"
                                                                   id="sub_part_name"
                                                                   placeholder="{{ __('translation.Enter sub-part name') }}"
                                                                   required>

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
                                    <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">
                                        {{ __('translation.close') }}
                                    </button>
                                    <input type="text" id="selector_value" hidden>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light submitbtn">
                                        {{ __('translation.create') }}
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
                $('#add_main_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#add_main_part_form'), "{{ route('CreateMainKeyAccessoryInformation') }}", $('#add_main_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });


                //create sub part
                $('#sub_part_form').validate({
                    submitHandler: function () {
                        ajaxCall($('#sub_part_form'), "{{ route('CreateSubPartTitle') }}", $('#sub_part_form').find('.submitbtn'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                    }
                });

                function submitFunction(element, btn) {

                    element.validate({
                        submitHandler: function () {
                            ajaxCall(element, "{{ route('CreateKeyAccessoryInformation') }}", element.find('button.collape_button_2'), "{{ route('ec.CreateKeyAccessoryHistory',request()->segment(3)) }}", onRequestSuccess);
                        }
                    });

                }

                $(document).on("change", ".sub_part_image", function (e) {
                    $(this).next().text($(this).val().replace(/C:\\fakepath\\/i, ''));
                })
            </script>
@endsection

@extends('engineer_company.includes.layout')
@section('custom-styles')
<style>
    @media print{
        .custom_br_theme_clr_2{
            padding: 0;
        }
        .card-body{
            margin-bottom: 0;
        }
        .custom_br_theme_gray_2{
            padding: 0 !important;
        }
        .custom_br_theme_gray_2 button{
            padding: 0;
        }
        .card_section_2{
            padding: 0 !important;
        }
        .mt-4{
            margin-top: 5px !important;
        }
        .print-margin-0{
           display: none !important;
        }
        .main-content td{
            font-size: 80% !important;
        }
        .main-content{
            padding: 20px !important;
        }
        .tr{
            page-break-inside: avoid;
        }
        .table>:not(caption)>*>*{
            padding: 5px;
        }
    }
</style>
@endsection
@section('body')
    @php
        $address = $customer->GetBuildingInfo()->pluck('address')->implode(',');
        $building_name = $customer->GetBuildingInfo()->pluck('building_name')->implode(',');
    @endphp
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">

                    <!-- start page title -->
                    <form id="add_part_replacement_form">
                        <input name="customer_id" value="{{$customer->id}}" hidden>
                        @csrf
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="prompt w-100"></div>
                                <div class="card">
                                    <div class="card-body mb-4">
                                        <h4 class="card-title mb-4">

                                            {{ __('translation.Fill in customer information') }}

                                        </h4>
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

                                                            {{ __('translation.Customer information creation page') }}

                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">5 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-4">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0"> <span
                                                        class="bor_lef">&nbsp;</span>

                                                    {{ __('translation.Parts replacement history') }}

                                                </h4>
                                            </div>
                                            <div class="col-lg-1">

                                                <div class="file_main_section">
                                                    <button onclick="printForm($('.main-content'))" type="button"
                                                            class="file_button">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- form row 1 end  -->


                                        <!-- row 2 start  -->
                                        <div class="row mt-4 print-margin-0">
                                            <div class="col-lg-3">
                                                <p class="circle_img_text mt-3">
                                                    <b>

                                                        {{ __('translation.Failure and replacement history') }}

                                                    </b>
                                                </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="dropdown align-self-start mt-sm-0 mb-2">
                                                    <input type="date"
                                                           id="range_picker"
                                                           class="form-control frm_section_inp"
                                                           data-date-container='#datepicker1'
                                                           data-provide="datepicker">
                                                    <button type="button" onclick="FilterData($(this).prev().val(),'{{$customer->id}}')" class="btn btn-primary mt-2">Filter</button>
                                                </div>
                                            </div>
                                            @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                            <div class="col-lg-6 text-end">
                                                <button type="button" onclick="addReplacementHistoryRow()"
                                                        class="history_add_btn">
                                                    {{ __('translation.add') }}
                                                </button>
                                            </div>
                                            @endif
                                        </div>
                                        <!-- row 2 end----------------------------------------------------------------------------------------------------------------  -->


                                    </div>

                                    <!-- end row -->


                                    <!-- section 2 end  -->

                                    <!--- tabel 2 start--- -->
                                    <!-- end page title------------------------------- -->
                                    <div class="table-responsive mt-3" style="margin: 0px 20px;">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                            <tr>

                                                <th>
                                                    {{ __('translation.no.') }}
                                                </th>
                                                <th class="text-center custom_inp_widt_2">
                                                    {{ __('translation.Registration Date') }}
                                                </th>
                                                <th class="text-center custom_inp_widt_2">
                                                    {{ __('translation.part') }}
                                                </th>
                                                <th class="text-center custom_inp_widt_2">
                                                    {{ __('translation.Sub Part') }}
                                                </th>
                                                <th class="text-center custom_inp_widt_2 custom_wisth_input_2">
                                                    {{ __('translation.Worker') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.AS content') }}
                                                </th>
                                                @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                                <th class="text-center">

                                                    {{ __('translation.action') }}
                                                </th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody id="partReplacemnetTbody">
                                            @php
                                                $MainPart = $customer->PartReplacementHistory()->latest()->paginate(10);
                                            @endphp

                                            @include('engineer_company.part_replacement_history_listing_template',compact('MainPart'))
                                            </tbody>
                                        </table>


                                        <div id="PartsReplacementHistoryPagination" class="col-lg-12">
                                            {!! $MainPart->links('common_files.paginate') !!}
                                        </div>


                                        <!-- end table-responsive -->
                                    </div>

                                    <!-- end table-responsive -->

                                    <!-- end page title end---------------------  -->
                                    <!-- form row 4 start  -->
                                    <div class="main_section_buttn">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2 col-6">
                                                <button
                                                    onclick="window.location.href='{{route("ec.CreateKeyAccessoryHistory",request()->segment(3))}}'"
                                                    type="button" class="form_button_2 mb-5 mt-5">

                                                    {{ __('translation.Back page') }}

                                                </button>
                                            </div>
                                            @if((activeGuard() !== 'engineer_company') && (activeGuard() !== 'engineer'))
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5 submitbtn">

                                                    {{ __('translation.Save and Next') }}

                                                </button>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- form row 4 end  -->
                                </div>
                            </div>
                        </div>
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

                        {{ __('translation.Delete Parts history Replacement') }}

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deletePartsReplacementHistory">
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
    <div id="EditReplacementHistory" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">

                        {{ __('translation.Edit Parts history Replacement') }}

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="EditPartsReplacementHistory">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <div class="mb-3">

                                <input name="id" id="edit_part_id" hidden>

                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <input id="edit_registration_date" type="date" name="registration_date"
                                               class="form-control" required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input id="edit_as_content" name="as_content" class="form-control" required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <select id="edit_part" onChange="GetSubParts($(this), ${counter})" required
                                                class="form-select valid" name="part" autocomplete="off" required="">
                                            <option value="" disabled="" selected>--{{__('translation.part')}}--
                                            </option>
                                            @foreach($main_parts as $main)
                                                <option data-main-id="{{$main->id}}"
                                                        value="{{$main->id}}">{{$main->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <select id="edit_manager" required class="form-select valid" name="sub_part"
                                                autocomplete="off" required="">
                                            <option value="" disabled="" selected>--{{ __('translation.Worker') }}--</option>
                                            @foreach($sub_parts as $main)
                                                <option data-as-content="{{$main->work_history}}" data-main-id="{{$main->main_part_id}}"
                                                        value="{{$main->id}}">{{$main->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input id="edit_manager1" name="manager" class="form-control" required>
                                    </div>

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
                                {{ __('translation.Update') }}
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

        $("#range_picker").flatpickr({
            altInput: true,
            altFormat: "F j, y",
            dateFormat: "y-m-d",
            mode: "range"
        });

        var counter = 0;

        function addReplacementHistoryRow() {
            counter++;
            $('#partReplacemnetTbody').prepend(`
                                            <tr class="mt-5">
                                                <td class="custom_br_theme_gray">
                                                    <a href="javascript: void(0);" class="text-body fw-bold">#</a>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <input type="date" name="registration_date[]" class="form-control col-lg-12 custom_input_tble" aria-describedby="emailHelp" placeholder="2022.11.01" required>
                                                </td>
                                                <td class="custom_br_theme_gray_2">
                                                    <select onChange="GetSubParts($(this), ${counter})" required class="form-select valid" name="part[]" autocomplete="off" required="">
                                                        <option value="" disabled="" selected>--{{__('translation.part')}}--</option>
                                                        @foreach($main_parts as $main)
            <option data-main-id="{{$main->id}}" value="{{$main->id}}">{{$main->title}}</option>
                                                        @endforeach
            </select>
        </td>
        <td class="custom_br_theme_gray_2">
            <select id="${counter}Sub" onchange="setASContent($(this),$('#${counter}as'))" required class="form-select valid" name="sub_part[]" autocomplete="off" required="">
                                                        <option value="" disabled="" selected>--{{ __('translation.Sub Part') }}--</option>
                                                        @foreach($sub_parts as $main)
            <option data-as-content="{{$main->work_history}}"  data-main-id="{{$main->main_part_id}}" value="{{$main->id}}">{{$main->title}}</option>
                                                        @endforeach
            </select>
        </td>
         <td class="custom_br_theme_gray_2">
           <input type="text" name="manager[]" class="form-control col-lg-12 custom_input_tble" aria-describedby="emailHelp" placeholder="{{__('translation.Worker')}}" required>

        </td>
        <td  class="custom_br_theme_gray_3">
            <input id="${counter}as" type="text" name="as_content[]" class="form-control col-lg-2 custom_input_tble" aria-describedby="emailHelp" placeholder="{{ __('translation.AS content') }}" required>
                                                </td>
                                                <td class="custom_br_theme_gray_3">
                                                    <button type="button" onclick="removeRow($(this).parent().parent())" class="transparent-btn">
                                                        <i class="fa fa-trash-can"></i>
                                                    </button>
                                                </td>
                                            </tr>

             `);
            $('tr td img').addClass('d-none');
        }

        function removeRow(element) {
            element.remove();
            counter--;
            if (counter == 0) {
                $('tr td img').removeClass('d-none');
                $('#initial_date').attr('required', false);
            }
        }

        $('#add_part_replacement_form').validate({
            submitHandler: function () {
                ajaxCall($('#add_part_replacement_form'), "{{ route('CreatePartReplacementHistory') }}", $('#add_part_replacement_form').find('.submitbtn'), "{{ route('ec.CreateMonthlyRegularInspection',request()->segment(3)) }}", onRequestSuccess);
            }
        });

        $('#deletePartsReplacementHistory').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#deletePartsReplacementHistory'), "{{ route('DeletePartReplacementHistory') }}", $('#deletePartsReplacementHistory').find('.submitbtn'), "{{ route('ec.CreatePartsReplacementHistory',request()->segment(3)) }}", onRequestSuccess);
        });

        $('#EditPartsReplacementHistory').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#EditPartsReplacementHistory'), "{{ route('ec.EditPartsReplacement') }}", $('#EditPartsReplacementHistory').find('.submitbtn'), "{{ route('ec.CreatePartsReplacementHistory',request()->segment(3)) }}", onRequestSuccess);
        });

        function FilterData(date, id) {

            $.ajax({
                type: "POST",
                url: "{{route('FilterPartReplacementHistory')}}",
                dataType: 'json',
                cache: false,
                data: {
                    '_token': '{{csrf_token()}}',
                    'date': date,
                    'id': id,
                },
                beforeSend: function () {


                },
                success: function (res) {
                    $('#partReplacemnetTbody').html('');
                    $('#partReplacemnetTbody').html(res.html);
                    $('#PartsReplacementHistoryPagination').remove();
                },
                error: function (e) {
                }
            });
        }

        function UpdateInitialDate(date, customer_id) {
            $.ajax({

                type: "POST",
                url: '{{route('UpdateReplacementInitialDate')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'initial_date': date,
                    'customer_id': customer_id,
                },
                beforeSend: function () {

                },
                success: function (res) {


                    // window.location.reload();
                    if (res.Error == true) {


                        $("div.prompt").html('<div class="alert alert-danger">' + res.Message + '</div>');

                        $("div.prompt").fadeIn();
                        setTimeout(function () {
                            $("div.prompt").fadeOut();
                        }, 2000);

                    } else if (res.Error == false) {

                        $("div.prompt").html('<div class="alert alert-success">' + res.Message + '</div>');

                        $("div.prompt").fadeIn();
                        setTimeout(function () {

                            window.location.reload();

                        }, 2000);

                        setTimeout(function () {
                            $("div.prompt").fadeOut();
                            {
                                {

                                }
                            }

                        }, 2000);

                    }
                },
                error: function (e) {


                    var first_error = '';
                    $.each(e.responseJSON.errors, function (index, item) {

                        first_error = item[0];

                    });

                    $('.parent-loader').addClass('d-none');
                    $("div.prompt").fadeIn();
                    {
                        {
                            $('.prompt').html('<div class="alert alert-danger">' + first_error + '</div>');
                        }
                    }
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                        {
                            {
                                prompt.html('<div class="alert alert-danger">' + first_error + '</div>');
                            }
                        }

                    }, 2000);


                }

            });
        }

        function GetSubParts(element, counter) {
            var ids = element.find('option:selected').attr('data-main-id');
            var id = '#' + counter + 'Sub';


            $(id).find('option').each(function () {

                if ($(this).attr('data-main-id') == ids) {
                    $(this).attr('disabled', false);
                } else {
                    $(this).attr('disabled', true);
                }
            });
        }

        function GetDataParts(id) {
            $.ajax({

                type: "POST",
                url: '{{route('ec.GetPartsData')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                beforeSend: function () {

                },
                success: function (res) {


                    // window.location.reload();
                    if (res.Error == true) {

                    } else if (res.Error == false) {


                        console.log(res.rc);

                        $(`#edit_part option[value='${res.rc.part}']`).prop('selected', true);
                        $(`#edit_manager option[value='${res.rc.sub_part}']`).prop('selected', true);
                        $('#edit_as_content').val(res.rc.as_content);
                        $('#edit_registration_date').val(res.rc.registration_date);
                        $('#edit_part_id').val(res.rc.id);
                        $('#edit_manager1').val(res.rc.manager);
                    }
                },
                error: function (e) {


                    var first_error = '';
                    $.each(e.responseJSON.errors, function (index, item) {

                        first_error = item[0];

                    });

                    $('.parent-loader').addClass('d-none');
                    $("div.prompt").fadeIn();
                    {
                        {
                            $('.prompt').html('<div class="alert alert-danger">' + first_error + '</div>');
                        }
                    }
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                        {
                            {
                                prompt.html('<div class="alert alert-danger">' + first_error + '</div>');
                            }
                        }

                    }, 2000);


                }

            });
        }

        function setASContent(element,element2)
        {
            element2.val(element.find('option:selected').attr('data-as-content'));
        }

    </script>
@endsection

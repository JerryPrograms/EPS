@extends('engineer_company.includes.layout')
@section('body')
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
{{--                                        <div class="row">--}}

{{--                                            <div class="col-md-12 text-end">--}}
{{--                                                <div class="circle_main_section">--}}
{{--                                                    <button class="circle_img_section">--}}
{{--                                                        <img src="{{asset('engineer_company/images/user2.png')}}">--}}
{{--                                                        <p class="circle_img_text mt-3">기사 홍길동--}}
{{--                                                        </p>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


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
                                                            @if(!empty($customer->GetBuildingInfo))
                                                                {{$customer->GetBuildingInfo->building_name}}
                                                            @endif
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if(!empty($customer->GetBuildingInfo))
                                                                {{$customer->GetBuildingInfo->address}}
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td class="custom_br_theme_clr_2">
                                                        <p class="tble_text">
                                                            @if(!empty($customer->CompanyInformation))
                                                                {{$customer->CompanyInformation->company_name}}
                                                            @endif
                                                        </p>
                                                    </td>
                                                    <td class="custom_br_theme_clr_3">
                                                        <p class="tble_text">
                                                            @if(!empty($customer->RepairCompanyInformation))
                                                                {{ $customer->RepairCompanyInformation->company_name }}
                                                            @endif
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
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <p class="circle_img_text mt-3">

                                                    {{ __('translation.Initial installation date') }}

                                                </p>
                                            </div>
                                            <div class="col-lg-3 mt-2" style="flex-direction: column">
                                                <div class="input-group" id="datepicker1">
                                                    <input id="initial_date"
                                                           type="date"
                                                           onchange="UpdateInitialDate($(this).val(),'{{request()->segment(3)}}')"
                                                           class="form-control frm_section_inp w-100"
                                                           placeholder="2022-12-06" data-date-format="dd M, yyyy"
                                                           data-date-container='#datepicker1'
                                                           data-provide="datepicker"
                                                           autocomplete="off"
                                                           @if(!empty($customer->getInitialDate))
                                                               value="{{$customer->getInitialDate->initial_date}}"
                                                        @endif
                                                    >
                                                </div><!-- input-group -->
                                            </div>

                                        </div>
                                        <!-- row 2 end  -->


                                        <!-- row 2 start  -->
                                        <div class="row mt-4">
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
                                                           onchange="FilterData($(this).val(),'{{$customer->id}}')"
                                                           class="form-control frm_section_inp"
                                                           data-date-container='#datepicker1'
                                                           data-provide="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end">
                                                <button type="button" onclick="addReplacementHistoryRow()"
                                                        class="history_add_btn">
                                                    {{ __('translation.add') }}
                                                </button>
                                            </div>
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
                                                <th class="text-center custom_inp_widt_2 custom_wisth_input_2">
                                                    {{ __('translation.manager') }}
                                                </th>
                                                <th class="text-center">
                                                    {{ __('translation.AS content') }}
                                                </th>
                                                <th class="text-center">

                                                    {{ __('translation.action') }}
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="partReplacemnetTbody">
                                            @php
                                                $MainPart = $customer->PartReplacementHistory()->paginate(10);
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
                                            <div class="col-lg-2 col-6">
                                                <button class="form_button mb-5 mt-5 submitbtn">

                                                    {{ __('translation.Save and Next') }}

                                                </button>
                                            </div>
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
@endsection
@section('custom-script')
    <script>


        var counter = 0;

        function addReplacementHistoryRow() {
            counter++;
            $('#partReplacemnetTbody').prepend(`
                                            <tr class="mt-5">
                                            <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                    class="text-body fw-bold">#</a> </td>
                                            <td class="custom_br_theme_gray_2">
                                                <input type="date" name="registration_date[]"
                                                    class="form-control col-lg-12 custom_input_tble"
                                                     aria-describedby="emailHelp"
                                                    placeholder="2022.11.01" required>
                                            </td>


                                            <td class="custom_br_theme_gray_2">
                                                <input type="text" name="part[]"
                                                    class="form-control col-lg-2 custom_input_tble"
                                                     aria-describedby="emailHelp"
                                                    placeholder="{{ __('translation.Part name') }}"
                                                     required>
                                            </td>

                                            <td class="custom_br_theme_gray_2">
                                                <input type="text" name="manager[]"
                                                    class="form-control col-lg-12 custom_input_tble"
                                                     aria-describedby="emailHelp"
                                                    placeholder="{{ __('translation.Manager Name') }}
            " required>
    </td>

    <td class="custom_br_theme_gray_3">
        <input type="text" name="as_content[]"
            class="form-control col-lg-2 custom_input_tble"
             aria-describedby="emailHelp"
            placeholder="{{ __('translation.AS content') }}" required>
                                            </td>

                                 <td class="custom_br_theme_gray_3">
                            <button type="button" onclick="removeRow($(this).parent().parent())" class="transparent-btn"><i class=" fa fa-trash-can"></i></button>
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

        function FilterData(date, id) {

            $.ajax({
                type: "POST",
                url: '{{route('FilterPartReplacementHistory')}}',
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

    </script>
@endsection

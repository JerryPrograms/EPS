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
                                        <h4 class="card-title mb-4">

                                            {{ __('translation.Fill in customer information') }}

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
                                                    <div class="">
                                                        <h4 class="card_tittle_2">

                                                            {{ __('translation.Customer information creation page') }}

                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <h4 class="card_tittle_2" style="text-align: end;">7 / 8</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form row 1 start  -->
                                        <div class="row mt-4">
                                            <div class="col-lg-11">
                                                <h4 class="card-title border-bottom-0"> <span
                                                        class="bor_lef">&nbsp;</span>

                                                    {{ __('translation.dispatch details') }}

                                                </h4>
                                            </div>
                                            <div class="col-lg-1">

                                                <div class="file_main_section">
                                                    <button type="button" onclick="printForm($('.main-content'))"
                                                            class="file_button">
                                                        <img src="{{asset('engineer_company/images/Vector.png')}}">
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- form row 1 end  -->


                                        <!-- row 2 start  -->
                                        <div class="row mt-2">
                                            {{--                                            <div class="col-lg-3">--}}
                                            {{--                                                <p class="circle_img_text mt-3">--}}
                                            {{--                                                    <b>--}}

                                            {{--                                                        {{ __('translation.Failure and replacement history') }}--}}

                                            {{--                                                    </b>--}}
                                            {{--                                                </p>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="col-lg-3">--}}
                                            {{--                                                <div class="dropdown align-self-start mt-sm-0 mb-2">--}}
                                            {{--                                                    <input type="date" onchange="FilterData($(this).val())"--}}
                                            {{--                                                           class="form-control frm_section_inp"--}}
                                            {{--                                                           data-date-container='#datepicker1'--}}
                                            {{--                                                           data-provide="datepicker">--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-lg-12 text-end">
                                                <a href="{{route('ec.CreateDispatchInformation',request()->segment(3))}}"
                                                   type="button"
                                                   class="history_add_btn">
                                                    {{ __('translation.add') }}
                                                </a>
                                            </div>

                                        </div>
                                        <!-- row -->
                                    </div>

                                    <!-- end row -->


                                    <!-- section 2 end  -->

                                    <!--- tabel 2 start--- -->
                                    <!-- end page title------------------------------- -->
                                    @php
                                        $MonthlyRegularInspections = $customer->DispatchInformation()->paginate(10);
                                    @endphp
                                    <div class="row justify-content-center">
                                        <div class="col-lg-11 p-0">
                                            <div class="table-responsive data-set-list mt-3">
                                                <table class="table table-striped align-middle mb-0 table-theme">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>{{ __('translation.no') }}</th>
                                                        <th>{{ __('translation.Reception date') }}</th>
                                                        <th>{{ __('translation.Reception Time') }}</th>
                                                        <th>{{ __('translation.Dispatcher Name') }}</th>
                                                        <th>{{ __('translation.Dispatch content') }}</th>
                                                        <th>{{ __('translation.Customer Name') }}</th>
                                                        <th>{{ __('translation.Address') }}</th>
                                                        <th>{{ __('translation.Action') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                    @foreach ($MonthlyRegularInspections as $v)
                                                        @php
                                                            $reception_date_and_time = explode(' ',$v->reception_date_and_time);

                                                        @endphp
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $reception_date_and_time[0] }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($reception_date_and_time[1])->format('g:i A') }}</td>
                                                            <td>{{ $v->dispatcher }}</td>
                                                            <td title="{{ $v->submission_details }}">{{ Str::limit($v->submission_details, 10, '...') }}</td>
                                                            <td>{{ $v->GetCustomer->customer_number }}</td>
                                                            <td title="{{ $v->GetCustomer->address }}">{{ Str::limit($v->GetCustomer->address, 10, '...') }}</td>
                                                            <td>
                                                                <div class="d-flex gap-1 justify-content-center">
                                                                    <a href="{{ route('ec.ViewDispatchInformation', $v->id) }}"
                                                                       class="btn btn-success btn-custom-table btn-sm">
                                                                        <i class="bx bx-search-alt-2"></i>
                                                                    </a>
                                                                    @if(activeGuard() != 'web')
                                                                        <a @if(activeGuard() == 'admin') style="background-color: #696CFF !important; border: none !important;"
                                                                           @endif href="{{ route('ec.EditDispatchInformation', $v->id) }}"
                                                                           class="btn btn-primary btn-custom-table btn-sm">
                                                                            <i class="bx bxs-edit-alt"></i>
                                                                        </a>
                                                                        <a data-bs-toggle="modal"
                                                                           data-del-id="{{ $v->id }}"
                                                                           data-bs-target="#delModal"
                                                                           class="btn btn-danger btn-custom-table btn-sm delBtn">
                                                                            <i class="bx bx-trash-alt"></i>
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center mt-3">
                                                {!! $MonthlyRegularInspections->links('common_files.paginate') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end table-responsive -->
{{--                                    <div id="monthlyInspectionListingPagination" class="row justify-content-center">--}}
{{--                                        <div class="col-lg-12">--}}
{{--                                            {!! $MonthlyRegularInspections->links('common_files.paginate') !!}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- end page title end---------------------  -->
                                    <!-- form row 4 start  -->
                                    <div class="main_section_buttn">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2 col-6">
                                                <button type="button"
                                                        onclick="window.location.href='{{route("ec.CreateMonthlyRegularInspection",$customer->user_uid)}}'"
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

                    <h5 class="modal-title"
                        id="myModalLabel">{{ __('translation.Delete_Emergency Dispatch Check List') }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <form id="deleteMonthlyInspectionModal">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>

                            <p>{{ __('translation.Are you sure you want to delete this data?') }}</p>

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
        var count = 0;

        function addMonthlyregularInspection() {
            count++;
            $('#monthly_regular_inspection_tbody').prepend(`<tr class="custom_bor_3 border-top-0 mt-5">
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#</a>
                                                        </td>
                                                        <td>
                                                            <input type="date" name="date[]" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>

                                                        <td>
                                                             <input type="file" name="photo[]" required class="form-control col-lg-12 custom_input_tble_5"  aria-describedby="emailHelp" placeholder="2022.11.01">
                                                        </td>


                                                        <td>
                                                            <input type="text" name="manager[]" required class="form-control col-lg-12 custom_input_tble_6"  aria-describedby="emailHelp" placeholder="{{ __('translation.Hong Gil Dong') }}">
                                                        </td>

                                                        <td>
                                                            <input type="text" name="check_contents[]" required class="form-control col-lg-2 custom_input_tble"  aria-describedby="emailHelp" placeholder="{{__('translation.Center lift replacement')}}
            ">
</td>

<td class="text-center">
<button type="button" onclick="removeMonthlyRegularInspection($(this))" class="search_button">
   <i class="fa fa-trash"></i>
</button>
</td>
</tr>`);

            $('tr td img').addClass('d-none');
        }

        function removeMonthlyRegularInspection(element) {
            count--;
            if (count == 0) {
                $('tr td img').removeClass('d-none');
            }
            element.parent().parent().remove();
        }

        $('#monthlyRegularInspectionForm').validate({
            submitHandler: function () {
                ajaxCall($('#monthlyRegularInspectionForm'), "{{ route('CreateEmergencyDispatchCheckList') }}", $('#monthlyRegularInspectionForm').find('button.form_button'), "{{ route('ec.CreateManageAttachments',request()->segment(3)) }}", onRequestSuccess);
            }
        });

        $('#deleteMonthlyInspectionModal').on('submit', function (e) {
            e.preventDefault();
            ajaxCall($('#deleteMonthlyInspectionModal'), "{{ route('DeleteEmergencyDispatchCheckList') }}", $('#deleteMonthlyInspectionModal').find('button.submitbtn'), "{{ route('ec.CreateEmergencyDispatchChecklist',request()->segment(3)) }}", onRequestSuccess);
        });

        function FilterData(date) {
            console.log(date);
            $.ajax({
                type: "POST",
                url: '{{route('FilerEmergencyDispatchCheckList')}}',
                dataType: 'json',
                cache: false,
                data: {
                    '_token': '{{csrf_token()}}',
                    'date': date,
                },
                beforeSend: function () {


                },
                success: function (res) {
                    $('#monthly_regular_inspection_tbody').html('');
                    $('#monthly_regular_inspection_tbody').html(res.html);
                    $('#monthlyInspectionListingPagination').remove();
                },
                error: function (e) {
                }
            });
        }
    </script>
@endsection

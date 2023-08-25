@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .height-600-overflow-auto {
            max-height: 1000px;
            overflow-y: scroll;
            font-weight: normal;
            min-width: 200px;
            scrollbar-color: white;
            scrollbar-width: thin;
        }

        .height-600-overflow-auto::-webkit-scrollbar {
            width: 8px;
        }

        .height-600-overflow-auto::-webkit-scrollbar-track {
            background-color: white;
        }

        .height-600-overflow-auto::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px white;
        }

        .w-24 {
            width: 24px !important;
        }

        .fc-scrollgrid-sync-inner {
            color: black !important;
        }

        th {
            background-color: white !important;
        }

        tbody, td, tfoot, th, thead, tr {
            border-bottom: 1px solid #cac6c6 !important;
        }

        .calender_add_btn {
            border: 1px solid rgba(98, 129, 254, 1);
            padding: 4px 11px;
            border-radius: 3px;
            background: transparent;
        }

        .fc-weekendDuty-button {
            background-color: #DBA15D;
            color: #000000 !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }


        .fc-weekendShift-button {
            background-color: #FEE2E2;
            color: #DC2626 !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }


        .fc-nightShift-button {
            background-color: #FEF9C3;
            color: #CA8A04 !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }


        .fc-holidayDuty-button {
            background-color: #FF60DC;
            color: #ffffff !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }


        .fc-construction-button {
            background-color: #00DF67;
            color: #000000 !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }


        .fc-periodicInspection-button {
            background-color: #DBEAFE;
            color: #2563EB !important;
            border: none;
            font-size: 10px;
            padding: 10px;
        }

        .border-blue-2px {
            border: 3px solid #6281FE;
            padding: 4px;
            font-size: 13px;
        }

        .border-blue-2px::placeholder {
            font-weight: bold;
        }

        .border-none {
            border: none;
        }


        @media only screen and (max-width: 767px) {
            .calender-container {
                flex-direction: column !important;
            }

            .calender-view {
                width: 100% !important;
            }

            .todo-view {
                width: 100% !important;
            }

            .fc-toolbar-chunk .btn-group:nth-child(2) {
                display: flex;
                flex-wrap: wrap;
                margin-left: 0 !important;
            }

            .fc-toolbar-chunk .btn-group:nth-child(2) button {
                margin-top: 10px !important;
            }

        }

        @media only screen and (max-width: 1261px) {


            .fc-toolbar-chunk .btn-group:nth-child(2) {
                display: flex;
                flex-wrap: wrap;
                margin-left: 0 !important;
            }

            .fc-toolbar-chunk .btn-group:nth-child(2) button {
                margin-top: 10px !important;
            }

        }

        .card {
            border: 1px solid #d7d7d7;
            border-radius: 10px;
        }

    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <div class="main_content_section">

                    <!-- end page title -->

                    <div class="d-flex calender-container">
                        <div class="pe-1 calender-view" style="width: 70%">

                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title mb-4">
                                        {{ __('translation.calender') }}
                                    </h4>
                                    <div id="calendar"></div>

                                    <div style='clear:both'></div>

                                </div>
                            </div>

                        </div>
                        <div class="ps-1 todo-view" style="width: 30%">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body height-600-overflow-auto">
                                            <div class="d-flex justify-content-between align-items-center mb-3">

                                                <h6 class="fw-bold mb-0"><img class="me-1" style="width: 20px"
                                                                              src="{{asset('engineer_company/assets/images/rect.png')}}">{{ __('translation.To do list') }}
                                                </h6>

                                                @if(activeGuard() != 'admin')
                                                    <button id="btn-new-event" data-bs-toggle="modal"
                                                            data-bs-target="#addEventCompleteModal"
                                                            class="calender_add_btn">
                                                        {{ __('translation.+add') }}
                                                    </button>
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                @foreach($todos_pending as $ev)
                                                    @php
                                                        $color = '';
                                                            if($ev->status == 0){
                                                                    $color = '#FFAB00';
                                                            }
                                                            elseif ($ev->status == 2){
                                                                $color = '#696CFF';
                                                            }else{
                                                                $color = '#00DF67';
                                                            }

                                                            $building_ev_ids = json_decode($ev->building_names,true);

                                                            $buidling_ev_names = \DB::table('building_addresses')->whereIn('id',$building_ev_ids)->pluck('building_name');
                                                    @endphp
                                                    <div class="card border-black-1px">
                                                        <div class="card-body"
                                                             style="border-left: 10px solid {{$color}};padding: 6px 13px;">
                                                            <div class="information">
                                                                <span>{{$ev->start_date}}</span>
                                                                <h6 class="fw-bold">{{$ev->title}}</h6>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h6 data-toggle="tooltip" data-placement="bottom"
                                                                    title="{{$ev->memo}}">{{strlen($ev->memo) > 15 ? substr($ev->memo,0,15).'...' : $ev->memo}}</h6>
                                                                <button
                                                                    onclick="ChangeEventStatus('{{$ev->id}}')"
                                                                    class="calender_add_btn">
                                                                    {{ __('translation.done') }}
                                                                </button>
                                                            </div>
                                                            <div class="text-left">
                                                                <a href="javascript:void(0)" data-start-date="{{$ev->start_date}}" data-memo="{{$ev->memo}}" data-memo-title="{{$ev->title}}" data-memo-building-name="{{ $buidling_ev_names[0] }}"  data-bs-toggle="modal"
                                                                    data-bs-target="#showMemoModal" onclick=showPopup($(this))>View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3">

                                                <h6 class="fw-bold mb-0"><img class="me-1" style="width: 25px"
                                                                              src="{{asset('engineer_company/assets/images/check.png')}}">{{ __('translation.Completed list') }}
                                                </h6>

                                            </div>
                                            <div class="">
                                                @foreach($todos_completed as $ev)
                                                    @php
                                                        $color = '';
                                                            if($ev->status == 0){
                                                                    $color = '#FFAB00';
                                                            }
                                                            elseif ($ev->status == 2){
                                                                $color = '#696CFF';
                                                            }else{
                                                                $color = '#00DF67';
                                                            }
                                                    @endphp



                                                    <div class="card border-black-1px">
                                                        <div class="card-body"
                                                             style="border-left: 10px solid {{$color}};padding: 6px 15px;">
                                                            <div class="information">
                                                                <span>{{$ev->start_date}}</span>
                                                                <h6 class="fw-bold">{{$ev->title}}</h6>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h6 data-toggle="tooltip" data-placement="bottom"
                                                                    title="{{$ev->memo}}">{{strlen($ev->memo) > 15 ? substr($ev->memo,0,15).'...' : $ev->memo}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
@endsection
@section('modal')

    <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form id="addEventForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4 mt-4">
                                <input type="date" class="form-control border-none" name="start_date"
                                       required>
                            </div>
                            <input name="type" id="add_event_type" hidden>
                            <div class="col-4 text-end mt-4">
                                <button id="type_btn" disabled>
                                    {{ __('translation.Week_end_Duty') }}
                                </button>
                            </div>
                            <div class="col-4 text-end">
                                <button type="button" onclick="appendDiv()" class="btn-primary"><i
                                        class="fa fa-plus-circle"></i></button>
                            </div>
                            <div id="event_list" class="col-12 mt-3">

                                <div class="card my-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <select multiple name="building_names[0][]" id="building_names"
                                                        class="filter-multi-select">
                                                    @foreach($building_names as $bn)
                                                        <option value="{{$bn->id}}">{{$bn->building_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="text" class="form-control border-blue-2px" name="memo[]"
                                                       placeholder="{{ __('translation.Enter Memo') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary submitbtn">
                                    {{ __('translation.Save changes') }}
                                </button>
                            </div>
                            <input name="assigned_by_id" value="123" hidden>
                        </div>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addEventCompleteModal" tabindex="-1" aria-labelledby="addEventCompleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="addCompleteEventForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="prompt w-100"></div>
                            <div class="col-6 mt-4">
                                <input type="date" class="form-control border-none" name="start_date"
                                       required>
                            </div>
                            <input name="added_by" value="{{activeGuard()}}" hidden>
                            <div class="col-6 text-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="col-12 mt-3">
                                <input type="text" class="form-control w-50 border-blue-2px" name="title"
                                       placeholder="{{ __('translation.Enter Title') }}" required>
                            </div>
                            <div class="col-12 mt-2">
                                <input type="text" class="form-control border-blue-2px" name="memo"
                                       placeholder="{{ __('translation.Enter Content') }}" required>
                            </div>
                            <div class="col-12 mt-2">
                                <select multiple name="building_names[]" id="building_names"
                                        class="filter-multi-select">
                                    @foreach($building_names as $bn)
                                        <option value="{{$bn->id}}">{{$bn->building_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary submitbtn">
                                    {{ __('translation.Save changes') }}
                                </button>
                            </div>
                            <input name="user_id" value="{{auth(activeGuard())->user()->id}}" hidden>
                        </div>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="EditAndDeleteEventCompleteModal" tabindex="-1"
         aria-labelledby="EditAndDeleteEventCompleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EditAndDeleteEventCompleteModalLabel">
                        {{ __('translation.Edit Event') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="EditEventForm">
                    <div class="modal-body">
                        @csrf
                        <div class="prompt w-100"></div>
                        <div class="mb-3">
                            <input id="edit_id" name="id" hidden>
                            <label for="formrow-firstname-input"
                                   class="form-label">{{ __('translation.Title') }}</label>
                            <select multiple name="title[]" id="building_names123"
                                    class="filter-multi-select">
                                @foreach($building_names as $bn)
                                    <option value="{{$bn->id}}">{{$bn->building_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">
                                        {{ __('translation.date') }}
                                    </label>
                                    <input id="a_start_date" type="date" class="form-control" name="start_date"

                                           placeholder="{{ __('translation.Enter Your Email ID') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">
                                        {{ __('translation.memo') }}
                                    </label>
                                    <input id="a_memo" type="text" class="form-control" name="memo"

                                           placeholder="{{ __('translation.Enter memo') }}" required>
                                </div>
                            </div>
                            <input name="assigned_by_id" value="1" hidden>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">
                                        {{ __('translation.Select Type') }}
                                    </label>
                                    <select id="a_type" class="form-select" name="type" required>
                                        <option value="" selected disabled>
                                            {{ __('translation.select') }}
                                        </option>
                                        <option value="weekend duty">
                                            {{ __('translation.weekend duty') }}
                                        </option>
                                        <option value="weekend shift">
                                            {{ __('translation.weekend shift') }}
                                        </option>
                                        <option value="night shift">
                                            {{ __('translation.night shift') }}
                                        </option>
                                        <option value="holiday duty">
                                            {{ __('translation.holiday duty') }}
                                        </option>
                                        <option value="construction">
                                            {{ __('translation.construction') }}
                                        </option>
                                        <option value="periodic inspection">
                                            {{ __('translation.Periodic inspection') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('translation.close') }}
                        </button>
                        <button type="button" onclick="DeleteEventid()" class="btn btn-danger">
                            {{ __('translation.delete') }}
                        </button>
                        <button type="submit" class="btn btn-primary Editbtn">
                            {{ __('translation.Save changes') }}
                        </button>
                        <button type="button" onclick="MarkAsCompleted()" class="mark btn btn-info submitbtn">
                            {{ __('translation.Mark as completed') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showMemoModal" tabindex="-1" aria-labelledby="showMemoModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">
                        {{ __('translation.Todo Information') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <h5 id="todo-title"></h5>
                    <p id="todo-description"></p>
                    <div class="d-flex align-items-center gap-2">
                        <p class="mb-0"><b>{{ __('translation.Building') }}</b> : <span class="text-dark mb-0" id="todo-buidling"></span>  | </p>
                        <p class="mb-0"><b>{{ __('translation.Created') }}</b> : <span class="text-dark mb-0" id="todo-date"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom-script')
    <script>

        var lang = 'en';
        @if(config('app.locale') == 'en')
            lang = 'en';
        @else
            lang = 'ko';
        @endif


        document.addEventListener('DOMContentLoaded', function () {


            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: lang,
                themeSystem: 'bootstrap5',
                customButtons: {
                    weekendDuty: {
                        text: '{{ __('translation.Weekend Duty') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-weekendDuty-button');
                            $('#type_btn').text('{{ __('translation.Weekend Duty') }}')
                            $('#add_event_type').val('weekend duty')
                        }
                    },
                    weekendShift: {
                        text: '{{ __('translation.Weekend Shift') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-weekendShift-button');
                            $('#type_btn').text('{{ __('translation.Weekend Shift') }}')
                            $('#add_event_type').val('weekend shift')
                        }
                    },
                    nightShift: {
                        text: '{{ __('translation.Night Shift') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-nightShift-button');
                            $('#type_btn').text('{{ __('translation.Night Shift') }}')
                            $('#add_event_type').val('night shift')
                        }
                    },
                    holidayDuty: {
                        text: '{{ __('translation.Holiday Duty') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-holidayDuty-button');
                            $('#type_btn').text('{{ __('translation.Holiday Duty') }}')
                            $('#add_event_type').val('holiday duty')
                        }
                    },
                    construction: {
                        text: '{{ __('translation.construction') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-construction-button');
                            $('#type_btn').text('{{ __('translation.construction') }}')
                            $('#add_event_type').val('construction')
                        }
                    },
                    periodicInspection: {
                        text: '{{ __('translation.Periodic Inspection') }}',
                        click: function () {
                            $('#addEventModal').modal('show');
                            $('#type_btn').addClass('fc-periodicInspection-button');
                            $('#type_btn').text('{{ __('translation.Periodic Inspection') }}')
                            $('#add_event_type').val('periodic inspection')
                        }
                    },
                    currentMonth: {
                        text: '{{ now()->format('M') }}',
                        click: function () {

                        }
                    },
                },
                @if(activeGuard() != 'admin')
                headerToolbar: {
                    start: 'weekendDuty,weekendShift,nightShift,holidayDuty,construction,periodicInspection', // will normally be on the left. if RTL, will be on the right
                    center: 'title',
                    right: 'prev,next',// will normally be on the right. if RTL, will be on the left
                },
                @endif
                selectable: false,
                selectHelper: true,
                droppable: true,
                events:@json($data),
                editable: true,
                eventDrop: function (event) {

                    $.ajax({
                        type: "POST",
                        url: '{{route('ChangeEventDate')}}',
                        dataType: 'json',
                        data: {
                            '_token': '{{csrf_token()}}',
                            'id': event.event.id,
                            'start_date': event.event.start.toLocaleString(),
                            'end_date': event.event.end == null ? '' : event.event.end.toLocaleString(),
                        },
                        beforeSend: function () {

                        },
                        success: function (res) {

                        },
                        error: function (e) {

                        }
                    });
                },

                eventClick: function (event) {


                    console.log(event);

                    $.ajax({
                        type: "POST",
                        url: '{{route('GetEventDate')}}',
                        dataType: 'json',
                        data: {
                            '_token': '{{csrf_token()}}',
                            'id': event.event.id,
                        },
                        beforeSend: function () {
                            $('#building_names123 option').attr('selected', false);
                        },
                        success: function (res) {
                            $('#EditAndDeleteEventCompleteModal').modal('show');
                            let  buildingNames  = ($.parseJSON(res.data.title));
                            buildingNames.forEach(function(value){
                                $('#building_names123 option[value='+value+']').attr('selected', true);
                            });
                            $("#building_names123").bsMultiSelect("Update");
                            $('#a_start_date').val(res.data.start_date);
                            $('#a_end_date').val(res.data.start_date);
                            $('#a_assigned_to_id').val(res.data.assigned_to_id);
                            $('#a_type').val(res.data.type);
                            $('#edit_id').val(res.data.id);
                            $('#a_memo').val(res.data.memo);
                            if (res.data.status != 1) {
                                $('.mark').prop('disabled', false);
                            } else {
                                $('.mark').prop('disabled', true);
                            }

                        },
                        error: function (e) {

                        }
                    });


                },
                eventClassNames: function (info) {
                    if (info.event.extendedProps.status == 1) {
                        console.log('1') // add the 'event-red' class to the event
                    } else {
                        console.log('2') // add the 'event-normal' class to the event
                    }
                },
                eventContent: function (info) {
                    if (info.event.extendedProps.status == 1) {
                        return {
                            html: '<s>' + info.event.title + '</s>' // customize the event content for status 1
                        };
                    } else {
                        return {
                            html: '<p>' + info.event.title + '</p>' // use the default event content for status 0
                        };
                    }
                }
            });
            calendar.render();
        });

        $('#addEventForm').validate({
            submitHandler: function () {
                ajaxCall($('#addEventForm'), "{{ route('CreateEvent') }}", $('#addEventForm').find('.submitbtn'), "{{ route('ec.GetCalender')}}", onRequestSuccess);
            }
        });

        $('#addCompleteEventForm').validate({
            submitHandler: function () {
                ajaxCall($('#addCompleteEventForm'), "{{ route('CreateTodo') }}", $('#addCompleteEventForm').find('.submitbtn'), "{{ route('ec.GetCalender')}}", onRequestSuccess);
            }
        });

        $('#EditEventForm').validate({
            submitHandler: function () {
                ajaxCall($('#EditEventForm'), "{{ route('EditEventDate') }}", $('#EditEventForm').find('.Editbtn'), "{{ route('ec.GetCalender')}}", onRequestSuccess);
            }
        });

        function DeleteEventid() {
            $.ajax({
                type: "POST",
                url: '{{route('DeleteEventDate')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': $('#edit_id').val(),
                },
                beforeSend: function () {

                },
                success: function (res) {
                    window.location.reload();
                },
                error: function (e) {

                }
            });
        }

        function MarkAsCompleted() {
            $.ajax({
                type: "POST",
                url: '{{route('MarkAsCompleted')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': $('#edit_id').val(),
                },
                beforeSend: function () {

                },
                success: function (res) {
                    window.location.reload();
                },
                error: function (e) {

                }
            });
        }

        function ChangeEventStatus(id) {
            $.ajax({
                type: "POST",
                url: '{{route('ChangeEventStatus')}}',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                beforeSend: function () {

                },
                success: function (res) {
                    window.location.reload();
                },
                error: function (e) {

                }
            });
        }

        $("#building_names").bsMultiSelect({
            placeholder: '{{__('translation.Select building name')}}',
        });

        $("#building_names123").bsMultiSelect({
            placeholder: '{{__('translation.Select building name')}}',
        });

        var count = 1;

        function appendDiv() {
            $('#event_list').append(`<div class="card my-3 position-relative">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <select multiple name="building_names[${count}][]" id="building_names${count}"
                                                        class="filter-multi-select">
                                                    @foreach($building_names as $bn)
            <option value="{{$bn->id}}">{{$bn->building_name}}</option>
                                                    @endforeach
            </select>
        </div>
        <div class="col-12 mt-2">
            <input type="text" class="form-control border-blue-2px" name="memo[]"
                   placeholder="{{ __('translation.Enter Memo') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" onClick="$(this).parent().remove()" style="width: 35px;
                                    position: absolute;
                                    top: 13px;
                                    right: 8px;
                                    border:none;
                                    background:transparent"><i class="fa fa-times"></i></button>
                                </div>`);


            $("#building_names" + count).bsMultiSelect({
                placeholder: 'Select Building Name',
            });
            count++;
        }

        function showPopup(memo){
            $('#todo-title').text(memo.attr('data-memo-title'));
            $('#todo-description').text(memo.attr('data-memo'));
            $('#todo-date').text(memo.attr('data-start-date'));
            $('#todo-buidling').text(memo.attr('data-memo-building-name'));
        }

    </script>
@endsection

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
    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <div class="main_content_section">

                    <!-- end page title -->

                    <div class="d-flex">
                        <div class="pe-1" style="width: 70%">

                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title mb-4">Calender</h4>
                                    <div id="calendar"></div>

                                    <div style='clear:both'></div>

                                </div>
                            </div>

                        </div>
                        <div class="ps-1" style="width: 30%">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body height-600-overflow-auto">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="fw-bold mb-0"><img class="me-1"
                                                                              src="{{asset('engineer_company/assets/images/rect.png')}}">To
                                                    do list</h6>
                                                <button id="btn-new-event" data-bs-toggle="modal"
                                                        data-bs-target="#addEventCompleteModal"
                                                        class="calender_add_btn">+Add
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                @foreach($events as $ev)
                                                    <div class="card border-black-1px">
                                                        <div class="card-body"
                                                             style="border-left: 10px solid {{$ev->color}};padding: 6px 13px;">
                                                            <div class="information">
                                                                <span>{{$ev->start_date}}</span>
                                                                <h6 class="fw-bold">{{$ev->title}}</h6>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h6>Writer:{{$ev->assigned_by_id}}</h6>
                                                                <button
                                                                    onclick="ChangeEventStatus('{{$ev->id}}')"
                                                                    class="calender_add_btn">Done
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="fw-bold mb-0"><img class="me-1"
                                                                              src="{{asset('engineer_company/images/Check_ring.png')}}">Completed
                                                    list</h6>
                                            </div>
                                            <div class="">
                                                @foreach($completed_events as $ev)
                                                    <div class="card border-black-1px">
                                                        <div class="card-body"
                                                             style="border-left: 10px solid {{$ev->color}};padding: 6px 15px;">
                                                            <div class="information">
                                                                <span>{{$ev->start_date}}</span>
                                                                <h6 class="fw-bold">{{$ev->title}}</h6>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <h6>Writer:{{$ev->assigned_by_id}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="external-events" class="mt-2">
                                                <div id="external-events" class="mt-2">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the
                                                        calendar</p>
                                                    <div data-event="{'color':'#8fdf82'}" class="external-event fc-event bg-success"
                                                         data-class="bg-success">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New
                                                        Event Planning
                                                    </div>
                                                    <div class="external-event fc-event bg-info" data-class="bg-info">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                                    </div>
                                                    <div class="external-event fc-event bg-warning"
                                                         data-class="bg-warning">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                                                        Reports
                                                    </div>
                                                    <div class="external-event fc-event bg-danger"
                                                         data-class="bg-danger">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                                        New theme
                                                    </div>
                                                </div>
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
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addEventModalLabel">Add Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addEventForm">
                    <div class="modal-body">

                        @csrf
                        <div class="prompt w-100"></div>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="formrow-firstname-input"
                                   placeholder="Enter Your First Name" required>
                        </div>
                        <div class="row">
                            <input id="start_date" name="start_date" value="" type="date" hidden>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date" id="formrow-email-input"
                                           placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <input name="assigned_by_id" value="1" hidden>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Assigned to</label>
                                    <input type="text" class="form-control" name="assigned_to_id"
                                           id="formrow-password-input"
                                           placeholder="Select Engineer" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">Select Type</label>
                                    <select class="form-select" name="type" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="weekday duty">weekday duty</option>
                                        <option value="weekend shift">weekend shift</option>
                                        <option value="night shift">night shift</option>
                                        <option value="holiday duty">holiday duty</option>
                                        <option value="construction">construction</option>
                                        <option value="Periodic inspection">Periodic inspection</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submitbtn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addEventCompleteModal" tabindex="-1" aria-labelledby="addEventCompleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addEventCompleteModalLabel">Add Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addCompleteEventForm">
                    <div class="modal-body">

                        @csrf
                        <div class="prompt w-100"></div>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="formrow-firstname-input"
                                   placeholder="Enter Your First Name" required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date" id="formrow-email-input"
                                           placeholder="Enter Your Email ID" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date" id="formrow-email-input"
                                           placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <input name="assigned_by_id" value="1" hidden>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Assigned to</label>
                                    <input type="text" class="form-control" name="assigned_to_id"
                                           id="formrow-password-input"
                                           placeholder="Select Engineer" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">Select Type</label>
                                    <select class="form-select" name="type" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="weekday duty">weekday duty</option>
                                        <option value="weekend shift">weekend shift</option>
                                        <option value="night shift">night shift</option>
                                        <option value="holiday duty">holiday duty</option>
                                        <option value="construction">construction</option>
                                        <option value="Periodic inspection">Periodic inspection</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submitbtn">Save changes</button>
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
                    <h1 class="modal-title fs-5" id="EditAndDeleteEventCompleteModalLabel">Edit Event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="EditEventForm">
                    <div class="modal-body">

                        @csrf
                        <div class="prompt w-100"></div>
                        <div class="mb-3">
                            <input id="edit_id" name="id" hidden>
                            <label for="formrow-firstname-input" class="form-label">Title</label>
                            <input type="text" id="a_title" class="form-control" name="title"
                                   id="formrow-firstname-input"
                                   placeholder="Enter Your First Name" required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">Start Date</label>
                                    <input id="a_start_date" type="date" class="form-control" name="start_date"
                                           id="formrow-email-input"
                                           placeholder="Enter Your Email ID" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-email-input" class="form-label">End Date</label>
                                    <input id="a_end_date" type="date" class="form-control" name="end_date"
                                           id="formrow-email-input"
                                           placeholder="Enter Your Email ID">
                                </div>
                            </div>
                            <input name="assigned_by_id" value="1" hidden>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-password-input" class="form-label">Assigned to</label>
                                    <input type="text" class="form-control" name="assigned_to_id"
                                           id="a_assigned_to_id"
                                           placeholder="Select Engineer" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="formrow-inputCity" class="form-label">Select Type</label>
                                    <select id="a_type" class="form-select" name="type" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="weekday duty">weekday duty</option>
                                        <option value="weekend shift">weekend shift</option>
                                        <option value="night shift">night shift</option>
                                        <option value="holiday duty">holiday duty</option>
                                        <option value="construction">construction</option>
                                        <option value="Periodic inspection">Periodic inspection</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="DeleteEventid()" class="btn btn-danger">Delete</button>
                        <button type="submit" class="btn btn-primary submitbtn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('custom-script')
    <script>


        document.addEventListener('DOMContentLoaded', function () {


            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');
            new Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function (eventEl) {
                    return {
                        title: eventEl.innerText
                    };
                }
            });


            var calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap5',
                headerToolbar: {
                    start: 'today prev,next', // will normally be on the left. if RTL, will be on the right
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',// will normally be on the right. if RTL, will be on the left
                },
                selectable: true,
                selectHelper: true,
                droppable: true,
                select: function (start, end, allDays) {
                    $('#addEventModal').modal('show');
                    $('#start_date').val(start.startStr);

                },
                events:@json($data),
                editable: true,


                eventDrop: function (event) {


                    console.log(event.event.start);
                    console.log(event.event.start.toLocaleString());

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

                    $.ajax({
                        type: "POST",
                        url: '{{route('GetEventDate')}}',
                        dataType: 'json',
                        data: {
                            '_token': '{{csrf_token()}}',
                            'id': event.event.id,
                        },
                        beforeSend: function () {

                        },
                        success: function (res) {
                            $('#EditAndDeleteEventCompleteModal').modal('show');
                            $('#a_title').val(res.data.title);
                            $('#a_start_date').val(res.data.start_date);
                            $('#a_end_date').val(res.data.start_date);
                            $('#a_assigned_to_id').val(res.data.assigned_to_id);
                            $('#a_type').val(res.data.type);
                            $('#edit_id').val(res.data.id);
                        },
                        error: function (e) {

                        }
                    });


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
                ajaxCall($('#addCompleteEventForm'), "{{ route('CreateEvent') }}", $('#addCompleteEventForm').find('.submitbtn'), "{{ route('ec.GetCalender')}}", onRequestSuccess);
            }
        });

        $('#EditEventForm').validate({
            submitHandler: function () {
                ajaxCall($('#EditEventForm'), "{{ route('EditEventDate') }}", $('#EditEventForm').find('.submitbtn'), "{{ route('ec.GetCalender')}}", onRequestSuccess);
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


    </script>
@endsection

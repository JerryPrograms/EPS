@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .height-600-overflow-auto {
            height: 600px;
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
    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <div class="main_content_section">

                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">

                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title mb-4">Calender</h4>
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="calendar"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h5 class="fw-bold mb-0"><img class="me-1"
                                                                                      src="{{asset('engineer_company/assets/images/rect.png')}}">To
                                                            do list</h5>
                                                        <button id="btn-new-event" data-bs-toggle="modal"
                                                                data-bs-target="#addEventCompleteModal"
                                                                class="calender_add_btn">+Add
                                                        </button>
                                                    </div>


                                                    <div class="height-600-overflow-auto">
                                                        @foreach($events as $ev)
                                                            <div class="card border-black-1px">
                                                                <div class="card-body"
                                                                     style="border-left: 8px solid {{$ev->color}};">
                                                                    <div class="information">
                                                                        <span>{{$ev->start_date}}</span>
                                                                        <h5 class="fw-bold">{{$ev->title}}</h5>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center">
                                                                        <h5>Writer:{{$ev->assigned_by_id}}</h5>
                                                                        <button class="calender_add_btn">Done</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div id="external-events" class="mt-2">
                                                        <br>
                                                        <p class="text-muted">Drag and drop your event or click in the
                                                            calendar</p>
                                                        <div class="external-event fc-event bg-success"
                                                             data-class="bg-success">
                                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New
                                                            Event
                                                            Planning
                                                        </div>
                                                        <div class="external-event fc-event bg-info"
                                                             data-class="bg-info">
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

                                                    <div class="row justify-content-center mt-5">
                                                        <img src="assets/images/verification-img.png" alt=""
                                                             class="img-fluid d-block">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->


                                    </div>

                                    <div style='clear:both'></div>

                                </div>
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

    <div class="modal fade" id="EditAndDeleteEventCompleteModal" tabindex="-1" aria-labelledby="addEventCompleteModalLabel"
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

@endsection
@section('custom-script')
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap5',
                selectable: true,
                selectHelper: true,
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

    </script>
@endsection

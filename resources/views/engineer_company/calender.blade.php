@extends('engineer_company.includes.layout')
@section('body')
    <style>
        .height-600-overflow-auto {
            height: 600px;
            overflow-y: scroll;
            font-weight: normal;
            min-width: 200px;
            scrollbar-color: white white;
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
                                                        <button id="btn-new-event" class="calender_add_btn">+Add
                                                        </button>
                                                    </div>


                                                    <div class="height-600-overflow-auto">
                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card border-black-1px">
                                                            <div class="card-body card-body-left-border-week-duty">
                                                                <div class="information">
                                                                    <span>2022-12-07</span>
                                                                    <h5 class="fw-bold">Title..</h5>
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5>Writer:Jeongsu Park</h5>
                                                                    <button class="calender_add_btn">Done</button>
                                                                </div>
                                                            </div>
                                                        </div>
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


                                    <!-- Add New Event MODAL -->
                                    <div class="modal fade" id="event-modal" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header py-3 px-4 border-bottom-0">
                                                    <h5 class="modal-title" id="modal-title">Event</h5>

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-hidden="true"></button>

                                                </div>
                                                <div class="modal-body p-4">
                                                    <form class="needs-validation" name="event-form" id="form-event"
                                                          novalidate>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Event Name</label>
                                                                    <input class="form-control"
                                                                           placeholder="Insert Event Name"
                                                                           type="text" name="title" id="event-title"
                                                                           required
                                                                           value=""/>
                                                                    <div class="invalid-feedback">Please provide a valid
                                                                        event
                                                                        name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Category</label>
                                                                    <select class="form-control form-select"
                                                                            name="category"
                                                                            id="event-category">
                                                                        <option selected> --Select--</option>
                                                                        <option value="bg-danger">Danger</option>
                                                                        <option value="bg-success">Success</option>
                                                                        <option value="bg-primary">Primary</option>
                                                                        <option value="bg-info">Info</option>
                                                                        <option value="bg-dark">Dark</option>
                                                                        <option value="bg-warning">Warning</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">Please select a valid
                                                                        event
                                                                        category
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-danger"
                                                                        id="btn-delete-event">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                            <div class="col-6 text-end">
                                                                <button type="button" class="btn btn-light me-1"
                                                                        data-bs-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit" class="btn btn-success"
                                                                        id="btn-save-event">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> <!-- end modal-content-->
                                        </div> <!-- end modal dialog-->
                                    </div>
                                    <!-- end modal-->
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
@section('custom-script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>
@endsection

@extends('engineer_company.includes.layout')
@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main_content_section">

                    <!-- start page title -->


                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <div class="row justify-content-center align-items-baseline">
                                        <div class="col-lg-11 p-0">
                                            <div class="card_section_3">
                                                <h4 class="card_tittle_2">Dispatch Confirmation
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- table info start  -->
                                <div class="info-table-padding">
                                    <table class="table align-middle custom_mrg_2">
                                        <thead class="table-light">
                                        <tr>

                                            <th class="align-middle custom_info_text">Info</th>
                                            <th class="text-center max-width-18">Customer Number

                                                <br>
                                                <div class="custom_info_text_2">{{$customer->customer_number}}</div>
                                            </th>
                                            <th class="text-center max-width-18">Building Name

                                                <br>
                                                <div class="custom_info_text_2">{{$customer->building_name}}
                                                </div>
                                            </th>
                                            <th class="text-center max-width-20">Address

                                                <br>
                                                <div class="custom_info_text_2">{{$customer->address}}
                                                </div>
                                            </th>

                                            <th class="text-center"> Building Management.
                                                <br>
                                                <div class="custom_info_text_2">{{$customer->building_management_company}}
                                                </div>
                                            </th>
                                            <th class="text-center">Maintenance Company

                                                <br>
                                                <div class="custom_info_text_2">{{$customer->maintenance_company}}
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>

                                    </table>
                                </div>
                                <!-- table info end  -->

                                <!-- end row -->


                                <!-- section 2 end  -->

                                <!--- tabel 2 start--- -->
                                <!-- end page title------------------------------- -->
                                <div class="row justify-content-center mt-5 mb-5">
                                    <div class="col-lg-11 p-0">
                                        <div class="customer-table-2">
                                            <div class="table-responsive table-info">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th class="align-middle">No.</th>
                                                        <th class="text-center custom_inp_widt">Date
                                                        </th>
                                                        <th class="custom_inp_widt">Attached photo
                                                        </th>
                                                        <th class="custom_inp_widt">Manager
                                                        </th>
                                                        <th class="custom_inp_widt">Manager
                                                        </th>
                                                        <th class="custom_inp_widt">Customer Name</th>
                                                        <th class="text-center">Installation Place
                                                        </th>
                                                        <th class="text-center">View More
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="custom_bor_clr">
                                                        <td class="border-bottom-0 border-start"><a
                                                                href="javascript: void(0);"
                                                                class="text-body fw-bold"></a></td>
                                                        <td>
                                                            <p class="date_button">2022.11.01</p>
                                                        </td>
                                                        <td>
                                                            <p class="date_button">14:00</p>
                                                        </td>
                                                        <td>
                                                            <p class="date_button_3">Hong Gil..
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="date_button_3">Model name
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="date_button_3">Hong Gil.
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="date_button_2">
                                                                electrical part..</p>
                                                        </td>

                                                        <td class="text-center border-end">
                                                            <div class="aroow_main_section">

                                                                <button class="green_edit_button">
                                                                    <img src="{{asset('engineer_company/assets/images/green-edit.png')}}">
                                                                </button>
                                                                <button class="aroow_button_2">
                                                                    <img src="{{asset('engineer_company/assets/images/red-search.png')}}">
                                                                </button>

                                                                <div class="bluebar_img_section"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="custom_br_2 mb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end table-responsive -->


                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
                <!---table 2 end----  -->
            </div>
            <!-- End Page-content -->
        </div>
    </div>
@endsection

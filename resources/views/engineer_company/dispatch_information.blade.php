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
                                                <h4 class="card_tittle_2">
                                                    {{ __('translation.Dispatch Confirmation') }}
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- table info start  -->
                                <div class="info-table-padding">
                                    <div class="row">
                                        <div class="col-12 text-end">

                                            <a href="{{route('ec.CreateDispatchInformation',$customer->user_uid)}}" class="history_add_btn">
                                                {{ __('translation.add') }}
                                            </a>

                                        </div>
                                    </div>
                                    <table class="table align-middle custom_mrg_2">
                                        <thead class="table-light">
                                        <tr>

                                            <th class="align-middle custom_info_text">
                                                {{ __('translation.info') }}
                                            </th>
                                            <th class="text-center max-width-18">
                                                {{ __('translation.Customer Number') }}
                                                <br>
                                                <div class="custom_info_text_2">{{$customer->customer_number}}</div>
                                            </th>
                                            <th class="text-center max-width-18">

                                                {{ __('translation.Building Name') }}


                                                <br>
                                                <div class="custom_info_text_2">{{$customer->building_name}}
                                                </div>
                                            </th>
                                            <th class="text-center max-width-20">
                                                {{ __('translation.address') }}

                                                <br>
                                                <div class="custom_info_text_2">{{$customer->address}}
                                                </div>
                                            </th>

                                            <th class="text-center">

                                                {{ __('translation.Building Management') }}

                                                <br>
                                                <div
                                                    class="custom_info_text_2">{{$customer->building_management_company}}
                                                </div>
                                            </th>
                                            <th class="text-center">

                                                {{ __('translation.Maintenance Company') }}


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
                                                        <th class="custom_inp_widt">

                                                            {{ __('translation.no.') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.Date of receipt') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.Reception hours') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.receptionist') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.Model and number') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.site name') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.Installation place') }}
                                                        </th>
                                                        <th class="custom_inp_widt">
                                                            {{ __('translation.View more') }}

                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(count($customer->DispatchInformation) > 0)
                                                        @foreach($customer->DispatchInformation as $dispatch)
                                                            <tr class="custom_bor_clr">
                                                                <td class="border-bottom-0 border-start"><a
                                                                        href="javascript: void(0);"
                                                                        class="text-body fw-bold">{{$loop->index + 1}}</a>
                                                                </td>
                                                                <td>
                                                                    <p class="date_button">{{explode(' ',$dispatch->reception_date_and_time)[0]}}</p>
                                                                </td>

                                                                <td>
                                                                    <p class="date_button">{{date('h:i:s a', strtotime(explode(' ',$dispatch->reception_date_and_time)[1]))}}</p>
                                                                </td>
                                                                <td>
                                                                    <p class="date_button_3">{{auth('engineer_company')->user()->name}}
                                                                    </p>
                                                                </td>
                                                               <td>
                                                                    <p class="date_button_3">{{$dispatch->model_and_type}}
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="date_button_3">{{$dispatch->site_name}}
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="date_button_2">
                                                                       {{$customer->address}}</p>
                                                                </td>

                                                                <td class="text-center border-end">
                                                                    <div class="aroow_main_section">

                                                                        <button onclick="window.location.href='{{route("ec.EditDispatchInformation",$dispatch->id)}}'" class="green_edit_button">
                                                                            <img
                                                                                src="{{asset('engineer_company/assets/images/green-edit.png')}}">
                                                                        </button>
                                                                        <button onclick="window.location.href='{{route("ec.ViewDispatchInformation",$dispatch->id)}}'" class="aroow_button_2">
                                                                            <img style="width: 20px;"
                                                                                src="{{asset('engineer_company/assets/images/red-search.png')}}">
                                                                        </button>

                                                                        <div class="bluebar_img_section"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="6"><img style="width: 50%; height: 50%"
                                                                                 src="{{asset('engineer_company/images/no-data-found.png')}}">
                                                            </td>
                                                        </tr>
                                                    @endif
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

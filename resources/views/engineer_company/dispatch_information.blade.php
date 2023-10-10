@extends('engineer_company.includes.layout')
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


                    <!-- section 2 start  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- end table-responsive -->

                                    <div class="row justify-content-center align-items-baseline">
                                        <div class="col-lg-12">
                                            <div class="card_section_3 ms-0 pt-0">
                                                <div class="d-flex justify-content-between align-items-center my-2">
                                                    <h4 class="card_tittle_2 mb-0">
                                                        {{ __('translation.Dispatch Confirmation') }}
                                                    </h4>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <a href="{{ route('ec.GetCustomerInfoDashboard',request()->segment(3)) }}"
                                                            class="btn btn-dark">{{ __('translation.Menu') }}</a>
                                                        <a href="{{route('ec.CreateDispatchInformation',$customer->user_uid)}}"
                                                            class="btn btn-primary">
                                                             {{ __('translation.add') }}
                                                         </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- table info start  -->
                                <div class="info-table-padding">

                                    <table class="table align-middle custom_mrg_2">
                                        <thead class="table-light">
                                        <tr>

                                            <th class="text-center max-width-18">

                                                {{ __('translation.Building Name') }}


                                                <br>
                                                <div class="custom_info_text_2"> @if(!empty($building_name))
                                                        {{$building_name}}
                                                    @endif
                                                </div>
                                            </th>
                                            <th class="text-center max-width-20">
                                                {{ __('translation.address') }}

                                                <br>
                                                <div class="custom_info_text_2"> @if(!empty($address))
                                                        {{$address}}
                                                    @endif
                                                </div>
                                            </th>

                                            <th class="text-center">

                                                {{ __('translation.Building Management') }}

                                                <br>
                                                <div
                                                    class="custom_info_text_2">
                                                    @if(!empty($customer->CompanyInformation))
                                                        {{$customer->CompanyInformation->company_name}}
                                                    @endif
                                                </div>
                                            </th>
                                            <th class="text-center">

                                                {{ __('translation.Building management company') }}


                                                <br>
                                                <div class="custom_info_text_2">
                                                    @if(!empty($customer->RepairCompanyInformation))
                                                        {{$customer->RepairCompanyInformation->company_name}}
                                                    @endif
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
                                <div class="row justify-content-center mb-5">
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
                                                                    <p title="{{$dispatch->dispatcher}}"
                                                                       class="date_button_3">{{\Illuminate\Support\Str::limit($dispatch->dispatcher,15)}}
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
                                                                        @if(empty($dispatch->output))
                                                                        <button
                                                                            onclick="window.location.href='{{route("ec.EditDispatchInformation",$dispatch->id)}}'"
                                                                            class="btn btn-outline-success btn-theme-success-outline btn-outline btn-sm">
                                                                            <img
                                                                                src="{{ asset('engineer_company/images/edit_icon.png') }}">
                                                                        </button>
                                                                        @endif
                                                                        <button
                                                                            onclick="window.location.href='{{route("ec.ViewDispatchInformation",$dispatch->id)}}'"
                                                                            class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                                                                            <img
                                                                                src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                                                                        </button>
                                                                        @if(empty($dispatch->output))
                                                                        <button id="delDispatchInfoBtn" class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm" data-bs-target="#deleteDispatchInformation" data-id="{{ $dispatch->id }}" data-bs-toggle="modal" class="aroow_button_2">
                                                                            <img src="https://eps.beckapps.co/eps/public/engineer_company/assets/images/delete.png">
                                                                        </button>
                                                                        @endif
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

@section('modal')
<div id="deleteDispatchInformation" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel1"
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

                <form id="deleteDispatchInformationForm">
                    @csrf
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="prompt w-100"></div>
                            <p>

                                {{ __('translation.Are you sure you want to delete this data?') }}

                            </p>
                            <div class="mb-3">

                                <input name="id" id="dispatchInfoID" hidden>
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
    $('#delDispatchInfoBtn').on('click',function(){
        $('#dispatchInfoID').val($(this).attr('data-id'));
    });
    $('#deleteDispatchInformationForm').on('submit',function(e) {
        e.preventDefault();
        ajaxCall($('#deleteDispatchInformationForm'), "{{ route('DeleteDispatchInformation') }}", $('#deleteDispatchInformationForm').find('.submitbtn'), "{{ route('ec.ListDispatchInformation',request()->segment(3)) }}", onRequestSuccess);
    });
</script>
@endsection

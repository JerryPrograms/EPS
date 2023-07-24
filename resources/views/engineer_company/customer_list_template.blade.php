<table id="myTable" class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="" style="width: 50px;">
            {{ __('translation.no.') }}
        </th>
        <th class="text-center" style="width: 150px;">
            {{ __('translation.Registration Date') }}
        </th>
        <th class="text-center" style="width: 200px;">
            {{ __('translation.Customer Number') }}
        </th>
        <th class="text-center" style="width: 150px;">
            {{ __('translation.Company name') }}
        </th>
        <th class="text-center" style="width: 150px;">
            {{ __('translation.address') }}
        </th>
        <th class="text-center" style="width: 200px;">
            {{ __('translation.Building Management Company') }}
        </th>
        <th class="text-center" style="width: 150px;">
            {{ __('translation.Maintenance Company') }}
        </th>
        <th class="text-center" style="width: 100px;">
            {{ __('translation.action') }}
        </th>
    </tr>
    </thead>
    <tbody>

    @if(count($customer) == 0)
        <tr>
            <td colspan="8"><img style="height: 200px;"
                                 src="{{asset('engineer_company/images/no-data-found.png')}}">
            </td>
        </tr>
    @endif
    @foreach($customer as $c)
        @php
            $address = $c->GetBuildingInfo()->pluck('address')->implode(',');
            $building_name = $c->GetBuildingInfo()->pluck('building_name')->implode(',');
        @endphp
        <tr onclick="selectRow($(this),'{{$c->id}}')">
            <td class=""><a href="javascript: void(0);"
                            class="text-body fw-bold">{{$counter}}</a>
            </td>
            <td class="">
                <button
                    class="date_button border-0 p-0">{{$c->created_at->format('Y-m-d')}}</button>
            </td>
            <td class="">
                <button class="date_button border-0 p-0">{{$c->customer_number}}</button>
            </td>
            <td class="">
                {{-- <button
                    class="date_button_2 border-0">{{!empty($building_name) ?  $building_name : __('translation.Not Specified Yet')}}</button> --}}
                    <button
                    class="date_button_2 border-0 p-0">{{ $c->company_name }}</button>
            </td>
            <td class="">
                <button title="{{$c->address}}"
                        class="date_button_2 border-0 p-0">{{substr($c->address,0,10)}}
                    ....
                </button>
            </td>
            <td class="">
                {{-- <button
                    class="date_button_2 border-0">{{!empty($c->EngineerCompany) ? $c->EngineerCompany->company_name : __('translation.Not Specified Yet')}}</button> --}}
                    <button
                    class="date_button_2 border-0 p-0">{{ $c->company_registration_number }}</button>
            </td>
            <td class="">
                <!-- Button trigger modal -->
                {{-- <button
                    class="date_button_2 border-0">{{!empty($c->EngineerCompany) ? $c->EngineerCompany->company_registration_number : __('translation.Not Specified Yet')}}</button> --}}
                    <button
                    class="date_button_2 border-0 p-0">{{ $c->representative }}</button>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    @if(activeGuard() == 'admin')
                    <a href="{{route('view_client',[$c->division,$c->id])}}"
                    class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm me-2">
                        <img
                            src="{{asset('engineer_company/assets/images/red-search.png')}}">
                    </a>
                    @endif
                    <!-- Button trigger modal -->
                    {{--                                <a href="{{route('add_contract',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fas fa-file-contract  custom-trash-padding"></i></a>--}}
                    {{--                                <a href="{{route('regular_inspection_log',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fa-magnifying-glass-plus custom-trash-padding"></i></a>--}}
                    @if(activeGuard() == 'admin')
                        <a href="{{route('ec.GetCustomerInfoDashboard',$c->user_uid)}}" class="btn back-green btn-outline btn-sm"> <img
                                src="{{asset('engineer_company/images/edit_icon.png')}}"></a>
                    @else
                        <a href="{{route('ec.GetCustomerInfoDashboard',$c->user_uid)}}" class="btn back-green btn-outline btn-sm"> <img
                                src="{{asset('engineer_company/images/edit_icon.png')}}"></a>
                    @endif
                </div>
                {{--                <button onclick="$('#customerInfoID').val('{{$c->id}}',$('#bname').text('{{$c->GetBuildingInfo->building_name}}'))"--}}
                {{--                        data-bs-toggle="modal"--}}
                {{--                        data-bs-target="#customerDeleteModal"--}}
                {{--                        class="date_button_2 border-0"><i--}}
                {{--                        class="fa fa-trash-can custom-trash-padding"></i></button>--}}
            </td>
        </tr>
        @php
            $counter--;
        @endphp
    @endforeach
    </tbody>
</table>
<div class="col-lg-12 text-center pt-3">
    {!! $customer->links('common_files.paginate') !!}
</div>

<table class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">
            {{ __('translation.no.') }}
        </th>
        <th class="text-center">
            {{ __('translation.Contract Date') }}
        </th>
        <th class="text-center">
            {{ __('translation.Customer No') }}
        </th>
        <th class="text-center" style="min-width: 120px;">
            {{ __('translation.Building Name') }}
        </th>
        <th class="text-center" style="min-width: 220px;">
            {{ __('translation.address') }}
        </th>

        <th class="text-center" style="min-width: 200px;">
            {{ __('translation.Building Management Company') }}
        </th>
        <th class="text-center">{{__('translation.action')}}</th>
    </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($contracts as $v)
        @php
            $address = $v->get_customer->GetBuildingInfo()->pluck('address')->implode(',');
            $building_name = $v->get_customer->GetBuildingInfo()->pluck('building_name')->implode(',');
        @endphp
        <tr onclick="SelectRow($(this),'{{$v->id}}')">

            <td>
                {{ $loop->index + 1 }}
            </td>
            <td>
                {{ $v->contract_date }}
            </td>
            <td>
                {{ !empty($v->get_customer) ?  $v->get_customer->customer_number : 'N/A' }}
            </td>
            <td>
                {{ !empty($v->get_customer) ? $building_name : 'N/A' }}
            </td>
            <td>
                <p class="mb-0"
                   title="{{ !empty($v->get_customer) ? $address : '' }}">{{ !empty($v->get_customer) ? Str::limit($address, 50, '...') : '' }}</p>
            </td>
            <td>
                {{ !empty($v->get_customer) ? $v->get_customer->CompanyInformation->company_name : '' }}

            </td>
            <td class="d-flex gap-1">
                <a  href="{{route('view_contract',$v->id)}}"
                    @if(activeGuard() == 'admin') style="background-color: #6281FE1A; color: #6281FE; border: 1px solid #6281FE"
                    @endif class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                    @if(activeGuard() == 'admin')
                        <img
                            src="{{asset('engineer_company/images/Vector(3).png')}}">
                    @else
                        <img
                            src="{{asset('engineer_company/assets/images/red-search.png')}}">
                    @endif
                </a>
                @if(activeGuard() != 'web' && activeGuard() != 'admin')
                    <a href="{{asset($v->contract_file)}}" class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">
                    </a>
{{--                    <button class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">--}}
{{--                        <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">--}}
{{--                    </button>--}}
                @endif
                @if(activeGuard() == 'web')
                    <button @if($v->alarm == 1) data-bs-toggle="modal" data-bs-target="#customerTurnOffAlarm"
                            onclick="set_contract_id('{{$v->id}}')"
                            class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm btn-background-light-yellow"
                            @else class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm disabled" @endif>
                        @if($v->alarm == 1)
                            <img src="{{ asset('engineer_company/images/alarm.png') }}">
                        @else
                            <img src="{{ asset('engineer_company/images/alarm_grey.png') }}">
                        @endif
                    </button>
                @endif
            </td>
        </tr>
    @endforeach
    <tr class="d-none main-tr">
        <td>No records found</td>
    </tr>
    </tbody>
</table>



<table id="level1_listin_table_old" class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">{{__('translation.no.')}}</th>
        <th class="text-center">{{__('translation.Contract Date')}}
        </th>
        <th class="text-center">{{__('translation.Customer No')}}
        </th>
        <th class="text-center">{{__('translation.Building Name')}}
        </th>
        <th class="text-center">{{__('translation.Address')}}</th>

        <th class="text-center">{{__('translation.Building Management Company')}}
        </th>
        <th class="text-center">{{__('translation.contents')}}
        </th>
        <th class="text-center">{{__('translation.actions')}}
        </th>
    </tr>
    </thead>
    <tbody id="quote_tbody">

    @foreach($quote as $q)

        @php
            $address = $q->getCustomer->GetBuildingInfo()->pluck('address')->implode(',');
            $building_name = $q->getCustomer->GetBuildingInfo()->pluck('building_name')->implode(',');

        @endphp


        <tr onclick="SelectRow($(this),'{{$q->id}}')">
            <td>
                {{$loop->index + 1}}
            </td>
            <td>
                @php

                    $date = \Carbon\Carbon::parse($q->contract_date);
                    @endphp
                {{$date->format('Y-d-m')}}
            </td>
            <td>
                {{$q->GetCustomer->customer_number}}
            </td>
            <td>
                {{$building_name}}
            </td>
            <td>
                {{$address}}
            </td>
            <td>
                {{ !empty($q->GetCustomer) ? $q->GetCustomer->CompanyInformation->company_name : '' }}
            </td>
            <td>
                {{$q->GetCustomer->BuildingInformation->address}}
            </td>
            <td class="d-flex gap-1">
                <a href="{{route('GetQuoteDetails',$q->id)}}"
                   class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                    <img src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                </a>
                {{--                <button class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">--}}
                {{--                    <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">--}}
                {{--                </button>--}}
                {{--                <button onclick="window.location.href = '{{route("ec.PDFQuote",$q->id)}}'"--}}
                {{--                        class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">--}}
                {{--                    <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">--}}
                {{--                </button>--}}
            </td>
        </tr>
    @endforeach

    {{--    <tr colspan="8" class="d-none main-tr" id="noRecord">--}}
    {{--        <img src="{{asset('engineer_company/images/no-data-found.png')}}">--}}
    {{--    </tr>--}}

    </tbody>
</table>


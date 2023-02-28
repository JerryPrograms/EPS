<table id="level1_listin_table_old" class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">No.</th>
        <th class="text-center">Registration Date
        </th>
        <th class="text-center">Customer No
        </th>
        <th class="text-center">Site Name
        </th>
        <th class="text-center">Construction Name</th>

        <th class="text-center">Building Management Company
        </th>
        <th class="text-center">Note
        </th>
        <th class="text-center">Actions
        </th>
    </tr>
    </thead>
    <tbody id="quote_tbody">

    @foreach($quote as $q)
        <tr onclick="SelectRow($(this),'{{$q->id}}')">
            <td>
                {{$loop->index + 1}}
            </td>
            <td>
                {{$q->contract_date}}
            </td>
            <td>
                {{$q->GetCustomer->customer_number}}
            </td>
            <td>
                {{$q->GetCustomer->BuildingInformation->address}}
            </td>
            <td>
                서울시 서초구 남부순환로 158
            </td>
            <td>
                {{$q->GetCustomer->building_management_company}}
            </td>
            <td>
                일반유지보수
            </td>
            <td class="d-flex gap-1">
                <button onclick="GetQuoteData('{{$q->id}}')" data-bs-toggle="modal" data-bs-target="#exampleModal0"
                        class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                    <img src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                </button>
                <button class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                    <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">
                </button>
                <button onclick="window.location.href = '{{route("ec.PDFQuote",$q->id)}}'"
                        class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                    <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">
                </button>
            </td>
        </tr>
    @endforeach

    {{--    <tr colspan="8" class="d-none main-tr" id="noRecord">--}}
    {{--        <img src="{{asset('engineer_company/images/no-data-found.png')}}">--}}
    {{--    </tr>--}}

    </tbody>
</table>


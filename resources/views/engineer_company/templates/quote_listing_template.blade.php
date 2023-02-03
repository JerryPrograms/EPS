<table class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">
            {{ __('translation.no.') }}
        </th>
        <th class="text-center">
            {{ __('translation.Registration Date') }}
        </th>
        <th class="text-center">
            {{ __('translation.Customer Number') }}
        </th>
        <th class="text-center">
            {{ __('translation.site name') }}
        </th>
        <th class="text-center">
            {{ __('translation.Construction Name:') }}
        </th>

        <th class="text-center">
            {{ __('translation.Building Management Company') }}
        </th>
        <th class="text-center">
            {{ __('translation.Note') }}
        </th>
        <th class="text-center">
            {{ __('translation.actions') }}
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
                <button data-bs-toggle="modal" data-bs-target="#exampleModal0"
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
    </tbody>
</table>


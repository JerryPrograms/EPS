<table class="table align-middle mb-0 table-theme">
    <thead class="table-light">
        <tr>

            <th class="">No.</th>
            <th class="text-center">Contract Date
            </th>
            <th class="text-center">Customer No
            </th>
            <th class="text-center">Building Name
            </th>
            <th class="text-center">Address</th>

            <th class="text-center">Building Management Company
            </th>
            <th class="text-center">Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contracts as $v)
            <tr>
                <td>
                    {{ $loop->index + 1 }}
                </td>
                <td>
                    {{ $v->contract_date }}
                </td>
                <td>
                    {{ $v->get_customer->customer_number }}
                </td>
                <td>
                    {{ $v->get_customer->building_name }}
                </td>
                <td>
                    <p class="mb-0" title="{{ $v->get_customer->BuildingInformation->address }}">{{ Str::limit($v->get_customer->BuildingInformation->address, 50, '...') }}</p>   
                </td>
                <td>
                    {{ $v->get_customer->building_management_company }}
                </td>
                <td class="d-flex gap-1">
                    <button class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/red-search.png') }}">
                    </button>
                    <button class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">
                    </button>
                    <button class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



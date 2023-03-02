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
        <th class="text-center">
            {{ __('translation.Building Name') }}
        </th>
        <th class="text-center">
            {{ __('translation.address') }}
        </th>

        <th class="text-center">
            {{ __('translation.Building Management Company') }}
        </th>
        <th class="text-center">{{__('translation.action')}}</th>
    </tr>
    </thead>
    <tbody id="myTable">
    @foreach ($contracts as $v)
        <tr onclick="SelectRow($(this),'{{$v->id}}')">
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
                <p class="mb-0"
                   title="{{ $v->get_customer->BuildingInformation->address }}">{{ Str::limit($v->get_customer->BuildingInformation->address, 50, '...') }}</p>
            </td>
            <td>
                {{ $v->get_customer->building_management_company }}
            </td>
            <td class="d-flex gap-1">
                <button
                    @if(activeGuard() == 'admin') style="background-color: #6281FE1A; color: #6281FE; border: 1px solid #6281FE"
                    @endif class="btn btn-outline-danger btn-theme-danger-outline btn-outline btn-sm">
                    @if(activeGuard() == 'admin')
                        <img
                            src="{{asset('engineer_company/images/Vector(3).png')}}">
                    @else
                        <img
                            src="{{asset('engineer_company/assets/images/red-search.png')}}">
                    @endif
                </button>
                @if(activeGuard() != 'web' && activeGuard() != 'admin')
                    <button class="btn btn-outline-primary btn-theme-primary-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/Arhive_fill.png') }}">
                    </button>
                    <button class="btn btn-outline-light btn-theme-light-outline btn-outline btn-sm">
                        <img src="{{ asset('engineer_company/assets/images/archive_icon.png') }}">
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



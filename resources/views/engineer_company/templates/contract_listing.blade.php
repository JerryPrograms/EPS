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
            <th class="text-center">Contents
            </th>
            <th class="text-center">Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1
            </td>
            <td>
                2022.11.01
            </td>
            <td>
                223456-5032
            </td>
            <td>
                강남을지병원
            </td>
            <td>
                서울시 서초구 남부순환로 158
            </td>
            <td>
                이병로
            </td>
            <td>
                일반유지보수
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
        <tr>
            <td>
                2
            </td>
            <td>
                2022.11.01
            </td>
            <td>
                223456-5032
            </td>
            <td>
                강남을지병원
            </td>
            <td>
                서울시 서초구 남부순환로 158
            </td>
            <td>
                이병로
            </td>
            <td>
                일반유지보수
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
        <tr>
            <td>
                3
            </td>
            <td>
                2022.11.01
            </td>
            <td>
                223456-5032
            </td>
            <td>
                강남을지병원
            </td>
            <td>
                서울시 서초구 남부순환로 158
            </td>
            <td>
                이병로
            </td>
            <td>
                일반유지보수
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
        {{-- @if (count($customer) == 0)
            <tr>
                <td colspan="8"><img style="width: 50%; height: 50%"
                        src="{{ asset('engineer_company/images/no-data-found.png') }}">
                </td>
            </tr>
        @endif
        @foreach ($customer as $c)
            <tr>
                <td class=""><a href="javascript: void(0);" class="text-body fw-bold">{{ $loop->index + 1 }}</a>
                </td>
                <td class="">
                    <button class="date_button border-0">{{ $c->created_at->format('Y.d.m') }}</button>
                </td>
                <td class="">
                    <button class="date_button border-0">{{ $c->customer_number }}</button>
                </td>
                <td class="">
                    <button class="date_button_2 border-0">{{ $c->building_name }}</button>
                </td>
                <td class="">
                    <button title="{{ $c->address }}" class="date_button_2 border-0">{{ substr($c->address, 0, 10) }}
                        ....
                    </button>
                </td>
                <td class="">
                    <button class="date_button_2 border-0">{{ $c->building_management_company }}</button>
                </td>
                <td class="">
                    <!-- Button trigger modal -->
                    <button class="date_button_2 border-0">{{ $c->maintenance_company }}</button>
                </td>
                <td class="d-flex">
                    <!-- Button trigger modal -->
                    <a href="{{ route('ec.GetCustomerInfoDashboard', $c->user_uid) }}" class="date_button_2 border-0"><i
                            class="fa fa-edit custom-trash-padding"></i></a>
                    <button onclick="$('#customerInfoID').val('{{ $c->id }}')" data-bs-toggle="modal"
                        data-bs-target="#customerDeleteModal" class="date_button_2 border-0"><i
                            class="fa fa-trash-can custom-trash-padding"></i></button>
                </td>
            </tr>
        @endforeach --}}
    </tbody>
</table>
{{-- <div class="col-lg-12 text-center">
    {!! $customer->links('common_files.paginate') !!}
</div> --}}

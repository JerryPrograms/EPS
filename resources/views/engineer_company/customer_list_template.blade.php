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
            {{ __('translation.Building Name') }}
        </th>
        <th class="text-center">
            {{ __('translation.address') }}
        </th>
        <th class="text-center">
            {{ __('translation.Building Management Company') }}
        </th>
        <th class="text-center">
            {{ __('translation.Maintenance Company') }}
        </th>
        <th class="text-center">
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
        <tr>
            <td class=""><a href="javascript: void(0);"
                            class="text-body fw-bold">{{$counter}}</a>
            </td>
            <td class="">
                <button
                    class="date_button border-0">{{$c->created_at->format('y.m.d')}}</button>
            </td>
            <td class="">
                <button class="date_button border-0">{{$c->customer_number}}</button>
            </td>
            <td class="">
                <button
                    class="date_button_2 border-0">{{$c->building_name}}</button>
            </td>
            <td class="">
                <button title="{{$c->address    }}"
                        class="date_button_2 border-0">{{substr($c->address,0,10)}}
                    ....
                </button>
            </td>
            <td class="">
                <button
                    class="date_button_2 border-0">{{$c->building_management_company}}</button>
            </td>
            <td class="">
                <!-- Button trigger modal -->
                <button
                    class="date_button_2 border-0">{{$c->maintenance_company}}</button>
            </td>
            <td class="d-flex">
                <!-- Button trigger modal -->
                {{--                <a href="{{route('add_contract',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fas fa-file-contract  custom-trash-padding"></i></a>--}}
                {{--                <a href="{{route('regular_inspection_log',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fa-magnifying-glass-plus custom-trash-padding"></i></a>--}}
                <a href="{{route('ec.GetCustomerInfoDashboard',$c->user_uid)}}" class="date_button_2 border-0"><i
                        class="fa fa-edit custom-trash-padding"></i></a>
                <button onclick="$('#customerInfoID').val('{{$c->id}}')"
                        data-bs-toggle="modal"
                        data-bs-target="#customerDeleteModal"
                        class="date_button_2 border-0"><i
                        class="fa fa-trash-can custom-trash-padding"></i></button>
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

<table class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">No.</th>
        <th class="text-center">registration date
        </th>
        <th class="text-center">customer number
        </th>
        <th class="text-center">building name
        </th>
        <th class="text-center">address</th>
        <th class="text-center">building management company
        </th>
        <th class="text-center">maintenance company
        </th>
        <th class="text-center">action
        </th>
    </tr>
    </thead>
    <tbody>

    @if(count($customer) == 0)
        <tr>
            <td colspan="8"><img style="width: 50%; height: 50%"
                                 src="{{asset('engineer_company/images/no-data-found.png')}}">
            </td>
        </tr>
    @endif
    @foreach($customer as $c)
        <tr>
            <td class=""><a href="javascript: void(0);"
                            class="text-body fw-bold">{{$loop->index +1}}</a>
            </td>
            <td class="">
                <button
                    class="date_button border-0">{{$c->created_at->format('Y.d.m')}}</button>
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
                <a href="{{route('ec.GetCustomerInfoDashboard',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fa-edit"></i></a>
                <button onclick="$('#customerInfoID').val('{{$c->id}}')"
                        data-bs-toggle="modal"
                        data-bs-target="#customerDeleteModal"
                        class="date_button_2 border-0"><i
                        class="fa fa-trash-can"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="col-lg-12 text-center">
    {!! $customer->links('common_files.paginate') !!}
</div>

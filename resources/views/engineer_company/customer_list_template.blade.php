<table class="table align-middle mb-0 table-theme">
    <thead class="table-light">
    <tr>

        <th class="">No.</th>
        <th class="text-center">Registration Date
        </th>
        <th class="text-center">Customer Number
        </th>
        <th class="text-center">Building Name
        </th>
        <th class="text-center">Address</th>
        <th class="text-center">Building Management Company
        </th>
        <th class="text-center">Maintenance Company
        </th>
        <th class="text-center">Action
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
                <a href="{{route('ec.ListDispatchInformation',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fa-edit custom-trash-padding"></i></a>
                <a href="{{route('ec.GetCustomerInfoDashboard',$c->user_uid)}}" class="date_button_2 border-0"><i class="fa fa-edit custom-trash-padding"></i></a>
                <button onclick="$('#customerInfoID').val('{{$c->id}}')"
                        data-bs-toggle="modal"
                        data-bs-target="#customerDeleteModal"
                        class="date_button_2 border-0"><i
                        class="fa fa-trash-can custom-trash-padding"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="col-lg-12 text-center">
    {!! $customer->links('common_files.paginate') !!}
</div>

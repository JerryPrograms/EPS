@if(count($MainPart) > 0)
    @foreach($MainPart as $rh)
        <tr>
            <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                                class="text-body fw-bold">{{$loop->index + 1}}</a>
            </td>
            <td class="custom_br_theme_gray_2">
                <button type="button"
                        class="date_button border-0">{{\Carbon\Carbon::parse($rh->registration_date)->format('Y.d.m')}}</button>
            </td>

            <td class="custom_br_theme_gray_2">
                <button class="date_button_2 border-0">{{$rh->part}}
                </button>
            </td>

            <td class="custom_br_theme_gray_2">
                <button class="date_button_2 border-0">{{$rh->manager}}
                </button>
            </td>
            <td class="custom_br_theme_gray_3">
                <!-- Button trigger modal -->
                <button class="date_button_2 border-0">{{$rh->as_content}}
                </button>
            </td>
            <td class="custom_br_theme_gray_3">
                <!-- Button trigger modal -->
                <button onclick="$('#partReplacementID').val('{{$rh->id}}')"
                        type="button" data-bs-toggle="modal"
                        data-bs-target="#deleteReplacementHistory"
                        class="date_button_2 border-0">
                    <i class="fa fa-trash-can"></i>
                </button>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="8"><img style="width: 50%; height: 50%"
                             src="{{asset('engineer_company/images/no-data-found.png')}}">
        </td>
    </tr>
@endif

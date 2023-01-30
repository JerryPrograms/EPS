@foreach($MonthlyRegularInspections as $mr)

    <tr class="custom_bor_clr">
        <td class="border-bottom-0"><a
                href="javascript: void(0);"
                class="text-body fw-bold">{{$loop->index + 1}}</a></td>
        <td class="border-bottom-0">
            <button
                class="date_button border-0">{{$mr->date}}
            </button>
        </td>
        <td class="border-bottom-0">
            <img class="monthly-inspection-listing-img"
                 src="{{asset($mr->photo)}}"
                 class="gallery_img">
        </td>
        <td class="border-bottom-0">
            <button class="date_button_2 border-0">{{$mr->manager}}
            </button>
        </td>
        <td class="border-bottom-0">
            <button class="date_button_2 border-0">{{$mr->check_contents}}
            </button>
        </td>

        <td class="border-bottom-0 text-center">
            <button onclick="$('#partReplacementID').val('{{$mr->id}}')"
                    type="button" data-bs-toggle="modal"
                    data-bs-target="#deleteReplacementHistory"
                    class="date_button_2 border-0">
                <i class="fa fa-trash-can"></i>
            </button>
        </td>
    </tr>
@endforeach

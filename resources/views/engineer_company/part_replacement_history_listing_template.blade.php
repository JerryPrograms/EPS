@foreach($MainPart as $rh)
<tr>
    <td class="custom_br_theme_gray"><a href="javascript: void(0);"
                                        class="text-body fw-bold">{{$loop->index + 1}}</a>
    </td>
    <td class="custom_br_theme_gray_2">
        <button
            class="date_button border-0">{{$rh->created_at->format('Y.m.d')}}</button>
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
        <a>

        </a>
    </td>
</tr>
@endforeach

@if (count($MonthlyRegularInspections) > 0)
    @foreach ($MonthlyRegularInspections as $mr)
        <tr class="custom_bor_clr">
            <td class="border-bottom-0">{{ $loop->index + 1 }}</td>
            <td class="border-bottom-0">
                {{ $mr->inspection_date->format('d-m-Y') }}
            </td>
            <td class="border-bottom-0">
                {{ $mr->completion_time->format('d-m-Y') }}
            </td>
            <td class="border-bottom-0">
                {{ $mr->arrival_time->format('d-m-Y') }}
            </td>
            <td class="border-bottom-0">
                {{ $mr->inspection_manager }}
            </td>
            <td>
                <a href="{{ route('view_regular_inspection_log', $mr->id) }}" class="btn btn-primary btn-sm">Details</a>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="6">
            <img style="width: 50%; height: 50%" src="{{ asset('engineer_company/images/no-data-found.png') }}">
        </td>
    </tr>
@endif

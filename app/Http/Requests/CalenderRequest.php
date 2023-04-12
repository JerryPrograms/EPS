<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalenderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'start_date' => 'required',
            'memo' => 'required',
            'assigned_by_id' => 'required',
            'type' => 'required',
        ];
    }

    function messages()
    {
        return [
            'start_date.required' => 'Start Date field is required',
            'title.required' => 'title is required',
            'memo.required' => 'memo field is required',
            'type.required' => 'Type field is required',
            'assigned_by_id.required' => 'Assigned by id is required',
        ];
    }
}

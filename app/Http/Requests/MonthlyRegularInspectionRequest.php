<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonthlyRegularInspectionRequest extends FormRequest
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
        if ($this->request->has('date')) {
            return [
                'date' => 'required',
                'photo' => 'required',
                'manager' => 'required',
                'check_contents' => 'required',
            ];
        } else {
            return [];
        }


    }

    function messages()
    {
        return [
            'date.required' => 'date field is required',
            'photo.required' => 'photo field is required',
            'manager.required' => 'manager field is required',
            'check_contents.required' => 'check_contents field is required',
        ];
    }
}

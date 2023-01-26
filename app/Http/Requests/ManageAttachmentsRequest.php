<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageAttachmentsRequest extends FormRequest
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
            'date' => 'required',
            'file' => 'required',
            'name' => 'required',
            'title' => 'required',
        ];
    }

    function messages()
    {
        return [
            'date.required' => 'date field is required',
            'file.required' => 'file field is required',
            'name.required' => 'name field is required',
            'title.required' => 'title field is required',
        ];
    }
}

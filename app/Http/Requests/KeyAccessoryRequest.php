<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeyAccessoryRequest extends FormRequest
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
            'standard'=>'required',
            'quantity'=>'required',
        ];
    }
    function messages()
    {
        return [
            'standard.required'=>'standard field is required',
            'quantity.required'=>'quantity field is required',
        ];
    }
}

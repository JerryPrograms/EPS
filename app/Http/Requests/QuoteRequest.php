<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'contract_date' => 'required',
            'quote_description' => 'required',
            'quote_file' => ['required', 'mimes:pdf']
        ];
    }

    function messages()
    {
        return [
            'contract_date.required' => 'Contract Date field is required'
        ];
    }
}

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
            'quote_item' => 'required|array',
            'quantity' => 'required|array',
            'price' => 'required|array',
            'total_amount' => 'required',
        ];
    }

    function messages()
    {
        return [
            'contract_date.required' => 'Contract Date field is required',
            'quote_item.required' => 'Quote item field is required',
            'quantity.required' => 'Quantity field is required',
            'price.required' => 'Price field is required',
            'total_amount.required' => 'Total Amount field is required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ASAndRepairCompanyRequest extends FormRequest
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
            'repair_company_name' => 'required',
            'contract_date' => 'required',
            'fee' => 'required',
            'invoice_issue_date' => 'required',
            'payment_date' => 'required',
            'payment_method' => 'required',
            'company_name' => 'required',
            'ceo_name' => 'required',
            'address' => 'required',
            'industry_category' => 'required',
            'contacts' => 'required',
        ];
    }

    function messages()
    {
        return [
            'repair_company_name' => 'repair company name field is required',
            'contract_date' => 'contract date field is required',
            'fee' => 'fee field is required',
            'invoice_issue_date' => 'invoice issue date field is required',
            'payment_date' => 'payment date field is required',
            'payment_method' => 'payment method field is required',
            'company_name' => 'company name field is required',
            'ceo_name' => 'ceo name field is required',
            'address' => 'address field is required',
            'industry_category' => 'industry category field is required',
            'contacts' => 'contacts field is required',
        ];
    }
}

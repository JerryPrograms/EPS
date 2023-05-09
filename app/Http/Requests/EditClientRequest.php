<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditClientRequest extends FormRequest
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
            'customer_number' => 'required',
            'master_id' => 'required',
            'password' => 'required',
            'company_name' => 'required',
            'company_registration_number' => 'required',
            'representative' => 'required',
            'maintenance_business_registration_number' => 'required',
            'address' => 'required',
            'business_email' => 'required|email',
            'sectors' => 'required',
            'contact' => 'required',
            'fax' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'customer_number.required' => 'Customer Number field is required',
            'master_id.required' => 'Master ID field is required',
            'password.required' => 'Master Password field is required',
            'company_name.required' => 'Company Name field is required',
            'company_registration_number.required' => 'Company Registration Number field is required',
            'representative.required' => 'Representative field is required',
            'maintenance_business_registration_number.required' => 'Maintainer Business Registration Number field is required',
            'address.required' => 'Address field is required',
            'business_email.required' => 'Business Email field is required',
            'sectors.required' => 'Sectors field is required',
            'contact.required' => 'Contact field is required',
            'fax.required' => 'Fax field is required',
            'email.required' => 'Email field is required',
        ];
    }
}

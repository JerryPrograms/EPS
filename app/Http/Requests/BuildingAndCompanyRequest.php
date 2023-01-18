<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingAndCompanyRequest extends FormRequest
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
            'building_name' => 'required',
            'building_manager_name' => 'required',
            'building_manager_contact' => 'required',
            'address' => 'required',
            'manager_contact' => 'required',
            'company_reg_number' => 'required',
            'ci_address' => 'required',
            'industry_category' => 'required',
            'ci_contacts' => 'required',
        ];
    }
}

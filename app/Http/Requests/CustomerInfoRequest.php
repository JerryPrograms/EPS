<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerInfoRequest extends FormRequest
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
            'building_management_company' => 'required',
            'maintenance_company' => 'required',
        ];
    }

    function messages()
    {
        return [
            'building_name.required' => 'Building Name field is required',
            'building_management_company.required' => 'Building Management Company field is required',
            'maintenance_company.required' => 'Maintenance Company field is required',
        ];
    }
}

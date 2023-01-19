<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParkingAndParkingCertificateRequest extends FormRequest
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
            'certification_number' => 'required',
            'type' => 'required',
            'parking_space' => 'required',
            'producer' => 'required',
            'year_of_installation' => 'required',
            'inspection_date' => 'required',
            'addition_information' => 'required',
        ];
    }

    function messages()
    {
        return [
            'certification_number.required' => 'certification number field is required',
            'type.required' => 'type field is required',
            'parking_space.required' => 'parking space field is required',
            'producer.required' => 'producer field is required',
            'year_of_installation.required' => 'year of installation field is required',
            'inspection_date.required' => 'inspection date field is required',
            'addition_information.required' => 'addition information field is required',
        ];
    }
}

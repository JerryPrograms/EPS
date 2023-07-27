<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InspectionConfirmationCertificateRequest extends FormRequest
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
    public function rules(){
        if ($this->request->has('pc_id')) {
            return [
                'manager_name' => 'required|array|min:3|max:3',
                'manager_name.*' => 'required',
                'installation_place' => 'required|array|min:3|max:3',
                'installation_place.*' => 'required',
                'inspection_period_from' => 'required|array|min:3|max:3',
                'inspection_period_from.*' => 'required',
                'inspection_period_to' => 'required|array|min:3|max:3',
                'inspection_period_to.*' => 'required',
            ];
        } else {
            return [
               'inspection_certificate' => 'required|array|min:3|max:3',
                'manager_name' => 'required|array|min:3|max:3',
                'manager_name.*' => 'required',
                'installation_place' => 'required|array|min:3|max:3',
                'installation_place.*' => 'required',
                'inspection_period_from' => 'required|array|min:3|max:3',
                'inspection_period_from.*' => 'required',
                'inspection_period_to' => 'required|array|min:3|max:3',
                'inspection_period_to.*' => 'required',
            ];
        }
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
            'inspection_certificate.required' => __('translation.Inspection certificate required'),
            'inspection_certificate.min' => 'All 3 Inspection certificate required',
            'inspection_certificate.max' => 'All 3 Inspection certificate required',
            'manager_name.required' => 'Manager Name required',
            'installation_place.required' => 'Installation Place required',
            'inspection_period_from.required' => 'Date required',
            'inspection_period_to.required' => 'Date required',
            'manager_name.min' => 'All 3 Manager Name required',
            'installation_place.min' => 'All 3 Installation Place required',
            'inspection_period_from.min' => 'All 3 Date required',
            'inspection_period_to.min' => 'All 3 Date required',
            'manager_name.max' => 'All 3 Manager Name required',
            'installation_place.max' => 'All 3 Installation Place required',
            'inspection_period_from.max' => 'All 3 Date required',
            'inspection_period_to.max' => 'All 3 Date required',
            'manager_name.*.required' => 'All 3 Manager Name required',
            'installation_place.*.required' => 'All 3 Installation Place required',
            'inspection_period_from.*.required' => 'All 3 Date required',
            'inspection_period_to.*.required' => 'All 3 Date required',
            'manager_name.*.required' => 'All 3 Manager Name required',
            'installation_place.*.required' => 'All 3 Installation Place required',
            'inspection_period_from.*.required' => 'All 3 Date required',
            'inspection_period_to.*.required' => 'All 3 Date required',
        ];
    }
}

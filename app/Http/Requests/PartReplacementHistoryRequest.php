<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartReplacementHistoryRequest extends FormRequest
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

        if ($this->request->has('part')) {
            return [
                'part' => 'sometimes|required',
                'manager' => 'sometimes|required',
                'as_content' => 'sometimes|required',
            ];
        }
        return [];


    }

    function messages()
    {
        return [
            'part.required' => 'Part field is required',
            'manager.required' => 'Manager field is required',
            'as_content.required' => 'AS Content field is required',
        ];
    }
}

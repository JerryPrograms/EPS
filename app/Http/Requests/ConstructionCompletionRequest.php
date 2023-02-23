<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConstructionCompletionRequest extends FormRequest
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
            'project_number' => 'required',
            'site_name' => 'required',
            'joint_name' => 'required',
            'down_payment' => 'required',
            'contract_amount' => 'required',
            'completion_fund' => 'required',
            'other_settlement_fund' => 'required',
            'microbial_fund' => 'required',
            'contract_date' => 'required',
            'production_date' => 'required',
            'completion_date' => 'required',
            'confirmation_date' => 'required',
            'title' => 'required|array',
            'site' => 'required|array',
            'date' => 'required|array',
            'photo' => 'required|array',
        ];
    }
}

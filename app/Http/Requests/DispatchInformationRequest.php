<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DispatchInformationRequest extends FormRequest
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
            'site_name'=>'required',
            'reception_date_and_time'=>'required',
            'model_and_type'=>'required',
            'submission_details'=>'required',
            'failure_cause'=>'required',
            'measures'=>'required',
            'undecided'=>'required',
            'dispatcher'=>'required',
            'output'=>'required',
        ];
    }
    function messages()
    {
        return [
            'site_name.required'=>'Site name is required',
            'reception_date_and_time.required'=>'Reception date and time is required',
            'model_and_type.required'=>'Model and type is required',
            'submission_details.required'=>'Submission Details required',
            'failure_cause.required'=>'Failure Cause is required',
            'measures.required'=>'Measure is required',
            'undecided.required'=>'Undecided is required',
            'dispatcher.required'=>'Dispatcher is required',
            'output.required'=>'Signature is required',
        ];
    }
}

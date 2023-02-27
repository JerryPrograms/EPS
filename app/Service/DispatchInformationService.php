<?php

namespace App\Service;

use App\Http\Requests\DispatchInformationRequest;
use App\Models\DispatchInformationData;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DispatchInformationService
{
    public static function CreateDispatchInformation(DispatchInformationRequest $request)
    {
        try {

            $data['customer_id'] = $request->customer_id;
            $data['site_name'] = $request->site_name;
            $data['reception_date_and_time'] = $request->reception_date_and_time;
            $data['model_and_type'] = $request->model_and_type;
            $data['submission_details'] = $request->submission_details;
            $data['failure_cause'] = $request->failure_cause;
            $data['measures'] = $request->measures;
            $data['undecided'] = $request->undecided;
            $data['dispatcher'] = $request->dispatcher;
            if ($request->output != '1') {
                $base64_str = substr($request->output, strpos($request->output, ",") + 1);
                $image = base64_decode($base64_str);
                $safeName = Str::random(10) . '.' . 'png';
                Storage::disk('public')->put('engineer_company/dispatch_information/' . $safeName, $image);
                $data['output'] = 'storage/engineer_company/dispatch_information/' . $safeName;
            }

            if ($request->has('dispatch_id')) {
                $dispatch_information = DispatchInformationData::where('id', $request->dispatch_id)->update($data);
            } else {

                $dispatch_information = DispatchInformationData::create($data);
            }

            return json_encode([
                'success' => true,
                'message' => __('translation.Dispatch Information Uploaded'),
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}

<?php

namespace App\Service;

use App\Http\Requests\PartReplacementHistoryRequest;
use App\Models\CustomerInfo;
use App\Models\PartReplacementHistoryModel;
use App\Models\PartsInitialDate;
use Illuminate\Http\Request;


class PartReplacement
{

    //Create Building and company information

    public static function CreatePartReplacementHistory(PartReplacementHistoryRequest $request)
    {


        try {

            if (!$request->has('part')) {
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Redirecting to next page'),
                ]);
            } else {
                for ($i = 0; $i < count($request->part); $i++) {
                    $part_replacement_history = PartReplacementHistoryModel::create([
                        'customer_id' => $request->customer_id,
                        'sub_part' => $request->sub_part[$i],
                        'part' => $request->part[$i],
                        'manager' => $request->manager[$i],
                        'as_content' => $request->as_content[$i],
                        'registration_date' => $request->registration_date[$i],
                    ]);
                }

                return json_encode([
                    'success' => true,
                    'message' => __('translation.Part replacement history added successfully'),
                ]);
            }


        } catch (\Exception $ex) {

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function FilterPartReplacementHistory(Request $request)
    {




        preg_match_all('/(\w+ \d{1,2}, \d{2})/', $request->date, $matches);
        $fromDate = $matches[0][0];
        $toDate = $matches[0][1];
        $carbonFromDate = \Carbon\Carbon::createFromFormat('F j, y', $fromDate);
        $carbonToDate = \Carbon\Carbon::createFromFormat('F j, y', $toDate);

        try {

            $MainPart = $partReplacements = PartReplacementHistoryModel::
            whereDate('registration_date','>=',$carbonFromDate->startOfDay())->
            whereDate('registration_date','<=',$carbonToDate->endOfDay())
            ->where('customer_id', $request->id)->get();
            $html = view('engineer_company.part_replacement_history_listing_template', compact('MainPart'))->render();


            return json_encode([
                'success' => true,
                'html' => $html,
            ]);

        } catch (\Exception $ex) {

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function DeletePartReplacementHistory(Request $request)
    {
        try {

            $main_part_hstory_delete = PartReplacementHistoryModel::where('id', $request->id)->delete();
            return json_encode([
                'success' => true,
                'message' => __('translation.Data deleted successfully'),
            ]);

        } catch (\Exception $ex) {
            return json_decode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function UpdateReplacementInitialDate(Request $request)
    {

        $customer = CustomerInfo::where('user_uid', $request->customer_id)->first();
        if ($customer) {

            $check = PartsInitialDate::where('customer_id', $customer->id)->first();
            if ($check) {
                PartsInitialDate::where('id', $check->id)->update([
                    'initial_date' => $request->initial_date,
                ]);
            } else {
                PartsInitialDate::create([
                    'initial_date' => $request->initial_date,
                    'customer_id' => $customer->id,
                ]);
            }

            return json_encode([
                'Error' => false,
                'Message' => 'Initial Date Uploaded',
            ]);
        } else {
            return json_encode([
                'Error' => true,
                'Message' => 'No user found',
            ]);
        }
    }
}

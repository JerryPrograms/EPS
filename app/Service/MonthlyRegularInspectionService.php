<?php

namespace App\Service;

use App\Http\Requests\KeyAccessoryRequest;
use App\Http\Requests\MonthlyRegularInspectionRequest;
use App\Models\KeyAccessoryInformation as KeyAccessoryModel;
use App\Models\MainPartModel;
use App\Models\MonthlyRegularInspection;
use App\Models\PartReplacementHistoryModel;
use Illuminate\Http\Request;


class MonthlyRegularInspectionService
{

    //Create Main Key Accessory Part
    public static function CreateMonthlyRegularInspection(MonthlyRegularInspectionRequest $request)
    {


        if(!$request->has('date'))
        {
            return json_encode([
                'success'=>true,
                'message'=>'Redirecting to next page...',
            ]);
        }

        try {

            for ($i = 0; $i < count($request->manager); $i++) {
                $data = array();
                $data['date'] = $request->date[$i];
                $data['photo'] = saveFiles('', 'engineer_company/regular_inspection_history/', $request->photo[$i]);
                $data['manager'] = $request->manager[$i];
                $data['check_contents'] = $request->check_contents[$i];
                $data['customer_id'] = $request->customer_id;
                $MonthlyInspection = MonthlyRegularInspection::create($data);
            }
            return json_encode([
                'success' => true,
                'message' => 'Monthly Regular Inspection added successfully',
            ]);


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }


    public static function FilerMonthlyInspection(Request $request)
    {


        try {

            $MonthlyRegularInspections = MonthlyRegularInspection::where('date', $request->date)->where('customer_id',$request->id)->get();

            $html = view('engineer_company.monthly_inspection_replacement_listing_template', compact('MonthlyRegularInspections'))->render();


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

    public static function DeleteMonthlyInspection(Request $request)
    {
        try {

            $main_part_hstory_delete = MonthlyRegularInspection::where('id', $request->id)->delete();
            return json_encode([
                'success' => true,
                'message' => 'Data deleted successfully',
            ]);

        } catch (\Exception $ex) {
            return json_decode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}

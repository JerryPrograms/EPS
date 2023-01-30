<?php

namespace App\Service;

use App\Http\Requests\EmergencyDispatchCheckListRequest;
use App\Models\EmergencyDispatchCheckList;
use Illuminate\Http\Request;


class EmergencyDispatchCheckListService
{
    public static function CreateEmergencyDispatchCheckList(EmergencyDispatchCheckListRequest $request)
    {


        if (!$request->has('date')) {
            return json_encode([
                'success' => true,
                'message' => 'Redirecting to next page',
            ]);
        }

        try {

            for ($i = 0; $i < count($request->manager); $i++) {
                $data = array();
                $data['date'] = $request->date[$i];
                $data['photo'] = saveFiles('', 'engineer_company/emergency_dispatch_checklist/', $request->photo[$i]);
                $data['manager'] = $request->manager[$i];
                $data['check_contents'] = $request->check_contents[$i];
                $data['customer_id'] = $request->customer_id;
                $MonthlyInspection = EmergencyDispatchCheckList::create($data);
            }
            return json_encode([
                'success' => true,
                'message' => 'Emergency Dispatch Checklist added successfully',
            ]);


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function FilerEmergencyDispatchCheckList(Request $request)
    {


        try {

            $MonthlyRegularInspections = EmergencyDispatchCheckList::where('date', $request->date)->get();

            $html = view('engineer_company.emergency_dispatch_checklist_listing_template', compact('MonthlyRegularInspections'))->render();


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

    public static function DeleteEmergencyDispatchCheckList(Request $request)
    {
        try {

            $main_part_hstory_delete = EmergencyDispatchCheckList::where('id', $request->id)->delete();
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

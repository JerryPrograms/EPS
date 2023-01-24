<?php

namespace App\Service;

use App\Http\Requests\PartReplacementHistoryRequest;
use App\Models\PartReplacementHistoryModel;
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
                    'message' => 'Redirecting to next page...',
                ]);
            } else {
                for ($i = 0; $i < count($request->part); $i++) {
                    $part_replacement_history = PartReplacementHistoryModel::create([
                        'customer_id' => $request->customer_id,
                        'part' => $request->part[$i],
                        'manager' => $request->manager[$i],
                        'as_content' => $request->as_content[$i],
                        'registration_date' => $request->registration_date[$i],
                        'initial_date' => $request->initial_date,
                    ]);
                }

                return json_encode([
                    'success' => true,
                    'message' => 'Part replacement history added successfully',
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


        try {

            $year = explode('-', $request->date)[0];
            $month = explode('-', $request->date)[1];


            $MainPart = PartReplacementHistoryModel::whereYear('registration_date', $year)->whereMonth('registration_date', $month)->get();

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

//            $main_part_hstory_delete =

        } catch (\Exception $ex) {
            return json_decode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}
<?php

namespace App\Service;

use App\Http\Requests\KeyAccessoryRequest;
use App\Models\KeyAccessoryInformation as KeyAccessoryModel;
use App\Models\MainPartModel;
use Illuminate\Http\Request;


class KeyAccessoryInformation
{

    //Create Main Key Accessory Part
    public static function CreateMainKeyAccessoryInformation(Request $request)
    {

        try {


            $main = MainPartModel::create($request->except('_token'));

            if ($main) {
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Part added successfully'),
                ]);
            }
            return json_encode([
                'success' => false,
                'message' => __('translation.Something went wrong'),
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    //Create Sub Part Title
    public static function CreateSubPartTitle(Request $request)
    {

        try {
            $sub_part_title = KeyAccessoryModel::create($request->except('_token'));
            return json_encode([
                'success' => true,
                'message' => __('translation.Sub Part added successfully'),
            ]);
        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    //Create AS and Repair Company information
    public static function CreateKeyAccessoryInformation(KeyAccessoryRequest $request)
    {

        try {


            $key_accessory = array();
            $key_accessory['standard'] = $request->standard;
            $key_accessory['quantity'] = $request->quantity;
            if ($request->has('picture')) {
                $key_accessory['picture'] = saveFiles('', 'engineer_company/parts_history', $request->picture);
            }
            $key_accessory['work_history'] = $request->work_history;
            $as_information = KeyAccessoryModel::where('id', $request->id)->update($key_accessory);


            return json_encode([
                'success' => true,
                'message' => __('translation.Information Uploaded Successfully'),
            ]);

        } catch (\Exception $ex) {

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function ImportKey(Request $request)
    {

        if (!$request->has('buildings')) {
            return json_encode([
                'success' => false,
                'message' => 'You have to select one building to import parts'
            ]);
        } else {
            foreach ($request->buildings as $building) {

            }
        }

    }
}

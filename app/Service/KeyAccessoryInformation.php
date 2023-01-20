<?php

namespace App\Service;

use App\Http\Requests\KeyAccessoryRequest;
use App\Models\KeyAccessoryInformation as KeyAccessoryModel;


class KeyAccessoryInformation
{

    //Create AS and Repair Company information

    public static function CreateKeyAccessoryInformation(KeyAccessoryRequest $request)
    {

        try {

            $key_accessory = array();
            $key_accessory['standard'] = $request->standard;
            $key_accessory['quantity'] = $request->quantity;
            $key_accessory['title'] = $request->title;
            $key_accessory['customer_id'] = $request->customer_id;
            $key_accessory['picture'] = saveFiles('', 'engineer_company/parts_history', $request->picture);
            $key_accessory['work_history'] = now();


            if ($request->has('accessory_id')) {
                $as_information = KeyAccessoryModel::where('id', $request->accessory_id)->update($key_accessory);
            } else {
                $as_information = KeyAccessoryModel::where('id', $request->accessory_id)->create($key_accessory);
            }

            return json_encode([
                'success' => true,
                'message' => 'Information Uploaded Successfully',
            ]);

        } catch (\Exception $ex) {

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}

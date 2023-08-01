<?php

namespace App\Service;

use App\Http\Requests\KeyAccessoryRequest;
use App\Models\KeyAccessoryInformation as KeyAccessoryModel;
use App\Models\MainPartModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
                'message' => __('translation.You have to select one building to import parts')
            ]);
        } else {
            DB::beginTransaction();
            try {
                
                    $MainParts = MainPartModel::whereIn('customer_id', $request->buildings)->get();
                        foreach ($MainParts as $MainPart) {
                            $MainPartCreate = MainPartModel::create([
                                'customer_id' => $request->customer_id,
                                'title' => $MainPart->title,
                                'tag' => $MainPart->tag,
                                'color' => $MainPart->color,
                            ]);
                            $SubParts = \App\Models\KeyAccessoryInformation::where('main_part_id', $MainPart->id)->get();

                            foreach ($SubParts as $part) {
                                \App\Models\KeyAccessoryInformation::create([
                                    'main_part_id' => $MainPartCreate->id,
                                    'title' => $part->title,
                                    'standard' => $part->standard,
                                    'quantity' => $part->quantity,
                                    'work_history' => $part->work_history,
                                    'picture' => $part->picture,
                                ]);
                            }
                    }

                    

                
                DB::commit();
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Parts Imported Successfully'),
                ]);


            } catch (\Exception $ex) {
                DB::rollBack();
                return json_encode([
                    'success' => false,
                    'message' => $ex->getMessage(),
                ]);
            }
        }

    }

    public function UpdateKeyAccessoryMainPart(Request $request)
    {

        try {

            MainPartModel::where('id', $request->id)->update([
                'tag' => $request->tag,
                'title' => $request->title,
                'color' => $request->color,
            ]);

            return json_encode([
                'success' => true,
                'message' => __('translation.Parts Imported Successfully'),
            ]);

        } catch (\Exception $ex) {

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }


    public function EditSubPartTitle(Request $request)
    {
        try {

            KeyAccessoryModel::where('id', $request->id)->update([
                'title' => $request->title,
            ]);

            return json_encode([
                'success' => true,
                'message' => __('translation.Title Updated'),
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function DeletePart(Request $request)
    {
        try {


            DB::beginTransaction();


            KeyAccessoryModel::where('main_part_id', $request->id)->delete();

            MainPartModel::where('id', $request->id)->delete();

            DB::commit();

            return json_encode([
                'success' => true,
                'message' => __('translation.Part deleted successfully'),
            ]);


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}

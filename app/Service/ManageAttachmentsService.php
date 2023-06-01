<?php

namespace App\Service;

use App\Http\Requests\ManageAttachmentsRequest;
use App\Models\ManageAttachment;
use Illuminate\Http\Request;


class ManageAttachmentsService
{
    public static function CreateManageAttachments(ManageAttachmentsRequest $request)
    {

        try {

            for ($i = 0; $i < count($request->date); $i++) {
                $data = array();
                $data['date'] = $request->date[$i];
                $data['file'] = saveFiles('', 'engineer_company/manage_attachments/', $request->file[$i]);
                $data['title'] = $request->title[$i];
                $data['customer_id'] = $request->customer_id;
                $MonthlyInspection = ManageAttachment::create($data);
            }
            return json_encode([
                'success' => true,
                'message' => __('translation.Attachments added successfully'),
            ]);


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function DeleteAttachments(Request $request)
    {
        try {

            $main_part_hstory_delete = ManageAttachment::where('id', $request->id)->delete();
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
}

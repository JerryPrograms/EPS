<?php

namespace App\Service;

use App\Http\Requests\ASAndRepairCompanyRequest;
use App\Models\ASInformation;
use App\Models\RepairCompanyInformation;
use Illuminate\Support\Facades\DB;


class ASAndRepairCompanyInformation
{

    //Create AS and Repair Company information

    public static function CreateASAndRepairCompanyInformation(ASAndRepairCompanyRequest $request)
    {
        try {

            DB::beginTransaction();


            $as_data = array();
            $as_data['customer_id'] = $request->customer_id;
            $as_data['repair_company_name'] = $request->repair_company_name;
            $as_data['contract_date'] = $request->contract_date;
            $as_data['fee'] = $request->fee;
            $as_data['invoice_issue_date'] = $request->invoice_issue_date;
            $as_data['payment_date'] = $request->payment_date;
            $as_data['payment_method'] = $request->payment_method;


            $company_data = array();
            $company_data['customer_id'] = $request->customer_id;
            $company_data['company_name'] = $request->company_name;
            $company_data['ceo_name'] = $request->ceo_name;
            $company_data['address'] = $request->address;
            $company_data['industry_category'] = $request->industry_category;
            $company_data['contacts'] = $request->contacts;
            if ($request->has('fax')) {
                $company_data['fax'] = $request->fax;
            }
            if ($request->has('email')) {
                $company_data['email'] = $request->email;
            }

            if ($request->has('as_id')) {
                $as_information = ASInformation::where('id', $request->as_id)->update($as_data);
                $company_information = RepairCompanyInformation::where('id', $request->repair_id)->update($company_data);
            } else {
                $as_information = ASInformation::where('id', $request->as_id)->create($as_data);
                $company_information = RepairCompanyInformation::where('id', $request->repair_id)->create($company_data);
            }
            DB::commit();
            return json_encode([
                'success' => true,
                'message' => __('Information Uploaded Successfully'),
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

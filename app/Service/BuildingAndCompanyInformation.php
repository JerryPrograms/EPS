<?php

namespace App\Service;

use App\Http\Requests\BuildingAndCompanyRequest;
use App\Models\ASInformation;
use App\Models\BuildingCompanyInformation;
use App\Models\BuildingInformation;
use App\Models\CustomerInfo;
use App\Models\RepairCompanyInformation;
use Illuminate\Support\Facades\DB;


class BuildingAndCompanyInformation
{

    //Create Building and company information

    public static function CreateBuildingAndCompanyInformation(BuildingAndCompanyRequest $request)
    {


        try {


            DB::beginTransaction();

            $customer = CustomerInfo::where('id', $request->customer_id)->update([
                'building_name' => $request->b_building_name,
            ]);

            $building_data = array();
            $building_data['building_manager_name'] = $request->b_building_manager_name;
            $building_data['building_manager_contact'] = $request->b_building_manager_contact;
            $building_data['address'] = $request->b_address;
            $building_data['manager_contact'] = $request->b_manager_contact;
            $building_data['customer_id'] = $request->customer_id;
            if ($request->has('bi_tax')) {
                $building_data['fax'] = $request->b_bi_tax;
            }
            if ($request->has('bi_email')) {
                $building_data['email'] = $request->b_bi_email;
            }

            $company_data = array();
            $company_data['company_name'] = $request->b_company_name;
            $company_data['ceo_name'] = $request->b_ceo_name;
            $company_data['company_reg_number'] = $request->b_company_reg_number;
            $company_data['address'] = $request->b_ci_address;
            $company_data['industry_category'] = $request->b_industry_category;
            $company_data['contacts'] = $request->b_ci_contacts;
            $company_data['customer_id'] = $request->customer_id;
            if ($request->has('ci_fax')) {
                $company_data['fax'] = $request->b_ci_fax;
            }
            if ($request->has('ci_email')) {
                $company_data['email'] = $request->b_ci_email;
            }

            if ($request->has('building_id')) {
                $building_information = BuildingInformation::where('id', $request->building_id)->update($building_data);
                $company_information = BuildingCompanyInformation::where('id', $request->company_id)->update($company_data);
            } else {
                $building_information = BuildingInformation::create($building_data);
                $company_information = BuildingCompanyInformation::create($company_data);
            }

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
                'message' => __('translation.Information Uploaded Successfully'),
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

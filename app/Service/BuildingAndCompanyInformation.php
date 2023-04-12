<?php

namespace App\Service;

use App\Http\Requests\BuildingAndCompanyRequest;
use App\Models\BuildingCompanyInformation;
use App\Models\BuildingInformation;
use App\Models\CustomerInfo;
use Illuminate\Support\Facades\DB;


class BuildingAndCompanyInformation
{

    //Create Building and company information

    public static function CreateBuildingAndCompanyInformation(BuildingAndCompanyRequest $request)
    {
        try {


            DB::beginTransaction();

            $customer = CustomerInfo::where('id', $request->customer_id)->update([
                'building_name' => $request->building_name,
            ]);

            $building_data = array();
            $building_data['building_manager_name'] = $request->building_manager_name;
            $building_data['building_manager_contact'] = $request->building_manager_contact;
            $building_data['address'] = $request->address;
            $building_data['manager_contact'] = $request->manager_contact;
            $building_data['customer_id'] = $request->customer_id;
            if ($request->has('bi_tax')) {
                $building_data['fax'] = $request->bi_tax;
            }
            if ($request->has('bi_email')) {
                $building_data['email'] = $request->bi_email;
            }

            $company_data = array();
            $company_data['company_name'] = $request->company_name;
            $company_data['ceo_name'] = $request->ceo_name;
            $company_data['company_reg_number'] = $request->company_reg_number;
            $company_data['address'] = $request->ci_address;
            $company_data['industry_category'] = $request->industry_category;
            $company_data['contacts'] = $request->ci_contacts;
            $company_data['customer_id'] = $request->customer_id;
            if ($request->has('ci_fax')) {
                $company_data['fax'] = $request->ci_fax;
            }
            if ($request->has('ci_email')) {
                $company_data['email'] = $request->ci_email;
            }

            if ($request->has('building_id')) {
                $building_information = BuildingInformation::where('id', $request->building_id)->update($building_data);
                $company_information = BuildingCompanyInformation::where('id', $request->company_id)->update($company_data);
            } else {
                $building_information = BuildingInformation::create($building_data);
                $company_information = BuildingCompanyInformation::create($company_data);
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

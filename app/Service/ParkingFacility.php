<?php

namespace App\Service;

use App\Http\Requests\ParkingAndParkingCertificateRequest;
use App\Models\InspectionCertificate;
use App\Models\ParkingFacilityCertificate;
use Illuminate\Support\Facades\DB;


class ParkingFacility
{

    //Create Building and company information

    public static function CreateParkingFacilityAndCertificate(ParkingAndParkingCertificateRequest $request)
    {

        try {

            DB::beginTransaction();

            $parking_facility = array();
            $parking_facility['customer_id'] = $request->customer_id;
            $parking_facility['certification_number'] = $request->certification_number;
            $parking_facility['type'] = $request->type;
            $parking_facility['parking_space'] = $request->parking_space;
            $parking_facility['producer'] = $request->producer;
            $parking_facility['year_of_installation'] = $request->year_of_installation;
            $parking_facility['inspection_date'] = $request->inspection_date;
            $parking_facility['addition_information'] = $request->addition_information;


            if ($request->has('p_id')) {
                $as_information = ParkingFacilityCertificate::where('id', $request->p_id)->update($parking_facility);
                for ($i = 0; $i < 3; $i++) {
                    $parking_certificate = array();
                    $parking_certificate['customer_id'] = $request->customer_id;
                    $parking_certificate['inspection_type'] = $request->inspection_type[$i];
                    $parking_certificate['manager_name'] = $request->manager_name[$i];
                    $parking_certificate['installation_place'] = $request->installation_place[$i];
                    $parking_certificate['inspection_period_from'] = $request->inspection_period_from[$i];
                    $parking_certificate['inspection_period_to'] = $request->inspection_period_to[$i];
                    if (isset($request->inspection_certificate[$i])) {
                        $parking_certificate['inspection_certificate'] = saveFiles('', 'engineer_company/parking/certificates', $request->inspection_certificate[$i]);
                    }
                    $company_information = InspectionCertificate::where('id', $request->pc_id[$i])->update($parking_certificate);
                }
            } else {

                $as_information = ParkingFacilityCertificate::create($parking_facility);
                for ($i = 0; $i < 3; $i++) {
                    $parking_certificate = array();
                    $parking_certificate['customer_id'] = $request->customer_id;
                    $parking_certificate['inspection_type'] = $request->inspection_type[$i];
                    $parking_certificate['manager_name'] = $request->manager_name[$i];
                    $parking_certificate['installation_place'] = $request->installation_place[$i];
                    $parking_certificate['inspection_period_from'] = $request->inspection_period_from[$i];
                    $parking_certificate['inspection_period_to'] = $request->inspection_period_to[$i];
                    $parking_certificate['inspection_certificate'] = saveFiles('', 'engineer_company/parking/certificates', $request->inspection_certificate[$i]);
                    $company_information = InspectionCertificate::create($parking_certificate);
                }

            }
            DB::commit();
            return json_encode([
                'success' => true,
                'message' => 'Information Uploaded Successfully',
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

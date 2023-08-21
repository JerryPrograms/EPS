<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BuildingAddress;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildingAddressController extends Controller
{
    public function GetCreateAddress()
    {
        $data = BuildingAddress::latest()->get();
        $customers = CustomerInfo::whereNull('building_id')->latest()->get();
        return view('admin.building_and_address.listing', compact('data', 'customers'));
    }

    public function PostCreateAddress(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'building_name' => 'required',
            'address' => 'required',
            'building_number' => 'required|min:3|unique:building_addresses'
        ]);

        if ($validate->fails()) {
            return response()->json(['success' => false, 'message' => $validate->errors()->first()]);
        }
      try{

          DB::beginTransaction();
          $data = BuildingAddress::create([
              'building_name' => $request->building_name,
              'address' => $request->address,
              'building_number' => $request->building_number,
              'added_by' => activeGuard(),
              'added_by_id' => auth(activeGuard())->id()
          ]);

          $count = BuildingAddress::count();

          DB::commit();
          return json_encode([
              'success' => true,
              'message' => 'added successfully',
              'count' => $count,
              'id' => $data->id
          ]);
      }
      catch(\Exception $ex)
      {
          DB::rollback();
          return json_encode([
              'success' => false,
              'message' => __('translation.Error, Please try again later'),
          ]);
      }
    }

    public function DeleteAddress(Request $request)
    {
        $customer = CustomerInfo::where('building_id','like','%"'.$request->id.'"%')->first();

        if($customer){
            return json_encode([
                'success' => false,
                'message' => __('translation.Building is assingned to a customer'),
            ]);
        }

        BuildingAddress::where('id', $request->id)->delete();

        return json_encode([
            'success' => true,
            'message' => __('translation.Deleted Successfully'),
        ]);
    }

    public function EditAddress(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'building_name' => 'required',
            'address' => 'required',
            'building_number' => 'required|unique:building_addresses,building_number,' . $request->id
        ]);

        if ($validate->fails()) {
            return response()->json(['success' => false, 'message' => $validate->errors()->first()]);
        }

        BuildingAddress::where('id', $request->id)->update([
            'building_name' => $request->building_name,
            'address' => $request->address,
            'building_number' => $request->building_number
        ]);

        return json_encode([
            'success' => true,
            'message' => 'Edited Successfully',
        ]);
    }
}

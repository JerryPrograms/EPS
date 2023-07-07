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
              'message' => $ex->getMessage(),
          ]);
      }
    }

    public function DeleteAddress(Request $request)
    {

        BuildingAddress::where('id', $request->id)->delete();

        return json_encode([
            'success' => true,
            'message' => __('translation.Deleted Successfully'),
        ]);
    }

    public function EditAddress(Request $request)
    {
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

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BuildingAddress;
use Illuminate\Http\Request;

class BuildingAddressController extends Controller
{
    public function GetCreateAddress()
    {
        $data = BuildingAddress::latest()->get();
        return view('admin.building_and_address.listing', compact('data'));
    }

    public function PostCreateAddress(Request $request)
    {
        $data = BuildingAddress::create([
            'building_name' => $request->building_name,
            'address' => $request->address,
            'added_by' => activeGuard(),
            'added_by_id' => auth(activeGuard())->id()
        ]);
        $count = BuildingAddress::count();
        return json_encode([
            'success' => true,
            'message' => 'added successfully',
            'count' => $count,
            'id' => $data->id
        ]);
    }

    public function DeleteAddress(Request $request)
    {

        BuildingAddress::where('id', $request->id)->delete();

        return json_encode([
            'success' => true,
            'message' => 'Deleted Successfully',
        ]);
    }

    public function EditAddress(Request $request)
    {
        BuildingAddress::where('id', $request->id)->update([
            'building_name' => $request->building_name,
            'address' => $request->address,
        ]);

        return json_encode([
            'success' => true,
            'message' => 'Edited Successfully',
        ]);
    }
}

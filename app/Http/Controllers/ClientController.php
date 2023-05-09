<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\EditClientRequest;
use App\Models\BuildingAddress;
use App\Models\client;
use App\Models\CustomerInfo;
use App\Models\Engineer_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function get_client_listing()
    {

        $customers = CustomerInfo::latest()->get();
        $companies = Engineer_company::latest()->get();
        $combinedData = $customers->concat($companies);


        $perPage = 10;
        $currentPage = request()->get('page', 1);
        $pagedData = new \Illuminate\Pagination\LengthAwarePaginator(
            $combinedData->forPage($currentPage, $perPage),
            $combinedData->count(),
            $perPage,
            $currentPage
        );

        $pagedData->withPath(request()->url());


        return view('admin.client_listing', compact('pagedData'));
    }

    public function add_client()
    {
        $companies = Engineer_company::latest()->get();
        return view('admin.add_client', compact('companies'));
    }

    public function create_client(ClientRequest $request)
    {
        try {

            $data = $request->all();
            unset($data['_token']);
            $data['show_password'] = $data['password'];
            $data['password'] = Hash::make($data['password']);
            if ($request->division == 'building owner') {
                $data['user_uid'] = Str::uuid();
                $data['added_by'] = 'engineer_company';
                $data['added_by_id'] = auth(activeGuard())->id();
                CustomerInfo::create($data);
                return json_encode([
                    'success' => true,
                    'message' => 'Client created successfully',
                ]);
            } else {
                Engineer_company::create($data);
                return json_encode([
                    'success' => true,
                    'message' => 'Client created successfully',
                ]);
            }


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function update_client(EditClientRequest $request)
    {
        try {

            $data = $request->all();
            unset($data['_token']);
            $data['show_password'] = $data['password'];
            $data['password'] = Hash::make($data['password']);
            if ($request->division == 'building owner') {
                CustomerInfo::where('id', $request->id)->update($data);
                return json_encode([
                    'success' => true,
                    'message' => 'Client updated successfully',
                ]);
            } else {
                unset($data['building_id']);
                Engineer_company::where('id', $request->id)->update($data);
                return json_encode([
                    'success' => true,
                    'message' => 'Client updated successfully',
                ]);
            }


        } catch (\Exception $ex) {
            return json_encode(['success' => false,
                'message' => $ex->getMessage(),]);
        }
    }

    public
    function view_client($type, $id)
    {
        if ($type == 'engineer company') {
            $data = Engineer_company::where('id', $id)->first();
        } else {
            $data = CustomerInfo::where('id', $id)->first();
        }

        if ($data) {
            return view('admin.view_client', compact('data'));
        } else {
            abort(404);
        }
    }

    public
    function edit_client($type, $id)
    {
        if ($type == 'engineer company') {
            $data = Engineer_company::where('id', $id)->first();
        } else {
            $data = CustomerInfo::where('id', $id)->first();
        }

        $building_address = BuildingAddress::where('status', 0)->latest()->get();
        if ($data) {
            return view('admin.edit_client', compact('data', 'building_address'));
        } else {
            abort(404);
        }
    }

    public
    function delete_client(Request $request)
    {
        if ($request->type == 'engineer company') {
            $data = Engineer_company::where('id', $request->id)->delete();
        } else {
            $data = CustomerInfo::where('id', $request->id)->delete();
        }

        return json_encode([
            'success' => true,
            'message' => 'Client Deleted Successfully',
        ]);
    }
}

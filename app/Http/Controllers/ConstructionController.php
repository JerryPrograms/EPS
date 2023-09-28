<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConstructionCompletionRequest;
use App\Models\CompletionRequestModel;
use App\Models\CustomerInfo;
use App\Models\Engineer;
use App\Models\Engineer_company;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    public function construction_completion($id = null)
    {
        $customer = null;
        if (activeGuard() == 'web') {
            $completion_reports = CompletionRequestModel::where('customer_id', auth(activeGuard())->id())->latest()->get();
        } else if (activeGuard() == 'admin') {
            $completion_reports = CompletionRequestModel::latest()->get();
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $completion_reports = CompletionRequestModel::where(function ($query) use ($companies) {
                $query->where('added_by', $companies->id)
                    ->where('added_by_user', 'engineer_company');
            })->orwhere(function ($query) {
                $query->where('added_by', auth(activeGuard())->id())
                    ->where('added_by_user', activeGuard());
            })->latest()->get();
            if(!empty($id)){
                $completion_reports = $completion_reports->where('customer_id', $id);
                $customer = CustomerInfo::where('id', $id)->first();
            }
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->pluck('id');
            $completion_reports = CompletionRequestModel::where(function ($query) use ($engineers) {
                $query->whereIn('added_by', $engineers)
                    ->where('added_by_user', 'engineer');
            })->orwhere(function ($query) {
                $query->where('added_by', auth(activeGuard())->id())
                    ->where('added_by_user', activeGuard());
            })->latest()->get();
            if(!empty($id)){
                $completion_reports = $completion_reports->where('customer_id', $id);
                $customer = CustomerInfo::where('id', $id)->first();
            }
        }
        return view('engineer_company.construction_completion', compact('completion_reports','customer'));
    }

    public function construction_completion_company($id)
    {

        $engineers = Engineer::where('affiliated_company', $id)->pluck('id');
        $completion_reports = CompletionRequestModel::where(function ($query) use ($engineers) {
            $query->whereIn('added_by', $engineers)
                ->where('added_by_user', 'engineer');
        })->orwhere(function ($query) use ($id) {
            $query->where('added_by', $id)
                ->where('added_by_user', 'engineer_company');
        })->latest()->get();
        return view('engineer_company.construction_completion', compact('completion_reports'));
    }

    public function create_construction_completion($id = null)
    {
        $customer = null;
        if (empty($id)) {   

            if (activeGuard() == 'engineer') {
                $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
                $customers = CustomerInfo::orWhere(function ($query) use ($companies) {
                    $query->where('added_by', 'engineer_company')
                        ->where('added_by_id', $companies->id);
                })->orWhere(function ($query) {
                    $query->where('added_by', activeGuard())
                        ->where('added_by_id', auth(activeGuard())->id());
                })->latest()->get();
            } else if (activeGuard() == 'engineer_company') {
                $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->pluck('id');
                // $customers = CustomerInfo::orWhere(function ($query) use ($engineers) {
                //     $query->where('added_by', 'engineer')
                //         ->whereIn('added_by_id', $engineers);
                // })->orWhere(function ($query) {
                //     $query->where('added_by', activeGuard())
                //         ->where('added_by_id', auth(activeGuard())->id());
                // })->latest()->get();
                $customers = CustomerInfo::where('engineer_company_id', auth(activeGuard())->id())->get();
            } else {
                $customers = CustomerInfo::latest()->get();
            }

        } else {
            $customers = [];
            $customer = CustomerInfo::with('BuildingInformation')->where('user_uid', $id)->first();
        }

        return view('engineer_company.create_completion_report', compact('customers','customer'));
    }

    public function view_construction_completion($id)
    {
        $completion_report = CompletionRequestModel::where('id', $id)->first();
        if ($completion_report) {

            return view('engineer_company.view_completion_report', compact('completion_report'));

        } else {
            abort(404);
        }
    }

    public function add_construction_completion(ConstructionCompletionRequest $request)
    {

        try {

            $construction_completion_file = saveFiles(time() . mt_rand(300, 9000), 'engineer_company/completion_report', $request->construction_completion_file);

            CompletionRequestModel::create([
                'customer_id' => $request->customer_id,
                'added_by' => auth(activeGuard())->id(),
                'contract_date' => $request->contract_date,
                'added_by_user' => activeGuard(),
                'construction_description' => $request->construction_description,
                'construction_completion_file' => $construction_completion_file
            ]);
            return json_encode([
                'success' => true,
                'message' => __('translation.Completion Report added successfully'),
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function post_construction_completion(Request $request)
    {

        $completion_report = CompletionRequestModel::where('id', $request->id)->delete();
        return json_encode([
            'success' => true,
            'message' => __('translation.Completion report deleted successfully'),
        ]);
    }

    public function edit_construction_completion($id)
    {
        $completion_report = CompletionRequestModel::where('id', $id)->first();
        return view('engineer_company.edit_completion_report', ['completion_report' => $completion_report]);
    }

    public function update_construction_completion(Request $request)
    {

        try {
            if ($request->has('construction_completion_file')) {
                
                $construction_completion_file = saveFiles(time() . mt_rand(300, 9000), 'engineer_company/completion_report', $request->construction_completion_file);

                CompletionRequestModel::where('id', $request->id)->update([
                    'contract_date' => $request->contract_date,
                    'construction_description' => $request->construction_description,
                    'construction_completion_file' => $construction_completion_file
                ]);
            } else {
                CompletionRequestModel::where('id', $request->id)->update([
                    'contract_date' => $request->contract_date,
                    'construction_description' => $request->construction_description
                ]);
            }

            return json_encode([
                'success' => true,
                'message' => __('translation.Completion Report updated successfully'),
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function print_construction_completion(Request $request)
    {
        $completion_report = CompletionRequestModel::where('id', $request->id)->first();

        $html = view('engineer_company.construction_report_template', compact('completion_report'))->render();

        return json_encode([
            'success' => true,
            'html' => $html,
        ]);
    }
}

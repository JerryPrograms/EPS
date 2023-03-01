<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConstructionCompletionRequest;
use App\Models\CompletionRequestModel;
use App\Models\Engineer_company;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    public function construction_completion()
    {
        if (activeGuard() == 'web') {
            $completion_reports = CompletionRequestModel::where('customer_id', auth(activeGuard())->id())->latest()->get();
        } else if (activeGuard() == 'admin') {
            $completion_reports = CompletionRequestModel::latest()->get();
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $completion_reports = CompletionRequestModel::where(function ($query) use ($companies) {
                $query->where('added_by', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', auth(activeGuard())->id());
            })->latest()->get();
        } else {
            $completion_reports = CompletionRequestModel::where('added_by', auth(activeGuard())->id())->latest()->get();
        }
        return view('engineer_company.construction_completion', compact('completion_reports'));
    }

    public function create_construction_completion($id)
    {
        return view('engineer_company.create_completion_report');
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


        $photos = array();
        foreach ($request->photo as $photo) {
            $photos[] = saveFiles('', 'engineer_company/completion_report', $photo);
        }

        try {

            CompletionRequestModel::create([
                'customer_id' => $request->customer_id,
                'added_by' => auth(activeGuard())->id(),
                'project_number' => $request->project_number,
                'site_name' => $request->site_name,
                'joint_name' => $request->joint_name,
                'down_payment' => $request->down_payment,
                'contract_amount' => $request->contract_amount,
                'completion_fund' => $request->completion_fund,
                'other_settlement_fund' => $request->other_settlement_fund,
                'microbial_fund' => $request->microbial_fund,
                'contract_date' => $request->contract_date,
                'production_date' => $request->production_date,
                'completion_date' => $request->completion_date,
                'confirmation_date' => $request->confirmation_date,
                'title' => json_encode($request->title),
                'site' => json_encode($request->site),
                'date' => json_encode($request->date),
                'photo' => json_encode($photos),
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
        return view('engineer_company.edit_completion_report', compact('completion_report'));
    }

    public function update_construction_completion(Request $request)
    {


        try {
            if ($request->has('photo')) {

                $data = CompletionRequestModel::where('id', $request->id)->first();
                $previous_photos = json_decode($data->photo);
                $photos = array();

                foreach ($request->photo as $key => $photo) {
                    if ($key > count($previous_photos)) {
                        $previous_photos[] = saveFiles('', 'engineer_company/completion_report', $photo);
                    } else {
                        $previous_photos[$key] = saveFiles('', 'engineer_company/completion_report', $photo);
                    }
                }


                CompletionRequestModel::where('id', $request->id)->update([
                    'customer_id' => $request->customer_id,
                    'added_by' => auth(activeGuard())->id(),
                    'project_number' => $request->project_number,
                    'site_name' => $request->site_name,
                    'joint_name' => $request->joint_name,
                    'down_payment' => $request->down_payment,
                    'contract_amount' => $request->contract_amount,
                    'completion_fund' => $request->completion_fund,
                    'other_settlement_fund' => $request->other_settlement_fund,
                    'microbial_fund' => $request->microbial_fund,
                    'contract_date' => $request->contract_date,
                    'production_date' => $request->production_date,
                    'completion_date' => $request->completion_date,
                    'confirmation_date' => $request->confirmation_date,
                    'title' => json_encode($request->title),
                    'site' => json_encode($request->site),
                    'date' => json_encode($request->date),
                    'photo' => json_encode($previous_photos),
                ]);
            } else {
                CompletionRequestModel::where('id', $request->id)->update([
                    'customer_id' => $request->customer_id,
                    'added_by' => auth(activeGuard())->id(),
                    'project_number' => $request->project_number,
                    'site_name' => $request->site_name,
                    'joint_name' => $request->joint_name,
                    'down_payment' => $request->down_payment,
                    'contract_amount' => $request->contract_amount,
                    'completion_fund' => $request->completion_fund,
                    'other_settlement_fund' => $request->other_settlement_fund,
                    'microbial_fund' => $request->microbial_fund,
                    'contract_date' => $request->contract_date,
                    'production_date' => $request->production_date,
                    'completion_date' => $request->completion_date,
                    'confirmation_date' => $request->confirmation_date,
                    'title' => json_encode($request->title),
                    'site' => json_encode($request->site),
                    'date' => json_encode($request->date),
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

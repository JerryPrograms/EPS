<?php

namespace App\Service;


use App\Http\Requests\QuoteRequest;
use App\Models\Quotation;
use App\Models\QuotationContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteService
{
    public static function CreateQuote(QuoteRequest $request)
    {


        try {

            DB::beginTransaction();
            $quote = array();
            $quote['contract_date'] = $request->contract_date;
            $quote['customer_id'] = $request->customer_id;
            $quote['quote_description'] = $request->quote_description;

            $quote['quote_file'] = saveFiles(time() . mt_rand(300, 9000), 'quotations', $request->quote_file);

            $add_quote = Quotation::create($quote);

            DB::commit();
            return json_encode([
                'success' => true,
                'message' => __('translation.Quotation added successfully'),
            ]);
        } catch (\Exception $ex) {

            DB::rollBack();

            return json_encode([
                'success' => false,
                'message' => "Error: please try again",
            ]);
        }
    }

    public static function DeleteQuote(Request $request)
    {

        try {
            $quote = Quotation::where('id', $request->id)->delete();
            return json_encode([
                'success' => true,
                'message' => __('translation.Quote deleted successfully'),
            ]);
        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function GetQuote(Request $request)
    {
        $getQuote = Quotation::where('id', $request->id)->first();
        return view('engineer_company.quote_listing_template', compact('getQuote'));
    }
    public static function GetQuoteDetails($id)
    {
        $getQuote = Quotation::where('id', $id)->first();
        return view('engineer_company.quotation_management_details', compact('getQuote'));
    }

}

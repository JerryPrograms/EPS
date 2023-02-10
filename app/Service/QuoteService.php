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
            $quote['total_amount'] = $request->total_amount;

            $add_quote = Quotation::create($quote);


            for ($i = 0; $i < count($request->quote_item); $i++) {
                $quote_content = QuotationContent::create([
                    'content' => $request->quote_item[$i],
                    'quantity' => $request->quantity[$i],
                    'price' => $request->price[$i],
                    'quotation_id' => $add_quote->id,
                ]);
            }

            DB::commit();
            return json_encode([
                'success' => true,
                'message' => 'Quotation added successfully',
            ]);
        } catch (\Exception $ex) {

            DB::rollBack();

            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function DeleteQuote(Request $request)
    {

        try {
            $quote = Quotation::where('id', $request->id)->delete();
            return json_encode([
                'success' => true,
                'message' => 'Quote deleted successfully',
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
//        try {
//            $getQuote = Quotation::where('id', $request->id)->first();
//        }
    }

}

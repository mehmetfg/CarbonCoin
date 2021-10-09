<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use Illuminate\Http\Request;

class ExchangeReportController extends Controller
{
    //

    public function index(Request $request)
    {
        $tradeData= Trade::query();
        $tradeData->selectRaw("taker_side, sum(amount) as totalAmount,sum(taker_fee) as totalFee");
        if(isset($request->type) && !is_null($request->type))
        {
            $tradeData->where("type", $request->type);
        }
        if(isset($request->startDate) && !is_null($request->startDate))
        {
            $tradeData->where("inserted_at",  ">=", $request->startDate);
        }
        if(isset($request->finishDate) && !is_null($request->finishDate))
        {
            $tradeData->where("inserted_at",  "<=", $request->finishDate);
        }

        $tradeData->groupBy("taker_side");



        return view("report.exchange-report")
            ->with([
                "tradeData" => $tradeData->get()
            ]);
    }
}

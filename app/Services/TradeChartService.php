<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 25.09.2021
 * Time: 12:05
 */

namespace App\Services;


use App\Models\TraderAsset;
use Carbon\Carbon;

class TradeChartService
{
    public static function assetUsdt()
    {
        $assetUsdt= TraderAsset::where("asset_symbol", 'USDT')->groupBy("created_at")
            ->selectRaw('created_at , sum(balance) as balance')
            ->whereBetween('created_at', [Carbon::now()->subDay(), Carbon::now()])
            ->where("type",1)->get();
        return $assetUsdt;
    }

    public static function assetCyce()
    {
        $assetCyce= TraderAsset::where("asset_symbol", 'CYCE')->groupBy("created_at")->selectRaw('created_at , sum(balance) as balance')
            ->whereBetween('created_at', [Carbon::now()->subDay(), Carbon::now()])
            ->where("type",1)->get();
        return $assetCyce;
    }
}

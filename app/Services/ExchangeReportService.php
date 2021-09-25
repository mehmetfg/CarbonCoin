<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 20.09.2021
 * Time: 12:45
 */

namespace App\Services;


use App\Models\Exchange;
use App\Models\Trade;
use App\Models\Trader;
use App\Models\TraderAsset;
use App\Scopes\SortByIdDesc;
use App\Scopes\TenantScope;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Nanotime\Nanotime;
use ReallySimpleJWT\Token;
use function Livewire\str;

class ExchangeReportService
{

    public function __construct()
    {
       $this->clientExchange();
    }

    public function clientExchange()
    {


        $exchanges=  Exchange::withoutGlobalScopes([SortByIdDesc::class,TenantScope::class])->get();


        foreach($exchanges as $exchange) {

            $accountAsset = $this->getAccountAssets($exchange->traders, $exchange->asset_url);

            if (TraderAsset::where("created_at", ">=", Carbon::now()->subHours(4))->doesntExist()){
            foreach ($accountAsset as $item) {
                    TraderAsset::create(
                        [
                            "type" => 1,
                            "exchange_id" => $exchange->id,
                            "trader_id" => $item["id"],
                            "asset_symbol" => $item["asset_symbol"],
                            "balance" => $item["balance"],
                            "locked_balance" => $item["locked_balance"]
                        ]);
                }
            }
            if (TraderAsset::where("created_at", ">=", Carbon::now()->subDay())->doesntExist()){
                foreach ($accountAsset as $item) {
                    TraderAsset::create(
                        [
                            "type" => 2,
                            "exchange_id" => $exchange->id,
                            "trader_id" => $item["id"],
                            "asset_symbol" => $item["asset_symbol"],
                            "balance" => $item["balance"],
                            "locked_balance" => $item["locked_balance"]
                        ]);
                }
            }

            $tradesPrivate = $this->getAccountTrades($exchange->traders,$exchange->private_trade_url);

            $ids = $tradesPrivate->pluck("id");

            $tradesPublic = $this->getPublicTrades($exchange->public_trade_url);
            $tradesPublicResut = $tradesPublic->whereNotInStrict('id', $ids)->values();


            foreach ($tradesPrivate as $trade) {
                $trade['exchange_id'] = $exchange->id;
                $trade['asset_pair_name'] = $exchange->api_key;
                $trade['dealer_id'] = 1;
                $trade['type'] = 1;
                // $trade['price'];
                Trade::firstOrCreate(
                    ["id" => $trade["id"]],
                    $trade
                );

            }
            foreach ($tradesPublicResut as $trade) {
                $trade['exchange_id'] = $exchange->id;
                $trade['dealer_id'] = 1;
                $trade['asset_pair_name'] = $exchange->api_key;
                $trade['type'] = 2;
                // $trade['price'];
                Trade::firstOrCreate(
                    ["id" => $trade["id"]],
                    $trade
                );

            }


            return $tradesPrivate;
        }
    }

    public function getAccountTrades($traders, $url){
        $result=collect([]);
        foreach ($traders as $item){
            $token=$this->getToken($item);
            $result->push(Http::withToken($token)->get($url)["data"]);
        }
        return $result->collapse();
    }
    function getPublicTrades($url){
        return collect(Http::get($url)["data"]);
    }

    public function getAccountAssets($traders, $url){
        $result=collect([]);
        foreach ($traders as $item){
            foreach (['CYCE', 'USDT'] as  $asset) {
                $token = $this->getToken($item);
                $result->push(collect($item)->merge(Http::withToken($token)->get($url . $asset)["data"]));
            }
        }


        return  $result;
    }

    function getToken($item){

        $nanotime=Nanotime::now()->nanotime();
        $payload=[
            "sub"=>$item->public_key,
            "nonce"=>  str($nanotime),
            "recv_window"=>  "30",
            "type"=>  "OpenAPIV2"
        ];
        $secret=$item->secret_key;

        $token = Token::customPayload($payload, $secret);
        return $token;
}
}

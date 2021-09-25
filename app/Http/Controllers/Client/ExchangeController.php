<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Exchange;
use App\Models\Trade;
use App\Services\ExchangeReportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Nanotime\Nanotime;
use ReallySimpleJWT\Token;
use function Deployer\test;
use function Livewire\str;

class ExchangeController extends Controller
{
    //
    public function clientExchange()
    {
       $exchange=  Exchange::first();

        $tradesPrivate= $exhangeServide->getAccountTrades($exchange->traders, $exchange->private_trade_url);

        $ids= $tradesPrivate->pluck("id");

        $tradesPublic= $exhangeServide->getPublicTrades($exchange->public_trade_url);
        $tradesPublicResut= $tradesPublic->whereNotInStrict('id',$ids)->values();
    return $tradesPublicResut;

        foreach ($tradesPrivate as $trade){
           $trade['exchange_id'] = $exchange->id;
            $trade['dealer_id'] = 1;
           $trade['asset_pair_name'] = $exchange->api_key;
           $trade['type'] = 1;
           // $trade['price'];
            Trade::firstOrCreate(
                ["id" => $trade["id"]],
                $trade
            );

    }
        foreach ($tradesPublicResut as $trade){
            $trade['exchange_id'] = $exchange->id;
            $trade['asset_pair_name'] = $exchange->api_key;
            $trade['dealer_id'] = 1;
            $trade['type'] = 2;
            // $trade['price'];
            Trade::firstOrCreate(
                ["id" => $trade["id"]],
                $trade
            );

        }


        return $tradesPrivate;
    }
    public function getAccountTrades($traders, $url){
        $result=collect([]);
        foreach ($traders as $item){
            $token = $this->getToken($item);
            $result->push(Http::withToken($token)->get($url)["data"]);
        }

        return $result->collapse();
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

    function getPublicTrades($url){
        return collect(Http::get($url)["data"]);
    }
}

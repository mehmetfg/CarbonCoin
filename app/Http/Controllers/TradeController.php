<?php

namespace App\Http\Controllers;

use App\DataTables\TradeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTradeRequest;
use App\Http\Requests\UpdateTradeRequest;
use App\Models\Exchange;
use App\Models\Trade;
use App\Models\TraderAsset;
use App\Services\ExchangeReportService;
use App\Services\TradeChartService;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TradeController extends AppBaseController
{
    /**
     * Display a listing of the Trade.
     *
     * @param TradeDataTable $tradeDataTable
     * @return Response
     */
    public function index(TradeDataTable $tradeDataTable)
    {
        $totalOutBid=Trade::select("side", "amount", "inserted_at", "taker_side")->where("side", "<>","SELF_TRADING")->get();

        $exchange= Exchange::first();


        $data=TraderAsset::latest()->take(4)->get();


        return $tradeDataTable->render('trades.index',    [
            'assetUsdt'=> TradeChartService::assetUsdt(),
            'assetCyce' =>TradeChartService::assetCyce(),
            'data' => $data,
            'totalOutBid'=> $totalOutBid
        ]);
    }

    /**
     * Show the form for creating a new Trade.
     *
     * @return Response
     */
    public function create()
    {
        return view('trades.create');
    }

    /**
     * Store a newly created Trade in storage.
     *
     * @param CreateTradeRequest $request
     *
     * @return Response
     */
    public function store(CreateTradeRequest $request)
    {
        $input = $request->all();

        /** @var Trade $trade */
        $trade = Trade::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/trades.singular')]));

        return redirect(route('trades.index'));
    }

    /**
     * Display the specified Trade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Trade $trade */
        $trade = Trade::find($id);

        if (empty($trade)) {
            Flash::error(__('models/trades.singular').' '.__('messages.not_found'));

            return redirect(route('trades.index'));
        }

        return view('trades.show')->with('trade', $trade);
    }

    /**
     * Show the form for editing the specified Trade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Trade $trade */
        $trade = Trade::find($id);

        if (empty($trade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trades.singular')]));

            return redirect(route('trades.index'));
        }

        return view('trades.edit')->with('trade', $trade);
    }

    /**
     * Update the specified Trade in storage.
     *
     * @param  int              $id
     * @param UpdateTradeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTradeRequest $request)
    {
        /** @var Trade $trade */
        $trade = Trade::find($id);

        if (empty($trade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trades.singular')]));

            return redirect(route('trades.index'));
        }

        $trade->fill($request->all());
        $trade->save();

        Flash::success(__('messages.updated', ['model' => __('models/trades.singular')]));

        return redirect(route('trades.index'));
    }

    /**
     * Remove the specified Trade from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Trade $trade */
        $trade = Trade::find($id);

        if (empty($trade)) {
            Flash::error(__('messages.not_found', ['model' => __('models/trades.singular')]));

            return redirect(route('trades.index'));
        }

        $trade->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/trades.singular')]));

        return redirect(route('trades.index'));
    }
}

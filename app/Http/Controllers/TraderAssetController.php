<?php

namespace App\Http\Controllers;

use App\DataTables\TraderAssetDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTraderAssetRequest;
use App\Http\Requests\UpdateTraderAssetRequest;
use App\Models\TraderAsset;
use App\Services\TradeChartService;
use Carbon\Carbon;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TraderAssetController extends AppBaseController
{
    /**
     * Display a listing of the TraderAsset.
     *
     * @param TraderAssetDataTable $traderAssetDataTable
     * @return Response
     */
    public function index(TraderAssetDataTable $traderAssetDataTable)
    {

        $data=TraderAsset::latest()->take(4)->get();
        return $traderAssetDataTable->render('trader_assets.index',
            [
                'assetUsdt'=> TradeChartService::assetUsdt(),
                'assetCyce' =>TradeChartService::assetCyce(),
                'data' => $data
            ]);
    }

    /**
     * Show the form for creating a new TraderAsset.
     *
     * @return Response
     */
    public function create()
    {
        return view('trader_assets.create');
    }

    /**
     * Store a newly created TraderAsset in storage.
     *
     * @param CreateTraderAssetRequest $request
     *
     * @return Response
     */
    public function store(CreateTraderAssetRequest $request)
    {
        $input = $request->all();

        /** @var TraderAsset $traderAsset */
        $traderAsset = TraderAsset::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/traderAssets.singular')]));

        return redirect(route('traderAssets.index'));
    }

    /**
     * Display the specified TraderAsset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TraderAsset $traderAsset */
        $traderAsset = TraderAsset::find($id);

        if (empty($traderAsset)) {
            Flash::error(__('models/traderAssets.singular').' '.__('messages.not_found'));

            return redirect(route('traderAssets.index'));
        }

        return view('trader_assets.show')->with('traderAsset', $traderAsset);
    }

    /**
     * Show the form for editing the specified TraderAsset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var TraderAsset $traderAsset */
        $traderAsset = TraderAsset::find($id);

        if (empty($traderAsset)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traderAssets.singular')]));

            return redirect(route('traderAssets.index'));
        }

        return view('trader_assets.edit')->with('traderAsset', $traderAsset);
    }

    /**
     * Update the specified TraderAsset in storage.
     *
     * @param  int              $id
     * @param UpdateTraderAssetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTraderAssetRequest $request)
    {
        /** @var TraderAsset $traderAsset */
        $traderAsset = TraderAsset::find($id);

        if (empty($traderAsset)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traderAssets.singular')]));

            return redirect(route('traderAssets.index'));
        }

        $traderAsset->fill($request->all());
        $traderAsset->save();

        Flash::success(__('messages.updated', ['model' => __('models/traderAssets.singular')]));

        return redirect(route('traderAssets.index'));
    }

    /**
     * Remove the specified TraderAsset from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TraderAsset $traderAsset */
        $traderAsset = TraderAsset::find($id);

        if (empty($traderAsset)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traderAssets.singular')]));

            return redirect(route('traderAssets.index'));
        }

        $traderAsset->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/traderAssets.singular')]));

        return redirect(route('traderAssets.index'));
    }
}

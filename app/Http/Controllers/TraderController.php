<?php

namespace App\Http\Controllers;

use App\DataTables\TraderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTraderRequest;
use App\Http\Requests\UpdateTraderRequest;
use App\Models\Trader;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TraderController extends AppBaseController
{
    /**
     * Display a listing of the Trader.
     *
     * @param TraderDataTable $traderDataTable
     * @return Response
     */
    public function index(TraderDataTable $traderDataTable)
    {
        return $traderDataTable->render('traders.index');
    }

    /**
     * Show the form for creating a new Trader.
     *
     * @return Response
     */
    public function create()
    {
        return view('traders.create');
    }

    /**
     * Store a newly created Trader in storage.
     *
     * @param CreateTraderRequest $request
     *
     * @return Response
     */
    public function store(CreateTraderRequest $request)
    {
        $input = $request->all();

        /** @var Trader $trader */
        $trader = Trader::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/traders.singular')]));

        return redirect(route('traders.index'));
    }

    /**
     * Display the specified Trader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Trader $trader */
        $trader = Trader::find($id);

        if (empty($trader)) {
            Flash::error(__('models/traders.singular').' '.__('messages.not_found'));

            return redirect(route('traders.index'));
        }

        return view('traders.show')->with('trader', $trader);
    }

    /**
     * Show the form for editing the specified Trader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Trader $trader */
        $trader = Trader::find($id);

        if (empty($trader)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traders.singular')]));

            return redirect(route('traders.index'));
        }

        return view('traders.edit')->with('trader', $trader);
    }

    /**
     * Update the specified Trader in storage.
     *
     * @param  int              $id
     * @param UpdateTraderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTraderRequest $request)
    {
        /** @var Trader $trader */
        $trader = Trader::find($id);

        if (empty($trader)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traders.singular')]));

            return redirect(route('traders.index'));
        }

        $trader->fill($request->all());
        $trader->save();

        Flash::success(__('messages.updated', ['model' => __('models/traders.singular')]));

        return redirect(route('traders.index'));
    }

    /**
     * Remove the specified Trader from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Trader $trader */
        $trader = Trader::find($id);

        if (empty($trader)) {
            Flash::error(__('messages.not_found', ['model' => __('models/traders.singular')]));

            return redirect(route('traders.index'));
        }

        $trader->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/traders.singular')]));

        return redirect(route('traders.index'));
    }
}

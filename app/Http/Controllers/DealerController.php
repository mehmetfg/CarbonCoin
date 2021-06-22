<?php

namespace App\Http\Controllers;

use App\DataTables\DealerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDealerRequest;
use App\Http\Requests\UpdateDealerRequest;
use App\Models\Dealer;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DealerController extends AppBaseController
{
    /**
     * Display a listing of the Dealer.
     *
     * @param DealerDataTable $dealerDataTable
     * @return Response
     */
    public function index(DealerDataTable $dealerDataTable)
    {
        return $dealerDataTable->render('dealers.index');
    }

    /**
     * Show the form for creating a new Dealer.
     *
     * @return Response
     */
    public function create()
    {
        return view('dealers.create');
    }

    /**
     * Store a newly created Dealer in storage.
     *
     * @param CreateDealerRequest $request
     *
     * @return Response
     */
    public function store(CreateDealerRequest $request)
    {
        $input = $request->all();

        /** @var Dealer $dealer */
        $dealer = Dealer::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/dealers.singular')]));

        return redirect(route('dealers.index'));
    }

    /**
     * Display the specified Dealer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Dealer $dealer */
        $dealer = Dealer::find($id);

        if (empty($dealer)) {
            Flash::error(__('models/dealers.singular').' '.__('messages.not_found'));

            return redirect(route('dealers.index'));
        }

        return view('dealers.show')->with('dealer', $dealer);
    }

    /**
     * Show the form for editing the specified Dealer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Dealer $dealer */
        $dealer = Dealer::find($id);

        if (empty($dealer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dealers.singular')]));

            return redirect(route('dealers.index'));
        }

        return view('dealers.edit')->with('dealer', $dealer);
    }

    /**
     * Update the specified Dealer in storage.
     *
     * @param  int              $id
     * @param UpdateDealerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDealerRequest $request)
    {
        /** @var Dealer $dealer */
        $dealer = Dealer::find($id);

        if (empty($dealer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dealers.singular')]));

            return redirect(route('dealers.index'));
        }

        $dealer->fill($request->all());
        $dealer->save();

        Flash::success(__('messages.updated', ['model' => __('models/dealers.singular')]));

        return redirect(route('dealers.index'));
    }

    /**
     * Remove the specified Dealer from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Dealer $dealer */
        $dealer = Dealer::find($id);

        if (empty($dealer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dealers.singular')]));

            return redirect(route('dealers.index'));
        }

        $dealer->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/dealers.singular')]));

        return redirect(route('dealers.index'));
    }
}

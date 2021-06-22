<?php

namespace App\Http\Controllers;

use App\DataTables\KnowYourCustomerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKnowYourCustomerRequest;
use App\Http\Requests\UpdateKnowYourCustomerRequest;
use App\Models\KnowYourCustomer;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class KnowYourCustomerController extends AppBaseController
{
    /**
     * Display a listing of the KnowYourCustomer.
     *
     * @param KnowYourCustomerDataTable $knowYourCustomerDataTable
     * @return Response
     */
    public function index(KnowYourCustomerDataTable $knowYourCustomerDataTable)
    {
        return $knowYourCustomerDataTable->render('know_your_customers.index');
    }

    /**
     * Show the form for creating a new KnowYourCustomer.
     *
     * @return Response
     */
    public function create()
    {
        return view('know_your_customers.create');
    }

    /**
     * Store a newly created KnowYourCustomer in storage.
     *
     * @param CreateKnowYourCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateKnowYourCustomerRequest $request)
    {
        $input = $request->all();

        /** @var KnowYourCustomer $knowYourCustomer */
        $knowYourCustomer = KnowYourCustomer::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/knowYourCustomers.singular')]));

        return redirect(route('knowYourCustomers.index'));
    }

    /**
     * Display the specified KnowYourCustomer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var KnowYourCustomer $knowYourCustomer */
        $knowYourCustomer = KnowYourCustomer::find($id);

        if (empty($knowYourCustomer)) {
            Flash::error(__('models/knowYourCustomers.singular').' '.__('messages.not_found'));

            return redirect(route('knowYourCustomers.index'));
        }

        return view('know_your_customers.show')->with('knowYourCustomer', $knowYourCustomer);
    }

    /**
     * Show the form for editing the specified KnowYourCustomer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var KnowYourCustomer $knowYourCustomer */
        $knowYourCustomer = KnowYourCustomer::find($id);

        if (empty($knowYourCustomer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/knowYourCustomers.singular')]));

            return redirect(route('knowYourCustomers.index'));
        }

        return view('know_your_customers.edit')->with('knowYourCustomer', $knowYourCustomer);
    }

    /**
     * Update the specified KnowYourCustomer in storage.
     *
     * @param  int              $id
     * @param UpdateKnowYourCustomerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKnowYourCustomerRequest $request)
    {
        /** @var KnowYourCustomer $knowYourCustomer */
        $knowYourCustomer = KnowYourCustomer::find($id);

        if (empty($knowYourCustomer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/knowYourCustomers.singular')]));

            return redirect(route('knowYourCustomers.index'));
        }

        $knowYourCustomer->fill($request->all());
        $knowYourCustomer->save();

        Flash::success(__('messages.updated', ['model' => __('models/knowYourCustomers.singular')]));

        return redirect(route('knowYourCustomers.index'));
    }

    /**
     * Remove the specified KnowYourCustomer from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var KnowYourCustomer $knowYourCustomer */
        $knowYourCustomer = KnowYourCustomer::find($id);

        if (empty($knowYourCustomer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/knowYourCustomers.singular')]));

            return redirect(route('knowYourCustomers.index'));
        }

        $knowYourCustomer->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/knowYourCustomers.singular')]));

        return redirect(route('knowYourCustomers.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\CustomerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vallet;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CustomerController extends AppBaseController
{
    /**
     * Display a listing of the Customer.
     *
     * @param CustomerDataTable $customerDataTable
     * @return Response
     */
    public function index(CustomerDataTable $customerDataTable)
    {
        return $customerDataTable->render('customers.index');
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('customers.create');
    }


    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $input = $request->all();

        /** @var Customer $customer */
        $customer = Customer::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/customers.singular')]));

        return redirect(route('customers.index'));
    }

    /**
     * Display the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error(__('models/customers.singular').' '.__('messages.not_found'));

            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/customers.singular')]));

            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerRequest $request
     *
     * @return Response
     */

    public function updatePublicKey()
    {

        $customer=User::find(auth()->id());
        $customer->tax_number=request("publicKey");
        $customer->save();
    }
    public function update($id, UpdateCustomerRequest $request)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/customers.singular')]));

            return redirect(route('customers.index'));
        }

        $customer->fill($request->all());
        $customer->save();

        Flash::success(__('messages.updated', ['model' => __('models/customers.singular')]));

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/customers.singular')]));

            return redirect(route('customers.index'));
        }

        $customer->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/customers.singular')]));

        return redirect(route('customers.index'));
    }
}

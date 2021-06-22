<?php

namespace App\Http\Controllers;

use App\DataTables\TransactionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TransactionController extends AppBaseController
{
    /**
     * Display a listing of the Transaction.
     *
     * @param TransactionDataTable $transactionDataTable
     * @return Response
     */
    public function index(TransactionDataTable $transactionDataTable)
    {
        return $transactionDataTable->render('transactions.index');
    }

    /**
     * Show the form for creating a new Transaction.
     *
     * @return Response
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created Transaction in storage.
     *
     * @param CreateTransactionRequest $request
     *
     * @return Response
     */

    public function store(CreateTransactionRequest $request)
    {
        $input = $request->all();

        /** @var Transaction $transaction */
        $transaction = Transaction::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/transactions.singular')]));

        return redirect(route('transactions.index'));
    }
    public function storeJson(CreateTransactionRequest $request)
    {
        $input = $request->all();

        /** @var Transaction $transaction */
        $transaction = Transaction::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/transactions.singular')]));

        return "başarılı";
    }
    /**
     * Display the specified Transaction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Transaction $transaction */
        $transaction = Transaction::find($id);

        if (empty($transaction)) {
            Flash::error(__('models/transactions.singular').' '.__('messages.not_found'));

            return redirect(route('transactions.index'));
        }

        return view('transactions.show')->with('transaction', $transaction);
    }

    /**
     * Show the form for editing the specified Transaction.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Transaction $transaction */
        $transaction = Transaction::find($id);

        if (empty($transaction)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transactions.singular')]));

            return redirect(route('transactions.index'));
        }

        return view('transactions.edit')->with('transaction', $transaction);
    }

    /**
     * Update the specified Transaction in storage.
     *
     * @param  int              $id
     * @param UpdateTransactionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransactionRequest $request)
    {
        /** @var Transaction $transaction */
        $transaction = Transaction::find($id);

        if (empty($transaction)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transactions.singular')]));

            return redirect(route('transactions.index'));
        }

        $transaction->fill($request->all());
        $transaction->save();

        Flash::success(__('messages.updated', ['model' => __('models/transactions.singular')]));

        return redirect(route('transactions.index'));
    }

    /**
     * Remove the specified Transaction from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Transaction $transaction */
        $transaction = Transaction::find($id);

        if (empty($transaction)) {
            Flash::error(__('messages.not_found', ['model' => __('models/transactions.singular')]));

            return redirect(route('transactions.index'));
        }

        $transaction->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/transactions.singular')]));

        return redirect(route('transactions.index'));
    }
}

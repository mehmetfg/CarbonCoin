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
use GuzzleHttp\Client;
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
    public function callApi()
    {
        $apiKey = '';
        $apiSecret = '';
        $request = '/api/v1/public/history/result?market=CYCE_USDT&since=1';
        $baseUrl = 'https://coinsbit.io';

        $data = [
            'request' => $request,
            'nonce' => (string)\Carbon\Carbon::now()->timestamp,
        ];

        $completeUrl = $baseUrl . $request;
        $dataJsonStr = json_encode($data, JSON_UNESCAPED_SLASHES);
        $payload = base64_encode($dataJsonStr);
        $signature = hash_hmac('sha512', $payload, $apiSecret);

        $client = new Client();
        try {
            $res = $client->get($completeUrl, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'X-TXC-APIKEY' => $apiKey,
                    'X-TXC-PAYLOAD' => $payload,
                    'X-TXC-SIGNATURE' => $signature
                ],
                'body' => json_encode($data, JSON_UNESCAPED_SLASHES)
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['result' => json_decode($res->getBody()->getContents())]);
    }
    public function index(CustomerDataTable $customerDataTable)
    {
        $apiKey = '1cad0dc4d595041cb7e2b5c136c2011f';
        $apiSecret = 'cb9db43d5ee9c0fd5fb838f72d87c76d';
        $request = '/api/v1/public/history/result?market=CYCE_USDT&since=1';
        $baseUrl = 'https://coinsbit.io';

        $data = [
            'request' => $request,
            'nonce' => (string)\Carbon\Carbon::now()->timestamp,
        ];

        $completeUrl = $baseUrl . $request;
        $dataJsonStr = json_encode($data, JSON_UNESCAPED_SLASHES);
        $payload = base64_encode($dataJsonStr);
        $signature = hash_hmac('sha512', $payload, $apiSecret);

        $client = new Client();
        try {
            $res = $client->get($completeUrl, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'X-TXC-APIKEY' => $apiKey,
                    'X-TXC-PAYLOAD' => $payload,
                    'X-TXC-SIGNATURE' => $signature
                ],
                'body' => json_encode($data, JSON_UNESCAPED_SLASHES)
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['result' => json_decode($res->getBody()->getContents())]);
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

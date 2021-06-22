<?php

namespace App\Http\Controllers;

use App\DataTables\ValletDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateValletRequest;
use App\Http\Requests\UpdateValletRequest;
use App\Models\Vallet;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ValletController extends AppBaseController
{
    /**
     * Display a listing of the Vallet.
     *
     * @param ValletDataTable $valletDataTable
     * @return Response
     */
    public function index(ValletDataTable $valletDataTable)
    {
        return $valletDataTable->render('vallets.index');
    }

    /**
     * Show the form for creating a new Vallet.
     *
     * @return Response
     */
    public function create()
    {
        return view('vallets.create');
    }

    /**
     * Store a newly created Vallet in storage.
     *
     * @param CreateValletRequest $request
     *
     * @return Response
     */
    public function store(CreateValletRequest $request)
    {
        $input = $request->all();

        /** @var Vallet $vallet */

        if(Vallet::where(["user_id"=> $request->user_id, "token_id"=>  $request->token_id])->doesntExist()) {
            $vallet = Vallet::create($input);
            Flash::success(__('messages.saved', ['model' => __('models/vallets.singular')]));

            return redirect(route('vallets.index'));
        }
        Flash::error(__('Bu Bayiye Bu Token İçin Kullanıcı Cüzdanı Daha Önce Oluşturulmuştur.'));
        return  back();

    }

    /**
     * Display the specified Vallet.
     *
     * @param  int $id
     *
     * @return Response
     */


    public function show($id)
    {
        /** @var Vallet $vallet */
        $vallet = Vallet::find($id);

        if (empty($vallet)) {
            Flash::error(__('models/vallets.singular').' '.__('messages.not_found'));

            return redirect(route('vallets.index'));
        }

        return view('vallets.show')->with('vallet', $vallet);
    }

    /**
     * Show the form for editing the specified Vallet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Vallet $vallet */
        $vallet = Vallet::find($id);

        if (empty($vallet)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vallets.singular')]));

            return redirect(route('vallets.index'));
        }

        return view('vallets.edit')->with('vallet', $vallet);
    }

    /**
     * Update the specified Vallet in storage.
     *
     * @param  int              $id
     * @param UpdateValletRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateValletRequest $request)
    {
        /** @var Vallet $vallet */
        $vallet = Vallet::find($id);

        if (empty($vallet)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vallets.singular')]));

            return redirect(route('vallets.index'));
        }

        $vallet->fill($request->all());
        $vallet->save();

        Flash::success(__('messages.updated', ['model' => __('models/vallets.singular')]));

        return redirect(route('vallets.index'));
    }

    /**
     * Remove the specified Vallet from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Vallet $vallet */
        $vallet = Vallet::find($id);

        if (empty($vallet)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vallets.singular')]));

            return redirect(route('vallets.index'));
        }

        $vallet->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/vallets.singular')]));

        return redirect(route('vallets.index'));
    }
}

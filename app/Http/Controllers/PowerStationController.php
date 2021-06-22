<?php

namespace App\Http\Controllers;

use App\DataTables\PowerStationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePowerStationRequest;
use App\Http\Requests\UpdatePowerStationRequest;
use App\Models\PowerStation;
use App\Models\Vallet;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PowerStationController extends AppBaseController
{
    /**
     * Display a listing of the PowerStation.
     *
     * @param PowerStationDataTable $powerStationDataTable
     * @return Response
     */
    public function index(PowerStationDataTable $powerStationDataTable)
    {

        return $powerStationDataTable->render('power_stations.index');
    }

    /**
     * Show the form for creating a new PowerStation.
     *
     * @return Response
     */
    public function create()
    {

        $vallet=Vallet::where("user_id",request("id"))->first();

        if(is_null($vallet))
        {
            Flash::error("Önce Firmaya Cüzdan Ekleyiniz");
            return  back();
        }
        return view('power_stations.create');
    }

    /**
     * Store a newly created PowerStation in storage.
     *
     * @param CreatePowerStationRequest $request
     *
     * @return Response
     */
    public function store(CreatePowerStationRequest $request)
    {
        $input =

        /** @var PowerStation $powerStation */
        $vallet=Vallet::where("user_id", $request->partner_id)->first();

        $valletId=Vallet::create([
            "user_id" => $request->partner_id,
            "name"=> $request->name,
            "token_id" => $vallet->token_id,
            "public_key" => '',
            "private_key" => '',
            "id_card_number" => 1
        ])->id;


        $input=  array_merge($request->all(), ["vallet_id"=> $valletId]);

        $powerStation = PowerStation::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/powerStations.singular')]));

        return redirect(route('powerStations.index'));
    }

    /**
     * Display the specified PowerStation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PowerStation $powerStation */
        $powerStation = PowerStation::find($id);

        if (empty($powerStation)) {
            Flash::error(__('models/powerStations.singular').' '.__('messages.not_found'));

            return redirect(route('powerStations.index'));
        }

        return view('power_stations.show')->with('powerStation', $powerStation);
    }

    /**
     * Show the form for editing the specified PowerStation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var PowerStation $powerStation */
        $powerStation = PowerStation::find($id);

        if (empty($powerStation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/powerStations.singular')]));

            return redirect(route('powerStations.index'));
        }

        return view('power_stations.edit')->with('powerStation', $powerStation);
    }

    /**
     * Update the specified PowerStation in storage.
     *
     * @param  int              $id
     * @param UpdatePowerStationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePowerStationRequest $request)
    {
        /** @var PowerStation $powerStation */
        $powerStation = PowerStation::find($id);

        if (empty($powerStation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/powerStations.singular')]));

            return redirect(route('powerStations.index'));
        }

        $powerStation->fill($request->all());
        $powerStation->save();

        Flash::success(__('messages.updated', ['model' => __('models/powerStations.singular')]));

        return redirect(route('powerStations.index'));
    }

    /**
     * Remove the specified PowerStation from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PowerStation $powerStation */
        $powerStation = PowerStation::find($id);

        if (empty($powerStation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/powerStations.singular')]));

            return redirect(route('powerStations.index'));
        }

        $powerStation->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/powerStations.singular')]));

        return redirect(route('powerStations.index'));
    }
}

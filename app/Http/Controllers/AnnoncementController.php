<?php

namespace App\Http\Controllers;

use App\DataTables\AnnoncementDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAnnoncementRequest;
use App\Http\Requests\UpdateAnnoncementRequest;
use App\Models\Annoncement;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AnnoncementController extends AppBaseController
{
    /**
     * Display a listing of the Annoncement.
     *
     * @param AnnoncementDataTable $annoncementDataTable
     * @return Response
     */
    public function index(AnnoncementDataTable $annoncementDataTable)
    {
        return $annoncementDataTable->render('annoncements.index');
    }

    /**
     * Show the form for creating a new Annoncement.
     *
     * @return Response
     */
    public function create()
    {
        return view('annoncements.create');
    }

    /**
     * Store a newly created Annoncement in storage.
     *
     * @param CreateAnnoncementRequest $request
     *
     * @return Response
     */
    public function store(CreateAnnoncementRequest $request)
    {
        $input = $request->all();

        /** @var Annoncement $annoncement */
        $annoncement = Annoncement::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/annoncements.singular')]));

        return redirect(route('annoncements.index'));
    }

    /**
     * Display the specified Annoncement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Annoncement $annoncement */
        $annoncement = Annoncement::find($id);

        if (empty($annoncement)) {
            Flash::error(__('models/annoncements.singular').' '.__('messages.not_found'));

            return redirect(route('annoncements.index'));
        }

        return view('annoncements.show')->with('annoncement', $annoncement);
    }

    /**
     * Show the form for editing the specified Annoncement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Annoncement $annoncement */
        $annoncement = Annoncement::find($id);

        if (empty($annoncement)) {
            Flash::error(__('messages.not_found', ['model' => __('models/annoncements.singular')]));

            return redirect(route('annoncements.index'));
        }

        return view('annoncements.edit')->with('annoncement', $annoncement);
    }

    /**
     * Update the specified Annoncement in storage.
     *
     * @param  int              $id
     * @param UpdateAnnoncementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnnoncementRequest $request)
    {
        /** @var Annoncement $annoncement */
        $annoncement = Annoncement::find($id);

        if (empty($annoncement)) {
            Flash::error(__('messages.not_found', ['model' => __('models/annoncements.singular')]));

            return redirect(route('annoncements.index'));
        }

        $annoncement->fill($request->all());
        $annoncement->save();

        Flash::success(__('messages.updated', ['model' => __('models/annoncements.singular')]));

        return redirect(route('annoncements.index'));
    }

    /**
     * Remove the specified Annoncement from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Annoncement $annoncement */
        $annoncement = Annoncement::find($id);

        if (empty($annoncement)) {
            Flash::error(__('messages.not_found', ['model' => __('models/annoncements.singular')]));

            return redirect(route('annoncements.index'));
        }

        $annoncement->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/annoncements.singular')]));

        return redirect(route('annoncements.index'));
    }
}

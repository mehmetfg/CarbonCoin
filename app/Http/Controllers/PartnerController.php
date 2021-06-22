<?php

namespace App\Http\Controllers;

use App\DataTables\PartnerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PartnerController extends AppBaseController
{
    /**
     * Display a listing of the Partner.
     *
     * @param PartnerDataTable $partnerDataTable
     * @return Response
     */
    public function index(PartnerDataTable $partnerDataTable)
    {
        return $partnerDataTable->render('partners.index');
    }

    /**
     * Show the form for creating a new Partner.
     *
     * @return Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created Partner in storage.
     *
     * @param CreatePartnerRequest $request
     *
     * @return Response
     */
    public function store(CreatePartnerRequest $request)
    {
        $input = $request->all();

        /** @var Partner $partner */
        $partner = Partner::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/partners.singular')]));

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified Partner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Partner $partner */
        $partner = Partner::find($id);

        if (empty($partner)) {
            Flash::error(__('models/partners.singular').' '.__('messages.not_found'));

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified Partner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Partner $partner */
        $partner = Partner::find($id);

        if (empty($partner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/partners.singular')]));

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partner', $partner);
    }

    /**
     * Update the specified Partner in storage.
     *
     * @param  int              $id
     * @param UpdatePartnerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePartnerRequest $request)
    {
        /** @var Partner $partner */
        $partner = Partner::find($id);

        if (empty($partner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/partners.singular')]));

            return redirect(route('partners.index'));
        }

        $partner->fill($request->all());
        $partner->save();

        Flash::success(__('messages.updated', ['model' => __('models/partners.singular')]));

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified Partner from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Partner $partner */
        $partner = Partner::find($id);

        if (empty($partner)) {
            Flash::error(__('messages.not_found', ['model' => __('models/partners.singular')]));

            return redirect(route('partners.index'));
        }

        $partner->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/partners.singular')]));

        return redirect(route('partners.index'));
    }
}

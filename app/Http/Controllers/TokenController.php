<?php

namespace App\Http\Controllers;

use App\DataTables\TokenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTokenRequest;
use App\Http\Requests\UpdateTokenRequest;
use App\Models\Token;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TokenController extends AppBaseController
{
    /**
     * Display a listing of the Token.
     *
     * @param TokenDataTable $tokenDataTable
     * @return Response
     */
    public function index(TokenDataTable $tokenDataTable)
    {
        return $tokenDataTable->render('tokens.index');
    }

    /**
     * Show the form for creating a new Token.
     *
     * @return Response
     */
    public function create()
    {
        return view('tokens.create');
    }

    /**
     * Store a newly created Token in storage.
     *
     * @param CreateTokenRequest $request
     *
     * @return Response
     */
    public function store(CreateTokenRequest $request)
    {
        $input = $request->all();

        /** @var Token $token */
        $token = Token::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/tokens.singular')]));

        return redirect(route('tokens.index'));
    }

    /**
     * Display the specified Token.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Token $token */
        $token = Token::find($id);

        if (empty($token)) {
            Flash::error(__('models/tokens.singular').' '.__('messages.not_found'));

            return redirect(route('tokens.index'));
        }

        return view('tokens.show')->with('token', $token);
    }

    /**
     * Show the form for editing the specified Token.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Token $token */
        $token = Token::find($id);

        if (empty($token)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tokens.singular')]));

            return redirect(route('tokens.index'));
        }

        return view('tokens.edit')->with('token', $token);
    }

    /**
     * Update the specified Token in storage.
     *
     * @param  int              $id
     * @param UpdateTokenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTokenRequest $request)
    {
        /** @var Token $token */
        $token = Token::find($id);

        if (empty($token)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tokens.singular')]));

            return redirect(route('tokens.index'));
        }

        $token->fill($request->all());
        $token->save();

        Flash::success(__('messages.updated', ['model' => __('models/tokens.singular')]));

        return redirect(route('tokens.index'));
    }

    /**
     * Remove the specified Token from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Token $token */
        $token = Token::find($id);

        if (empty($token)) {
            Flash::error(__('messages.not_found', ['model' => __('models/tokens.singular')]));

            return redirect(route('tokens.index'));
        }

        $token->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/tokens.singular')]));

        return redirect(route('tokens.index'));
    }
}

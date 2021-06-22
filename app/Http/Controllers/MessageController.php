<?php

namespace App\Http\Controllers;

use App\DataTables\MessageDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MessageController extends AppBaseController
{
    /**
     * Display a listing of the Message.
     *
     * @param MessageDataTable $messageDataTable
     * @return Response
     */
    public function index(MessageDataTable $messageDataTable)
    {
        return $messageDataTable->render('messages.index');
    }

    /**
     * Show the form for creating a new Message.
     *
     * @return Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created Message in storage.
     *
     * @param CreateMessageRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageRequest $request)
    {
        $input = $request->all();

        /** @var Message $message */
        $message = Message::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/messages.singular')]));

        return redirect(route('messages.index'));
    }

    /**
     * Display the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Message $message */
        $message = Message::find($id);

        if (empty($message)) {
            Flash::error(__('models/messages.singular').' '.__('messages.not_found'));

            return redirect(route('messages.index'));
        }

        return view('messages.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Message $message */
        $message = Message::find($id);

        if (empty($message)) {
            Flash::error(__('messages.not_found', ['model' => __('models/messages.singular')]));

            return redirect(route('messages.index'));
        }

        return view('messages.edit')->with('message', $message);
    }

    /**
     * Update the specified Message in storage.
     *
     * @param  int              $id
     * @param UpdateMessageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageRequest $request)
    {
        /** @var Message $message */
        $message = Message::find($id);

        if (empty($message)) {
            Flash::error(__('messages.not_found', ['model' => __('models/messages.singular')]));

            return redirect(route('messages.index'));
        }

        $message->fill($request->all());
        $message->save();

        Flash::success(__('messages.updated', ['model' => __('models/messages.singular')]));

        return redirect(route('messages.index'));
    }

    /**
     * Remove the specified Message from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Message $message */
        $message = Message::find($id);

        if (empty($message)) {
            Flash::error(__('messages.not_found', ['model' => __('models/messages.singular')]));

            return redirect(route('messages.index'));
        }

        $message->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/messages.singular')]));

        return redirect(route('messages.index'));
    }
}

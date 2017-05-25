<?php

namespace Modules\Chat\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Chat\Entities\Message;
use App\Events\MessagePosted;
use Modules\Core\Http\Controllers\CoreController;


class ChatController extends CoreController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $title = 'Chat';
        return view('chat::index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('chat::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('chat::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('chat::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'message' => $request->message,
            'user_id' => \Auth::User()->id
        ]);

        //Announce that a new message has been posted
        broadcast(new MessagePosted($message, \Auth::user()))->toOthers();
    }
}

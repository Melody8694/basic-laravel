<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();
        return redirect()->route("home")->with('success', 'Thanks for contact us');

    }

    public function getMessages()
    {
        $message = Message::all();
        return view('messages', ['messages' => $message]);
    }

    public function ajaxRequest(Request $request)
    {
        $array = array(
            0 => ['name'=>'dai', 'age'=>'25'],
            1 => ['name'=>'huy', 'age'=>'22'],
        );
        return response()->json($array);
    }
}

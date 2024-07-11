<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ApiController extends Controller
{
    public function sayHello()
    {
        return response()->json(['message' => 'Hello, World!']);
    }
    public function echoMessage(Request $request)
    {
        $message = $request->input('message');
        return response()->json(['message' => $message]);
    }

    public function create(Request $request)
    {
        $messages = new Message();

        $messages->name = $request->input('name');
        $messages->email = $request->input('email');
        $messages->subject = $request->input('subject');
        $messages->message = $request->input('message');

        $messages->save();
        return response()->json($messages);
    }
}

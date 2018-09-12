<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMsg(Request $request)
    {
        //
        $this->validate($request,[
            'name'=> 'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        $message = new Messages();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect()->back()->with('success_msg','Message Sent Successfully');
    }
    public function getMsgs(){
        $msgs = Messages::all();
        return view('messages')->with('msgs',$msgs);
    }
}

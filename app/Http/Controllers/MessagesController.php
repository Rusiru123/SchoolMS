<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 5:54 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,  [
            'name'=>'required',
            'sid' => 'required',
            'grade'=> 'required',
            'subject' => 'required',
            'marks' => 'required',
        ]);

        //create new message

        $message =new Message;
        $message ->name= $request->input('name');
        $message ->sid= $request->input('sid');
        $message ->grade= $request->input('grade');
        $message ->subject= $request->input('subject');
        $message ->marks= $request->input('marks');
        $message ->message= $request->input('message');
        //save new message
        $message -> save();

        //Redirect
        return redirect('/');

    }

}
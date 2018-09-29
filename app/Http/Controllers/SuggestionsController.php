<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:05 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;

class SuggestionsController extends Controller
{
    public function submit(Request $request){
        $this->validate($request , [
            'email'=>'required',

        ]);


        //create a new Suggestions

        $suggestion = new Suggestion;

        $suggestion ->email= $request->input('email');
        $suggestion ->suggestion= $request->input('suggestion',true);

        //save the suggestions
        $suggestion -> save();

        //redirect

        return redirect('/');


    }

}
<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:01 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('results.index') -> with('results',$results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    if(auth() -> user() -> id !== 1){
        return redirect('results');
    }
        return view('results.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [

            'stName' =>'required',
            'stID' =>'required',
            'grade' =>'required',
            'subject' => 'required',
            'marks' =>'required',
            'TNotices' =>'required',
        ]);


        $result = new Result;
        $result -> stName = $request ->input('stName');
        $result -> stID = $request ->input('stID');
        $result -> grade = $request ->input('grade');
        $result -> subject = $request ->input('subject');
        $result -> marks = $request ->input('marks');
        $result -> TNotices = $request ->input('TNotices');


        $result -> save();

        return redirect('/results') -> with('success','Subject is created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::find($id);
        return view('results.show') -> with('result',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);

        if(auth() -> user() -> id !== 1){
            return redirect('results');
        }
        return view('results.edit') -> with('result',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [

            'stName' =>'required',
            'stID' =>'required',
            'grade' =>'required',
            'subject' => 'required',
            'marks' =>'required',
            'TNotices' =>'required',
        ]);


        $result = Result:: find($id);
        $result -> stName = $request->input('stName');
        $result -> stID = $request ->input('stID');
        $result -> grade = $request ->input('grade');
        $result -> subject = $request ->input('subject');
        $result -> marks = $request ->input('marks');
        $result -> TNotices = $request ->input('TNotices');


        $result -> save();

        return redirect('/results') -> with('success','Result updated');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $results = Result::find($id);

        if(auth() -> user() -> id !== 1){
            return redirect('results');
        }
        $results -> delete();

        return redirect('/results') -> with('success','result is removed');

    }

}
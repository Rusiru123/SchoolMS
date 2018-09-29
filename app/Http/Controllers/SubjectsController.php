<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:03 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Subject;

class SubjectsController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject:: all();
        return view('subjects.index') -> with('subjects',$subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   if(auth() -> user() -> id !== 1){
        return redirect('subjects');
    }
        return view('subjects.create');
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

            'subName' =>'required',
            'subCode' =>'required',
            'grade' =>'required',
            'avgPassRate' => 'required',
            'Tdescription' =>'required',
        ]);

        $subject = new Subject;
        $subject -> subName = $request ->input('subName');
        $subject -> subCode = $request ->input('subCode');
        $subject -> grade = $request ->input('grade');
        $subject -> avgPassRate = $request ->input('avgPassRate');
        $subject -> Tdescription = $request ->input('Tdescription');

        $subject -> save();

        return redirect('/subjects') -> with('success','Subject is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject:: find($id);
        return view('subjects.show') -> with('subject',$subject);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject:: find($id);
        if(auth() -> user() -> id !== 1){
            return redirect('subjects');
        }
        return view('subjects.edit') -> with('subject',$subject);
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

            'subName' =>'required',
            'subCode' =>'required',
            'grade' =>'required',
            'avgPassRate' => 'required',
            'Tdescription' =>'required',
        ]);

        $subject = Subject::find($id);
        $subject -> subName = $request ->input('subName');
        $subject -> subCode = $request ->input('subCode');
        $subject -> grade = $request ->input('grade');
        $subject -> avgPassRate = $request ->input('avgPassRate');
        $subject -> Tdescription = $request ->input('Tdescription');

        $subject -> save();

        return redirect('/subjects') -> with('success','Subject is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);

        if(auth() -> user() -> id !== 1){
            return redirect('subjects');
        }
        $subject -> delete();

        return redirect('/subjects') -> with('success','Subject is removed');

    }

}
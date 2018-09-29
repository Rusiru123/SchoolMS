<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 5:52 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeManageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('homemanage');
        return view('Homeman.homemanage');
    }
}
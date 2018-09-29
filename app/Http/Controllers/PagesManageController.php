<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 5:57 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesManageController extends Controller
{

    public function index(){
        return view('pages.index');
    }

    public function Result_Management(){
        return view('pages.Result_Management');
    }

    public function Subject_Management(){
        return view('pages.Subject_Management');
    }


    public function search(){
        return view('pages.search');
    }

    public function SubjectsView(){
        return view ('pages.Subject_Management.SubjectsView');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 6:00 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB;
use App\Result;

class QueryController extends Controller
{

    public function search(Request $request){
        // Gets the query string from our form submission
        $query = Request::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $result = DB::table('results')->where('id', 'LIKE','%'.$query.'%')->first();

        echo $result->id;


        // returns a view and passes the view the list of articles and the original query.
        return view('page.search', compact('results', 'query'));
    }


}
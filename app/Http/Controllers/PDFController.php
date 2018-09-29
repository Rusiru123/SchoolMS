<?php
/**
 * Created by PhpStorm.
 * User: rusiru
 * Date: 9/29/2018
 * Time: 5:58 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use PDF;
use App\Subject;
use App\Result;

class PDFController extends Controller
{
    public function getPDF(){
        $subjects = Subject::all();
        $pdf =  PDF::loadView('pdf.subject',['subjects' =>$subjects]);
        return $pdf ->stream('subject.pdf');


    }

    public function generatePDF(){
        $results = Result::all();
        $pdf =  PDF::loadView('pdf.result',['results' =>$results]);
        return $pdf ->stream('result.pdf');

    }
}
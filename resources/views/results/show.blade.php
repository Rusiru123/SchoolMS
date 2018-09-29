@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>
<a href="results" class ="btn btn-default">Go Back</a>
<br>
@include('inc.navbar')
<br>

<a href="{{$result->id}}/edit"  class ="btn btn-default">Edit Result</a>
{!!Form::open(['action' => ['ResultsController@destroy',$result-> id],'method' =>'POST','class'=>'pull-right'])!!}


<h1>{{$result->id}}</h1>

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!!Form::close() !!}


<br>
<br>
<br>
<br>
@include('inc.footer')
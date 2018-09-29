@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>

<a href ="subjects" class ="btn btn-default">Go Back</a>
<br>
<br>
@include('inc.navbar')
<br>
<a href="{{$subject->id}}/edit"  class ="btn btn-default">Edit The subject</a>
{!!Form::open(['action' => ['SubjectsController@destroy',$subject -> id],'method' =>'POST','class'=>'pull-right'])!!}


<h1>{{$subject->subName }}</h1>

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!!Form::close() !!}


@include('inc.footer')
@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>
@include('inc.navbar')
<br>
@include('inc.messages')


<h2>Edit Result</h2>
{!! Form::open(['action' => ['ResultsController@update',$result ->id],'method'=> 'POST']) !!}

<div class ="form-group" >
    {{Form::label('stName', ' Student Name:-')}}
    {{Form::text('stName', $result->stName),['class'=> 'form control','placeholder'=>'Enter Student Name :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('stID', ' Student ID:-')}}
    {{Form::text('stID', $result->stID),['class'=> 'form control','placeholder'=>'Enter Student ID:-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('grade', ' Grade :-')}}
    {{Form::text('grade', $result -> grade),['class'=> 'form control','placeholder'=>'Enter Student Grade :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('subject', ' Subject:-')}}
    {{Form::text('subject', $result->subject),['class'=> 'form control','placeholder'=>'Enter The Subject  :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('marks', ' Marks:-')}}
    {{Form::text('marks', $result ->marks),['class'=> 'form control','placeholder'=>'Enter Marks:-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('TNotices', ' Tnotices:-')}}
    {{Form::textarea('TNotices', $result->TNotices),['class'=> 'form control','placeholder'=>'Enter Teacher Description:-']}}
</div>
{{Form ::hidden('_method','PUT') }}
<br>
<div>
    {{Form::submit('Submit',['class'=>'btn btn primary' ])}}
</div>


{!! Form::close() !!}
<br>
<br>
<br>
<br>
@include('inc.footer')
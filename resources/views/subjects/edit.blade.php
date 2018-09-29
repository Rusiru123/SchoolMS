@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>
@include('inc.navbar')
<br>
@include('subjects.messages')

<h2>Edit  Subjects</h2>
{!! Form::open(['action' => ['SubjectsController@update',$subject->id],'method'=> 'POST']) !!}

<div class ="form-group" >
    {{Form::label('subName', ' Subject Name:-')}}
    {{Form::text('subName', $subject ->subName,['class'=> 'form control','placeholder'=>'Enter Subjetc Name :-'])}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('subCode', ' Subject Code :-')}}
    {{Form::text('subCode', $subject ->subCode,['class'=> 'form control','placeholder'=>'Enter Subject Code :-'])}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('grade', ' Grade :-')}}
    {{Form::text('grade', $subject ->grade,['class'=> 'form control','placeholder'=>'Enter Student Grade :-'])}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('avgPassRate', ' Average Pass Rate :-')}}
    {{Form::text('avgPassRate', $subject ->avgPassRate,['class'=> 'form control','placeholder'=>'Enter The Pass Rate :-'])}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('Tdescription', ' Teacher Description:-')}}
    {{Form::textarea('Tdescription', $subject->Tdescription,['class'=> 'form control','placeholder'=>'Enter Teacher Description :-'])}}
</div>
<br>
{{Form ::hidden('_method','PUT') }}
<div>
    {{Form::submit('Submit',['class'=>'btn btn primary' ])}}
</div>


{!! Form::close() !!}
<br>
<br>
<br>
<br>
@include('inc.footer')
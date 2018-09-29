@extends('layouts.app')
<h1 align="center">Wickramashila National College,Girulla ,Gampaha</h1>
@include('inc.navbar')

<br/>
<body>
<h2>Results Management</h2>


<br>
<br>
<br>

<p align="center">Students Who Wish to Re-Check The Results Kindly Fill The Below Form</p>
<p align="center"> During the First Two Weeks After The Release The Results!!!<p>
    <br>
@include('inc.messages')
{!! Form::open(['url' => 'Result_Management/submit']) !!}

<div class ="form-group" >
    {{Form::label('name', 'Student Name :-')}}
    {{Form::text('name', ''),['class'=> 'form control','placeholder'=>'Enter Student Name :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('sid', 'Student ID Number :-')}}
    {{Form::text('sid', ''),['class'=> 'form control','placeholder'=>'Enter Student ID Number :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('grade', 'Grade:-')}}
    {{Form::text('grade', ''),['class'=> 'form control','placeholder'=>'Enter Student Grade :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('subject', 'Subject  :-')}}
    {{Form::text('subject', ''),['class'=> 'form control','placeholder'=>'Enter Subject :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('marks', 'Marks For The Particular Subject:-')}}
    {{Form::text('marks', ''),['class'=> 'form control','placeholder'=>'Enter Marks For The Subject:-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('message', 'Message :-')}}
    {{Form::textarea('message', ''),['class'=> 'form control','placeholder'=>'Message:-']}}
</div>
<br>
<div>
    {{Form::submit('Submit',['class'=>'btn btn primary' ])}}
</div>

{!! Form::close() !!}

</body>
<br>
<br>
<br>
<br>
<br>
@include('inc.footer')
</html>
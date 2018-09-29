@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>
@include('inc.navbar')

<h2>Subject Controller!!</h2>

@if(count($subjects) > 1)
    @foreach($subjects as $subject)
        <div class ="well">
            <h3><a href="subjects/{{$subject -> id}}">{{$subject -> subName}}</a></h3>
            <h3>{{$subject -> subCode}}</h3>
            <h3>{{$subject -> grade}}</h3>
            <h3>{{$subject -> avgPassRate}}</h3>
            <h3>{{$subject -> Tdescription}}</h3>
        </div>
    @endforeach
@else
    <p>No Subjects Found</p>
@endif
<br>
<br>
<br>
<br>
<br>
@include('inc.footer')
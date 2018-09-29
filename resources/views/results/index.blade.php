@extends('layouts.app')
<h1 align="center">Wickramashilla National College,Giriulla,Gampaha</h1>
<br>

@include('inc.navbar')

<h2>Results Controller!!</h2>

<div class="table-responsive">
    <head>
        <style>
            table, th,td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <table style ="width :100%" >
        <head>
            <tr>
                <th> Name</th>
                <th>SID</th>
                <th>Grade</th>
                <th>Subject</th>
                <th>Marks</th>
                <th>Teacher Notices</th>
            </tr>
        </head>
    </table>
</div>


@if(count($results) > 1)
    @foreach($results as $result)
        <div class ="well">
            <tr>
                <td><a href="results/{{$result->id}}">{{$result ->stName }}</a></td>
                <td>{{$result ->stID }}</td>
                <td>{{$result ->grade }}</td>
                <td>{{$result ->subject }}</td>
                <td>{{$result ->marks}}</td>
                <td>{{$result ->TNotices }}</td>
            </tr>
        </div>
    @endforeach
@else
    <p>No result Found</p>
@endif
<br>
<br>
<br>
<br>
@include('inc.footer')
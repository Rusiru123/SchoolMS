<h1 align="center">Wickramashila National College,Girulla ,Gampaha</h1>


<p>View The Subject Lists for current Grade!!</p>

{!! Form::open(['url' => 'Subject_Management/submit']) !!}

<div class ="form-group" >
    {{Form::label('sid', 'Student ID Number :-')}}
    {{Form::text('sid', ''),['class'=> 'form control','placeholder'=>'Enter Student ID Number :-']}}
</div>
<br>
<div class ="form-group" >
    {{Form::label('grade', ' Grade :-')}}
    {{Form::text('grade', ''),['class'=> 'form control','placeholder'=>'Enter Grade :-']}}
</div>
<br>
<div>
    {{Form::submit('Submit',['class'=>'btn btn primary' ])}}
</div>


{!! Form::close() !!}
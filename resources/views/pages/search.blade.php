@extends('layouts.app')
<h1 align="center">Wickramashila National College,Girulla ,Gampaha</h1>
@include('inc.navbar')

<p align="center">To Get The Results Fill The Following Details!!</p>

{!! Form::open(array('rout' => 'results.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
{!! Form::text('search', null,
                       array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Search for the result..')) !!}
{!! Form::submit('Search',
                           array('class'=>'btn btn-default')) !!}
{!! Form::close() !!}

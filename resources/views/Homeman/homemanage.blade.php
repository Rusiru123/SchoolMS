@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        // You are logged in!
                        <h3>Subject Controller!!</h3>
                        <a href="subjects/create" class ="btn btn-primary" >Create A Subject</a>

                        <h3>Results Controller</h3>
                        <a href="results/create" class ="btn btn-primary" >Create A Result</a>

                        <h3>Subject Management</h3>
                        <a href="Subject_Management" class ="btn btn-primary" >Subject Management</a>

                        <h3>Result Management</h3>
                        <a href="Result_Management" class ="btn btn-primary" >Results Management</a>

                        <h3>Get The Results Sheet Here</h3>
                        <a href="generatePDF" class ="btn btn-primary" > Result Sheet!! </a>

                        <h3>Get The Subject List Here</h3>
                        <a href="getPDF" class ="btn btn-primary" > Subject List!! </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
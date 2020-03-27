@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$quiz->title}}</div>

                <div class="card-body">
                    <a href="/quizzes/{{$quiz->id}}/questions/create" class="btn btn-success">Add new question</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

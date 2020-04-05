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

                    <a href="quizzes/create" class="btn btn-success">Create new quiz</a>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">user quiz</div>

                <div class="card-body">
                    <div class="list-group">
                        @foreach($quizzes as $quiz)
                        <div class="list-group-item">
                            {{$quiz->title}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection

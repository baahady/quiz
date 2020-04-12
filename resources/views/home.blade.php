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
                <div class="card-header">quizzes created with {{$user->name}}</div>

                <div class="card-body">
                    <div class="list-group">
                        @forelse($quizzes as $quiz)
                        <div class="list-group-item">
                            {{$quiz->title}}
                            <div class="mt-2">
                                <a href="/quizzes/{{$quiz->id}}/questions/create"><button class="btn-sm btn btn-primary float-left mr-2">Add question</button></a> 
                                <a href="/quizzes/{{$quiz->id}}"><button class="btn-sm btn btn-warning float-left mr-2">Manage Questions</button></a> 
                                <a href="/takeparts/{{$quiz->id}}-{{Str::slug($quiz->title)}}"><button class="btn-sm btn btn-success float-left mr-2">Take part</button></a> 
                                <form action="/quizzes/{{$quiz->id}}" method="post" class="float-left">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                        @empty
                        nothing yet
                        @endforelse
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection

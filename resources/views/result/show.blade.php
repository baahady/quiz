@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@forelse($results as $quiz)
            <div class="card">
                <div class="card-header">{{$quiz->user_id}}</div>
                {{$quiz->quiz->title}}
                {{$quiz->user->name}}
                <div class="card-body">
                   
                </div>
            </div>
            @empty
            	no take part yet
            @endforelse
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        @include('partials.menu');
        </div>        
        <div class="col-md-9">
            <h3>آزمون ها</h3>
            <hr>
        	@forelse($results as $quiz)
            <div class="card mt-3">
                <div class="card-header">{{$quiz->quiz->title}}</div>
                <div class="card-body">
                   
                </div>
                <div class="card-footer">{{$quiz->quiz->description}}</div>
            </div>
            @empty
            	شما فعلا در هیچ آزمونی شرکت نکرده اید.
            @endforelse
        </div>
    </div>
</div>
@endsection

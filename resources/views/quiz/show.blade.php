@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$quiz->title}}</div>

                <div class="card-body">
                    <a href="/quizzes/{{$quiz->id}}/questions/create" class="btn btn-success">اضافه کردن سوال</a>
                    <a href="/takeparts/{{$quiz->id}}-{{Str::slug($quiz->title)}}" class="btn btn-primary @if($quiz->questions->count() == 0) disabled @endif">شرکت در همین آزمون <span class="badge badge-info">{{$quiz->questions->count()}} سوال</span></a>
                </div>
            </div>
            @forelse($quiz->questions as $question)
            <div class="card mt-2">
                <div class="card-header">{{$question->question}}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($question->answers as $answer)
                            <li class="list-group-item d-flex justify-content-between">
                            <div>{{$answer->answer}}</div>
                            @if($question->responses->count())
                            <div>{{($answer->responses->count() * 100) / $question->responses->count()}} %</div>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    <form action="/quizzes/{{$quiz->id}}/questions/{{$question->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </div>
            </div>
            @empty
                <div class="card mt-2">
                    <div class="card-body">
                    شما فعلا هیچ سوالی به این آزمون اضافه نکرده اید.
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</div>
@endsection

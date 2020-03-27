@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new question for quiz: <span class="font-weight-bold text-danger">{{$quiz->title}}</span></div>

                <div class="card-body">
                    <form action="/quizzes/{{$quiz->id}}/questions" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputQuestion1">Question</label>
                        <input type="text" name="question[question]" class="form-control" id="exampleInputQuestion1" aria-describedby="questionHelp" placeholder="Enter question">
                        <small id="questionHelp" class="form-text text-muted">Enter the question here.</small>
                        @error('question.question')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div> 


                      <div class="form-group">
                        <fieldset>
                            <legend>Choices</legend>
                        </fieldset>
                      </div>

                      <button type="submit" class="btn btn-success">Save</button>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

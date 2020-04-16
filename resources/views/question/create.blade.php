@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ساخت سوال جدید برای آزمون <span class="font-weight-bold text-danger">{{$quiz->title}}</span></div>

                <div class="card-body">
                    <form action="/quizzes/{{$quiz->id}}/questions" method="post">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputQuestion1">سوال</label>
                        <input type="text" name="question[question]" value="{{old('question.question')}}" class="form-control" id="exampleInputQuestion1"
                         aria-describedby="questionHelp" placeholder="سوال">
                        @error('question.question')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div> 


                      <div class="form-group">
                        <fieldset>
                            <legend>گزینه ها</legend>

                            <div class="form-group">
                                <label for="exampleInputAnswer1">گزینه 1</label>
                                <input type="text" name="answers[][answer]" value="{{old('answers.0.answer')}}" 
                                class="form-control" id="exampleInputAnswer1"
                                aria-describedby="answerHelp" placeholder="گزینه 1">
                                @error('answers.0.answer')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div> 

                            <div class="form-group">
                                <label for="exampleInputAnswer2">گزینه 2</label>
                                <input type="text" name="answers[][answer]" value="{{old('answers.1.answer')}}" 
                                class="form-control" id="exampleInputAnswer2"
                                aria-describedby="answerHelp" placeholder="گزینه 2">
                                @error('answers.1.answer')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div> 

                            <div class="form-group">
                                <label for="exampleInputAnswer2">گزینه 3</label>
                                <input type="text" name="answers[][answer]" value="{{old('answers.2.answer')}}" 
                                class="form-control" id="exampleInputAnswer3"
                                aria-describedby="answerHelp" placeholder="گزینه 3">
                                @error('answers.2.answer')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div> 

                            <div class="form-group">
                                <label for="exampleInputAnswer2">گزینه 4</label>
                                <input type="text" name="answers[][answer]" value="{{old('answers.3.answer')}}" 
                                class="form-control" id="exampleInputAnswer4"
                                aria-describedby="answerHelp" placeholder="گزینه 4">
                                @error('answers.3.answer')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div> 

                        </fieldset>
                      </div>

                      <button type="submit" class="btn btn-success">ذخیره</button>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

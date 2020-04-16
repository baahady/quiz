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
                   <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">سوال</th>
                        <th scope="col">گزینه 1</th>
                        <th scope="col">گزینه 2</th>
                        <th scope="col">گزینه 3</th>
                        <th scope="col">گزینه 4</th>  
                        <th scope="col">انتخاب شما</th>                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach($quiz->quiz->questions as $question)  
                        <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$question->question}}</td>
                        @foreach($question->answers as $answer)
                        <td>{{$answer->answer}}  
                            @foreach($answer->responses as $response)
                                <?php if(isset($response->answer_id)){$answer_choice = $answer->answer; $answer_id = $response->answer_id;} ?>
                            @endforeach
                        </td>
                        @endforeach
                        <td>{{$answer_choice}} {{$answer_id }}</td>
                        <td>
                        
                        <!-- @foreach($answer->responses as $response)
                            {{$response->answer_id}}
                        @endforeach -->
                        </td>
                        </tr>
                        <?php $i++ ?>
                    @endforeach
                    </tbody>
                    </table>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        @include('partials.menu')
        </div>        
        <div class="col-md-9">
            <h3>آزمون ها</h3>
            <hr>


                @forelse($results as $val)
                    <div class="card mt-2">
                    <div class="card-header">{{$val->quiz->title}}</div>
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
                        <th scope="col">جواب شما</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($val->quiz->questions as $question)
                                <tr>
                                <th scope="row">1</th>
                                <td>{{$question->question}}</td>
                                <?php $id = $question->id; ?>
                                @foreach($question->answers as $answer)
                                    <td>
                                    {{$answer->answer}}
                                    </td>  
                                @endforeach          
                                @foreach($val->responses as $response)
                                    <?php $qid = $response->question_id; ?>
                                    @if($id == $qid) <td>{{$response->answer->answer}}</td> @endif
                                @endforeach  
                                </tr>          
                            @endforeach
                            </tbody>
                            </table>
                    </div>
                    <div class="card-footer">{{$val->quiz->description}}</div>
                    </div>
                @empty
                    شما فعلا در هیچ آزمونی شرکت نکرده اید.    
                @endforelse

        </div>
    </div>
</div>
@endsection

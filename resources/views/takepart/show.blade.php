@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<h1>{{$quiz->title}}</h1>
        	<form action="/takeparts/{{$quiz->id}}-{{Str::slug($quiz->title)}}" method="post">
        		@csrf
        		@foreach($quiz->questions as $key=>$question)
        			<div class="card mt-2">
        				<div class="card-header"><strong>{{$key + 1}} - </strong>{{$question->question}}</div>
        				<div class="card-body">
        					@error('responses.'.$key.'.answer_id')
        						<div class="text-danger">{{$message}}</div>
        					@enderror
        					<ul class="list-group">
        						@foreach($question->answers as $answer)
        						<label for="{{$answer->id}}">
        						<li class="list-group-item">
        							<input type="radio" name="responses[{{$key}}][answer_id]" value="{{$answer->id}}" class="mr-2" {{(old('responses.'.$key.'.answer_id')==$answer->id) ? 'checked' : ''}} id="{{$answer->id}}">
        							{{$answer->answer}}
        							<input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
        						</li>
        						</label>
        						@endforeach
        					</ul>
        				</div>
        			</div>
        		@endforeach

        		<button type="submit" class="btn btn-success mt-3">ذخیره</button>
        	</form>

        </div>
    </div>
</div>
@endsection

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
        		<div class="card mt-2">
        			<div class="card-header">Your Information</div>
        			<div class="card-body">
                    <div class="card mt-2">
                        <div class="card-header">Your Information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" name="takepart[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Name">
                                <small id="emailHelp" class="form-text text-muted">Enter name here please.</small>
                                @error('takepart.name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                         
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Email</label>
                                <input type="text" name="takepart[email]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Email">
                                <small id="emailHelp" class="form-text text-muted">Enter email here please.</small>
                                @error('takepart.email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                            </div>  
                        </div>
                    </div>        			
                </div>
        		</div>
        		<button type="submit" class="btn btn-success mt-3">Save</button>
        	</form>

        </div>
    </div>
</div>
@endsection

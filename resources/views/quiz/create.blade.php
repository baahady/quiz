@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/quizzes" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Quiz title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                         aria-describedby="titleHelp" placeholder="Enter Title">
                        <small id="titleHelp" class="form-text text-muted">Enter the quiz title here.</small>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Quiz description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                         aria-describedby="descriptionHelp" placeholder="Enter description">
                        <small id="descriptionHelp" class="form-text text-muted">Enter the quiz description here.</small>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div> 
                      @csrf
                      <button type="submit" class="btn btn-success">Save quiz</button>                   
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

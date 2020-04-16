@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ساخت آزمون</div>

                <div class="card-body">
                    <form action="/quizzes" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">عنوان آزمون</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                         aria-describedby="titleHelp" placeholder="عنوان">
                        <small id="titleHelp" class="form-text text-muted">عنوان کوتاه و مناسبی برای آزمون وارد نمایید.</small>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات آزمون</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                         aria-describedby="descriptionHelp" placeholder="توضیحات">
                        <small id="descriptionHelp" class="form-text text-muted">توضیحات مورد نیاز آزمون را وارد نمایید..</small>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                      </div> 
                      @csrf
                      <button type="submit" class="btn btn-success">ذخیره آزمون</button>                   
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

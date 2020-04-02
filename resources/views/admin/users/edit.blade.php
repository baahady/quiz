@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{$user->name}}</div>

                <div class="card-body">
                    <form action="{{route('admin.users.update',$user)}}" method="post">
                        @method('PUT')
                        @csrf
                        @foreach($roles as $role)
                            <div class="form-chech">
                                <input type="checkbox" name="roles[]" value="{{$role->id}}">
                                <label>{{$role->name}}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-success">update</button>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

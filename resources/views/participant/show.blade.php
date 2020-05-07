
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($participants as $val)
            <h4 class="mt-2 mb-3">{{$val->title}}</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody>
            @forelse($val->takeparts as $takepart)

                    <tr>
                    <th scope="row">1</th>
                    <td>{{$takepart->user->name}}</td>
                    <td>{{$takepart->user->email}}</td>
                    <td><a href="/participants/{{$takepart->user->id}}/{{$val->id}}/{{$takepart->id}}" target="_blank"><button class="btn btn-success">مشاهده نتیجه آزمون</button></a></td>
                    </tr>
            @empty
                <div>
                فعلا کسی در این آزمون شرکت نکرده است.  
                </div> 
            @endforelse
            </tbody>
            </table>
        @endforeach    

        </div>
    </div>
</div>
@endsection

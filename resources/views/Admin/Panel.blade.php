@extends('Admin.layout.Admin')


@section('content')

    <hr>
    <div class="text-center">
        @if(!$user->name)
        <h1> welcome please set your user name and update information by this button
        </h1>
            <a class="btn btn-info" href="{{route('users.index')}}">update porofile</a>
        @else
<h1 class="text-purple">welcome : {{$user->name}}</h1>
            @endif
    </div>
    <hr>




@endsection

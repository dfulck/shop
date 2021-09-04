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
    @foreach($notifications as $notification)
        <div class="container align-items-center">
            <div class="row">
                <div class="box-body">
                    <div class="alert alert-dark alert-dismissible fade show text-center" role="alert">
                        <button type="button" class="close bg-danger" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times; close</span>
                        </button>
                        <strong>{{$notification->massage}}</strong> this massage sending by Admin

                    </div>
                </div>
            </div>
        </div>
    @endforeach




@endsection

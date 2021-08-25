@extends('Admin.layout.Admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
    <form action="{{route('users.update',$user)}}" class="text-center" method="post" >
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="form-control label-primary" for="name">name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label class="form-control label-primary" for="email">email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label class="form-control label-primary" for="password">password</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <input class="btn btn-success form-control" type="submit" value="edit">
        </div>
    </form>
        </div>
    </div>
</div>



@endsection

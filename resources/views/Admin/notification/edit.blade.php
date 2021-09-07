@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش {{$notification->id}}</h1>
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('notifications.update',$notification)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="massage">massage</label>
                    <input class="form-control" type="text" id="massage" value="{{$notification->massage}}" name="massage">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="edit">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

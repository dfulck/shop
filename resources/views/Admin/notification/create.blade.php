@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد massage</h1>
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('notifications.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="massage">massage</label>
                    <input class="form-control" type="text" id="massage" name="massage">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

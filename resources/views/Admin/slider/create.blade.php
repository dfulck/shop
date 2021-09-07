@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد slider</h1>
            @include('Admin.layout.notification')
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('sliders.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="title">نام slider</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="image">تصویر slider</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

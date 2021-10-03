@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش  {{$slider->title}}</h1>
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('sliders.update',$slider)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="title">نام slider</label>
                    <input class="form-control" value="{{$slider->title}}" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="image">تصویر</label>
                    <img width="500" src="{{url('/storage/app/'.$slider->image)}}" alt="{{$slider->title}}">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ویرایش">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

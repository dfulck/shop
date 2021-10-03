@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش برند {{$brand->name}}</h1>
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('brands.update',$brand)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="name">نام برند</label>
                    <input class="form-control" value="{{$brand->name}}" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="image">تصویر</label>
                    <img width="120" src="{{url('/storage/app/'.$brand->image)}}" alt="{{$brand->name}}">
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

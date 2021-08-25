@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش  گروه مشحصات </h1>
            <form class="form-control font-size-20"  action="{{route('propertyGroups.update',$propertyGroup)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-dark font-size-12  text-bold" for="title">گروه مشخصات </label>
                    <input class="form-control" type="text" id="title" name="title" value="{{$propertyGroup->title}}">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ویرایش">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

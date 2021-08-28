@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش دسته بندی</h1>
            <form class="form-control font-size-20" action="{{route('categories.update',$cat)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="title">نام دسته بندی</label>
                    <input class="form-control" value="{{$cat->title}}" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="category_id">سرگروه دسته بندی</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option
                                @if($category->id==$cat->category_id)
                                    selected
                                @endif
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @foreach($properties as $property)
                        <div class="custom-control custom-checkbox">
                            <input
                                @if($category->HasPropertyGroup($property))
                                checked
                                @endif
                                type="checkbox" name="properties[]" value="{{$property->id}}" class="custom-control-input"
                                   id="{{$property->id}}"/>
                            <label class="custom-control-label pr-4"
                                   for="{{$property->id}}">{{$property->title}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ویرایش">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

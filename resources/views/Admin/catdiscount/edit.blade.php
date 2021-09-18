@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>edit catdiscount</h1>
            @include('Admin.layout.notification')
            <form class="form-control font-size-20"  action="{{route('catdiscounts.update',$catdiscount)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="discount">discount</label>
                    <input class="form-control" value="{{$catdiscount->discount}}" type="text" id="discount" name="discount">
                </div>
                <div class="form-group">
                    <label for="category_id">category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option
                                @if($category->id == $catdiscount->show_category->id)
                                selected
                                    @endif
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

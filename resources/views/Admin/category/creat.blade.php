@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد دسته بندی</h1>
            <form class="form-control font-size-20" action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="title">نام دسته بندی</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="category_id">سرگروه دسته بندی</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="" disabled selected>دسته بندی مورد نظر را انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
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

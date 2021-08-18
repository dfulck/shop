@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد تخفیف</h1>
            <form class="form-control font-size-20" action="{{route('products.discounts.store',$product)}}"
                  enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="discount">میزان تخفیف را وارد نمایید</label>
                    <input min="1" max="100" class="form-control" type="number" id="discount" name="discount">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
            <hr class="hr-lg">
        </div>
    </div>
@endsection

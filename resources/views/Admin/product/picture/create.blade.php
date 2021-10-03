@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد گالری</h1>
            <form class="form-control font-size-20" action="{{route('products.pictures.store',$product)}}"
                  enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="path">عکس گالری را اپلود کنید</label>
                    <input class="form-control" type="file" id="path" name="path">
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ارسال">
                </div>
                @include('Admin.layout.errors')
            </form>
            <hr class="hr-lg">



                <div class="col-sm-12 ">
                    <div class="row ">
                    @foreach($product->pictures as $picture)
<div class="col-sm-3 inline">
                    <div class="card">
                        <img width="300" class="card-img-top img-responsive" src="{{url('/storage/app/'.$picture->path)}}" alt="Card image cap">
                        <div class="card-body">
                            <form action="{{route('products.pictures.destroy',['product'=>$product,'picture'=>$picture])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
</div>
                    <!-- /.card -->
                    @endforeach
                    </div>
                </div>







        </div>
    </div>
@endsection

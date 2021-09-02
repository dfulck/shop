@extends('Admin.layout.Admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">
            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">لیست محصولات</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>details</th>
                                            <th>نام محصول</th>
                                            <th>دسته بندی</th>
                                            <th>برند</th>
                                            <th>اسلاگ</th>
                                            <th>قیمت</th>
                                            <th>تصویر</th>
                                            <th>میزان تخفیف</th>
                                            <th>تاریخ ایجاد</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <th>{{$product->id}}</th>
                                                <th>   <a class="btn btn-info" href="{{route('product.details',$product)}}">details</a></th>
                                                <th>{{$product->name}}</th>
                                                <th>
                                                    <span>{{$product->HasCategoryForProduct($product)->parent->title}}</span>
                                                    <span>{{$product->HasCategoryForProduct($product)->title}}</span>
                                                </th>
                                                <th>{{$product->brand->name}}</th>
                                                <th>{{$product->slug}}</th>
                                                <th>{{$product->cost}}</th>
                                                <th>
                                                    <img width="70" src="{{str_replace('public','/storage',$product->image)}}" alt="{{$product->name}}">
                                                </th>
                                                <th>
                                                    @if(!$product->discount()->exists())
                                                    <a class="btn btn-outline-success" href="{{route('products.discounts.create',$product)}}">ایجاد تخفیف</a>
                                                    @elseif($product->discount()->exists())
                                                        <p class="text text-center text-bold text-info">{{optional($product->discount)->discount}}%</p>
                                                        <form class="align-center" action="{{route('products.discounts.destroy',['product'=>$product,'discount'=>$product->discount])}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="delete" class="btn btn-danger ">
                                                        </form>
                                                        @endif
                                                </th>
                                                <th>{{$product->created_at}}</th>
                                                <th><a class="btn btn-outline-info"
                                                       href="{{route('products.edit',$product)}}">ویرایش</a></th>
                                                <th>
                                                    <form method="post" action="{{route('products.destroy',$product)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-outline-danger" value="حذف">
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                        @include('Admin.layout.errors')
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>جستجو بر اساس id</th>
                                            <th>جستجو بر اساس برند</th>
                                            <th>جستجو بر اساس دسته بندی</th>
                                            <th>جستجو بر اساس نام محصول</th>
                                            <th>جستجو بر اساس نام اسلاگ</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->


        </div>
    </div>
@endsection
@section('script')

    <!-- This is data table -->
    <script src="/Admin./assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Superieur Admin for Data Table -->
    <script src="/Admin/js/pages/data-table.js"></script>


@endsection

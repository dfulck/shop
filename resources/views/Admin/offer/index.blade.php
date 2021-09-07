@extends('Admin.layout.Admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">


            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">برند ها</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">برند</li>
                                    <li class="breadcrumb-item active" aria-current="page">برند ها</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">لیست code</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>code</th>
                                            <th>زمان start</th>
                                            <th>زمان end</th>
                                            <th>زمان ایجاد</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($offers as $offer)
                                            <tr>
                                                <th>{{$offer->id}}</th>
                                                <th>{{$offer->code}}</th>
                                                <th>{{$offer->starts_at}}</th>
                                                <th>{{$offer->expires_at}}</th>
                                                <th>{{$offer->created_at}}</th>
                                                <th><a class="btn btn-outline-info"
                                                       href="{{route('offers.edit',$offer)}}">ویرایش</a></th>
                                                <th>
                                                    <form method="post" action="{{route('offers.destroy',$offer)}}">
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
                                            <th>جستجو بر اساس تاریخ</th>
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

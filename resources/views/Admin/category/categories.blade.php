@extends('Admin.layout.Admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">


            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">دسته بندی ها</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">دسته ها</li>
                                    <li class="breadcrumb-item active" aria-current="page">دسته بندی ها</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button"
                                    data-toggle="dropdown"><i
                                    class="mdi mdi-dots-horizontal"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
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
                                <h3 class="box-title">لیست دسته بندی ها</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام دسته بندی</th>
                                            <th>سرگروه دسته بندی</th>
                                            <th>زمان ایجاد</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <th>{{$category->id}}</th>
                                                <th>{{$category->title}}</th>
                                                <th>{{optional($category->parent)->title}}</th>
                                                <th>{{$category->created_at}}</th>
                                                <th><a class="btn btn-outline-info"
                                                       href="{{route('categories.edit',$category)}}">ویرایش</a></th>
                                                <th>
                                                    <form method="post" action="{{route('categories.destroy',$category)}}">
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
                                            <th>جستجو بر اساس نام</th>
                                            <th>جستجو بر اساس سرگروه</th>
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

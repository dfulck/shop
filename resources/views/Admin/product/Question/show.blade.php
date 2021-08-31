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
                                <h3 class="box-title">لیست پرسش و پاسخ محصول</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product->HasQuestionOrderById($product) as $question)
                                            <tr>
                                                <th>{{$question->id}}</th>
                                                <th>{{$question->question}}</th>
                                                <th>
                                                    <a class="btn btn-yellow" href="{{route('product.questions.show',[$product,$question])}}">Show Answer</a>
                                                </th>
                                                <th><a class="btn btn-outline-info"
                                                       href="{{route('product.questions.edit',[$product,$question])}}">ویرایش</a></th>
                                                <th>
                                                    <form method="post" action="{{route('product.questions.destroy',[$product,$question])}}">
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

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection

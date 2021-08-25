@extends('Admin.layout.Admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border text-center">
                                <h1 class="box-title text-white text-bold bg-dark">  *  Porofile  *   {{optional($user)->name}}   </h1>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>permission</th>
                                            <th>created at</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="font-size-20 text-purple">
                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <th>{{$user->name}}</th>
                                            <th>{{$user->email}}</th>
                                            <th>{{$user->role->title}}</th>
                                            <th>{{$user->created_at}}</th>
                                            <th><a class="btn btn-primary"
                                                   href="{{route('users.edit',$user)}}">ویرایش</a></th>
                                            <th>
                                                <form action="{{route('users.destroy',$user)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="delete">
                                                </form>
                                            </th>
                                        </tr>
                                        </tbody>
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

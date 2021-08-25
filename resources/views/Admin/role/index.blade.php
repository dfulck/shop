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
                                <h1 class="box-title text-white text-bold bg-dark">  *  نقش ها  * </h1>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>role</th>
                                            <th>create permission</th>
                                            <th>created at</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="font-size-20 text-purple">
                                        @foreach($roles as $role)
                                        <tr>
                                            <th>{{$role->id}}</th>
                                            <th>{{$role->title}}</th>
                                            <th>
                                                @foreach($role->permissions as $permission)
                                                <span class="font-size-12">*{{$permission->title}}*</span>
                                                @endforeach
                                            </th>
                                            <th>{{$role->created_at}}</th>
                                            <th><a class="btn btn-primary"
                                                   href="{{route('roles.edit',$role)}}">ویرایش</a></th>
                                            <th>
                                                <form action="{{route('roles.destroy',$role)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="delete">
                                                </form>
                                            </th>
                                        </tr>
                                        @endforeach
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

@extends('Admin.layout.Admin')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-12">
            @if(session('success'))

            @endif
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header with-border text-center">
                                <h1 class="box-title text-white text-bold bg-dark">کاربران</h1>
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
                                            <th>role</th>
                                            <th>created at</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="font-size-20 text-purple">
                                        @foreach($users as $gainer)
                                        <tr>
                                            <th>{{$gainer->id}}</th>
                                            <th>{{$gainer->name}}</th>
                                            <th>{{$gainer->email}}</th>
                                            <th>{{$gainer->role->title}}</th>
                                            <th>{{$gainer->created_at}}</th>
                                            <th>
                                                @if($user->HasRolePermission('edit_user'))
                                                <a class="btn btn-primary"
                                                   href="{{route('user.edit',$gainer)}}">ویرایش</a>
                                            @endif
                                            </th>
                                            <th>
                                                @if($user->HasRolePermission('destroy_user'))
                                                <form action="{{route('user.destroy',$gainer)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="delete">
                                                </form>
                                                    @endif
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

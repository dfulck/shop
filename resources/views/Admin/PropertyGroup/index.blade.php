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
                                <h1 class="box-title text-white text-bold bg-dark">  *  گروه مشخصات   * </h1>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>PropertyGroup</th>
                                            <th>Property</th>
                                            <th>created at</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody class="font-size-20 text-purple">
                                        @foreach($properties as $propertyGroups)
                                            <tr>
                                                <th>{{$propertyGroups->id}}</th>
                                                <th>{{$propertyGroups->title}}</th>
                                                <th><a class="btn btn-secondary" href="{{route('properties.create')}}">add Property</a></th>
                                                <th>{{$propertyGroups->created_at}}</th>
                                                <th><a class="btn btn-primary"
                                                       href="{{route('propertyGroups.edit',$propertyGroups)}}">ویرایش</a></th>
                                                <th>
                                                    <form action="{{route('propertyGroups.destroy',$propertyGroups)}}" method="post">
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

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
                                        @foreach($PropertyGroups as $propertyGroup)
                                            <tr>
                                                <th>{{$propertyGroup->id}}</th>
                                                <th>{{$propertyGroup->title}}</th>
                                                <th>
                                                    @foreach($propertyGroup->Properties as $property)
                                                    <span class="font-size-10">,{{$property->title}}</span>
                                                    @endforeach
                                                </th>
                                                <th>{{$propertyGroup->created_at}}</th>
                                                <th><a class="btn btn-primary"
                                                       href="{{route('propertyGroups.edit',$propertyGroup)}}">ویرایش</a></th>
                                                <th>
                                                    <form action="{{route('propertyGroups.destroy',$propertyGroup)}}" method="post">
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

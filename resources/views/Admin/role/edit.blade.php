@extends('Admin.layout.Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <form action="{{route('roles.update',$role)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class="font-size-30 text-bold" for="title">title</label>
                        <input class="form-control" value="{{$role->title}}" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        @foreach($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="permission[]"
                                       @if($role->HasPermissions($permission->title))
                                       checked
                                       @endif
                                       value="{{$permission->id}}" class="custom-control-input"
                                       id="{{$permission->id}}"/>
                                <label class="custom-control-label pr-4"
                                       for="{{$permission->id}}">{{$permission->title}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success form-control" type="submit" value="edit">
                    </div>
                </form>
                <hr>
                @include('Admin.layout.errors')
            </div>
        </div>
    </div>



@endsection

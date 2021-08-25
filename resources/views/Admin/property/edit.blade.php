@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ایجاد  گروه مشحصات </h1>
            <form class="form-control font-size-20"  action="{{route('properties.update',$property)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-dark font-size-12  text-bold" for="title"> مشخصات </label>
                    <input class="form-control" value="{{$property->title}}" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-12  text-bold" for="propertyGroup"> سرگروه مشخصات </label>
                    <select class="form-control" name="property_groups_id" id="propertyGroup">
                        @foreach($PropertyGroups as $propertyGroup)
                            <option
                                @if($property->property_groups_id==$propertyGroup->id)
                                selected
                                    @endif
                                value="{{$propertyGroup->id}}">{{$propertyGroup->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="edit">
                </div>
                @include('Admin.layout.errors')
            </form>
        </div>
    </div>
@endsection

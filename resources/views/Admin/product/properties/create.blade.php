@extends('Admin.layout.Admin')

@section('content')
    @php
        $propertyGroups = $product->category->propertyGroups;
    @endphp

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>اضافه کردن ویژگی ها برای مجصول {{$product->name}}</h1>
            <form class="form-control font-size-20" action="{{route('product.properties.store',$product)}}"
                  method="post">
                @csrf
                <div class="form-group">
                    <div id="accordion">
                        @foreach($propertyGroups as $groups)

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link btn-primary text-white" data-toggle="collapse"
                                           data-target="#{{$groups->title}}"
                                           aria-expanded="true" aria-controls="{{$groups->title}}">
                                            {{$groups->title}} #{{$groups->id}}
                                        </a>
                                    </h5>
                                </div>

                                <div id="{{$groups->title}}" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                @foreach($groups->properties as $property)
                                                    <div class="row my-3">
                                                        <label class="col-sm-4 text-center font-size-16"
                                                               for="property">{{$property->title}}</label>
                                                        <input class="col-sm-8" id="property" name="properties[{{$property->id}}][value]" type="text">
                                                    </div>
                                                    <hr class="bg-aqua">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="create" class="form-control btn btn-secondary">
                </div>
                @include('Admin.layout.errors')
            </form>
            <hr class="hr-lg">
        </div>
    </div>
@endsection

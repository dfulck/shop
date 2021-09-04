@extends('Admin.layout.Admin')

@section('content')

    @php
        $propertGroups=$product->category->propertyGroups;
    @endphp
    @if($propertGroups)
        <div class="box bg-dark">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1>ویرایش کردن ویژگی ها برای مجصول {{$product->name}}</h1>
                    <form class="form-control font-size-20"
                          action="{{route('product.properties.updateValue',$product)}}"
                          method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <div id="accordion">
                                @foreach($propertGroups as $groups)
                                    <button class="btn btn-purple">  {{$groups->title}} #{{$groups->id}}</button>
                                    @foreach($groups->Properties as $property)
                                        <div class="form-group my-3">
                                            <label class="text-center font-size-16"
                                                   for="property">{{$property->title}}</label>

                                            <div class="badge-success my-2">
                                            @if($property->GetValueProperties($product))
                                                    valu: {{$property->GetValueProperties($product)}}
                                            @endif
                                            </div>
                                            <input type="text" class="form-control"  id="property" name="properties[{{$property->id}}][value]">
                                        </div>
                                        <hr class="bg-aqua">
                                    @endforeach
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <input type="submit" value="send" class="form-control btn btn-secondary">
                        </div>
                        @include('Admin.layout.errors')
                    </form>
                    <hr class="hr-lg">
                </div>
            </div>
        </div>
    @endif
@endsection

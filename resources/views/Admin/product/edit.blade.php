@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <h1>ویرایش محصول</h1>
            <form class="form-control font-size-20" enctype="multipart/form-data" action="{{route('products.update',$product)}}" method="post">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="name">نام محصول</label>
                    <input class="form-control" value="{{$product->name}}" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="slug">slug</label>
                    <input class="form-control" value="{{$product->slug}}" type="text" id="slug" name="slug">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="description">توضیحات</label>
                    <textarea class="form-control" id="description" name="description">{{$product->description}}"</textarea>
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="cost">قیمت</label>
                    <input class="form-control" value="{{$product->cost}}" type="number" id="cost" name="cost">
                </div>
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="image">تصویر</label>
                    <img width="120" src="{{str_replace('public','/storage',$product->image)}}" alt="{{$product->name}}">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                @foreach($categories as $category)
                    <div class="form-group">
                        <label class="text-dark font-size-30  text-bold" for="category_id">{{$category->title}}</label>

                        <select class="form-control" name="category_id" id="category_id">
                            <option value="" disabled selected>دسته بندی مورد نظر را انتخاب کنید</option>
                            <option value="{{$category->id}}"  >انتخاب این دسته بندی</option>
                            @foreach($category->childiren as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
                <div class="form-group">
                    <label class="text-dark font-size-30  text-bold" for="brand_id"> برند</label>
                    <select class="form-control" name="brand_id" id="brand_id">
                        <option value="" disabled selected>برند مورد نظر را انتخاب کنید</option>
                        @foreach($brands as $brand)
                            <option
                                @if($brand->id==$product->brand_id)
                                selected
                                @endif
                                value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-success" type="submit" value="ویرایش">
                </div>
                @include('Admin.layout.errors')
            </form>
            <div class="box bg-dark">
                @php
                    $propertyGroups = $product->category->propertyGroups;
                @endphp

                <div class="container-fluid">
                    <div class="col-sm-12">
                        <h1>ویرایش کردن ویژگی ها برای مجصول {{$product->name}}</h1>
                        <form class="form-control font-size-20" action="{{route('product.properties.updateValue',$product)}}"
                              method="post">
                            @csrf
                            @method('PATCH')
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
                                                                    <input class="col-sm-8" value="{{$property->GetValueProperties($product)}}" id="property" name="properties[{{$property->id}}][value]" type="text">
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
                                <input type="submit" value="edit" class="form-control btn btn-secondary">
                            </div>
                            @include('Admin.layout.errors')
                        </form>
                        <hr class="hr-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

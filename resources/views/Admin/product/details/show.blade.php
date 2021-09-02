@extends('Admin.layout.Admin')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="textbox text-center text-purple">
            <h1 class="">details</h1>
            </div>
            <div class="box" style="margin-top: 7rem">
                    <div class="box-body">
                        <div class="box">
                            <a href="{{route('product.questions.index',$product)}}"
                               class="btn btn-purple form-control btn-lg">Question</a>
                        </div>
                        <div class="box">
                            <a href="{{route('products.pictures.create',$product)}}"
                               class="btn btn-purple form-control btn-lg">Gallery</a>
                        </div>
                        <div class="box">
                            <a href="{{route('product.properties.create',$product)}}"
                               class="btn btn-purple form-control btn-lg">Property</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

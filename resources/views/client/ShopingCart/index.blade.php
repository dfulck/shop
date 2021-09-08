@extends('client.layout.index')




@section('index')



    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="#">حساب کاربری</a></li>
                <li><a href="wishlist.html">لیست علاقه مندی من</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">

                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">لیست علاقه مندی ها</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td class="text-center">تصویر</td>
                                <td class="text-left">نام محصول</td>
                                <td class="text-left">تعداد</td>
                                <td class="text-left">قیمت واحد</td>
                                <td class="text-right">مجموع قیمت واحد</td>
                                <td class="text-right">عملیات</td>
                            </tr>
                            </thead>
                            <tbody id="cart-table-body">
                            @foreach($items as $item)
                                @php
                                    $product=$item['product'];
                                    $productQty=$item['quantity']
                                @endphp
                                <tr id="cart-row-{{$product->id}}">
                                    <td class="text-center"><a href="{{route('products.show',$product)}}"><img
                                                width="100"
                                                src="{{$product->image_path}}"
                                                alt="{{$product->name}}" title="{{$product->name}}"/></a></td>
                                    <td class="text-left"><a
                                            href="{{route('products.show',$product)}}">{{$product->name}}</a></td>
                                    <td class="text-left">{{$productQty}}</td>
                                    <td class="text-right">
                                        <div class="price">{{$product->cost_with_discount}}</div>
                                    </td>
                                    <td class="text-right">
                                        <div class="price">{{$product->cost_with_discount*$productQty}}</div>
                                    </td>
                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="removeFromCart({{$product->id}})" type="button"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--Middle Part End -->
                <div style="font-size: 28px !important;" class="container bg-primary text-white ">
                    <div class="row ">
                        <div class="col-sm-4 ">
                            مجموع لیست
                        </div>
                        <div class="col-sm-4">
                            <span class="text-warning">number of product : </span>
                            {{$totalItems}}
                        </div>
                        <div class="col-sm-4">
                            <span class="text-warning">Price All : </span>
                            {{$totalAmount}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

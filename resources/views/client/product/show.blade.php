@extends('client.layout.index')

@section('index')

    <!--start breadcrumb-->
    <div class="container-fluid">
        <div class="bg-transparent">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="margin-top: 1px">{{$product->category->parent->title}}</li>
                    <li class="breadcrumb-item">{{$product->category->title}}</li>

                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <!--start product -->
    <div class="container-fluid box_product">
        <div class="row bg-success">
            <div class="col-lg-4 bg-white">
                <div class="row">
                    <div class="col-lg-9 col-10">
                        <div class="box_img border-bottom text-center pt-0 pt-md-4">
                            <img src="{{url('/storage/app/'.$product->image)}}" class="img-fluid">
                        </div>
                        <div class="box_list_img mt-3 pt-0 pt-md-5 text-center">
                            <ul class="list-inline">
                                @foreach($product->pictures as $pictures)
                                    <li class="list-inline-item"><img width="100"
                                                                      src="{{url('/storage/app/'.$pictures->path)}}"
                                                                      alt="{{$product->brand->name}}"></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 product-info">
                <div class="row text-center text-md-left ">
                    <div class="col-md-9 pt-3">
                        <h1 class="product-title">
                            {{$product->name}}
                        </h1>
                        <h1 class="product-title">{{$product->slug}}</h1>
                    </div>
                    <div class="col-md-3 text-center box_beenhere">
                        <i class="material-icons beenhere">
                            beenhere
                        </i>
                        <p>?????? ???? ???? ?????? ???? ???????????????? ?????? ?????????? ???? ?????????????? ???????? ??????</p>
                    </div>
                </div>
                <div class="border_bottom"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="product_directory pt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>????????</span>
                                    :
                                    <span>{{$product->brand->name}}</span>
                                </li>
                                <li class="list-inline-item pr-3">
                                    <span>???????? ????????</span>
                                    :
                                    <span><a href="#">
                                        {{$product->category->title}}
                                    </a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="box_color mt-1 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item title">???????????? ?????? :</li>
                                <a href="">
                                    <li class="list-inline-item box_check1">
                                        <div class="check1"><span>????????</span></div>
                                    </li>
                                </a>
                                <a href="">
                                    <li class="list-inline-item box_check1">
                                        <div class="check2"><span>????????</span></div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <br>
                        <div class="product_guarantee mt-3 text-center text-md-left">
                            <i class="material-icons">offline_pin</i>
                            <span>?????????? ???????? ???????? ???????? : ?? ?????? ?????????? ?????????? ????????</span>
                        </div>
                        <hr>
                        <p>{{$product->HasProductRate()}}</p>
                        <hr>
                        @auth
                            <form method="post" action="{{route('product.rate',$product)}}">
                                @csrf
                                <div class="form-group">
                                    <h8> ?????????? ?????????? ?????? ???? ?????? ????????</h8>
                                </div>
                                <div class="form-group">
                                    <ul class="list-inline form-inline ">
                                        <li class="mx-1">
                                            <label class="form-check-label">1
                                                <input value="1" name="like" type="radio" class="form-control" href="#">
                                            </label>
                                        </li>
                                        <li class="mx-1">
                                            <label class="form-check-label">2
                                                <input value="2" name="like" type="radio" class="form-control" href="#">
                                            </label>
                                        </li>
                                        <li class="mx-1">
                                            <label class="form-check-label">3
                                                <input value="3" name="like" type="radio" class="form-control" href="#">
                                            </label>
                                        </li>
                                        <li class="mx-1">
                                            <label class="form-check-label">4
                                                <input value="4" name="like" type="radio" class="form-control" href="#">
                                            </label>
                                        </li>
                                        <li class="mx-1">
                                            <label class="form-check-label">5
                                                <input value="5" name="like" type="radio" class="form-control" href="#">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                @if(!$product->users()->exists())
                                    <div class="form-group">
                                        <input type="submit" value="?????? ??????" class="btn btn-success-outline">
                                    </div>
                                @else
                                    <h3>shoma yekbar nazar dadid</h3>
                                @endif
                            </form>
                        @else
                            <p>???????? ???????? ?????? ?????? ???? ?????? ?????????? ???????? ???????? ???????????? ????????</p>
                            <a class="btn btn-primary" href="{{route('users.create')}}">register/or/login</a>
                        @endauth
                        <div class="border_bottom mt-3"></div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item  mr-0"><i class="material-icons store">store</i></li>
                                <li class="list-inline-item">
                                    <span>??????????????</span>
                                    :
                                    <span><a href="#">??????????</a></span>
                                </li>
                                <li class="seller_rate">
                                    <div class="cart">
                                        <form method="post">
                                            <div class="qty">
                                                <label class="control-label" for="input-quantity">??????????</label>
                                                <input type="number" name="quantity" id="input-quantity" value="1" maxlength="20" max="20"
                                                       class="form-control input-quantity"/>
                                                <div class="clear"></div>
                                            </div>
                                            <button type="button" id="button-cart"
                                                    onclick="addToCart({{$product->id}});"
                                                    class="btn btn-primary btn-lg">???????????? ???? ??????
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-0">
                                    <img src="/client/img/1fb9a3a5.svg" alt="">
                                </li>
                                <li class="list-inline-item mr-2">
                                    <button type="button" id="like-{{$product->id}}" onClick="like({{$product->id}});">
                                        @method('delete')
                                        <a class="btn btn-like text-purple
                                        @if($product->likes()->exists())
                                            like
                                            @endif
                                            ">like</a>
                                    </button>


                                </li>
                            </ul>
                        </div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-0">
                                    <img src="/client/img/warehouse.JPG" width="25" alt="">
                                </li>
                                <li class="list-inline-item mr-2">
                                    <span class="text-info">?????????? ??????????</span>
                                </li>
                            </ul>
                        </div>
                        <div class="border_bottom mt-3"></div>
                        <div class="box_price mt-2 text-center text-md-left">
                            <div class="c-discount__row-container">
                                <div class="c-discount__price">
                                    <div class="c-discount__price--primary">
                                                                    <span
                                                                        class="c-discount__price--now">{{$product->cost_with_discount}}
                                                                        <span>??????????</span></span>
                                        @if($product->has_discount)
                                            <span
                                                class="c-discount__price--original">{{$product->cost}}
                                                                    <span>??????????</span></span>
                                    </div>
                                    <div class="c-discount__price--discount">
                                        <div class="c-discount__price--discount-content">
                                            {{$product->discount->discount}}%
                                            <span> ?????????? </span></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product_params bg-transparent mt-2 text-center text-md-left">
                        <div class="box1">
                            <a href="" class="btn btn-white"><i class="material-icons">store</i>?????????????? / ?????????????? ??????
                                ???????? ??</a>
                        </div>
                        <div class="box2 mt-4">
                            <span>?????????? ?????? ??????????</span>
                            <ul>
                                <li>???????????? ?????? ???????????? : ????????</li>
                                <li>???????????? ?????????? ?????? ?? ?????????? : ??????????</li>
                                <li>???????????????? ???????? : ??????????</li>
                                <li><a href="">?????????? ?????????? +</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pb-4 text-center text-md-left">
                    <div class="col-md-6">
                        <ul class="list-inline">
                            <li class="list-inline-item unfair-price">?????? ???? ???????? ???????? ?????????? ??</li>
                            <li class="list-inline-item unfair-price"><a href="">??????</a></li>
                            <li class="list-inline-item "><a href="">|</a></li>
                            <li class="list-inline-item unfair-price"><a href="">??????</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 box_offer text-right text-center text-md-right">
                        <span><i class="material-icons local_offer">local_offer</i><a href="#">?????????? ?????? ???? ???? ???????? ???????? ??????????????</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end product -->
    <!--start product_feature-->
    <div class="container mt-3 product_feature">
        <div class="row">
            <div class="col box "><a href="#"><img src="/client/img/c99c8b3d.svg" class="img-fluid" alt="">
                    <ul class="list-inline">
                        <li>??????????</li>
                        <li>?????????? ????????????</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/28cf2088.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>??????????</li>
                        <li>?????????? ????????????</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/4c9cdf1f.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>??????????</li>
                        <li>?????????? ????????????</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/d9c5e979.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>??????????</li>
                        <li>?????????? ????????????</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/9aec2c1d.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>??????????</li>
                        <li>?????????? ????????????</li>
                    </ul>

                </a></div>
        </div>
    </div>
    <!--end product_feature-->
    <!--start suppliers-->
    <div class="container mt-4">
        <h1>?????????????? ?????????? :</h1>
        <div class="title_suppliers">
            <span><i class="material-icons">store</i>{{$product->description}}</span>
        </div>
    </div>
    <!--start box-tabs-->
    <div class="container-fluid box-tabs mt-4">
        <ul class="nav nav-tabs nav-tabs-custom border sticky-top" id="myTab">
            <li class="nav-item border-right">
                <a href="#home" class="nav-link " id="home-tab" data-toggle="tab">
                    <i class="material-icons">assignment</i>
                    ????????????
                </a>
            </li>
            <li class="nav-item border-left ">
                <a href="#profile" class="nav-link " id="profile-tab" data-toggle="tab">
                    <i class="material-icons">message</i>
                    ??????????????
                </a>
            </li>

            <li class="nav-item border-left">
                <a href="#contact" class="nav-link active" id="contact-tab" data-toggle="tab">
                    <i class="material-icons">contact_support</i>
                    ???????? ?? ????????
                </a>
            </li>
        </ul>
        <div class="tab-content box-content" id="myTabContent">
            <div class="tab-pane fade bg-white p-5" id="home">
                @php
                    $propertGroups=$product->category->propertyGroups;
                @endphp
                <h4>???????????? ??????</h4>
                <span>{{$product->name}}</span>
                @if($propertGroups)
                    @foreach($propertGroups as $groups)
                        <div class="box_list mt-4">
                            <p class="title"><i class="material-icons">arrow_left</i>{{$groups->title}}</p>
                            <section>
                                <ul class="param_list list-inline">
                                    <div class="container">
                                        @foreach($groups->Properties as $property)
                                            <div class="row pr-md-2">
                                                <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                                    <div class="box_params_list">
                                                        <p class="block border_right_custom1">
                                                            {{$property->title}}
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item col-md-8 p-0 m-0">
                                                    <div class="box_params_list">
                                                        <p class="block border_right_custom2">
                                                            @if($property->GetValueProperties($product))
                                                                {{$property->GetValueProperties($product)}}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </li>
                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </section>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="tab-pane fade bg-white p-5" id="profile">
                <h4>???????????? ?????????????? ???? :</h4>
                <span class="font-weight-bold">???????????? ???????????? (103 ??????)
</span>
                <div class="box_comment container mt-4">
                    <div class="row">
                        <div class="col-md-6 bc1 col-12">
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">???????????????? : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 95%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">????????</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">?????????? ?????????? ?????? ?????? : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 55%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">????????????</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">?????????? ???????? : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 55%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">????????????</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">???????? ???? ?????????? ????????  : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 68%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">????????????</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 bg2">
                            <p>?????? ???? ???? ???????????? ???? ???????? ?????? ???????? ?????? ??????????</p>
                            <span>
                                    ???????? ?????? ???????? ???????? ?????? ?????????? ???????? ???????? ???????????? ?????? ????????. ?????? ?????? ?????????? ???? ???????? ???? ??????????????????? ?????????? ???????????? ?????? ?????? ???? ?????????? ???????? ?????????? ?????? ?????????? ????.

                                </span>
                            <a href="#" class="btn btn_custom3 mt-4 shadow-sm"><i class="material-icons">add_comment</i>????????????
                                ?????? ????????</a>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="container box_filter mt-5 border-bottom">
                        <div class="row">
                            <div class="col-md-6 bf1">
                                <p><i class="material-icons">transit_enterexit</i>?????????? ??????????????</p>
                            </div>
                            <div class="col-md-6 bf2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">???????? ???????? ???? ???????? :</li>
                                    <li class="list-inline-item"><a href="#">?????? ????????????????</a></li>
                                    <li class="list-inline-item"><a href="#" class="active_custom">???????????????? ??????????</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">???????????????? ??????????</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>???????????? ?????? ??????????
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>?????????????? ?????? ???? :</span>
                                    <p><i class="material-icons">store</i><a href="#">???????????? ??????????????????</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>???????? ?????? ?????????? ???? ?????????? ?????? ??????
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">??????????</span>
                                    <br>
                                    <span class="span2">???????? ???????? ???????????????? ???? ?????????? ???? ???????????? ????????
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">????????</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">?????????? ?????? , ???????? ?????? ???????? ?????? ??????????</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            ???????????? ???????? ???? ?????? ???? ?????????? ???????? ?????? ???????? ?????? ?????????? ???????????? ???? ???????? ????????
                                            ??????????
                                            ?????????????? ?????? ???????? ???????? ???? ?????????? ???????? ???? ?????????? ???????? ???????? ?????? ???????? ?????????? ???? ??????
                                            ?????????? ???????? ?????? ????????
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ?????? ?????? ?????? ?????????????? ???????? ?????? ??
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>???????????? ?????? ??????????
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>?????????????? ?????? ???? :</span>
                                    <p><i class="material-icons">store</i><a href="#">???????????? ??????????????????</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>???????? ?????? ?????????? ???? ?????????? ?????? ??????
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">??????????</span>
                                    <br>
                                    <span class="span2">???????? ???????? ???????????????? ???? ?????????? ???? ???????????? ????????
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">????????</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">?????????? ?????? , ???????? ?????? ???????? ?????? ??????????</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            ???????????? ???????? ???? ?????? ???? ?????????? ???????? ?????? ???????? ?????? ?????????? ???????????? ???? ???????? ????????
                                            ??????????
                                            ?????????????? ?????? ???????? ???????? ???? ?????????? ???????? ???? ?????????? ???????? ???????? ?????? ???????? ?????????? ???? ??????
                                            ?????????? ???????? ?????? ????????
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ?????? ?????? ?????? ?????????????? ???????? ?????? ??
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>???????????? ?????? ??????????
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>?????????????? ?????? ???? :</span>
                                    <p><i class="material-icons">store</i><a href="#">???????????? ??????????????????</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>???????? ?????? ?????????? ???? ?????????? ?????? ??????
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">??????????</span>
                                    <br>
                                    <span class="span2">???????? ???????? ???????????????? ???? ?????????? ???? ???????????? ????????
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">????????</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>???????? ??????</span>
                                            <li class="list-inline-item ml-3">?????????? ?????? , ???????? ?????? ???????? ?????? ??????????</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            ???????????? ???????? ???? ?????? ???? ?????????? ???????? ?????? ???????? ?????? ?????????? ???????????? ???? ???????? ????????
                                            ??????????
                                            ?????????????? ?????? ???????? ???????? ???? ?????????? ???????? ???? ?????????? ???????? ???????? ?????? ???????? ?????????? ???? ??????
                                            ?????????? ???????? ?????? ????????
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ?????? ?????? ?????? ?????????????? ???????? ?????? ??
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">?????? 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active bg-white p-5" id="contact">
                <h4 class="font-weight-bold">???????? ?? ????????</h4>
                <span class="font-weight-bold">???????? ?????? ???? ???? ???????? ?????????? ???????? ????????????</span>
                <div class="box_questions container mt-4">
                    <form method="post" action="{{route('product.questions.store',$product)}}">
                        @csrf
                        <div class="form-group">
                            <textarea name="question" class="form-control" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="?????? ????????">
                        </div>
                    </form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-12 m-0 p-0 pt-3 pt-md-0 email_check">
                                <form action="">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"/>
                                        <label class="custom-control-label pr-4" for="customCheck1">
                                            ?????????? ?????????? ???? ???? ???????? ???? ???????? ?????? ???? ???????? ?????????? ???? ???? ?????????? ????????. <br>
                                            ???? ???????????? ???????? ????????? ????????????? ???????????? ?????? ???? ???? <a href="#">???????????? ????????????
                                                ??????????</a>
                                            ???? ???????? ????????
                                            ?????????? ???? ??????.
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="container box_filter mt-5 border-bottom">
                            <div class="row">
                                <div class="col-md-4 bf1">
                                    <p><i class="material-icons">transit_enterexit</i>???????? ???? ?? ???????? ???? ( ???? ???????? )</p>
                                </div>
                                <div class="col-md-8 bf2 text-md-right text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">???????? ???????? ???? ???????? :</li>
                                        <li class="list-inline-item"><a href="#">???????????????? ????????</a></li>
                                        <li class="list-inline-item"><a href="#" class="active_custom">?????????????? ???????? ????
                                                ????????</a></li>
                                        <li class="list-inline-item"><a href="#"> ???????? ?????? ??????</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container box_questions mt-4">
                            @foreach($questions as $question)
                                <div class="row">
                                    <div class="col-md-2 bq1 text-center">
                                        <i class="material-icons">
                                            contact_support
                                        </i>
                                        <br>
                                        <span class="span1">????????</span>
                                        <br>
                                        @auth
                                            <span class="span2">{{auth()->user()->name}}</span>
                                        @endauth
                                    </div>
                                    <div class="col-md-10 bq2">
                                        <p>{{$question->question}} </p>

                                        <div class="row" style="position: relative;top: 100px">
                                            <div class="col-md-5 col-6">
                                    <span class="date">{{$question->created_at}}</span>
                                            </div>
                                            <div class="col-md-7 col-6 text-right">
                                                <p class="d-none d-sm-block">
                                                    ???? ?????? ???????? ???????? ???????? (?? ????????)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 bq1 text-center">
                                        <i class="material-icons highlight">
                                            highlight
                                        </i>
                                        <br>
                                        <span class="span1">????????</span>
                                        <br>
                                        @auth
                                            <span class="span1">{{auth()->user()->name}}</span>
                                        @endauth
                                    </div>
                                    <div class="col-md-10 bq2">
                                        <form action="{{route('questions.answer.store',$question)}}" method="post">
                                            @csrf
                                            <label class="font-size-20" for="answer">answer this question</label>
                                            <div class="form-group">
                                                <textarea name="answer" class="form-control" id="answer"
                                                          rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-info" value="answer">
                                            </div>
                                        </form>
                                    </div>
                                    @foreach($question->getQuestionAnswer($question) as $answer)
                                        <div class="col-md-2 my-2 text-center">
                                            @auth
                                                <span
                                                    class="text-center bg-dark text-white">{{auth()->user()->name}}</span>
                                            @endauth
                                        </div>
                                        <div class="col-md-10 my-2 ">
                                            <p class="form-control text-center">{{$answer->pivot->answer}} </p>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end box-tabs-->
    <!--start slider-->
    <div class="container-fluid mt-3 mb-5">
        <div class="col-12">
            <section class="slider box_shadow">
                <div class="row">
                    <div class="card panel-title-custom">
                        <div class="card-header  card-header-custom">
                            <p>?????????????? ??????????
                            </p>
                        </div>

                        <div class="card-body py-1" style="padding: 50px">

                            <div class="owl-carousel owl-theme">
                                @foreach($product->category->HasCategoryChildirenProduct() as $product)
                                    <div class="item">
                                        <a href="{{route('products.show',$product)}}">
                                            <div class="card panel-custom">
                                                <div class="card-body panel-body-custom">
                                                    <img src="{{url('/storage/app/'.$product->image)}}">
                                                </div>
                                                <div class="card-footer panel-footer-custom">
                                                    <h4>{{$product->name}}</h4>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary">
                                                                    <span
                                                                        class="c-discount__price--now">{{$product->cost_with_discount}}
                                                                        <span>??????????</span></span>
                                                                @if($product->has_discount)
                                                                    <span
                                                                        class="c-discount__price--original">{{$product->cost}}
                                                                    <span>??????????</span></span>
                                                            </div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    {{$product->discount->discount}}%
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>


                </div>

            </section>
        </div>
    </div>
    <!--end slider-->
    <!--end suppliers-->
    <!--start jump-to-top-->
    <div class="container-fluid box_jump_top text-center ">
        <a href="" id="back2Top" class="jump_top pt-2 pb-2">
            <i class="material-icons">
                expand_less
            </i>
            <span>  ?????????? ???? ????????</span>

        </a>
    </div>


@section('scrypt')
    <script>
        $(document).ready(function () {
            $('#back2Top').click(function () {
                $("html,body").animate({scrollTop: 0}, "slow");
                return false;
            });
        })
    </script>
    <script>
        $(document).ready()
        {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                rtl: true,
                margin: 25,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        }
    </script>

@endsection


@endsection

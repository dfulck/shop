@extends('client.layout.index')




@section('index')

    <!--start breadcrumb-->
    <div class="container-fluid">
        <div class="bg-transparent">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="margin-top: 1px"><a
                            href="">{{$product->category->parent->title}}</a></li>
                    <li class="breadcrumb-item"><a href="">{{$product->category->title}}</a></li>

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
                            <img src="{{str_replace('public','/storage',$product->image)}}" class="img-fluid">
                        </div>
                        <div class="box_list_img mt-3 pt-0 pt-md-5 text-center">
                            <ul class="list-inline">
                                @foreach($product->pictures as $pictures)
                                <li class="list-inline-item"><img width="100" src="{{str_replace('public','/storage',$pictures->path)}}" alt="{{$product->brand->name}}"></li>
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
                        <p>بیش از ۲۰ نفر از خریداران این محصول را پیشنهاد داده اند</p>
                    </div>
                </div>
                <div class="border_bottom"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="product_directory pt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <span>برند</span>
                                    :
                                    <span>{{$product->brand->name}}</span>
                                </li>
                                <li class="list-inline-item pr-3">
                                    <span>دسته بندی</span>
                                    :
                                    <span><a href="#">
                                        {{$product->category->title}}
                                    </a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="box_color mt-1 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item title">انتخاب رنگ :</li>
                                <a href="">
                                    <li class="list-inline-item box_check1">
                                        <div class="check1"><span>سفید</span></div>
                                    </li>
                                </a>
                                <a href="">
                                    <li class="list-inline-item box_check1">
                                        <div class="check2"><span>مشکی</span></div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <br>
                        <div class="product_guarantee mt-3 text-center text-md-left">
                            <i class="material-icons">offline_pin</i>
                            <span>سرویس ویژه دیجی کالا : ۷ روز تضمین تعویض کالا</span>
                        </div>
                        <hr>
                        <p>{{$product->HasProductRate($product)}}</p>
                        <hr>
                        @auth
                        <form method="post" action="{{route('product.rate',$product)}}">
                            @csrf
                            <div class="form-group">
                                <h8> میزان رضایت شما از این کالا </h8>
                            </div>
                            <div class="form-group">
                                <ul class="list-inline form-inline ">
                                    <li class="mx-1" >
                                        <label class="form-check-label">1
                                            <input value="1" name="like"  type="radio" class="form-control" href="#">
                                        </label>
                                    </li>
                                    <li  class="mx-1">
                                        <label class="form-check-label">2
                                            <input value="2" name="like"  type="radio" class="form-control" href="#">
                                        </label>
                                    </li>
                                    <li class="mx-1" >
                                        <label class="form-check-label">3
                                            <input value="3" name="like"  type="radio" class="form-control" href="#">
                                        </label>
                                    </li>
                                    <li class="mx-1" >
                                        <label class="form-check-label">4
                                            <input value="4" name="like"  type="radio" class="form-control" href="#">
                                        </label>
                                    </li>
                                    <li class="mx-1" >
                                        <label class="form-check-label">5
                                            <input value="5" name="like" type="radio" class="form-control" href="#">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                          <div class="form-group">
                              <input type="submit" value="ثبت نظر" class="btn btn-success-outline">
                          </div>
                        </form>
                        @else
                            <p>لطفا برای نظر دهی به این محصول وارد جساب کاربری شوید</p>
                            <a class="btn btn-primary" href="{{route('users.create')}}">register/or/login</a>
                        @endauth
                        <div class="border_bottom mt-3"></div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item  mr-0"><i class="material-icons store">store</i></li>
                                <li class="list-inline-item">
                                    <span>فروشنده</span>
                                    :
                                    <span><a href="#">بوسمن</a></span>
                                </li>
                                <li class="seller_rate"><span>رضایت خرید :۵۳%</span></li>
                            </ul>
                        </div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-0">
                                    <img src="/client/img/1fb9a3a5.svg" alt="">
                                </li>
                                <li class="list-inline-item mr-2">
                                    <span>بسته بندی و ارسال توسط دیجی کالا</span>
                                </li>
                            </ul>
                        </div>
                        <div class="product_guarantee mt-2 text-center text-md-left">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-0">
                                    <img src="/client/img/warehouse.JPG" width="25" alt="">
                                </li>
                                <li class="list-inline-item mr-2">
                                    <span class="text-info">آماده ارسال</span>
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
                                                                        <span>تومان</span></span>
                                        @if($product->has_discount)
                                            <span
                                                class="c-discount__price--original">{{$product->cost}}
                                                                    <span>تومان</span></span>
                                    </div>
                                    <div class="c-discount__price--discount">
                                        <div class="c-discount__price--discount-content">
                                            {{$product->discount->discount}}%
                                            <span> تخفیف </span></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product_params bg-transparent mt-2 text-center text-md-left">
                        <div class="box1">
                            <a href="" class="btn btn-white"><i class="material-icons">store</i>فروشنده / گارانتی این
                                کالا ۷</a>
                        </div>
                        <div class="box2 mt-4">
                            <span>ویژگی های محصول</span>
                            <ul>
                                <li>قابلیت پخش موسیقی : دارد</li>
                                <li>قابلیت کنترل صدا و موزیک : ندارد</li>
                                <li>راهنمایی صوتی : ندارد</li>
                                <li><a href="">موارد بیشتر +</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pb-4 text-center text-md-left">
                    <div class="col-md-6">
                        <ul class="list-inline">
                            <li class="list-inline-item unfair-price">ایا از قیمت راضی هستید ؟</li>
                            <li class="list-inline-item unfair-price"><a href="">بله</a></li>
                            <li class="list-inline-item "><a href="">|</a></li>
                            <li class="list-inline-item unfair-price"><a href="">خیر</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 box_offer text-right text-center text-md-right">
                        <span><i class="material-icons local_offer">local_offer</i><a href="#">کالای خود را در دیجی کالا بفروشید</a></span>
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
                        <li>امکان</li>
                        <li>تحویل اکسپرس</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/28cf2088.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>امکان</li>
                        <li>تحویل اکسپرس</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/4c9cdf1f.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>امکان</li>
                        <li>تحویل اکسپرس</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/d9c5e979.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>امکان</li>
                        <li>تحویل اکسپرس</li>
                    </ul>

                </a></div>
            <div class="col box "><a href="#"><img src="/client/img/9aec2c1d.svg" class="img-fluid pf_img" alt="">
                    <ul class="list-inline">
                        <li>امکان</li>
                        <li>تحویل اکسپرس</li>
                    </ul>

                </a></div>
        </div>
    </div>
    <!--end product_feature-->
    <!--start suppliers-->
    <div class="container mt-4">
        <h1>توضیحات محصول :</h1>
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
                    مشخصات
                </a>
            </li>
            <li class="nav-item border-left ">
                <a href="#profile" class="nav-link " id="profile-tab" data-toggle="tab">
                    <i class="material-icons">message</i>
                    کاربران
                </a>
            </li>

            <li class="nav-item border-left">
                <a href="#contact" class="nav-link active" id="contact-tab" data-toggle="tab">
                    <i class="material-icons">contact_support</i>
                    پرسش و پاسخ
                </a>
            </li>
        </ul>
        <div class="tab-content box-content" id="myTabContent">
            <div class="tab-pane fade bg-white p-5" id="home">
                <h4>مشخصات فنی</h4>
                <span>HBQ-I7 Bluetooth Handsfree</span>
                <div class="box_list mt-4">
                    <p class="title"><i class="material-icons">arrow_left</i>مشخصات کلی</p>
                    <section>
                        <ul class="param_list list-inline">
                            <div class="container">
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت پخش موسیقی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                دارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت کنترل صدا و موزیک
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                راهنمایی صوتی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </section>
                </div>
                <div class="box_list mt-4">
                    <p class="title"><i class="material-icons">arrow_left</i>مشخصات کلی</p>
                    <section>
                        <ul class="param_list list-inline">
                            <div class="container">
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت پخش موسیقی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                دارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت کنترل صدا و موزیک
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                راهنمایی صوتی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </section>
                </div>
                <div class="box_list mt-4">
                    <p class="title"><i class="material-icons">arrow_left</i>مشخصات کلی</p>
                    <section>
                        <ul class="param_list list-inline">
                            <div class="container">
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت پخش موسیقی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                دارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                قابلیت کنترل صدا و موزیک
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                راهنمایی صوتی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </section>
                </div>
                <div class="box_list mt-4">
                    <p class="title"><i class="material-icons">arrow_left</i>مشخصات کلی</p>
                    <section>
                        <ul class="param_list list-inline">
                            <div class="container">
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom1">
                                                راهنمایی صوتی
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                دارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <!--   <div class="box_params_list">
                                               <p class="block border_right_custom1">
                                                   قابلیت کنترل صدا و موزیک
                                               </p>
                                           </div>-->
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="row pr-md-2">
                                    <li class="list-inline-item col-md-3 pl-md-1 pr-md-3 p-0 m-0">
                                        <!--   <div class="box_params_list">
                                               <p class="block border_right_custom1">
                                                   راهنمایی صوتی
                                               </p>
                                           </div>-->
                                    </li>
                                    <li class="list-inline-item col-md-8 p-0 m-0">
                                        <div class="box_params_list">
                                            <p class="block border_right_custom2">
                                                ندارد
                                            </p>
                                        </div>
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </section>
                </div>
            </div>
            <div class="tab-pane fade bg-white p-5" id="profile">
                <h4>امتیاز کاربران به :</h4>
                <span class="font-weight-bold">هندفری بلوتوث (103 نفر)
</span>
                <div class="box_comment container mt-4">
                    <div class="row">
                        <div class="col-md-6 bc1 col-12">
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">آرگونومی : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 95%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">عالی</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">کیفیت عمومی پخش صدا : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 55%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">معمولی</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">کیفیت ساخت : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 55%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">معمولی</span>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-lg-5 col-12">
                                    <span class="progress_title">ارزش در برابر قیمت  : </span>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 68%" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-12 text-center text-lg-right px-0">
                                    <span class="product_title2">معمولی</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 bg2">
                            <p>شما هم می توانید در مورد این کالا نظر بدهید</p>
                            <span>
                                    برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید. اگر این محصول را قبلا از دیجی‌کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.

                                </span>
                            <a href="#" class="btn btn_custom3 mt-4 shadow-sm"><i class="material-icons">add_comment</i>افزودن
                                نظر جدید</a>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="container box_filter mt-5 border-bottom">
                        <div class="row">
                            <div class="col-md-6 bf1">
                                <p><i class="material-icons">transit_enterexit</i>نظرات کاربران</p>
                            </div>
                            <div class="col-md-6 bf2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">مرتب سازی بر اساس :</li>
                                    <li class="list-inline-item"><a href="#">نظر خریداران</a></li>
                                    <li class="list-inline-item"><a href="#" class="active_custom">مفیدترین نظرات</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">جدیدترین نظرات</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>خریدار این محصول
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>خریداری شده از :</span>
                                    <p><i class="material-icons">store</i><a href="#">اسمارت الکترونیک</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>خرید این محصول را توصیه نمی کنم
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">نخرید</span>
                                    <br>
                                    <span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>نقاط قوت</span>
                                            <li class="list-inline-item ml-3">هیچی</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>نقاط ضعف</span>
                                            <li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا صدا نمیره</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی که میگن خوبه
                                            همشون
                                            فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر میدن نخرید به خدا
                                            نخرید اصلا خوب نیست
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ایا این نظر برایتان مفید بود ؟
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">بله 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">خیر 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>خریدار این محصول
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>خریداری شده از :</span>
                                    <p><i class="material-icons">store</i><a href="#">اسمارت الکترونیک</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>خرید این محصول را توصیه نمی کنم
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">نخرید</span>
                                    <br>
                                    <span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>نقاط قوت</span>
                                            <li class="list-inline-item ml-3">هیچی</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>نقاط ضعف</span>
                                            <li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا صدا نمیره</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی که میگن خوبه
                                            همشون
                                            فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر میدن نخرید به خدا
                                            نخرید اصلا خوب نیست
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ایا این نظر برایتان مفید بود ؟
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">بله 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">خیر 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container box_users_comment mt-3 p-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_message_light">
                                    <i class="material-icons">shopping_cart</i>خریدار این محصول
                                </div>
                                <div class="box_shopping mt-5">
                                    <span>خریداری شده از :</span>
                                    <p><i class="material-icons">store</i><a href="#">اسمارت الکترونیک</a></p>
                                </div>
                                <div class="box_message_dislike mt-5">
                                    <i class="material-icons">thumb_down_alt</i>خرید این محصول را توصیه نمی کنم
                                </div>
                            </div>
                            <div class="col-md-9 pr-5" style="margin-top:-10px">
                                <div class="box_comment_header mt-4 mt-md-0">
                                    <span class="span1">نخرید</span>
                                    <br>
                                    <span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
</span>
                                </div>
                                <div class="border-bottom mt-3"></div>
                                <div class="row mt-4">
                                    <div class="col-md-6 evaluation-positive">
                                        <ul class="list-inline">
                                            <span>نقاط قوت</span>
                                            <li class="list-inline-item ml-3">هیچی</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 evaluation-negative">
                                        <ul class="list-inline">
                                            <span>نقاط ضعف</span>
                                            <li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا صدا نمیره</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="box_text_comment">
                                            دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی که میگن خوبه
                                            همشون
                                            فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر میدن نخرید به خدا
                                            نخرید اصلا خوب نیست
                                        </p>
                                    </div>
                                </div>
                                <div class="row comments_likes justify-content-end">
                                <span class="mr-4 mt-1">
                                    ایا این نظر برایتان مفید بود ؟
                                </span>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">بله 70</a>
                                    <a href="#" class="btn btn-like mt-1 mt-md-0">خیر 7</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active bg-white p-5" id="contact">
                <h4 class="font-weight-bold">پرسش و پاسخ</h4>
                <span class="font-weight-bold">پرسش خود را در مورد محصول مطرح نمایید</span>
                <div class="box_questions container mt-4">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="7"></textarea>
                        </div>
                    </form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-12 text-center">
                                <a href="#" class="btn btn_custom3 btn-lg shadow-sm">ثبت پرسش</a>
                            </div>
                            <div class="col-md-9 col-12 m-0 p-0 pt-3 pt-md-0 email_check">
                                <form action="">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"/>
                                        <label class="custom-control-label pr-4" for="customCheck1">
                                            اولین پاسخی که به پرسش من داده شد، از طریق ایمیل به من اطلاع دهید. <br>
                                            با انتخاب دکمه “ثبت پرسش”، موافقت خود را با <a href="#">قوانین انتشار
                                                محتوا</a>
                                            در دیجی کالا
                                            اعلام می کنم.
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="container box_filter mt-5 border-bottom">
                            <div class="row">
                                <div class="col-md-4 bf1">
                                    <p><i class="material-icons">transit_enterexit</i>پرسش ها و پاسخ ها ( ۲۲ پرسش )</p>
                                </div>
                                <div class="col-md-8 bf2 text-md-right text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">مرتب سازی بر اساس :</li>
                                        <li class="list-inline-item"><a href="#">جدیدترین پرسش</a></li>
                                        <li class="list-inline-item"><a href="#" class="active_custom">بیشترین پاسخ به
                                                پرسش</a></li>
                                        <li class="list-inline-item"><a href="#"> پرسش های شما</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container box_questions mt-4">
                            <div class="row">
                                <div class="col-md-2 bq1 text-center">
                                    <i class="material-icons">
                                        contact_support
                                    </i>
                                    <br>
                                    <span class="span1">پرسش</span>
                                    <br>
                                    <span class="span2">فرزاد عباسقلی زاده</span>
                                </div>
                                <div class="col-md-10 bq2">
                                    <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                    <div class="row" style="position: relative;top: 100px">
                                        <div class="col-md-5 col-6">
                                    <span class="date"> ۱۶ مهر ۱۳۹۷
</span>
                                        </div>
                                        <div class="col-md-7 col-6 text-right">
                                            <a href="#" class="d-none d-sm-block">
                                                به این پرسش پاسخ دهید (۱ پاسخ)
                                            </a><a href="#" class="d-sm-none d-block">پاسخ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 bq1 text-center">
                                    <i class="material-icons highlight">
                                        highlight
                                    </i>
                                    <br>
                                    <span class="span1">پاسخ</span>
                                    <br>
                                    <span class="span2">حسین زارع</span>
                                </div>
                                <div class="col-md-10 bq2 bg-transparent">
                                    <p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود را خاموش کنید.
                                        دوم: لطفا
                                        کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row footer">
                                        <div class="col-md-5 col-12">
                                    <span class="date">۲۲ مهر ۱۳۹۷
</span>
                                        </div>
                                        <div class="col-md-7 col-12 text-right">
                                            <div class="comments_likes">
                                        <span class="mr-4 mt-1">
                                            ایا این پاسخ برایتان مقید بود ؟
                                        </span>
                                                <a href="#" class="btn btn-like mt-1 mt-md-0">بله 70</a>
                                                <a href="#" class="btn btn-like mt-1 mt-md-0">خیر </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container box_questions mt-4">
                            <div class="row">
                                <div class="col-md-2 bq1 text-center">
                                    <i class="material-icons">
                                        contact_support
                                    </i>
                                    <br>
                                    <span class="span1">پرسش</span>
                                    <br>
                                    <span class="span2">فرزاد عباسقلی زاده</span>
                                </div>
                                <div class="col-md-10 bq2">
                                    <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                    <div class="row" style="position: relative;top: 100px">
                                        <div class="col-md-5 col-6">
                                    <span class="date"> ۱۶ مهر ۱۳۹۷
</span>
                                        </div>
                                        <div class="col-md-7 col-6 text-right">
                                            <a href="#" class="d-none d-sm-block">
                                                به این پرسش پاسخ دهید (۱ پاسخ)
                                            </a><a href="#" class="d-sm-none d-block">پاسخ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 bq1 text-center">
                                    <i class="material-icons highlight">
                                        highlight
                                    </i>
                                    <br>
                                    <span class="span1">پاسخ</span>
                                    <br>
                                    <span class="span2">حسین زارع</span>
                                </div>
                                <div class="col-md-10 bq2 bg-transparent">
                                    <p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود را خاموش کنید.
                                        دوم: لطفا
                                        کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row footer">
                                        <div class="col-md-5 col-12">
                                    <span class="date">۲۲ مهر ۱۳۹۷
</span>
                                        </div>
                                        <div class="col-md-7 col-12 text-right">
                                            <div class="comments_likes">
                                        <span class="mr-4 mt-1">
                                            ایا این پاسخ برایتان مقید بود ؟
                                        </span>
                                                <a href="#" class="btn btn-like mt-1 mt-md-0">بله 70</a>
                                                <a href="#" class="btn btn-like mt-1 mt-md-0">خیر </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <p>محصولات مرتبط
                            </p>
                        </div>

                        <div class="card-body py-1" style="padding: 50px">
                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2836814.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>مچ بند هوشمند شیائومی مدل Mi Band 3</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2481611.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>مچ بند هوشمند مدل M2</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1903438.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>ساعت هوشمند بی اس ان ال مدل A9</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2795704.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>ساعت هوشمند وی سریز مدل A1</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2836814.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>مچ بند هوشمند شیائومی مدل Mi Band 3</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2481611.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>مچ بند هوشمند مدل M2</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1903438.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>ساعت هوشمند بی اس ان ال مدل A9</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/2795704.jpg" alt="">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>ساعت هوشمند وی سریز مدل A1</h4>
                                                <p>12300 هزاز تومان</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


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
            <span>  برگشت به بالا</span>

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

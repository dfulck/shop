<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>دیجی کالا</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="/client/css/bootstrap.css">
    <link rel="stylesheet" href="/client/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="/client/css/icon.css">
    <link rel="stylesheet" href="/client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/client/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/client/css/slider/cssfull.css">
    <link rel="stylesheet" href="/client/css/font-awesome.min.css">
    <link rel="stylesheet" href="/client/css/style.css">

    <link rel="stylesheet" href="/client/css/slider/css1.css" media="screen and (max-width: 1365px)"/>
    <link rel="stylesheet" href="/client/css/slider/css2.css" media="screen and (min-width: 1366px)"/>
    <link rel="stylesheet" href="/client/css/slider/css3.css" media="screen and (min-width: 1680px)"/>
    <!--bootstrap js-->
    <script src="/client/js/popper.min.js"></script>
    <script src="/client/js/jquery.min.js"></script>
    <script src="/client/js/bootstrap.js"></script>
    <script src="/client/js/slider1.js"></script>
    <script src="/client/js/slider2.js"></script>
    <script src="/client/js/owl.carousel.min.js"></script>
    <script src="/client/js/custom.js"></script>
</head>
<body>
<!--start header-->
<div class="container-fluid shadow-sm bg-white">
    <div class="row p-3">
        <div class="col-lg-2 col-md-3 col-sm-3 col-6 pr-2  box-logo">
                <span class="logo">
                </span>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-3 col-6">
            <form>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control rounded-right input_search"
                           placeholder="نام کالا , برند و یا دسته مورد نظر خود را جستجو کنید..">
                    <div class="input-group-prepend">
                        <div class="input-group-text custom-input-group-text rounded-left">
                            <a href="#"><i class="material-icons">search</i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6 dropdown_custom text-right">
            @auth
                <div class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" style="line-height: 40px!important;">
                      {{auth()->user()->email}}
                    </a>
                    <div class="dropdown-menu border-0 shadow rounded-0 dropdown-menu_custom text-center"
                         aria-labelledby="dropdownMenuButton">
                        <div class="btn login_box">
                            <a class=" dropdown-item  dropdown-item-custom py-2 btn btn-info" href="{{route('Admins.panel')}}">مشاهده پروفایل</a>
                        </div>
                            <form action="{{route('users.logout')}}" method="get">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="خروج">
                            </form>
                    </div>
                </div>
            @else
            <div class="dropdown">
                <a class="dropdown-toggle bg-white text-bold" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" style="line-height: 40px!important;">
                    ورود/ثبت نام
                </a>
                <div class="dropdown-menu border-0 shadow rounded-0 dropdown-menu_custom text-center"
                     aria-labelledby="dropdownMenuButton">
                    <div class="btn login_box">
                        <a class="dropdown-item dropdown-item-custom py-2 btn btn-info" href="{{route('login')}}">ورود به دیجی کالا</a>
                    </div>
                    <ul class="list-inline register">
                        <li class="list-inline-item">کاربر جدید هستید؟</li>
                        <li class="list-inline-item"><a href="{{route('users.create')}}">ثبت نام</a></li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-6 col-sm-2 col-6 text-right">
            <a href="/" class="btn btn-outline-info"><i class="material-icons shopping_cart">home</i>خانه
                <span>*</span></a>
        </div>

    </div>
</div>
<!--start menu-->
<nav class="navbar navbar-expand-md navbar-light navbar_custom">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu1">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu1">
        <div class="nav_line"></div>
        <ul class="navbar-nav">
            @foreach($categories as $category)
            <li class="nav-item">
                <span class="nav-link text-white " data-toggle="dropdown">{{$category->title}}</span>
                @if($category->has_childiren)
                <div class="dropdown-menu dropdown-menu_custom1 shadow-sm rounded-bottom border-0"
                     id="custom-main-dropdown-menu">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($category->childiren as $category2)
                            <div class="col-12 col-md-3">
                                <div class="top_link">
                                    <a href="#"><i class="material-icons">
                                            @if($category2->childiren()->exists())
                                            keyboard_arrow_left
                                        @endif
                                        </i>{{$category2->title}}</a>
                                </div>
                                @foreach($category2->childiren as $category3)
                                <ul class="list-group custom-list-group">
                                    <li class="list-group-item border-0 px-0 "><a href="#">{{$category3->title}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                    @endif
            </li>
            @endforeach
        </ul>
        <div class="mr-auto">
            <ul class="navbar-nav special_sale">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">فروش ویژه</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--start top banner-->
<a href="#">
    <div class="container-fluid mt-2 ">
        <div class="top_banner box_shadow ">
            <div></div>
        </div>
    </div>
</a>



@yield('index')




<!--start footer-->
<div class="container-fluid pt-2 bg_footer">
    <div class="row">
        <div class="col-md-3 col-6 serv text-center">
            <img src="/client/img/serv3.svg" alt="">
            <p>ضمانت اصل بودن کالا</p>
        </div>
        <div class="col-md-3 col-6 serv text-center">
            <img src="/client/img/serv4.svg" alt="">
            <p>هفت روز ضمانت بازگشت</p>
        </div>
        <div class="col-md-3 col-6 serv text-center">
            <img src="/client/img/serv2.svg" alt="">
            <p>پرداخت درب منزل</p>
        </div>
        <div class="col-md-3 col-6 serv text-center">
            <img src="/client/img/serv5.svg" alt="">
            <p>پشتیبانی همه روزه</p>
        </div>
    </div>
    <div class="container border-bottom"></div>
    <div class="container border-bottom pb-3 pt-3">
        <div class="row">
            <div class="col">
                <div class="box_footer_links">
                    <p><a href="#">راهنمایی خرید از دیجی کالا</a></p>
                    <ul>
                        <li><a href="#">نحوه ثبت سفارش</a></li>
                        <li><a href="#">رویه ارسال سفارش</a></li>
                        <li><a href="#">شیوه های پرداخت</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="box_footer_links">
                    <p><a href="#">خدمات مشتریان</a></p>
                    <ul>
                        <li><a href="#">پاسخ به پرسش های متداول</a></li>
                        <li><a href="#">رویه های بازگردانی کالا</a></li>
                        <li><a href="#">شرایط استفاده</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="box_footer_links">
                    <p><a href="#">با دیجی‌کالا</a></p>
                    <ul>
                        <li><a href="#">فروش در دیجی‌کالا</a></li>
                        <li><a href="#">همکاری با سازمان‌ها</a></li>
                        <li><a href="#">فرصت‌های شغلی</a></li>
                        <li><a href="#">تماس با دیجی‌کالا</a></li>
                        <li><a href="#">درباره دیجی‌کالا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col mt-3 mt-sm-0">
                <div class="footer_form">
                    <p>از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:
                    </p>
                    <form>
                        <div class="input-group text-right">
                            <input type="text" class="form-control rounded-right bg-white input_search"
                                   placeholder="آدرس ایمیل خود را وارد کنید">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-info border-0 custom-input-group-text rounded-left">
                                    <a href="#" class="text-white">ارسال</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="pt-4">دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:
                    </p>
                    <div class="social_instagram text-center">
                        <a href="#"><img src="/client/img/instagrams.svg" class="px-1" alt="">اینستاگرام دیجی کالا</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="footer_box_right ml-auto">
                <p>هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم</p>
                <ul class="list-inline">
                    <li class="list-inline-item">شماره تماس :<a href="#">۶۱۹۳۰۰۰۰ - ۰۲۱,۹۵۱۱۹۰۹۵ - ۰۲۱ </a></li>
                    <li class="list-inline-item">آدرس ایمیل :<a href="#">info@digikala.com
                        </a></li>
                </ul>
            </div>
            <div class="footer_box_left mr-auto">
                <a href="#"><img src="/client/img/bazar.png"> </a>
                <a href="#"><img src="/client/img/sibapp.png"> </a>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid  py-4">
    <div class="row pr-5 pt-5 offset-1 ">
        <div class="col-lg-6 col-12 footer_digi">
            <p>فروشگاه اینترنتی دیجی کالا , بررسی , انتخاب و خرید آنلاین</p>
            <span>
                دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل کلیدی، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به دیجی‌کالا با یک سایت پر از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
            </span>
        </div>
        <div class="col-md-5 col-12 box_banner  ">
            <div class="row ">
                <img src="/client/img/img_footer.JPG" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="row pt-4 text-center">
        <div class="col-md-3 col-6"><a href=""><img src="/client/img/img_footer1.svg" alt=""></a></div>
        <div class="col-md-3 col-6"><a href=""><img src="/client/img/img_footer2.svg" alt=""></a></div>
        <div class="col-md-3 col-6 pt-2"><a href=""><img src="/client/img/img_footer3.svg" alt=""></a></div>
        <div class="col-md-3 col-6"><a href=""><img src="/client/img/img_footer4.svg" alt=""></a></div>
    </div>
    <div class="container border_bottom1 pt-4 "></div>
    <div class="container text-center copyRight pt-4">
        <p>استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این
            سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.

        </p>
    </div>

</footer>

@yield('scrypt')


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


</body>
</html>

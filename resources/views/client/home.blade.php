@extends('client.layout.index')


@section('index')



    <!--start slider-->
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel1">
                    <div class="carousel-inner rounded box_shadow">
                        @if($sliders->first())
                            @foreach($sliders as $slider)
                        <div class="carousel-item
                         @if($sliders->first()->id==$slider->id)
                         active
                         @endif ">

                            <img height="600" src="{{url('/storage/app/'.$slider->image)}}" class="d-block w-100" alt="{{$slider->title}}">

                        </div>
                            @endforeach
                            @endif
                    </div>
                    <a class="carousel-control-prev prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--start sldier-->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <div class="c-discount">
                        <div class="c-box" style="font-size: 1px!important;">
                            <div class="c-discount__content">
                                <div class="js-discount-container  is-active  c-discount__content-container"
                                     data-id="1">
                                    <div class="c-discount__product js-discount-product  ">
                                        <af
                                            href="#"
                                            aria-label="?????? ?????????? ?????????? ???????????? "
                                            class="c-discount__product-url"></af>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider1.jpg"
                                                             alt="?????? ?????????? ?????????? ???????????? ?????? MX-PS1403 ?????? DV01">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????? ?????????? ??????????
                                                            ???????????? ?????? MX-PS1403 ?????? DV01
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>???????? ?????????? ????????: ??????????</li>
                                                            <li>????????????: ????????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="2">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="?????? ?????????? ???????????? ????????????"
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider2.jpg"
                                                             alt="?????? ?????????? ???????????? ???????????? ?????? Champion ?????? 90 ???????? ????????">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????? ?????????? ????????????
                                                            ???????????? ?????? Champion ?????? 90 ???????? ????????
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>?????? ??????????: ??????</li>
                                                            <li>?????? ??????????: ????????????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="3">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="?????????? ?????????????? ???????????? ???????????????? "
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider3.jpg"
                                                             alt="?????????? ?????????????? ???????????? ???????????????? ?????? Silver DWM0601">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??,??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??,??????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????????? ?????????????? ????????????
                                                            ???????????????? ?????? Silver DWM0601
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>???????? ????????: ????????</li>
                                                            <li>??????????????: ??????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??,??????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="4">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="?????? ?????????? "
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider4.jpg"
                                                             alt="?????? ?????????? ?????? 1-344"></div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????? ?????????? ?????? 1-344
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>??????: ?????? ??????????</li>
                                                            <li>???????? ??????: ????????????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="5">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="???????? ???? ???? ???? 12 ?????? ?????????? "
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider5.jpg"
                                                             alt="???????? ???? ???? ???? 12 ?????? ?????????? ?????? A60 ???????? E27">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">???????? ???? ???? ???? 12 ??????
                                                            ?????????? ?????? A60 ???????? E27
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>?????? ??????????: ??????????</li>
                                                            <li>???????? ???????? ??????????: 10.5 ???? 20 ??????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="6">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="?????? ???????????? ?????????? ???????????? ????????????"
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider6.jpg"
                                                             alt="?????? ???????????? ?????????? ???????????? ???????????? ?????? COQUETTE?????? 100 ???????? ????????">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????? ???????????? ??????????
                                                            ???????????? ???????????? ?????? COQUETTE?????? 100 ???????? ????????
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>?????? ??????????: ??????????</li>
                                                            <li>?????? ??????????: ??????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="7">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="???????? ???????? ????????????"
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider7.jpg"
                                                             alt="???????? ???????? ???????????? ???? ??????"></div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">???????? ???????? ???????????? ????
                                                            ??????
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>?????????? ?????? ??????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="8">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="?????? ?????????? ?????????? ???????????? ??????????????"
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider8.jpg"
                                                             alt="?????? ?????????? ?????????? ???????????? ???????????????? ?????? ???????????? ???? 2808">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">?????? ?????????? ??????????
                                                            ???????????? ???????????????? ?????? ???????????? ???? 2808
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>??????: ?????? ?????????? ?????? ?? ??????????</li>
                                                            <li>?????? ???????? ??????: ?????????? ????????????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="9">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="???????? ????????????? ?????????????????? "
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider9.jpg"
                                                             alt="???????? ????????????? ?????????????????? ?????? KX-TGD310">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">??????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">??????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">???????? ????????????? ??????????????????
                                                            ?????? KX-TGD310
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>?????????? ???????? ?????? ???? ??????: ???? ??????</li>
                                                            <li>?????????? ????????: 1</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">??????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-discount-container    c-discount__content-container"
                                     data-id="10">
                                    <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="???????? ???????? ?????????? INLAY"
                                            class="c-discount__product-url"></a>
                                        <div class="o-grid">
                                            <div class="row no-gutters">
                                                <div class="col-6">
                                                    <div class="c-discount__img js-url">
                                                        <div class="c-discount__bottom-bar"></div>
                                                        <img src="/client/img/imgslider10.jpg"
                                                             alt="???????? ???????? ?????????? INLAY ?????? Exreme Length">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__price">
                                                            <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">????,??????
                                                                    <span>??????????</span></span><span
                                                                    class="c-discount__price--now">????,??????
                                                                        <span>??????????</span></span></div>
                                                            <div class="c-discount__price--discount">
                                                                <div class="c-discount__price--discount-content">
                                                                    ??????
                                                                    <span> ?????????? </span></div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                            ?????????? ???????????? ?????????????????????
                                                        </div>
                                                        <div class="c-discount__title">???????? ???????? ?????????? INLAY
                                                            ?????? Exreme Length
                                                        </div>
                                                        <ul class="c-discount__ul">
                                                            <li>???? ????: ??????</li>
                                                        </ul>
                                                    </div>
                                                    <div class="c-discount__row-container">
                                                        <div class="c-discount__counter c-discount__counter--main">
                                                            <div class="c-counter js-counter-incredible"
                                                                 data-countdown="2018-09-23 00:00:57"
                                                                 data-countdownseconds="27112"></div>
                                                            <div class="c-discount__counter-title">????????
                                                                ?????????????????? ????
                                                                ??????????
                                                                ??????????
                                                            </div>
                                                        </div>
                                                        <div class="c-discount__counter c-discount__counter--finished">
                                                            <div class="c-discount__price c-discount__price--normal">
                                                                <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">????,??????
                                                                    ??????????</span><span class="c-discount__counter-title">
                                                                    ???????? ?????????? ?????????????????????
                                                                </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-discount__aside c-discount__aside_custom">
                                <div class="c-discount__aside-container js-discount-slider">
                                    <ul class="c-discount__aside-ul">
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item   is-active"
                                                                            data-id="1"><span>?????? ?????????? ?????????? ???????????? </span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="2"><span>?????? ?????????? ???????????? ????????????</span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="3"><span>?????????? ?????????????? ???????????? ???????????????? </span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="4"><span>?????? ?????????? </span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="5"><span>???????? ???? ???? ???? 12 ?????? ?????????? </span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="6"><span>?????? ???????????? ?????????? ???????????? ????????????</span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="7"><span>???????? ???????? ????????????</span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="8"><span>?????? ?????????? ?????????? ???????????? ??????????????</span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="9"><span>???????? ????????????? ?????????????????? </span></a>
                                        </li>
                                        <li class="c-discount__aside-li"><a href="#"
                                                                            class="c-discount__aside-a js-discount-item  "
                                                                            data-id="10"><span>???????? ???????? ?????????? INLAY</span></a>
                                        </li>
                                    </ul>
                                    <a href="#"
                                       class="btn btn-info btn_custom1">
                                        <i class="material-icons">
                                            keyboard_arrow_left
                                        </i>
                                        ???????????? ?????? ?????????????????????????
                                    </a></div>
                                <div class="c-discount__aside-btn-next js-discount-slider-next">
                                    <i class="material-icons">
                                        keyboard_arrow_left
                                    </i>
                                </div>
                                <div class="c-discount__aside-btn-prev js-discount-slider-prev">
                                    <i class="material-icons">
                                        keyboard_arrow_right
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--start service-->
    <div class="container-fluid mt-3 pt-2">
        <div class="row bg-white box_shadow">
            <div class="col-md-3 col-6 serv text-center">
                <img src="/client/img/serv3.svg">
                <p>?????????? ?????? ???????? ????????</p>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <img src="/client/img/serv4.svg">
                <p>?????? ?????? ?????????? ????????????</p>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <img src="/client/img/serv2.svg">
                <p>???????????? ?????? ????????</p>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <img src="/client/img/serv5.svg">
                <p>???????????????? ?????? ????????</p>
            </div>
        </div>
    </div>
    <!--start ads-->
    <div class="container-fluid ads mt-3 pt-2">
        <div class="row">
            <div class="col-md-3 col-6 text-center">
                <a href="#">
                    <img src="/client/img/ads1.png" class="w-100 d-block shadow-sm" alt="">
                </a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <a href="#">
                    <img src="/client/img/ads2.png" class="w-100 d-block shadow-sm" alt="">
                </a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <a href="#">
                    <img src="/client/img/ads3.png" class="w-100 d-block shadow-sm" alt="">
                </a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <a href="#">
                    <img src="/client/img/ads4.png" class="w-100 d-block shadow-sm" alt="">
                </a>
            </div>
        </div>
    </div>
    <!--start sldier p-->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-9">
                <section class="slider box_shadow">
                    <div class="card panel-title-custom">
                        <div class="card-header card-header-custom" style="margin-bottom: 60px;">
                            <p>???????????? ?????? ????????</p>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div class="card panel-custom">
                                            <div class="card-body panel-body-custom">
                                                <img src="/client/img/1038130.jpg">
                                            </div>
                                            <div class="card-footer panel-footer-custom">
                                                <h4>???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                                <p>12300 ???????? ??????????</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 mt-3 mt-md-0 ">
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card card-custom shadow-sm ">
                                <div class="card-header card-header-custom text-center">?????????????? ?????? ???????? ???? ???????? ??????
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="card panel-custom2 rounded-0 shadow-sm ">
                                        <div class="card-body text-center panel-body-custom">
                                            <img src="/client/img/3535831.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer panel-footer-custom">
                                            <h4 class="p-2">???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                            <p>123000 ???????? ??????????</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card card-custom">
                                <div class="card-header card-header-custom text-center">?????????????? ?????? ???????? ???? ???????? ??????
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="card panel-custom2">
                                        <div class="card-body text-center panel-body-custom">
                                            <img src="/client/img/3535831.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer panel-footer-custom">
                                            <h4 class="p-2">???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                            <p>123000 ???????? ??????????</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card card-custom">
                                <div class="card-header card-header-custom text-center">?????????????? ?????? ???????? ???? ???????? ??????
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="card panel-custom2">
                                        <div class="card-body text-center panel-body-custom">
                                            <img src="/client/img/3535831.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer panel-footer-custom">
                                            <h4 class="p-2">???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                            <p>123000 ???????? ??????????</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card card-custom">
                                <div class="card-header card-header-custom text-center">?????????????? ?????? ???????? ???? ???????? ??????
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="card panel-custom2">
                                        <div class="card-body text-center panel-body-custom">
                                            <img src="/client/img/3535831.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer panel-footer-custom">
                                            <h4 class="p-2">???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                            <p>123000 ???????? ??????????</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card card-custom">
                                <div class="card-header card-header-custom text-center">?????????????? ?????? ???????? ???? ???????? ??????
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="card panel-custom2">
                                        <div class="card-body text-center panel-body-custom">
                                            <img src="/client/img/3535831.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer panel-footer-custom">
                                            <h4 class="p-2">???? ?????? 15 ?????????? ?????????? ?????? VivoBook X541NA - D</h4>
                                            <p>123000 ???????? ??????????</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--start ads-->
    <div class="container-fluid ads mt-4">
        <div class="row">
            <div class="col-md-3 col-6 serv text-center">
                <a href="#"><img src="/client/img/ads8.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <a href="#"><img src="/client/img/ads5.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <a href="#"><img src="/client/img/ads6.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
            <div class="col-md-3 col-6 serv text-center">
                <a href="#"><img src="/client/img/ads7.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
        </div>
    </div>
    <!--start sldier-->
    {{--    product--}}
    <div class="container-fluid mt-3">
        @foreach($categories as $category)
        <div class="row">
            <div class="col-12">
                <section class="slider box_shadow">
{{--                        @if($category->childiren()->exists())--}}
                        <div class="card panel-title-custom">
                            <div class="card-header card-header-custom">
                                <p>{{$category->title}}</p>
                            </div>
                            @foreach($category->childiren as $child)
                                @foreach($child->getAllSubCategoryProducts() as $product)
                            <div class="card-body">
                                <div class="owl-carousel owl-theme">

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

                                </div>
                            </div>

                                @endforeach
                            @endforeach
                        </div>
{{--                    @endif--}}
                </section>
            </div>
        </div>
        @endforeach
    </div>
    {{--   end product--}}
    <!--start ads-->
    <div class="container-fluid ads mt-3">
        <div class="row">
            <div class="col-6 serv text-center">
                <a href="#"><img src="/client/img/2066.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
            <div class="col-6 serv text-center">
                <a href="#"><img src="/client/img/2070.jpg" class="w-100 d-block rounded" alt=""></a>
            </div>
        </div>
    </div>
    <!--start sldier-->
    {{--    brand --}}
    <div class="container-fluid mt-3">
        <div class="row mb-4">
            <div class="col-12">
                <section class="slider box_shadow">
                    <div class="card panel-title-custom">
                        <div class="card-header card-header-custom">
                            <p>???????? ?????? ????????
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme">
                                @foreach($brands as $brand)
                                    <div class="item1">
                                        <a href="">
                                            <div class="card panel-custom">
                                                <div class="card-body panel-body-custom">
                                                    <img src="{{url('/storage/app/'.$brand->image)}}">
                                                </div>
                                                <div class="text text-info">{{$brand->name}}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    {{--  end  brand --}}
    <!--start jump-to-top-->
    <div class="container-fluid text-center box_jump_top">
        <a href="#" id="back2Top" class="d-block jump_top pt-2 pb-2">
            <i class="material-icons">
                expand_less
            </i>
            <span>?????????? ???? ????????</span>
        </a>
    </div>

@endsection

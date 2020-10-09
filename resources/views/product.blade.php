<!DOCTYPE html>
<html lang="ir">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,shrink-to-fit=no,viewport-fit-cover">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/index/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index/style.css')}}">
    <link media="only screen and (min-width:320px) and (max-width:767px)" rel="stylesheet"
          href="{{ asset('css/index/mob.css')}}">
    <link media="only screen and (min-width:768px) and (max-width:1023px)" rel="stylesheet"
          href="{{ asset('css/index/tab.css')}}">
    <link media="only screen and (min-width:1024px) and (max-width:1199px)" rel="stylesheet"
          href="{{ asset('css/index/larg.css')}}">
    <link rel="icon" href="pic/icon1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="body" class="bg-whait">
<header id="header" class="bg-whait">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-7 " id="btn-menu-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button type="button" data-toggle="collapse" data-target="#mu" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mu">
                    <div class="drop-down">
                        <button class="btn-01">فروشنده <span class="fa fa-angle-down"></span></button>
                        <div class="dropdowncontents">
                            <a href="#">ورود</a>
                            <a href="#">ثبت‌نام</a>
                        </div>
                    </div>
                    <div class="drop-down">
                        <button class="btn-01 ">خریدار <span class="fa fa-angle-down"></span></button>
                        <div class="dropdowncontents">
                            <a href="/login">ورود</a>
                            <a href="/register">ثبت نام</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-5 ">
            <img src="{{asset('pic/logo.svg')}}" alt="logo-page" id="logo">
        </div>
    </div>
</header>
<div id="about">
    <h2>با آف‌تست، رایگان خرید کنید!</h2>
    <p>محصولات فروشندگان مختلف را رایگان یا با تخفیف خرید کنید و محصولاتشان را تبلیغ کنید.</p>
    <h4><strong>آف‌تست </strong> رایگان بوده و خواهد بود.</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="thumb-info">
                <img class="img-responsive"
                     src="http://127.0.0.1:8001/image/{{$promotion['image']}}">
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
            <h3 class="detail-header">
                {{$promotion['title']}}
            </h3>
            <div class="detail-card">
                <div class="detail-desc">
                    {{$promotion['description']}}
                </div>
            </div>
            <div class="my-2">
                <a class="btn btn-lg btn-warning" href="{{$promotion['url']}}" target="_blank">مشاهده</a>
                <a class="btn btn-lg btn-info" href="{{route('panel.request.add', ['productId' => $promotion['id']])}}" target="_blank">تست</a>
            </div>
            <div class="row my-1">
                <div class="col-sm-4" style="display: flex; align-items: center">
                    تعداد آفرهای باقی‌مانده
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-danger">{{$promotion['available_product_count']}}</span>
                </div>
            </div>
            <div class="row my-1">
                <div class="col-sm-4" style="display: flex; align-items: center">
                    حداقل امتیاز لازم برای تست
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-secondary">{{$promotion['minimum_user_experience']}}</span>
                </div>
            </div>
            {{--<div class="row my-1">--}}
                {{--<div class="col-sm-4" style="display: flex; align-items: center">--}}
                    {{--امتیاز دریافتی پس از تست--}}
                {{--</div>--}}
                {{--<div class="col-sm-2">--}}
                    {{--<span class="btn btn-success">{{$promotion['minimum_user_experience']}}</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row my-1">
                <div class="col-sm-4" style="display: flex; align-items: center">
                    قیمت اصلی
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-warning">{{$promotion['full_price']}}</span>
                </div>
            </div>
            <div class="row my-1">
                <div class="col-sm-4" style="display: flex; align-items: center">
                    قیمت تست
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-info">{{$promotion['tester_price']}}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--پایان کارت باکس-->
<div class="clr"></div>
<!--صفحه بندی-->
{{--<div class="pageination-1">--}}
{{--<!-- <a href="#">&laquo;</a> -->--}}
{{--<a href="#" id="act">1</a>--}}
{{--<a href="#">2</a>--}}
{{--<a href="#">3</a>--}}
{{--<a href="#">4</a>--}}
{{--<a href="#">5</a>--}}
{{--<a href="#">6</a>--}}
{{--<a href="#">7</a>--}}
{{--<a href="#">...</a>--}}
{{--<a href="#">&raquo;</a>--}}
{{--</div>--}}
<!--پایان صفحه بندی-->
<div class="clr"></div>
<!--فوتر-->
<footer class="footer text-whait">
    <h1>OFFTEST.IR</h1>
    <div class="row">
        <div class="col-12 col-md-9 col-lg-8">
            <p>محصولات خود را با تخفیف تبلیغ کنید و شانس خود را برای فروش واقعی در مارکت‌پلیس‌ها بالا ببرید.</p>
            <hr id="footer-hr">
            <p>&copy;تست‌آف
            </p>
        </div>
        <div class="col-12 col-md-3 col-lg-4">
            <h4>ما را دنبال کنید:</h4>
            <a href="#" title="instagram" id="instagram"><i class="fa fa-instagram" style="font-size:25px"></i></a>
            {{--<a href="#" title="facebook" id="facebook"><i class="fa fa-facebook-official"--}}
                                                          {{--style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="github" id="github"><i class="fa fa-github" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="skype" id="skype"><i class="fa fa-skype" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="telegram" id="telegram"><i class="fa fa-telegram" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="twitter" id="twitter"><i class="fa fa-twitter" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="whatsapp" id="whatsapp"><i class="fa fa-whatsapp" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="wikipedia" id="wikipedia"><i class="fa fa-wikipedia-w" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="youtube" id="youtube"><i class="fa fa-youtube" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="android" id="android"><i class="fa fa-android" style="font-size:25px"></i></a>--}}
            {{--<a href="#" title="apple" id="apple"><i class="fa fa-apple" style="font-size:25px"></i></a>--}}
        </div>
    </div>
</footer>
<!--پایان فوتر-->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
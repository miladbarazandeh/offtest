<!DOCTYPE html>
<html lang="ir">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,shrink-to-fit=no,viewport-fit-cover">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/index/style.css">
    <link media="only screen and (min-width:320px) and (max-width:767px)" rel="stylesheet" href="css/index/mob.css">
    <link media="only screen and (min-width:768px) and (max-width:1023px)" rel="stylesheet" href="css/index/tab.css">
    <link media="only screen and (min-width:1024px) and (max-width:1199px)" rel="stylesheet" href="css/index/larg.css">
    <link rel="stylesheet" href="css/index/bootstrap.min.css">
    <link rel="icon" href="pic/icon1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="body" class="bg-whait">
<!--هدر لوگو دکمه-->
<header id="header" class="bg-whait">
    <div class="row">
        <!--دکمه های منو -->
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
        <!--پایان دکمه های منو -->
        <!--لوگو سایت -->
        <div class="col-sm-12 col-md-4 col-lg-5 ">
            <img src="https://de.testzon.com/img/logo.png" alt="logo-page" id="logo">
        </div>
    </div>
    <!--پایان لوگو سایت -->
</header>
<!--پایان هدر-->
<div class="clr"></div>
<!--دباره سایت-->
<div id="about">
    <h2>با آف‌تست، رایگان خرید کنید!</h2>
    <p>محصولات فروشندگان مختلف را رایگان یا با تخفیف خرید کنید و محصولاتشان را تبلیغ کنید.</p>
    <h4><strong>آف‌تست </strong> رایگان بوده و خواهد بود.</h4>
</div>
<!--پایان درباره-->
<div class="clr"></div>
<!--دکمه ها-->
<div class="container">
    <div class="dropdown">
        <label for="1">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-collection-fill" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7z"/>
                <path fill-rule="evenodd"
                      d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
            </svg>
            دسته‌بندی</label>
        <button id="btn-1" name="1" class="dropdown-toggle" data-toggle="dropdown"><span class="caret">همه</span>
        </button>
        <div class="dropdown-menu">
            <a href="#">دیجی‌کالا</a>
            <a href="#">اسنپ‌فود</a>
        </div>
    </div>
    <div class="dropdown">
        <label for="2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sort-down-alt" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-1 0v-10A.5.5 0 0 1 3 3z"/>
                <path fill-rule="evenodd"
                      d="M5.354 11.146a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L3 12.793l1.646-1.647a.5.5 0 0 1 .708 0zM7 6.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5zm0 3a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5zm0 3a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5zm0-9a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0-.5.5z"/>
            </svg>
            مرتب‌سازی</label>
        <button id="btn-2" name="2" class="dropdown-toggle" data-toggle="dropdown"><span class="caret">جدیدترین</span>
        </button>
        <div class="dropdown-menu">
            <a href="#">محبوب‌ترین</a>
            <a href="#">جدیدترین</a>
        </div>
    </div>
    <!--پایان دکمه ها-->
    <div class="clr"></div>
    <hr>
    <div class="clr"></div>
    <!--کارت باکس ها-->
    <div class="card-box">
        <div class="row">
            @foreach($promotions as $promotion)
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="box">
                        <div class="tooltip-1 bg-blue">{{$promotion['minimum_user_experience']}}<span
                                    class="tooltiptext-1">حداقل امتیاز لازم برای این پیشنهاد</span></div>
                        {{--<span class="tooltip-2 bg-blue">+1<span class="tooltiptext-1">امتیاز دریافتی برای این پیشنهاد</span></span>--}}
                        <a href="{{route('product', ['id' => $promotion['id']])}}"><img src="http://127.0.0.1:8001/image/{{$promotion['image']}}" alt=""></a>
                        <div class="col-sm-12 pl-0 pr-0">
                            <p class="card-name">{{$promotion['title']}}</p>
                            <p class="card-price">قیمت اصلی: <span class="span-1">{{$promotion['full_price']}} تومان</span></p>
                        </div>
                        <div class="row col-12 m-0 pl-0 pr-0">
                            <div class="col-9 pl-0 pr-0 card-price">قیمت تستر: <span class="span-2">{{$promotion['tester_price']}} تومان</span></div>
                            <div class="col-2 pl-0 pr-0 tooltip-2 bg-blue">+{{$promotion['available_product_count']}}<span class="tooltiptext-1">امتیاز دریافتی برای این پیشنهاد</span>
                            </div>
                        </div>
                        <a class="btn btn-warning card-btn" href="{{route('product', ['id' => $promotion['id']])}}">بیشتر بخوانید</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{$promotions->links()}}
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
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>驾考答题系统</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
       .container {
           min-width :1200px;
           display: flex;
           min-height: 100vh;
           flex-direction: column;
       }
        .layout-user {
            height: 34px;
            line-height: 20px;
            padding: 7px 0;
            background: #FAFAFA;
            color : #999;
        }
        .layout-user>.content {
            width : 1200px;
            margin: 0 auto;
            position: relative;
        }
        .layout-user>.content .left-link {
            float: left;
        }

        li, ol, ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .layout-user>.content .right-link {
            float: right;
        }
        a {
            font-size: inherit;
            color: inherit;
        }
        a {
            text-decoration: none;
        }
        a, button {
            cursor: pointer;
        }
        div {
            display: block;
        }
        .layout-navigation>.navigation-content {
            width: 100%;
            background-color: #37B5F8;
            color: #fff;
        }
        .layout-navigation>.navigation-content>.nav-w {
            width: 1200px;
            margin: auto;
            height: 50px;
            line-height: 50px;
            font-size: 16px;
            text-align: left;
        }
        .layout-navigation>.navigation-content>.nav-w, .layout-navigation>.navigation-top .search-w input, .layout-navigation>.navigation-top>.logo-w {
            font-family: "Microsoft YaHei","Hiragino Sans GB","Hiragino Sans GB W3","Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .layout-navigation>.navigation-content>.nav-w>.menu-jx {
            position: relative;
            overflow: visible;
        }
        .layout-navigation>.navigation-content>.nav-w>li {
            display: inline-block;
            padding: 0;
            vertical-align: top;
            width: 108px;
            text-align: center;
        }

        .layout-navigation>.navigation-content>.nav-w>li a {
            display: block;
            width: 100%;
            height: 100%;
        }
        .layout-navigation>.navigation-content>.nav-w>.menu-jx .drop-w {
            font-size: 14px;
            display: none;
            position: absolute;
            top: 50px;
            width: 100%;
            background-color: #fff;
            z-index: 2;
            line-height: 40px;
            padding: 0 8px;
            color: #666;
            box-shadow: 0 0 20px rgba(0,0,0,.1);
        }
        .container .layout-article {
            width: auto;
            margin: 0;
        }
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        element.style {
            transform: translate3d(-7680px, 0px, 0px);
            transition-duration: 0ms;
        }
        .swiper-container-android .swiper-slide, .swiper-wrapper {
            -webkit-transform: translate3d(0,0,0);
            -moz-transform: translate3d(0,0,0);
            -o-transform: translate(0,0);
            -ms-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }
        .swiper-wrapper {
            z-index: 1;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            -o-transition-property: -o-transform;
            -ms-transition-property: -ms-transform;
            transition-property: transform;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }
        .swiper-slide, .swiper-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
        }
        .com-home-banner>.swiper-container .swiper-slide {
            width: 100%;
            height: 380px;
            margin: 0 auto;
        }
        .com-home-banner>.swiper-container .swiper-slide a {
            display: inline-block;
            width: 100%;
            height: 380px;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%;
        }
        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
            -webkit-transform: translate3d(0,0,0);
            -ms-transform: translate3d(0,0,0);
            -o-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
            z-index: 10;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px;
        }
        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer;
        }
        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: .2;
        }
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff;
        }
        .com-home-banner>.menu-container {
            position: relative;
            width: 1200px;
            height: 0;
            margin: 0 auto;
            overflow: visible;
        }
        .com-home-banner>.menu-container>.banner-menu {
            position: absolute;
            top: -358px;
            left: 0;
            width: 280px;
            z-index: 1;
            padding: 0 20px;
            background-color: rgba(255,255,255,.9);
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-title {
            line-height: 50px;
            font-size: 20px;
            border-bottom: 1px dotted #ddd;
            text-align: center;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list .icon1 {
            background: url(../files/967c5f5….png) left center no-repeat;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list>li {
            padding: 18px 20px 18px 50px;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list>li>.p1 {
            color: #37B5F8;
            font-size: 16px;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list>li>.p2 {
            margin-top: 5px;
            color: #666;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list .icon2 {
            background: url(../files/9bfc61e….png) left center no-repeat;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list .icon3 {
            background: url(../files/5061edd….png) left center no-repeat;
        }
        .com-home-banner>.menu-container>.banner-menu>.menu-list .icon4 {
            background: url(../files/ef73328….png) left center no-repeat;
        }
    </style>
</head>
<body>
    <div class="container home" data-sp="0" ref="body">
        <div class="layout-user clear-cache" data-sp="0.1">
            <div class="content clearfix">
                <ul class="left-link">
                    <li>
                        <a href="">题库：<span class="blue2">小车</span></a>
                    </li>
                </ul>
                <div class="right-link">
                    <a href="login">登录</a>
                </div>
            </div>
        </div>
        <div class="layout-header" data-sp="0.2">
            <div class="layout-navigation clearfix" data-sp="0.3">
                <div class="navigation-content">
                    <ul class="nav-w clearfix">
                        <li><a href="" class="active">首页</a></li>
                        <li class="menu-jx">
                            <a href="" class="active">模拟考试</a>
                            <div class="drop-w">
                                <a href="https://www.jiakaobaodian.com/mnks/kemu1/car-beijing.html">科目一</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu2/car-beijing.html">科目二</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu3/car-beijing.html">科目三</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu4/car-beijing.html">科目四</a>
                            </div>
                        </li>
                        <li class="menu-jx">
                            <a href="" class="active">找驾校</a>
                            <div class="drop-w">
                                <a href="https://www.jiakaobaodian.com/mnks/kemu1/car-beijing.html">找驾校</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu2/car-beijing.html">找教练</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu3/car-beijing.html">找陪练</a>
                            </div>
                        </li>
                        <li><a href="" class="active">驾考圈</a></li>
                        <li><a href="" class="active">学车指南</a></li>
                        <li><a href="" class="active">学车视频</a></li>
                        <li><a href="" class="active">交通标志</a></li>
                        <li><a href="" class="active">软件下载</a></li>
                        <li><a href="" class="active">驾校帮</a></li>
                        <li class="menu-jx">
                            <a href="" class="active">买新车</a>
                            <div class="drop-w">
                                <a href="https://www.jiakaobaodian.com/mnks/kemu1/car-beijing.html">买车网</a>
                                <a href="https://www.jiakaobaodian.com/mnks/kemu2/car-beijing.html">平行之家</a>
                            </div>
                        </li>
                        <li><a href="" class="active">二手车</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="layout-article" ref="comMain" data-sp="0.6">
            <div  class="page-home">
                <div class>
                    <div class="com-home-banner" data-sp="0.26">
                        <div class="swiper-container home-banner-swiper swiper-container-horizontal" ref="wrapper" style="width: 100%">
                            <div class="swiper-wrapper" style="transform: translate3d(-7595px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" style="width: 1519px">
                                    <a target="_blank" rel="nofollow" href="https://www.jiaxiaobang.com.cn/cooperate/#/?from=jiakao_web" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_jiaxiaobang.jpg') center center no-repeat;background-size: auto 100%; "></a>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1519px;">
                                    <a target="_blank" rel="nofollow" href="https://www.jiakaobaodian.com/download" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_download.jpg') center center no-repeat;background-size: auto 100%"></a>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 1519px;">
                                    <a target="_blank" rel="nofollow" href="https://www.mucang.cn/company/honor/" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_new1.png') center center no-repeat;background-size: auto 100%"></a>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1519px;">
                                    <a target="_blank" rel="nofollow" href="https://www.mucang.cn/jiaolianbaodian/?from=jxrz-topbanner" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_jiaolian.jpg') center center no-repeat;background-size: auto 100%; "></a>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" style="width: 1519px;">
                                    <a target="_blank" rel="nofollow" href="https://www.jiaxiaobang.com.cn/cooperate/#/?from=jiakao_web" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_jiaxiaobang.jpg') center center no-repeat;background-size: auto 100%; "></a>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 1519px;">
                                    <a target="_blank" rel="nofollow" href="https://www.jiakaobaodian.com/download" class="a-dis" style="background:url('/core-assets/static/images/common/home_banner_download.jpg') center center no-repeat;background-size: auto 100%"></a>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                            </div>
                        </div>
                        <div class="menu-container">
                            <div class="banner-menu">
                                <p class="menu-title">学车流程</p>
                                <ul class="menu-list">
                                    <li class="icon1">
                                        <p class="p1"><a target="_blank" href="https://www.jiakaobaodian.com/mnks/kemu1/car-beijing.html">科目一</a></p>
                                        <p class="p2">真实还原交管局考题难度</p>
                                    </li>
                                    <li class="icon2">
                                        <p class="p1"><a target="_blank" href="https://www.jiakaobaodian.com/mnks/kemu2/car-beijing.html">科目二</a></p>
                                        <p class="p2">官方视频，详解考点</p>
                                    </li>
                                    <li class="icon3">
                                        <p class="p1"><a target="_blank" href="https://www.jiakaobaodian.com/mnks/kemu3/car-beijing.html">科目三</a></p>
                                        <p class="p2">全方位讲解，攻克难点</p>
                                    </li>
                                    <li class="icon4">
                                        <p class="p1">
                                            <a target="_blank" href="https://www.jiakaobaodian.com/mnks/kemu4/car-beijing.html">科目四</a></p>
                                        <p class="p2">驾考新政，已更新题库</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

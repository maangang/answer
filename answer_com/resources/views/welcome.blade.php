<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>秋名山驾照考核</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img.58cdn.com.cn/jxedt/logos/favicon.ico">
    <meta charset="UTF-8">
    <meta name="baidu-site-verification" content="JU12JdpLM3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reset.css">{{--搜索类型的控制--}}
    <link rel="stylesheet" href="./css/comm_style.css">{{--大图上所有导航栏样式--}}
    <link rel="stylesheet" href="./css/idangerous.css">{{--大图展示--}}
    <link rel="stylesheet" href="./css/bootstrap.css">{{--学车流程--}}
    <link rel="stylesheet" href="./css/comm_style.css">{{--学车流程--}}
    <link rel="stylesheet" href="./css/footer.css">{{--学车流程--}}
    <link rel="stylesheet" href="./css/font_949786_v8zsbvaxz6p.css">{{--导航栏VIP命题--}}
</head>
<style>
    .comment-header-vip-describe .jxedt-VIP{
        font-size: 14px;
        color: #00c356;
    }
</style>
<!--[if IE 9]>
<style type="text/css">
    .rank_card_jx,.rank_card_jl,.rank_card_pl{
        height:640px !important;
    }
</style>
<![endif]-->
<body>

<div class="nav-wrap">
    <nav class="comment-header-nav">
<!-- 联系 -->
        <div class="comment-header-contact">
            <div class="comment-header-left">
                <span class="comment-header-vip-describe">
                    <i class="iconfont jxedt-VIP"></i>
                    <a href="" onclick="clickLog('from=JXEDT_HEADER_VIP')">VIP真题</a>
                </span>
                <span class="comment-header-phone-describe">秋名山驾照考核热线:
                    <span class="comment-header-phone">0315-666666</span>
                </span>
                <?php if(empty(session('name'))){ ?>
                <div class="comment-login-1" style="display:inline-block;">
                    <span class="btn-span"><a href="logins">登录</a></span>
                    <span class="btn-span"><a href="register" target="_blank">注册</a></span>
                </div>
                <?php }else{?>
                <div class="comment-login-1" style="display:inline-block;">
                    <span class="btn-span">欢迎老司机：</span>
                    <span class="btn-span"><?php echo session('name'); ?></span>
                </div>
                <?php }?>
           </div>
        </div>

<!-- 搜索 -->
        <div class=" comment-header-search">
            <div class="comment-header-search-logo">
                <a href="http://www.jxedt.com/">
                    <img src="./image/timg.jpg" alt="" style="width:100px;height:54px">
                </a>
            </div>
            <div class="question">
                <div class="question_title">
                    <span>题库：</span>
                    <span class="comment-header-car" topname="ckm" name="小车">小车</span>
                    {{--<img class="comment-header-search-position-city" src="./image/city.png" alt="">--}}
                </div>
                <div class="question_list">
                    <ul class="drive_card">
                        <li>
                            <span>驾驶证：</span>
                        </li>
                        <li>
                            <a danname="ckm" href="" onclick="clickLog('from=JXEDT_TK_XC')" class="question-active">小车</a>
                        </li>
                        <li>
                            <a danname="akm" href="" onclick="clickLog('from=JXEDT_TK_KC')">客车</a>
                        </li>
                        <li>
                            <a danname="bkm" href="" onclick="clickLog('from=JXEDT_TK_HC')">货车</a>
                        </li>
                        <li>
                            <a danname="ekm" href="" onclick="clickLog('from=JXEDT_TK_MTC')">摩托车</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="comment-header-search-text">
                <input type="hidden" id="searchType" value="jx">
                <input class="search-content" type="text" placeholder="请输入关键字：如驾校名称">
                <ul class="search-content-toggle">
                    <li class="dropdown">
                        <a href="#" data-search-type="jiaxiao" class="dropdown-toggle" id="tutorial">
                            驾校
                            <div class="down"></div>
                        </a>
                        <ul class="dropdown-menu" style="display: none;">
                            <li>
                                <a data-search-type="jiaxiao" href="javascript:void(0);">驾校</a>
                            </li>
                            <li>
                                <a data-search-type="jl" href="javascript:void(0);">教练</a>
                            </li>
                            <li>
                                <a data-search-type="pl" href="javascript:void(0);">陪练</a>
                            </li>
                            <li>
                                <a data-search-type="zh" href="javascript:void(0);">综合</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="comment-header-search-btn" onclick="clickLog('from=JXEDT_HTAB_SEARCH')">搜索</span>
            </div>
        </div>

<!-- 导航 -->
        <div>
            <div class="comment-header-menu">
                <ul class="comment-header-menu-ul">
                    <li class="start-menu">
                        <a href="http://www.jxedt.com/" linkrul="www" onclick="clickLog('from=JXEDT_HTAB_HOME')" style="color: rgb(0, 195, 86);">首页</a>
                    </li>
                    <li class="header-menu-dropdown">
                        <a href="http://mnks.jxedt.com/" onclick="clickLog('from=JXEDT_HTAB_MNKS')" style="color: rgb(74, 74, 74);">
                            模拟考试
                            <div class="down"></div>
                        </a>
                        <div class="header-menu-dropdown-content">
                            <p>
<a href="examLists?name=1&id=<?php echo session('id'); ?>">小车试题</a>
                            </p>
                            <p>
                                <a href="examLists?name=2">客车试题</a>
                            </p>
                            <p>
                                <a href="examLists?name=3">货车试题</a>
                            </p>
                            <p>
                                <a href="examLists?name=4">摩托车试题</a>
                            </p>
                        </div>
                    </li>

                    <li>
                        <a href="http://vip.jxedt.com/" onclick="clickLog('from=JXEDT_HTAB_VIP')" style="color: rgb(74, 74, 74);">VIP真题</a>
                    </li>
                    <li>
                        <a href="http://jiaxiao.jxedt.com/" linkrul="jiaxiao" data-track="JXEDT_HTAB_JX" onclick="linkclick(this)" style="color: rgb(74, 74, 74);">驾校</a>
                    </li>
                    <li>
                        <a href="http://jl.jxedt.com/" linkrul="jl" data-track="JXEDT_HTAB_JL" onclick="linkclick(this)" style="color: rgb(74, 74, 74);">教练</a>
                    </li>
                    <li>
                        <a href="http://pl.jxedt.com/" linkrul="pl" data-track="JXEDT_HTAB_PL" onclick="linkclick(this)" style="color: rgb(74, 74, 74);">陪练</a>
                    </li>
                    <li>
                        <a href="http://tv.jxedt.com/" linkrul="tv" onclick="clickLog('from=JXEDT_HTAB_VIDEO')" style="color: rgb(74, 74, 74);">学车视频</a>
                    </li>
                    <li>
                        <a href="http://zhinan.jxedt.com/" linkrul="zhinan" onclick="clickLog('from=JXEDT_HTAB_ZHINAN')" style="color: rgb(74, 74, 74);">学车指南</a>
                    </li>
                    <li>
                        <a href="https://jumpluna.58.com/i/2cd7k1m4197pnc46zg" target="_blank" onclick="clickLog('from=JXEDT_HTAB_2USEDCAR')" style="color: rgb(74, 74, 74);">二手车</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</div>

<div class="commonhead_line" style="border-top: 1px solid rgb(0, 195, 86); display: none;"></div>

<link rel="stylesheet" href="./css/jx_index.css">
<div class="home">

    <div class="banner banner_top">
                <div class="swiper-container-banner" style="display: block;">
            <div class="swiper-wrapper" style="width: 6076.8px; height: 360px; transform: translate3d(-3038.4px, 0px, 0px); transition-duration: 1s;"><div class="swiper-slide swiper-slide-duplicate" style="width: 1519.2px; height: 360px;">
                                                                                                            <a href="javascript:void(0);">
                                            <img data-src="//pic1.58cdn.com.cn//brandads/n_v2f0e76515e929459b8515e270b9abfed1_5725c6ad31bf6884.png?h=360&amp;w=1519&amp;ss=1&amp;crop=1&amp;cpos=middle" src="" alt="">
                                        </a>
                                                                                                </div>

                                                            <div class="swiper-slide" style="width: 1519.2px; height: 360px;">
                                                                                                            <a href="http://api.jxedt.com/jump/eJibgWga" target="_blank">
                                            <img data-src="//pic1.58cdn.com.cn//brandads/n_v2456fe322261540a49bc75cbf4a1c9efd_4329f6901bd95b57.png?h=360&amp;w=1519&amp;ss=1&amp;crop=1&amp;cpos=middle" src="./image/n_v2456fe322261540a49bc75cbf4a1c9efd_4329f6901bd95b57.png" alt="">
                                        </a>
                                                                                                </div>
                                                                                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1519.2px; height: 360px;">
                                                                                                            <a href="javascript:void(0);">
                                            <img data-src="//pic1.58cdn.com.cn//brandads/n_v2f0e76515e929459b8515e270b9abfed1_5725c6ad31bf6884.png?h=360&amp;w=1519&amp;ss=1&amp;crop=1&amp;cpos=middle" src="./image/timg1.jpg" alt="">
                                        </a>
                                                                                                </div>


                <div class="swiper-slide swiper-slide-duplicate" style="width: 1519.2px; height: 360px;">
                                                                                                            <a href="http://api.jxedt.com/jump/eJibgWga" target="_blank">
                                            <img data-src="//pic1.58cdn.com.cn//brandads/n_v2456fe322261540a49bc75cbf4a1c9efd_4329f6901bd95b57.png?h=360&amp;w=1519&amp;ss=1&amp;crop=1&amp;cpos=middle" src="./image/n_v2456fe322261540a49bc75cbf4a1c9efd_4329f6901bd95b57_002.png" alt="">
                                        </a>
                                                                                                </div></div>
            <div class="swiper-pagination"><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span></div>
        </div>
        <div class="banner_process">
            <ul>
                <h3>学车流程</h3>
                <li class="km1li">
                    <a href="http://mnks.jxedt.com/ckm1/" target="_blank" onclick="clickLog('from=JXEDT_HOME_XCLC_KM1')">
                        <div class="km1"></div>
                    <div>
                        <p>
                            科目一
                        </p>
                        <p>真实模拟，通过率高</p>
                    </div>
                    </a>
                </li>
                <li class="km2li">
                    <a href="http://tv.jxedt.com/?kemuType=kemu2" target="_blank" onclick="clickLog('from=JXEDT_HOME_XCLC_KM2')">
                        <div class="km2"></div>
                    <div>
                        <p>
                           科目二
                        </p>
                        <p>桩考、小路，知识及技巧</p>
                    </div>
                    </a>
                </li>
                <li class="km3li">
                    <a href="http://tv.jxedt.com/?kemuType=kemu3" target="_blank" onclick="clickLog('from=JXEDT_HOME_XCLC_KM3')">
                        <div class="km3"></div>
                    <div>
                        <p>
                            科目三
                        </p>
                        <p>大路，知识及技巧</p>
                    </div>
                    </a>
                </li>
                <li class="km4li">
                    <a href="http://mnks.jxedt.com/ckm4/" target="_blank" onclick="clickLog('from=JXEDT_HOME_XCLC_KM4')">
                        <div class="km4"></div>
                    <div>
                        <p>
                            科目四
                        </p>
                        <p>2019题库、题新、题准</p>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

 <div class="learn_iguide">
<h3>学车指南</h3>
<div class="learn_iguide_list">
<div class="iguide_list_menu">
<ul>
<li>
<a href="javascript:void(0);" class="active">热门文章</a>
</li>
<li>
<a href="javascript:void(0);">学车须知</a>
</li>
<li>
<a href="javascript:void(0);">交规考试秘笈</a>
</li>

<li>
<a href="javascript:void(0);">场考路考秘笈</a>
</li>
<li>
<a href="javascript:void(0);">驾驶常识</a>
</li>
<li>
<a href="javascript:void(0);">政策法规</a>
</li>
</ul>
<div class="menu_line"></div>
</div>
<div class="iguide_list_content">
<!--热门文章-->
<div class="iguide_article">
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/7188.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/n_s12707506368827034112_7cb2e83763851758.jpg" data-src="http://pic2.58cdn.com.cn/userfiles/2012/n_s12707506368827034112_7cb2e83763851758.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="轻松考驾照 驾校一点通手机APP值得拥有">轻松考驾照 驾校一点通手机APP值得拥有</p><p class="detail_text_content">
轻松考驾照&nbsp;驾校一点通手机APP值得拥有，覆盖应试者在备考过程中遇到的所有问题，主要包括驾校查询、教练查询、陪练查询、学车论坛、小车试题、货车试题、客车试题、安全文明试题、驾考秘笈、经验分享以及学车视频。</p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/4781.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/n_s12707501323781302012_24e38837b976e914.jpg" data-src="http://pic1.58cdn.com.cn/userfiles/upload/n_s12707501323781302012_24e38837b976e914.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾校一点通VIP2019版">驾校一点通VIP2019版</p><p class="detail_text_content">
                                                                                                                                    驾校一点通VIP版：驾考必备驾校一点通VIP版专家课程
                                            
                                            
                                            </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/847.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/n_v2cae8d2365c5341638f7f1d8280aca99c_94efcf1d7d0aeb0b.jpg" data-src="https://pic7.58cdn.com.cn/www/n_v2cae8d2365c5341638f7f1d8280aca99c_94efcf1d7d0aeb0b.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="学车择校指南（新手必看）">学车择校指南（新手必看）</p><p class="detail_text_content">
                                                                                        学车择校指南（新手必看）
                                            
                                            </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/6373.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/zn.png" data-src="http://img.58cdn.com.cn/dist/jxedt/pc/products/jxdetail/images/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="公安部令第123号《机动车驾驶证申领和使用规定》">公安部令第123号《机动车驾驶证申领和使用规定》</p><p class="detail_text_content">
公安部发布了最新修订的《机动车驾驶证申领和使用规定》，即公安部第123号令，而最新的驾驶证申领和使用规定，第五章第四节自发布之日起施行，其他部分自2013年1月1日起施行。</p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/6229.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/n_v279824aad91bd43259771affcd1779ff2_73358defc671c9d6.jpg" data-src="https://pic4.58cdn.com.cn/www/n_v279824aad91bd43259771affcd1779ff2_73358defc671c9d6.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="开自动挡，出现这3种情况一定停车，继续开有危险！">开自动挡，出现这3种情况一定停车，继续开有危险！</p><p class="detail_text_content">

                                            自动挡汽车以其简单方便等优势越来越受到车主朋友们的青睐，成为很多新手朋友们的购车首选。那么今天小编就和大家说下自动变速箱方面的知识。</p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3288052062159831077.html" target="_blank">
    <div class="content_detail_img">
<img src="./image/n_v280c2007cca9346d4ae232c57b326374d_77d40fd6d80899fc.png" data-src="./image/n_v280c2007cca9346d4ae232c57b326374d_77d40fd6d80899fc.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾校一点通谋定而动：投资高途智驾 共推驾培行业进入智能时代">驾校一点通谋定而动：投资高途智驾 共推驾培行业进入智能时代</p><p class="detail_text_content">
                                            
                                               近日，国内知名驾考服务平台驾校一点通宣布完成对北京高途智驾科技有限公司投资，以填补其在智能驾培供应链方面的需求，加速推进驾考服务链智能化进程，在稳步扩大其在驾培领域业务版图同时，推动驾培行业加快进入智能化时代的步伐。
    </p>
</div>
    </a>
</div>
</div>
<!--学车须知-->
<div class="iguide_article" style="display: none">
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/847.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2cae8d2365c5341638f7f1d8280aca99c_94efcf1d7d0aeb0b.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="学车择校指南（新手必看）">学车择校指南（新手必看）</p><p class="detail_text_content">
                                                                                        学车择校指南（新手必看）
                                            
                                            </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3288052062159831077.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v280c2007cca9346d4ae232c57b326374d_77d40fd6d80899fc.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾校一点通谋定而动：投资高途智驾 共推驾培行业进入智能时代">驾校一点通谋定而动：投资高途智驾 共推驾培行业进入智能时代</p><p class="detail_text_content">
                                            
                                               近日，国内知名驾考服务平台驾校一点通宣布完成对北京高途智驾科技有限公司投资，以填补其在智能驾培供应链方面的需求，加速推进驾考服务链智能化进程，在稳步扩大其在驾培领域业务版图同时，推动驾培行业加快进入智能化时代的步伐。
    </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281732558949515301.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v26d394643bc61413eb6496a47efad2dfb_97ee10e6bc216066.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="学车前你一定知道的五件事，不看后悔一生！">学车前你一定知道的五件事，不看后悔一生！</p><p class="detail_text_content">
                                                                                                                                                                                
                                            面临这些学车“难题”学员到底该如何应对呢？今天典典就来给大家分析一下
                                            
                                            
                                            </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281732361380954149.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v29ba218495ff74db484238bd3a2691e13_ca61a692d6ca7041.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="史上超严驾考新规正式实施 马路杀手将会逐年减少">史上超严驾考新规正式实施 马路杀手将会逐年减少</p><p class="detail_text_content">
                                                                                                                                    
                                            国内驾考改革动作频频——自2017年10月1日起，由公安部交通管理科学研究所研究制定的《机动车驾驶人考试内容与方法》（GA 1026）等驾驶人考试相关行业标准将正式实施。
                                            
                                            </p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281732017783504933.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2f11d75cd7876475c89f9083189472657_00ecc3693fa801f6.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="考驾照超快多久能拿证？看完这个你心里就有数了">考驾照超快多久能拿证？看完这个你心里就有数了</p><p class="detail_text_content">
                                            
                                            考驾照到底多久能拿证？
这大概是所有打算学车，或者已经开始学车的学员都想问的问题。
虽然，这个问题的答案因人而异，但小编下面还是给大家分析一下，大家可以心里有个底。
</p>
</div>
    </a>
</div>
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281611589047943205.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v248058cb1716b46b3aea793bcd98529c5_a31ca5efb128715c.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="计时培训全面落地，学车费用上涨不再是空谈！">计时培训全面落地，学车费用上涨不再是空谈！</p><p class="detail_text_content">
                                                                            自2017年10月1日起，全国驾考培训将迎来新大纲。评分标准大幅改动，考场系统升级。与此同时，过渡了一年的计时培训也将全面落地实施。            
                                            
                                            </p>
</div>
    </a>
</div>
</div>
<!--交规考试秘笈-->
<div class="iguide_article" style="display: none">
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/7188.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="h./image/n_s12707506368827034112_7cb2e83763851758.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="轻松考驾照 驾校一点通手机APP值得拥有">轻松考驾照 驾校一点通手机APP值得拥有</p><p class="detail_text_content">
轻松考驾照&nbsp;驾校一点通手机APP值得拥有，覆盖应试者在备考过程中遇到的所有问题，主要包括驾校查询、教练查询、陪练查询、学车论坛、小车试题、货车试题、客车试题、安全文明试题、驾考秘笈、经验分享以及学车视频。</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/4781.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_s12707501323781302012_24e38837b976e914.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾校一点通VIP2019版">驾校一点通VIP2019版</p><p class="detail_text_content">
                                                                                                                                    驾校一点通VIP版：驾考必备驾校一点通VIP版专家课程
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3282086895899181207.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v274a6d0842a3245c3977184f5b0b412d9_0f185a96f6c522a5.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科目三完美操作攻略看这里！两分钟掌握，超简单！">科目三完美操作攻略看这里！两分钟掌握，超简单！</p><p class="detail_text_content">
                                   科目三在很多学员心目中的确是一座很大很大的“大山”，那怎么样才能把这个“大山”攻克掉呢？一起来看看重点吧！          </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734223249146007.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2b91b16850a2243439ae28a7b178a151a_21eef5301efc2862.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="这样复习准备科目一考试 挂科机率降低10%">这样复习准备科目一考试 挂科机率降低10%</p><p class="detail_text_content">
                                                                                                                                    
                                            大家都知道，科目一文字性东西较多很多知识点都是要记忆的，所以有的学员在科目一考试前觉得时间紧张没有准备好，已经要“破罐子破摔”了。其实这段时间一定要把握好，切不可掉以轻心，谁能赢到最后还不一定呢！
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734094400323621.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v22383a4767d014932869d4f8b6bf0551a_4262acae9cd81011.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科一科四理论考试全攻略　答题满分轻松过">科一科四理论考试全攻略　答题满分轻松过</p><p class="detail_text_content">
                                            
                                            驾考理论考试包括科目一和科目四，题库总量加在一起有两千多道，不禁感叹，题目这么多，考试都会考到吗？到底都有哪些重点是需要特别注意的？</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281733828112285733.html" target="_blank">
    <div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2c513c9bbd3b540b4b13719d27295ac49_5101a19620134878.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科一考场六项注意 不想挂科就收藏吧">科一考场六项注意 不想挂科就收藏吧</p><p class="detail_text_content">
                                            
                                            科目一考试可以说是比较简单的理论考试了，只要学员熟记题库，掌握基本的驾驶常识和交规知识就能轻松过关。可是记不住知识点挂科也就算了，竟然有学员能在2分钟内满分通过模拟考试，却依然挂科，主要是以下考场六项注意没有做到。</p>
</div>
    </a>
</div>

</div>
<!--场考路考秘笈-->
<div class="iguide_article" style="display: none">
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3282348160907477029.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2651c56ff1aa4458e95a29b62ff324748_afba3dae587e6634.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科三练车&amp;考试六项注意 不然怎么练也没用">科三练车&amp;考试六项注意 不然怎么练也没用</p><p class="detail_text_content">
                                            
                                            科目三是驾考考试路上的一只大拦路虎！有很多学员不知道怎么回事就挂了，小编整理了这以下几个小秘密，快来看一下~</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281735135929827479.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v270bcc9460ce245fd82ccb3f4acf00bc1_4ba81bc9995e6717.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="细节决定成败 科二科三通关秘籍都在这里了">细节决定成败 科二科三通关秘籍都在这里了</p><p class="detail_text_content">
                                                                                                                                    科二科三学员应当注意的细节
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734968426233893.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v23e68b85026be45a894e55be1fa3ffe2f_b10bcb9e3468bd18.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科目二通关口诀 轻松过关就靠它了">科目二通关口诀 轻松过关就靠它了</p><p class="detail_text_content">
                                                                                                                                                                                                                                                                        
                                            科目二通关口诀 轻松过关就靠它了
                                            
                                            
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734850314698789.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v264f36f471ee046579be9105907a95fff_3da3b1f20499e958.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾考新手必看 科目二科目三考试扣分项目汇总">驾考新手必看 科目二科目三考试扣分项目汇总</p><p class="detail_text_content">
                                                                                                                                    
                                            科目二最易扣分五项
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734725760581669.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v230b82b95d0e042a0bf6d8168ae0531b4_332bb5aff644705b.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="科二科三考试重点牢记技巧 只要用心就能轻松过">科二科三考试重点牢记技巧 只要用心就能轻松过</p><p class="detail_text_content">
                                                                                                                                    
                                            众所周知，考驾照一共有4个科目：
其中科目一和科目四为理论考试，只要学员多看多练，将题库反反复复的做几遍，通过考试是早晚的事。而另外两个科目，科目二和科目三却不是频繁的练习就能够打包票能过的。

                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281734558256660631.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v26d9a3329d81e4c24b08fdb98ec69a04c_d36282a17b83876a.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="2018年驾考新规“科目三难点”应对技巧（图文版）">2018年驾考新规“科目三难点”应对技巧（图文版）</p><p class="detail_text_content">
                                                                                                                                                                                                                                                                                                                    
                                            2018年驾考新规“科目三难点”应对技巧（图文版）
                                            
                                            
                                            
                                            
                                            
                                            </p>
</div>
    </a>
</div>

</div>
<!--驾驶常识-->
<div class="iguide_article" style="display: none">

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/6229.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v279824aad91bd43259771affcd1779ff2_73358defc671c9d6.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="开自动挡，出现这3种情况一定停车，继续开有危险！">开自动挡，出现这3种情况一定停车，继续开有危险！</p><p class="detail_text_content">

                                            自动挡汽车以其简单方便等优势越来越受到车主朋友们的青睐，成为很多新手朋友们的购车首选。那么今天小编就和大家说下自动变速箱方面的知识。</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3286224287287345189.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v2c9d410af117d4878881df360c3c7484a_28546b09a3d3710a.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="方向盘">方向盘</p><p class="detail_text_content">
                                            方向盘是汽车操纵行驶方向的轮状装置，其功能是将驾驶员作用到转向盘边缘上的力转变为转矩后传递给转向轴
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3286217930735681573.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="直行">直行</p><p class="detail_text_content">
                  考核直线行驶时，考试员会根据道路交通情况，发布“直线行驶”指令，考生在驾驶车辆时能否保持车辆直线运动状态。                          
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3286217851278655525.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="灯光">灯光</p><p class="detail_text_content">
                                            
                                            以下为雪铁龙教练车车型的操作方式</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3286217767526858789.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="档位操纵">档位操纵</p><p class="detail_text_content">
                                            
                                            变速器操纵杆也就是大家常说的挡位操作杆。 起步时，用1挡； 起步后，用2挡； 时速20-30用3挡； 时速30-40用4挡； 时速40以上用5挡</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3286217653710159909.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="车距判断">车距判断</p><p class="detail_text_content">
                                            
                                            </p>
</div>
    </a>
</div>
</div>
<!--政策法规-->
<div class="iguide_article" style="display: none">
<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/6373.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/zn.png?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="公安部令第123号《机动车驾驶证申领和使用规定》">公安部令第123号《机动车驾驶证申领和使用规定》</p><p class="detail_text_content">
公安部发布了最新修订的《机动车驾驶证申领和使用规定》，即公安部第123号令，而最新的驾驶证申领和使用规定，第五章第四节自发布之日起施行，其他部分自2013年1月1日起施行。</p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281737014978478117.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="./image/n_v28e2b52b3473846908c47d235629dac0a_5a4cd8c33acfe1ad.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="自2017年11月1日起：C1、B1、B2驾照“年审”新规，你知道吗？">自2017年11月1日起：C1、B1、B2驾照“年审”新规，你知道吗？</p><p class="detail_text_content">
                                                                                                                                                                                                                                                                       你持有的是什么驾驶证？这几年考驾照很盛行，不论是哪个年龄段，都有很多，除了有职业需求的考的是AB类驾驶证，根本都是持有C1驾驶证，如今曾经有2亿多的保有量。你理解驾驶证的年审吗？不同驾驶证的年审请求是不一样的，你晓得吗？
                                            
                                            
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281736901161713701.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="https://pic1.58cdn.com.cn/www/n_v2d45da6e6516c425596595e3b027482b7_2982e274a8eee49e.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="消分政策出新规，别再去交通队添堵了">消分政策出新规，别再去交通队添堵了</p><p class="detail_text_content">
                                                                                        春节前老张隔壁家的老王回家过年，把车托付给老张，春节的北京别说是五环，就是平时最堵的东三环，这会空旷得也和飞机跑道有一拼了，老张一路飞驰过昔日的“弹丸之地”，没想到第二天一早就遭到了老王的微信轰炸：超速20%以下，扣三分处罚。回想昨天四下无车的环路上老张确实逍遥得忘了仪表盘的存在。
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281736750837923877.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="https://pic7.58cdn.com.cn/www/n_v2ece8c22956494f32af125f9a258a9082_1e670c5bac8e9330.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="史上超难驾考又加码！这个项目据说手短的考不过">史上超难驾考又加码！这个项目据说手短的考不过</p><p class="detail_text_content">
                                                                                                                                                                                现如今
学车考驾照
比以往严格不少的同时
也越来越贴近实际生活

                                            
                                            
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281736596219035685.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="https://pic6.58cdn.com.cn/www/n_v2dce1549f21bd4b7c99addc73838944ad_fcf9c165b8dd06e9.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="驾驶证与所驾车型不符等于无证驾驶！来看看2018年的驾照新规">驾驶证与所驾车型不符等于无证驾驶！来看看2018年的驾照新规</p><p class="detail_text_content">
                                                                                                                                                                                                                            
                                            前两天，缸哥的好朋友小健气鼓鼓的来找缸哥，说他拉货的大货车被扣了，自己明明有驾照，凭什么交警要扣他的车还要罚款扣分？缸哥看了小健的驾照后告诉小健：你拿的是C1驾照，只能开轻型，微型载货汽车，而你的那个大货车必须要B2驾照及以上才可以驾驶！去年三月就有司机在海口拿着C1驾照开大货车，造成33辆车的车祸！驾驶证与准驾车型不符等于无证驾驶，罚200--2000元不等，记12分，并可拘留15天以内。听了缸哥的话，小健才恍然大悟，灰溜溜的去交罚款了
                                            
                                            
                                            
                                            </p>
</div>
    </a>
</div>

<div class="list_content_detail">
    <a href="http://zhinan.jxedt.com/info/3281736465222467735.html" target="_blank">
<div class="content_detail_img">
<img src="http://www.jxedt.com/" data-src="https://pic6.58cdn.com.cn/www/n_v23a775c5569884a10ab2e7d719d0fa75d_ac191087be627684.jpg?h=138" alt=""></div>
<div class="content_detail_text">
<p class="detail_text_title" title="2018驾考新规定，看看你是否属于禁考这部分人！">2018驾考新规定，看看你是否属于禁考这部分人！</p><p class="detail_text_content">
                                                                                                                                    2018年来临，虽然驾考难度也越来越大，但只要认真学习，想要通过还是很简单的。对于有些人来说，他们可能连报名的机会都没有
                                            
                                            
                                            </p>
</div>
    </a>
</div>

</div>
</div>
</div>
        <!--学车互动-->
 <div class="learn_interact">
    <h3>学车互动</h3>
    <!-- 学车互动列表 -->
    <div class="learn_interact_list">
    <div class="swiper-container">
    <!--[if IE 9]>
    <style type="text/css">
    .swiper-container{
    top: 80px !important;
    }
    </style>
    <![endif]-->
    <div class="swiper-wrapper" style="width: 7333.33px; height: 270px; transform: translate3d(-1000px, 0px, 0px); transition-duration: 0s;"><div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/hujiya.png" alt=""></div>
    <div class="title_name">呼吉雅</div></div>
    <div class="list_detail_article">
    从4月17号开始计科一，到今天5月8号考试完。每天做题，犹如一日三“餐”。所有的错题、收藏题都重新做过了。这两天在潜意识里紧张了许久，今天终于把它给考过了！超开心
    </div>
    </div>
    </div><div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/liujiahao200012.png" alt=""></div>
    <div class="title_name">刘佳豪200012</div></div>
    <div class="list_detail_article">
    三月二号报名，五月三十一号拿的驾照.感谢一点通的一路陪伴!可能以后使用一点通的机会不多了，多少有一丝丝的不舍。
    </div>
    </div>
    </div><div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/jidapangzi.png" alt=""></div>
    <div class="title_name">菊大胖子</div></div>
    <div class="list_detail_article">
    今天终于开考科目一结果我和小伙伴们都过了哈哈哈，紧张的心终于落下来了，为了庆祝我考过买了二只老母鸡既然不敢杀来吃，先养起来吧
    </div>
    </div>
    </div>
    <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/yidiantong6688.png" alt=""></div>
    <div class="title_name">一点通6688</div></div>
    <div class="list_detail_article">
    驾照已拿，终于到手了，科目二补考了1次，科目三补考了2次，虽然一路坎坷，但还是要感谢驾校一点通的一路陪伴。
    </div>
    </div>
    </div>
    <div class="swiper-slide swiper-slide-visible" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/yuanjiyuansan.png" alt=""></div>
    <div class="title_name">缘聚缘散</div></div>
    <div class="list_detail_article">
    科目一很简单的，随便考考就能满分过的，只要进考场不紧张就可以了，多在驾校一点通上面做做题目，保正前途一片光明。
    </div>
    </div>
    </div>
    <div class="swiper-slide swiper-slide-visible" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/wendumanyan.png" alt=""></div>
    <div class="title_name">温度蔓延</div></div>
    <div class="list_detail_article">
    科目一90分一次过，不容易做题要看清楚尽量要慢有些题目你越是做很多遍往往会做错。别太快慢一点都会过的。
    </div>
    </div>
    </div>
    <div class="swiper-slide swiper-slide-visible" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/gushenyiren.png" alt=""></div>
    <div class="title_name">孤身一人</div></div>
    <div class="list_detail_article">
    刚刚科目二90分一把过，考试最重要是心态，之前很紧张，考试时反倒一点都不紧张。望友友们都一把过
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/siyecao.png" alt=""></div>
    <div class="title_name">四叶草</div></div>
    <div class="list_detail_article">
    7号考的科目一，94分，说句心里话，心脏都是跳的很快，可以先做会的题，不会的先放着，做完了再回去做没做的，这样就会及格了
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/lulu.png" alt=""></div>
    <div class="title_name">露露</div></div>
    <div class="list_detail_article">
    科一还没考呢，买了一个驾校一点通的vip.才看完一遍，有时候考80多，有时候考90多分，每次看题都不认真[:偷笑][:偷笑]这粗心大意的毛病，没治了
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/doudou.png" alt=""></div>
    <div class="title_name">豆豆</div></div>
    <div class="list_detail_article">
    每次都测试八十多，九十，时间老不够用，考试不知道能否过，每天都是紧张的练习，加油吧！
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/yumi.png" alt=""></div>
    <div class="title_name">yumi</div></div>
    <div class="list_detail_article">
    科目一97分过了，练车！真正考试时候比练题简单，大家不要担心。平时能考多少到时候就差不多能考多少。
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/Aleifeng.png" alt=""></div>
    <div class="title_name">A雷风</div></div>
    <div class="list_detail_article">
    今天拿证了，科四满分，挺简单的，感谢一点通陪伴，我觉得心态要好，从科一到科四没有骂过小编一句。做错题我就记住下次注意，没什么难的。
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/binshao.png" alt=""></div>
    <div class="title_name">彬少</div></div>
    <div class="list_detail_article">
    今天终于拿上证啦，谢谢一点通一路以来的陪伴，让我能顺顺利利的拿到本本，谢谢小编，我也学会了很多东西，祝一点通越办越好，帮到更多的人！谢谢！
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/mengmengtuer.png" alt=""></div>
    <div class="title_name">萌萌兔儿</div></div>
    <div class="list_detail_article">
    谢谢一点通两个半月的陪伴，刚刚通过科三理论，下午拿证，祝一点通其他各位学员逢考必过！！！
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/qinqinbaobei.png" alt=""></div>
    <div class="title_name">亲亲宝贝</div></div>
    <div class="list_detail_article">
    四月二十六号考的科目一以94分考过，来还愿了！谢谢考神娘娘，希望在接下来的科目二科目三科目四也轻松考过，到那时定来还愿！考神保佑！
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/nulifengdouba.png" alt=""></div>
    <div class="title_name">努力奋斗吧</div></div>
    <div class="list_detail_article">
    科目二一次性过，听说点赞会有好运，切记车速慢，忘哪边转弯看哪边，不能压线，做到思路清晰。
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/hujiya.png" alt=""></div>
    <div class="title_name">呼吉雅</div></div>
    <div class="list_detail_article">
    从4月17号开始计科一，到今天5月8号考试完。每天做题，犹如一日三“餐”。所有的错题、收藏题都重新做过了。这两天在潜意识里紧张了许久，今天终于把它给考过了！超开心
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/liujiahao200012.png" alt=""></div>
    <div class="title_name">刘佳豪200012</div></div>
    <div class="list_detail_article">
    三月二号报名，五月三十一号拿的驾照.感谢一点通的一路陪伴!可能以后使用一点通的机会不多了，多少有一丝丝的不舍。
    </div>
    </div>
    </div>
    <div class="swiper-slide" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/jidapangzi.png" alt=""></div>
    <div class="title_name">菊大胖子</div></div>
    <div class="list_detail_article">
    今天终于开考科目一结果我和小伙伴们都过了哈哈哈，紧张的心终于落下来了，为了庆祝我考过买了二只老母鸡既然不敢杀来吃，先养起来吧
    </div>
    </div>
    </div>
    <div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/yidiantong6688.png" alt=""></div>
    <div class="title_name">一点通6688</div></div>
    <div class="list_detail_article">
    驾照已拿，终于到手了，科目二补考了1次，科目三补考了2次，虽然一路坎坷，但还是要感谢驾校一点通的一路陪伴。
    </div>
    </div>
    </div><div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/yuanjiyuansan.png" alt=""></div>
    <div class="title_name">缘聚缘散</div></div>
    <div class="list_detail_article">
    科目一很简单的，随便考考就能满分过的，只要进考场不紧张就可以了，多在驾校一点通上面做做题目，保正前途一片光明。
    </div>
    </div>
    </div><div class="swiper-slide swiper-slide-duplicate" style="width: 333.333px; height: 270px;">
    <div class="learn_interact_list_detail">
    <div class="list_detail_title">
    <div class="title_img">
    <img src="./image/wendumanyan.png" alt=""></div>
    <div class="title_name">温度蔓延</div></div>
    <div class="list_detail_article">
    科目一90分一次过，不容易做题要看清楚尽量要慢有些题目你越是做很多遍往往会做错。别太快慢一点都会过的。
    </div>
    </div>
    </div></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</div>

    <!--尾部-->
<footer class="comment-footer">

    <div class="comment-footer-about">
        <div class="row comment-footer-logo">
            <div>
                <div class="comment-footer-image">
                    <img src="./image/timg.jpg" alt="" style="width:100px;height:54px">
                </div>
                <div class="comment-footer-describe">
                    <span>秋名山有限公司</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row comment-footer-web">
                <a href="http://www.jxedt.com/about/jianjie.asp" target="_blank">网站介绍</a>
                <span>|</span>
                <a href="http://www.jxedt.com/about/sitemap.asp" target="_blank">网站地图</a>
                <span>|</span>
                <a href="http://www.jxedt.com/about/link.asp" target="_blank">合作链接</a>
                <span>|</span>
                <a href="http://www.jxedt.com/about/laws.asp" target="_blank">免责声明</a>
                <span>|</span>
                <a href="http://www.jxedt.com/help.asp" target="_blank">用户帮助</a>
                <span>|</span>
                <a href="http://www.jxedt.com/about/lianxi.asp" target="_blank">联系我们</a>
            </div>
            <div class="row">
                <a href="http://www.jxedt.com/" target="_blank">秋名山有限公司 （ www.qiumingshan.com ）旗下平台 ：</a>
                <a href="http://jiaxiao.jxedt.com/" target="_blank">驾校平台</a>
                <a href="http://jl.jxedt.com/" target="_blank">教练平台</a>
                <a href="http://pl.jxedt.com/" target="_blank">陪练平台</a>
                <a href="http://kaoshi.jxedt.com/" target="_blank">考试平台</a>
                <a href="http://www.jxedt.com/about/" target="_blank">手机版</a>
            </div>
            <div class="row">
                <p class="comment-footer-org">杭州联桥网络科技有限公司 <a href="https://j1.58cdn.com.cn/dist/jxedt/permit/license.html" target="_blank">浙ICP备09002072</a></p>
                <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502037619" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                    <img src="./image/beian.png" style="float:left;">
                    <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">京公网安备 11010502037619号
                    </p>
                </a>

            </div>
        </div>

    </div>
</footer>

<script>var _trackURL = '{"cate":"NA","area":"NA","pagetype":"footer","page":"info"}'</script>
<script>var _trackURL = '{"cate":"NA","area":"NA","pagetype":"header","page":"info"}'</script>
<script src="./js/jquery.js"></script>
<script src="./image/api"></script>
<script type="text/javascript" src="./image/getscript"></script>{{--题库和搜索--}}

<script src="./js/cookie_tool.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="//j1.58cdn.com.cn/dist/jxedt/pc/products/jxregister/js/placeholder.js?_t=20180710" charset="utf-8"></script>
<![endif]-->


<!--热门地区处理-->
<script>
    //添加本地存储信息
    $("#hotareaid>span>a").click(function(){
        var baseurl=this.getAttribute("urlpath");
        var basename=this.getAttribute("rulname");
        cookie.set("local_city",basename);
        cookie.set("local_city_pingying",baseurl);
    });
</script>
<script>
    function linkclick(obj) {
        var baseurl = ""
        switch (obj.getAttribute("linkrul")) {
            case "jiaxiao":
                baseurl = "http://jiaxiao.jxedt.com";
                break;
            case "jl":
                baseurl = "http://jl.jxedt.com";
                break;
            case "pl":
                baseurl = "http://pl.jxedt.com";
                break;
            default:
                baseurl = "http:www.jxedt.com"
        }
        var afterurl = cookie.get("local_city_pingying");
        if (null == afterurl) {
            afterurl = "";
        }
        obj.href = baseurl + afterurl;
    }
</script>
<script src="./js/common_header.js"></script>
{{--<script src="./js/footer.js"></script>--}}
{{--<script src="./js/common_footer.js"></script>--}}
{{--<script src="./js/referrer_jxedt_pc.js"></script>--}}
{{--<script src="./js/hits.js"></script>--}}
{{--<script src="./js/idangerous.js"></script>--}}
{{--<script src="./js/jxindex.js"></script>--}}
</body>
</html>
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
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<style type="text/css">
    .comment-header-vip-describe .jxedt-VIP{
        font-size: 14px;
        color: #00c356;
    }
    .rank_card_jx,.rank_card_jl,.rank_card_pl{
        height:640px !important;
    }
    .xuanzhong{
        color: rgb(0, 195, 86);
    }
</style>
<body>
<div class="nav-wrap">
    <nav class="comment-header-nav">
        <!-- 联系 -->
        <div class="comment-header-contact">
            {{--<div class="comment-header-left">--}}
            <span class="comment-header-vip-describe">
                    <i class="iconfont jxedt-VIP"></i>
                    <a href="">VIP真题</a>
                </span>
            <span class="comment-header-phone-describe">秋名山驾照考核热线:
                    <span class="comment-header-phone">0315-666666</span>
                </span>

            <div class="comment-login-1" style="display:inline-block;margin-left:780px;">
                <span class="btn-span"><a href="logins" onclick="clickLog('from=JXEDT_HEADER_LOGIN')">登录</a></span>
                <span class="btn-span"><a href="register" target="_blank" onclick="clickLog('from=JXEDT_HEADER_SIGNIN')">注册</a></span>
                <span class="show_user_id" style="display: none;">{{Session::get('id')}}</span>
                <span class="show_user">{{Session::get('name')}}</span> &nbsp;&nbsp;&nbsp;<span class="logout" onclick="logOut()">退出</span>
                <img src="" alt="" style="width:25px;">
            </div>
            {{--</div>--}}
        </div>

        <!-- 搜索 -->
        <div class="comment-header-search">
            <div class="comment-header-search-logo">
                <a href="http://www.jxedt.com/">
                    <img src="./image/timg.jpg" alt="" style="width:100px;height:54px">
                </a>
            </div>

            <div class="question">
                <div class="question_title">
                    <span>题库：</span>
                    <select id="selected">
                        <option value="小车" class="chexing" selected="selected">小车</option>
                        <option value="客车" class="chexing">客车</option>
                        <option value="货车" class="chexing">货车</option>
                        <option value="摩托车" class="chexing">摩托车</option>
                    </select>
                </div>
            </div>

            <div class="comment-header-search-text">
                <input type="hidden" id="searchType" value="jx">
                <input class="search-content" type="text" placeholder="请输入关键字：如驾校名称">
                <span class="comment-header-search-btn" onclick="clickLog('from=JXEDT_HTAB_SEARCH')">搜索</span>
            </div>
        </div>

        <!-- 导航 -->
        <div>
            <div class="comment-header-menu">
                <ul class="comment-header-menu-ul">
                    <li class="start-menu" onclick="select_type(this)">
                        <a href="/" class="xuanzhong" style="color: rgb(0, 195, 86);">首页</a>
                    </li>
                    <li class="header-menu-dropdown" onclick="select_type(this)">
                        <a href="" style="color: rgb(74, 74, 74);">
                            模拟考试
                            <div class="down"></div>
                        </a>
                        <div class="header-menu-dropdown-content">
                            <p onclick="select_course(this)">科目一试题</p>
                            <p onclick="select_course(this)">科目四试题</p>
                        </div>
                    </li>

                    <li  onclick="select_type(this)">
                        <a href="http://vip.jxedt.com/" onclick="clickLog('from=JXEDT_HTAB_VIP')" style="color: rgb(74, 74, 74);">VIP真题</a>
                    </li>
                    <li  onclick="select_type(this)">
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
<script>
    function logOut()
    {
        var do_user;
        if($(".show_user").text())
        {
            do_user = 1;
        }else{
            do_user = 0;
        }
        $.ajax({
            type : 'get',
            url  : 'logout',
            data : {
                'do_user':do_user
            },
            success:function()
            {
                location.href= "/";
            }
        })
    }

    function select_course(obj)
    {
        var course_type = "";
        if($(obj).text() == '科目一试题') course_type = '科目一';
        else if($(obj).text() == '科目四试题') course_type = '科目四';
        $.ajax({
            type : "get",
            url  : "select_type",
            data : {
                'course_type' : course_type,
                'che_type'    : $("#selected").val(),
                'user_id'     : $(".show_user_id").text(),
            },
            success:function(res)
            {
                $(".banner.banner_top").html(res);
                $(".learn_interact").html('');
            }
        })
    }

    $(".chexing").click(function(){
        $.ajax({
            type : "get",
            url  : "select_type",
            data : {
                'type'    : $(this).text(),
                'user_id' : $(".show_user_id").text(),
            },
            success:function(res)
            {
                $(".banner.banner_top").html(res);
                $(".learn_interact").html('');
            }
        })
    });

    $(function(){
        if($(".show_user").text()) $(".btn-span").hide(),$(".logout").show();
        else $(".btn-span").show(), $(".logout").hide();
    });
</script>
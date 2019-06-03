<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>pagination-nick</title>
    <link rel="stylesheet" href="./css/jx_index.css">
    {{--导航栏VIP命题--}}
    <style>
        .boxx{
            margin:0 auto;
            width:865px;
        }
    </style>
</head>
<link href="http://www.jiakaobaodian.com/core-assets/jiakao/application/mnks/kemu1-4/css/main.css?v=1.0.8" rel="stylesheet" type="text/css">
<body>
<div class="boxx">
    <div class="common-channel-crumb" data-sp="0.5">
        <span>当前位置：</span>
        <a href="http://answer.com/">首页</a>
        <i>&gt;</i>
        <strong>模拟考试</strong>
    </div>

    <div class="layout-article" ref="comMain" data-dom-ready data-sp="0.6">
        <div class="container news-page">
            <div class="frame-l-r">
                <div class="left">
                    <div class="header">
                        <h1>秋名山--2019 “<span class="che_type">{{$data['che_type']}}</span><span class="course_type">{{$data['course_type']}}</span>，考试”</h1>
                        <h2>科目一，又称科目一理论考试、驾驶员理论考试，是机动车驾驶证考核的一部分 。根据《机动车驾驶证申领和使用规定》，考试内容包括驾车理论基础、道路安全法律法规、地方性法规等相关知识。考试形式为上机考试，100道题，90分及以上过关。</h2>
                    </div>

                    <div class="com-tiku-menu" data-dom-ready data-sp="0.26">
                        <ul class="menu-list clearfix">
                            <li>
                                <a target="_blank" href="/order_template?che_type={{$data['che_type']}}&course_type={{$data['course_type']}}" class="icon0">顺序练习</a>
                            </li>
                            <li>
                                <a target="_blank" href="/random_template?che_type={{$data['che_type']}}&course_type={{$data['course_type']}}" class="icon1">随机练习</a>
                            </li>
                            <li>
                                <a target="_blank" href="javascript:void(0);" class="icon2">章节练习</a>
                            </li>
                            <li>
                                <a target="_blank" href="specials" class="icon3">专项练习</a>
                            </li>
                            <li>
                                <a target="_blank" href="mistakes?che_type={{$data['che_type']}}&course_type={{$data['course_type']}}" class="icon4" rel="nofollow">难题练习</a>
                            </li>
                            <li>
                                <a target="_blank" href="/simulation_template?che_type={{$data['che_type']}}&course_type={{$data['course_type']}}" class="icon5">全真模拟</a>
                            </li>
                        </ul>
                    </div>
                    <div class="com-mnks-course-statis com-part block-static" data-dom-ready data-sp="0.35">
                        <h3 class="part-title">{{$data['che_type']}}{{$data['course_type']}}练习及考试统计</h3>
                        <div class="content-wapper cl">
                            <div id="holder" class="s-circle fl">
                                <img src="/bzt.php" alt="">
                            </div>

                            <div class="s-info fl">
                                <p class="p1 cl">
                                    <span class="i0 ii"></span>
                                    <span class="n1">做对@if($count > 0){{$count['correct']}}@endif题</span>
                                    <span class="n2">占比@if($count > 0)<?php echo round($count['correct']/$count['num_count']*100)?>@endif%</span>
                                </p>
                                <p class="p2 cl">
                                    <span class="i1 ii"></span>
                                    <span class="n1">做错@if($count > 0)<?php echo $count['my_error'] ?>@endif题</span>
                                    <span class="n2">占比@if($count > 0)<?php echo round($count['my_error']/$count['num_count']*100)?>@endif%</span>
                                </p>
                                <p class="p3 cl">
                                    <span class="i2 ii"></span>
                                    <span class="n1">未做@if($count > 0)<?php echo $count['not_do'] ?>题@endif</span>
                                    <span class="n2">占比@if($count > 0)<?php echo round($count['not_do']/$count['num_count']*100)?>@endif%</span>
                                </p>
                            </div>

                            <div class="s-link fr cl">
                                <a class="favor fl" data-action="login_url" target="_blank" rel="nofollow" href="collect">我的收藏</a>
                                <a class="record fl" data-action="login_url" target="_blank" rel="nofollow" ref="loginBtn">考试记录</a>
                                <a class="rank fl" target="_blank" rel="nofollow" href="ranking?che_type={{$data['che_type']}}&course_type={{$data['course_type']}}">排行榜</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

</script>
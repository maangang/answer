<!DOCTYPE html>
<html lang="en">
<head>
    <script>var _hmt = _hmt || [];
        var _bdEventLog = function (name, action, opt_label, opt_value) {
            _hmt.push(['_trackEvent', name, action, opt_label, opt_value]);
        }</script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,user-scalable=no">
    <meta name="baidu-site-verification" content="IJelGB8E4G">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="renderer" content="webkit">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="simple-application">
    <script src="./rankings/js//config.js"></script>
    <script src="./rankings/js//hm.js"></script>
    <script src="./rankings/js//push.js"></script>
    <script src="./rankings/js//11.js"></script>
    <title>【驾考宝典】考试结果</title>
    <link href="./rankings/css/main.css" rel="stylesheet" type="text/css">
    <link href="./rankings/css/ranking.css" rel="stylesheet" type="text/css">
    <link href="./rankings/css/ranking.css" rel="stylesheet" type="text/css">
    <script data-uuid="1" src="./rankings/js/main.js"></script>
</head>
<body>


    <div class="layout-user clear-cache" data-sp="0.1">
        <div class="content clearfix">
            <div class="right-link"><a class="active" rel="nofollow" href="https://www.jiakaobaodian.com/my/">登录</a><i
                        class="fgx"></i><a ref="loginOut">退出</a></div>
        </div>
    </div>
    <div class="layout-article" ref="comMain" data-sp="0.6">
        <div class="container news-page mnks-rank-page">
            <div class="top-banner" style="background:url('./rankings/image/26d9b3c49c14d56dc063fa93d028b753.png') center top no-repeat"></div>
            <div class="page-container">
                <div class="top-bar clearfix">
                    <div class="item right"><p class="title-text">模拟考试前三甲</p>
                        <div class="item-content">
                            <div class="touxiang top3" style='margin-top: 60px; background: url("./rankings/image/0081b8d034f86fd719a80e2115cbb0d5.png") center no-repeat'>
                                <div class="img-w"><img
                                            src="{{$res1[2]->img}}"><i></i>
                                </div>
                            </div>
                            <p class="name">{{$res1[2]->user_name}}</p>
                            <div><span class="red">{{$res1[2]->grade}}</span>分 &nbsp;<span class="blue2"><?php echo  gmdate("i:s", $res1[2]->time);?></span></div>
                        </div>
                        <div class="item-content">
                            <div class="touxiang top1"  style='margin-top: -40px; background: url("./rankings/image/58fb0df78e7ae9e38a093b20ea96d527.png") center no-repeat'>
                                <div class="img-w"><img
                                            src="{{$res1[0]->img}}">
                                </div>
                                <i></i></div>
                            <p class="name">{{$res1[0]->user_name}}</p>
                            <div><span class="red">{{$res1[0]->grade}}</span>分 &nbsp;<span class="blue2"><?php echo  gmdate("i:s", $res1[0]->time);?></span></div>
                        </div>
                        <div class="item-content">
                            <div class="touxiang top2" style="margin-top: 30px; background: url('./rankings/image/275785836a3efa521303e79614ecddf6.png') center no-repeat">
                                <div class="img-w "><img
                                            src="{{$res1[1]->img}}">
                                </div>
                                <i></i></div>
                            <p class="name">{{$res1[1]->user_name}}</p>
                            <div><span class="red">{{$res1[1]->grade}}</span>分 &nbsp;<span class="blue2"><?php echo  gmdate("i:s", $res1[1]->time);?> </span></div>
                        </div>

                    </div>
                </div>
                <div class="list-w">
                    <ul>
                        <li class="first clearfix">
                            <div class="col col1">排名</div>
                            <div class="col col2">头像/昵称/性别</div>
                            <div class="col col3">考试成绩</div>
                            <div class="col col4">考试用时</div>
                        </li>
                        @foreach($res4 as $k=>$v)
                        <li class="clearfix">
                            <div class="col col1 top1">{{$k+1}}</div>
                            <a class="col col2 clearfix"
                               href="https://www.jiakaobaodian.com/user/8e3bd146bd708b14de0bd76900baaa5ba532f8f1.html">
                                <div class="img-w left"><img src="{{$v['img']}}">
                                </div>
                                <div class="name left">{{$v['user_name']}}</div>
                            </a>
                            <div class="col col3"><span class="red">{{$v['grade']}}</span>分</div>
                            <div class="col col4"><?php echo  gmdate("i:s", $v['time']);?> </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

<script src="./rankings/js//notification.js"></script>
<script src="./rankings/js//14shim.js"></script>
<script src="./rankings/js//config_002.js"></script>
<script src="./rankings/js//simple5.js"></script>
<script src="./rankings/js//main.js"></script>
<script src="./rankings/js//main_002.js"></script>
<script src="./rankings/js//simple-core.js"></script>
<script>window.baiduMapReady = function () {
        window.bdMapReady = true;
        window.onBdMapReady && window.onBdMapReady();
    }</script>
<script src="./rankings/js//load.js"></script>
<script src="./rankings/js//api"
        type="text/javascript"></script>
<script src="./rankings/js//getscript"></script>
</body>
</html>


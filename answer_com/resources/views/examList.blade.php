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
<!-- <div class="pagination-nick"></div> -->
<div class="boxx">
<div class="layout-article" ref="comMain" data-dom-ready data-sp="0.6">
<div class="container news-page">
<div class="frame-l-r">
<div class="left">
<div class="header">
    <h1>秋名山--2019 “<?php echo $lx; ?>科目一，考试”</h1>
    <h2>科目一，又称科目一理论考试、驾驶员理论考试，是机动车驾驶证考核的一部分 。根据《机动车驾驶证申领和使用规定》，考试内容包括驾车理论基础、道路安全法律法规、地方性法规等相关知识。考试形式为上机考试，100道题，90分及以上过关。</h2>
</div>

<div class="com-tiku-menu" data-dom-ready data-sp="0.26">
    <ul class="menu-list clearfix">
        <li>
        <a target="_blank" href="/mnks/exercise/0-car-kemu1.html" class="icon0">顺序练习</a>
        </li>
        <li>
        <a target="_blank" href="/mnks/exercise/3-car-kemu1.html" class="icon1">随机练习</a>
        </li>
        <li>
        <a target="_blank" href="/mnks/chapter/car-kemu1-beijing.html" class="icon2">章节练习</a>
        </li>
        <li>
        <a target="_blank" href="/mnks/strengthen/car-kemu1-beijing.html" class="icon3">专项练习</a>
        </li>
        <li>
        <a target="_blank" href="/mnks/exercise/8-car-kemu1.html" class="icon4">难题练习</a>
        </li>
        <li>
        <a target="_blank" href="http://www.jiakaobaodian.com/mnks/exam/car-kemu1-beijing.html" class="icon5">全真模拟</a>
        </li>
    </ul>
</div>
<div class="com-mnks-course-statis com-part block-static" data-dom-ready data-sp="0.35">
    <h3 class="part-title">小车科目一练习及考试统计</h3>
    <div class="content-wapper cl">
    <div id="holder" class="s-circle fl">
        <label></label>
        <i></i>
    </div>

    <div class="s-info fl">
        <p class="p1 cl">
        <span class="i0 ii"></span>
        <span class="n1">做对<?php echo $cts; ?>题</span>
        <span class="n2">占比*%</span>
        </p>
        <p class="p2 cl">
        <span class="i1 ii"></span>
        <span class="n1">做错<?php echo $dts; ?>题</span>
        <span class="n2">占比*%</span>
        </p>
        <p class="p3 cl">
        <span class="i2 ii"></span>
        <span class="n1">未做*题</span>
        <span class="n2">占比*%</span>
        </p>
    </div>

    <div class="s-link fr cl">
        <a class="favor fl" data-action="login_url" target="_blank" rel="nofollow" ref="loginBtn">我的收藏</a>
        <a class="record fl" data-action="login_url" target="_blank" rel="nofollow" ref="loginBtn">考试记录</a>
        <a class="rank fl" target="_blank" rel="nofollow" href="/mnks/rank/car-kemu1-beijing.html">排行榜</a>
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
    //        定义一个分页方法，可多次调用
    function paginationNick(opt){
//            参数设置
        var pager={
            paginationBox:'',//分页容器-- 必填
            mainBox:'',//内容盒子--必填
            numBtnBox:'',//数字按钮盒子-- 必填
            btnBox:'',//按钮盒子 --必填
            ipt:'',//input class-- 必填
            goBtn:'',//go btn class --必填
            currentBtn:'',//当前按钮class name --必填
            pageCount:1,//每页显示几条数据
            numBtnCount:3,//当前页左右两边各多少个数字按钮
            currentPage:0,//当前页码data-page，首屏默认值
            maxCount:0,//ajax请求数据分成的最大页码
            data:[]//ajax请求的数据
        };
        pager = $.extend(pager,opt);//用于合并对象

        //请求数据页面跳转方法
        function goPage(btn){
            //obj为ajax请求数据
            var obj={other:{},value:[11,22,33,44,55,66,77,88,99,0,11,22,33,44,55,66,77,88,99,0,11,22,33,44,55,66,77,88,99,0,11,22,33,44,55,66,77,88,99,0]};
            //将展示的数据赋值给pager.data  (array)
            pager.data=obj.value;
            //设置ajax请求数据分成的最大页码
            pager.maxCount=pager.data.length % pager.pageCount ? parseInt(pager.data.length / pager.pageCount) +1 :
                pager.data.length / pager.pageCount;

//                设置当前页码
            if(!isNaN(btn)){//数字按钮
                pager.currentPage=parseInt(btn);
            }else{
                switch(btn){
                    case 'first':
                        pager.currentPage=0;
                        break;
                    case 'prev':
                        if(pager.currentPage>0){
                            --pager.currentPage;
                        }
                        break;
                    case 'next':
                        if(pager.currentPage+1<pager.maxCount){
                            ++pager.currentPage;
                        }
                        break;
                    case 'last':
                        pager.currentPage=pager.maxCount-1;
                        break;
                }
            }
            //创建数字按钮
            //createNumBtn(pager.currentPage);
            //赋值给页码跳转输入框的value，表示当前页码
            $('.'+pager.btnBox+' .'+pager.ipt).val(pager.currentPage+1);
//              内容区填充数据
            var arr=[],str='';
            arr=pager.data.slice(pager.pageCount*pager.currentPage,
                pager.data.length - pager.pageCount*(pager.currentPage+1) > -1 ?
                    pager.pageCount*(pager.currentPage+1) : pager.data.length);
            arr.forEach(function(v){
                str+='<div>'+v+'</div>';
            });
            $('.'+pager.mainBox).html(str);
        }

        //创建非数字按钮和数据内容区
        //创建数字按钮
       /* function createNumBtn(page){
            //page是页面index从0开始，这里的page加减一要注意
            var str='';
            if(pager.maxCount>pager.numBtnCount*2){//若最大页码数大于等于固定数字按钮总数（pager.numBtnCount*2+1）时
                //此页左边右边各pager.numBtnCount个数字按钮
                if(page-pager.numBtnCount>-1){//此页左边有pager.numBtnCount页 page页码从0开始
                    for(var m=pager.numBtnCount;m>0;m--){
                        str+='<button data-page="'+(page-m)+'">'+(page-m+1)+'</button>';
                    }
                }else{
                    for(var k=0;k<page;k++){
                        str+='<button data-page="'+k+'">'+(k+1)+'</button>';
                    }
                }
                str+='<button data-page="'+page+'" class="'+pager.currentBtn+'" disabled="disabled">'+(page+1)+'</button>';//此页
                if(pager.maxCount-page>3){//此页右边有pager.numBtnCount页 page页码从0开始
                    for(var j=1;j<pager.numBtnCount+1;j++){
                        str+='<button data-page="'+(page+j)+'">'+(page+j+1)+'</button>';
                    }
                }else{
                    for(var i=page+1;i<pager.maxCount;i++){
                        str+='<button data-page="'+i+'">'+(i+1)+'</button>';
                    }
                }
                /*数字按钮总数小于固定的数字按钮总数pager.numBtnCount*2+1时，
                 这个分支，可以省略*/
              /*  if(str.match(/<\/button>/ig).length<pager.numBtnCount*2+1){
                    str='';
                    if(page<pager.numBtnCount){//此页左边页码少于固定按钮数时
                        for(var n=0;n<page;n++){//此页左边
                            str+='<button data-page="'+n+'">'+(n+1)+'</button>';
                        }
                        str+='<button data-page="'+page+'" class="'+pager.currentBtn+'" disabled="disabled">'+(page+1)+'</button>';//此页
                        for(var x=1;x<pager.numBtnCount*2+1-page;x++){//此页右边
                            str+='<button data-page="'+(page+x)+'">'+(page+x+1)+'</button>';
                        }
                    }
                    if(pager.maxCount-page-1<pager.numBtnCount){
                        for(var y=pager.numBtnCount*2-(pager.maxCount-page-1);y>0;y--){//此页左边
                            str+='<button data-page="'+(page-y)+'">'+(page-y+1)+'</button>';
                        }
                        str+='<button data-page="'+page+'" class="'+pager.currentBtn+'" disabled="disabled">'+(page+1)+'</button>';//此页
                        for(var z=page+1;z<pager.maxCount;z++){//此页右边
                            str+='<button data-page="'+z+'">'+(z+1)+'</button>';
                        }
                    }
                }
            }else{
                str='';
                for(var n=0;n<page;n++){//此页左边
                    str+='<button data-page="'+n+'">'+(n+1)+'</button>';
                }
                str+='<button data-page="'+page+'" class="'+pager.currentBtn+'" disabled="disabled">'+(page+1)+'</button>';//此页
                for(var x=1;x<pager.maxCount-page;x++){//此页右边
                    str+='<button data-page="'+(page+x)+'">'+(page+x+1)+'</button>';
                }
            }

            $('.'+pager.numBtnBox).html(str);

            //每个btn绑定请求数据页面跳转方法
            $('.'+pager.numBtnBox+' button').each(function(i,v){
                $(this).click(function(){
                    goPage(v.getAttribute('data-page'));
                });
            });

            //按钮禁用
            $('.'+pager.btnBox+' button').not('.'+pager.currentBtn).attr('disabled',false);
            if(!page){//首页时
                $('.'+pager.btnBox+' .first-btn').attr('disabled',true);
                $('.'+pager.btnBox+' .prev-btn').attr('disabled','disabled');
            }
            if(page==pager.maxCount-1){//尾页时
                $('.'+pager.btnBox+' .last-btn').attr('disabled',true);
                $('.'+pager.btnBox+' .next-btn').attr('disabled',true);
            }
        }*/

        //首屏加载
        createOtherBtn();//首屏加载一次非数字按钮即可
        goPage();//请求数据页面跳转满足条件按钮点击都执行，首屏默认跳转到currentPage
    }
    //调用
    paginationNick({
        paginationBox:'pagination-nick',//分页容器--必填
        mainBox:'main-box-nick',//内容盒子--必填
        numBtnBox:'num-box-nick',//数字按钮盒子-- 必填
        btnBox:'btn-box-nick',//按钮盒子 --必填
        ipt:'page-ipt-nick',//input class-- 必填
        goBtn:'go-btn-nick',//go btn class --必填
        currentBtn:'active-nick'//当前按钮class name --必填
    });
</script>
</body>
</html>
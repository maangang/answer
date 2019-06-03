<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .options-w.left p img{
        width:23px;
    }
</style>
<style>
    .jieshi-box{
        color : rgb(178 157 119);
        margin-top : 10px;
        margin-left : 10px;
        margin-bottom : 10px;
        height:100px;
    }
    #ul_answers p img{
        width:23px;
    }
    .num-box-nick button{
        width:35px;
        margin-bottom : 10px;
    }
    .next-btn,.prev-btn{
        color: #fff;
        background: #44b83a;
        width:80px;
        height:40px;
    }
    .green {
        background-color:#7ED321;
    }
    .red {
        background-color:#DC143C;
    }
</style>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="/moni/main.css" rel="stylesheet" type="text/css">
<body>
<div class="btn-box-nick">
    <div class="box">
<div class="layout-article" ref="comMain" data-sp="0.6">
    <div class="container news-page">
        <div class="exam">
            <div class="row clearfix">
                <div class="col col1">
                    <fieldset class="kaochang">
                        <legend>理论考试</legend>
                        <span>第01考台</span>
                    </fieldset>
                    <fieldset class="kaosheng">
                        <legend>考生信息</legend>
                        <div class="author-img"></div>
                        <div class="kaosheng-item kemu red">科目一</div>
                        {{--<div class="kaosheng-item name">考生姓名：<span>//Session::get('name')</span></div>--}}
                        <div class="kaosheng-item">考试题数：100</div>
                        <div class="kaosheng-item">考试时间：45分钟</div>
                        <div class="kaosheng-item">满分100分，90分及格</div>
                    </fieldset>
                    <fieldset class="daojishi">
                        <legend>剩余时间</legend>
                        <span class="djs">43:04</span>
                    </fieldset>
                </div>
                <div class="col col2">
                    <fieldset class="kaoti">
                        <legend>考试题目</legend>
                        <div data-sp="0.26" class="com-mnks-question-detail">
                            <div class="detail-content" id="ComQuestionInfo_qundefined">
                                <div class="page-ipt-nick"></div>
                                <div class="timu">
                                    {{--<p>1、开启前照灯远光时仪表板上（如图所示）亮起。</p>--}}
                                </div>
                                <div class="answer-w clearfix">
                                    <div class="options-w left"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="kaoti-bar clearfix">
                        <fieldset class="tishi">
                            <legend>试题提示信息</legend>
                            <span>判断题，请判断对错</span>
                        </fieldset>
                        <div class="btns">
                            <button class="next-btn" data-page="next">下一题</button>
                            <button class="prev-btn" data-page="prev">上一题</button>
                            <button class="submit" ref="submit">交卷</button>
                        </div>

                    </div>
                </div>


                <div class="col col3">
                    <div class="datika">
                        <div class="num-box-nick" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <fieldset class="tishi-img">
                <legend>图片信息</legend>
                <div class="media-w">
                    <img src="https://jiakao-tiku.image.mucang.cn/tiku/res/889600.jpg" alt="开启前照灯远光时仪表板上（如图所示）亮起。" ref="bigImg">
                </div>
            </fieldset>
        </div>
    </div>
</div>
</div>
</div>
</body>
<script>

    var exam_arr = {};
    //选项点击事件
    function showCss(obj) {
        var xuan = [];
        var success = "";
        var error = "";

        $(".options-w.left img").each(function(k,v){
            if($(v).attr('src') == "/image/true.jpg")
            {
                xuan.push('false');
            }else{
                xuan.push('true');
            }
        });

        if(xuan.indexOf('false') == -1)
        {
            obj.xuan = 2;
            if($(obj).parent('p').attr('class') == 'success')
            {
                success = $(obj).parent('p').attr('data-a-label');
                $(obj).attr('src','/image/true.jpg');

                $(".datika button").each(function(k,v){
                    console.log($(v))
                    if(Number($(v).text()) == Number($(".page-ipt-nick").eq(0).text()))
                    {
                        $(this).addClass('green');
                    }
                })

            }else{
                error = $(obj).parent('p').attr('data-a-label');
                $(obj).attr('src','/image/ffalse.jpg');

                $(".options-w.left p").each(function(k,v){
                    if($(v).attr('class') == 'success')
                    {
                        success = $(this).attr('data-a-label');
                        $(this).children('img').attr('src','/image/true.jpg');
                    }
                });
                $(".datika button").each(function(k,v){
                    if(Number($(v).text()) == Number($(".page-ipt-nick").eq(0).text()))
                    {
                        $(this).addClass('red');
                    }
                })
            }
            exam_arr[Number($(".page-ipt-nick").eq(0).text())] = Number($(".page-ipt-nick").eq(0).text())+success+error;
        }
    }



    //定义一个分页方法，可多次调用
    function paginationNick(opt){

        //参数设置
        var pager={
            paginationBox:'',//分页容器-- 必填
            mainBox:'',//内容盒子--必填
            numBtnBox:'',//数字按钮盒子-- 必填
            btnBox:'',//按钮盒子 --必填
            ipt:'',//input class-- 必填
            goBtn:'',//go btn class --必填
            currentBtn:'',//当前按钮class name --必填
            pageCount:1,//每页显示几条数据
            numBtnCount:100,//当前页左右两边各多少个数字按钮
            currentPage:0,//当前页码data-page，首屏默认值
            maxCount:0,//ajax请求数据分成的最大页码
            data:[]//ajax请求的数据
        };
        pager = $.extend(pager,opt);//用于合并对象
        var flag = true;//用于判断是否调用存储答题卡函数

        //请求数据页面跳转方法
        function goPage(btn){
            //obj为ajax请求数据
            var scoreObject = eval('{{$data}}'.replace(/&quot;/g,'"'));//将json转成js对象
            var obj={other:{},value:scoreObject};

            //将展示的数据赋值给pager.data  (array)
            pager.data=obj.value;
            //设置ajax请求数据分成的最大页码
            pager.maxCount=pager.data.length % pager.pageCount ? parseInt(pager.data.length / pager.pageCount) +1 :
                pager.data.length / pager.pageCount;
            //设置当前页码
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
            if(flag)
            {
                //创建数字按钮
                createNumBtn(pager.currentPage);
                flag = false;
            }else{
                getNumBtn(pager.currentPage);
            }
            //赋值给页码跳转输入框的value，表示当前页码
            $('.'+pager.btnBox).val(pager.currentPage+1);//最大div
            $(' .'+pager.ipt).text(pager.currentPage+1); //显示当前页码
            $("#totalcount").text(pager.maxCount);//显示总页码
            //内容区填充数据
            var arr=[],str='',xuanxiang='';
            arr=pager.data.slice(pager.pageCount*pager.currentPage,
                pager.data.length - pager.pageCount*(pager.currentPage+1) > -1 ?
                    pager.pageCount*(pager.currentPage+1) : pager.data.length);
            var exam_correct = "";//正确答案
            var explain = "";
            arr.forEach(function(v){
                str+='<span>'+v.title+'</span>';
                exam_correct = v.exam_correct;
                explain = v.explain;
                xuanxiang += '<p data-a-label="A"><img src="/image/false.jpg" onclick="showCss(this)"> &nbsp;A、'+v.option_a+'</p>\n';
                xuanxiang += '<p data-a-label="B"><img src="/image/false.jpg" onclick="showCss(this)"> &nbsp;B、'+v.option_b+'</p>\n';
                xuanxiang += '<p data-a-label="C"><img src="/image/false.jpg" onclick="showCss(this)"> &nbsp;C、'+v.option_c+'</p>\n';
                xuanxiang += '<p data-a-label="D"><img src="/image/false.jpg" onclick="showCss(this)"> &nbsp;D、'+v.option_d+'</p>';
                xuanxiang += '<input type="hidden" class="exam_id" value="'+v.exam_id+'">';
            });

            $(".options-w.left").html(xuanxiang);//展示选项
            $('.'+pager.mainBox).html(str);

            $(".options-w.left").children('p').each(function(k,v){
                if($(v).attr('data-a-label')==exam_correct) $(this).attr('class','success');//正确值得默认classname
                if($(v).text().length <= 2 )$(this).hide();//当选项里面没有内容不展示
            });

            for(var r in exam_arr)
            {
                if(pager.currentPage+1 == exam_arr[r].slice(0,1))
                {
                    if(exam_arr[r].length == 2)
                    {
                        $("#ul_answers li").each(function(k,v){
                            if($(v).hasClass('success'))
                            {
                                $(this).children('img').attr('src','/image/true.jpg');
                            }
                        })
                    }else if(exam_arr[r].length == 3)
                    {
                        $("#ul_answers li").each(function(k,v){
                            if($(v).hasClass('success'))
                            {
                                $(this).children('img').attr('src','/image/true.jpg');
                            }
                            if($(v).attr('data-a-label') == exam_arr[r].slice(2,3))
                            {
                                $(this).children('img').attr('src','/image/ffalse.jpg');
                            }
                        })
                    }
                }
            }
        }

        //创建非数字按钮和数据内容区
        function createOtherBtn(){
            //ipt value变化并赋值给go btn data-page
            $('.'+pager.btnBox+' .'+pager.ipt).change(function(){
                if(!isNaN($(this).val())){//是数字
                    if($(this).val() > pager.maxCount){//限制value最大值，跳转尾页
                        $(this).val(pager.maxCount);
                    }
                    if($(this).val()<1){//限制value最小值，跳转首页
                        $(this).val(1);
                    }
                }else{//非数字清空value
                    $(this).val('');
                }
                $('.'+pager.btnBox+' .'+pager.goBtn).attr('data-page',$(this).val() ? $(this).val()-1 : '');
            });
            //每个btn绑定请求数据页面跳转方法
            $('.'+pager.btnBox+' button').each(function(i,v){
                $(this).click(function(){
                    //有值且不是上一次的页码时才调用
                    if(v.getAttribute('data-page') && v.getAttribute('data-page') != pager.currentPage){
                        goPage(v.getAttribute('data-page'));
                    }
                });
            });
        }

        //创建数字按钮
        function createNumBtn(page){
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
                if(str.match(/<\/button>/ig).length<pager.numBtnCount*2+1){
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

        }


        function getNumBtn(page) {
            $(".num-box-nick button").each(function(k,v){
                if($(v).attr('disabled') == 'disabled')
                {
                    $(this).removeAttr('disabled');
                }
                if(Number($(v).text()) == page+1)
                {
                    $(this).attr('disabled','disabled');
                }
            })
        }

        //首屏加载
        createOtherBtn();//首屏加载一次非数字按钮即可
        goPage();//请求数据页面跳转满足条件按钮点击都执行，首屏默认跳转到currentPage

    }
    //调用
    paginationNick({
        paginationBox:'box-nick',//分页容器--必填
        mainBox:'main-box-nick',//内容盒子--必填
        numBtnBox:'datika',//数字按钮盒子-- 必填
        btnBox:'btn-box-nick',//按钮盒子 --必填
        ipt:'page-ipt-nick',//input class-- 必填
        goBtn:'go-btn-nick',//go btn class --必填
        currentBtn:'active-nick'//当前按钮class name --必填
    });
</script>
</html>
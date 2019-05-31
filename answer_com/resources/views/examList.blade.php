<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>pagination-nick</title>
    <link rel="stylesheet" href="./css/jx_index.css">{{--导航栏VIP命题--}}
    <style>
        button{
            padding:5px;
            margin:5px;
        }
        .active-nick{
            color:red;
        }
        input{
            width:50px;
            text-align:center;
        }
    </style>
</head>
<body>
<!--小车考试-->
<div class="car_s_exam">

    <div class="car_s_exam_context">
        <div class="title">小车理论考试</div>
        <div class="exam_card">
            <div class="exam_card_header">
                科目一交规
            </div>
            <div class="exam_card_body">
                <div>
                    <a href="{{url('orders')}}" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM1_SSLX')"><span>顺序练习</span></a>
                    <a href="{{url('getOrder')}}" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM1_SJLX')"><span>随机练习</span></a>
                </div>
                <div>
                    <a href="http://mnks.jxedt.com/ckm1/zxlx/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM1_ZXLX')"><span>专项练习</span></a>
                    <a href="http://mnks.jxedt.com/ckm1/wdct/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM1_CTLX')"><span>错题练习</span></a>
                </div>
            </div>
            <div class="exam_card_footer">
<span>
<a href="http://mnks.jxedt.com/ckm1/mnks/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM1_MNLX')">
模拟考试
</a>
</span>


            </div>
        </div>
        <div class="exam_card">
            <div class="exam_card_header">
                科目四安全文明驾驶
            </div>
            <div class="exam_card_body">
                <div>
                    <a href="http://mnks.jxedt.com/ckm4/sxlx/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM4_SSLX')"><span>顺序练习</span></a>
                    <a href="http://mnks.jxedt.com/ckm4/sjlx/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM4_SJLX')"><span>随机练习</span></a>
                </div>
                <div>
                    <a href="http://mnks.jxedt.com/ckm4/zxlx/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM4_ZXLX')"><span>专项练习</span></a>
                    <a href="http://mnks.jxedt.com/ckm4/wdct/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM4_CTLX')"><span>错题练习</span></a>
                </div>
            </div>
            <div class="exam_card_footer">
                <span><a href="http://mnks.jxedt.com/ckm4/mnks/" target="_blank" onclick="clickLog('from=JXEDT_HOME_LLKS_KM4_MNLX')">模拟考试</a></span>
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
        function createOtherBtn(){
            $('.'+pager.paginationBox).html('<div class="'+pager.btnBox+'"><button data-page="first" class="first-btn">首页</button><button data-page="prev" class="prev-btn">上一页</button><span class="'+pager.numBtnBox+'"></span><button data-page="next" class="next-btn">下一页</button><input type="text" placeholder="请输入页码" class="'+pager.ipt+'"><button class="'+pager.goBtn+'">确定go</button><button data-page="last" class="last-btn">尾页</button></div><div class="'+pager.mainBox+'"></div>');

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
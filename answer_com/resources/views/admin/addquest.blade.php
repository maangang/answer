<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>添加页面</title>
    <link rel="stylesheet" href="/js/layui/css/layui.css">
    <style>
        body{
            text-align:center;
            background-color: #D3D4D3;
        }
        .box{
            margin:0 auto;
            margin-top: 10px;
            width: 620px;
            /*border: 2px dashed #9F9F9F;*/
        }

    </style>
</head>
<body>
<center>
    <h1 style="color: #0C0C0C; margin-top: 10px;" >添加试题</h1>
</center>
<div class="box">
    <div style="margin-top: 20px">
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">题目</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入题目" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">选项A</label>
            <div class="layui-input-block">
                <input type="text" name="option_a" required  lay-verify="required" placeholder="请输入内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">选项B</label>
            <div class="layui-input-block">
                <input type="text" name="option_b" required  lay-verify="required" placeholder="请输入内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">选项C</label>
            <div class="layui-input-block">
                <input type="text" name="option_c" required  lay-verify="required" placeholder="请输入内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">选项D</label>
            <div class="layui-input-block">
                <input type="text" name="option_d" required  lay-verify="required" placeholder="请输入内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">正确答案</label>
            <div class="layui-input-block">
                <select name="exam_correct"  lay-verify="required">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">车型</label>
            <div class="layui-input-block">
                <select name="car_type" required  lay-verify="required">
                    <option value=""></option>
                    <option value="小车">小车</option>
                    <option value="客车">客车</option>
                    <option value="货车">货车</option>
                    <option value="摩托车">摩托车</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">章节</label>
            <div class="layui-input-block">
                <select name="section"  lay-verify="required">
                    <option value=""></option>
                    <option value="第一章">第一章</option>
                    <option value="第二章">第二章</option>
                    <option value="第三章">第三章</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">科目选择</label>
            <div class="layui-input-block">
                <select name="course_type"  lay-verify="required">
                    <option value=""></option>
                    <option value="科目一">科目一</option>
                    <option value="科目四">科目四</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">内容类型</label>
            <div class="layui-input-block">
                <select name="zhuan_data" lay-filter="aihao" >
                    <option value="0"></option>
                    <option value="文字题">文字题</option>
                    <option value="图片题">图片题</option>
                    <option value="动画题">动画题</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">答案类型</label>
            <div class="layui-input-block">
                <select name="zhuan_correct" lay-filter="aihao">
                    <option value="0"></option>
                    <option value="正确题">正确题</option>
                    <option value="错误题">错误题</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">试题类型</label>
            <div class="layui-input-block">
                <select name="zhuan_type" lay-filter="aihao">
                    <option value="0"></option>
                    <option value="判断题">判断题</option>
                    <option value="多选题">多选题</option>
                    <option value="单选题">单选题</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">知识点类型</label>
            <div class="layui-input-block">
                <select name="zhuan_intell" lay-filter="aihao">
                    <option value="0"></option>
                    <option value="速度题">速度题</option>
                    <option value="距离题">距离题</option>
                    <option value="标志题">标志题</option>
                    <option value="手势题">手势题</option>
                    <option value="信号灯">信号灯</option>
                    <option value="酒驾题">酒驾题</option>
                    <option value="标线题">标线题</option>
                    <option value="灯光题">灯光题</option>
                    <option value="装置题">装置题</option>
                    <option value="路况题">路况题</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">详解</label>
            <div class="layui-input-block">
                <textarea name="explain"  placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
        {{-- <div class="layui-upload">
             <label class="layui-form-label"></label>
             <button type="button" class="layui-btn layui-btn-radius"  name="file" id="test1">图片上传</button>--}}
      {{--  <blockquote class="layui-elem-quote layui-quote-nm" >
                 预览图：
                 <div class="layui-upload-list" id="demo2"> </div>
             </blockquote>--}}
       {{-- </div>
        </div>--}}

        <div class="layui-form-item">
            <div class="layui-input-block">
                {{--<input type="file" name="picture" id="picture" >--}}
                <button type="button" class="layui-btn layui-btn-radius"  name="file" id="file">图片上传</button>
                <button class="layui-btn layui-btn-radius" lay-submit lay-filter="formDemo">立即提交</button>
            </div>
            <p id="demo2"></p>
        </div>
        </div>
    </form>
    </div>
</div>
</body>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/layui/layui.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    layui.use(['upload','jquery','layedit'], function(){
        var upload = layui.upload;
        var jquery = layui.jquery;
        var layedit = layui.layedit;
        var form = layui.form;
        //执行实例
        upload.render({
            elem: '#file'
            ,url: "{{url('question/upload')}}"
            ,multiple: true
          /* ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                   // alert(file);
                    jquery('#demo2').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img" style="width: 100px;">')
                });
            }*/
            ,done: function(res, index, upload){ //上传后的回调
                var $src = res['data']['src'];
                console.log($src);
                jquery('#demo2').append('<input type="text" name="img_exam"  value="'+ $src +'" class="layui-input">');
        }
    });

        //监听提交
        form.on('submit(formDemo)',function (data) {
            console.log(data);
            //data.field 数据
            jquery.post("{{url('question/questAdd')}}",data.field,function (result) {
                layer.msg('添加成功');
                window.location.href="questList";
            });
            //layer.closeAll();
            return false;
        });
    });
</script>
</html>
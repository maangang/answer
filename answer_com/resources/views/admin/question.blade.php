<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>题库管理</title>
    <link rel="stylesheet" href="/js/layui/css/layui.css">
    <link rel="stylesheet" href="/css/app.css">
    <style>
    .type{
        float: right;
    }
    </style>
</head>
<body>
<div id="table">
    <center>
        <h1 style="color: #0C0C0C; margin-top: 10px;" >试题列表</h1>
    </center>
    <a href="{{url('question/addQuest')}}">
        <button class="layui-btn layui-btn-sm">
            <i class="layui-icon">&#xe654;</i>
        </button>
    </a>
    <div class ="type">
        <a href="{{url('question/questList')}}">
            <button id="xiao" class="layui-btn layui-btn-radius layui-btn-primary layui-btn-sm">
                <i class="layui-icon">小车</i>
            </button>
        </a>
        <a href="{{url('question/keche')}}">
            <button id="ke"  class="layui-btn layui-btn-radius layui-btn-primary layui-btn-sm">
                <i class="layui-icon">客车</i>
            </button>
        </a>
        <a href="{{url('question/huoche')}}">
            <button  id="huo" class="layui-btn layui-btn-radius layui-btn-primary layui-btn-sm">
                <i class="layui-icon">货车</i>
            </button>
        </a>
        <a href="{{url('question/motuo')}}">
            <button  id="mo" class="layui-btn layui-btn-radius layui-btn-primary layui-btn-sm">
                <i class="layui-icon">摩托车</i>
            </button>
        </a>
    </div>

    <div id="car_type">
        <table  class="layui-table" lay-skin="line">
            <colgroup>
                <col width="150">
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>ID</th>
                <th>题目</th>
                <th>图片</th>
                <th>正确答案</th>
                <th>车型</th>
                <th>章节</th>
                <th>科目选择</th>
                <th>详解</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody id="tbody" >
            @foreach( $data as $v)
                <tr>
                    <td>{{$v->exam_id}}</td>
                    <td>{{$v->title}}</td>
                    <td><img src="{{$v->img_exam}}" style="width: 50px;height:30px;"></td>
                    <td>{{$v->exam_correct}}</td>
                    <td>{{$v->car_type}}</td>
                    <td>{{$v->section}}</td>
                    <td>{{$v->course_type}}</td>
                    <td>{{$v->explain}}</td>
                    <td>{{$v->sort}}</td>
                    <td>
                        <button class="layui-btn layui-btn-sm" onclick="upd({{$v->exam_id}})">
                            <i class="layui-icon">&#xe642;</i>
                        </button>
                        <button class="layui-btn layui-btn-sm" onclick="del({{$v->exam_id}})">
                            <i class="layui-icon">&#xe640;</i>
                        </button>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</div >



</body>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/layui/layui.js"></script>
<script>

   $('.pagination a').on('click', function (e) {
        var url = $(this).attr('href');
        $("#table").load(url);
        return false;
    });
  //渲染修改
  function upd(exam_id)
  {
      location.href="updQuest?exam_id="+exam_id;
  }
  //删除
  function del(exam_id) {
        $.ajax({
            type: "get",
            url: "{{url('question/questDel')}}",
            data:{'exam_id' : exam_id},
            success: function(msg){
                window.location.href="questList";
                layer.msg('删除成功');
            }
    });
  }

</script>
</html>
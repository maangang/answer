<?php
/**
 * Created by PhpStorm.
 * User: 郝颖
 * Date: 2019/5/31
 * Time: 19:30
 */

namespace App\Model;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class QuestionModel extends Model
{
    public $table = "dolly_exam";
    //小车列表
    public function questList()
    {
        $data = DB::table('dolly_exam')->where('car_type', '=', '小车')->orderBy('exam_id', 'asc')->paginate(2);
        return $data;
    }
    //客车列表
    public function keche()
    {
        $data = DB::table('dolly_exam')->where('car_type','=','客车')->orderBy('exam_id', 'asc')->paginate(2);
        return $data;
    }
    //货车列表
    public function huoche()
    {
        $data = DB::table('dolly_exam')->where('car_type','=','货车')->orderBy('exam_id', 'asc')->paginate(2);
        return $data;
    }
    //摩托车
    public function motuo()
    {
        $data = DB::table('dolly_exam')->where('car_type','=','摩托车')->orderBy('exam_id', 'asc')->paginate(2);
        return $data;
    }


    public function questAdd()
    {
        $data =Input::all();

        unset($data['file']);

        $sort = DB::table('dolly_exam')->max('sort')+1;

        $data['sort']= $sort;

        return DB::table('dolly_exam')->insert($data);

    }
    //渲染修改页面
    public function updQuest()
    {
        $id = Input::get('exam_id');
        return DB::table('dolly_exam')->where('exam_id','=',$id)->first();
    }
    //处理修改数据
    public function questUpd()
    {
        $data = Input::all();

        unset($data['file']);

        $id = $data['exam_id'];

        unset($data['exam_id']);

        $res = DB::table('dolly_exam')->where('exam_id','=',$id)->update($data);
        if($res)
        {
            return ['msg'=>'ok','code'=>1];
        }else{
            return ['msg'=>'no','code'=>0];
        }

    }


}
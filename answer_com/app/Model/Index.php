<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/6/1
 * Time: 11:52
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Index extends  Model
{

    public function select_type($table_name,$course_type,$user_id)
    {
        if($table_name == '小车') $table  = "dolly_exam";
        if($table_name == '客车') $table  = "carriage_exam";
        if($table_name == '货车') $table  = "truck_exam";
        if($table_name == '摩托车') $table = "motorcycle_exam";

        $data['num_count'] = DB::table($table)->where('course_type','=',$course_type)->count();
        $data['user'] = DB::table('count')->where(['user_id'=>"$user_id",'cart_type'=>"$table_name",'course_type'=>$course_type])->first();
        return $data;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/5/27
 * Time: 22:16
 */

namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Exam
{
    public function order_template($che_type,$course_type)
    {
        if($che_type == '小车') $table  = "dolly_exam";
        if($che_type == '客车') $table  = "carriage_exam";
        if($che_type == '货车') $table  = "truck_exam";
        if($che_type == '摩托车') $table = "motorcycle_exam";

        $data = DB::table($table)->where(['course_type'=>$course_type])->get()->map(function ($value) {return (array)$value;})->toArray();
        return $data;
    }

    public function random_template($che_type,$course_type)
    {
        if($che_type == '小车') $table  = "dolly_exam";
        if($che_type == '客车') $table  = "carriage_exam";
        if($che_type == '货车') $table  = "truck_exam";
        if($che_type == '摩托车') $table = "motorcycle_exam";

        $data = DB::table($table)->where(['course_type'=>$course_type])->get()->map(function ($value) {return (array)$value;})->toArray();
        return $data;
    }

    public function do_collect()
    {
        DB::table('collect');
    }

}
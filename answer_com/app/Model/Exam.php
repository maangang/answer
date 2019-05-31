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
    public function index()
    {
        $data = DB::table('dolly_exam')->get();
        var_dump($data);
    }
    public function setCourse_typeAttr($val){
        return '213'.$val;
    }

    public function getOrder()
    {
        $data = DB::table('dolly_exam')->get()->map(function ($value) {
        return (array)$value;
        })->toArray();
        return $data;
    }
}
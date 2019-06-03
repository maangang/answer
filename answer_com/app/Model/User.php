<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/6/3
 * Time: 11:56
 */

namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class User
{
    public function ranking($che_type,$course_type)
    {
        $data['count_3'] = DB::table('user')->where(['che_type'=>$che_type])->where(['course'=>$course_type])->orderBy('grade','desc')->orderBy('time','asc')->limit(3)->get();
    
        $data['count_all'] = DB::table('user')->where(['che_type'=>$che_type])->where(['course'=>$course_type])->orderBy('grade','desc')->orderBy('time','asc')->get();
        $data['count_all'] = json_encode($data['count_all']);
        $data['count_all'] = json_decode($data['count_all'],true);
        return $data;
    }

}
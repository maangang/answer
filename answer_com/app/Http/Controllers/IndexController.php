<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/6/1
 * Time: 11:52
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use App\Model\Index;

class IndexController extends Controller
{
    //选择车型
    public function select_type(Request $request)
    {
        $user_id = $request->input('user_id');
        if($type = $request->input('type'))
        {
           $data['che_type'] = $type;
        }else{
            $data['che_type'] = "小车";
        }
        if($course_type = $request->input('course_type'))
        {
            $data['che_type'] = $request->input('che_type');
            $data['course_type'] = $course_type;
        }else{
            $data['course_type'] = "科目一";
        }
        $model = new Index;
        $num_data = $model->select_type($data['che_type'],$data['course_type'],$user_id);

        if($num_data['user'])
        {
            $count_max = count(explode(',',$num_data['user']->count_max));
            $count['my_error']  = count(explode(',',$num_data['user']->my_error));//做错的
            $count['not_do']    = $num_data['num_count']-$count_max;//未做的
            $count['correct']   = $count_max-$count['my_error'];//做对的
            $count['num_count'] = $num_data['num_count'];//总题数
        }else{
            $count = '0';
        }

        return view('examList',['data'=>$data,'count'=>$count]);
    }
}
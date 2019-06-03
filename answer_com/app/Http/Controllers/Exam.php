<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/5/27
 * Time: 22:03
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Exam as ExamModel;

class Exam extends Controller
{

    public function order_template(Request $request)
    {
        $che_type    = $request->input('che_type');
        $course_type = $request->input('course_type');
        $model = new ExamModel;
        $data = $model->order_template($che_type,$course_type);

        return view('order',['data'=>trim(json_encode($data)),'che_type'=>$che_type,'course_type'=>$course_type]);
    }

    public function random_template(Request $request)
    {
        $che_type    = $request->input('che_type');
        $course_type = $request->input('course_type');
        $model = new ExamModel;
        $data = $model->random_template($che_type,$course_type);

        return view('random',['data'=>trim(json_encode($data)),'che_type'=>$che_type,'course_type'=>$course_type]);
    }

    public function simulation_template(Request $request)
    {
        $che_type    = $request->input('che_type');
        $course_type = $request->input('course_type');
        $model = new ExamModel;
        $data = $model->random_template($che_type,$course_type);

        return view('simulation',['data'=>trim(json_encode($data))]);
    }


    public function do_collect(Request $request)
    {

    }
}
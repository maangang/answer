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
use App\Model\Special;
use App\Model\Mistakes;
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

    public function special()
    {
        $model = new Special;
        $data = $model->special();
        return view('special',[
            'num'=>$data['num'],
            'zhuan_data1'=>$data['zhuan_data1'],
            'zhuan_data2'=>$data['zhuan_data2'],
            'zhuan_correct'=>$data['zhuan_correct'],
            'zhuan_correct1'=>$data['zhuan_correct1'],
            'zhuan_correct2'=>$data['zhuan_correct2'],
            'zhuan_type' => $data['zhuan_type'],
            'zhuan_type1'=>$data['zhuan_type1'],
            'zhuan_type2' => $data['zhuan_type2'],
            'zhuan_intell'=>$data['zhuan_intell'],
            'zhuan_intell1'=>$data['zhuan_intell1'],
            'zhuan_intell2'=>$data['zhuan_intell2'],
            'zhuan_intell3'=>$data['zhuan_intell3'],
            'zhuan_intell4'=>$data['zhuan_intell4'],
            'zhuan_intell5'=>$data['zhuan_intell5'],
            'zhuan_intell6'=>$data['zhuan_intell6'],
            'zhuan_intell7'=>$data['zhuan_intell7'],
            'zhuan_intell8'=>$data['zhuan_intell8'],
            'zhuan_intell9'=>$data['zhuan_intell9'],
            'zhuan_intell10'=>$data['zhuan_intell10'],
            'zhuan_intell11'=>$data['zhuan_intell11'],
            'zhuan_intell12'=>$data['zhuan_intell12'],
            'zhuan_intell13'=>$data['zhuan_intell13'],
            'zhuan_intell14'=>$data['zhuan_intell14'],
        ]);
    }
    public function textTopic()
    {
         $model = new Special();
        $data = $model->textTopic();
        $data = json_encode($data);
        return view('texttopic',['data'=>$data]);
    }

      public function mistakes()
      {
         $model = new Mistakes;
         $data = $model->mistakes();
         return view('mistakes',['data'=>$data]);
      }
}
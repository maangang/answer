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
    public function examList()
    {
        $ExamModel = new ExamModel;
       //var_dump($ExamModel->index());
        return view('examList');
    }

    public function cheType()
    {
        $request = new Request;
        $data = $request->all();
        var_dump( $data);
    }

    public function getOrder()
    {
        $ExamModel = new ExamModel;
        $data = $ExamModel->getOrder();
        //var_dump(trim(json_encode($data)));die;
        return view('random',['data'=>trim(json_encode($data))]);
    }
}
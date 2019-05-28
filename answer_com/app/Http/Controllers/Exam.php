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


}
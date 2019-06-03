<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/6/3
 * Time: 11:58
 */

namespace App\Http\Controllers;
use App\Model\Collect;
use App\Model\Mistakes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User as userModel;

class User extends Controller
{
    public function ranking(Request $request)
    {
    	$che_type = $request->input('che_type');
        $course_type = $request->input('course_type');
        $model = new userModel;
        $data  = $model->ranking($che_type,$course_type);
        return view('ranking',['res1'=>$data['count_3'],'res4'=>$data['count_all']]);
    }

    public function collect()
    {
       $model = new Collect;
       $data = $model->collect();
        return view('collect',['data'=>$data]);
    }
    public function collectAdd()
    {
    	$model = new Collect;
        return $model->collectAdd();
    }
    public function mistakes()
    {
         $model = new Mistakes;
         $data = $model->mistakes();
         return view('mistakes',['data'=>$data]);
    }
}
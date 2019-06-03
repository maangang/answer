<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/6/3
 * Time: 11:58
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User as userModel;

class User extends Controller
{
    public function ranking()
    {
        $model = new userModel;
        $data  = $model->ranking();
        return view('ranking',['res1'=>$data['count_3'],'res4'=>$data['count_all']]);
    }
}
<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Login;

class LoginController extends Controller
{
    //验证登陆
    public function login_do(Request $request)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $model = new Login;
        return $model->login_do($username,$password);

    }
    //验证唯一性
    public function username(Request $request)
    {
        $name = $request->input("username");
        $model = new Login;
        return $model->username($name);
    }
    //注册
    public function insert(Request $request)
    {
        $fileObj = $request->file('img');
        $name    = $request->input("username");
        $pwd     = md5($request->input("password"));
        $model = new Login;
        return $model->insert($fileObj,$name,$pwd);
    }

    public function logout(Request $request){
        $request->session()->flush();
    }

}
<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
* 
*/
class LoginController extends Controller
{
	public function login_do(Request $request){
		$username = $request->input('username');
		$password = md5($request->input('password'));
		$res = DB::table("user")->where([
			['user_name',"=","$username"],
			['password',"=","$password"]
		])->first();
		$uid = $res['user_id'];
		if ($res) {
			echo 1;
			session(['name'=>$username]);
			//session(['id'=>$uid]);
		}else{
			echo 2;
		}
	}
}
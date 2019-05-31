<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
//use OSS\OssClient;
/**
* 
*/
class RegisterController extends Controller
{
	public function username(Request $request){
		$name = $request->input("username");
		$res = DB::table("user")->where("user_name","=",$name)->first();
		if ($res) {
			echo 1;
		}else{
			echo 2;
		}
	}

	public function insert(Request $request){
		// $file = $request->file('img');
		// $files = $file->getRealPath();
		// //var_dump($files);die;
		// 	//返回文件是否上传成功
		// if ($file->isValid()) {
		//     //获取文件的扩展名
		//     $ext = $file->getClientOriginalExtension();
		//     //var_dump($ext);die;
		//     //获取文件的绝对路径
		//     //$path = $file->getRealPath();
		//     //定义文件名
		//     $filename = date('Ymdhis') . '.' . $ext;
		//    // $res = $file->move('./uploads', $filename);
		//     $ossClient = new OssClient();
		//     $result = $ossClient->uploadFile("qmsjx","uploads/".$filename,$files);
		// }
		$fileObj = $request->file('img');
        $remoteDir = config("filesystems.disks.oss.ad_upload_dir");
        //var_dump($remoteDir);die;
        $Register = new Register();
        $res = $Register->doUpload($fileObj,$remoteDir);
        $img = $res['fileUrl'];
        $name = $request->input("username");
        $pwd = md5($request->input("password"));
        $ress = DB::table("user")->insert(
        	[
        		"user_name"	=> "$name",
        		"password"	=> "$pwd",
        		"img"		=> "$img"
        	]
        );
        if ($ress) {
        	echo 1;
        }else{
        	echo 2;
        }
	}
}
?>
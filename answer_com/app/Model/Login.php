<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/5/31
 * Time: 21:45
 */

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    public function login_do($username,$password)
    {
        $res = DB::table("user")->where([['user_name',"=","$username"],['password',"=","$password"]])->first();
        if ($res) {
            echo 1;
            session(['name'=>$username]);
            session(['id'=>$res->user_id]);
        }else{
            echo 2;
        }
    }

    public function username($name)
    {
        $res = DB::table("user")->where("user_name","=",$name)->first();
        if ($res) {
            echo 1;
        }else{
            echo 2;
        }
    }

    public function insert($fileObj,$name,$pwd){

        $remoteDir = config("filesystems.disks.oss.ad_upload_dir");
        $res = $this->doUpload($fileObj,$remoteDir);
        $img = $res['fileUrl'];

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

    public function doUpload($fileObj,$remoteDir)
    {
        $path = $fileObj->store($remoteDir,'oss');
        $imgUrl = "http://".config("filesystems.disks.oss.bucket").".".config("filesystems.disks.oss.endpoint").$path;
        if ( $path ){
            return ["status" => "SUCCESS","fileUrl" => $imgUrl];
        }
        return ["status" => "ERROR","fileUrl" => ""];
    }

}
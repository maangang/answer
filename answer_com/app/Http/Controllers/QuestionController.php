<?php
/**
 * Created by PhpStorm.
 * User: 郝颖
 * Date: 2019/5/28
 * Time: 11:18
 */

namespace App\Http\Controllers;
use App\Http\models\QuestionModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use OSS\OssClient;


class QuestionController extends Controller
{
    //展示数据
    public function questList(Request  $request)
    {
        $model = new QuestionModel();
        $data =  $model->questList( );
        return view('admin.question',['data'=>$data]);
    }
    //客车列表
    public function keche()
    {
        $model = new QuestionModel();
        $data =  $model->keche( );
        return view('admin.keche',['data'=>$data]);
    }
    //货车列表
    public function huoche()
    {
        $model = new QuestionModel();
        $data =  $model->huoche( );
        return view('admin.huoche',['data'=>$data]);
    }
    //摩托车
    public function motuo()
    {
        $model = new QuestionModel();
        $data =  $model->motuo( );
        return view('admin.motuoche',['data'=>$data]);
    }
    public function car_type(Request $request)
    {


            $model = new QuestionModel();
            $data =  $model->car_type( );


        return ['data'=>$data];
    }
    //渲染添加页面
    public function addQuest()
    {
        return view('addquest');
    }
    //处理添加数据
    public function questAdd()
    {
        $model = new QuestionModel();
        $data =  $model->questAdd( );

    }
    //渲染修改数据
    public function updQuest()
    {
        $model = new QuestionModel();
        $data = $model->updQuest();
        //var_dump($data);
        return view('updquest',['data'=>$data]);
    }
    //处理修改数据
    public function questUpd()
    {
        $model = new QuestionModel();
        $data = $model->questUpd();
        return $data;
    }
    //删除
    public function questDel()
    {
        $id = Input::get('exam_id');
        return DB::table('dolly_exam')->where('exam_id','=',$id)->delete();
    }

    //图片上传
    public function upload(Request $request)
    {

        $file =$request-> file('file');


        if( $file->isValid()) {
            $ext = $file->getClientOriginalExtension();//后缀

            $filename = date('Y-m-d-H-i-s') . '.' . $ext;//新文件名

            $filePath = $file->getRealPath();


            //OSS::publicUpload('haoying', $filename, $filePath, ['ContentType' => $file->getClientMimeType()]);
            //获取上传图片的Url链接
           // $Url = OSS::getPublicObjectURL('haoying', $filename);

            $oss = new OssClient();

            $res = $oss->uploadFile('haoying', $filename, $filePath);

            $path = $res['info']['url'];
            //var_dump($path);die;
            $data = $data = ['src' => $path];
            $data = ['code' => '0', 'msg' => '', 'data' => $data];

            return json_encode($data);
        }
    }
}
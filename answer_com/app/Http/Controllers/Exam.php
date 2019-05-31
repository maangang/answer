<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Exam as ExamModel;
use Illuminate\Support\Facades\DB;
class Exam extends Controller
{
    public function examList()
    {
        $ExamModel = new ExamModel;
       //var_dump($ExamModel->index());
        return view('examList');
    }

	public function examLists(Request $request)
    {
       //var_dump($ExamModel->index());
       	$lx = $request->get('name');
       	if ($lx == 1) {
       		$lxs = "小车";
       	}elseif($lx == 2){
       		$lxs = "客车";
       	}elseif($lx == 3){
       		$lxs = "货车";
       	}elseif($lx == 4){
       		$lxs = "摩托车";
       	}
       	$id = $request->get('id');
       	//var_dump($id);die;
       	$data = DB::table('yhtb')->where('uid','=',$id)->first();
       	//var_dump($data);die;
       	$c = $data->cts;
       	$d = $data->dts;
       	$h = $c+$d;
        return view('examList',['lx'=>$lxs,'name'=>$lx,'cts'=>$c,'dts'=>$d,'h'=>$h]);
    }    

}
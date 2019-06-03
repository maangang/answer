<?php
/**
 * Created by PhpStorm.
 * User: 李明泽
 * Date: 2019/6/3
 * Time: 11:14
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class Special extends Model
{
    public function special()
    {
        //按内容类型 统计
        $data['zhuan_data1'] = DB::table('dolly_exam')->where('zhuan_data','=','文字题')->count();
        $data['zhuan_data2']  = DB::table('dolly_exam')->where('zhuan_data','=','图片题')->count();
        $data['num'] = DB::table('dolly_exam')->count();
        //按答案类型
        $data['zhuan_correct1'] = DB::table('dolly_exam')->where('zhuan_correct','=','正确题')->count();
        $data['zhuan_correct2'] = DB::table('dolly_exam')->where('zhuan_correct','=','错误题')->count();
        $data['zhuan_correct'] =  $data['zhuan_correct1']+$data['zhuan_correct2'];
        //按试题类型
        $data['zhuan_type1'] = DB::table('dolly_exam')->where('zhuan_type','=','判断题')->count();
        $data['zhuan_type2'] = DB::table('dolly_exam')->where('zhuan_type','=','单选题')->count();
        $data['zhuan_type'] = $data['zhuan_type1']+$data['zhuan_type2'];
        //按知识点类型
        $data['zhuan_intell1'] = DB::table('dolly_exam')->where('zhuan_intell','=','时间题')->count();
        $data['zhuan_intell2'] = DB::table('dolly_exam')->where('zhuan_intell','=','距离题')->count();
        $data['zhuan_intell3'] = DB::table('dolly_exam')->where('zhuan_intell','=','速度题')->count();
        $data['zhuan_intell4'] = DB::table('dolly_exam')->where('zhuan_intell','=','罚款题')->count();
        $data['zhuan_intell5'] = DB::table('dolly_exam')->where('zhuan_intell','=','标志题')->count();
        $data['zhuan_intell6'] = DB::table('dolly_exam')->where('zhuan_intell','=','手势题')->count();
        $data['zhuan_intell7'] = DB::table('dolly_exam')->where('zhuan_intell','=','信号题')->count();
        $data['zhuan_intell8'] = DB::table('dolly_exam')->where('zhuan_intell','=','记分题')->count();
        $data['zhuan_intell9'] = DB::table('dolly_exam')->where('zhuan_intell','=','酒驾题')->count();
        $data['zhuan_intell10'] = DB::table('dolly_exam')->where('zhuan_intell','=','标线题')->count();
        $data['zhuan_intell11'] = DB::table('dolly_exam')->where('zhuan_intell','=','灯光题')->count();
        $data['zhuan_intell12'] = DB::table('dolly_exam')->where('zhuan_intell','=','装置题')->count();
        $data['zhuan_intell13'] = DB::table('dolly_exam')->where('zhuan_intell','=','路况题')->count();
        $data['zhuan_intell14'] = DB::table('dolly_exam')->where('zhuan_intell','=','仪表题')->count();
        $data['zhuan_intell'] = $data['zhuan_intell1']+$data['zhuan_intell2']+$data['zhuan_intell3']+$data['zhuan_intell4']+$data['zhuan_intell5']+$data['zhuan_intell6']+$data['zhuan_intell7']+$data['zhuan_intell8']+$data['zhuan_intell9']
            +$data['zhuan_intell10']+$data['zhuan_intell11']+$data['zhuan_intell12']+$data['zhuan_intell13']+$data['zhuan_intell14'];
            return $data;
    }
    public function textTopic()
    {
        $id = Input::get('id');
        if($id == '1')
        {
            $data = DB::table('dolly_exam')->where('zhuan_data','=','文字题')->get();
        }
        if($id == '2'){
            $data = DB::table('dolly_exam')->where('zhuan_data','=','图片题')->get();
        }
        if($id == '3'){
            $data = DB::table('dolly_exam')->where('zhuan_correct','=','正确题')->get();
        }
        if($id == '4'){
            $data = DB::table('dolly_exam')->where('zhuan_correct','=','错误题')->get();
        }
        if($id == '5'){
            $data = DB::table('dolly_exam')->where('zhuan_type','=','判断题')->get();
        }
        if($id == '6'){
            $data = DB::table('dolly_exam')->where('zhuan_type','=','单选题')->get();
        }
        if($id == '7'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','时间题')->get();
        }
        if($id == '8'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','速度题')->get();
        }
        if($id == '9'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','距离题')->get();
        }
        if($id == '10'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','罚款题')->get();
        }
        if($id == '11'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','标志题')->get();
        }
        if($id == '12'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','手势题')->get();
        }
        if($id == '13'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','信号灯')->get();
        }
        if($id == '14'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','记分题')->get();
        }
        if($id == '15'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','酒驾题')->get();
        }
        if($id == '16'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','标线题')->get();
        }
        if($id == '17'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','灯光题')->get();
        }
        if($id == '18'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','装置题')->get();
        }
        if($id == '19'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','路况题')->get();
        }
        if($id == '20'){
            $data = DB::table('dolly_exam')->where('zhuan_intell','=','仪表题')->get();
        }
        return $data;
    }
}
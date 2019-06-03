<?php
	namespace App\Model;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Input;
	class Collect{
		 public function collect()
		 {
		 	 $data = DB::table('user')->value('collect');
        	$res = explode(",",$data);
        	foreach ($res as $k=>$v)
        	{
            	$result[] = DB::table('dolly_exam')->where('exam_id','=',$v)->first();
        	}
        	$data = json_encode($result);
        	return $data;
		 }
		 public function collectAdd()
    	 {
	        $user_id = '1';
	        $exam = Input::post('exam_id');
	        $exam_id = explode(',',$exam);
	        $data = DB::table('user')->value('collect');
	        $res = explode(',',$data);
	        $state = array_diff($res,$exam_id);
	        $states = implode(',',$state);
	        return  DB::table('user')->where('user_id','=',$user_id)->update(
	          ['collect'=>$states]);

    	 }
	}
?>
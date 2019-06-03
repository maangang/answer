<?php
	namespace App\Model;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Http\Request;
	class Mistakes {
		public function mistakes()
		{
			 $data = DB::table('user')->value('mistakes');
	         $res = explode(",",$data);
	         foreach ($res as $k=>$v)
	         {
	            $result[] = DB::table('dolly_exam')->where('exam_id','=',$v)->first();
	         }
	         $data = json_encode($result);
	         return $data;
		}
	}
?>
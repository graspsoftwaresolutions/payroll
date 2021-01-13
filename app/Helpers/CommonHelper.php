<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use DB;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Log;

class CommonHelper
{
	public function __construct() {
       
    }

    public static function calculate_age($userDob){
        return $years = Carbon::parse($userDob)->age;
    }
    

    public static function getSalaryAllowanceCost($salaryid,$allowanceid){
       $cost = DB::table('employee_salary_allowance')->where('salary_id','=',$salaryid)->where('allowance_id','=',$allowanceid)->pluck('amount')->first();
       return $cost;
    }

    public static function getEpfBasicAmount($user_id, $basicsalary){
    	//$user_id = $request->input('user_id');

		$dob = DB::table('tbl_member')
		->where('user_id','=',$user_id)
		->pluck('dob')
		->first();

		if($dob!=''){
			$age = CommonHelper::calculate_age($dob);
			$epfqry = DB::table('epf')
			->where('from_amount','<=',$basicsalary)
			->where('to_amount','>=',$basicsalary);
			if($age>60){
				$epfqry = $epfqry->where('old_age','=',1);
			}else{
				$epfqry = $epfqry->whereNull('old_age')->orWhere('old_age','=',0);
			}

			//->dump()
			$epfrecord = $epfqry->pluck('employer_contribution')->first();
		}else{
			$epfrecord = DB::table('epf')
			->where('from_amount','<=',$basicsalary)
			->where('to_amount','>=',$basicsalary)
			->pluck('employer_contribution')
			->first();
		}

		
		return $epfrecord;
    }

}
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

    public static function getEpfBasicAmount($basicsalary){

		$epfrecord = DB::table('epf')
		->where('from_amount','<=',$basicsalary)
		->where('to_amount','>=',$basicsalary)
		->pluck('employer_contribution')
		->first();
		return $epfrecord;
    }

}
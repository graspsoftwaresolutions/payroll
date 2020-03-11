<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use DB;
use Illuminate\Support\Facades\Crypt;
use Log;

class CommonHelper
{
	public function __construct() {
       
    }
    

    public static function getSalaryAllowanceCost($salaryid,$allowanceid){
       $cost = DB::table('employee_salary_allowance')->where('salary_id','=',$salaryid)->where('allowance_id','=',$allowanceid)->pluck('amount')->first();
       return $cost;
    }

}
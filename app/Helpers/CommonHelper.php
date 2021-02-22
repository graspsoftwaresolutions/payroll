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

    public static function  getSalaryList($date, $catname){
       $salaries = DB::table('employee_salary as es')
		->select('m.name','m.designation','m.doj','m.category','m.status','m.resign_date','es.id','es.salary_date','es.gross_salary','es.total_deductions','es.net_pay','es.basic_salary','es.additional_allowance_total','es.ot_amount','es.epf_ee_amount','es.ee_sosco_amount','es.eis_sip_amount','es.total_deductions','es.net_pay','es.epf_er','es.sosco_er','es.sosco_eissip','es.epf_percent','e.bank_account_no','es.epf_ee_percent','e.epf_number','e.socso_number')
					->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
					->leftjoin('tbl_employee_details as e',  'm.emp_id', '=', 'e.id')
					->where('es.salary_date','=',$date)
					->where('m.category','=',$catname)
					->orderBy('es.salary_date', 'desc')
					//->groupBy()
					//->orderBy('m.category', 'asc')
					->get();
       return $salaries;
    }

}
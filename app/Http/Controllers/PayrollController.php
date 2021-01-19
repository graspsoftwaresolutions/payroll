<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\AdditionDeduction;
use App\User;
use DB;
use App\Category;
use App\PayrollNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\CommonHelper;

class PayrollController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$employees = User::query()
			->leftjoin('designations as designations', 'users.designation_id', '=', 'designations.id')
			->orderBy('users.name', 'ASC')
			->where('users.access_label', '>=', 2)
			->where('users.access_label', '<=', 3)
			->get(['designations.designation', 'users.name', 'users.id'])
			->toArray();

		return view('administrator.hrm.payroll.manage_salary', compact('employees'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function go(Request $request) {
		request()->validate([
			'user_id' => 'required',
		], [
			'user_id.required' => 'The employee name field is required',
		]);
		return redirect('/hrm/payroll/manage-salary/' . $request->user_id);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($user_id) {
		$employee_id = $user_id;

		$employees = User::query()
			->leftjoin('designations as designations', 'users.designation_id', '=', 'designations.id')
			->orderBy('users.name', 'ASC')
			->where('users.access_label', '>=', 2)
			->where('users.access_label', '<=', 3)
			->get(['designations.designation', 'users.name', 'users.id'])
			->toArray();

		$salary = Payroll::where('user_id', $employee_id)
			->first();

		if (!empty($salary)) {
			return view('administrator.hrm.payroll.edit_salary', compact('employees', 'employee_id', 'salary'));
		} else {
			return view('administrator.hrm.payroll.create_salary', compact('employees', 'employee_id'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$salary = request()->validate([
			'employee_type' => 'required',
			'basic_salary' => 'required|numeric',
			'house_rent_allowance' => 'nullable|numeric',
			'medical_allowance' => 'nullable|numeric',
			'special_allowance' => 'nullable|numeric',
			'provident_fund_contribution' => 'nullable|numeric',
			'other_allowance' => 'nullable|numeric',
			'tax_deduction' => 'nullable|numeric',
			'provident_fund_deduction' => 'nullable|numeric',
			'other_deduction' => 'nullable|numeric',
		]);

		$result = Payroll::create($salary + ['created_by' => auth()->user()->id, 'user_id' => $request->user_id]);
		$inserted_id = $result->id;

		if (!empty($inserted_id)) {
			return redirect('/hrm/payroll/salary-list')->with('message', 'Add successfully.');
		}
		return redirect('/hrm/payroll/salary-list')->with('exception', 'Operation failed !');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function list() {
		$data['salaries'] = DB::table('employee_salary as es')
		->select('m.name','es.id','es.salary_date','es.gross_salary','es.total_deductions','es.net_pay')
					->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
					->orderBy('es.salary_date', 'desc')
                	->get();

		
		return view('administrator.hrm.payroll.salary_list')->with('data',$data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Payroll  $payroll
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$salary = Payroll::query()
			->leftjoin('users', 'payrolls.user_id', '=', 'users.id')
			->leftjoin('designations', 'users.designation_id', '=', 'designations.id')
			->leftjoin('departments', 'designations.department_id', '=', 'departments.id')
			->orderBy('users.name', 'ASC')
			->where('payrolls.id', $id)
			->where('users.deletion_status', 0)
			->first([
				'payrolls.*',
				'users.name',
				'users.avatar',
				'designations.designation',
				'departments.department',
			])
			->toArray();
		return view('administrator.hrm.payroll.salary_details', compact('salary'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Payroll  $payroll
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$salary = Payroll::find($id);
		request()->validate([
			'employee_type' => 'required',
			'basic_salary' => 'required|numeric',
			'house_rent_allowance' => 'nullable|numeric',
			'medical_allowance' => 'nullable|numeric',
			'special_allowance' => 'nullable|numeric',
			'provident_fund_contribution' => 'nullable|numeric',
			'other_allowance' => 'nullable|numeric',
			'tax_deduction' => 'nullable|numeric',
			'provident_fund_deduction' => 'nullable|numeric',
			'other_deduction' => 'nullable|numeric',
		]);

		$salary->employee_type = $request->get('employee_type');
		$salary->basic_salary = $request->get('basic_salary');
		$salary->house_rent_allowance = $request->get('house_rent_allowance');
		$salary->medical_allowance = $request->get('medical_allowance');
		$salary->special_allowance = $request->get('special_allowance');
		$salary->provident_fund_contribution = $request->get('provident_fund_contribution');
		$salary->other_allowance = $request->get('other_allowance');
		$salary->tax_deduction = $request->get('tax_deduction');
		$salary->provident_fund_deduction = $request->get('provident_fund_deduction');
		$salary->other_deduction = $request->get('other_deduction');
		$affected_row = $salary->save();

		if (!empty($affected_row)) {
			return redirect('/hrm/payroll/salary-list')->with('message', 'Update successfully.');
		}
		return redirect('/hrm/payroll/salary-list')->with('exception', 'Operation failed !');

		$result = Payroll::create($salary + ['created_by' => auth()->user()->id, 'user_id' => $request->user_id]);
		$inserted_id = $result->id;

		if (!empty($inserted_id)) {
			return redirect('/hrm/payroll/salary-list')->with('message', 'Add successfully.');
		}
		return redirect('/hrm/payroll/salary-list')->with('exception', 'Operation failed !');
	}
	public function additionList()
	{
		$data['addition_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
								->leftjoin('category_master as c','c.id','=','ad.cat_id')
								->where('ad.status','=','1')
								->where('ad.main_cat_name','=','1')
								->get();
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.addition.list')->with('data',$data);
	}
	public function additionNew()
	{	
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.addition.new')->with('data',$data);
	}
	public function additionSave(Request $request)
	{
		$data = $request->all();
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);

		if($request->name=="" or $request->cat_id=="" or $request->assigned_to==""){
			return redirect('hrm/addition_new')->with('exception', 'Enter name , category and Assignee  !');
		}
		else{
			$saveAddition = new AdditionDeduction();
			$saveAddition->name = $request->name;
			$saveAddition->main_cat_name = 1;
			$saveAddition->cat_id = $request->cat_id;
			$saveAddition->assigned_to = $request->assigned_to;
			$saveAddition->save();

			if ($saveAddition == true) {
				return redirect('hrm/addition_list')->with('message', 'Addition Added Succesfully'); 
			}
		}
	}
	public function addtionEdit($id)
	{
		$addition_id = crypt::decrypt($id);
		$data['addition_data'] = AdditionDeduction::where('status','=',1)->where('id','=',$addition_id)->get();
        $data['cat_list'] = Category::where('status','=',1)->get();
        return view('administrator.hrm.payroll.addition.edit')->with('data',$data);
	}
	public function addtionUpdate(Request $request)
	{
		$data = $request->all();
		$id= $request->addition_id;
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);
		if($id)
		{	
			$saveAddition = AdditionDeduction::find($id);		
			$saveAddition->name = $request->name;
			$saveAddition->main_cat_name = 1;
			$saveAddition->cat_id = $request->cat_id;
			$saveAddition->assigned_to = $request->assigned_to;
			$saveAddition->save();

			if ($saveAddition == true) {
				return redirect('hrm/addition_list')->with('message', 'Addition Updated Succesfully'); 
			}
		}
			
	}
	public function additionDelete($id)
	{
		$addition_id = crypt::decrypt($id);
        $Addition = new AdditionDeduction();
		$result = $Addition->where('id','=',$addition_id)->update(['status'=>'0']);
		if($result == true)
		{
			return redirect('hrm/addition_list')->with('message','Addition Details Deleted Successfully!!');
		}
	}
	//Deduction 
	public function deductionList()
	{
		$data['deduction_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
								->leftjoin('category_master as c','c.id','=','ad.cat_id')
								->where('ad.status','=','1')
								->where('ad.main_cat_name','=','2')
								->get();
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.deduction.list')->with('data',$data);
	}
	
	public function deductionNew()
	{	
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.deduction.new')->with('data',$data);
	}
	public function deductionSave(Request $request)
	{
		$data = $request->all();
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);

		if($request->name=="" or $request->cat_id=="" or $request->assigned_to==""){
			return redirect('hrm/addition_new')->with('exception', 'Enter name , category and Assignee  !');
		}
		else{
			$saveDeduction = new AdditionDeduction();
			$saveDeduction->name = $request->name;
			$saveDeduction->main_cat_name = 2;
			$saveDeduction->cat_id = $request->cat_id;
			$saveDeduction->assigned_to = $request->assigned_to;
			$saveDeduction->save();

			if ($saveDeduction == true) {
				return redirect('hrm/deduction_list')->with('message', 'Deduction Added Succesfully'); 
			}
		}
	}
	public function deductionEdit($id)
	{
		$deduction_id = crypt::decrypt($id);
		$data['deduction_data'] = AdditionDeduction::where('status','=',1)->where('id','=',$deduction_id)->get();
        $data['cat_list'] = Category::where('status','=',1)->get();
        return view('administrator.hrm.payroll.deduction.edit')->with('data',$data);
	}
	public function deductionUpdate(Request $request)
	{
		$data = $request->all();
		$id= $request->deduction_id;
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);
		if($id)
		{
			$saveDeduction = AdditionDeduction::find($id);		
			$saveDeduction->name = $request->name;
			$saveDeduction->main_cat_name = 2;
			$saveDeduction->cat_id = $request->cat_id;
			$saveDeduction->assigned_to = $request->assigned_to;
			$saveDeduction->save();

			if ($saveDeduction == true) {
				return redirect('hrm/deduction_list')->with('message', 'Deduction Updated Succesfully'); 
			}
		}
	}
	public function deductionDelete($id)
	{
		$deduction_id = crypt::decrypt($id);
        $Deduction = new AdditionDeduction();
		$result = $Deduction->where('id','=',$deduction_id)->update(['status'=>'0']);
		if($result == true)
		{
			return redirect('hrm/deduction_list')->with('message','Deduction Details Deleted Successfully!!');
		}
	}
	public function otherdeductionList()
	{
		$data['deduction_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
								->leftjoin('category_master as c','c.id','=','ad.cat_id')
								->where('ad.status','=','1')
								->where('ad.main_cat_name','=','3')
								->get();
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.other_deduction.list')->with('data',$data);
	}
	
	public function otherdeductionNew()
	{	
		$data['cat_list'] = Category::where('status','=','1')->get();
		return view('administrator.hrm.payroll.other_deduction.new')->with('data',$data);
	}
	public function otherdeductionSave(Request $request)
	{
		$data = $request->all();
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);

		if($request->name=="" or $request->cat_id=="" or $request->assigned_to==""){
			return redirect('hrm/addition_new')->with('exception', 'Enter name , category and Assignee  !');
		}
		else{
			$saveDeduction = new AdditionDeduction();
			$saveDeduction->name = $request->name;
			$saveDeduction->main_cat_name = 3;
			$saveDeduction->cat_id = $request->cat_id;
			$saveDeduction->assigned_to = $request->assigned_to;
			$saveDeduction->save();

			if ($saveDeduction == true) {
				return redirect('hrm/other_deduction_list')->with('message', 'Other Deduction Added Succesfully'); 
			}
		}
	}
	public function otherdeductionEdit($id)
	{
		$deduction_id = crypt::decrypt($id);
		$data['deduction_data'] = AdditionDeduction::where('status','=',1)->where('id','=',$deduction_id)->get();
        $data['cat_list'] = Category::where('status','=',1)->get();
        return view('administrator.hrm.payroll.other_deduction.edit')->with('data',$data);
	}
	public function otherdeductionUpdate(Request $request)
	{
		$data = $request->all();
		$id= $request->deduction_id;
        $request->validate([
			'name' => 'required',
			'cat_id' => 'required',
			 'assigned_to' => 'required',
                ], [
			'name.required' => 'please enter addition name',
			'cat_id.required' => 'please choose category name',
			'assigned_to.required' => 'please select assignee',

		]);
		if($id)
		{
			$saveDeduction = AdditionDeduction::find($id);		
			$saveDeduction->name = $request->name;
			$saveDeduction->main_cat_name = 3;
			$saveDeduction->cat_id = $request->cat_id;
			$saveDeduction->assigned_to = $request->assigned_to;
			$saveDeduction->save();

			if ($saveDeduction == true) {
				return redirect('hrm/other_deduction_list')->with('message', 'Other Deduction Updated Succesfully'); 
			}
		}
	}
	public function otherdeductionDelete($id)
	{
		$deduction_id = crypt::decrypt($id);
        $Deduction = new AdditionDeduction();
		$result = $Deduction->where('id','=',$deduction_id)->update(['status'=>'0']);
		if($result == true)
		{
			return redirect('hrm/other_deduction_list')->with('message','Other Deduction Details Deleted Successfully!!');
		}
	}
	public function addSalary()
	{
		$data['addition_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
										->where('ad.status','=','1')
										->where('ad.main_cat_name','=','1')
										->get();
		$data['deduction_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
										->where('ad.status','=','1')
										->where('ad.main_cat_name','=','2')
										->get();
		$data['other_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
										->where('ad.status','=','1')
										->where('ad.main_cat_name','=','3')
										->get();
										
		return view('administrator.hrm.payroll.add_salary')->with('data',$data);	
	}

	public function staffAutocomplete(Request $request)
    {
        $data = $request->all();
        $keyword = $request->get('name');
        $type = $request->type;
        $search_param = "{$keyword}%";
        if($keyword!='')
        {
            $result = DB::table('tbl_member')->select(DB::raw("CONCAT(name,'-',new_ic_no) AS value"),'user_id','short_code','email','EPF_EE','basic_salary','EE_SOSCO','EIS_SIP','EPS_ER','EPS_ER_perentage','SOSCO_ER')
                     ->orwhere("name","LIKE","%{$keyword}%")
					 ->orwhere("ic_no","LIKE","%{$keyword}%")
					 ->orwhere("new_ic_no","LIKE","%{$keyword}%")
					 ->limit(25)
                    // ->orwhere('c.zipcode','like', '%'.$keyword.'%')
                    // ->orwhere('cit.city_name','like', '%'.$keyword.'%')
                    
                  //  ->dump()
                ->get();
        }
        
        echo json_encode($result);
	}
	public function IncomestaffAutocomplete(Request $request)
    {
        $data = $request->all();
        $keyword = $request->get('name');
        $type = $request->type;
        $search_param = "{$keyword}%";
        if($keyword!='')
        {
            $result = DB::table('tbl_member')->select(DB::raw("CONCAT(name,'-',new_ic_no) AS value"),'user_id','short_code','email','EPF_EE','basic_salary','EE_SOSCO','EIS_SIP','EPS_ER','EPS_ER_perentage','SOSCO_ER','name','new_ic_no')
                     ->orwhere("name","LIKE","%{$keyword}%")
					 ->orwhere("ic_no","LIKE","%{$keyword}%")
					 ->orwhere("new_ic_no","LIKE","%{$keyword}%")
					 ->limit(25)
                    // ->orwhere('c.zipcode','like', '%'.$keyword.'%')
                    // ->orwhere('cit.city_name','like', '%'.$keyword.'%')
                    
                  //  ->dump()
                ->get();
        }
        
        echo json_encode($result);
	}
	public function addsalarySave(Request $request)
	{
		// return $request->all();
		//  $data = $request->all();
		//  $PayrollNew = PayrollNew::find($id);
		//  $PayrollNew->EPF_EE = $data['epf_ee_id'];
		//  $PayrollNew->EE_SOSCO = $data['ee_sosco'];
		//  $PayrollNew->EIS_SIP = $data['eis_sip'];
		//  $PayrollNew->EPS_ER = $data['SOSCO_ER'];
		//  $PayrollNew->save();
		$dateofsalary = $request->input('dateofsalary');
		if($dateofsalary!=""){
			$dateofsalary = $dateofsalary.'-01';
		}
		$insertdata = [];
		$insertdata['employee_id'] = $request->input('user_id');
		$insertdata['basic_salary'] = $request->input('basic_salary');
		$insertdata['additional_allowance_total'] = $request->input('addition_total');
		$insertdata['ot_amount'] = $request->input('ot');
		$insertdata['gross_salary'] = $request->input('gross_salary');
		$insertdata['epf_ee_amount'] = $request->input('epf_ee_id');
		$insertdata['ee_sosco_amount'] = $request->input('ee_sosco');
		$insertdata['eis_sip_amount'] = $request->input('eis_sip');
		$insertdata['deductions_total'] = $request->input('deductions_total');
		
		$insertdata['otherdeductions_total'] = $request->input('otherdeductions_total');
		$insertdata['total_deductions'] = $request->input('total_deductions');
		$insertdata['net_pay'] = $request->input('net_pay');
		$insertdata['epf_er'] = $request->input('EPF_ER');
		$insertdata['sosco_er'] = $request->input('SOSCO_ER');
		$insertdata['sosco_eissip'] = $request->input('SOSCO_EISSIP');
		$insertdata['status'] = 1;
		$insertdata['created_at'] = date('Y-m-d h:i:s');
		$insertdata['salary_date'] = $dateofsalary;
		$insertdata['epf_percent'] = $request->input('EPF_ERper');

		$existcount = DB::table('employee_salary')
		->where('employee_id','=',$request->input('user_id'))
		->where('salary_date','=',$dateofsalary)
		->count();

		if($existcount>0){
			return redirect('/hrm/payroll/salary-list')->with('exception','Salary for this month already added!!');	
		}else{
			$salarystatus = DB::table('employee_salary')->insert(
				$insertdata
			);
			$salaryid = DB::getPdo()->lastInsertId();;
			//dd($salaryid);
			if($salaryid){
				

				$allowances_name = $request->input('allowances_name');

				if(isset($allowances_name)){
					for($i=0;$i<count($allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('allowances_name')[$i];
						$allowance_price = $request->input('price')[$i];

						$insertallowancedata['salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 1;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}

				$deduction_allowances_name = $request->input('deduction_allowances_name');

				if(isset($deduction_allowances_name)){
					for($i=0;$i<count($deduction_allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('deduction_allowances_name')[$i];
						$allowance_price = $request->input('deduction_price')[$i];

						$insertallowancedata['salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 2;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}

				$other_deduction_allowances_name = $request->input('other_deduction_allowances_name');

				if(isset($other_deduction_allowances_name)){
					for($i=0;$i<count($other_deduction_allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('other_deduction_allowances_name')[$i];
						$allowance_price = $request->input('other_deduction_price')[$i];

						$insertallowancedata['salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 3;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}
				
			}
		
			return redirect('/hrm/payroll/salary-list')->with('message', 'Salary added successfully!!');

		}
		
	}

	public function SalaryReport(Request $request){
		$filterdate = $request->input('filterdate');
		$data['salaries'] = DB::table('employee_salary as es')
		->select('m.name','es.id','es.salary_date','es.gross_salary','es.total_deductions','es.net_pay','es.basic_salary','es.additional_allowance_total','es.ot_amount','es.epf_ee_amount','es.ee_sosco_amount','es.eis_sip_amount','es.total_deductions','es.net_pay','es.epf_er','es.sosco_er','es.sosco_eissip','es.epf_percent')
					->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
					->where('es.salary_date','=',$filterdate)
					->orderBy('es.salary_date', 'desc')
					->get();
					
		$data['addition_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
					->leftjoin('category_master as c','c.id','=','ad.cat_id')
					->where('ad.status','=','1')
					->where('ad.main_cat_name','=','1')
					->get();
		$data['deduction_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
					->leftjoin('category_master as c','c.id','=','ad.cat_id')
					->where('ad.status','=','1')
					->where('ad.main_cat_name','=','2')
					->get();
		$data['other_deduction_list'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name','ad.assigned_to','c.cat_name')
					->leftjoin('category_master as c','c.id','=','ad.cat_id')
					->where('ad.status','=','1')
					->where('ad.main_cat_name','=','3')
					->get();
		$data['filterdate'] = $filterdate;
		//$data = [];
		return view('administrator.hrm.payroll.monthly_print')->with('data',$data);
	}
	public function additionSalList()
    {
        $data['salaries'] = DB::table('employee_add_salary as es')
        ->select('m.name','es.id','es.gross_salary','es.total_deductions','es.net_pay')
                    ->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
                    ->get();

        return view('administrator.hrm.payroll.additionsal.list')->with('data',$data);
    }

    public function additionSalNew()
    {   
        $data['cat_list'] = Category::where('status','=','1')->get();
        return view('administrator.hrm.payroll.additionsal.new')->with('data',$data);
    }
    public function additional_salary()
    {   
        //$data['cat_list'] = Category::where('status','=','1')->get();
        //return view('administrator.hrm.payroll.additionsal.new')->with('data',$data);
        $data['addition_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
                                        ->where('ad.status','=','1')
                                        ->where('ad.main_cat_name','=','1')
                                        ->get();
        $data['deduction_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
                                        ->where('ad.status','=','1')
                                        ->where('ad.main_cat_name','=','2')
                                        ->get();
        $data['other_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
                                        ->where('ad.status','=','1')
                                        ->where('ad.main_cat_name','=','3')
                                        ->get();
                                        
        return view('administrator.hrm.payroll.additionsal.new')->with('data',$data);   
	}
	public function getSalaryContribution(Request $request){
		$salaryamt = $request->input('net_salary');
		$user_id = $request->input('user_id');

		$dob = DB::table('tbl_member')
		->where('user_id','=',$user_id)
		->pluck('dob')
		->first();

		if($dob!=''){
			$age = CommonHelper::calculate_age($dob);
			$epfqry = DB::table('epf')
			->where('from_amount','<=',$salaryamt)
			->where('to_amount','>=',$salaryamt);
			if($age>60){
				$epfqry = $epfqry->where('old_age','=',1);
			}else{
				$epfqry = $epfqry->whereNull('old_age')->orWhere('old_age','=',0);
			}

			//->dump()
			$epfrecord = $epfqry->first();
		}else{
			$epfrecord = DB::table('epf')
			->where('from_amount','<=',$salaryamt)
			->where('to_amount','>=',$salaryamt)
			//->dump()
			->first();
		}
		
		return json_encode($epfrecord);
	}

	public function getSoscoContribution(Request $request){
		$salaryamt = $request->input('net_salary');
		

		$soscorecord = DB::table('sosco')
		->where('from_amount','<=',$salaryamt)
		->where('to_amount','>=',$salaryamt)
		//->dump()
		->first();
		return json_encode($soscorecord);
	}
	public function getSoscoInsContribution(Request $request){
		$salaryamt = $request->input('net_salary');

		$soscorecord = DB::table('sosco_insurance')
		->where('from_amount','<=',$salaryamt)
		->where('to_amount','>=',$salaryamt)
		//->dump()
		->first();
		return json_encode($soscorecord);
	}

	public function addAdditionalsalarySave(Request $request)
	{
		$insertdata = [];
		$insertdata['employee_id'] = $request->input('user_id');
		$insertdata['basic_salary'] = $request->input('basic_salary');
		$insertdata['additional_allowance_total'] = $request->input('addition_total');
		$insertdata['ot_amount'] = $request->input('ot');
		$insertdata['gross_salary'] = $request->input('gross_salary');
		$insertdata['epf_ee_amount'] = $request->input('epf_ee_id');
		$insertdata['ee_sosco_amount'] = $request->input('ee_sosco');
		$insertdata['eis_sip_amount'] = $request->input('eis_sip');
		$insertdata['deductions_total'] = $request->input('deductions_total');
		
		$insertdata['otherdeductions_total'] = $request->input('otherdeductions_total');
		$insertdata['total_deductions'] = $request->input('total_deductions');
		$insertdata['net_pay'] = $request->input('net_pay');
		$insertdata['epf_er'] = $request->input('EPF_ER');
		$insertdata['sosco_er'] = $request->input('SOSCO_ER');
		$insertdata['sosco_eissip'] = $request->input('SOSCO_EISSIP');
		$insertdata['status'] = 1;
		$insertdata['created_at'] = date('Y-m-d h:i:s');
		$insertdata['epf_percent'] = $request->input('EPF_ERper');

		$epf_check = $request->input('epf_ee_check');
		$epf_check = isset($epf_check) ? 1 : 0;
		$sosco_check = $request->input('epf_sosco_check');
		$sosco_check = isset($sosco_check) ? 1 : 0;
		$soscosip_check = $request->input('epf_sip_check');
		$soscosip_check = isset($soscosip_check) ? 1 : 0;

		$insertdata['epf_check'] = $epf_check;
		$insertdata['sosco_check'] = $sosco_check;
		$insertdata['sip_check'] = $soscosip_check;

		$existcount = DB::table('employee_add_salary')
		->where('employee_id','=',$request->input('user_id'))
		->count();

		if($existcount>0){
			return redirect('/hrm/additionSalList')->with('exception','Salary for this month already added!!');	
		}else{
			$salarystatus = DB::table('employee_add_salary')->insert(
				$insertdata
			);
			$salaryid = DB::getPdo()->lastInsertId();;
			//dd($salaryid);
			if($salaryid){
				

				$allowances_name = $request->input('allowances_name');

				if(isset($allowances_name)){
					for($i=0;$i<count($allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('allowances_name')[$i];
						$allowance_price = $request->input('price')[$i];

						$insertallowancedata['add_salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 1;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}

				$deduction_allowances_name = $request->input('deduction_allowances_name');

				if(isset($deduction_allowances_name)){
					for($i=0;$i<count($deduction_allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('deduction_allowances_name')[$i];
						$allowance_price = $request->input('deduction_price')[$i];

						$insertallowancedata['add_salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 2;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}

				$other_deduction_allowances_name = $request->input('other_deduction_allowances_name');

				if(isset($other_deduction_allowances_name)){
					for($i=0;$i<count($other_deduction_allowances_name);$i++){
						$insertallowancedata = [];
						$allowance_id = $request->input('other_deduction_allowances_name')[$i];
						$allowance_price = $request->input('other_deduction_price')[$i];

						$insertallowancedata['add_salary_id'] = $salaryid;
						$insertallowancedata['allowance_id'] = $allowance_id;
						$insertallowancedata['main_cat_id'] = 3;
						$insertallowancedata['amount'] = $allowance_price;
						$insertallowancedata['status'] = 1;

						$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
							$insertallowancedata
						);
					}
				}
				
			}
		
			return redirect('/hrm/additionSalList')->with('message', 'Salary added successfully!!');

		}
		
	}

	public function addSalaryEdit($id)
    {
		$autoid = crypt::decrypt($id);
		$data['salary_data']  = DB::table('employee_add_salary')->where('id','=',$autoid)->first();
	
		$data['memberinfo'] = DB::table('tbl_member as m')->select('m.name','m.user_id')->where('m.user_id','=',$data['salary_data']->employee_id)->first();
		
		$data['addition_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','1')
				->get();
		$data['deduction_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','2')
				->get();
		$data['other_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','3')
				->get();

		$data['salary_allow_addition']  = DB::table('employee_add_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.add_salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','1')->get();

		$data['salary_allow_deduction']  = DB::table('employee_add_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.add_salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','2')->get();

		$data['salary_other_deduction']  = DB::table('employee_add_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.add_salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','3')->get();

		// /return $data;
        //$data['cat_list'] = Category::where('id','=',$autoid)->where('status','=',1)->get();
        return view('administrator.hrm.payroll.additionsal.edit')->with('data',$data);
        
	}
	
	public function getEmployeeSalary(Request $request){
	  $user_id = $request->input('user_id');

		$salary = DB::table('employee_add_salary')
		->where('employee_id','=',$user_id)
		->first();

		if($salary!=''){
			$salaryallowance = DB::table('employee_add_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount','al.main_cat_id')
			->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
			->where('al.add_salary_id','=',$salary->id)
			->get();
			$data['status'] = 1;
			$data['salary'] = $salary;
			$data['salaryallowance'] = $salaryallowance;
			return $data;
		}
		$data['status'] = 0;
		return $data;

		// $soscorecord = DB::table('sosco_insurance')
		// ->where('from_amount','<=',$salaryamt)
		// ->where('to_amount','>=',$salaryamt)
		// //->dump()
		// ->first();
		// return json_encode($soscorecord);
	}

	public function salaryStatementSearch(){
    	$employees = DB::table('tbl_member')->select(DB::raw("CONCAT(name,'-',new_ic_no) AS value"),'user_id','short_code','email','EPF_EE','basic_salary','EE_SOSCO','EIS_SIP','EPS_ER','EPS_ER_perentage','SOSCO_ER')->get();

        return view('administrator.hrm.payroll.salary_search', compact('employees'));

	}
	
	public function salaryStatementFilter(Request $request){
		$user_id = $request->input('emp_id');
		$dateofsalary = $request->input('dateofsalary');
		if($dateofsalary!=""){
			$dateofsalary = $dateofsalary.'-01';
		}

		$existcount = DB::table('employee_salary')
		->where('employee_id','=',$user_id)
		->where('salary_date','=',$dateofsalary)
		->count();

		$employees = DB::table('tbl_member')->select(DB::raw("CONCAT(name,'-',new_ic_no) AS value"),'user_id','short_code','email','EPF_EE','basic_salary','EE_SOSCO','EIS_SIP','EPS_ER','EPS_ER_perentage','SOSCO_ER')->get();

		if($user_id==''){
			return redirect('/hrm/salary/statement')->with('exception', 'Please select employee!!');
		}
		if($existcount==0){
			return redirect('/hrm/salary/statement')->with('exception', 'Please add salary for this member!!');
		}else{
			$salryid = DB::table('employee_salary')
				->where('employee_id','=',$user_id)
				->where('salary_date','=',$dateofsalary)
				->pluck('id')
				->first();
			$encautoid = crypt::encrypt($salryid);
			return redirect('/hrm/salary/statementPrint/'.$encautoid);

		}
		
	}

	public function salaryStatementPrint($encid,Request $request){
		$autoid = crypt::decrypt($encid);
		$data['salary_data']  = DB::table('employee_salary')->where('id','=',$autoid)->first();
	
		$data['memberinfo'] = DB::table('tbl_member as m')->where('m.user_id','=',$data['salary_data']->employee_id)->first();
		
		// $data['addition_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
		// 		->where('ad.status','=','1')
		// 		->where('ad.main_cat_name','=','1')
		// 		->get();
		// $data['deduction_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
		// 		->where('ad.status','=','1')
		// 		->where('ad.main_cat_name','=','2')
		// 		->get();
		// $data['other_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
		// 		->where('ad.status','=','1')
		// 		->where('ad.main_cat_name','=','3')
		// 		->get();

		$data['salary_allow_addition']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','1')->get();

		$data['salary_allow_deduction']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','2')->get();

		$data['salary_other_deduction']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','3')->get();

		// /return $data;
        //$data['cat_list'] = Category::where('id','=',$autoid)->where('status','=',1)->get();
        return view('administrator.hrm.payroll.salary_print')->with('data',$data);
	}


	public function updateAdditionalsalary(Request $request)
	{
		$insertdata = [];
		$salaryid = $request->input('salary_id');
		//$insertdata['employee_id'] = $request->input('user_id');
		$insertdata['basic_salary'] = $request->input('basic_salary');
		$insertdata['additional_allowance_total'] = $request->input('addition_total');
		$insertdata['ot_amount'] = $request->input('ot');
		$insertdata['gross_salary'] = $request->input('gross_salary');
		$insertdata['epf_ee_amount'] = $request->input('epf_ee_id');
		$insertdata['ee_sosco_amount'] = $request->input('ee_sosco');
		$insertdata['eis_sip_amount'] = $request->input('eis_sip');
		$insertdata['deductions_total'] = $request->input('deductions_total');
		
		$insertdata['otherdeductions_total'] = $request->input('otherdeductions_total');
		$insertdata['total_deductions'] = $request->input('total_deductions');
		$insertdata['net_pay'] = $request->input('net_pay');
		$insertdata['epf_er'] = $request->input('EPF_ER');
		$insertdata['sosco_er'] = $request->input('SOSCO_ER');
		$insertdata['sosco_eissip'] = $request->input('SOSCO_EISSIP');
		$insertdata['status'] = 1;
		$insertdata['created_at'] = date('Y-m-d h:i:s');
		$insertdata['epf_percent'] = $request->input('EPF_ERper');

		$epf_check = $request->input('epf_ee_check');
		$epf_check = isset($epf_check) ? 1 : 0;
		$sosco_check = $request->input('epf_sosco_check');
		$sosco_check = isset($sosco_check) ? 1 : 0;
		$soscosip_check = $request->input('epf_sip_check');
		$soscosip_check = isset($soscosip_check) ? 1 : 0;

		$insertdata['epf_check'] = $epf_check;
		$insertdata['sosco_check'] = $sosco_check;
		$insertdata['sip_check'] = $soscosip_check;

		$salarystatus = DB::table('employee_add_salary')
						->where('id', $salaryid)
						->update( $insertdata);
		//$salaryid = DB::getPdo()->lastInsertId();;
		//dd($salaryid);
		if($salaryid){

			$allowances_name = $request->input('allowances_name');

			DB::table('employee_add_salary_allowance')->where('add_salary_id', '=', $salaryid)->delete();

			if(isset($allowances_name)){
				for($i=0;$i<count($allowances_name);$i++){
					$insertallowancedata = [];
					$allowance_id = $request->input('allowances_name')[$i];
					$allowance_price = $request->input('price')[$i];

					$insertallowancedata['add_salary_id'] = $salaryid;
					$insertallowancedata['allowance_id'] = $allowance_id;
					$insertallowancedata['main_cat_id'] = 1;
					$insertallowancedata['amount'] = $allowance_price;
					$insertallowancedata['status'] = 1;

					$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
						$insertallowancedata
					);
				}
			}

			$deduction_allowances_name = $request->input('deduction_allowances_name');

			if(isset($deduction_allowances_name)){
				for($i=0;$i<count($deduction_allowances_name);$i++){
					$insertallowancedata = [];
					$allowance_id = $request->input('deduction_allowances_name')[$i];
					$allowance_price = $request->input('deduction_price')[$i];

					$insertallowancedata['add_salary_id'] = $salaryid;
					$insertallowancedata['allowance_id'] = $allowance_id;
					$insertallowancedata['main_cat_id'] = 2;
					$insertallowancedata['amount'] = $allowance_price;
					$insertallowancedata['status'] = 1;

					$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
						$insertallowancedata
					);
				}
			}

			$other_deduction_allowances_name = $request->input('other_deduction_allowances_name');

			if(isset($other_deduction_allowances_name)){
				for($i=0;$i<count($other_deduction_allowances_name);$i++){
					$insertallowancedata = [];
					$allowance_id = $request->input('other_deduction_allowances_name')[$i];
					$allowance_price = $request->input('other_deduction_price')[$i];

					$insertallowancedata['add_salary_id'] = $salaryid;
					$insertallowancedata['allowance_id'] = $allowance_id;
					$insertallowancedata['main_cat_id'] = 3;
					$insertallowancedata['amount'] = $allowance_price;
					$insertallowancedata['status'] = 1;

					$salaryallowid = DB::table('employee_add_salary_allowance')->insert(
						$insertallowancedata
					);
				}
			}
			
		}
	
		return redirect('/hrm/additionSalList')->with('message', 'Salary updated successfully!!');
		
	}

	public function empSalaryEdit($id)
    {
		$autoid = crypt::decrypt($id);
		$data['salary_data']  = DB::table('employee_salary')->where('id','=',$autoid)->first();
	
		$data['memberinfo'] = DB::table('tbl_member as m')->select('m.name','m.user_id')->where('m.user_id','=',$data['salary_data']->employee_id)->first();
		
		$data['addition_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','1')
				->get();
		$data['deduction_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','2')
				->get();
		$data['other_allownces'] = DB::table('payroll_addition_deduction as ad')->select('ad.id as additionid','ad.name')
				->where('ad.status','=','1')
				->where('ad.main_cat_name','=','3')
				->get();

		$data['salary_allow_addition']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','1')->get();

		$data['salary_allow_deduction']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','2')->get();

		$data['salary_other_deduction']  = DB::table('employee_salary_allowance as al')->select('ad.id as additionid','ad.name','al.amount')
		->leftjoin('payroll_addition_deduction as ad', 'ad.id', '=', 'al.allowance_id')
		->where('al.salary_id','=',$data['salary_data']->id)->where('al.main_cat_id','=','3')->get();

		// /return $data;
        //$data['cat_list'] = Category::where('id','=',$autoid)->where('status','=',1)->get();
        return view('administrator.hrm.payroll.edit_salary')->with('data',$data);
        
	}

	public function EmployeeList()
	{
		$data['employee_list'] = DB::table('tbl_member as m')->get();
		return view('administrator.hrm.employee.list')->with('data',$data);
	}

	public function BonusList(){
		$data['salaries'] = DB::table('bonus_salary as bs')
					->select('m.name','bs.id','bs.salary_date','bs.gross_salary','bs.deductions_total as total_deductions','bs.net_pay')
					->leftjoin('tbl_member as m', 'm.user_id', '=', 'bs.employee_id')
					->orderBy('bs.salary_date', 'desc')
                	->get();
        //dd($data['salaries']);
		
		return view('administrator.hrm.payroll.bonus_salary_list')->with('data',$data);
	}

	public function addBonusSalary()
	{
		$data = [];
		return view('administrator.hrm.payroll.add_bonus_salary')->with('data',$data);	
	}

	public function addBonusSave(Request $request)
	{
		
		$dateofsalary = $request->input('dateofsalary');
		if($dateofsalary!=""){
			$dateofsalary = $dateofsalary.'-01';
		}
		$insertdata = [];
		$insertdata['employee_id'] = $request->input('user_id');
		$insertdata['bonus_salary'] = $request->input('basic_salary');
		$insertdata['gross_salary'] = $request->input('gross_salary');
		$insertdata['epf_ee_amount'] = $request->input('epf_ee_id');
		$insertdata['ee_sosco_amount'] = $request->input('ee_sosco');
		$insertdata['eis_sip_amount'] = $request->input('eis_sip');
		$insertdata['deductions_total'] = $request->input('deductions_total');
		
		$insertdata['net_pay'] = $request->input('net_pay');
		$insertdata['epf_er'] = $request->input('EPF_ER');
		$insertdata['sosco_er'] = $request->input('SOSCO_ER');
		$insertdata['sosco_eissip'] = $request->input('SOSCO_EISSIP');
		$insertdata['status'] = 1;
		$insertdata['created_at'] = date('Y-m-d h:i:s');
		$insertdata['salary_date'] = $dateofsalary;
		$insertdata['epf_percent'] = 13;

		$existcount = DB::table('bonus_salary')
		->where('employee_id','=',$request->input('user_id'))
		->where('salary_date','=',$dateofsalary)
		->count();

		if($existcount>0){
			return redirect('/hrm/payroll/bonus-salary-list')->with('exception','Salary for this month already added!!');	
		}else{
			$salarystatus = DB::table('bonus_salary')->insert(
				$insertdata
			);
			$salaryid = DB::getPdo()->lastInsertId();;
			//dd($salaryid);
		
			return redirect('/hrm/payroll/bonus-salary-list')->with('message', 'Salary added successfully!!');

		}
		
	}

	public function BonusSalaryEdit($id)
    {
		$autoid = crypt::decrypt($id);
		$data['salary_data']  = DB::table('bonus_salary')->where('id','=',$autoid)->first();
	
		$data['memberinfo'] = DB::table('tbl_member as m')->select('m.name','m.user_id')->where('m.user_id','=',$data['salary_data']->employee_id)->first();

		// /return $data;
        //$data['cat_list'] = Category::where('id','=',$autoid)->where('status','=',1)->get();
        return view('administrator.hrm.payroll.edit_bonus_salary')->with('data',$data);
        
	}

	public function incomeTaxList(){
		$data['incometaxList'] = DB::table('income_tax as i')->select('i.id as incometaxid','i.income_tax_no','i.employee_no','i.new_ic_no','m.doj','m.dob','i.gross_salary','m.name')->leftjoin('tbl_member as m', 'm.user_id', '=', 'i.employee_id')->get();
		return view('administrator.hrm.employee.income_tax_list')->with('data',$data);
	}

	public function addIncomeTax(){
		$data['income_list'] = [];
		return view('administrator.hrm.employee.add_income_tax')->with('data',$data);
	}

	public function incomeSave(Request $request){
		//return $request->all();
		$data['serial_no'] = $request->input('serial_no');
		$data['income_tax_no'] = $request->input('income_tax_no');
		$data['employee_no'] = $request->input('employee_no');
		$data['endyear'] = $request->input('endyear');
		$data['branch'] = $request->input('branch');
		$data['employee_id'] = $request->input('employee_id');
		$data['job_designation'] = $request->input('job_designation');
		$data['staff_no'] = $request->input('staff_no');
		$data['new_ic_no'] = $request->input('new_ic_no');
		$data['passport_no'] = $request->input('passport_no');
		$data['epf_no'] = $request->input('epf_no');
		$data['socso_no'] = $request->input('socso_no');
		$data['no_of_children'] = $request->input('no_of_children');

		$date_commencement = $request->input('date_commencement');
		$date_cessation = $request->input('date_cessation');

		if($date_commencement != null){
            $datecommencement = str_replace('/', '-', $date_commencement);
            $data['date_commencement'] = date('Y-m-d', strtotime($datecommencement));
        }
        else{
             $data['date_commencement'] = "0000-00-00";
        }

        if($date_cessation != null){
            $datecessation = str_replace('/', '-', $date_cessation);
            $data['date_cessation'] = date('Y-m-d', strtotime($datecessation));
        }
        else{
             $data['date_cessation'] = "0000-00-00";
        }

		$data['gross_salary'] = $request->input('gross_salary');
		$data['fees'] = $request->input('fees');
		$data['gross_tips'] = $request->input('gross_tips');
		$data['net_salary'] = $request->input('net_salary');
		$data['employer_brone_amt'] = $request->input('employer_brone_amt');
		$data['esos_benefit'] = $request->input('esos_benefit');
		$data['gratuity_from'] = $request->input('gratuity_from');
		$data['gratuity_to'] = $request->input('gratuity_to');
		$data['gratuity'] = $request->input('gratuity');
		$data['income_type_one'] = $request->input('income_type_one');
		$data['income_type_two'] = $request->input('income_type_two');
		$data['arrear_paid'] = $request->input('arrear_paid');
		$data['benefits_details'] = $request->input('benefits_details');
		$data['benefits_amount'] = $request->input('benefits_amount');
		$data['accommodation_address'] = $request->input('accommodation_address');
		$data['accommodation_value'] = $request->input('accommodation_value');
		$data['refund_fund'] = $request->input('refund_fund');
		$data['compensation_loss'] = $request->input('compensation_loss');
		$data['pension'] = $request->input('pension');
		$data['annuities_payment'] = $request->input('annuities_payment');
		$data['pension_total'] = $request->input('pension_total');
		$data['monthly_tax_deduction'] = $request->input('monthly_tax_deduction');
		$data['cp_deduction'] = $request->input('cp_deduction');
		$data['zakat_paid'] = $request->input('zakat_paid');
		$data['relief_deduction'] = $request->input('relief_deduction');
		$data['non_zakat_deduction'] = $request->input('non_zakat_deduction');
		$data['child_relief'] = $request->input('child_relief');
		$data['provident_fund_name'] = $request->input('provident_fund_name');
		$data['contribution_paid'] = $request->input('contribution_paid');
		$data['socso_contribution'] = $request->input('socso_contribution');
		$data['total_tax'] = $request->input('total_tax');

		$date_tax = $request->input('date_tax');
		if($date_tax != null){
            $datetax = str_replace('/', '-', $date_tax);
            $data['date_tax'] = date('Y-m-d', strtotime($datetax));
        }
        else{
             $data['date_tax'] = "0000-00-00";
        }

		$data['officer_name'] = $request->input('officer_name');
		$data['designation'] = $request->input('designation');
		$data['employer_name'] = $request->input('employer_name');
		$data['employer_address'] = $request->input('employer_address');
		$data['employer_telno'] = $request->input('employer_telno');
		$data['created_at'] = date('Y-m-d h:i:s');
		$data['status'] = 1;

		DB::table('income_tax')->insert($data);

		return redirect('/hrm/incometax')->with('message', 'Income Tax added successfully!!');
	}

	public function incomePrint(Request $request, $encincomeid){
		$incomeid = crypt::decrypt($encincomeid);
		$data['incometaxList'] = DB::table('income_tax as i')->select('i.id as incometaxid','i.income_tax_no','i.employee_no','i.new_ic_no','m.doj','m.dob','i.gross_salary','m.name')->leftjoin('tbl_member as m', 'm.user_id', '=', 'i.employee_id')->where('i.id','=',$incomeid)->get();
		return view('administrator.hrm.employee.income_tax_print')->with('data',$data);
	}
}

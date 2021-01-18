<?php

namespace App\Http\Controllers;

use App\Payroll;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AjaxController extends Controller
{
    public function ajax_salaries_list(Request $request){
        $filterdate = $request->input('salarydate');
        $curdate = date('Y-m-01',strtotime($filterdate.'-01'));
        $columns = array( 
            0 => 'm.name', 
            1 => 'es.salary_date',
            2 => 'es.id',
        );
		
        $common_qry = DB::table('employee_salary as es')
		            ->select('m.name','es.id','es.salary_date','es.gross_salary','es.total_deductions','es.net_pay')
                    ->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
                    ->where('es.salary_date', '=', $curdate)
					->orderBy('es.salary_date', 'desc');
        
        $totalData = $common_qry->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');


        if(empty($request->input('search.value')))
        {            
			$salary_qry = $common_qry;
			if( $limit != -1){
				$salary_qry = $salary_qry->offset($start)->limit($limit);
			}
			$salary_qry = $salary_qry->orderBy($order,$dir)
							->get()->toArray();
        }
        else {
			//DB::enableQueryLog();
			$search = $request->input('search.value'); 
			
			$salary_qry = $common_qry;
			if( $limit != -1){
				$salary_qry = $salary_qry->offset($start)->limit($limit);
            }
            
            $salary_qry =  $salary_qry->where(function($query) use ($search){
                $query->where('m.name','LIKE',"%{$search}%")
                ->orWhere('es.gross_salary', 'LIKE',"%{$search}%")
                ->orWhere('es.net_pay', 'LIKE',"%{$search}%")
                ->orWhere('es.total_deductions', 'LIKE',"%{$search}%");
            });
		
            //$queries = DB::getQueryLog();
        //dd($queries);
			$salary_qry = $salary_qry->orderBy($order,$dir)->get()->toArray();
			
			$totalFiltered = $common_qry->count();
        }
        $data = array();
        if(!empty($salary_qry))
        {
            foreach ($salary_qry as $salary)
            {
                $nestedData['month_year'] = date('M/Y',strtotime($salary->salary_date));
                $nestedData['name'] = $salary->name;
                $nestedData['gross_salary'] = $salary->gross_salary;
                $nestedData['total_deductions'] = $salary->total_deductions;
                $nestedData['net_pay'] = $salary->net_pay;
               // $saalry_enc_id = Crypt::encrypt($salary->id);

                $editlink = route('emp.salaryEdit',Crypt::encrypt($salary->id));
                $paysliplink = route('salaryStatementPrint',Crypt::encrypt($salary->id));
                $nestedData['actions'] = '<a style="font-size:19px" class="btn btn-sm red waves-effect waves-circle waves-light" href="'.$editlink.'"><i class="icon fa fa-edit"></i></a>'.'<a style="font-size:19px" target="_blank" class="btn btn-sm yellow waves-effect waves-circle waves-light" href="'.$paysliplink.'"><i class="icon fa fa-money" title="payslip"></i></a>';
                //$date = date('M/Y',strtotime($company->date));
                        
				$data[] = $nestedData;
			}
        }
        //$data = $this->CommonAjaxReturn($company_qry, 0, 'master.countrydestroy',0); 
       
        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data); 
    }

    public function ajax_bonus_salaries_list(Request $request){
        $filterdate = $request->input('salarydate');
        $curdate = date('Y-m-01',strtotime($filterdate.'-01'));
        $columns = array( 
            0 => 'm.name', 
            1 => 'es.salary_date',
            2 => 'es.id',
        );
        
        $common_qry = DB::table('bonus_salary as es')
                    ->select('m.name','es.id','es.salary_date','es.gross_salary','es.deductions_total','es.net_pay')
                    ->leftjoin('tbl_member as m', 'm.user_id', '=', 'es.employee_id')
                    ->where('es.salary_date', '=', $curdate)
                    ->orderBy('es.salary_date', 'desc');
        
        $totalData = $common_qry->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');


        if(empty($request->input('search.value')))
        {            
            $salary_qry = $common_qry;
            if( $limit != -1){
                $salary_qry = $salary_qry->offset($start)->limit($limit);
            }
            $salary_qry = $salary_qry->orderBy($order,$dir)
                            ->get()->toArray();
        }
        else {
            //DB::enableQueryLog();
            $search = $request->input('search.value'); 
            
            $salary_qry = $common_qry;
            if( $limit != -1){
                $salary_qry = $salary_qry->offset($start)->limit($limit);
            }
            
            $salary_qry =  $salary_qry->where(function($query) use ($search){
                $query->where('m.name','LIKE',"%{$search}%")
                ->orWhere('es.gross_salary', 'LIKE',"%{$search}%")
                ->orWhere('es.net_pay', 'LIKE',"%{$search}%")
                ->orWhere('es.deductions_total', 'LIKE',"%{$search}%");
            });
        
            //$queries = DB::getQueryLog();
        //dd($queries);
            $salary_qry = $salary_qry->orderBy($order,$dir)->get()->toArray();
            
            $totalFiltered = $common_qry->count();
        }
        $data = array();
        if(!empty($salary_qry))
        {
            foreach ($salary_qry as $salary)
            {
                $nestedData['month_year'] = date('M/Y',strtotime($salary->salary_date));
                $nestedData['name'] = $salary->name;
                $nestedData['gross_salary'] = $salary->gross_salary;
                $nestedData['total_deductions'] = $salary->deductions_total;
                $nestedData['net_pay'] = $salary->net_pay;
               // $saalry_enc_id = Crypt::encrypt($salary->id);

                $editlink = route('bonus.salaryEdit',Crypt::encrypt($salary->id));
                $nestedData['actions'] = '<a style="font-size:19px" class="btn btn-sm red waves-effect waves-circle waves-light" href="'.$editlink.'"><i class="icon fa fa-edit"></i></a>';
                //$date = date('M/Y',strtotime($company->date));
                
                        
                $data[] = $nestedData;
            }
        }
        //$data = $this->CommonAjaxReturn($company_qry, 0, 'master.countrydestroy',0); 
       
        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
            );

        echo json_encode($json_data); 
    }
}

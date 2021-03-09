@extends('administrator.master')
@section('title', __('Salary Statement'))

@section('main_content')
<style>
.saltble tr td{
	xpadding:1%;	
}
.printDiv{
	margin:5% !important;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<style type="text/css">
	@media print{
		body{			
			padding:50px !important;
		}
		.tithed{
		 background-color:red !important;
		 background:red !important;
		}
		.printDiv{
		padding:5% !important;
		xbackground:red !important;
		}
		.center {
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		  width: 50%;
		}
		
	}
	@media print { 
	    .table td, .table th { 
	        background-color: #fff !important; 
	    } 
		.tithed{
			background: red !important; 
		}
		#tithed{
			background: gray !important; 
		}
	}
    </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __('Salary Statement') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Increment') }}</a></li>
            <li class="active">{{ __('Salary Statement') }}</li>
        </ol>
    </section>

 <!-- Main content -->
<section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Salary Statement') }}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="btn-body">          
                    <form action="{{ url('/hrm/salary/statement/preview') }}" method="get">
                        {{ csrf_field() }}
                        <input type="hidden" name="emp_id" value="">
                        <input type="hidden" name="date1" value="">
                        <input type="hidden" name="date2" value="">
                        <button type="button" Onclick="printDiv('printDiv');" class="tip btn btn-primary btn-flat">{{ __('Print') }} </button>
                    </form>
                </div>
				
				<div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
				<div id="printDiv"  class="printDiv"> 
					<center><img src="{{ asset('public/profile_picture/'.auth()->user()->avatar) }}" style="width:120px;margin-top:2%;" class="center" alt="logo"/></center>
				@php
					$memberinfo = $data['memberinfo'];
					$salary_data = $data['salary_data'];
				@endphp
				<table style="width:90%; border:1px solid black;margin:5%;" class="table table-responsive saltble">
				<tr style="background:red;">
				<td colspan="5" class="tithed" id="tithed" style="border:1px solid black;background:#0047ab;color:white;font-weight:bold;padding:1%;">National Union of Bank Employees, HQ</td>
				</tr>
				<tr>
				<td colspan="5" style="font-weight:bold;padding:1%;text-align:center;">Pay slip for the period of {{ date('M Y',strtotime($salary_data->salary_date)) }}</td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">NAME</td>
				<td style="font-weight:bold;">{{ strtoupper($memberinfo->name) }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Code</td>
				<td colspan="2">{{ $memberinfo->employee_no==0 ? '' : $memberinfo->employee_no }}</td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Dept</td>
				<td style="font-weight:bold;">{{ $memberinfo->category }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">EPF Number</td>
				<td colspan="2">{{ $memberinfo->epf_number }}</td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Category</td>
				<td style="font-weight:bold;">{{ $memberinfo->designation }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">IC Number</td>
				<td colspan="2">{{ $memberinfo->new_ic_no }}</td>
				</tr>
				<tr>
				<td style="background: #0047ab; color: white;font-weight:bold;font-size:16px;text-align:center;width:25%;">INCOMES</td>
				<td style="font-weight:bold;background: #0047ab; color: white;font-size:16px;text-align:center;font-weight:bold;">AMOUNTS</td>
				<td style="background: #0047ab; color: white;font-weight:bold;font-size:16px;text-align:center;width:25%;">DEDUCTION</td>
				<td style="font-weight:bold;background: #0047ab; color: white;font-size:16px;text-align:center;font-weight:bold;">AMOUNTS</td>
				<td style="font-weight:bold;background: #0047ab; color: white;font-size:16px;text-align:center;font-weight:bold;">UNION</td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Basic Pay</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->basic_salary==0 ? '' : $salary_data->basic_salary }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">EPF</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->epf_ee_amount==0 ? '' : $salary_data->epf_ee_amount }}<!--{{ $salary_data->epf_ee_amount+$salary_data->epf_er }}--></td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->epf_er==0 ? '' : $salary_data->epf_er }}</td>
				</tr>

				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Allowance</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->additional_allowance_total==0 ? '' : $salary_data->additional_allowance_total }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Socso</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->ee_sosco_amount==0 ? '' : $salary_data->ee_sosco_amount }}<!--{{ $salary_data->ee_sosco_amount+$salary_data->sosco_er }}--></td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->sosco_er==0 ? '' : $salary_data->sosco_er }}</td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Bonus</td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Socso - Sip</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->eis_sip_amount==0 ? '' : $salary_data->eis_sip_amount }}<!--{{ $salary_data->ee_sosco_amount+$salary_data->sosco_er }}--></td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->sosco_eissip==0 ? '' : $salary_data->sosco_eissip }}</td>
				</tr>
				
				@php
					$nubeamt = '';
					$gimsamt = '';
					$bimbloanamt = '';
					$gelaamt = '';
					$koopamt = '';
					$carloanamt = '';
					
					//dd($data['salary_allow_deduction']);
					
					foreach($data['salary_allow_deduction'] as $deduction){
						//var_dump($deduction->name);
						if($deduction->name=='NUBE'){
							$nubeamt = $deduction->amount;
							
						}
						if($deduction->name=='GMIS'){
							$gimsamt = $deduction->amount;
							
						}
						if($deduction->name=='BIMB LOAN'){
							$bimbloanamt = $deduction->amount;
							
						}
						if($deduction->name=='GELA'){
							$gelaamt = $deduction->amount;
							
						}	
						if($deduction->name=='KOOP'){
							$koopamt = $deduction->amount;
							
						}												
						if($deduction->name=='HOME/CAR LOAN'){
							$carloanamt = $deduction->amount;
							
						}
						
					}

					$otheramt = '';
					$uplamt = '';
					$pcbamt = '';
					
					foreach($data['salary_other_deduction'] as $deduction){
						if($deduction->name=='PCB'){
							$pcbamt = $deduction->amount;
						}
						if($deduction->name=='UPL'){
							$uplamt = $deduction->amount;
						}
						if($deduction->name=='OTHERS'){
							$otheramt = $deduction->amount;
						}
						
					}
				
					//exit;
				@endphp
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Ex-Gratia</td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Income Tax </td>
				<td style="font-weight:bold;text-align:right;border-right:none !important;">{{ $pcbamt==0 ? '' : $pcbamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Overtime</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->ot_amount==0 ? '' : $salary_data->ot_amount }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Co-op Society</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;">{{ $koopamt==0 ? '' : $koopamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">NUBE</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;">{{ $nubeamt==0 ? '' : $nubeamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">GMIS</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;">{{ $gimsamt==0 ? '' : $gimsamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">BIMB LOAN</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;">{{ $bimbloanamt==0 ? '' : $bimbloanamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">GELA</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;">{{ $gelaamt==0 ? '' : $gelaamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">HOME/CAR LOAN
				</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;"> {{ $carloanamt==0 ? '' : $carloanamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">UPL
				</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;"> {{ $uplamt==0 ? '' : $uplamt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;"></td>
				<td style="font-weight:bold;text-align:right;"></td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Others
				</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;"> {{ $otheramt==0 ? '' : $otheramt }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>

				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:18%;">Total Income</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->gross_salary==0 ? '' : $salary_data->gross_salary }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:18%;">Total Deduction
				</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;"> {{ $salary_data->total_deductions==0 ? '' : $salary_data->total_deductions }}</td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>

				
				<tr>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:18%;">Net Income</td>
				<td style="font-weight:bold;text-align:right;">{{ $salary_data->net_pay==0 ? '' : $salary_data->net_pay }}</td>
				<td style="background: #e5ecf7; color: #211c1c;font-weight:bold;width:15%;">Online
				</td>
				<td colspan="1" style="font-weight:bold;text-align:right;border-right:none !important;"> </td>
				<td style="font-weight:bold;text-align:right;border-left: none !important;"></td>
				</tr>
				
				</table>
			
			<p style="text-align: center;font-size: 16px;">---This is computer generated payslip no signature required---</p>
			<br>
			</div>
			</div>
		</div>
</section>



</div>

	<script>
		function printDiv('#printDiv'){
			printinfo = $('#printDiv').innerHTML();
			$(printinfo).print();
		}
	</script>

@endsection

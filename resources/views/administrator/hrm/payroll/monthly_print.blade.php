
<!DOCTYPE html>
<html>

<head>
	<title>SALARY REPORT</title>
	
	<style>
		/* Styles go here */
		tr {
		    border-bottom: none !important; 
		}

		.page-header, .page-header-space {
		  height: 100px;
		  z-index:999;
		}
		
		.page-footer, .page-footer-space {
		  height: 50px;
		
		}
		
		.page-footer {
		  position: fixed;
		  bottom: 0;
		  width: 100%;
		  //border-top: 1px solid black; /* for demo */
		  background: #fff; /* for demo */
		  color:#000;
		}
		
		.page-header {
		  position: fixed;
		  top: 0mm;
		  width: 100%;
		  background: #fff; /* for demo */
		  color:#000;
		}
		
		.page {
		  page-break-after: always;
		}
		
		@page  {
		  margin: 3mm
		}
		
		@media  print {
			@page  {
				size: landscape; 
				margin: 3mm;
			}
		    thead {display: table-header-group;} 
		    tfoot {display: table-footer-group;}
		   
		    button {display: none;}
		   
		    body {margin: 0;}
			.export-button{
				display:none !important;
			}
			.page-header, .page-header-space {
			  height: 70px;
			  z-index:999;
			}
			.page-header,.page-table-header-space {
			  //background: #fff; /* for demo */
			  //color:#000;
			}
			#page-length-option {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#page-length-option td, #page-length-option th {
			  //border: 1px solid #ddd !important;
			  padding: 4px;
			  font-size:5px;
			}
			html {

			    //font-family: 'Muli', sans-serif;
			    font-weight: normal;
			    line-height: 1; 
			    color: rgba(0, 0, 0, .87);
			    font-size: 12px;
			}
			.nric_no{
				width:10% !important;
			}
			
			.report-address{
				font-weight:bold;
				font-size:14px;
			}

			.page-header-area{
				display: none;
			}
			
		}
		@media  not print {
			table {
			    display: table;
			    width: 100%;
			    border-spacing: 0;
			    border-collapse: none;
			}
			.page-table-header-space {
			  width: 100%;
			 // position: fixed;
			  top:101px;
			  margin-bottom:20px;
			  background: #343d9f; /* for demo */
			  z-index:999;
			  color:#fff;
			  font-size: 14px;
			}
			.tbody-area{
				top:140px;
				//position: absolute;
			}
			.nric_no{
				width:150px !important;
			}
			.page-header-area{
				display: none;
			}
		}
		td, th {
			display: table-cell;
			padding: 7px 5px;
			text-align: left;
			vertical-align: middle;
			//border-radius: 2px;
		}
		.btn, .btn-large, .btn-small, .btn-flat {
			line-height: 36px;
			display: inline-block;
			height: 35px;
			padding: 0 7px;
			vertical-align: middle;
			text-transform: uppercase;
			border: none;
			border-radius: 4px;
			-webkit-tap-highlight-color: transparent;
		}
		.tbody-area{
			color:#000;
		}
		#page-length-option td, #page-length-option th {
			//border: 1px solid #ddd !important;
			
			padding: 10px;
		}
		@media print {
			.btn-print {display:none;}
		}
		
	</style>
	<script type="text/javascript">
		
	</script>
</head>

<body>
	<button onclick="javascript:window.print()" style="padding: 5px 10px;margin-left: 20px;font-size: 15px;" class="btn-print">Print</button>
  	<table id="page-length-option" class="display table2excel" width="auto">
		<thead>
			<tr class="">
				
				
				<td colspan="8" style="padding:10px;vertical-align:top;">
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:18px;vertical-align:top;">Monthly Payroll Report</span>
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:16px;vertical-align:top;">MONTH: {{ strtoupper(date('F Y',strtotime($data['filterdate']))) }}</span>
				</td>
				<td colspan="3">	
					</br>
				</td>
				<td colspan="2" style="text-align:right">
					<img src="http://membership.nube.org.my/public/assets/images/logo/logo.png" height="50" />
				</td>
			</tr>
			@php
				$additions_list = $data['addition_list'];
				//dd($additions_list);
				$additions_count = count($additions_list);
				$deductions_list = $data['deduction_list'];
				$deductions_count = count($deductions_list);
				$other_deductions_list = $data['other_deduction_list'];
				$other_deductions_count = count($other_deductions_list);
			@endphp
			<tr class="" style="text-align:center;">
				<th rowspan="2" style="border: 1px solid #988989 !important;">NO</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;white-space: nowrap;">STAFF NAME - AS PER NRIC</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">POSITION</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;" class="nric_no">BANK</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">START DATE</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">RESIGN DATE</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">BASIC SALARY(RM)</th>
				<th colspan="{{ $additions_count }}" nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">ALLOW(RM)</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">TOTAL
					<br>
					ALLOWANCE RM
				</th>
				<th nowrap rowspan="2" style="border: 1px solid #988989 !important;">TOTAL
					OT (RM)
				</th>
				<th nowrap rowspan="2" style="border: 1px solid #988989 !important;">GROSS
					<br>
					SALARY &nbsp;&nbsp;&nbsp; (RM)
				</th>
				<th nowrap colspan="2" align="center" style="border: 1px solid #988989 !important;text-align:center;">EPF-EE</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">EE</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">EE</th>
				<th nowrap colspan="{{ $deductions_count }}" align="center" style="border: 1px solid #988989 !important;text-align:center;">STANDING INSTRUCTION - DEDUCTION</th>
				<th nowrap colspan="{{ $other_deductions_count }}" align="center" style="border: 1px solid #988989 !important;text-align:center;">OTHER DEDUCTION</th>
				<th nowrap rowspan="2" style="border: 1px solid #988989 !important;">TOTAL <br> DEDUCTIONS  RM</th>
				<th nowrap rowspan="2" style="border: 1px solid #988989 !important;">NET PAY</th>
				<th nowrap colspan="2" align="center" style="border: 1px solid #988989 !important;text-align:center;">EPF-ER</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOCSO - ER</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOCSO - EIS/SIP - ER</th>
				<!--<th style="border: 1px solid #988989 !important;">DOJ</th>
				<th  style="border: 1px solid #988989 !important;">LEVY</th>
				<th style="border: 1px solid #988989 !important;">TDF</th>
				<th style="border: 1px solid #988989 !important;">AMOUNT</th>
				<th  style="border: 1px solid #988989 !important;">LAST PAID DATE</th>-->
			</tr>
			<tr class="" style="">
				@foreach($additions_list as $additions)
				@php
					${"overall_additions" . $additions->additionid} = 0;
				@endphp
				<th nowrap style="border: 1px solid #988989 !important;">{{$additions->name}}</th>
				@endforeach
				<!--th nowrap style="border: 1px solid #988989 !important;">NEC</th>
				<th nowrap style="border: 1px solid #988989 !important;">SECOND.</th>
				<th nowrap style="border: 1px solid #988989 !important;">SPECIAL/COLA</th-->
				<th style="border: 1px solid #988989 !important;">%</th>
				<th style="border: 1px solid #988989 !important;">RM</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOCSO (RM)</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOCSO <br>(EIS/SIP)</th>
				
				@foreach($deductions_list as $deductions)
				@php
					${"overall_deductions" . $deductions->additionid} = 0;
				@endphp
				<th nowrap style="border: 1px solid #988989 !important;">{{$deductions->name}}</th>
				@endforeach
				
				<!--th style="border: 1px solid #988989 !important;">NUBE</th>
				<th style="border: 1px solid #988989 !important;">GMIS</th>
				<th nowrap style="border: 1px solid #988989 !important;">BIMB LOAN</th>
				<th style="border: 1px solid #988989 !important;">GELA</th>
				<th nowrap style="border: 1px solid #988989 !important;">HOME/CAR LOAN</th-->
				
				@foreach($other_deductions_list as $deductions)
				@php
					${"overall_otherdeductions" . $deductions->additionid} = 0;
				@endphp
				<th nowrap style="border: 1px solid #988989 !important;">{{$deductions->name}}</th>
				@endforeach
				<!--th style="border: 1px solid #988989 !important;">UPL</th>
				<th nowrap style="border: 1px solid #988989 !important;">OTHERS -<br> ADV SALARY</th-->
				
				<th style="border: 1px solid #988989 !important;">%</th>
				<th style="border: 1px solid #988989 !important;">RM</th>
				<th style="border: 1px solid #988989 !important;">(RM)</th>
				<th style="border: 1px solid #988989 !important;">(RM)</th>
				<!--<th style="border: 1px solid #988989 !important;">DOJ</th>
				<th  style="border: 1px solid #988989 !important;">LEVY</th>
				<th style="border: 1px solid #988989 !important;">TDF</th>
				<th style="border: 1px solid #988989 !important;">AMOUNT</th>
				<th  style="border: 1px solid #988989 !important;">LAST PAID DATE</th>-->
			</tr>
		</thead>
		<tbody class="" >
				@php
					$overall_total_basic_salary = 0;
					$overall_total_additional_allowance = 0;
					$overall_total_ot_amount = 0;
					$overall_total_gross_salary = 0;
					$overall_total_epf_ee_amount = 0;
					$overall_total_ee_sosco_amount = 0;
					$overall_total_eis_sip_amount = 0;
					$overall_total_deductions_all = 0;
					$overall_total_net_pay = 0;
					$overall_total_epf_er = 0;
					$overall_total_sosco_er = 0;
					$overall_total_sosco_eissip = 0;
					$slno =1;
				@endphp
				@foreach($data['cat_list'] as $category)
				@php
					//dd($data['salaries']);
					$catcount = 0;
					
					$catsalaries = CommonHelper::getSalaryList($data['filterdate'], $category->cat_name);
					$total_basic_salary = 0;
					$total_additional_allowance = 0;
					$total_ot_amount = 0;
					$total_gross_salary = 0;
					$total_epf_ee_amount = 0;
					$total_ee_sosco_amount = 0;
					$total_eis_sip_amount = 0;
					$total_deductions_all = 0;
					$total_net_pay = 0;
					$total_epf_er = 0;
					$total_sosco_er = 0;
					$total_sosco_eissip = 0;
				@endphp
				@foreach($catsalaries as $salary)
					@php
						if($category->cat_name==$salary->category){
							$catcount++;
						}
					@endphp
				@endforeach
				@if($catcount>0)
				<tr >
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important;background: #f2f2f2;">{{$category->cat_name}}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">
								
					</td>
					<td style="border: 1px solid #988989 !important;"></td>
					@foreach($additions_list as $additions)
					@php
					 ${"additions" . $additions->additionid} = 0;
					@endphp
					<td style="border: 1px solid #988989 !important;"></td>
					@endforeach
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					
					@foreach($deductions_list as $deductions)
					@php
					 ${"deductions" . $deductions->additionid} = 0;
					@endphp
					<td style="border: 1px solid #988989 !important;"></td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					@php
					 ${"otherdeductions" . $deductions->additionid} = 0;
					@endphp
					<td style="border: 1px solid #988989 !important;"></td>
					@endforeach
					
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>			
				</tr> 
				@endif
				@foreach($catsalaries as $salary)
				@php
				//var_dump($category->cat_name);
				if($category->cat_name==$salary->category){
				
				@endphp
				<tr >
					<td style="border: 1px solid #988989 !important; ">{{ $slno }}</td>
					<td style="border: 1px solid #988989 !important;white-space: nowrap;">{{ strtoupper($salary->name) }}</td>
					<td style="border: 1px solid #988989 !important;">{{ strtoupper($salary->designation) }}</td>
					<td style="border: 1px solid #988989 !important;">{{ strtoupper($salary->bank_account_no) }}</td>
					<td style="border: 1px solid #988989 !important;">{{ date('d/m/Y',strtotime($salary->doj)) }}</td>
					<td style="border: 1px solid #988989 !important;">
					@php
					if($salary->status==3){
					   if(($salary->resign_date)!="1970-01-01" && ($salary->resign_date)!="0000-00-00"){
							echo date('d/m/Y',strtotime($salary->resign_date));	
						}					
					}
					$total_basic_salary += $salary->basic_salary;
					$total_additional_allowance += $salary->additional_allowance_total;
					$total_ot_amount += $salary->ot_amount;
					$total_gross_salary += $salary->gross_salary;
					$total_epf_ee_amount += $salary->epf_ee_amount;
					$total_ee_sosco_amount += $salary->ee_sosco_amount;
					$total_eis_sip_amount += $salary->eis_sip_amount;
					$total_deductions_all += $salary->total_deductions;
					$total_net_pay += $salary->net_pay;
					$total_epf_er += $salary->epf_er;
					$total_sosco_er += $salary->sosco_er;
					$total_sosco_eissip += $salary->sosco_eissip;
					@endphp					
					</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->basic_salary,2,".","") }}</td>
					@foreach($additions_list as $additions)
					@php
						$allowancecost = CommonHelper::getSalaryAllowanceCost($salary->id,$additions->additionid);
						${"additions" . $additions->additionid} += $allowancecost;
						
					@endphp
					<td style="border: 1px solid #988989 !important;">{{ $allowancecost==0 ? '' : number_format($allowancecost,2,".","") }}</td>
					@endforeach
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="border: 1px solid #988989 !important;">{{ $salary->additional_allowance_total==0 ? '' : number_format($salary->additional_allowance_total,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->ot_amount==0 ? '' : number_format($salary->ot_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->gross_salary,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_ee_percent }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_ee_amount==0 ? '' : number_format(round($salary->epf_ee_amount),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->ee_sosco_amount==0 ? '' : number_format($salary->ee_sosco_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->eis_sip_amount==0 ? '' : number_format($salary->eis_sip_amount,2,".","") }}</td>
					
					@foreach($deductions_list as $deductions)
					@php
						$deductioncost = CommonHelper::getSalaryAllowanceCost($salary->id,$deductions->additionid);
						${"deductions" . $deductions->additionid} += $deductioncost;
						
					@endphp
					<td style="border: 1px solid #988989 !important;">{{ $deductioncost==0 ? '' : number_format($deductioncost,2,".","")  }}</td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					@php
						$adddeductioncost = CommonHelper::getSalaryAllowanceCost($salary->id,$deductions->additionid);
						${"otherdeductions" . $deductions->additionid} += $adddeductioncost;
						
					@endphp
					<td style="border: 1px solid #988989 !important;">{{  $adddeductioncost==0 ? '' : number_format($adddeductioncost,2,".","")  }}</td>
					@endforeach
					
					<td style="border: 1px solid #988989 !important;">{{ $salary->total_deductions==0 ? '' : number_format($salary->total_deductions,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->net_pay,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_percent }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_er==0 ? '' : number_format(round($salary->epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->sosco_er==0 ? '' : number_format($salary->sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->sosco_eissip==0 ? '' : number_format($salary->sosco_eissip,2,".","") }}</td>			
				</tr> 
				@php				
				}
				$slno=$slno+1;
				@endphp			
				@endforeach
				@php
					$overall_total_basic_salary += $total_basic_salary;
					$overall_total_additional_allowance += $total_additional_allowance;
					$overall_total_ot_amount += $total_ot_amount;
					$overall_total_gross_salary += $total_gross_salary;
					$overall_total_epf_ee_amount += $total_epf_ee_amount;
					$overall_total_ee_sosco_amount += $total_ee_sosco_amount;
					$overall_total_eis_sip_amount += $total_eis_sip_amount;
					$overall_total_deductions_all += $total_deductions_all;
					$overall_total_net_pay += $total_net_pay;
					$overall_total_epf_er += $total_epf_er;
					$overall_total_sosco_er += $total_sosco_er;
					$overall_total_sosco_eissip += $total_sosco_eissip;


				@endphp
				@if($catcount>0)
				<tr >
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">
								
					</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{  number_format($total_basic_salary,2,".","")  }}</td>
					@foreach($additions_list as $additions)
					@php
						${"overall_additions" . $additions->additionid} += ${"additions" . $additions->additionid};

					@endphp
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ ${"additions" . $additions->additionid}==0 ? '' :  number_format(${"additions" . $additions->additionid},2,".","")  }}</td>
					@endforeach
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_additional_allowance==0 ? '' : number_format($total_additional_allowance,2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_ot_amount==0 ? '' : number_format($total_ot_amount,2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{  number_format($total_gross_salary,2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;"></td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_epf_ee_amount==0 ? '' : number_format(round($total_epf_ee_amount),2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_ee_sosco_amount==0 ? '' : number_format($total_ee_sosco_amount,2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_eis_sip_amount==0 ? '' : number_format($total_eis_sip_amount,2,".","") }}</td>
					
					@foreach($deductions_list as $deductions)
					@php
						${"overall_deductions" . $deductions->additionid} += ${"deductions" . $deductions->additionid};
					@endphp
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ ${"deductions" . $deductions->additionid}==0 ? '' :  number_format(${"deductions" . $deductions->additionid},2,".","")  }}</td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					@php
						${"overall_otherdeductions" . $deductions->additionid} += ${"otherdeductions" . $deductions->additionid};
					@endphp
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ ${"otherdeductions" . $deductions->additionid}==0 ? '' :  number_format(${"otherdeductions" . $deductions->additionid},2,".","")  }}</td>
					@endforeach
					
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_deductions_all==0 ? '' : number_format($total_deductions_all,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_net_pay==0 ? '' : number_format($total_net_pay,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;"></td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_epf_er==0 ? '' : number_format(round($total_epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_sosco_er==0 ? '' : number_format($total_sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_sosco_eissip==0 ? '' : number_format($total_sosco_eissip,2,".","") }}</td>		
				</tr> 
				@endif
				@endforeach
				<tr >
					<td style=" " colspan="7"></td>
					
					@foreach($additions_list as $additions)
					@php
					 ${"additions" . $additions->additionid} = 0;
					@endphp
					<td style=""></td>
					@endforeach
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="" colspan="7"></td>
					
					@foreach($deductions_list as $deductions)
					@php
					 ${"deductions" . $deductions->additionid} = 0;
					@endphp
					<td style=""></td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					@php
					 ${"otherdeductions" . $deductions->additionid} = 0;
					@endphp
					<td style=""></td>
					@endforeach
					<td style="" colspan="6"></td>
				</tr> 

		</tbody>
		<tfoot>
			<tr >
					<td style=" "></td>
					<td style="text-align:center" colspan="2">GRAND TOTAL</td>
					
					<td style="" colspan="3"></td>
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{  number_format($overall_total_basic_salary,2,".","")  }}</td>
					@foreach($additions_list as $additions)
					@php
					//dd(${"overall_additions" . $additions->additionid});
					@endphp
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ ${"overall_additions" . $additions->additionid}==0 ? '' : number_format(${"overall_additions" . $additions->additionid},2,".","")  }}</td>
					@endforeach
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_additional_allowance==0 ? '' : number_format($overall_total_additional_allowance,2,".","")  }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_ot_amount==0 ? '' : number_format($overall_total_ot_amount,2,".","")  }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_gross_salary==0 ? '' : number_format($overall_total_gross_salary,2,".","")  }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;"></td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_epf_ee_amount==0 ? '' : number_format(round($overall_total_epf_ee_amount),2,".","")  }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_ee_sosco_amount==0 ? '' :  number_format($overall_total_ee_sosco_amount,2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_eis_sip_amount==0 ? '' : number_format($overall_total_eis_sip_amount,2,".","") }}</td>
					
					@foreach($deductions_list as $deductions)
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ ${"overall_deductions" . $deductions->additionid}==0 ? '' :  number_format(${"overall_deductions" . $deductions->additionid},2,".","") }}</td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ ${"overall_otherdeductions" . $deductions->additionid}==0 ? '' :  number_format(${"overall_otherdeductions" . $deductions->additionid},2,".","") }}</td>
					@endforeach
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_deductions_all==0 ? '' : number_format($overall_total_deductions_all,2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ number_format($overall_total_net_pay,2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;"></td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_epf_er==0 ? '' : number_format(round($overall_total_epf_er),2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_sosco_er==0 ? '' : number_format($overall_total_sosco_er,2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_sosco_eissip==0 ? '' : number_format($overall_total_sosco_eissip,2,".","") }}</td>		
				</tr> 
		</tfoot>
	</table>	
	
</body>



</html>
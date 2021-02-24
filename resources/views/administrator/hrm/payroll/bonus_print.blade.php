
<!DOCTYPE html>
<html>

<head>
	<title>SALARY REPORT</title>
	
	<style>
		/* Styles go here */
		tr {
		    border-bottom: none !important; 
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
	
		
		.page {
		  page-break-after: always;
		}
		
		@page  {
			size: A3 landscape;
		 	margin: 3mm;
		}
		#page-length-option td, #page-length-option th {
		  //border: 1px solid #ddd !important;
		  padding: 4px;
		  font-size:17px;
		}
		
		@media  print {
			@page  {
				size: A3 landscape;
				margin: 2mm;
			}
		    thead {display: table-header-group;} 
		    tfoot {display: table-footer-group;}
		   
		    button {display: none;}
		   
		    body {margin: 0;}
			.export-button{
				display:none !important;
			}
		
			#page-length-option {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#page-length-option td, #page-length-option th {
			  //border: 1px solid #ddd !important;
			  padding: 4px;
			  font-size:17px;
			}
			html {

			    //font-family: 'Muli', sans-serif;
			    font-weight: normal;
			    line-height: 1; 
			    color: rgba(0, 0, 0, .87);
			    font-size: 17px;
			}
			.nric_no{
				width:10% !important;
			}
			
			
		}
		@media  not print {
			table {
			    display: table;
			    width: 100%;
			    border-spacing: 0;
			    border-collapse: none;
			}
			
			.tbody-area{
				top:140px;
				//position: absolute;
			}
			.nric_no{
				width:150px !important;
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
					<span style="text-align:center;font-weight: bold;font-size:18px;vertical-align:top;">Monthly Bonus Report</span>
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
			
			
				
			@endphp
			<tr class="" style="text-align:center;">
				<th rowspan="2" align="center" style="border: 1px solid #988989 !important;">NO</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;white-space: nowrap;">STAFF NAME - AS PER NRIC</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;">POSITION</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;" class="nric_no">BANK</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;">START DATE</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;">RESIGN DATE</th>
				<th rowspan="2" align="center" nowrap style="border: 1px solid #988989 !important;">BONUS SALARY(RM)</th>
			
				<th nowrap colspan="2" align="center" style="border: 1px solid #988989 !important;text-align:center;">EPF-EE</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">EE</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">EE</th>
				
				<th nowrap rowspan="2" align="center" style="border: 1px solid #988989 !important;text-align: center;">TOTAL <br> DEDUCTIONS  RM</th>
				<th nowrap rowspan="2" align="center" style="border: 1px solid #988989 !important;">NET PAY</th>
				<th nowrap colspan="2" align="center" style="border: 1px solid #988989 !important;text-align:center;">EPF-ER</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOCSO - ER</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOCSO - EIS/SIP - ER</th>
				
			</tr>
			<tr class="" style="">
				
				<th style="border: 1px solid #988989 !important;">%</th>
				<th style="border: 1px solid #988989 !important;">RM</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOCSO (RM)</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOCSO <br>(EIS/SIP)</th>
				
				<th style="border: 1px solid #988989 !important;">%</th>
				<th style="border: 1px solid #988989 !important;">RM</th>
				<th style="border: 1px solid #988989 !important;">(RM)</th>
				<th style="border: 1px solid #988989 !important;">(RM)</th>
				
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
					
					$catsalaries = CommonHelper::getBonusSalaryList($data['filterdate'], $category->cat_name);
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
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					
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
					$total_basic_salary += $salary->bonus_salary;
				
					$total_gross_salary += $salary->gross_salary;
					$total_epf_ee_amount += $salary->epf_ee_amount;
					$total_ee_sosco_amount += $salary->ee_sosco_amount;
					$total_eis_sip_amount += $salary->eis_sip_amount;
					$total_deductions_all += $salary->deductions_total;
					$total_net_pay += $salary->net_pay;
					$total_epf_er += $salary->epf_er;
					$total_sosco_er += $salary->sosco_er;
					$total_sosco_eissip += $salary->sosco_eissip;
					@endphp					
					</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->bonus_salary,2,".","") }}</td>
					
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_ee_amount==0 ? '' : number_format(round($salary->epf_ee_amount),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->ee_sosco_amount==0 ? '' : number_format($salary->ee_sosco_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->eis_sip_amount==0 ? '' : number_format($salary->eis_sip_amount,2,".","") }}</td>
					
					<td style="border: 1px solid #988989 !important;">{{ $salary->deductions_total==0 ? '' : number_format($salary->deductions_total,2,".","") }}</td>
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
					
					<td style="border: 1px solid #988989 !important;text-decoration: underline;"></td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_epf_ee_amount==0 ? '' : number_format(round($total_epf_ee_amount),2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_ee_sosco_amount==0 ? '' : number_format($total_ee_sosco_amount,2,".","")  }}</td>
					<td style="border: 1px solid #988989 !important;text-decoration: underline;">{{ $total_eis_sip_amount==0 ? '' : number_format($total_eis_sip_amount,2,".","") }}</td>
					
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
					
					<td style="" colspan="7"></td>
					
					<td style="" colspan="6"></td>
				</tr> 

		</tbody>
		<tfoot>
			<tr >
					<td style=" "></td>
					<td style="text-align:center" colspan="2">GRAND TOTAL</td>
					
					<td style="" colspan="3"></td>
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{  number_format($overall_total_basic_salary,2,".","")  }}</td>
					
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;"></td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_epf_ee_amount==0 ? '' : number_format(round($overall_total_epf_ee_amount),2,".","")  }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_ee_sosco_amount==0 ? '' :  number_format($overall_total_ee_sosco_amount,2,".","") }}</td>
					<td style="border-top: 1px solid #988989 !important;border-bottom: double !important;">{{ $overall_total_eis_sip_amount==0 ? '' : number_format($overall_total_eis_sip_amount,2,".","") }}</td>
					
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
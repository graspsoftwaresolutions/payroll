
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
		
	</style>
	<script type="text/javascript">
		
	</script>
</head>

<body>
	
  	<table id="page-length-option" class="display table2excel" width="auto">
		<thead>
			<tr class="">
				
				
				<td colspan="8" style="padding:10px;vertical-align:top;">
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:18px;vertical-align:top;">Monthly Payroll Report</span>
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:16px;vertical-align:top;">MONTH: MARCH 2020</span>
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
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">STAFF NAME - AS PER NRIC</th>
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
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOSCO - ER</th>
				<th nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOSCO - EIS/SIP - ER</th>
				<!--<th style="border: 1px solid #988989 !important;">DOJ</th>
				<th  style="border: 1px solid #988989 !important;">LEVY</th>
				<th style="border: 1px solid #988989 !important;">TDF</th>
				<th style="border: 1px solid #988989 !important;">AMOUNT</th>
				<th  style="border: 1px solid #988989 !important;">LAST PAID DATE</th>-->
			</tr>
			<tr class="" style="">
				@foreach($additions_list as $additions)
				
				<th nowrap style="border: 1px solid #988989 !important;">{{$additions->name}}</th>
				@endforeach
				<!--th nowrap style="border: 1px solid #988989 !important;">NEC</th>
				<th nowrap style="border: 1px solid #988989 !important;">SECOND.</th>
				<th nowrap style="border: 1px solid #988989 !important;">SPECIAL/COLA</th-->
				<th style="border: 1px solid #988989 !important;">%</th>
				<th style="border: 1px solid #988989 !important;">RM</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOSCO (RM)</th>
				<th nowrap style="border: 1px solid #988989 !important;">SOSCO <br>(EIS/SIP)</th>
				
				@foreach($deductions_list as $deductions)
				<th nowrap style="border: 1px solid #988989 !important;">{{$deductions->name}}</th>
				@endforeach
				
				<!--th style="border: 1px solid #988989 !important;">NUBE</th>
				<th style="border: 1px solid #988989 !important;">GMIS</th>
				<th nowrap style="border: 1px solid #988989 !important;">BIMB LOAN</th>
				<th style="border: 1px solid #988989 !important;">GELA</th>
				<th nowrap style="border: 1px solid #988989 !important;">HOME/CAR LOAN</th-->
				
				@foreach($other_deductions_list as $deductions)
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
					$slno = 1;
					
				@endphp
				@foreach($data['salaries'] as $salary)
				<tr >
					<td style="border: 1px solid #988989 !important; ">{{ $slno }}</td>
					<td style="border: 1px solid #988989 !important;text-transform:uppercase;font-size:12px;">{{$salary->name}}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					@foreach($additions_list as $additions)
					@php
						$allowancecost = CommonHelper::getSalaryAllowanceCost($salary->id,$additions->additionid);
					
					@endphp
					@endforeach
					@php
						$bsal = $salary->gross_salary - ($salary->ot_amount+$allowancecost);
					@endphp
					<td style="border: 1px solid #988989 !important;">{{$bsal}}</td>
					
					<td style="border: 1px solid #988989 !important;">{{ $allowancecost }}</td>
					
					<!--td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td-->
					<td style="border: 1px solid #988989 !important;">{{$salary->additional_allowance_total}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->ot_amount}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->gross_salary}}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{$salary->epf_ee_amount}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->ee_sosco_amount}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->eis_sip_amount}}</td>
					
					@foreach($deductions_list as $deductions)
					@php
						$deductioncost = CommonHelper::getSalaryAllowanceCost($salary->id,$deductions->additionid);
					@endphp
					<td style="border: 1px solid #988989 !important;">{{ $deductioncost }}</td>
					@endforeach
					
					@foreach($other_deductions_list as $deductions)
					@php
						$adddeductioncost = CommonHelper::getSalaryAllowanceCost($salary->id,$deductions->additionid);
					@endphp
					<td style="border: 1px solid #988989 !important;">{{ $adddeductioncost }}</td>
					@endforeach
					
					<td style="border: 1px solid #988989 !important;">{{$salary->total_deductions}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->net_pay}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->epf_percent}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->epf_er}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->sosco_er}}</td>
					<td style="border: 1px solid #988989 !important;">{{$salary->sosco_eissip}}</td>
					
					
				</tr> 
				@php
					$slno++;
				@endphp
				@endforeach
			
		</tbody>
		
	</table>	
	
</body>



</html>
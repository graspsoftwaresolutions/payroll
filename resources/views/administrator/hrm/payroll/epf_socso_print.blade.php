
<!DOCTYPE html>
<html>

<head>
	<title>EPF SOCSO REPORT</title>
	
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
		  margin: 3mm;
		  size: A4;
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
			  font-size:12px;
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
	<button onclick="javascript:window.print()" style="padding: 5px 10px;margin-left: 20px;font-size: 15px;" class="btn-print ">Print</button>
	<button class="exportToExcel export-button " style="background:#227849;color: #fff;padding: 5px 10px;margin-left: 20px;font-size: 15px;">Excel</button>
  	<table id="page-length-option" class="display table2excel" width="auto">
		<thead>
			<tr class="">
				
				
				<td colspan="16" style="padding:10px;vertical-align:top;">
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:18px;vertical-align:top;">NATIONAL UNION OF BANK EMPLOYEES</span>
					<br>
					<br>
					<span style="text-align:center;font-weight: bold;font-size:16px;vertical-align:top;">EPF, SOCSO, SIP & PCB STATEMENT FOR MONTH OF {{ strtoupper(date('F Y',strtotime($data['filterdate']))) }}</span>
				</td>
				
			</tr>
			<tr class="" style="text-align:center;">
				<th rowspan="2" style="border: 1px solid #988989 !important;">No.</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;white-space: nowrap;">EPF No</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">Name</th>
				<th colspan="3" nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">EPF</th>
				<th nowrap style="border: 1px solid #988989 !important;"></th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">SOCSO No</th>
				<th colspan="3" nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SOCSO</th>
				<th nowrap style="border: 1px solid #988989 !important;"></th>
				<th colspan="3" nowrap align="center" style="border: 1px solid #988989 !important;text-align:center;">SIP</th>
				<th rowspan="2" nowrap style="border: 1px solid #988989 !important;">PCB</th>
			</tr>
			<tr class="" style="">
				<th nowrap style="border: 1px solid #988989 !important;">E'yee</th>
				<th nowrap style="border: 1px solid #988989 !important;">E'yer</th>
				<th nowrap style="border: 1px solid #988989 !important;">Total</th>
				<th nowrap style="border: 1px solid #988989 !important;"></th>
				<th nowrap style="border: 1px solid #988989 !important;">E'yee</th>
				<th nowrap style="border: 1px solid #988989 !important;">E'yer</th>
				<th nowrap style="border: 1px solid #988989 !important;">Total</th>
				<th nowrap style="border: 1px solid #988989 !important;"></th>
				<th nowrap style="border: 1px solid #988989 !important;">E'yee</th>
				<th nowrap style="border: 1px solid #988989 !important;">E'yer</th>
				<th nowrap style="border: 1px solid #988989 !important;">Total</th>
				
			</tr>
		</thead>
		<tbody class="" >
			@php
				$tot_cat = count($data['cat_list']);
				$slno =1;

				$overall_total_epf_ee_amount = 0;
				$overall_total_ee_sosco_amount = 0;
				$overall_total_epf_er = 0;
				$overall_total_sosco_er = 0;
				$overall_total_sip_ee = 0;
				$overall_total_sosco_sip = 0;
				$overall_total_pcb = 0;
			@endphp
			@foreach($data['cat_list'] as $key => $category)
				@php
					$catsalaries = CommonHelper::getSalaryList($data['filterdate'], $category->cat_name);
					$catcount = count($catsalaries);

					$total_epf_ee_amount = 0;
					$total_ee_sosco_amount = 0;
					$total_epf_er = 0;
					$total_sosco_er = 0;
					$total_sosco_sip = 0;
					$total_sosco_sip_er = 0;
					$total_pcb = 0;
				@endphp

				@if($catcount>0)
				<tr >
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important;background: #f2f2f2;">{{$category->cat_name}}</td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
					<td style="border: 1px solid #988989 !important; "></td>
				</tr>
				@foreach($catsalaries as $salary)
				@php
					$adddeductioncost = CommonHelper::getSalaryAllowanceCost($salary->id,5);
				@endphp
				<tr>
					<td style="border: 1px solid #988989 !important;">{{$slno}}</td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->epf_number}}</td>
					<td style="border: 1px solid #988989 !important;">{{ strtoupper($salary->name) }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($salary->epf_ee_amount),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($salary->epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($salary->epf_ee_amount+$salary->epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ $salary->socso_number }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->ee_sosco_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->ee_sosco_amount+$salary->sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->eis_sip_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->sosco_eissip,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($salary->eis_sip_amount+$salary->sosco_eissip,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $adddeductioncost==0 ? '' : number_format($adddeductioncost,2,".","") }}</td>
				</tr>
				@php
					$slno++;
					$total_epf_ee_amount += $salary->epf_ee_amount;
					$total_ee_sosco_amount += $salary->ee_sosco_amount;
					$total_epf_er += $salary->epf_er;
					$total_sosco_er += $salary->sosco_er;
					$total_sosco_sip += $salary->eis_sip_amount;
					$total_sosco_sip_er += $salary->sosco_eissip;
					$total_pcb += $adddeductioncost;
				@endphp
				@endforeach
				<tr style="font-weight: bold">
					<td colspan="3" style="border: 1px solid #988989 !important;text-align: right;">Total</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($total_epf_ee_amount),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($total_epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($total_epf_ee_amount+$total_epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_ee_sosco_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_ee_sosco_amount+$total_sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_sosco_sip,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_sosco_sip_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($total_sosco_sip+$total_sosco_sip_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ $total_pcb==0 ? '' : number_format($total_pcb,2,".","") }}</td>
				</tr>
				@php
					$overall_total_epf_ee_amount += $total_epf_ee_amount;
					$overall_total_ee_sosco_amount += $total_ee_sosco_amount;
					$overall_total_epf_er += $total_epf_er;
					$overall_total_sosco_er += $total_sosco_er;
					$overall_total_sip_ee += $total_sosco_sip;
					$overall_total_sosco_sip += $total_sosco_sip_er;
					$overall_total_pcb += $total_pcb;
				@endphp
				@if($tot_cat-1 != $key)
				<tr>
					<td colspan="16" style="border-left: 1px solid #988989 !important;border-right: 1px solid #988989 !important;"></td>
				</tr>
				<tr>
					<td colspan="16" style="border-left: 1px solid #988989 !important;border-right: 1px solid #988989 !important;"></td>
				</tr>
				@endif
				@endif
			@endforeach
			<tr>
				<td colspan="16" style="border: 1px solid #988989 !important;"></td>
			</tr>

		</tbody>
		<tfoot>
			<tr style="font-weight: bold">
					<td colspan="3" style="border: 1px solid #988989 !important;text-align: right;">Overall Total</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($overall_total_epf_ee_amount),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($overall_total_epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format(round($overall_total_epf_ee_amount+$overall_total_epf_er),2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_ee_sosco_amount,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_ee_sosco_amount+$overall_total_sosco_er,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;"></td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_sip_ee,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_sosco_sip,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_sip_ee+$overall_total_sosco_sip,2,".","") }}</td>
					<td style="border: 1px solid #988989 !important;">{{ number_format($overall_total_pcb,2,".","") }}</td>
				</tr>
		</tfoot>
	</table>	
	
</body>
<script src="{{ asset('public/assets/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
<script src ="{{ asset('public/assets/js/jquery-ui.js') }}"></script>
<script>
	var excelfilenames="EPF SOCSO Report";
</script>
<script src="{{ asset('public/assets/js/jquery.table2excel.js') }}"></script>
<!--script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script type="text/javascript" src="https://www.jqueryscript.net/demo/export-table-json-csv-txt-pdf/src/tableHTMLExport.js"></script-->
<script>
	$(document).ready( function() { 
		$("html").css('opacity',1);

		$(".exportToExcel").click(function(e){
			$("#page-length-option").table2excel();
		});
    }); 
	
</script>


</html>
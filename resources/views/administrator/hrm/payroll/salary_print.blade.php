@extends('administrator.master')
@section('title', __('Salary Statement'))

@section('main_content')
<style>
	.main {
		padding: 15px 60px;
		width:  1000px;
		margin: 0 auto;
	}
	
	
	.border {
		border: 1px solid #cccccc;
		box-shadow: 0px 8px 3px -5px #b7b7b7;
	}
	
	.name {
		text-align: center;
		font-weight: bold; 
		font-size: 22px;
		padding-top: 5px;
		margin: 0;
	}
	
	.name1 {
		text-align: center;
		letter-spacing: 1px;
		font-weight: bold;
		font-size: 17px;
	}
	
	.border1 {
		border:1px solid #000;
		
	}
	
	.income {
		background: #f3f2f2;
		text-align: center;
		font-size: 13px;
		font-weight: bold;
	}
	
	.pad {
		padding:5px 5px;
	}
	
	.print-table, th, td {
		 border: none !important;
	}
	
	.print-table tr:nth-child(even) {
		background: none !important;
	}
	
	@media print{
		.print-table, th, td {
			 border: none !important;
		}
		
		.print-table tr:nth-child(even) {
			background: none !important;
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


                 <!--form action="{{ url('/hrm/salary/statement/pdf') }}" method="get">
                        {{ csrf_field() }}
                       <input type="hidden" name="emp_id" value="">
                        <input type="hidden" name="date1" value="">
                        <input type="hidden" name="date2" value="">
                        <button type="submit" class="tip btn btn-primary btn-flat">{{ __('PDF') }} </button>
                        
                    </form-->
                </div>
                <hr>

                <!-- Notification Box -->
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
                <!-- /.Notification Box -->
				@php
					$memberinfo = $data['memberinfo'];
					$salary_data = $data['salary_data'];
				@endphp
				<div id="printDiv" class="  main" style="border: 1px solid #cccccc;">
					<style>
						@media print{
							.print-table, th, td {
								 border: none !important;
							}
							
							.print-table tr:nth-child(even) {
								background: none !important;
							}
					
						}
						.main {
								padding: 15px 60px;
								width:  1000px;
								margin: 0 auto;
							}
							
							
							.border {
								border: 1px solid #cccccc;
								box-shadow: 0px 8px 3px -5px #b7b7b7;
							}
							
							.name {
								text-align: center;
								font-weight: bold; 
								font-size: 22px;
								padding-top: 5px;
								margin: 0;
							}
							
							.name1 {
								text-align: center;
								letter-spacing: 1px;
								font-weight: bold;
								font-size: 17px;
							}
							
							.border1 {
								border:1px solid #000;
								
							}
							
							.income {
								background: #f3f2f2;
								text-align: center;
								font-size: 13px;
								font-weight: bold;
							}
							
							.pad {
								padding:5px 5px;
							}
							
					</style>
					<table class="print-table" width="100%">
						<tr>
							<td colspan="1" width="10%">
								<img src="{{ asset('public/profile_picture/'.auth()->user()->avatar) }}" alt="logo">
							</td>
							<td colspan="1" style="padding-left: 40px;">
								<h4 class="name">NUBE</h4>
								<p class="name1">Pay slip for the period of {{ date('M Y',strtotime($salary_data->salary_date)) }} </p>
							</td>
							<td style="padding-top: 85px; font-size: 15px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						</tr>
					</table><hr>
					<br>
					<div >
						<table width="100%" class="print-table" style="padding: 10px 0px;">
							<tr>
								<td>
									<table width="100%" class="print-table">
										<tr >
											<td colspan="1" width="12%" class="pad">Name </td>
											<td colspan="1"> : {{ $memberinfo->name }}</td>
										</tr>
										<tr>
											<td colspan="1" width="12%" class="pad">Code </td>
											<td colspan="1"> : </td>
										</tr>
										<tr>
											<td colspan="1" width="12%" class="pad">Dept </td>
											<td colspan="1"> : {{ $memberinfo->designation }}</td>
										</tr>
									</table>
								</td>
								<td>
									<table width="100%" class="print-table">
										<tr>
											<td colspan="1" width="30%" class="pad">Category </td>
											<td colspan="1"> : {{ $memberinfo->category }}</td>
										</tr>
										<tr>
											<td colspan="1" width="30%" class="pad">EPF Number </td>
											<td colspan="1"> :</td>
										</tr>
										<tr>
											<td colspan="1" width="30%" class="pad"> IC Number </td>
											<td colspan="1"> : {{ $memberinfo->new_ic_no }}</td>	
										</tr>
									</table>
								</td>
							</tr>
						</table> 
						<br>
						<table width="100%" class="print-table" >
							<tr>
								<td style="font-size: 16px; font-weight: bold;">INCOMES</td>
								<td style="text-align: right;"></td> 
								<td style="font-size: 16px; font-weight: bold;">DEDUCTION</td>
								<td style="text-align: right;padding-bottom:20px;"></td>
							</tr>
							<tr>
								<td colspan="2" style="width:50%;vertical-align: top;">
									<table class=" border" width="100%" class="print-table" style="padding-left: 5px;font-weight:bold;">
										<tr>
											<td width="20%" class="pad">Basic Pay  </td>
											<td style=""> : {{ $salary_data->basic_salary }} </td>
											
										</tr>
										<tr>
											<td width="20%" class="pad">Allowance </td>
											<td style=""> : {{ $salary_data->additional_allowance_total }}</td>
										</tr>
										 <tr>
											<td width="20%" class="pad">Bonus </td>
											<td style=""> : </td>
										</tr>
										<tr>
											<td width="20%" class="pad">Ex-Gratia </td>
											<td style=""> : </td>
										</tr>
										<tr>
											<td width="20%" class="pad">Overtime </td>
											<td style=""> : {{ $salary_data->ot_amount }}</td>
										</tr>
										<tr>
											<td></td>
											<td style="text-align: right;"></td>
										</tr>
										<tr>
											<td></td>
											<td style="text-align: right;"></td>

										</tr>
										<tr>
											<td style="padding-bottom:79px;"></td>
											<td style="text-align: right;padding-left:55px;"></td>
										</tr>
									</table>
								</td>
								<td colspan="2"  style="width:50%;">
									<table class=" border" width="100%" class="print-table"  style="font-weight:bold;">
										<tr>
											<td width="25%" class="pad">EPF  </td>
											<td style=""> : {{ $salary_data->epf_ee_amount+$salary_data->epf_er }}</td>
										</tr>
										<tr>
											<td width="25%" class="pad">Sosco  </td>
											<td style=""> : {{ $salary_data->ee_sosco_amount+$salary_data->sosco_er }}</td>
										</tr>
										 <tr>
											<td width="25%" class="pad">Income Tax </td>
											<td style=""> : </td>
										</tr>
										<tr>
											<td width="30%" class="pad">Co-op Society </td>
											<td style=""> : </td>
										</tr>
										@php
											$gimsamt = '';
											$gelaamt = '';
											$loanamt = 0;
											//$otheramt = $salary_data->eis_sip_amount+$salary_data->sosco_eissip;
											$otheramt = 0;
											
											foreach($data['salary_allow_deduction'] as $deduction){
												if($deduction->name=='GMIS'){
													$gimsamt = $deduction->amount;
													
												}
												if($deduction->name=='GELA'){
													$gelaamt = $deduction->amount;
													
												}
												if($deduction->name=='BIMB LOAN' || $deduction->name=='HOME/CAR LOAN'){
													$loanamt += $deduction->amount;
													
												}
												
												if($deduction->name!='GMIS' && $deduction->name!='GELA' && $deduction->name=='BIMB LOAN' && $deduction->name=='HOME/CAR LOAN'){
													$otheramt += $deduction->amount;
												}
												
											}
											foreach($data['salary_other_deduction'] as $deduction){
												$otheramt += $deduction->amount;
												
											}
											
										@endphp
										
										<tr>
											<td width="25%" class="pad">GMIS  </td>
											<td style=""> : {{ $gimsamt }} </td>
										</tr>
										<tr>
											<td width="25%" class="pad">GELA </td>
											<td style=""> : {{ $gelaamt }}</td>
										</tr>
										<tr>
											<td width="25%" class="pad">Loan </td>
											<td style=""> : {{ $loanamt }}</td>
										</tr>
										<tr>
											<td width="25%" class="pad">Others</td>
											<td style=""> : {{ $otheramt }}</td>
										</tr>
										<tr>
											<td colspan="2" class="pad" style="margin-top:0 !important;padding-top:0 !important;padding-bottom:20px;">[SOSCO-EIS/SIP, NUBE,KOOP,PCB,UPL,OTHERS - ADV SALARY] </td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<br>
						<table width="100%" class="print-table">
							<tr>
								<td  style="width:50%;">
									<table width="100%" class="print-table" style="font-weight:bold">
										<tr>
											<td colspan="1" width="30%" class="pad">Total Income</td>
											<td colspan="1" style=""> : {{ $salary_data->gross_salary }}</td>
										</tr>
										<tr>
											<td class="pad">Net Income</td>
											<td style=""> : {{ $salary_data->net_pay }}</td>
										</tr>
									</table>
								</td>
								<td  style="width:50%;">
									<table width="100%" class="print-table" style="font-weight:bold">
										<tr>
											<td width="30%" class="pad">Total Deduction</td>
											<td> : {{ $salary_data->total_deductions }}</td>
										</tr>
										<tr>
											<td width="30%" class="pad">Cheque No</td>
											<td> : </td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td></td>
								<td style="padding-left:30%; padding-top:20px;"><hr style="width:100%;"></td>
							</tr>
							<tr>
								<td></td>
								<td style="text-align:right">Acknowledge Receipt</td>
							</tr>
						</table>				
					</div>
				</div>

            
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
	<script>
		function printDiv('#printDiv'){
			printinfo = $('#printDiv').innerHTML();
			$(printinfo).print();
		}
	</script>
</div>
@endsection

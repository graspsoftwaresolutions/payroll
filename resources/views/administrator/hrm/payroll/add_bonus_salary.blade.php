@extends('administrator.master')
@section('title', __('Manage Salary'))
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
@section('main_content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     {{ __('PAYROLL') }} 
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }} </a></li>
      <li><a>{{ __('Payroll') }}</a></li>
      <li class="active">{{ __('Add Bonus Salary') }}</li>
    </ol>
  </section>
  <!-- Main content -->`
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ __('Add Bonus Salary') }}</h3>

            <!-- <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div> -->
          </div>
          <div class="box-body">
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
            <div class="col-md-12">
              <form class="form-horizontal" id="EmployeeForm"  name="employee_select_form" action="{{ route('add_bonus_save') }}" method="post">
                {{ csrf_field() }}
				
				<div class="col-sm-offset-3 col-sm-6">
				   <div class="form-group">
					<div class="input-group margin">
					  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
					  <input type="text" name="dateofsalary" readonly class="form-control" id="monthpicker">
					 
					</div>
				  </div>
				</div>
				<div class="clearfix"></div>
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                  <label for="user_id" class="col-sm-3 control-label">{{ __('Employee Name') }}</label>
                  <div class="col-sm-6">
                  <input type="hidden" name="user_id" id="user_id">
                  <input class="form-control clearable" type="text" id="employee_name" required="" placeholder="Search Employee" name="employee_name">
                         @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>
                <div class="form-group{{ $errors->has('basic_salary') ? ' has-error' : '' }}">
                  <label for="basic_salary" class="col-sm-3 control-label">{{ __('Bonus Salary') }}</label>
                  <div class="col-sm-6">
                  <input type="text"  id="basic_salary" name="basic_salary" class="form-control" required="" placeholder="{{ __('Bonus Salary') }}">
                         @if ($errors->has('basic_salary'))
                            <span class="help-block">
                                <strong>{{ $errors->first('basic_salary') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>
				
                  <div class="form-group{{ $errors->has('gross_salary') ? ' has-error' : '' }}">
                  <label for="gross_salary" class="col-sm-3 control-label">{{ __('Gross Salary') }}</label>
                    <div class="col-sm-6">
                    <input type="text" readonly  id="gross_salary" name="gross_salary" class="form-control" placeholder="{{ __('Gross Basic') }}">
                    </div>
                </div>
				
                <div id="epf_ee_section" class=" form-group {{ $errors->has('epf_ee_id') ? ' has-error' : '' }}">
					<label for="epf_ee_id" class="col-sm-3 control-label">{{ __('EPF-EE') }}
					</label>
					
                    <div id="epf_ee" class="col-sm-6 ">
						<input type="text"  name="epf_ee_id" class="form-control deduction_price" value="" id="epf_ee_id">
                          
                    </div>
                </div>   
				<div id="ee_sosco_section" class=" form-group {{ $errors->has('ee_sosco') ? ' has-error' : '' }}">
                  <label for="ee_sosco" class="col-sm-3 control-label">{{ __('EE-SOCSO') }}
					
				  </label>
                    <div id="ee_soscos" class="col-sm-6 ">
                       <input type="text" name="ee_sosco" class="form-control  deduction_price" value=""  id="ee_sosco">
                          
                    </div>
                </div>   
                <div id="eis_sip_section" class=" form-group{{ $errors->has('eis_sip') ? ' has-error' : '' }}">
                  <label for="eis_sip" class="col-sm-3 control-label">{{ __('EIS-SIP') }}
					
				  </label>
                    <div id="eis_sips" class="col-sm-6 ">
                       <input type="text" name="eis_sip" class="form-control deduction_price" value=""   id="eis_sip">
                          
                    </div>
                </div>   
                
                  <div class="form-group{{ $errors->has('deductions_total') ? ' has-error' : '' }}">
                  <label for="deductions_total" class="col-sm-3 control-label">{{ __('Total Deductions') }}</label>
                  <div class="col-sm-6">
                  <input type="text" style="poniter-events:none;"  readonly id="deductions_total" name="deductions_total" class="form-control total_deductioncalc" placeholder="{{ __('Deductions Total') }}">
                        
                  </div>
                </div>
               
                  <div class="form-group{{ $errors->has('net_pay') ? ' has-error' : '' }}">
                    <label for="net_pay" class="col-sm-3 control-label">{{ __('Net Pay') }}</label>
                      <div class="col-sm-6">
                      <input type="text" name="net_pay" class="form-control" readonly  placeholder="Net Pay" id="net_pay">
                      </div>
                  </div>
					
					<div class="form-group{{ $errors->has('EPF_ER') ? ' has-error' : '' }} hide">
						<label for="EPF_ER" class="col-sm-3 control-label">{{ __('EPF-ER %') }}</label>
						  <div id="EPF_ERid" class="col-sm-6">
						   <input type="text" name="EPF_ERper" readonly class="form-control"  placeholder="EPF_ERper" id="EPF_ERper">
						  </div>
					</div>

                  <div class="form-group{{ $errors->has('EPF_ER') ? ' has-error' : '' }}">
                    <label for="EPF_ER" class="col-sm-3 control-label">{{ __('EPF_ER') }}</label>
                      <div id="EPF_ERid" class="col-sm-6">
                      <input type="text" name="EPF_ER" class="form-control"  placeholder="EPF_ER" id="EPF_ER">
					   
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('EPF_ER') ? ' has-error' : '' }}">
                    <label for="SOSCO_ER" class="col-sm-3 control-label">{{ __('SOCSO_ER') }}</label>
                      <div id="SOSCO_ERid" class="col-sm-6">
                      <input type="text" name="SOSCO_ER" class="form-control"  placeholder="SOCSO_ER" id="SOSCO_ER">
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('SOSCO') ? ' has-error' : '' }}">
                    <label for="SOSCO_ER" class="col-sm-3 control-label">{{ __('SOCSO-[EIS/SIP - ER]') }}</label>
                      <div id="SOSCO_EISSIP_ERid" class="col-sm-6">
                      <input type="text" name="SOSCO_EISSIP" class="form-control"  placeholder="SOCSO-[EIS/SIP - ER]" id="SOSCO_EISSIP_ER">
                      </div>
                  </div>

                  <div class=" col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info btn-flat"><i class="icon fa fa-arrow-right"></i> {{ __('Go') }}</button>
                  </div>
              </form>
            </div>
            <!-- /. end col -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix"></div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->
    </div>
    
  </section>
  <!-- /.content -->
</div>
<script src ="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script src ="{{ asset('public/assets/js/jquery-ui.js') }}"></script>
 <script type="text/javascript">
    $("#bonussalarylistli").parents().addClass("active");
    $("#bonussalarylistli").addClass("active");
  </script>
<script type="text/javascript">

  $('#employee_name').autocomplete({
    // minChars: 1,
		source: function(request, response) {
			$.ajaxSetup({
			 headers: {
			 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 }
		  });
		  $.ajax({
			type: 'POST',
			dataType: 'json',
			url: "{{route('staff_autocomplete')}}",
			data: 'action=staff_name'+'&name='+request.term,
			success: function(data) {
			 //console.log(data.length);
			 if (data.length === 0) {
				  // alert('hii');
				//   $('.customer_details').hide();
				//   $('.customer_add').show();
					var res_msg = "No Results found, please add Customer";
				   alert(res_msg);
				  
				}
			  response( $.map( data, function( item ) {
					  var object = new Object();
					  object.label = item.value;
					  object.value = item.name;
					  object.user_id = item.user_id;
					 
					  return object         
			  }));
			}
		  });
		},
    minLength: 0,
		select: function (event, ui) {
			 $("#employee_name").val(ui.item.value);
			 $("#user_id").val(ui.item.user_id);
			 $("#basic_salary").val(ui.item.basic_salary);
			 var url = "{{ url('/hrm/get-employee-master') }}" + '?user_id=' + ui.item.user_id;
			$.ajax({
				url: url,
				type: "GET",
				dataType: "json",
				success: function(result) {
				
				}
			});
			 
		  },
	   });

$("#basic_salary").keyup(gross_calc);

function gross_calc() {
	var basic_salary = Math.round(parseFloat(jQuery("#basic_salary").val()) * 100.0) / 100.0;

	$('#gross_salary').val('');
	if((basic_salary!='') && (basic_salary!=NaN) ) 
	{
		var total = basic_salary ;
        jQuery("#gross_salary").val(total.toFixed(2));
        GetSalaryDeductions(basic_salary);
	//	$('#gross_salary').val(parseFloat(basic_salary) + parseFloat(addition_total) +  parseFloat(ot) );
	}
	CalculateDeductions();
 }

 function GetSalaryDeductions(basic_salary){
  var user_id = $("#user_id").val();
    var url = "{{ url('/hrm/get-salary-contribution') }}" + '?net_salary=' + basic_salary + '&user_id='+user_id;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
                        $("#epf_ee_id").val(0);
                        $("#EPF_ER,#EPF_ERref").val(0);
                        if(result!=null){
                          $("#epf_ee_id").val(result.employee_contribution);
                          $("#EPF_ER,#EPF_ERref").val(result.employer_contribution);
                        }
                      }
                    });

      var url = "{{ url('/hrm/get-sosco-contribution') }}" + '?net_salary=' + basic_salary;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
                      $("#ee_sosco").val(0);
                      $("#SOSCO_ER").val(0);
                      if(result!=null){
                        $("#ee_sosco").val(result.employee_contribution);
                        $("#SOSCO_ER").val(result.employer_contribution);
                      }
                    }
                  });
        var url = "{{ url('/hrm/get-soscoins-contribution') }}" + '?net_salary=' + basic_salary;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
            $("#eis_sip").val(0);
            $("#SOSCO_EISSIP_ER").val(0);
            if(result!=null){
              $("#eis_sip").val(result.employee_contribution);
              $("#SOSCO_EISSIP_ER").val(result.employer_contribution);
              CalculateDeductions();
            }
          }
        });
 }

  $('#epf_ee_id').keyup(CalculateDeductions);
  $('#ee_sosco').keyup(CalculateDeductions);
  $('#eis_sip').keyup(CalculateDeductions);
  //$("#deductions_total").keyup(CalculateDeductions);
  //$('#otherdeductions_total').keyup(other_deductions_cal);

/* function other_deductions_cal() {
    var epf_eee  = $('#epf_ee_id').val();
    var ee_soscoe = $('#ee_sosco').val();
    var eis_sipe = $('#eis_sip').val();
    
    //$("#deductions_total").trigger('keyup');
   var deductions_totall = $('#deductions_total').val()=='' ? 0 : $("#deductions_total").val();
    
    //$("#otherdeductions_total").trigger('keyup');
   var otherdeductions_totall = $('#otherdeductions_total').val()=='' ? 0 : $("#otherdeductions_total").val();
    
    $('#total_deductions').val('');
    if((epf_eee!='') && (epf_eee!=NaN) && (ee_soscoe!='') && (ee_soscoe!=NaN) && (eis_sipe!='') && (eis_sipe!=NaN) ) 
    {
        $('#total_deductions').val(parseFloat(epf_eee) + parseFloat(ee_soscoe) +  parseFloat(eis_sipe)  +  parseFloat(deductions_totall) +  parseFloat(otherdeductions_totall) );
    }
    var tota_deduc = $('#total_deductions').val();
    var gross = $('#gross_salary').val();
    $('#net_pay').val(parseFloat(tota_deduc) + parseFloat(gross));
  } */

	function CalculateDeductions(){
		var sum_deductions = 0;
    $(".deduction_price").each(function() {
      var addition_price = $(this).val();
      //alert(addition_price);
      addition_price = addition_price=='' ? 0 : addition_price;
      sum_deductions = parseFloat(sum_deductions)+parseFloat(addition_price);
    });

    $("#deductions_total").val(sum_deductions);

		var gross_salary = $("#gross_salary").val();
		gross_salary = gross_salary=='' ? 0 : gross_salary;
		var netpay = parseFloat(gross_salary)-parseFloat(sum_deductions);
		$("#net_pay").val(netpay);
	}
</script>

@endsection
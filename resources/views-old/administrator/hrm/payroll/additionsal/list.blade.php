@extends('administrator.master')
@section('title', __('Salary List'))
@section('headSection')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />	
@endsection
@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __('PAYROLL') }} 
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Payroll') }}</a></li>
            <li class="active">{{ __('Salary List') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Additional Salary List') }}</h3>
              
                <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div> -->
            </div>
            <div class="box-body">
                <div  class="col-md-4">
                    <!-- <a href="{{ url('/hrm/payroll') }}" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> {{ __('Manage Salary') }}</a> -->
                     <a href="{{ route('payroll.additional_salary') }}" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> {{ __('Add Additional Salary') }}</a>
                </div>
				
                <!--<div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
                </div> -->
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
                <div class="col-md-12 table-responsive">
					
                    <table id="salary_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                               
                                <th>{{ __('Employee Name') }}</th>
                                <th>{{ __('Gross Salary') }}</th>
                                <th>{{ __('Deductions') }}</th>
                                <th>{{ __('Net Salary') }}</th>
                                
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($data['salaries'] as $salary)
								 <tr>
									<td>{{ $salary->name }}</td>
									<td>{{ $salary->gross_salary }}</td>
									<td>{{ $salary->total_deductions }}</td>
									<td>{{ $salary->net_pay }}</td>
									
									<td class="text-center"><a style="font-size:19px" class="btn btn-sm red waves-effect waves-circle waves-light" href="{{ route('add.salaryEdit',Crypt::encrypt($salary->id)) }}"><i class="icon fa fa-edit"></i></a></td>
								</tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('footerSection')
<script>
	$('#salary_data').DataTable({});
	/* var dataTable = $('#salary_data').DataTable({
        "responsive": true,
        dom: 'lBfrtip', 
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "{{ url('/ajax_salaries_list') }}",
            "dataType": "json",
            "type": "POST",
			'data': function(data){
			  var monthpicker = $('#monthpicker').val();
			 
			  //console.log(datefilter);
			 
			  data.salarydate = monthpicker;
			  
			  data._token = "{{csrf_token()}}";
			}
            
        },
        "columns": [{
                "data": "name"
            },
            {
                "data": "month_year"
            },
            {
                "data": "gross_salary"
            },
            {
                "data": "total_deductions"
            },
            {
                "data": "net_pay"
            },
            {
                "data": "actions"
            }
        ]
    });
	$(document).on('submit','form#advancedsearch',function(event){
		event.preventDefault();
		dataTable.draw();
	}); */
	function PrintSalary(){
		var monthpicker = $("#monthpicker").val();
		if(monthpicker!=""){
			var fulldate = monthpicker+'-01';
			window.open("{{ url('/hrm/monthly_salary_report').'?filterdate="+fulldate+"' }}");
		}
	}
	//var dataTable = $('#salary_data').DataTable({});
</script>
@endsection
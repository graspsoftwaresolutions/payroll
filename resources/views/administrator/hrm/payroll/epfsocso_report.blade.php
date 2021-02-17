@extends('administrator.master')
@section('title', __('Epf Socso Statement'))

@section('main_content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ __('Deduction Report') }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
      <li><a>{{ __('Payroll') }}</a></li>
      <li class="active">{{ __('Deduction Report') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Deduction Report') }}</h3>

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


          <form class="form-horizontal" id="searchform" action="{{ url('/hrm/epfsocso/statement') }}" method="post">
            {{ csrf_field() }}



            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
              <label for="user_id" class="col-sm-3 control-label">{{ __('Employee Name') }}</label>
              <div class="col-sm-3">
                <select name="emp_id" id="user_id" required class="form-control">
                  <option selected disabled>{{ __('SELECT ONE') }}</option>
                  @foreach($employees as $employee)
                  <option value="{{ $employee->user_id }}"><strong>{{ strtoupper($employee->value) }} </option>
                    @endforeach
                  </select>
                  @if ($errors->has('user_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('user_id') }}</strong>
                  </span>
                  @endif
                </div>
              </div>


               <!-- /.end group -->
              <div class="form-group{{ $errors->has('salary_month') ? ' has-error' : '' }}">
                <label for="salary_month" class="col-sm-3 control-label">{{ __('Select Month') }}</label>
                <div class="col-sm-3">
					<div class="input-group">
					    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
						<input type="text" name="dateofsalary" readonly class="form-control" id="monthpicker">
					</div>
                </div>
              </div>
			
             
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i> {{ __('VIEW DEDUCTION REPORT') }}</button>
                </div>
              </div>
              <!-- /.end group -->
            </form>
            <!-- /. end form -->
          </div>
          <!-- /. end col -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix"></div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
  @php
    $redirecturl = url('hrm/epf_socso_print');
  @endphp

  @section('footerSection')

    <script type="text/javascript">
      $("#searchform").submit(function(e){
          var monthyear = $("#monthpicker").val();
          var user_id = $("#user_id").val();
          win = window.open('{{ $redirecturl }}?date='+monthyear+'&user_id='+user_id, '_blank');
          return false;
      });

    </script>
  @endsection
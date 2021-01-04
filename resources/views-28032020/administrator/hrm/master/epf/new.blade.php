@extends('administrator.master')
@section('title', __('Manage EPF'))

@section('main_content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ __('EPF ') }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
      <li><a>{{ __(' EPF') }}</a></li>
      <li class="active">{{ __('Manage EPF ') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Manage EPF ') }}</h3>

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
          <form class="form-horizontal" id="Soscoform" action="{{route('master.EpfSave')}}" method="post">
            {{ csrf_field() }}
              <!-- /.end group -->
              <div class="form-group{{ $errors->has('wage_limit') ? ' has-error' : '' }}">
              <label for="wage_limit" class="col-sm-3 control-label">{{ __('Wage Limit') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="wage_limit" name="wage_limit" class="form-control" placeholder="{{ __('Wage Limit') }}">
                </div>
                 @if ($errors->has('assigned_to'))
                    <span class="help-block">
                        <strong>{{ $errors->first('assigned_to') }}</strong>
                    </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('from_amount') ? ' has-error' : '' }}">
              <label for="from_amount" class="col-sm-3 control-label">{{ __('From Amount') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="from_amount" name="from_amount" class="form-control" placeholder="{{ __('From Amount') }}">
                </div>
                 @if ($errors->has('from_amount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('from_amount') }}</strong>
                    </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('to_amount') ? ' has-error' : '' }}">
              <label for="to_amount" class="col-sm-3 control-label">{{ __('To Amount') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="to_amount" name="to_amount" class="form-control" placeholder="{{ __('From Amount') }}">
                </div>
                 @if ($errors->has('to_amount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('to_amount') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('employee_contribution') ? ' has-error' : '' }}">
              <label for="employee_contribution" class="col-sm-3 control-label">{{ __('Employee Contribution') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="employee_contribution" name="employee_contribution" class="form-control" placeholder="{{ __('Employee Contribution') }}">
                </div>
                 @if ($errors->has('employee_contribution'))
                    <span class="help-block">
                        <strong>{{ $errors->first('employee_contribution') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('employer_contribution') ? ' has-error' : '' }}">
              <label for="employer_contribution" class="col-sm-3 control-label">{{ __('Employer Contribution') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="employer_contribution"  name="employer_contribution" class="form-control" placeholder="{{ __('Employer Contribution') }}">
                </div>
                 @if ($errors->has('employer_contribution'))
                    <span class="help-block">
                        <strong>{{ $errors->first('employer_contribution') }}</strong>
                    </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('total_contribution') ? ' has-error' : '' }}">
              <label for="total_contribution"  class="col-sm-3 control-label">{{ __('Total Contribution') }}<span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text"  readonly id="total_contribution" name="total_contribution" class="form-control" placeholder="{{ __('Total Contribution') }}">
                </div>
                 @if ($errors->has('total_contribution'))
                    <span class="help-block">
                        <strong>{{ $errors->first('total_contribution') }}</strong>
                    </span>
                  @endif
              </div>
              <!-- /.end group -->
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i>{{ __('Add EPF') }} </button>
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
  <script src="http://localhost/human/public/backend/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    const regex = /[^\d.]|\.(?=.*\.)/g;
    const subst=``;

    $('#from_amount').keyup(function(){
    const str=this.value;
    const result = str.replace(regex, subst);
    this.value=result;
  });

    $('#to_amount').keyup(function(){
    const str=this.value;
    const result = str.replace(regex, subst);
    this.value=result;
  });

    $('#employee_contribution').keyup(function(){
    const str=this.value;
    const result = str.replace(regex, subst);
    this.value=result;
  });

  $('#employer_contribution').keyup(function(){
    const str=this.value;
    const result = str.replace(regex, subst);
    this.value=result;
  });

  $("#employee_contribution").keyup(calc);
  $("#employer_contribution").keyup(calc);

  function calc() {
     var emp_cont = $('#employee_contribution').val();
     var emp_con = $('#employer_contribution').val();
      $('#total_contribution').val(''); 
      if(emp_cont!='' && emp_cont!=NaN && emp_con!='' && emp_con!=NaN) 
      {
          $('#total_contribution').val(parseFloat(emp_cont) + parseFloat(emp_con));
      }
    }
     // Form Validation
     $("#Soscoform").validate({
     
     rules: {
       wage_limit: {
             required: true,
         },
         from_amount: {
             required: true,
         },
         to_amount: {
             required: true,
         },
         employee_contribution: {
             required: true,
         },
         employer_contribution: {
             required: true,
         },
         total_contribution: {
             required: true,
         },
     },
     //For custom messages
     messages: {
       wage_limit: {
             required: '{{__("Please enter Wage List") }}',
         },
         from_amount: {
             required: '{{__("Please enter From Amount") }}',
         },
         to_amount: {
             required: '{{__("Please enter To Amount") }}',
         },
         employee_contribution: {
             required: '{{__("Please enter Employee Contribution") }}',
         },
         employer_contribution: {
             required: '{{__("Please enter  Employer Contribution") }}',
         },
         total_contribution: {
             required: '{{__("Please enter  Total Contribution") }}',
         },
     },
 });
});


</script>
  @endsection


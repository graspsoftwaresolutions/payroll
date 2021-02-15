@extends('administrator.master')
@section('title', __('Manage Income Tax'))
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<style type="text/css">
  input {
      border: none !important;
      border-bottom: 1px solid #d2d6de !important;
     
      outline: none !important;
   }
</style>
@section('main_content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ __('Income Tax') }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
      <li><a>{{ __('Income Tax') }}</a></li>
      <li class="active">{{ __('Add Income Tax') }}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">{{ __('Income Tax') }}</h3>

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


          <form class="form-horizontal" action="{{ route('payroll.IncomeSave') }}" method="post">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="serial_no" class="col-sm-3 ">{{ __('Serial No') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                      <input type="text" required="" name="serial_no" id="serial_no" class="form-control" placeholder="{{ __('Serial No') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="" class="col-sm-10 control-label">{{ __('STATEMENT OF REMUNERATION FROM EMPLOYMENT') }}</label>
                    
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="income_tax_no" class="col-sm-4 ">{{ __('Income Tax No') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" required="" name="income_tax_no" id="income_tax_no" class="form-control" placeholder="{{ __('Employee’s Income Tax No') }}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="employee_no" class="col-sm-3 ">{{ __('Employer’s No') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                      <input type="text" required="" name="employee_no" id="employee_no" class="form-control" placeholder="{{ __('Employer’s No') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="endyear" class="col-sm-3 ">{{ __('Year') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                      <input type="text" required="" name="endyear" id="endyear" class="form-control" placeholder="{{ __('Year') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="branch" class="col-sm-4 ">{{ __('LHDNM Branch') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" required="" name="branch" id="branch" class="form-control" placeholder="{{ __('LHDNM Branch') }}">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="row box-header">
                <h3 class="box-title">A) PARTICULARS OF EMPLOYEE</h3>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="employee_name" class="col-sm-4 ">{{ __('1. Full Name of Employee/Pensioner (Mr./Miss/Madam)') }}<span style="color:red;">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" required="" name="employee_name" id="employee_name" autocomplete="new-password" class="form-control clearable" placeholder="Employee Name">
                      <input type="text" name="employee_id" id="employee_id" class="form-control hide" placeholder="">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="job_designation" class="col-sm-4 ">{{ __('2. Job Designation') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="job_designation" id="job_designation" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="staff_no" class="col-sm-4 ">{{ __('3. Staff No./Payroll No.') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="staff_no" id="staff_no" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="new_ic_no" class="col-sm-4 ">{{ __('4. New I.C. No') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="new_ic_no" id="new_ic_no" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="passport_no" class="col-sm-4 ">{{ __('5. Passport No') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="passport_no" id="passport_no" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="epf_no" class="col-sm-4 ">{{ __('6. EPF No') }}</label>
                    <div class="col-sm-8">
                      <input type="text" required="" name="epf_no" id="epf_no" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="socso_no" class="col-sm-4 ">{{ __('7. SOCSO No') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="socso_no" id="socso_no" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="no_of_children" class="col-sm-4 ">{{ __('8. Number Of Children Qualified For Tax Relief') }}</label>
                    <div class="col-sm-8">
                      <input type="text" name="no_of_children" id="no_of_children" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-12 ">{{ __('9. If the period of employment is less than a year, please state') }}</label>
                    <label for="date_commencement" class="col-sm-4 ">{{ __('(a) Date of commencement') }}</label>
                    <div class="col-sm-8">
                      <input type="date" name="date_commencement" id="date_commencement" class="form-control " placeholder="">
                      <br>
                    </div>

                    <label for="date_cessation" class="col-sm-4 ">{{ __('(b) Date of cessation') }}</label>
                    <div class="col-sm-8">
                      <input type="date" name="date_cessation" id="date_cessation" class="form-control " placeholder="">
                    </div>
                  </div>
                </div>
                
              </div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col-sm-9">
                  <div class="row box-header">
                    <h3 class="box-title">B) EMPLOYMENT INCOME, BENEFITS AND LIVING ACCOMMODATION
                      <br>
                      <small>(Excluding Tax Exempt Allowances/Perquisites/Gifts/Benefits)</small>
                    </h3>
                  </div>
                </div>
                <div class="col-sm-3">
                  <label> RM
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 1. (a) Gross salary, wages or leave pay (including overtime pay)
                </div>
                <div class="col-sm-3">
                  <input type="text" name="gross_salary" id="gross_salary" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 &nbsp; (b) Fees (including director fees), commission or bonus
                </div>
                <div class="col-sm-3">
                  <input type="text" name="fees" id="fees" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-6">
                       &nbsp;  (c) Gross tips, perquisites, awards/rewards or other allowances ( Details of payment: 
                      </div>
                      <div class="col-sm-3">
                        <input type="text" name="gross_tips" id="gross_tips" class="form-control" placeholder="">
                      </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="net_salary" id="net_salary" class="form-control" placeholder="">
                   <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                &nbsp; (d) Income Tax borne by the Employer in respect of his Employee
                </div>
                <div class="col-sm-3">
                  <input type="text" name="employer_brone_amt" id="employer_brone_amt" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                &nbsp; (e) Employee Share Option Scheme (ESOS) benefit
                </div>
                <div class="col-sm-3">
                  <input type="text" name="esos_benefit" id="esos_benefit" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                &nbsp; (f) Gratuity for the period from
                </div>
                <div class="col-sm-2">
                  <input type="text" name="gratuity_from" id="gratuity_from" class="form-control" placeholder="">
                  <br>
                </div>
                <div class="col-sm-1">
                 to
                </div>
                <div class="col-sm-2">
                  <input type="text" name="gratuity_to" id="gratuity_to" class="form-control" placeholder="">
                  <br>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="gratuity" id="gratuity" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
             
              <div class="row">
                <div class="col-sm-9">
                 2. Details of arrears and others for preceding years paid in the current year
                </div>
                <div class="col-sm-3">
                 &nbsp;
                 <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-5">
                       &nbsp;  Type of income
                      </div>
                       <div class="col-sm-1">
                        (a)
                      </div>
                      <div class="col-sm-3 ">
                        <input type="text" name="income_type_one" id="income_type_one" class="form-control" placeholder="">
                        <br>
                      </div>
                  </div>
                </div>
                <div class="col-sm-3 hide">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-5">
                       &nbsp;  
                      </div>
                       <div class="col-sm-1">
                        (b)
                      </div>
                      <div class="col-sm-3 ">
                        <input type="text" name="income_type_two" id="income_type_two" class="form-control" placeholder="">
                        <br>
                      </div>
                  </div>
                </div>
                <div class="col-sm-3 ">
                  <input type="text" name="arrear_paid" id="arrear_paid" class="form-control" placeholder="">
                   <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-5">
                       3. Benefits in kind: 
                      </div>
                       <div class="col-sm-1">
                        Specify:
                      </div>
                      <div class="col-sm-3">
                        <input type="text" name="benefits_details" id="benefits_details" class="form-control" placeholder="">
                      </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="benefits_amount" id="benefits_amount" class="form-control" placeholder="">
                   <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-5">
                       4. Value of living accommodation provided
                      </div>
                       <div class="col-sm-1">
                        Address:
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="accommodation_address" id="accommodation_address" class="form-control" placeholder="">
                      </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="accommodation_value" id="accommodation_value" class="form-control" placeholder="">
                   <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 5. Refund from unapproved Provident/Pension Fund
                </div>
                <div class="col-sm-3">
                  <input type="text" name="refund_fund" id="refund_fund" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 6. Compensation for loss of employment
                </div>
                <div class="col-sm-3">
                  <input type="text" name="compensation_loss" id="compensation_loss" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <br>
              <br>
              <div class="row box-header">
                <h3 class="box-title">C) PENSION AND OTHERS</h3>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 1. Pension
                </div>
                <div class="col-sm-3">
                  <input type="text" name="pension" id="pension" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 2. Annuities or other Periodical Payments
                </div>
                <div class="col-sm-3">
                  <input type="text" name="annuities_payment" id="annuities_payment" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9 bold">
                 TOTAL
                </div>
                <div class="col-sm-3">
                  <input type="text" name="pension_total" id="pension_total" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <br>
              <br>
              <div class="row box-header">
                <h3 class="box-title">D) TOTAL DEDUCTION</h3>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 1. Monthly Tax Deductions (MTD) remitted to LHDNM
                </div>
                <div class="col-sm-3">
                  <input type="text" name="monthly_tax_deduction" id="monthly_tax_deduction" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 2. CP 38 Deductions
                </div>
                <div class="col-sm-3">
                  <input type="text" name="cp_deduction" id="cp_deduction" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 3. Zakat paid via salary deduction
                </div>
                <div class="col-sm-3">
                  <input type="text" name="zakat_paid" id="zakat_paid" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                 4. Total claim for deduction by employee via Form TP1 in respect of:
                </div>
                <div class="col-sm-3 hide">
                  <!--input type="text" name="total_claim_deduction" id="total_claim_deduction" class="form-control" placeholder=""-->
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-7">
                       &nbsp;&nbsp; (a) Relief
                      </div>
                       <div class="col-sm-1">
                        RM
                      </div>
                      <div class="col-sm-2">
                        <input type="text" name="relief_deduction" id="relief_deduction" class="form-control" placeholder="">
                        <br>
                      </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-7">
                       &nbsp;&nbsp; (b) Zakat other than that paid via monthly salary deduction
                      </div>
                       <div class="col-sm-1">
                        RM
                      </div>
                      <div class="col-sm-2">
                        <input type="text" name="non_zakat_deduction" id="non_zakat_deduction" class="form-control" placeholder="">
                        <br>
                      </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-sm-9">
                 5. Total qualifying child relief
                </div>
                <div class="col-sm-3">
                  <input type="text" name="child_relief" id="child_relief" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <br>
              <br>
              <div class="row box-header">
                <h3 class="box-title">E) CONTRIBUTIONS PAID BY EMPLOYEE TO APPROVED PROVIDENT/PENSION FUND AND SOCSO</h3>
              </div>
              <div class="row">
                <div class="col-sm-4">
                 1. Name of Provident Fund
                </div>
                <div class="col-sm-8">
                  <input type="text" name="provident_fund_name" id="provident_fund_name" class="form-control" placeholder="">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-11">
                       &nbsp;&nbsp; Amount of compulsory contribution paid (state the employee’s share of contribution only)
                      </div>
                       <div class="col-sm-1">
                        RM
                      </div>
                      
                  </div>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="contribution_paid" id="contribution_paid" class="form-control" placeholder="">
                    <br>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                   <div class="row">
                      <div class="col-sm-11">
                       2. SOCSO : Amount of compulsory contribution paid (state the employee’s share of contribution only)
                      </div>
                       <div class="col-sm-1">
                        RM
                      </div>
                      
                  </div>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="socso_contribution" id="socso_contribution" class="form-control" placeholder="">
                    <br>
                  </div>
              </div>
              <br>
              <br>
              <div class="row">
                <h3 class="box-title" style="font-size: 18px;">
                  <div class="col-sm-9">
                    <div class="row">
                      <div class="col-sm-11">
                        F) TOTAL TAX EXEMPT ALLOWANCES / PERQUISITES / GIFTS / BENEFITS
                      </div>
                      <div class="col-sm-1">
                        RM
                      </div>
                    </div>
                  </div>
                  </h3>                  
                    
                    <div class="col-sm-3">
                      <input type="text" name="total_tax" id="total_tax" class="form-control" placeholder="">
                      <br>
                    </div>
                
              
              </div>
              <div class="row">
                <div class="col-sm-3">
                   <div class="col-md-12">
                      <div class="form-group">
                        <label for="date_tax" class="col-sm-4 ">{{ __('Date') }}</label>
                        <div class="col-sm-8">
                          <input type="date" name="date_tax" id="date_tax" class="form-control " placeholder="">
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="officer_name" class="col-sm-4 ">{{ __('Name of Officer') }}</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="officer_name" id="officer_name" class="form-control" placeholder="">
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="designation" class="col-sm-4 ">{{ __('Designation') }}</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="designation" id="designation" class="form-control" placeholder="">
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="employer_name" class="col-sm-4 ">{{ __('Name and Address of Employer') }}</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="employer_name" id="employer_name" class="form-control" placeholder="">
                                    <br>
                                    <input type="text" name="employer_address" id="employer_address" class="form-control" placeholder="">
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="employer_telno" class="col-sm-4 ">{{ __('Employer’s Telephone No.') }}</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="employer_telno" id="employer_telno" class="form-control" placeholder="">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.end group -->
              <div class="form-group">
                <div class="col-sm-12 pull-right">
                  <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-arrow-right"></i>{{ __('Save') }} </button>
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

  @section('footerSection')
 <script src ="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script src ="{{ asset('public/assets/js/jquery-ui.js') }}"></script>
  <script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoHide: true,
    });

    //$("#categorylistli").parents().addClass("active");
    $("#incometaxli").addClass("active");

    $('#employee_name').autocomplete({
    //minChars:0,
    source: function(request, response) {
      $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
      });
      $.ajax({
      type: 'POST',
      dataType: 'json',
      url: "{{route('income_staff_autocomplete')}}",
      data: 'action=staff_name'+'&name='+request.term,
      success: function(data) {
       //console.log(data.length);
       if (data.length === 0) {
          // alert('hii');
        //   $('.customer_details').hide();
        //   $('.customer_add').show();
          var res_msg = "No Results found, please add Employee";
           alert(res_msg);
          
        }
        response( $.map( data, function( item ) {
            var object = new Object();
            object.label = item.value;
            object.value = item.name;
            object.user_id = item.user_id;
            object.new_ic_no = item.new_ic_no;
           
            return object         
        }));
      }
      });
    },
    minLength: 0,
    select: function (event, ui) {
     // console.log(ui.item.employee_id);
       $("#employee_name").val(ui.item.name);
       $("#employee_id").val(ui.item.user_id);
       $("#new_ic_no").val(ui.item.new_ic_no);
       $("#basic_salary").val(ui.item.basic_salary);
       
      },
     });
      </script>
  @endsection
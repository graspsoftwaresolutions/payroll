<?php $__env->startSection('title', __('Manage Sosco Insurance')); ?>

<?php $__env->startSection('main_content'); ?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo __('Sosco Insurance'); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
      <li><a><?php echo __('Sosco Insurance'); ?></a></li>
      <li class="active"><?php echo __('Manage Sosco Insurance'); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo __('Manage Sosco Insurance'); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <!-- Notification Box -->
        <div class="col-md-12">
          <?php if(!empty(Session::get('message'))): ?>
          <div class="alert alert-success alert-dismissible" id="notification_box">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-check"></i> <?php echo Session::get('message'); ?>

          </div>
          <?php elseif(!empty(Session::get('exception'))): ?>
          <div class="alert alert-warning alert-dismissible" id="notification_box">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-warning"></i> <?php echo Session::get('exception'); ?>

          </div>
          <?php endif; ?>
        </div>
        <!-- /.Notification Box -->
        <div class="col-md-12">
          <form class="form-horizontal" id="Soscoform" action="<?php echo route('master.SoscoInsuranceSave'); ?>" method="post">
            <?php echo csrf_field(); ?>

              <!-- /.end group -->
              <div class="form-group<?php echo $errors->has('wage_limit') ? ' has-error' : ''; ?>">
              <label for="wage_limit" class="col-sm-3 control-label"><?php echo __('Wage Limit'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="wage_limit" name="wage_limit" class="form-control" placeholder="<?php echo __('Wage Limit'); ?>">
                </div>
                 <?php if($errors->has('assigned_to')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('assigned_to'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>
              <div class="form-group<?php echo $errors->has('from_amount') ? ' has-error' : ''; ?>">
              <label for="from_amount" class="col-sm-3 control-label"><?php echo __('From Amount'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="from_amount" name="from_amount" class="form-control" placeholder="<?php echo __('From Amount'); ?>">
                </div>
                 <?php if($errors->has('from_amount')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('from_amount'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>
              <div class="form-group<?php echo $errors->has('to_amount') ? ' has-error' : ''; ?>">
              <label for="to_amount" class="col-sm-3 control-label"><?php echo __('To Amount'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="to_amount" name="to_amount" class="form-control" placeholder="<?php echo __('From Amount'); ?>">
                </div>
                 <?php if($errors->has('to_amount')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('to_amount'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>

              <div class="form-group<?php echo $errors->has('employee_contribution') ? ' has-error' : ''; ?>">
              <label for="employee_contribution" class="col-sm-3 control-label"><?php echo __('Employee Contribution'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="employee_contribution" name="employee_contribution" class="form-control" placeholder="<?php echo __('Employee Contribution'); ?>">
                </div>
                 <?php if($errors->has('employee_contribution')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('employee_contribution'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>

              <div class="form-group<?php echo $errors->has('employer_contribution') ? ' has-error' : ''; ?>">
              <label for="employer_contribution" class="col-sm-3 control-label"><?php echo __('Employer Contribution'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text" id="employer_contribution"  name="employer_contribution" class="form-control" placeholder="<?php echo __('Employer Contribution'); ?>">
                </div>
                 <?php if($errors->has('employer_contribution')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('employer_contribution'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>
              <div class="form-group<?php echo $errors->has('total_contribution') ? ' has-error' : ''; ?>">
              <label for="total_contribution"  class="col-sm-3 control-label"><?php echo __('Total Contribution'); ?><span style="color:red;">*</span></label>
              <div class="col-sm-6">
               <input type="text"  readonly id="total_contribution" name="total_contribution" class="form-control" placeholder="<?php echo __('Total Contribution'); ?>">
                </div>
                 <?php if($errors->has('total_contribution')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('total_contribution'); ?></strong>
                    </span>
                  <?php endif; ?>
              </div>
              <!-- /.end group -->
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i><?php echo __('Add Sosco Insurance'); ?> </button>
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
             required: '<?php echo __("Please enter Wage List"); ?>',
         },
         from_amount: {
             required: '<?php echo __("Please enter From Amount"); ?>',
         },
         to_amount: {
             required: '<?php echo __("Please enter To Amount"); ?>',
         },
         employee_contribution: {
             required: '<?php echo __("Please enter Employee Contribution"); ?>',
         },
         employer_contribution: {
             required: '<?php echo __("Please enter  Employer Contribution"); ?>',
         },
         total_contribution: {
             required: '<?php echo __("Please enter  Total Contribution"); ?>',
         },
     },
 });
});


</script>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', __('Manage Deduction')); ?>

<?php $__env->startSection('main_content'); ?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo __('Deduction'); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
      <li><a><?php echo __('Deduction'); ?></a></li>
      <li class="active"><?php echo __('Manage Deduction'); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo __('Manage Deduction'); ?></h3>

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


          <form class="form-horizontal" action="<?php echo route('other_deduction.save'); ?>" method="post">
            <?php echo csrf_field(); ?>


            <div class="form-group<?php echo $errors->has('name') ? ' has-error' : ''; ?>">
              <label for="name" class="col-sm-3 control-label"><?php echo __('Deduction name'); ?><span style="color:red"> *</span></label>
              <div class="col-sm-6">
               <input type="text" name="name" class="form-control" placeholder="<?php echo __('Additon name'); ?>">
               <?php if($errors->has('name')): ?>
                  <span class="help-block">
                    <strong><?php echo $errors->first('name'); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>

            <div class="form-group<?php echo $errors->has('cat_id') ? ' has-error' : ''; ?>">
              <label for="cat_id" class="col-sm-3 control-label"><?php echo __('category'); ?> <span style="color:red"> *</span></label>
              <div class="col-sm-6">
                <select name="cat_id" id="cat_id" class="form-control">
                  <option value="0" disabled selected="true"><?php echo __('Select One'); ?></option>
                  <?php $__currentLoopData = $data['cat_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo $values->id; ?>"><strong><?php echo $values->cat_name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  <?php if($errors->has('cat_id')): ?>
                  <span class="help-block">
                    <strong><?php echo $errors->first('cat_id'); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>
              <!-- /.end group -->
              <div class="form-group<?php echo $errors->has('assigned_to') ? ' has-error' : ''; ?>">
              <label for="assigned_to" class="col-sm-3 control-label"><?php echo __('Assingee'); ?> <span style="color:red"> *</span></label>
              <div class="col-sm-6">
                    <input type="radio"  name="assigned_to" value="1">All Employees
                    <input type="radio" name="assigned_to" value="2">individual
                    <?php if($errors->has('assigned_to')): ?>
                    <span class="help-block">
                        <strong><?php echo $errors->first('assigned_to'); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
              </div>
              <!-- /.end group -->
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i><?php echo __('Add Addition'); ?> </button>
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
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
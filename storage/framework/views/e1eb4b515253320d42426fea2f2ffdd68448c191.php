<?php $__env->startSection('title', __('Manage Expence Category')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          <?php echo __('Manage Expense Category'); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i><?php echo __('Dashboard'); ?> </a></li>
            <li><a><?php echo __('HRM'); ?></a></li>
            <li class="active"><?php echo __('Manage Expense Category'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Category'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                
                
                <div class="col-md-3">
                    <a href="<?php echo url('/hrm/expence/category/add'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> <?php echo __('add new expense category'); ?></a>
                </div>
                <div class="col-md-3">
                    <button type="button" class="tip btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"> <?php echo __('Print'); ?></span>
                </button>
                </div>
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo __('Search..'); ?>">
                </div>

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
                <div id="printable_area" class="col-md-12">
              


                <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><?php echo __('SL'); ?></th>
                            <th><?php echo __('ID NO'); ?></th>
                            <th><?php echo __('Created By'); ?></th>
                            <th><?php echo __('Expense Purpose'); ?></th>
                            <th><?php echo __('Change'); ?></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php ($sl = 1); ?>
                        <?php $__currentLoopData = $expcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $sl ++; ?></td>
                            <td>EXP<?php echo $expense->id; ?></td>
                            <td><?php echo Auth::user()->name; ?></td>
                            <td><?php echo $expense->exp_name; ?></td>
                            <td><a href="<?php echo url('/hrm/expence/category/edit/'.$expense->id); ?>" class="btn btn-success"><?php echo __('Edit'); ?></a></td>
                           

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div><!--printable-->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
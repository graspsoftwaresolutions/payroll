<?php $__env->startSection('title', __('Manage EPF')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          <?php echo __(' Manage EPF'); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a><?php echo __('EPF '); ?></a></li>
            <li class="active"><?php echo __('Manage EPF'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Manage EPF '); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-3">
                <a href="<?php echo route('master.epf_add'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> <?php echo __('add new EPF'); ?></a>
            </div>
                <div  class="col-md-3">
                <button type="button" class="tip btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"> <?php echo __('Print'); ?></span>
                </button>
            </div>
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo __('Search..'); ?>">
                </div>
                    <br> <br> <br> <br>
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
                <div id="printable_area" class="col-md-12 table-responsive">
                <table  class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th><?php echo __('SL'); ?></th>
                                <th><?php echo __('Wage Limit '); ?></th>
                                <th><?php echo __('From Amount'); ?></th>
                                <th><?php echo __('To Amount'); ?></th>
                                <th><?php echo __('Employee Contribution'); ?></th>
                                <th><?php echo __('Employer Contribution'); ?></th>
                                <th><?php echo __('Total Contribution'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                    <tbody id="myTable">
                    <?php ($sl = 1); ?>
                        <?php $__currentLoopData = $data['epf_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo $sl ++; ?></td>
                            <td><?php echo $values->wage_limit; ?></td>
                            <td><?php echo $values->from_amount; ?></td>
                            <td><?php echo $values->to_amount; ?></td>
                            <td><?php echo $values->employee_contribution; ?></td>
                            <td><?php echo $values->employer_contribution; ?></td>
                            <td><?php echo $values->total_contribution; ?></td>
                            <td class="text-center">
                                    <a style="font-size:19px" class="btn btn-sm red waves-effect waves-circle waves-light" href="<?php echo route('master.EpfEdit',Crypt::encrypt($values->id)); ?>"><i class="icon fa fa-edit"></i></a>
                                  
                                       
                            </td>
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
<script>
  function ConfirmDeletion() {
        if (confirm("<?php echo __('Are you sure you want to delete?'); ?>")) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
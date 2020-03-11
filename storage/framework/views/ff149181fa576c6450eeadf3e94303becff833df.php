<?php $__env->startSection('title', __('Deduction List')); ?>

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
            <li class="active"><?php echo __('Deduction List'); ?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Deduction List'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-6">
                    <a href="<?php echo route('deduction_new'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i> <?php echo __('Add Deduction'); ?></a>
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
                <div class="col-md-12 table-responsive">
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL#'); ?></th>
                                <th><?php echo __('Name'); ?></th>
                                <th><?php echo __('Category Name'); ?></th>
                                <th><?php echo __('Assigned To'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php ($sl = 1); ?>
                                <?php $__currentLoopData = $data['deduction_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $sl ++; ?></td>
                                    <td><?php echo $values->name; ?></td>
                                    <td><?php echo $values->cat_name; ?></td>
                                    <?php if($values->assigned_to == 1 ): ?>
                                    <td>All Employees</td>
                                    <?php else: ?>
                                    <td>Individual</td>
                                    <?php endif; ?>
                                    <td class="text-center">
                                            <a href="<?php echo route('master.deductionEdit',Crypt::encrypt($values->additionid)); ?>"><i class="icon fa fa-edit"></i> <?php echo __('Edit'); ?></a>&nbsp;&nbsp;
                                            
                                            <a style="color:red" onclick='return ConfirmDeletion()' href="<?php echo route('payroll.deductionDelete',Crypt::encrypt($values->additionid)); ?>"><i class="icon fa fa-trash"></i> <?php echo __('Delete'); ?></a>
                                           
                                            <a>
                                           
                                        </a>
                                        </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<script>
 function ConfirmDeletion() {
        if (confirm("<?php echo __('Are you sure you want to delete?'); ?>")) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
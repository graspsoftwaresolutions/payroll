<?php $__env->startSection('title', __('Salary Payment Details')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo __('PAYROLL'); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
      <li><a><?php echo __('Salary'); ?></a></li>
      <li class="active"><?php echo __('Salary Payment Details'); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Employee Details'); ?></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <a href="<?php echo url('/hrm/salary-payments'); ?>" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> <?php echo __('Back'); ?></a>

            <button type="button" class="btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')"><i class="fa fa-print"></i><span class="hidden-sm hidden-xs"> <?php echo __('Print'); ?> </span></button>
           
            <hr>
            <div id="printable_area" class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <td>
                    <p>
                      <?php echo $user['employee_id']; ?>

                      <br>
                      <?php echo $user['name']; ?>

                      <br>
                      (<?php echo $user['designation']; ?>)
                      <br>
                      <?php echo __('Department of'); ?> <?php echo $user['department']; ?>

                      <br>
                     <?php echo __('Joining Date:'); ?>  <?php echo date("d F Y", strtotime($user['created_at'])); ?>

                    </p>
                  </td>
                  <td>
                    <?php if(!empty($user['avatar'])): ?>
                    <img src="<?php echo url('public/profile_picture/' . $user['avatar']); ?>" class="img-responsive img-thumbnail">
                    <?php else: ?>
                    <img src="<?php echo url('public/profile_picture/blank_profile_picture.png'); ?>" alt="blank_profile_picture" class="img-responsive img-thumbnail">
                    <?php endif; ?>
                  </td>
                </tr>
              </table>
              <hr>

              <table class="table table-bordered">
                <tr class="bg-info">
                  <th><?php echo __('sl#'); ?></th>
                  <th><?php echo __('Description'); ?></th>
                  <th><?php echo __('Debits'); ?></th>
                  <th><?php echo __('Credits'); ?></th>
                </tr>
                <?php ($sl = 1); ?>
                <?php $__currentLoopData = $salary_payment_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo $sl++; ?></td>
                  <td><?php echo $data->item_name; ?></td>
                  <td>
                    <?php if($data->status == 'debits'): ?>
                    -<?php echo $data->amount; ?>

                    <?php endif; ?>
                  </td>
                  <td>
                    <?php if($data->status == 'credits'): ?>
                    <?php echo $data->amount; ?>

                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td> &nbsp; </td>
                </tr>
                <tr class="success">
                  <td colspan="3"><strong class="pull-right"><?php echo __('Gross Salary:'); ?></strong></td>
                  <td>
                    <strong>
                      <?php echo number_format($salary_payment->gross_salary, 2, '.', ''); ?>

                    </strong>
                  </td>
                </tr>
                <tr class="success">
                  <td colspan="3"><strong class="pull-right"><?php echo __('Total Deduction:'); ?></strong></td>
                  <td><strong><?php echo number_format($salary_payment->total_deduction, 2, '.', ''); ?></strong></td>
                </tr>
                <tr class="success">
                  <td colspan="3"><strong class="pull-right"><?php echo __('Net Salary:'); ?></strong></td>
                  <td><strong><?php echo number_format($salary_payment->net_salary, 2, '.', ''); ?></strong></td>
                </tr>
                <tr class="success">
                  <td colspan="3"><strong class="pull-right"><?php echo __('Provident Fund:'); ?></strong></td>
                  <td><strong><?php echo number_format($salary_payment->provident_fund, 2, '.', ''); ?></strong></td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.end.col -->

      <div class="col-md-12">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title"><strong><?php echo __('Payment History'); ?></strong></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
             <tr class="bg-info">
              <th><?php echo __('sl#'); ?></th>
              <th><?php echo __('Salary Month'); ?></th>
              <th><?php echo __('Gross Salary'); ?></th>
              <th><?php echo __('Total Deduction'); ?></th>
              <th><?php echo __('Net Salary'); ?></th>
              <th><?php echo __('Provident Fund'); ?></th>
              <th><?php echo __('Payment Amount'); ?></th>
              <th><?php echo __('Payment Type'); ?></th>
              <th><?php echo __('Note'); ?></th>
            </tr>
            <?php ($sl = 1); ?>
            <?php $__currentLoopData = $employee_salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo $sl++; ?></td>
              <td><?php echo date("F Y", strtotime($employee_salary['payment_month'])); ?></td>
              <td><?php echo $employee_salary['gross_salary']; ?></td>
              <td><?php echo $employee_salary['total_deduction']; ?></td>
              <td><?php echo $employee_salary['net_salary']; ?></td>
              <td><?php echo $employee_salary['provident_fund']; ?></td>
              <td><?php echo $employee_salary['payment_amount']; ?></td>
              <td>
                <?php if($employee_salary['payment_type'] == 1): ?>
               <?php echo __(' Cash Payment'); ?>

                <?php elseif($employee_salary['payment_type'] == 2): ?>
               <?php echo __('Chaque Payment'); ?> 
                <?php else: ?>
               <?php echo __(' Bank Payment'); ?>

                <?php endif; ?>
              </td>
              <td><?php echo $employee_salary['note']; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.end.col -->
  </div>
  <!-- /.end.row -->
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', __('Manage Salary')); ?>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo __('PAYROLL'); ?> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i><?php echo __('Dashboard'); ?> </a></li>
      <li><a><?php echo __('Payroll'); ?></a></li>
      <li class="active"><?php echo __('Manage Additional Salary'); ?></li>
    </ol>
  </section>
  <!-- Main content -->`
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Manage Additional Salary'); ?></h3>

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
              <form class="form-horizontal" id="EmployeeForm"  name="employee_select_form" action="<?php echo route('add_additionalsalary_save'); ?>" method="post">
                <?php echo csrf_field(); ?>

				
				
				<!--<div class="col-sm-offset-3 col-sm-6">
				   <div class="form-group">
					<div class="input-group margin">
					  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
					  <input type="text" name="dateofsalary" readonly class="form-control" id="monthpicker">
					 
					</div>
				  </div>
				</div>-->
				<div class="clearfix"></div>
                <div class="form-group<?php echo $errors->has('user_id') ? ' has-error' : ''; ?>">
                  <label for="user_id" class="col-sm-3 control-label"><?php echo __('Employee Name'); ?></label>
                  <div class="col-sm-6">
                  <input type="hidden" name="user_id" id="user_id">
                  <input class="form-control clearable" type="text" id="employee_name" placeholder="Search Customer" name="employee_name">
                         <?php if($errors->has('name')): ?>
                            <span class="help-block">
                                <strong><?php echo $errors->first('name'); ?></strong>
                            </span>
                        <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo $errors->has('basic_salary') ? ' has-error' : ''; ?>">
                  <label for="basic_salary" class="col-sm-3 control-label"><?php echo __('Basic Basic'); ?></label>
                  <div class="col-sm-6">
                  <input type="text"  id="basic_salary" name="basic_salary" class="form-control" placeholder="<?php echo __('Basic Basic'); ?>">
                         <?php if($errors->has('basic_salary')): ?>
                            <span class="help-block">
                                <strong><?php echo $errors->first('basic_salary'); ?></strong>
                            </span>
                        <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo $errors->has('gross_salary') ? ' has-error' : ''; ?>">
                  <label for="gross_salary" class="col-sm-3 control-label"><?php echo __('OT'); ?></label>
                    <div class="col-sm-6">
                    <input type="text"  id="ot" name="ot" class="form-control" placeholder="<?php echo __('OT'); ?>">
					<input type="text"  id="net_salary" name="net_salary" class="form-control hide" placeholder="">
                    </div>
                </div>
                <div class="form-group<?php echo $errors->has('basic_salary') ? ' has-error' : ''; ?>">
                    <label for="basic_salary" class="col-sm-3 control-label"><?php echo __('Additional Allowances'); ?></label>
                    <div class="col-sm-6"> 
                    <a class="btn"  class="btn theme modal-trigger" data-toggle="modal" data-target="#myModal" title="Add" style="margin-top: 0px; background-color: #4a7885;color: white;">Add Allowances</a>
                      <table id="ExclusionTable" class="table-centered table-hover paper update-table somting">
							<thead>
							  <tr>
								  <th>Name</th>
								  <th>Price</th>
								  <th>Action</th>
							  </tr>
							</thead>
							<tbody id="exampleTable">
							   
							</tbody>
						</table>
                                <br>   
                  </div>
                  </div>
                  <div class="form-group<?php echo $errors->has('basic_salary') ? ' has-error' : ''; ?>">
                  <label for="basic_salary" class="col-sm-3 control-label"><?php echo __('Total Additional Allowances'); ?></label>
                  <div class="col-sm-6">
                  <input type="text" readonly  id="addition_total" id="addition_total" name="addition_total" class="form-control" placeholder="<?php echo __('Additional Total Allowances'); ?>">
                        
                  </div>
                </div>
                  
                 
               
                  <div class="form-group<?php echo $errors->has('gross_salary') ? ' has-error' : ''; ?>">
                  <label for="gross_salary" class="col-sm-3 control-label"><?php echo __('Gross Salary'); ?></label>
                    <div class="col-sm-6">
                    <input type="text" readonly  id="gross_salary" name="gross_salary" class="form-control" placeholder="<?php echo __('Gross Basic'); ?>">
                    </div>
                </div>
                 <div id="epf_ee_section" class=" form-group <?php echo $errors->has('epf_ee_id') ? ' has-error' : ''; ?>">
					<label for="epf_ee_id" class="col-sm-3 control-label"><?php echo __('EPF-EE'); ?>

						<input id="epf_ee_check" name="epf_ee_check" onClick="return EnableEpfBox()" type="checkbox" value="1" />
					</label>
					
					
                    <div id="epf_ee" class="col-sm-6 hide">
						<input type="text"  name="epf_ee_id" class="form-control  " id="epf_ee_id">
                          
                    </div>
                </div>   
				<div id="ee_sosco_section" class=" form-group <?php echo $errors->has('ee_sosco') ? ' has-error' : ''; ?>">
                  <label for="ee_sosco" class="col-sm-3 control-label"><?php echo __('EE-SOSCO'); ?>

					<input id="epf_sosco_check" name="epf_sosco_check" onClick="return EnablesoscoBox()" type="checkbox" value="1"/>
				  </label>
                    <div id="ee_soscos" class="col-sm-6 hide">
                       <input type="text" name="ee_sosco" class="form-control  "  id="ee_sosco">
                          
                    </div>
                </div>   
                <div id="eis_sip_section" class=" form-group<?php echo $errors->has('ee_sosco') ? ' has-error' : ''; ?>">
                  <label for="eis_sip" class="col-sm-3 control-label"><?php echo __('EIS-SIP'); ?>

					<input id="epf_sip_check" name="epf_sip_check" onClick="return EnablesipBox()" type="checkbox" value="1"/>
				  </label>
                    <div id="eis_sips" class="col-sm-6 hide">
                       <input type="text" name="eis_sip" class="form-control "   id="eis_sip">
                          
                    </div>
                </div>  
                <div class="form-group<?php echo $errors->has('basic_salary') ? ' has-error' : ''; ?>">
                      <label for="basic_salary" class="col-sm-3 control-label"><?php echo __(' Add Deductions'); ?></label>
                      <div class="col-sm-6"> 
                          <a class="btn"  class="btn theme modal-trigger" data-toggle="modal" data-target="#mydeductionModal" title="Add" style="margin-top: 0px; background-color: #4a7885;color: white;">Add Deductions</a>
                          <table id="DeductionsExclusionTable" class="table-centered table-hover paper update-table deduction">
                                      <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody id="exampleTable">
                                        
                                      </tbody>
                                  </table>
                                  <br>   <br>   <br>
                  </div>
                  </div>

                  <div class="form-group<?php echo $errors->has('deductions_total') ? ' has-error' : ''; ?>">
                  <label for="deductions_total" class="col-sm-3 control-label"><?php echo __('Total Deductions Allowances'); ?></label>
                  <div class="col-sm-6">
                  <input type="text" style="poniter-events:none;"  readonly id="deductions_total" name="deductions_total" class="form-control total_deductioncalc" placeholder="<?php echo __('Deductions Total Allowances'); ?>">
                        
                  </div>
                </div>
                <div class="form-group<?php echo $errors->has('basic_salary') ? ' has-error' : ''; ?>">
                      <label for="basic_salary" class="col-sm-3 control-label"><?php echo __(' Other Deductions'); ?></label>
                      <div class="col-sm-6"> 
                          <a class="btn"  class="btn theme modal-trigger" data-toggle="modal" data-target="#myotherdeductionModal" title="Add" style="margin-top: 0px; background-color: #4a7885;color: white;">Add Other Deductions</a>
                          <table id="OtherDeductionsExclusionTable" class="table-centered table-hover paper update-table otherdeductions">
                                      <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody id="exampleTable">
                                        
                                      </tbody>
                                  </table>
                                  <br>   
                  </div>
                  </div>
                  <div class="form-group<?php echo $errors->has('otherdeductions_total') ? ' has-error' : ''; ?>">
                  <label for="otherdeductions_total" class="col-sm-3 control-label"><?php echo __('Total Other Deduction Allowances'); ?></label>
                  <div class="col-sm-6">
                  <input type="text" readonly  id="otherdeductions_total" name="otherdeductions_total" class="form-control" placeholder="<?php echo __('Other deductions Total Allowances'); ?>">
                        
                  </div>
                </div>
                  <div class="form-group<?php echo $errors->has('ee_sosco') ? ' has-error' : ''; ?>">
                    <label for="total_deductions" class="col-sm-3 control-label"><?php echo __('Total Deductions'); ?></label>
                      <div class="col-sm-6">
                      <input readonly type="text" name="total_deductions" class="form-control"  placeholder="Total Deductions" id="total_deductions">
                      </div>
                  </div>
                  <div class="form-group<?php echo $errors->has('net_pay') ? ' has-error' : ''; ?>">
                    <label for="net_pay" class="col-sm-3 control-label"><?php echo __('Net Pay'); ?></label>
                      <div class="col-sm-6">
                      <input type="text" name="net_pay" class="form-control" readonly  placeholder="Net Pay" id="net_pay">
                      </div>
                  </div>
				  
				   <div class="form-group<?php echo $errors->has('EPF_ER') ? ' has-error' : ''; ?>">
						<label for="EPF_ERper" class="col-sm-3 control-label"><?php echo __('EPF-ER %'); ?></label>
						<div id="EPF_ERidper" class="col-sm-6 hide">
							<select name="EPF_ERper" onchange="return CalculateEPAmount(this.value)" id="EPF_ERper" class="form-control">
								<option value="13" selected>13</option>
								<option value="17">17</option>
							</select>
						  
						</div>
                    </div>

                  <div class="form-group<?php echo $errors->has('EPF_ER') ? ' has-error' : ''; ?>">
                    <label for="EPF_ER" class="col-sm-3 control-label"><?php echo __('EPF-ER'); ?></label>
                      <div id="EPF_ERid" class="col-sm-6 hide">
                      <input type="text" name="EPF_ER" class="form-control"  placeholder="EPF_ER" id="EPF_ER">
                      <input type="text" name="EPF_ERref" class="form-control hide"  placeholder="EPF_ER" id="EPF_ERref">
                      </div>
                  </div>

                  <div class="form-group<?php echo $errors->has('EPF_ER') ? ' has-error' : ''; ?>">
                    <label for="SOSCO_ER" class="col-sm-3 control-label"><?php echo __('SOSCO-ER'); ?></label>
                      <div id="SOSCO_ERid" class="col-sm-6 hide">
                      <input type="text" name="SOSCO_ER" class="form-control"  placeholder="SOSCO_ER" id="SOSCO_ER">
                      </div>
                  </div>

                  <div class="form-group<?php echo $errors->has('SOSCO') ? ' has-error' : ''; ?>">
                    <label for="SOSCO_ER" class="col-sm-3 control-label"><?php echo __('SOSCO-[EIS/SIP - ER]'); ?></label>
                      <div id="SOSCO_EISid" class="col-sm-6 hide">
                      <input type="text" name="SOSCO_EISSIP" class="form-control"  placeholder="SOSCO-[EIS/SIP - ER]" id="SOSCO_EISSIP_ER">
                      </div>
                  </div>

                  <div class=" col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info btn-flat"><i class="icon fa fa-arrow-right"></i> <?php echo __('Go'); ?></button>
                  </div>
              </form>
            </div>
            <!-- /. end col -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix"></div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <div class="row">
				<div class="col-sm-5">
					<div class="form-group">
					
					  <label for="room_type" class="block fixed-label"><?php echo __('Select Allowances'); ?></label>                 
					  <select id="allowances" name="allowances[]" class="form-control select-validate" data-live-search="true" data-width="100%">

						  <option selected="true" disabled value="0">Select Allowances</option>
							<?php $__currentLoopData = $data['addition_allownces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							  <option value="<?php echo $additon->additionid; ?>"><?php echo $additon->name; ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </select>  
					</div> 
                </div>   
                <div class="col-sm-5">  
                   <div class="form-group">
                          <label for="address_one" class="fixed-label"><?php echo __('Price'); ?></label>   
                          <input placeholder="Price" class="clearable form-control" id="price" type="text">     
                   </div>
                </div>    
            </div><!-- /.row -->
          </div>
          <div class="modal-footer">
            <button class="btn-flat waves-effect waves-theme" data-dismiss="modal">Close</button>
            <button type="button" id="price_add" class="btn-flat waves-effect waves-theme">Save</button>
          </div>
        </div>

      </div>
    </div>

    

    <!-- Modal -->
    <div id="mydeductionModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Deductions</h4>
          </div>
          <div class="modal-body">
              <div class="row">
			  
				<div class="col-sm-5">
					<div class="form-group">
					
                      <label for="room_type" class="block fixed-label"><?php echo __('Select Allowances'); ?></label>                 
                      <select id="deductions_allowances" name="deductions_allowances[]" class="form-control select-validate" data-live-search="true" data-width="100%">

                          <option selected="true" disabled value="0">Select Allowances</option>
                            <?php $__currentLoopData = $data['deduction_allownces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deductions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo $deductions->additionid; ?>"><?php echo $deductions->name; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>  
					</div> 
                </div>   
                <div class="col-sm-5">  
                   <div class="form-group">
                              <label for="address_one" class="fixed-label"><?php echo __('Price'); ?></label>   
                              <input placeholder="Price" class="clearable  form-control" id="deduction_price" type="text">     
                   </div>
                </div>    
              </div><!-- /.row -->
          </div>
          <div class="modal-footer">
            <button class="btn-flat waves-effect waves-theme" data-dismiss="modal">Close</button>
            <button type="button" id="deduction_price_add" class="btn-flat waves-effect waves-theme">Save</button>
          </div>
        </div>

      </div>
    </div>

     <!-- Modal -->
     <div id="myotherdeductionModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Other Deductions</h4>
          </div>
          <div class="modal-body">
              <div class="row">
				 <div class="col-sm-5">  
					<div class="form-group">
               
                      <label for="room_type" class="block fixed-label"><?php echo __('Select Allowances'); ?></label>                 
                      <select id="other_deductions_allowances" name="other_deductions_allowances[]" class="form-control select-validate" data-live-search="true" data-width="100%">
                          <option selected="true" disabled value="0">Select Allowances</option>
                        
                            <?php $__currentLoopData = $data['other_allownces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherdeductions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo $otherdeductions->additionid; ?>"><?php echo $otherdeductions->name; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>  
					</div> 
                </div>   
                <div class="col-sm-5">  
                   <div class="form-group">
                              <label for="address_one" class="fixed-label"><?php echo __('Price'); ?></label>   
                              <input placeholder="Price" class="clearable form-control" id="other_deduction_price" type="text">     
                   </div>
                </div>    
              </div><!-- /.row -->
          </div>
          <div class="modal-footer">
            <button class="btn-flat waves-effect waves-theme" data-dismiss="modal">Close</button>
            <button type="button" id="other_deduction_price_add" class="btn-flat waves-effect waves-theme">Save</button>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<script src ="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script src ="<?php echo asset('public/assets/js/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
    // $('.total_deductioncalc').change(function(){
    //     var total = 0;
    //     $('.total_deductioncalc').each(function(){
    //         if($(this).val() != '')
    //         {
    //             total += parseInt($(this).val());
    //         }
    //     });
    //     alert(total);
    //     $('#total_deductions').html(total);
    // });

});


  $('#employee_name').autocomplete({
    // minChars: 1,
		source: function(request, response) {
			$.ajaxSetup({
			 headers: {
			 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 }
		  });
		  $.ajax({
			type: 'POST',
			dataType: 'json',
			url: "<?php echo route('staff_autocomplete'); ?>",
			data: 'action=staff_name'+'&name='+request.term,
			success: function(data) {
			 //console.log(data.length);
			 if (data.length === 0) {
				  // alert('hii');
				//   $('.customer_details').hide();
				//   $('.customer_add').show();
					var res_msg = "No Results found, please add Customer";
				   alert(res_msg);
				  
				}
			  response( $.map( data, function( item ) {
					  var object = new Object();
					  object.label = item.value;
					  object.value = item.name;
					  object.user_id = item.user_id;
					  object.basic_salary = item.basic_salary;
					  object.EPF_EE = item.EPF_EE;
					  object.EE_SOSCO = item.EE_SOSCO;
					  object.EIS_SIP = item.EIS_SIP;
					  return object         
			  }));
			}
		  });
		},
		select: function (event, ui) {
			 $("#employee_name").val(ui.item.value);
			 $("#user_id").val(ui.item.user_id);
			 //$('#epf_ee_id').val(ui.item.EPF_EE);
			 
			 $("#basic_salary").val(ui.item.basic_salary);
			 gross_calc();
		  },
	   });

	

	$('#price_add').click(function(){

		var allowances_id  =  $("#allowances").val(); 
		var allowances_name =$('#allowances option:selected').html();
		var price = $('#price').val();

		var slno=0;

		if((allowances_id != '') &&  (price != '') )
		{
			var flag = 0;
			$("#ExclusionTable").find("tr").each(function () { //iterate through rows
			  var td1 = $(this).find("td:eq(0)").text(); //get value of first td in row
			  var td2 = $(this).find("td:eq(1)").text(); //get value of second td in row
			  if ((allowances_name == td1 &&  price != '')) { //compare if test = td1 AND sample = td2
				  flag = 1; //raise flag if yes
			  }
			});
			if (flag == 1) {
			  alert('Already Exists');
			} else {
			  $('#ExclusionTable tbody').append('<tr class="child" ><td>'+allowances_name+'<input type="hidden" id="allowances_name'+slno+'" name="allowances_name[]" value="'+allowances_id+'"></td><td>'+price+'<input type="hidden" class="addition_price" id="price_'+slno+'" name="price[]" value="'+price+'"></td><td><button type="button" class="btn btn-sm red waves-effect waves-circle waves-light removebutton" title="delete">Delete<i class="mdi mdi-delete"></i></td></tr>');
			 // var total_price = $('#price_'+slno).val();
			 // alert(total_price);
				
			  slno++;
			}
			$('#ExclusionTable tbody').append();

			$('#myModal').modal('toggle');
		}
		else{
			alert("Please select allownces and Enter price!");
		}
		$('#price').val('');
		var emptyStr = '';
		CalculateAdditions();
		/* var sum=0;
		$('.somting td:nth-child(2)').each(function(){
			sum += parseInt($(this).text());
		})
		$('#addition_total').val(sum); */
	});

	$('#deduction_price_add').click(function(){
		var deduction_allowances_id  =  $("#deductions_allowances").val(); 
		var deduction_allowances_name =$('#deductions_allowances option:selected').html();
		var deduction_price = $('#deduction_price').val();

		var slno=0;

		if((deduction_allowances_id != '') &&  (deduction_price != '') )
		{
			var flag = 0;
			$("#DeductionsExclusionTable").find("tr").each(function () { //iterate through rows
			  var td1 = $(this).find("td:eq(0)").text(); //get value of first td in row
			  var td2 = $(this).find("td:eq(1)").text(); //get value of second td in row
			  if ((deduction_allowances_name == td1 &&  deduction_price != '')) { //compare if test = td1 AND sample = td2
				  flag = 1; //raise flag if yes
			  }
			});
			if (flag == 1) {
			  alert('Already Exists');
			} else {
			  $('#DeductionsExclusionTable tbody').append('<tr class="child" ><td>'+deduction_allowances_name+'<input type="hidden" id="deduction_allowances_name_'+slno+'" name="deduction_allowances_name[]" value="'+deduction_allowances_id+'"></td><td>'+deduction_price+'<input type="hidden" id="deduction_price_'+slno+'" class="deduction_price" name="deduction_price[]" value="'+deduction_price+'"></td><td><button type="button" class="btn btn-sm red waves-effect waves-circle waves-light removebuttondeductions" title="delete">Delete<i class="mdi mdi-delete"></i></td></tr>');
			  var deduction_price = $('#deduction_price_'+slno).val();
			  
			 // alert(total_price);
			  slno++;
			}
			$('#mydeductionModal').modal('toggle');
		}
		else{
		  alert("Please select room type and Enter price!");
		}
		$('#deduction_price').val('');
		var emptyStr = '';

		CalculateDeductions();
		/* var deduction_sum=0;
		$('.deduction td:nth-child(2)').each(function(){
			deduction_sum += parseInt($(this).text());
		})
		$('#deductions_total').val(deduction_sum); */
	});


$('#other_deduction_price_add').click(function(){
	var other_deduction_allowances_id  =  $("#other_deductions_allowances").val(); 
	var other_deduction_allowances_name =$('#other_deductions_allowances option:selected').html();
	var other_deduction_price = $('#other_deduction_price').val();

	var slno=0;

	if((other_deduction_allowances_id != '') &&  (other_deduction_price != '') )
	{
		var flag = 0;
		$("#OtherDeductionsExclusionTable").find("tr").each(function () { //iterate through rows
		  var td1 = $(this).find("td:eq(0)").text(); //get value of first td in row
		  var td2 = $(this).find("td:eq(1)").text(); //get value of second td in row
		  if ((other_deduction_allowances_name == td1 &&  deduction_price != '')) { //compare if test = td1 AND sample = td2
			  flag = 1; //raise flag if yes
		  }
		});
		if (flag == 1) {
		  alert('Already Exists');
		} else {
		  $('#OtherDeductionsExclusionTable tbody').append('<tr class="child" ><td>'+other_deduction_allowances_name+'<input type="hidden" id="other_deduction_allowances_name_'+slno+'" name="other_deduction_allowances_name[]" value="'+other_deduction_allowances_id+'"></td><td>'+other_deduction_price+'<input type="hidden" class="other_deduction_price" id="other_deduction_price_'+slno+'" name="other_deduction_price[]" value="'+other_deduction_price+'"></td><td><button type="button" class="btn btn-sm red waves-effect waves-circle waves-light removebuttonothers" title="delete">Delete<i class="mdi mdi-delete"></i></td></tr>');
		  var deduction_price = $('#deduction_price_'+slno).val();
		  
		 // alert(total_price);
		  slno++;
		}
		$('#myotherdeductionModal').modal('toggle');
	}
	else{
	  alert("Please select room type and Enter price!");
	}
	$('#deduction_price').val('');
	var emptyStr = '';

	var otherdeduction_sum=0;
	CalculateOtherDeductions();
	/* $('.otherdeductions td:nth-child(2)').each(function(){
		otherdeduction_sum += parseInt($(this).text());
	})
	$('#otherdeductions_total').val(otherdeduction_sum); */
});

// $('.addition_price').each(function() {
//               calculateSum();
//           });

$("#addition_total").keyup(gross_calc);

$("#basic_salary,#ot").keyup(function(){
  gross_calc();
  $("#epf_ee_check,#epf_sosco_check,#epf_sip_check").prop('checked',false);
  EnablesipBox();
  EnablesoscoBox();
  EnableEpfBox();
});
/* $("#basic_salary").keyup(gross_calc);
$("#ot").keyup(gross_calc); */

function gross_calc() {
	var basic_salary = $('#basic_salary').val();
	var addition_total = $('#addition_total').val();
	var ot = $('#ot').val();
	basic_salary = basic_salary=='' ? 0: basic_salary;
	addition_total = addition_total=='' ? 0: addition_total;
	ot = ot=='' ? 0: ot;
	$('#net_salary').val(parseFloat(basic_salary) +  parseFloat(ot));
	
	$('#gross_salary').val(parseFloat(basic_salary) + parseFloat(addition_total) +  parseFloat(ot) );
	
	CalculateDeductions();
 }


  $('#epf_ee_id').keyup(CalculateDeductions);
  $('#ee_sosco').keyup(CalculateDeductions);
  $('#eis_sip').keyup(CalculateDeductions);
  //$("#deductions_total").keyup(CalculateDeductions);
  //$('#otherdeductions_total').keyup(other_deductions_cal);


/* function other_deductions_cal() {
    var epf_eee  = $('#epf_ee_id').val();
    var ee_soscoe = $('#ee_sosco').val();
    var eis_sipe = $('#eis_sip').val();
    
    
    //$("#deductions_total").trigger('keyup');
   var deductions_totall = $('#deductions_total').val()=='' ? 0 : $("#deductions_total").val();
    
    //$("#otherdeductions_total").trigger('keyup');
   var otherdeductions_totall = $('#otherdeductions_total').val()=='' ? 0 : $("#otherdeductions_total").val();
    
    $('#total_deductions').val('');
    if((epf_eee!='') && (epf_eee!=NaN) && (ee_soscoe!='') && (ee_soscoe!=NaN) && (eis_sipe!='') && (eis_sipe!=NaN) ) 
    {
        $('#total_deductions').val(parseFloat(epf_eee) + parseFloat(ee_soscoe) +  parseFloat(eis_sipe)  +  parseFloat(deductions_totall) +  parseFloat(otherdeductions_totall) );
    }
    var tota_deduc = $('#total_deductions').val();
    var gross = $('#gross_salary').val();
    $('#net_pay').val(parseFloat(tota_deduc) + parseFloat(gross));
  } */
$(document).on('click', 'button.removebutton', function () {
    if (confirm("<?php echo __('Are you sure you want to delete?'); ?>")) {     
	  $(this).closest('tr').remove();
	  CalculateAdditions();
	  return true;
	} else {
	  return false;
	}
   });
   $(document).on('click', 'button.removebuttondeductions', function () {
    if (confirm("<?php echo __('Are you sure you want to delete?'); ?>")) {     
	  $(this).closest('tr').remove();
	  CalculateDeductions();
	  return true;
	} else {
	  return false;
	}
   });
   $(document).on('click', 'button.removebuttonothers', function () {
    if (confirm("<?php echo __('Are you sure you want to delete?'); ?>")) {     
	  $(this).closest('tr').remove();
	  CalculateOtherDeductions();
	  return true;
	} else {
	  return false;
	}
   });
    function CalculateAdditions(){
		var sum_additional = 0;
		$(".addition_price").each(function() {
			var addition_price = $(this).val();
			addition_price = addition_price=='' ? 0 : addition_price;
			sum_additional = parseFloat(sum_additional)+parseFloat(addition_price);
		});
		$("#addition_total").val(sum_additional);
		var ot = $("#ot").val();
		ot = ot=='' ? 0 : ot;
		var basic_salary = $("#basic_salary").val();
		basic_salary = basic_salary=='' ? 0 : basic_salary;
		tot_allowance = parseFloat(sum_additional)+parseFloat(ot)+parseFloat(basic_salary);
		$("#gross_salary").val(tot_allowance);
		CalculateDeductions();
    }
	function CalculateDeductions(){
		var sum_additional = 0;
		$(".deduction_price").each(function() {
			var addition_price = $(this).val();
			addition_price = addition_price=='' ? 0 : addition_price;
			sum_additional = parseFloat(sum_additional)+parseFloat(addition_price);
		});
		
		
		var epf_eee  = $('#epf_ee_id').val();
		var ee_soscoe = $('#ee_sosco').val();
		var eis_sipe = $('#eis_sip').val();
		
		epf_eee = epf_eee=='' ? 0 : epf_eee;
		ee_soscoe = ee_soscoe=='' ? 0 : ee_soscoe;
		eis_sipe = eis_sipe=='' ? 0 : eis_sipe;
		sum_additional = parseFloat(sum_additional)+parseFloat(epf_eee)+parseFloat(ee_soscoe)+parseFloat(eis_sipe);
		$("#deductions_total").val(sum_additional);
		CalculateOtherDeductions();
		/*var basic_salary = $("#basic_salary").val();
		basic_salary = basic_salary=='' ? 0 : basic_salary;
		tot_allowance = parseFloat(sum_additional)+parseFloat(ot)+parseFloat(basic_salary);
		$("#gross_salary").val(tot_allowance); */
    }
	
	function CalculateOtherDeductions(){
		var sum_additional = 0;
		$(".other_deduction_price").each(function() {
			var addition_price = $(this).val();
			addition_price = addition_price=='' ? 0 : addition_price;
			sum_additional = parseFloat(sum_additional)+parseFloat(addition_price);
		});
		$("#otherdeductions_total").val(sum_additional);
		var deductions_total = $("#deductions_total").val();
		deductions_total = deductions_total=='' ? 0 : deductions_total;
		var total_deductions = parseFloat(sum_additional)+parseFloat(deductions_total);
		$("#total_deductions").val(total_deductions);
		var gross_salary = $("#gross_salary").val();
		gross_salary = gross_salary=='' ? 0 : gross_salary;
		var netpay = parseFloat(gross_salary)-parseFloat(total_deductions);
		$("#net_pay").val(netpay);
	}
	
	function EnableEpfBox(){
		if($("#epf_ee_check").prop("checked") == true){
			$("#epf_ee,#EPF_ERid,#EPF_ERidper").removeClass('hide');
			var net_salary = $("#net_salary").val();
			if(net_salary!=''){
				var url = "<?php echo url('/hrm/get-salary-contribution'); ?>" + '?net_salary=' + net_salary;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
						$("#epf_ee_id").val(0);
						$("#EPF_ER,#EPF_ERref").val(0);
						if(result!=null){
							$("#epf_ee_id").val(result.employee_contribution);
							$("#EPF_ER,#EPF_ERref").val(result.employer_contribution);
						}
					}
				});
			}else{
				$("#epf_ee_id").val(0);
				$("#EPF_ER,#EPF_ERref").val(0);
			}
			
			
		}else{
			$("#epf_ee,#EPF_ERid,#EPF_ERidper").addClass('hide');
			$("#epf_ee_id").val(0);
			$("#EPF_ER,#EPF_ERref").val(0);
		}
	}
	function EnablesoscoBox(){
		if($("#epf_sosco_check").prop("checked") == true){
			$("#ee_soscos,#SOSCO_ERid").removeClass('hide');
			var net_salary = $("#net_salary").val();
			if(net_salary!=''){
				var url = "<?php echo url('/hrm/get-sosco-contribution'); ?>" + '?net_salary=' + net_salary;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
						$("#ee_sosco").val(0);
						$("#SOSCO_ER").val(0);
						if(result!=null){
							$("#ee_sosco").val(result.employee_contribution);
							$("#SOSCO_ER").val(result.employer_contribution);
						}
					}
				});
			}else{
				$("#ee_sosco").val(0);
				$("#SOSCO_ER").val(0);
			}
		}else{
			$("#ee_soscos,#SOSCO_ERid").addClass('hide');
			$("#ee_sosco").val(0);
			$("#SOSCO_ER").val(0);
		}
	}
	function EnablesipBox(){
		if($("#epf_sip_check").prop("checked") == true){
			$("#eis_sips,#SOSCO_EISid").removeClass('hide');
			var net_salary = $("#net_salary").val();
			if(net_salary!=''){
				var url = "<?php echo url('/hrm/get-soscoins-contribution'); ?>" + '?net_salary=' + net_salary;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function(result) {
						$("#eis_sip").val(0);
						$("#SOSCO_EISSIP_ER").val(0);
						if(result!=null){
							$("#eis_sip").val(result.employee_contribution);
							$("#SOSCO_EISSIP_ER").val(result.employer_contribution);
						}
					}
				});
			}else{
				$("#eis_sip").val(0);
				$("#SOSCO_EISSIP_ER").val(0);
			}
		}else{
			$("#eis_sips,#SOSCO_EISid").addClass('hide');
			$("#eis_sip").val(0);
			$("#SOSCO_EISSIP_ER").val(0);
		}
	}
	
	function CalculateEPAmount(pfpercent){
		if(pfpercent==13){
			var EPF_ERref = $("#EPF_ERref").val();
			$("#EPF_ER").val(EPF_ERref);
		}else{
			var EPF_ERref = $("#EPF_ERref").val();
			var net_salary = $("#net_salary").val()=='' ? 0 : $("#net_salary").val();
			var EPF_ER = parseFloat(EPF_ERref)+parseFloat((net_salary*4)/100)+parseFloat(232);
			$("#EPF_ER").val(EPF_ER);
		}
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
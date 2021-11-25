<!doctype html>
<html class="fixed">
<head>
		<?php $this->load->view('common/header_link'); ?>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/modal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/Lobibox.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/notifications.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/catalogs/assets/vendor/custom-scrollbar/jquery.mCustomScrollbar.css">
</head>
<body>
		<section class="body">
			<!-- success message -->
			<div class="success_message">Kot Genrated Successfully</div>
			<!-- success message -->
      <?php $this->load->view("common/titlebar"); ?>

			<div class="inner-wrapper">
			  <?php $this->load->view('common/sidemenu'); ?>

				<section role="main" class="content-body" >
						<div class="col-md-12" style="padding:0px; padding-right:15px; margin-bottom:15px;">
						<section class="section_card" id="table_section">

							
								 <header class="panel-heading" style="padding:0px 15px;">

								     	<div class="heading_box" style=" border-bottom: none; padding: 6px 2px; height:36px; background-color:#27293d;">
								     		
									        <h2 class="panel-title" style="color:#dbd6d6; font-size:16px; line-height:10px; text-transform:uppercase;">
														<i class="ion-android-radio-button-on" style="margin-right:10px;"></i>
														Project List <i class="ion-chevron-right" style="padding:0px 10px; color:#0088cc;"></i> <?php  if(isset($product_list[0]->product_sub_category_name)){ echo $product_list[0]->product_sub_category_name;  } ?>
														<i class="ion-chevron-right" style="padding:0px 10px; color:#0088cc;"></i>
														<?php  if(isset($product_list[0]->product_category_name)){ echo $product_list[0]->product_category_name;  } ?>
														<a href="<?php echo base_url(); ?>/projects/add"type="btn" class="btn-transparent btn-green" style="position:absolute; right:12px; top:8px;">Add Project</a>
													</h2>
									    </div>
								</header>
							  <div class="panel-body " style="padding-top:0px;">
								   <table class="table mb-none" id="table" data-toggle="table" data-pagination="true" style="border-bottom: 1px solid #424351;">
									 <thead>
									   	<tr>
											   <th>Sr no</th>
										     <th>Name</th>
											   <th>Descripation</th>
                                                 <th>Status Id</th>
												 <th>Customer Id</th>
                                              
												 <th>Invoice Id</th>
                                             <th>Start Date</th>
											   <th>Deadline Date</th>
											   <th>Created Date</th>
											   <th>Finished</th>
											   <th>Pinned</th>
											   <th>Staff Id</th>

											   <th>Edit</th>
											   <th>Action</th>
										</tr>
									</thead>
									<tbody>
										  <?php $i = 1; if(isset($project_details)) { foreach($project_details as $row) {?>
                          <tr>
														  <td><?php echo $i++; ?></td>
														  
                          	                            <td><?php echo $row->name; ?></td>
                                                          <td><?php echo $row->description; ?></td>
														  <td><?php echo  $row->status_id; ?></td>
															<td><?php echo $row->customer_id; ?></td>
                              
                                                          	<td><?php echo $row->invoice_id; ?></td>
                                                          	<td><?php echo $row->start_date; ?></td>
                                                          	<td><?php echo $row->deadline; ?></td>
                                                          	<td><?php echo $row->created; ?></td>
                                                          	<td><?php echo $row->finished; ?></td>
                                                          	<td><?php echo $row->pinned; ?></td>
                                                          	<td><?php echo $row->staff_id; ?></td>
                                                      
														  <td>
                    <a 
                     href="<?php echo base_url(); ?>/projects/edit_project/<?php echo $row->id; ?>"> <button type="button"   style=" width:100%;"><i class="fa fa-pencil"></i>
                   </a>
                      </td>

										      	   <td style="text-align:center;"><button type="button" class="btn btn-primary" id="confirm_del_action" data-confirm_del_id="<?php echo $row->id; ?>" style="color:#ff4747; "><i class="fa  fa-times-circle"></i></button>
                              </td>
                          </tr>
										<?php } } ?>
									</tbody>
								</table>
							</div>
						</section>
					</div>
					
		<!-- main section -->
        </section>
	 <!-- inner wrapper -->
		</div>
		<?php $this->load->view('common/sidebar_right'); ?>
		<!-- Body section -->
		</section>
		<!-- Delete confimation model -->
		          <div id="del_alert_action" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog" data-backdrop="static" data-keyboard="false" style="width:460px; margin:auto;">
										 <div class="modal-dialog" style="width:90%;">
												 <div class="modal-content">
														 <div class="modal-close-area modal-close-df">
																 <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
														 </div>
														 <div class="modal-body" style="padding: 30px 30px; background-color:#363956; text-align:center; color:#ffffff;">
																 <span class="ion-ios-flame-outline" style="font-size:50px; color:#ff4747;"></span>
																 <h2 style="margin-top:6px;">Are You Sure!</h2>
																 <p class="fail_model_p">Do you want to delete this account?</p>
														 </div>
														 <div class="modal-footer danger-md" style=" background-color:#363956; border-top:none;">
																 <button class="btn-transparent btn-red" type="button" data-dismiss="modal" style="width:80px;">No</button>
																 <button data-del_id="" id="del_bt" class="btn-transparent btn-green" type="button"  style="width:80px; ">Yes</button>
					                   </div>
												 </div>
										 </div>
								 </div>

<?php $this->load->view('common/footer_script'); ?>
<script src="<?php echo base_url(); ?>/catalogs/assets/javascripts/image-compressor.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/Lobibox.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/modal/notifications/notification-active.js"></script>
<script src="<?php echo base_url(); ?>/catalogs/assets/vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
		 $(document).ready(function(){
     // set scroll position
		 function set_scroll_position(){

			 var url = window.location.href;
			 var segments = url.split( '/' );
       var scroll_position = segments[9];
			 if(scroll_position){
					 $('html').scrollTop(scroll_position);
			 }
		 }
		// set_scroll_position();
    // set scroll position



    $(document).on('click','button[id=inlink_img_bt]',function(){
			 
          var unlink_img_src = $(this).data("unlink_img_src");

				  $.ajax({
              url : '<?php echo base_url(); ?>/category/unlink_image',
						  method: 'POST',
							data:{unlink_img_src: unlink_img_src},
							success:function(data){
								alert(data);
								if(data === 'success'){
										$('#img_label').html('<i class="fa fa-globe" style="margin-top:60px; margin-right:5px;"></i><span style="font-size:12px;">Browse</span>');
								}
							}
					});
	   });

    $(document).on('click','button[id=temprory_remove_image]',function(){
          $('#img_label').html('<i class="fa fa-globe" style="margin-top:60px; margin-right:5px;"></i><span style="font-size:12px;">Browse</span>');
		});

// category and subcategory change event
$(document).on('change','select[name=category]',function(){
			var category_id = $('select[name=category]').val();
			if(category_id === ''){
				category_id = 0;
			}
		 var sub_category_id = 0;
     var redirect_link = '<?php echo base_url(); ?>product/add_product/'+category_id+'/'+sub_category_id;
			window.location.href = redirect_link;
		//	alert(sub_category_id);
});

$(document).on('change','select[name=subcategory]',function(){
			var category_id = $('select[name=category]').val();
			if(category_id === ''){
				category_id = 0;
			}
			var sub_category_id = $('select[name=subcategory]').val();
			if(sub_category_id === ''){
				sub_category_id = 0;
			}
     var redirect_link = '<?php echo base_url(); ?>product/add_product/'+category_id+'/'+sub_category_id;
			window.location.href = redirect_link;
		//	alert(sub_category_id);
});

// rediren for update section
    $(document).on('click','button[id=edit_bt]',function(){
       
              var edit_id = $(this).data("edit_id");
							var scroll_position = $('html').scrollTop()
                            
                            //alert(edit_id);
              // category id and cetegory id selected
							var url = window.location.href;
			 			  var segments = url.split( '/' );

							var category_id = $(this).data("category_id");
							var subcategory_id = $(this).data("subcategory_id");
                            if(!subcategory_id){
                                subcategory_id = 0;
                            }
          
              var redirect_link  = '<?php echo base_url(); ?>product/edit_product/'+category_id+'/'+subcategory_id+'/'+edit_id+'/'+scroll_position;
           
                          
							window.location.href = redirect_link;

		});
// delete functionality
    $(document).on('click','button[id=confirm_del_action]',function(){
        
        
             var confirm_del_id = $(this).data("confirm_del_id");

            // alert(confirm_del_id);
             $('#del_bt').data('del_id',confirm_del_id);
             $('#del_alert_action').modal("toggle");
    });

    $(document).on('click','button[id=del_bt]',function(){
         var del_id = $(this).data("del_id");

       //  alert(del_id);
              $.ajax({
                  url : '<?php echo base_url(); ?>/projects/delete_project',
                  method: 'POST',
                  data:{vv: del_id},
                  success:function(data){
                    //alert(data);
                    if(data === 'success'){
                     window.location.href = window.location.href;
                    }
                  }
              });
      });
});
</script>
</body>
</html>

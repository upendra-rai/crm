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
			<div class="success_message"></div>
			<!-- success message -->
      <?php $this->load->view("common/titlebar"); ?>

			<div class="inner-wrapper">
			  <?php $this->load->view('common/sidemenu'); ?>

				<section role="main" class="content-body" >

					<div class="col-md-12" style="padding:0px;">
					<section class="section_card">
						  <div class="panel-head" style="width:100%; height:30px; background-color:transparent; color:#dbd6d6; padding:10px 16px; ">
						      <h4 style="padding:0px; margin:0px; font-size:16px; text-transform:uppercase;">
										<i class="ion-android-radio-button-on" style="margin-right:10px;"></i>
									  Add Project
									</h4>
						 </div>
						 <div class="panel-body" style="padding-left:0px; padding-right:0px;  background-color:#27293d; padding-top:15px; padding-bottom:0px;">
										<form class="form-horizontal form-bordered" action="<?php echo base_url(); ?>lead/add" method="post">
                    <div class="col-md-6" style="padding:0px;">
											 <div class="col-md-12">
											   <div class="form-group">
												  <div class="col-md-12">
													   <input type="text" class="form-control" name="id" placeholder="Id" value="" required>
												  </div>
											   </div>
											</div>
											   <div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="type" placeholder="Type" value="" >
													 </div>
												 </div>
											</div>

											 <div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="product_id" placeholder="Product Id" value="" >
													 </div>
												 </div>
											</div>

										   
											 
											 
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="name" placeholder=" Name" value="" >
													 </div>
												 </div>
											</div>

											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="title" placeholder="Title" value="" >
													 </div>
												 </div>
											</div>


											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="company" placeholder="Company Id" value="" >
													 </div>
												 </div>
											</div>


												

											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="description" placeholder="Description" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="country_id" placeholder="Country Id" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="zip" placeholder="Zip" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="city" placeholder="City" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="state" placeholder="State" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="email" placeholder="Email" value="" >
													 </div>
												 </div>
											</div>
											 
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="address" placeholder="Address" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="website" placeholder="Website" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="phone" placeholder="phone No" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="assigned_id" placeholder="Assigned Id" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="date" class="form-control" name="created" placeholder="Created" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="status" placeholder="Status" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="source" placeholder="Source" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="datetime-local" class="form-control" name="lastcontact" placeholder="Last Contact" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="date" class="form-control" name="dateassigned" placeholder="Date Assigned" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="staff_id" placeholder="Staff Id" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="datetime-local" class="form-control" name="dateconverted" placeholder="Date Converted" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="lost" placeholder="Lost" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="junk" placeholder="Junk" value="" >
													 </div>
												 </div>
											</div>
											<div class="col-md-12">
												 <div class="form-group">
													 <div class="col-md-12">
														 <input type="text" class="form-control" name="public" placeholder="Public" value="" >
													 </div>
												 </div>
											</div>
										</div>
                                      
									<div class="col-md-12">
											<div class="form-group">
                                                <span style="color:red; padding-left:20px;"><?php if(isset($msg)){ echo $msg; } ?></span>
                                                
												<div class="col-md-12">
													<a href="<?php echo base_url(); ?>category/add_category">	<button type="button" class="btn-transparent btn-red"  style=" width:80px;">Cancel</button></a>
													<input type="submit" class="btn btn-primary" name="submit" value="submit" style="">
												</div>
											</div>
						      </div>
									<div class="col-md-6">
											<div class="form-group">
												<div class="col-md-12">

												</div>
											</div>
						      </div>
									</form>
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
       var scroll_position = segments[7];
			 if(scroll_position){
					 $('html').scrollTop(scroll_position);
			 }
		 }
		 set_scroll_position();
    // set scroll position

	  // upload image to server section
    document.getElementById('file').addEventListener('change', (e) => {
        const file = e.target.files[0];
         if (!file) {
         return;
        }
        var img_folder_name = $('input[id=file]').data("img_folder_name");
        new ImageCompressor(file, {
        quality: .2,
        success(result) {
           const formData = new FormData();
           formData.append('file', result, result.name);
           formData.append('img_folder_name', img_folder_name);
            $.ajax({
		    	url: '<?php echo base_url(); ?>/category/upload_image',
		    	method:"POST",
		    	data:formData,
		    	contentType:false,
		    	cache:false,
		    	processData:false,
		    	beforeSend:function(){
		    	//	$('#loading_img').text('loading...');
		    	},
		    	success:function(data)
		    	{
		    		$('#img_label').html(data);
		    		//$('#loading_img').text('');
		    	}
		    });
        },
         error(e) {console.log(e.message); },
      });
    });

    $(document).on('click','button[id=inlink_img_bt]',function(){
			  alert("s");
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

// rediren for update section
    $(document).on('click','button[id=edit_bt]',function(){
              var edit_id = $(this).data("edit_id");
							var scroll_position = $('html').scrollTop();
              var redirect_link  = '<?php echo base_url(); ?>category/edit_category/'+scroll_position+'/'+edit_id;

							window.location.href = redirect_link;

		});
// delete functionality
    $(document).on('click','button[id=confirm_del_action]',function(){
						 var confirm_del_id = $(this).data("confirm_del_id");
						 $('#del_bt').data('del_id',confirm_del_id);
						 $('#del_alert_action').modal("toggle");
		});

		$(document).on('click','button[id=del_bt]',function(){
			   var del_id = $(this).data("del_id");
							$.ajax({
		              url : '<?php echo base_url(); ?>/category/del_product_category',
								  method: 'POST',
									data:{del_id: del_id},
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

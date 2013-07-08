<?php include('include/head_section.php'); ?>
<body>
	<div id="profile_Container"><!--profile_Container_div_Open-->
	     <div id="profile_content_main" ><!--content_main_Open-->
	    	<table cellspacing="0"><!--main_table_open-->
		    <tr>
				<td id="td_left"><!--td_left_open-->
						 <?php include('include/left_sidebar.php'); ?>
				</td><!--td_left_Closed-->
				<td id="td_right"><!--td_right_Open-->
				<table cellspacing="0"><!--top_table_open-->
						<?php include('include/header_top.php'); ?>
				<tr>
				<td colspan="2">
						<div id="profile_menu">&nbsp;<div class="plug"></div><h3 style="position:relative; top:-40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NEW PLUG</h3>
						</div>
				</td>
				</tr>
				</table><!--top_table_closed-->
				<table class="middle_table" style="width:93%; margin-left:25px;"><!--middle_table_open-->
				<tr>
					<td class="vertical_top" id="profile_form" colspan="2">
							<table style="margin-left:45px; width:97%;"><!--profile_form_table_open-->
							<tr>
							<td class="vertical_top" width="80%"><br />
							<form method="" action="" enctype="multipart/form-data"><!--plug_edit_form_open-->
									<table id="plugger_profile_form"><!--plugger_profile_form_table_opne-->
									<tr>
										<td class="td1_width"><label>Name :</label></td>
										<td class="td2_width"><input type="text" name="" class="text"/></td>
									</tr>
									<tr>
										<td class="td1_width"><label>Description :</label></td>
										<td class="td2_width"><textarea  name="" class="textarea"></textarea></td>
									</tr>
									<tr>
										<td class="td1_width"><label>Website :</label></td>
										<td class="td2_width"><input type="text" name="" class="text"/></td>
									</tr>
									
									<tr>
										<td class="td1_width"><label>Collection :</label></td>
										<td class="td2_width">
											<select name="collection" id="Collection_id" tabindex="1">
													<option value="">Collection</option>
													<option value="">Demo1</option>
													<option value="">Demo2</option>
											</select>
										</td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Members	 :</label></td>
										<td class="td2_width"><input type="text" name="" class="text"/></td>
									</tr>
                                     <tr>
										<td class="td1_width"><label>Groups	 :</label></td>
										<td class="td2_width"><input type="text" name="" class="text"/></td>
									</tr>
									
									<tr>
										<td class="td1_width vertical_top"><label><br />Attach File :</label><br /><span style="color:#999999; font-size:11px;">(Videos, Document, Photo..)</span></td>
										<td class="td2_width vertical_top">
											<table>
											<tr>
												<td>
													<span class="file-input"><!--first_browse_button_open-->
														<input name="file[]" type="file" />
														<span class="btn btn-file-input btn-file-input-active"></span>
														<span class="file-holder"></span>
													</span><br /><br /><!--first_browse_button_open-->
												</td>
											</tr>
											<tr>
												<td>
													<span class="file-input1"><!--second_browse_button_open-->
													<input name="file1[]" type="file" />
													<span class="btn1 btn-file-input1 btn-file-input-active1"></span>
													<span class="file-holder1"></span>
													</span><br /><br /><!--second_browse_button_open-->
												</td>
											</tr>
											<tr>
											<td>
													<span class="file-input2"><!--thired_browse_button_open-->
													<input name="file2[]" type="file" />
													<span class="btn2 btn-file-input2 btn-file-input-active2"></span>
													<span class="file-holder2"></span>
													</span><br /><br /><!--thired_browse_button_open-->
											</td>
											</tr>
											</table>
										</td>
									</tr>
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
				</tr>
				</table><!--middle_table_closed-->
				<div style="position:relative; top:10px; padding-bottom:50px;">
               <div class="new_plug_save_button">
                      			<input type="submit" name="save" class="plug_save_button" value="" title="Save"/></div>
                </div>                 
                <!--<table class="form_button" style="float:; width:57%;">
							<tr>
								<td class="padding_button"> <input type="submit" name="save" class="plug_save_button" value="" title="Save"/>
				
                                </td>
    						</tr>
					</table>-->
               
   			 </form><!--plug_edit_form_closed-->
             	
			   </tr>
		</table><!--main-table_closed--> 
	     </div><!--content_main_Closed-->
    </div><!--profile_Container_div_Closed-->
<script type="text/javascript">
	$(function () {
			$("#Collection_id").selectbox();
			$("#Interest_Area_id").selectbox();
	});
$(document).ready(function(){
	
	$('.delete').click(function(){
		
		var elem = $(this).closest('.item');
		
		$.confirm({
			'title'		: 'Are you sure about deleting?',
			'message'	: '',
			'buttons'	: {
				'Yes'	: {
					'class'	: 'blue',
					'action': function(){
						
					}
				},
				'No'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
				}
			}
		});
		
	});
	
});
</script>
<script src="js/jquery.confirm.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.confirm.css" />
</body>
</html>

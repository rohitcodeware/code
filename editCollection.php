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
				<tr>
					<td id="create_menu" style="width:65%;"><!--create_menu_Open-->
						<ol style="width:1;">
							<li><img src="images/picture_04.jpg" style="display:inline-block; width:15px; height:auto;" />&nbsp;<label><a href="newPlug.php">CREATE NEW PLUG</a></label></li>
						</ol>
					</td><!--create_menu_Closed-->
					<td id="search"><!--search_td_Open-->
						<?php include('include/search_box.php'); ?>	
					</td><!--search_td_Closed-->
				</tr>
				<tr><!--hr_row_open-->
					<td colspan="2"><p  class="border"></p></td>
				</tr><!--hr_row_closed-->
				<tr>
				<td colspan="2">
						<div id="profile_menu">&nbsp;<div class="create_collection"></div><h3 style="position:relative; top:-40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIT COLLECTION</h3>
						</div>
				</td>
				</tr>
				</table><!--top_table_closed-->
				<table class="middle_table" style="width:93%; margin-left:25px;"><!--middle_table_open-->
				<tr>
					<td class="vertical_top" id="profile_form" colspan="2">
							<table style="margin-left:45px; width:90%"><!--profile_form_table_open-->
							<tr>
							<td class="vertical_top" width="80%"><br />
							<form method="" action="" enctype="multipart/form-data"><!--plug_edit_form_open-->
									<table id="plugger_profile_form"><!--plugger_profile_form_table_opne-->
									<tr>
										<td class="td1_width"><label>Collection Name :</label></td>
										<td class="td2_width"><input type="text" name="" class="text" value=""/></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Collection Description :</label></td>
										<td class="td2_width"><textarea name="" class="textarea"></textarea></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Interest Area :</label></td>
										<td class="td2_width">
											<select name="collection" id="Collection_id" tabindex="1">
													
													<option value="">Restaurants</option>
													<option value="">Demo2</option>
											</select>
										</td>
									</tr>
                                    
                                     <tr>
										<td class="td1_width"><label>Share Type :</label></td>
										<td class="td2_width">
											<select name="collection_share_type" id="collection_share_type" tabindex="1">
													
													<option value="">Private Room</option>
													<option value="">Share+1 </option>
                                                    
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
									
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
					</tr>
				</table><!--middle_table_closed-->
				
					<table class="form_button" style="float:; width:57%;"><!--button_table_open-->
							<tr>
								<td class="padding_button"><input type="submit" name="save" class="plug_save_button" value="" title="Save"/>
                                <div class="item">
                                            <div class="delete"></div>
                                </div>
                                </td>
    						</tr>
					</table><!--button_table_closed-->
				 </form><!--plug_edit_form_closed-->
			</tr>
		</table><!--main-table_closed--> 
	 </div><!--content_main_Closed-->
</div><!--profile_Container_div_Closed-->
<script type="text/javascript">
	$(function () {
		$("#Collection_id").selectbox();
		$("#collection_share_type").selectbox();
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

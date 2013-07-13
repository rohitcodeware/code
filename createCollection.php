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
							<li><img src="images/picture_04.jpg" style="display:inline-block; width:15px; height:auto;" />&nbsp;<label><a href="plugEdit.php">CREATE NEW PLUG</a></label></li>
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
						<div id="profile_menu">&nbsp;<div class="create_collection"></div><h3 style="position:relative; top:-40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW COLLECTION</h3>
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
										<td class="td2_width"><input type="text" name="" class="text"/></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Collection Description :</label></td>
										<td class="td2_width"><textarea name="" class="textarea"></textarea></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Interest Area :</label></td>
										<td class="td2_width">
											<select name="collection" id="Collection_id" tabindex="1">
													<option value="">Select Interest Area</option>
													<option value="">Demo1</option>
													<option value="">Demo2</option>
											</select>
										</td>
									</tr>
                                    
                                     <tr>
										<td class="td1_width"><label>Share Type :</label></td>
										<td class="td2_width">
											<select name="collection_share_type" id="collection_share_type" tabindex="1">
													<option value="">Choose share type</option>
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
 <tr>
										<td class="td1_width"><label>Collection Type :</label></td>
										<td class="td2_width">
											<select name="collection_type" id="Collection_type" tabindex="1">
													<option value="">Select Collection Type</option>
													<option value="">Class Project</option>
													<option value="">Secret Recipe </option>
                                                                                                        <option value="">Kids album & Awards</option>
													<option value="">Favorite Restaurant </option>
                                                                                                        <option value="">Favorite Vacation Spot</option>
													<option value="">Love Letter</option>
											</select>
										</td>
									</tr>
									
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
					</tr>
				</table><!--middle_table_closed-->
				
					<table class="form_button" style="float:; width:56%;"><!--button_table_open-->
							<tr>
								<td class="padding_button"><input type="submit" name="save" class="plug_save_button" value="" title="Save"/></td>
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
	$("#contentView_id").selectbox();
	$("#collection_share_type").selectbox();
        $("#Collection_type").selectbox();
});
</script>
</body>
</html>
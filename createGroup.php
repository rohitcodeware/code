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
						<div id="profile_menu">&nbsp;<div class="create_group"></div><h3 style="position:relative; top:-40px; font-size:23px; color:#2C2C2C;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREATE A GROUP</h3>
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
										<td class="td1_width"><label>Group Name :</label></td>
										<td class="td2_width"><input type="text" name="" class="text" value="Enter your group name" onClick="if(this.value=='Enter your group name'){this.value=''}" onBlur="if(this.value==''){this.value='Enter your group name'}" style="color:#999;"/></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label style="top:-35px; position:relative;">Description :</label></td>
										<td class="td2_width"><textarea  name="" class="textarea"   value="Enter your group description" onClick="if(this.value=='Enter your group description'){this.value=''}" onBlur="if(this.value==''){this.value='Enter your group description'}" style="color:#999; font-size:12px; font-family:Arial, Helvetica, sans-serif;">Enter your group description</textarea></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label>Add Member :</label></td>
										<td class="td2_width"><input type="text" name="" class="text"  value="Member you want to add to group" onClick="if(this.value=='Member you want to add to group'){this.value=''}" onBlur="if(this.value==''){this.value='Member you want to add to group'}"style="color:#999;"/></td>
									</tr>
                                      <tr>
										<td class="td1_width"><label>Group Type :</label></td>
										<td class="td2_width"><input type="radio" id="radio-1-3" name="" class="regular-radio"  /><label for="radio-1-3"></label><label for="radio-1-3" style="vertical-align:top; font-weight:normal;">&nbsp;Private&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="radio-1-4" name="" class="regular-radio"  /><label for="radio-1-4"></label><label for="radio-1-4" style="vertical-align:top; font-weight:normal;">&nbsp;Public&nbsp;</label></td>
									</tr>
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
					</tr>
				</table><!--middle_table_closed-->
				
					<table class="form_button" style="float:; width:56%;"><!--button_table_open-->
							<tr>
								<td class="padding_button">
                                        <input type="submit" name="save" class="create_group_button" value="" title="Save"/>
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

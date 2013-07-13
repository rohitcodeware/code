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
						<div id="profile_menu">&nbsp;<div class="plug"></div><h3 style="position:relative; top:-40px; font-size:23px; color:#2C2C2C;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHANGE YOUR PASSWORD</h3>
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
										<td class="td1_width"><label>Old Password :</label></td>
										<td class="td2_width"><input type="password" name="" class="text" /></td>
									</tr>
                                   
                                    <tr>
										<td class="td1_width"><label>New Password :</label></td>
										<td class="td2_width"><input type="password" name="" class="text"  /></td>
									</tr>
                                      <tr>
										<td class="td1_width"><label>Confirm Password :</label></td>
										<td class="td2_width"><input type="password" name="" class="text" /></td>
									</tr>
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
					</tr>
				</table><!--middle_table_closed-->
				
					<table class="form_button" style="float:; width:56%;"><!--button_table_open-->
							<tbody>
                            <tr>
								<td class="padding_button">
                                        <input type="submit" name="change_password" class="plug_change_password_button" value="" title="Change Password">
                                        
                                </td>
							</tr>
                            <tr>
								<td class="padding_button">
                                        <input type="submit" name="signup" class="plug_signup_button" value="" title="Sign Up">
                                        
                                </td>
							</tr>
                            <tr>
								<td class="padding_button">
                                        <input type="submit" name="signup" class="plug_signin_button" value="" title="Sign Up">
                                        
                                </td>
							</tr>
                           
                            <tr>
								<td>
                                        <div class="sign_up_fb_button"><img src="images/facebook_circle_color-128.png"><a href="http://www.facebook.com/" class="sign_up_link">Signup With Facebook</a></div>
                                        
                                </td>
							</tr>
                            <tr>
								<td>
                                        <div class="sign_up_tw_button"><img src="images/social_twitter_button_blue.png"><a href="http://www.twitter.com/" class="sign_up_link">Signup With Twitter</a></div>
                                        
                                </td>
							</tr>
                           
					</tbody></table>
                    
				 </form><!--plug_edit_form_closed-->
                 

			</tr>
		</table><!--main-table_closed--> 
	 </div><!--content_main_Closed-->
</div><!--profile_Container_div_Closed-->
</body>
</html>

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
				<td colspan="2">
						<div id="profile_menu">&nbsp;<div class="create_group"></div><h3 style="position:relative; top:-40px; font-size:23px; color:#2C2C2C;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP</h3>
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
										<td class="td1_width"><label for="user_first_name">First Name :</label></td>
										<td class="td2_width"><input type="text" name="user[first_name]" class="text" id="user_first_name"/></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label for="user_last_name">Last Name :</label></td>
										<td class="td2_width"><input type="text" name="user[last_name]" class="text" id="user_last_name" /></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label for="user_display_name">Display Name :</label></td>
										<td class="td2_width"><input type="text" name="user[user_name]" class="text" id="user_display_name"/></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label for="user_birth_date">Birth Date :</label></td>
                                    	<td style="padding-right:5px;">
										<table  style="width:200px;margin-left:-1px;"><!--dob_table_open-->
										<tr>
											 <td  style="padding-right:5px; padding-bottom:8px;">
											 <span>
												    <select name="date_id"  id="date_id" tabindex="1" style="width:80px; display:inline-block;">
													 	<option value="">Year</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
													</select>
											 </span>
											 </td>
											 <td  style="padding-right:5px;padding-bottom:8px;"">
											 <span>
											    	<select name="month_id" id="month_id" tabindex="1" style="width:80px;display:inline-block;">
														<option value="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
													</select>
											 </span>
											 </td>
											 <td  style="padding-right:5px;padding-bottom:8px;"">
											 <span>
													<select name="year_id" id="year_id" tabindex="1" style="width:80px;display:inline-block;">
														<option value="">Date</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
											   		</select>
											 </span>
											 </td>
											 </tr>
		       							     </table><!--dob_table_closed-->
          							 </td>
                                     </tr>
                                     <tr>
										<td class="td1_width"><label for="user_email" name="user[email]">Email :</label></td>
										<td class="td2_width"><input type="text" name="" class="text" id="user_email" /></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label for="user_address">Address :</label></td>
										<td class="td2_width"><input type="text" name="user[address]" class="text" id="user_address" /></td>
									</tr>
                                    <tr>
										<td class="td1_width"><label for="user_avatar">Avatar :</label></td>
										<td>
													<span class="file-input"  style="padding-bottom: 7px !important;"><!--first_browse_button_open-->
														<input name="file[]" type="file" id="user_avatar">
														<span class="btn btn-file-input btn-file-input-active"></span>
														<span class="file-holder"></span>
													</span><br><br><!--first_browse_button_open-->
										</td>
                                    </tr>   
                                    <tr>
										<td class="td1_width"><label for="user_password">Password :</label></td>
										<td class="td2_width"><input type="password" name="user[password]" class="text" id="user_password"  /></td>
									</tr>
                                    <tr> 
										<td class="td1_width"><label for="user_password_confirmation">Password confirmation :</label></td>
										<td class="td2_width"><input type="password" name="user[password_confirmation]" class="text" id="user_password_confirmation"  /></td>
									</tr>
                                    
									
									
									</table><!--plugger_profile_form_table_closed-->
							</table><!--profile_form_table_closed-->	
					</td>
					</tr>
				</table><!--middle_table_closed-->
				
					<table class="form_button" style="float:; width:56%;"><!--button_table_open-->
							<tr>
								<td class="padding_button">
                                        <input type="submit" name="signup" class="plug_signup_button" value="" title="Sign Up"/>
                                        
                                </td>
							</tr>
                            <tr>
								<td class="padding_button">
                                        <input type="submit" name="signup" class="plug_signin_button" value="" title="Sign Up"/>
                                        
                                </td>
							</tr>
                           
                            <tr>
								<td>
                                        <div class="sign_up_fb_button"><img src="images/facebook_circle_color-128.png" /><a href="http://www.facebook.com/" class="sign_up_link">Signup With Facebook</a></div>
                                        
                                </td>
							</tr>
                            <tr>
								<td>
                                        <div class="sign_up_tw_button"><img src="images/social_twitter_button_blue.png" /><a href="http://www.twitter.com/" class="sign_up_link">Signup With Twitter</a></div>
                                        
                                </td>
							</tr>
                            <tr>
								<td>
                                        <div class="sign_up_fb_button"><img src="images/linkedin_circle_color-128.png" /><a href="http://www.linkedin.com/" class="sign_up_link">Signup With Linkedin</a></div>
                                        
                                </td>
							</tr>
					</table><!--button_table_closed-->
                   
				</div>
				 </form><!--plug_edit_form_closed-->
                 

			</tr>
		</table><!--main-table_closed--> 
	 </div><!--content_main_Closed-->
</div><!--profile_Container_div_Closed-->
<script type="text/javascript">
	$(function () {
			$("#Collection_id").selectbox();
	});
	$(function () {
                    $("#date_id").selectbox1();
                    $("#month_id").selectbox1();
                    $("#year_id").selectbox1();
    });
	
</script>
</body>
</html>

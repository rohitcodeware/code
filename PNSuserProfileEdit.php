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
									<td>
										<div id="home_menu"><label>HOME</label>&nbsp;&nbsp;<img src="images/arrow.png" />&nbsp;&nbsp;<span style="color:#B5B5B5; font-weight:600; width:120px;">PLUGGER&nbsp; PROFILE</span></div>
									</td>
								</tr>
								<tr><!--hr_row_open-->
									<td colspan="2"><p  class="border"></p></td>
								</tr><!--hr_row_closed-->
                                <tr>
									<td colspan="2"><div id="profile_menu">&nbsp;<div class="pluger"></div><h3 style="position:relative; top:-40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLUGGER PROFILE</h3></div></td>
								
								</tr>
						</table><!--top_table_closed-->
						<form method="" action="" enctype="multipart/form-data"><!--Middle_form_open-->		
						<table style="background-color:red; width:93%; margin-left:25px;" cellspacing="0"><!--midddle_table_open-->
						<tr>
							<td class="vertical_top" id="profile_form" colspan="2">
								<table><!--profile_form_table_open-->
											<tr>
												<td class="vertical_top" width="20%">
														<span class="upload_images"></span>
														<span style="margin-left:50px;"><a href="#" class="link">Upload Your Profile Pic</a></span>
														<div style="border-bottom:1px dashed #FB7E3E;height:1px; width:150px; margin-left:50px;"></div>
												</td>
												<td class="vertical_top" width="80%"><br />
                                               
													<table id="plugger_profile_form"><!--plugger_profile_form_table_opne-->
													<tr>
														<td class="td1_width"><label>First name :</label></td><td class="td2_width"><input type="text" name="" class="text"/></td>
													</tr>
													<tr>
														<td class="td1_width"><label>Last name :</label></td><td class="td2_width"><input type="text" name="" class="text"/></td>
													</tr>
													<tr>
														<td class="td1_width"><label>Display name :</label></td><td class="td2_width"><input type="text" name="" class="text"/></td>
													</tr>
													<tr>
														<td class="td1_width"><label>Birthday :</label></td>
														<td class="td2_width">
														<table  style="width:200px;margin-left:-1px;"><!--dob_table_open-->
														<tR>
																<td  style="padding-right:5px;">
																	<span>
																	<select name="date_id" id="date_id" tabindex="1" style="width:80px; display:inline-block;">
																		<option value="">Date</option>
																		<option value="">Demo1</option>
																		<option value="">Demo2</option>
																	</select>
																	</span>
																</td>
																<td  style="padding-right:5px;">
																<span>
																<select name="month_id" id="month_id" tabindex="1" style="width:80px;display:inline-block;">
																	<option value="">Month</option>
																	<option value="">Demo1</option>
																	<option value="">Demo2</option>
																</select>
																</span>
																</td>
																<td  style="padding-right:5px;">
																<span>
																<select name="year_id" id="year_id" tabindex="1" style="width:80px;display:inline-block;">
																	<option value="">Years</option>
																	<option value="">Demo1</option>
																	<option value="">Demo2</option>
																</select>
																</span>
																</td>
																</tR>
														</table><!--dob_table_closed-->
													</td>
													</tr>
													<tr>
														<td class="td1_width"><label>Email :</label></td><td class="td2_width"><input type="text" class="text"/></td>
													</tr>
													<tr>
														<td class="td1_width"><label>city :</label></td>
														<td class="td2_width">
														<select name="city_id" id="city_id" tabindex="1" style="z-index:1000;">
															<option value="">city</option>
															<option value="">Demo1</option>
															<option value="">Demo2</option>
														</select></td>
													</tr>
													
													<tr>
														<td class="td1_width"><label>State/Province  :</label></td>
														<td class="td2_width">
														<select name="state_id" id="state_id" tabindex="1" style="z-index:1000;">
														
															<option value="">State/Province</option>
															<option value="">Demo1</option>
															<option value="">Demo2</option>
														</select>
														</td>
													</tr>
													
													<tr>
														<td class="td1_width"><label>Zip Code :</label></td><td class="td2_width"><input type="text" class="text" style="z-index:1000;"/></td>
													</tr>
										
													<tr>
														<td class="td1_width"><label>country :</label></td>
														<td class="td2_width">
														<select name="country_id" id="country_id" tabindex="1" style="z-index:1000;">
															<option value="">country</option>
															<option value="">Demo1</option>
															<option value="">Demo2</option>
														</select>
														</td>
													</tr>
													
													</table><!--plugger_profile_form_table_closed-->
								 </table><!--profile_form_table_closed-->	
						    </td>
						</tr>
						</table><!--middle_table_closed-->
						<table class="form_button"><!--button_table_open-->
						<tr>
								<td width="10%" class="padding_button" style="padding-left:20px;"><input type="submit" name="save" class="save_button" value="" title="Save"/></td>
								<td width="20%" class="padding_button"><input type="submit" name="back" class="back_button" value="" title="Back"/></td>
						</tr>
						</table><!--button_table_closed-->
						</form>
                        </td>
				    </td><!--td_right_Closed-->
                    
		            </tr>
                  
	         	  </table><!--main_table_closed-->
		      </div><!--content_main_Closed-->
	  </div><!--profile_Container_div_Closed-->
		<script type="text/javascript">
                $(function () {
                    $("#country_id").selectbox();
                    $("#city_id").selectbox();
                    $("#state_id").selectbox();
                });
                $(function () {
                    $("#date_id").selectbox1();
                    $("#month_id").selectbox1();
                    $("#year_id").selectbox1();
                });
        </script>
     
</body>
</html>

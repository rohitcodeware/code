<?php include('include/head_section.php'); ?>
<body>
	<div id="profile_Container"><!--profile_Container_div_Open-->
	     <div id="profile_content_main" ><!--content_main_Open-->
	    	<table cellspacing="0"><!--main_table_open-->
		    <tr><!--main_tr_open-->
				<td id="td_left"><!--td_left_open-->
						 <?php include('include/left_sidebar.php'); ?>	
				</td><!--td_left_Closed-->
				<td id="td_right"><!--td_right_Open-->
				<table cellspacing="0"><!--top_table_open-->
				 		<?php include('include/header_top.php'); ?>
				<tr>
					<td>
						  <div id="home_menu"><label>HOME</label>&nbsp;&nbsp;<img src="images/arrow.png" /> 
						  &nbsp;&nbsp;<span style="color:#B5B5B5; font-weight:600; width:460px;">INTEREST AREAS</span></div>
					</td>
				</tr>
				<tr><!--hr_row_open-->
					<td colspan="2"><p  class="border"></p></td>
				</tr><!--hr_row_closed-->
				<tr>
					<td colspan="2"><div id="profile_menu">&nbsp;
							<div class="pluger"></div><h3 style="position:relative; top:-40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT YOUR INTEREST AREAS</h3></div>
					</td>
				</tr>
				</table><!--top_table_closed-->
				<table class="middle_table" style="width:93%; margin-left:25px;"><!--middle_table_open-->
				<tr>
					<td class="vertical_top" id="profile_form" colspan="2" style="background-color:#FFFFFF;">
							<table style="margin-left:45px; background-color:; padding-top:20px; width:90%"><!--profile_form_table_open-->
							<tr>
								<td class="vertical_top" width="80%">
									<form method=""  action="" enctype="multipart/form-data"><!--plug_edit_form_open-->
									<div class="one_area">
                                        <div class="show">
                                                <input type="checkbox" class="checkbox" id="c1" name="animals" onClick="processCheckbox(this);" />					<label class="label" for="c1"><p></p><span class="interest_span" >ANIMALS</span></label>
                                                <center><img src="images/school_second.png" id="image" class="interest_img"/></center>
                                        </div>
                                    </div>
                                    <div class="second_area">
                                 	<div class="show2">
											<input type="checkbox" class="checkbox" id="c2" name="architecture" onClick="processCheckbox1(this);" />					<label class="label" for="c2"><p></p><span class="interest_span">ARCHITECTURE</span></label>
											<center><img src="images/ball_first.png" id="image1" class="interest_img"/></center>
										    </div>
                                    </div>
									<div class="one_area">
                                        <div class="show">
											<input type="checkbox" class="checkbox" id="c3" name="art" onClick="processCheckbox2(this);" />					<label class="label" for="c3"><p></p><span class="interest_span">ART</span></label>
											<center><img src="images/resturant_first.png" id="image2" class="interest_img"/></center>
										    </div>
                                    </div>
                                    <div class="second_area">
										 <div class="show2">
											<input type="checkbox" class="checkbox" id="c4" name="carsMotorcycles" onClick="processCheckbox3(this);" />					<label class="label" for="c4"><p></p><span class="interest_span">CARS  &<Br> MOTORCYCLES</span></label>
											<center><img src="images/school_second.png" id="image3" class="interest_img"/></center>
										    </div>
                                    </div>                                   
                                    <div class="one_area">
											<div class="show">
											<input type="checkbox" class="checkbox" id="c5" name="cebrities" onClick="processCheckbox4(this);" />					<label class="label" for="c5"><p></p><span class="interest_span">CEBRITIES</span></label>
											<center><img src="images/ball_first.png" id="image4" class="interest_img"/></center>
										    </div>
                                    </div>        
                                     <div class="second_area">        
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c6" name="designCrafts" onClick="processCheckbox5(this);" />					<label class="label" for="c6"><p></p><span class="interest_span">DESIGN CRAFTS</span></label>
											<center><img src="images/resturant_first.png" id="image5" class="interest_img"/></center>
										    </div>
                                     </div>       

									<div class="one_area">
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c7" name="education" onClick="processCheckbox6(this);" />					<label class="label" for="c7"><p></p><span class="interest_span">EDUCATION</span></label>
											<center><img src="images/school_second.png" id="image6" class="interest_img"/></center>
										    </div>
                                    </div>
                                    <div class="second_area"> 
                                    <div class="show2">
											<input type="checkbox" class="checkbox" id="c8" name="film" onClick="processCheckbox7(this);" />					<label class="label" for="c8"><p></p><span class="interest_span">FILM</span></label>
											<center><img src="images/ball_first.png" id="image7" class="interest_img"/></center>
										    </div>        
                                     </div>       
                                     <div class="one_area">        
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c9" name="music" onClick="processCheckbox8(this);" />					<label class="label" for="c9"><p></p><span class="interest_span">MUSIC</span></label>
											<center><img src="images/resturant_first.png" id="image8" class="interest_img"/></center>
										    </div>
                                     </div>       
                                     <div class="second_area">       
                                            
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c10" name="books" onClick="processCheckbox9(this);" />					<label class="label" for="c10"><p></p><span class="interest_span">BOOKS</span></label>
											<center><img src="images/school_second.png" id="image9" class="interest_img"/></center>
										    </div>
                                     </div>       
                                            
                                      <div class="one_area">       
											<div class="show">
											<input type="checkbox" class="checkbox" id="c11" name="fashion" onClick="processCheckbox10(this);" />					<label class="label" for="c11"><p></p><span class="interest_span">FASHION</span></label>
											<center><img src="images/school_second.png" id="image10" class="interest_img"/></center>
										    </div>
                                      </div>      
                                            
                                      <div class="second_area">      
                                            
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c12" name="foodDrink" onClick="processCheckbox11(this);" />					<label class="label" for="c12"><p></p><span class="interest_span">FOOD & DRINK</span></label>
											<center><img src="images/resturant_first.png" id="image11" class="interest_img"/></center>
										    </div>
									  </div>	
                                        <div class="one_area">     
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c13" name="garden" onClick="processCheckbox12(this);" />					<label class="label" for="c13"><p></p><span class="interest_span" >GARDEN</span></label>
											<center><img src="images/school_second.png" id="image12" class="interest_img"/></center>
										    </div>
                                        </div>    

									  <div class="second_area"> 	                                            
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c14" name="geek" onClick="processCheckbox13(this);" />					<label class="label" for="c14"><p></p><span class="interest_span">GEEK</span></label>
											<center><img src="images/ball_first.png" id="image13" class="interest_img"/></center>
										    </div>
                                      </div>
                                      
                                       <div class="one_area">      
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c15" name="hairBeauty" onClick="processCheckbox14(this);" />					<label class="label" for="c15"><p></p><span class="interest_span">HAIR  &<Br> BEAUTY</span></label>
											<center><img src="images/resturant_first.png" id="image14" class="interest_img"/></center>
										    </div>
									 	</div>
	
									  <div class="second_area">	
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c16" name="healthFitness" onClick="processCheckbox15(this);" />					<label class="label" for="c16"><p></p><span class="interest_span">HEALTH  & <Br>	FITNESS</span></label>
											<center><img src="images/school_second.png" id="image15" class="interest_img"/></center>
										    </div>
                                      </div>      
									 <div class="one_area">		
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c17" name="history" onClick="processCheckbox16(this);" />					<label class="label" for="c17"><p></p><span class="interest_span">HISTORY</span></label>
											<center><img src="images/ball_first.png" id="image16" class="interest_img"/></center>
										    </div>
                                      </div>      
                                     <div  class="second_area">       
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c18" name="holidayEvents" onClick="processCheckbox17(this);" />					<label class="label" for="c18"><p></p><span class="interest_span">HOLIDAY & <BR>EVENTS</span></label>
											
											<center><img src="images/resturant_first.png" id="image17" class="interest_img"/></center>
										    </div>
                                     </div>       
									  <div class="one_area">	
                                            <div class="show">
											<input type="checkbox" class="checkbox" id="c19" name="humor" onClick="processCheckbox18(this);" />					<label class="label" for="c19"><p></p><span class="interest_span">HUMOR</span></label>
											
											<center><img src="images/school_second.png" id="image18" class="interest_img"/></center>
										    </div>
                                      </div>      
                                            
                                     <div class="second_area">       
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c20" name="homeDecor" onClick="processCheckbox19(this);" />					<label class="label" for="c20"><p></p><span class="interest_span">HOME DECOR</span></label>
											
											<center><img src="images/ball_first.png" id="image19" class="interest_img"/></center>
										    </div>
                                     </div>       
									  <div class="one_area">	
                                            <div class="show2">
											<input type="checkbox" class="checkbox" id="c22" name="outdoors" onClick="processCheckbox21(this);" />					<label class="label" for="c22"><p></p><span class="interest_span">OUTDOORS</span></label>
											
											<center><img src="images/school_second.png" id="image21" class="interest_img"/></center>
										    </div>
                                      </div>
                                      <div class="second_area">  
											<div class="show">
											<input type="checkbox" class="checkbox" id="c23" name="quotes" onClick="processCheckbox22(this);" />					<label class="label" for="c23"><p></p><span class="interest_span">QUOTES</span></label>
											
											<center><img src="images/school_second.png" id="image22" class="interest_img"/></center>
										    </div>
									  </div>
									  <div class="second_area">  
											<div class="show2">
											<input type="checkbox" class="checkbox" id="c24" name="photoGraphy" onClick="processCheckbox23(this);" />					<label class="label" for="c24"><p></p><span class="interest_span">PHOTOGRAPHY</span></label>
											
											<center><img src="images/resturant_first.png" id="image23" class="interest_img"/></center>
										    </div>
									  </div>
									  <div class="one_area">  
											<div class="show">
											<input type="checkbox" class="checkbox" id="c25" name="recipe" onClick="processCheckbox24(this);" />					<label class="label" for="c25"><p></p><span class="interest_span" >RECIPE</span></label>
											
											<center><img src="images/school_second.png" id="image24" class="interest_img"/></center>
										    </div>
									  </div>
									   <div class="second_area">  
											<div class="show2">
											<input type="checkbox" class="checkbox" id="c26" name="science" onClick="processCheckbox25(this);" />					<label class="label" for="c26"><p></p><span class="interest_span">SCIENCE</span></label>
											
											<center><img src="images/ball_first.png" id="image25" class="interest_img"/></center>
										    </div>
									   </div>
									   <div class="one_area">  
											<div class="show">
											<input type="checkbox" class="checkbox" id="c27" name="sports" onClick="processCheckbox26(this);" />					<label class="label" for="c27"><p></p><span class="interest_span">SPORTS</span></label>
											
											<center><img src="images/resturant_first.png" id="image26" class="interest_img"/></center>
										    </div>
										</div>
										<div class="second_area">  
											<div class="show2">
											<input type="checkbox" class="checkbox" id="c28" name="technology" onClick="processCheckbox27(this);" />					<label class="label" for="c28"><p></p><span class="interest_span">TECHNOLOGY</span></label>
											
											<center><img src="images/school_second.png" id="image27" class="interest_img"/></center>
										    </div>
										</div>
										
										<div class="one_area">  
											<div class="show">
											<input type="checkbox" class="checkbox" id="c30" name="travel" onClick="processCheckbox29(this);" />					<label class="label" for="c30"><p></p><span class="interest_span">TRAVEL</span></label>
											
											<center><img src="images/resturant_first.png" id="image29" class="interest_img"/></center>
										    </div>
										</div>
										<div class="second_area">  
											<div class="show2">
											<input type="checkbox" class="checkbox" id="c29" name="workPlace" onClick="processCheckbox28(this);" />					<label class="label" for="c29"><p></p><span class="interest_span">WORK PLACE</span></label>
											
											<center><img src="images/ball_first.png" id="image28" class="interest_img"/></center>
										    </div>
										</div>              

                                     
                                     </form><!--plug_edit_form_Closed-->
								</td>
                             </tr>   
						    </table><!--profile_form_table_closed-->	
					</td>
				</tr>
                </table><!--middle_table_closed-->
               
				<table><!--button_table_open-->
				<tr>
							<td width="10%" class="padding_button"><input type="submit" name="save" class="save_button" value="" title="Save"/></td>
							<td width="20%" class="padding_button"><input type="submit" name="back" class="back_button" value="" title="Back"/></td>
				</tr>
				</table><!--button_table_closed-->
				</td><!--td_right_Closed-->
			</tr><!--main_tr_closedn-->
		    </table><!--main-table_closed--> 
	     </div><!--content_main_Closed-->
	</div><!--profile_Container_div_Closed-->
</body>
</html>

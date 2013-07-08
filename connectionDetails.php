<?php include('include/head_section.php'); ?>
<body>
	<div id="profile_Container"><!--profile_Container_div_Open-->
	     <div id="profile_content_main" ><!--content_main_Open-->
	    	<table cellspacing="0"><!--main_table_open-->
				<tr><!--main_table_tr_open-->
					<td id="td_left"><!--td_left_open-->
							 <?php include('include/left_sidebar.php'); ?>
					</td><!--td_left_Closed-->
					<td id="td_right"><!--td_right_Open-->
						<table cellspacing="0"><!--top1_table_open-->
							<?php include('include/header_top.php'); ?>
						</table><!--top1_table_closed-->
					
						<table cellspacing="0"><!--top2_table_open-->
							<?php include('include/profile_show.php'); ?>
						</table><br /><!--top2_table_closed-->
						
					    <table class="middle_table" style="width:97%; margin-left:15px;"><!--middle_table_open-->
							<?php include('include/connection_data.php'); ?>
				  		</table><!--middle_table_closed-->
				    </td><!--td_right_closed-->
			  	</tr><!--main_table_tr_closed-->
		    </table><!--main-table_closed--> 
		 </div><!--content_main_Closed-->
	</div><!--profile_Container_div_Closed-->
<script type="text/javascript">
		$(function () {
			$("#other_collection_id").selectbox2();
		});
</script>		
<script type="text/javascript"> 
	jQuery(document).ready(function (e) {
	console.log('class changed');
	jQuery('.slider_item').click(function(e){
	e.preventDefault();
	jQuery('.matter').attr('class','matter inactive');
	jQuery('.slider_item').attr('class','slider_item inact');
	//console.log('class changed');
	x =jQuery(this).attr('href');
	jQuery(this).attr('class','slider_item act');
	jQuery(x).attr('class','matter active');
	//console.log('class changed 2');
	});
	});
</script> 
<script type="text/javascript"> 
	jQuery(document).ready(function (e) {
	console.log('class changed');
	jQuery('.slider_item_category').click(function(e){
	e.preventDefault();
	jQuery('.matter_category').attr('class','matter_category inactive_category');
	jQuery('.slider_item_category').attr('class','slider_item_category inact_category');
	//console.log('class changed');
	x =jQuery(this).attr('href');
	jQuery(this).attr('class','slider_item_category act_category');
	jQuery(x).attr('class','matter_category active_category');
	//console.log('class changed 2');
	});
	});
</script>
<script type="text/javascript"> 
	jQuery(document).ready(function (e) {
	console.log('class changed');
	jQuery('.collection2_slider_item_category').click(function(e){
	e.preventDefault();
	jQuery('.collection2_matter_category').attr('class','collection2_matter_category collection2_inactive_category');
	jQuery('.collection2_slider_item_category').attr('class','collection2_slider_item_category collection2_inact_category');
	//console.log('class changed');
	x =jQuery(this).attr('href');
	jQuery(this).attr('class','collection2_slider_item_category collection2_act_category');
	jQuery(x).attr('class','collection2_matter_category collection2_active_category');
	//console.log('class changed 2');
	});
	});
</script>
<script type="text/javascript"> 
	jQuery(document).ready(function (e) {
	console.log('class changed');
	jQuery('.collection3_slider_item_category').click(function(e){
	e.preventDefault();
	jQuery('.collection3_matter_category').attr('class','collection3_matter_category collection3_inactive_category');
	jQuery('.collection3_slider_item_category').attr('class','collection3_slider_item_category collection3_inact_category');
	//console.log('class changed');
	x =jQuery(this).attr('href');
	jQuery(this).attr('class','collection3_slider_item_category collection3_act_category');
	jQuery(x).attr('class','collection3_matter_category collection3_active_category');
	//console.log('class changed 2');
	});
	});
</script> 
<script type="text/javascript"> 
	jQuery(document).ready(function (e) {
	console.log('class changed');
	jQuery('.collection4_slider_item_category').click(function(e){
	e.preventDefault();
	jQuery('.collection4_matter_category').attr('class','collection4_matter_category collection4_inactive_category');
	jQuery('.collection4_slider_item_category').attr('class','collection4_slider_item_category collection4_inact_category');
	//console.log('class changed');
	x =jQuery(this).attr('href');
	jQuery(this).attr('class','collection4_slider_item_category collection4_act_category');
	jQuery(x).attr('class','collection4_matter_category collection4_active_category');
	//console.log('class changed 2');
	});
	});
</script>      
</body>
</html>

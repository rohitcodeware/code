<?php include('include/head_section_other.php'); ?>
<body>
	<div id="profile_Container"><!--profile_Container_div_Open-->
	     <div id="profile_content_main" ><!--content_main_Open-->
	    	<table cellspacing="0"><!--main_table_open-->
				<tr><!--main_table_tr_open-->
					<td id="td_left"><!--td_left_open-->
							<?php include('include/profileLeftBar.php'); ?>
					</td><!--td_left_Closed-->
                		
					<td id="td_right"><!--td_right_Open-->
						<table cellspacing="0"><!--top1_table_open-->
							<?php include('include/header_connection.php'); ?>
                        <tr>
					<td colspan="2">
                   	 <div id="collection_menu"></div>
            		</td>
						</table><!--top1_table_closed-->
                        <table class="middle_table" style="width:97%; margin-left:15px;visibility: visible;"><!--middle_table_open-->
						<?php include('include/more_plug_data.php'); ?>
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
        <script type="application/javascript">
			   $(function(){
			   var $container11 = $('#container11');
			   $container11.imagesLoaded( function(){
			   $container11.masonry({
			   itemSelector : '.connection_profile_main_div'
			  });
			});
		 });
		</script>
<script type="text/javascript">

$(document).ready(function($){
	$('#accordion-2').dcAccordion({
		eventType: 'click',
		autoClose: false,
		saveState: true,
		disableLink: true,
		speed: 'slow',
		showCount: true,
		autoExpand: true
	});				
});
function menu_one(caller){
	if($(caller).children('span').attr('class') == 'closed_arrow'){
		$(caller).css('color', '#fff' ).children('span').addClass('open_arrow').removeClass('closed_arrow');
	} else {
		$(caller).css('color', '#515151' ).children('span').addClass('closed_arrow').removeClass('open_arrow');
	}	
    x = $(caller).next('div[class^="main_menu_elements"]');
	$(x).slideToggle(500, function(){});	
}
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

</body>
</html>

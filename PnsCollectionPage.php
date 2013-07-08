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
                         <div id="collection_menu">
                            <div class="create_collection"></div>
                                <h3 style="position:relative; top:-38px;  margin-left:50px;">MY COLLECTIONS	</h3>
                         </div>
                        </td>
						</table><!--top1_table_closed-->
                        <table class="middle_table" style="width:96.8%;margin-left:50px; margin-left:20px; background-color:#fff;"><!--middle_table_open-->
                       		<?php include('include/yourCollection_data.php'); ?>
                       </table><!--middle_table_closed-->
				    </td><!--td_right_closed-->
			  	</tr><!--main_table_tr_closed-->
		    </table><!--main-table_closed--> 
		 </div><!--content_main_Closed-->
	</div><!--profile_Container_div_Closed-->
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
 <!--Include jQuery and jQuery roundrr dependancies-->

    <script type='text/javascript' src='js/jQuery.roundrr.js'></script>
    <script type='text/javascript' src='js/app.js'></script>
</body>
</html>

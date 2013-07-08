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
					<td colspan="2">
                   	 <div id="collection_menu">
                    	<div class="create_group"></div>
                            <h3 style="position:relative; top:-38px;  margin-left:50px; font-size:23px; color:#2C2C2C;">MY GROUP	</h3>
                     </div>
					</td>
						</table><!--top1_table_closed-->
                        <span style=" position:relative; top:-35px;left:42px;"><input type="checkbox" name="" value="" id="selectall" onClick="selectAll(this)" style="display:inline !important;" />&nbsp;<span style="font-size:16px;"><label for="selectall">Select All Groups</label></span></span><span><a href="#"><img src="images/start_discussion.png" id="tip" style=" position:relative; top:-20px;left:200px;" />
                        </a></span>
                       
						<div id="tooltip">Select a group or groups to start a discussion</div>

                        <table class="middle_table" style="width:96.8%; margin-left:20px; background-color:#fff;"><!--middle_table_open-->
                       		<?php include('include/groupCollection_data.php'); ?>
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
 <script type="application/javascript">
			   $(function(){
			   var $container12 = $('#container12');
			   $container12.imagesLoaded( function(){
			   $container12.masonry({
			   itemSelector : '.wrapper_group'
			  });
			});
		 });
		</script>
<script language="JavaScript">
	function selectAll(source) {
		checkboxes = document.getElementsByName('group[]');
		for(var i in checkboxes)
			checkboxes[i].checked = source.checked;
	}
</script> 
<script>
var timeout;

function hide() {
    timeout = setTimeout(function () {
        $("#tooltip").hide('fast');
    }, 500);
};

$("#tip").mouseover(function () {
    clearTimeout(timeout);
    $("#tooltip").stop().show('fast');
}).mouseout(hide);

$("#tooltip").mouseover(function () {
    clearTimeout(timeout);
}).mouseout(hide);
</script>    
<style>
#tooltip { 
    display: none; 
    background-color:#fff;
    width: 200px;
	border-radius:10px;
	padding:10px;
	position:absolute;
	left:570px;
	top:145px;
	margin:auto;
	border:2px solid #FF5500;
}
</style>

   
</body>
</html>

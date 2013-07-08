<script type="application/javascript">

google.setOnLoadCallback(function()
{
	// Safely inject CSS3 and give the search results a shadow
	var cssObj = { }; // Firefox 3.5+
	jQuery("#suggestions").css(cssObj);
	
	// Fade out the suggestions box when not active
	 jQuery("input").blur(function(){
	 	jQuery('#suggestions').fadeOut();
	 });
});

function lookup(inputString) {
	if(inputString.length == 0) {
		jQuery('#suggestions').fadeOut(); // Hide the suggestions box
	} else {
		jQuery.post("include/search.php", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call
			jQuery('#suggestions').fadeIn(); // Show the suggestions box
			jQuery('#suggestions').html(data); // Fill the suggestions box
		});
	}
}
</script>
<span>

												<form action="" method="" class="searchform" ><!--Search_form_open-->

															<input type="text" class="search_text"  id="" value="Search" id="inputString" onkeyup="lookup(this.value);" onclick="if(this.value=='Search'){this.value=''}" onblur="if(this.value==''){this.value='Search'}" />
																	
															<input type="image" class="searchbox_submit" value="Submit" name="submit" src="images/search.png" />
															<div id="suggestions"></div>
												</form><!--Search_form_closed-->

										</span>
/* http://jamesvec.com
   simple thumbs v1
   Written by james vecchio (jamesvec[at]gmail.com) June 2010.
   Feel free to use this on any project. 
   I would love to see what people do with it, so drop me a line
   if you use it.
   */
/*$(document).ready (function(){		
	$("#large_images li").each(
		function(index, element){$(element).attr("class", 'hide');}
	);
    $("#large_images li").each(
		function(index, element){$(element).attr("id", 'img'+index);}
	);
    $("#thumb_holder li a").each(function(index, element){$(element).attr("rel", 'img'+index);});
	
	var mainImg ='img0';
	var current = 'img0';
	
	$('#img0').css('display', 'inline');
	$('#img0').addClass('current');
	
	$('#thumb_holder li a').click (function(){								   
		mainImg = $(this).attr('rel');
		if(mainImg != current){
		$('.current').fadeOut('slow');
		$('#'+mainImg).fadeIn('slow', function(){
		$(this).addClass('current');
		current = mainImg;
		
		});
		}
	});
});*/

$(document).ready (function(){
	//$('input[name^="news"]').val('news here!');
	$('div[id^="wrapper_collection"]').each( function(index, element){
		$(this).clearQueue();
		ids = $(this).attr('id');
		
		$("#"+ids+" .large_images li").each(
			function(index, element){$(element).attr("class", 'hide');}
		);
		$("#"+ids+" .large_images li").each(
			function(index, element){$(element).attr("id", ids+'_img'+index);}
		);
		$("#"+ids+" .thumb_holder li a").each(function(index, element){$(element).attr("rel", ids+'_img'+index);});
		
		var mainImg =ids+'_img0';
		var current = ids+'_img0';
		
		$("#"+ids+"_img0").css('display', 'inline');
		$("#"+ids+"_img0").addClass('current');
		
		$("#"+ids+" .thumb_holder li a").click (function(){								
			mainImg = $(this).attr('rel');
			if(mainImg != current){
				$('#'+current).fadeOut('slow', function(){		
					$(this).removeClass('current');
				});
				$('#'+mainImg).fadeIn('slow', function(){
				$(this).addClass('current');
				current = mainImg;
			
			});
			}
		});
	});
});


////////////////////////////////////


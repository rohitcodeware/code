x = $(window).height();
x = x - (70+100);
if(x < 170){
	x = 170;
} else {
	x;
}
if($.browser.webkit){ 
$('#container').css('min-height',x);
} else if($.browser.mozilla){
	x -= 2;
$('#container').css('min-height',x);
}
///////////Browse Button Script Open///////////////
		$('.file-wrapper input[type=file]').bind('change focus click', VIGET.fileInputs);
		$('input[type=file]').prettyFileInput();
		//this is the css class that wraps the file input, button and file name text.
		inputHolderClass: 'file-input',
		//the class of the button that the user interacts with.
		buttonClass: 'btn',
		//any additional classes that are also on the button, this is here for the scenario where you only want to slightly modify a site wide button style.
		additionalButtonClasses: 'btn-file-input',
		//this class is appended to the button when a file has been successfully selected via the file browser.
		buttonActiveClass: 'btn-file-input-active',
		//the class to be given to a span that appears when a file has been successfully selected via the file browser.
		fakeFileHolderClass: 'file-holder',
		//the text for the button.
		defaultText: 'Choose file',
		//the text for the button while a file has been selected.
		defaultFileSelectedText: 'File selected'
		
		$('.file-wrapper1 input[type=file]').bind('change focus click', VIGET.fileInputs);
		$('input[type=file]').prettyFileInput();
		//this is the css class that wraps the file input, button and file name text.
		inputHolderClass: 'file-input1',
		//the class of the button that the user interacts with.
		buttonClass: 'btn1',
		//any additional classes that are also on the button, this is here for the scenario where you only want to slightly modify a site wide button style.
		additionalButtonClasses: 'btn-file-input1',
		//this class is appended to the button when a file has been successfully selected via the file browser.
		buttonActiveClass: 'btn-file-input-active1',
		//the class to be given to a span that appears when a file has been successfully selected via the file browser.
		fakeFileHolderClass: 'file-holder1',
		//the text for the button.
		defaultText: 'Choose file',
		//the text for the button while a file has been selected.
		defaultFileSelectedText: 'File selected'
		
		$('.file-wrapper2 input[type=file]').bind('change focus click', VIGET.fileInputs);
		$('input[type=file]').prettyFileInput();
		//this is the css class that wraps the file input, button and file name text.
		inputHolderClass: 'file-input2',
		//the class of the button that the user interacts with.
		buttonClass: 'btn2',
		//any additional classes that are also on the button, this is here for the scenario where you only want to slightly modify a site wide button style.
		additionalButtonClasses: 'btn-file-input2',
		//this class is appended to the button when a file has been successfully selected via the file browser.
		buttonActiveClass: 'btn-file-input-active2',
		//the class to be given to a span that appears when a file has been successfully selected via the file browser.
		fakeFileHolderClass: 'file-holder2',
		//the text for the button.
		defaultText: 'Choose file',
		//the text for the button while a file has been selected.
		defaultFileSelectedText: 'File selected'
		
///////////Browse Button Script Closed///////////////




	



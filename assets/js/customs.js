$(document).ready(function(){

	var stopAutohide;

	function showWindow(){
		$('#main').show();
		// stop scroll
		$('html body').css('overflow','hidden');
		// auto hide fter 5s
		stopAutohide = setTimeout(hideWindow,5000);

	}
	//showWindow()

	function hideWindow(){
		$('#main').hide();
		// on scroll
		$('html body').css('overflow','scroll');
	}
	//hideWindow()

	// now call function automatically after some time 


	// auto open after 2s
	setTimeout(showWindow,2000);

	// close after click 

	$("#close-btn").click(function(){

		hideWindow();
		celarTimeout(stopAutohide);

	})


})
jQuery(document).ready(function ($) {
	$(window).load(function() {
	  // Animate loader off screen
	  $(".se-pre-con").fadeOut("slow");
	});
	$('#mc-form').ajaxChimp();
});
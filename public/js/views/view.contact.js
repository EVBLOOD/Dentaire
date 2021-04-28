/*
Name: 			View - Contact
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	8.3.0
*/

(function ($) {

	/*
	Contact Form: Basic
	*/
	var test = 0;
	$("#form-submit").click(function d() {
		if (test == 0) {
			window.location.href = "contact#te";
		}
		// document.getElementsByName("email").values()[0]="";
		// document.getElementsByName("subject").values()[0]="";
		// document.getElementsByName("message").values()[0]="";
		if (test == 2) {
			$("input:text").val("");
			$("#ema").val("");
			$("#mes").val("");
			test=0;
		}
		test++;
		setTimeout(d, 5000);
	});
	$(".contact-form").validate(function () {
	});

}).apply(this, [jQuery]);
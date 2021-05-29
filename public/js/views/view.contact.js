
(function ($) {

	/*
	Contact Form: Basic
	*/
	var test = 0;
	$("#form-submit").click(function d() {
		if (test == 0) {
			window.location.href = "contact#block_contact";
		}

		if (test == 2) {
			$("input:text").val("");
			$("#ema").val("");
			$("#mes").val("");
		}
		test++;
		setTimeout(d, 2500);
	});

	$("#form-rdv").click(function de() {
		if (test == 0) {
			window.location.href = "rendez-vous#block_rdv";
		}

		if (test == 2) {
			$("input:text").val("");
			$("#firstDate").val(this.defaultValue);
			$("#email").val("");
			$("#phone").val("");
			$("#reason").val("");
		}
		test++;
		setTimeout(de, 2500);
	});

	$(".contact-form").validate(function () {
	});

}).apply(this, [jQuery]);
/*! jQuery script to hide certain form fields */




	//Hide the field initially
	$("#hide1").hide();

	//Show the text field only when the third option is chosen - this doesn't
	$('#awesome').change(function() {
		if ($("#awesome").val() == "Nope") {
			$("#hide1").show();
		}
		else {
			$("#hide1").hide();
		}
	});

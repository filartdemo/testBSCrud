// Example starter JavaScript for disabling form submissions if there are invalid fields

//
$(document).ready(function () {
	//
	console.log("hello!");
	
    // from checkout bootstrap, used for form required fields
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	$(".needs-validation").each(function () {
		// Loop over them and prevent submission
		$(this).on("submit", function (event) {
			if (!$(this).get(0).checkValidity()) {
				event.preventDefault();
				event.stopPropagation();
			}

			$(this).addClass("was-validated");
		});
	});

	// always use #.## decimal format for the price button
	$("#bookPrice").on("input", function (event) {
		// Ensure the value is a number, and update it to a decimal number with 2 decimal places
		$(this).val(parseFloat($(this).val()).toFixed(2));

		if ($(this).val() < 0) {
			alert("Please enter a quantity greater than zero!");
			$(this).val(0.00);
		}
	});

	// always use # decimal format for the price button
	$("#bookStockQuantity").on("input", function (event) {
		// Ensure the value is a number, and update it to a whole number
		$(this).val(parseFloat($(this).val()).toFixed(0));

		if ($(this).val() < 0) {
			alert("Please enter a quantity greater than zero!");
			$(this).val(0);
		}
	});
    

});

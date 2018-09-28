$(document).ready(function(){

	$(".select").change(function(event) {
		var gg = $(this).val();
		console.log(gg);
	});

	$(".ee").click(function(event) {
		$(".select").val(2);
	});

	var option_length = $(".e-select select option").length;
	console.log(option_length);

});
$(document).ready(function() {

	$("#form2").submit(function() {
		$.ajax({
			type: "POST",
			url: "feedback.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form2").trigger("reset");
		});
		return false;
	});
	
});
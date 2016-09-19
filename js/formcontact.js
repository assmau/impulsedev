$(document).ready(function() {

	$("#form3").submit(function() {
		$.ajax({
			type: "POST",
			url: "formcontact.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$(".form3").trigger("reset");
		});
		return false;
	});
	
});
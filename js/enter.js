$(document).ready(function() {

$("#response").hide();

$("#recipeform").on("submit", function(e) {
    e.preventDefault();

	$.ajax({
		url:  "enter.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
            $("#cleanrecipes").hide();
            $("#response").show();
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }
    });

});

});

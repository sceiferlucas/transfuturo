$(function(){
	$(".ajax9").on("click", function(){
		$.ajax({
			url:"load9.php",
			success: function(result){
				$(".result9").html(result);
			},
			error: function(){
				$(".result9").html("Error");
			}
		});
	})
});
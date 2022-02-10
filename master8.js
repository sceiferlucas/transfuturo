$(function(){
	$(".ajax8").on("click", function(){
		$.ajax({
			url:"load8.php",
			success: function(result){
				$(".result8").html(result);
			},
			error: function(){
				$(".result8").html("Error");
			}
		});
	})
});
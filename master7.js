$(function(){
	$(".ajax7").on("click", function(){
		$.ajax({
			url:"load7.php",
			success: function(result){
				$(".result7").html(result);
			},
			error: function(){
				$(".result7").html("Error");
			}
		});
	})
});
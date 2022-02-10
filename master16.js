$(function(){
	$(".ajax16").on("click", function(){
		$.ajax({
			url:"load16.php",
			success: function(result){
				$(".result16").html(result);
			},
			error: function(){
				$(".result16").html("Error");
			}
		});
	})
});
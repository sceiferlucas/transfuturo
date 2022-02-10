$(function(){
	$(".ajax5").on("click", function(){
		$.ajax({
			url:"load5.php",
			success: function(result){
				$(".result5").html(result);
			},
			error: function(){
				$(".result5").html("Error");
			}
		});
	})
});
$(function(){
	$(".ajax4").on("click", function(){
		$.ajax({
			url:"load4.php",
			success: function(result){
				$(".result4").html(result);
			},
			error: function(){
				$(".result4").html("Error");
			}
		});
	})
});
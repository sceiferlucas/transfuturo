$(function(){
	$(".ajax3").on("click", function(){
		$.ajax({
			url:"load3.php",
			success: function(result){
				$(".result3").html(result);
			},
			error: function(){
				$(".result3").html("Error");
			}
		});
	})
});
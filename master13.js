$(function(){
	$(".ajax13").on("click", function(){
		$.ajax({
			url:"load13.php",
			success: function(result){
				$(".result13").html(result);
			},
			error: function(){
				$(".result13").html("Error");
			}
		});
	})
});
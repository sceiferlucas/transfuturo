$(function(){
	$(".ajax19").on("click", function(){
		$.ajax({
			url:"load19.php",
			success: function(result){
				$(".result19").html(result);
			},
			error: function(){
				$(".result19").html("Error");
			}
		});
	})
});
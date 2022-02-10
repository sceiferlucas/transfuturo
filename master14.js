$(function(){
	$(".ajax14").on("click", function(){
		$.ajax({
			url:"load14.php",
			success: function(result){
				$(".result14").html(result);
			},
			error: function(){
				$(".result14").html("Error");
			}
		});
	})
});
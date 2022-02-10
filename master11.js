$(function(){
	$(".ajax11").on("click", function(){
		$.ajax({
			url:"load11.php",
			success: function(result){
				$(".result11").html(result);
			},
			error: function(){
				$(".result11").html("Error");
			}
		});
	})
});
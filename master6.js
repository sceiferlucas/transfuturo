$(function(){
	$(".ajax6").on("click", function(){
		$.ajax({
			url:"load6.php",
			success: function(result){
				$(".result6").html(result);
			},
			error: function(){
				$(".result6").html("Error");
			}
		});
	})
});
$(function(){
	$(".ajax").on("click", function(){
		$.ajax({
			url:"load.php",
			success: function(result){
				$(".result").html(result);
			},
			error: function(){
				$(".result").html("Error");
			}
		});
	})
});
$(function(){
	$(".ajax15").on("click", function(){
		$.ajax({
			url:"load15.php",
			success: function(result){
				$(".result15").html(result);
			},
			error: function(){
				$(".result15").html("Error");
			}
		});
	})
});
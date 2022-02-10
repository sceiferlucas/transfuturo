$(function(){
	$(".ajax2").on("click", function(){
		$.ajax({
			url:"load2.php",
			success: function(result){
				$(".result2").html(result);
			},
			error: function(){
				$(".result2").html("Error");
			}
		});
	})
});
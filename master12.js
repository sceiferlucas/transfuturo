$(function(){
	$(".ajax12").on("click", function(){
		$.ajax({
			url:"load12.php",
			success: function(result){
				$(".result12").html(result);
			},
			error: function(){
				$(".result12").html("Error");
			}
		});
	})
});
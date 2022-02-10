$(function(){
	$(".ajax20").on("click", function(){
		$.ajax({
			url:"load20.php",
			success: function(result){
				$(".result20").html(result);
			},
			error: function(){
				$(".result20").html("Error");
			}
		});
	})
});
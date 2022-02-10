$(function(){
	$(".ajax21").on("click", function(){
		$.ajax({
			url:"load21.php",
			success: function(result){
				$(".result21").html(result);
			},
			error: function(){
				$(".result21").html("Error");
			}
		});
	})
});
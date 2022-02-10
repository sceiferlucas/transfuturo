$(function(){
	$(".ajax17").on("click", function(){
		$.ajax({
			url:"load17.php",
			success: function(result){
				$(".result17").html(result);
			},
			error: function(){
				$(".result17").html("Error");
			}
		});
	})
});
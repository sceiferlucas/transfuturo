$(function(){
	$(".ajax10").on("click", function(){
		$.ajax({
			url:"load10.php",
			success: function(result){
				$(".result10").html(result);
			},
			error: function(){
				$(".result10").html("Error");
			}
		});
	})
});
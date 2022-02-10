$(function(){
	$(".ajax18").on("click", function(){
		$.ajax({
			url:"load18.php",
			success: function(result){
				$(".result18").html(result);
			},
			error: function(){
				$(".result18").html("Error");
			}
		});
	})
});
$(function(){
	$(".ajax22").on("click", function(){
		$.ajax({
			url:"load22.php",
			success: function(result){
				$(".result22").html(result);
			},
			error: function(){
				$(".result22").html("Error");
			}
		});
	})
});
$(document).ready(function() {

	//header animation
	$("#header").delay(400).slideDown(1000, "easeOutCubic",function(){
		//bio appearing
		$("#bio").addClass("active").slideDown(800, "easeOutCubic");
	});
	

	//links binding
	$(".links").on("click", function(e) {
		e.preventDefault();
		var div_id = $(this).attr("href");
		if (!$(div_id).hasClass("active")) {
			$(".active").removeClass("active").hide("fold", 1000, function() {
				$(div_id).toggleClass("active").slideDown(800, "easeOutCubic");
			});
		}
	});
});

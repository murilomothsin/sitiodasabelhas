!function ($) {
	$(function(){
		$('#myCarousel').carousel()

		$('#lojaCarousel').carousel({
			interval: 10000
		})
	})
}(window.jQuery)

$( "#CloseModal" ).click(function() {
	$( '#contentView' ).empty();
});

$( "#ver_mais" ).click(function() {
		var dir = this.getAttribute("data-id");
		alert(dir);
		$.get("/fotoboth/welcomes/ajax/"+dir,
			null,
			function(data) {
				$("#contentView").html(data);
			}
		);
});


function getAjax(id){
	$.get("/fotoboth/welcomes/ajax/"+id,
			null,
			function(data) {
				$("#contentView").html(data);
			}
		);
}
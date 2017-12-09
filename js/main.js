$(document).ready(function(){
$(".feat").on("click", function() {
	$('html,body').animate({
        scrollTop: $(".feat1").offset().top},
        'slow');
});
});
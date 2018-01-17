$(function(){
	var link = window.location.pathname;
	// var pram = getURLParameter(link, 'page');
	if (link != '/ecommerce/') {
		$('.featured_tab').addClass('hide');
		// alert("success");
	}

$(".feat").on("click", function()
		{
			$('html,body').animate(
				{scrollTop: $(".feat1").offset().top},
		        'slow');
			});

$('.autosuggest').autocomplete({
               source: "http://ak-pc/ecommerce/ajax/autocomplete.php",
							 classes: {
								        "ui-autocomplete": "auto"
										    }
            });

});

$(function(){
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

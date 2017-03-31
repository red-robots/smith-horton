/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
		// Make active current page
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	
	// Flexslider
	// front page slider 
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	// Colorbox
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	//Isotope with images loaded ...
	var $container = $('#isotope-container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});
	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();


/*
		FAQ dropdowns
__________________________________________
*/
$('.question').click(function() {
 
    $(this).next('.answer').slideToggle(500);
    $(this).toggleClass('close');
 
});

$('.toggle').click(function() {
 
    $(this).next('ul.mobile-listings').slideToggle(500);
    $(this).toggleClass('close');
 
});
	// Equal heights divs
	$('.blocks').matchHeight();
	/*var byRow = $('body').hasClass('test-rows');
		$('.blocks-container').each(function() {
		 $(this).children('.blocks').matchHeight({
			   byRow: byRow
		//property: 'min-height'
		});
	});*/

});// END #####################################    END
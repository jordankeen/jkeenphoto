
$(function(){


	// Masonry Init

	$('.port-container').masonry({
	  // Masonry Options
	  itemSelector: '.grid-item',
	  percentPosition: true,

	});

	// Mobile Menu
	$('.mobile-menu-button').on('click', function () {

		$('.menu').slideToggle(250);

	});

});
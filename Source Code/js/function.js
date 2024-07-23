(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 
	
	
	/* Tour Slider */
	var swiper = new Swiper('.tour-slider', {
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: '.tour-pagination',
        clickable: true,
      }
    });

	
})(jQuery);
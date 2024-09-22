(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
	  $('.fixed').toggleClass('active');
	  if ($('.fixed').css('max-width') === '270px') {
	    $('.fixed').css('max-width', '0');
	    $('.fixed').css('min-width', '0');

	  } else {
	    $('.fixed').css('max-width', '270px');
	    $('.fixed').css('min-width', '270px');

	  }


	  });

})(jQuery);



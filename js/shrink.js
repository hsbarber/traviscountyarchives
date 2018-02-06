<!--jQuery to make navbar shrink on scroll -->
	
jQuery(window).scroll(function() {
		  if (jQuery(document).scrollTop() > 100) {
			jQuery('nav.navbar').addClass('shrink');
		  } else {
			jQuery('nav.navbar').removeClass('shrink');
		  }
		});

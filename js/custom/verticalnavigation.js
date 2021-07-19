// jQuery(document).ready(function($){
// 	var contentSections = $('.cd-section'),
// 		navigationItems = $('#fixednav a');

// 	updateNavigation();
// 	$(window).on('scroll', function(){
// 		updateNavigation();
// 	});

// 	//smooth scroll to the section
// 	navigationItems.on('click', function(event){
//         event.preventDefault();
//         smoothScroll($(this.hash));
//     });
//     //smooth scroll to second section
//     $('.cd-scroll-down').on('click', function(event){
//         event.preventDefault();
//         smoothScroll($(this.hash));
//     });

//     //open-close navigation on touch devices
//     $('.touch .cd-nav-trigger').on('click', function(){
//     	$('.touch #cd-vertical-nav').toggleClass('open');

//     });
//     //close navigation on touch devices when selectin an elemnt from the list
//     $('.touch #cd-vertical-nav a').on('click', function(){
//     	$('.touch #cd-vertical-nav').removeClass('open');
//     });



// 	function smoothScroll(target) {
//         $('body,html').animate(
//         	{'scrollTop':target.offset().top},
//         	600
//         );
// 	}
// });
jQuery(document).ready(function($){
// jQuery element variables
var $hamburgerMenuBtn,
    $slideNav,
    $closeBtn,
    $main;




$(window).scroll(function() {
    if ($(this).scrollTop()<1500)
     {
        $('#hamburger-menu').hide(1000);
     }
    else
     {
      $('#hamburger-menu').show(1000);
     }
 });


// focus management variables
var $focusableInNav,
    $firstFocusableElement,
    $lastFocusableElement;

$(document).ready(function() {
  $hamburgerMenuBtn = $("#hamburger-menu"),
    $slideNav = $("#slide-nav"),
    $closeBtn = $("#close"),
    $main = $("main"),
    $focusableInNav = $('#slide-nav button, #slide-nav [href], #slide-nav input, #slide-nav select, #slide-nav textarea, #slide-nav [tabindex]:not([tabindex="-1"])');
  if ($focusableInNav.length) {
    $firstFocusableElement = $focusableInNav.first();
    $lastFocusableElement = $focusableInNav.last();
  }
  addEventListeners();
});

function addEventListeners() {
  $hamburgerMenuBtn.click(openNav);
  $closeBtn.click(closeNav);
  $slideNav.on("keyup", closeNav);
  $firstFocusableElement.on("keydown", moveFocusToBottom);
  $lastFocusableElement.on("keydown", moveFocusToTop);
}

function openNav() {
  $slideNav.addClass("visible active");
  setTimeout(function() {
    $firstFocusableElement.focus()
  }, 1);
  $main.attr("aria-hidden", "true");
  $hamburgerMenuBtn.attr("aria-hidden", "true");
}

function closeNav(e) {
  if (e.type === "keyup" && e.key !== "Escape") {
    return;
  }

  $slideNav.removeClass("active");
  $main.removeAttr("aria-hidden");
  $hamburgerMenuBtn.removeAttr("aria-hidden");
  setTimeout(function() {
    $hamburgerMenuBtn.focus()
  }, 1);
  setTimeout(function() {
    $slideNav.removeClass("visible")
  }, 501);
}

function moveFocusToTop(e) {
  if (e.key === "Tab" && !e.shiftKey) {
    e.preventDefault();
    $firstFocusableElement.focus();
  }
}

function moveFocusToBottom(e) {
  if (e.key === "Tab" && e.shiftKey) {
    e.preventDefault();
    $lastFocusableElement.focus()
  }
}

});
var contentSections = $('.cd-section'),
navigationItems = $('#slideoutnav a');

function updateNavigation() {
	contentSections.each(function(){
		$this = $(this);
		var activeSection = $('#slideoutnav ul li a[href="#'+$this.attr('id')+'"]').data('number') - 1;
		if ( ( $this.offset().top - $(window).height()/2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
			navigationItems.eq(activeSection).addClass('is-selected');
		}else {
			navigationItems.eq(activeSection).removeClass('is-selected');
		}
	});
}
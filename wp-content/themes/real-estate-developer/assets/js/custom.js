  // Menus 
function real_estate_developer_menu_open_nav() {
  jQuery(".sidenav").addClass('show');
}
function real_estate_developer_menu_close_nav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function real_estate_developer_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const real_estate_developer_nav = document.querySelector( '.sidenav' );

      if ( ! real_estate_developer_nav || ! real_estate_developer_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...real_estate_developer_nav.querySelectorAll( 'input, a, button' )],
        real_estate_developer_lastEl = elements[ elements.length - 1 ],
        real_estate_developer_firstEl = elements[0],
        real_estate_developer_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && real_estate_developer_lastEl === real_estate_developer_activeEl ) {
        e.preventDefault();
        real_estate_developer_firstEl.focus();
      }

      if ( shiftKey && tabKey && real_estate_developer_firstEl === real_estate_developer_activeEl ) {
        e.preventDefault();
        real_estate_developer_lastEl.focus();
      }
    } );
  }
  real_estate_developer_keepFocusInMenu();
} )( window, document );

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  /*sticky sidebar*/
window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.sidebar-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('sidebar-fixed');
  } else {
    sticky.classList.remove('sidebar-fixed');
  }
});

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
  // Sticky Copyright
  $(window).scroll(function(){
    var sticky = $('.copyright-sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('copyright-fixed');
    else sticky.removeClass('copyright-fixed');
  });
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// Swiper Slider
jQuery(document).ready(function () {
  var swiper = new Swiper("#banner-sec .mySwiper", {
    direction: "vertical",
    effect: "cards",
    grabCursor: true,
    mousewheel: true,
    loop: true,
    cardsEffect: {
      rotate: false,      
      perSlideOffset: 12, 
      perSlideRotate: 0,  
      slideShadows: false 
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});

//Video Popup
(function($) {
  $(document).ready(function() {
    $('.openBtn').on('click', function() {
      const targetId = $(this).data('target');
      $('#' + targetId).css('display', 'flex');
    });

    $('.close-btn').on('click', function() {
      $(this).closest('.videoOverlay').hide();

      // Optional: Stop the video
      const iframe = $(this).closest('.popup').find('iframe');
      iframe.attr("src", iframe.attr("src"));
    });
  });
})(jQuery);

// Property Type Dropdown
jQuery(document).ready(function($) {
  // Hide all properties initially
  $('#property-list .property-item').hide();

  // Show first property type by default
  var firstTypeId = $('#property-type-dropdown option:first').val();
  $('#property-type-dropdown').val(firstTypeId);
  $('#property-list .property-type-' + firstTypeId).show();

  // On change, show matching properties
  $('#property-type-dropdown').on('change', function() {
    var selectedTypeId = $(this).val();

    $('#property-list .property-item').hide();
    $('#property-list .property-type-' + selectedTypeId).show();
  });
});
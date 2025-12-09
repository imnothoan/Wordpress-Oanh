jQuery(function($) {
    "use strict";

    // Scroll to top functionality
    $(window).on('scroll', function() {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });

    $('#return-to-top').on('click', function() {
        $('body,html').animate({ scrollTop: 0 }, 500);
    });

    // Side navigation toggle
    $('.gb_toggle').on('click', function() {
        travel_booking_offers_Keyboard_loop($('.side_gb_nav'));
    });

    // Preloader fade out
    setTimeout(function() {
        $(".loader").fadeOut("slow");
    }, 1000);

});

// Mobile responsive menu
function travel_booking_offers_menu_open_nav() {
    jQuery(".sidenav").addClass('open');
}

function travel_booking_offers_menu_close_nav() {
    jQuery(".sidenav").removeClass('open');
}

jQuery(document).ready(function($) {
  // Slider
  $(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      rtl: false,
      items: 1,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
    });
  });
});


// tabs
jQuery(document).ready(function($) {
    // Hide all tabs and show the first tab by default
    $('.tabcontent').hide().first().show();
    $('.tablinks').first().addClass('active');

    // Tab click event
    $('.tablinks').on('click', function(e) {
        e.preventDefault();

        // Remove active class and hide all tab contents
        $('.tablinks').removeClass('active');
        $('.tabcontent').hide();

        // Activate the clicked tab and show its content
        $(this).addClass('active');
        const tabId = $(this).data('tab');
        $('#' + tabId).show();
    });
});
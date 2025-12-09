jQuery(document).ready(function($) {
    var scroll = $(window).scrollTop();
    var scrollup = $('.scroll-top');
    /*------------------------------------------------
              Scroll Top
    ------------------------------------------------*/
    scrollup.click(function () {
      $('html, body').animate({
        scrollTop: '0px'
      }, 800);
      return false;
    });
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollup.fadeIn();
      } else {
        scrollup.fadeOut();
      }
    });

    /*------------------------------------------------
              Homepage slider
    ------------------------------------------------*/
    var interior_design_firm_Slider = new Swiper(".interior-design-firm-swiper", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".interior-design-firm-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".interior-design-firm-swiper-button-next",
      prevEl: ".interior-design-firm-swiper-button-prev",
    },
  });

    /*------------------------------------------------
              Homepage Testimonial
    ------------------------------------------------*/
    var interior_design_firm_testimonial_Slider = new Swiper(".interior-design-firm-testimonial-swiper", {
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".interior-design-firm-testimonial-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".interior-design-firm-testimonial-swiper-button-next",
      prevEl: ".interior-design-firm-testimonial-swiper-button-prev",
    },
  });

});

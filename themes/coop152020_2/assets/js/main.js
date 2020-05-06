/**
* Template Name: Rapid - v2.0.0
* Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function($) {
  "use strict";


  // Preloader (if the #preloader div exists)
  $(window).on('load', function()
  {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }

  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled ');

    } else {
      $('#header').removeClass('header-scrolled');

    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');

  }

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (!$('#header').hasClass('header-scrolled')) {
            top_space = top_space - 40;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop();

    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
    });
  });

  // jQuery counterUp (used in Whu Us section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
    });
  });

  // Initiate venobox (lightbox feature used in portofilo)
  $(document).ready(function() {
    $('.venobox').venobox();
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    dotsEach: true,
    loop: false,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });

 //owl slider home

  //Revolution Slider
  if($('.main-slider .tp-banner').length){

    var MainSlider = $('.main-slider');
    var strtHeight = MainSlider.attr('data-start-height');
    var slideOverlay =  "'"+ MainSlider.attr('data-slide-overlay') +"'";

    $('.main-slider .tp-banner').show().revolution({
      dottedOverlay: slideOverlay,
      delay:10000,
      startwidth:1200,
      startheight:strtHeight,
      hideThumbs:600,

      thumbWidth:80,
      thumbHeight:50,
      thumbAmount:5,

      navigationType:"bullet",
      navigationArrows:"0",
      navigationStyle:"preview3",

      touchenabled:"on",
      onHoverStop:"off",

      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,

      parallax:"mouse",
      parallaxBgFreeze:"on",
      parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

      keyboardNavigation:"off",

      navigationHAlign:"center",
      navigationVAlign:"bottom",
      navigationHOffset:0,
      navigationVOffset:40,

      soloArrowLeftHalign:"left",
      soloArrowLeftValign:"center",
      soloArrowLeftHOffset:20,
      soloArrowLeftVOffset:20,

      soloArrowRightHalign:"right",
      soloArrowRightValign:"center",
      soloArrowRightHOffset:20,
      soloArrowRightVOffset:20,

      shadow:0,
      fullWidth:"on",
      fullScreen:"off",

      spinner:"spinner4",

      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,

      shuffle:"off",

      autoHeight:"off",
      forceFullWidth:"on",

      hideThumbsOnMobile:"on",
      hideNavDelayOnMobile:1500,
      hideBulletsOnMobile:"on",
      hideArrowsOnMobile:"on",
      hideThumbsUnderResolution:0,

      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      startWithSlide:0,
      videoJsPath:"",
      fullScreenOffsetContainer: ""
    });

  }

  //Sponsors Carousel One
  if ($('.sponsors-carousel-one').length) {
    $('.sponsors-carousel-one').owlCarousel({
      loop:true,
      margin:30,
      nav:true,
      smartSpeed: 500,
      autoplay: 4000,
      navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        800:{
          items:3
        },
        1000:{
          items:3
        },
        1200:{
          items:3
        }
      }
    });
  }


  //Sponsors Carousel Two
  if ($('.sponsors-carousel-two').length) {
    $('.sponsors-carousel-two').owlCarousel({
      loop:true,
      margin:30,
      nav:true,
      smartSpeed: 500,
      autoplay: 4000,
      navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        800:{
          items:4
        },
        1024:{
          items:4
        },
        1200:{
          items:5
        }
      }
    });
  }


})(jQuery);
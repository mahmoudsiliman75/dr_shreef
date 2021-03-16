$(document).ready( function() {
  // START:: TOGGLE MENU
  $('#open_menu').on('click', () => {
    $('.small_menu').css('display', 'flex');
    setTimeout(() => {
      $('.small_menu').css('right', '0');
    }, 300);
    $('body').css('overflow', 'hidden');
  });

  $('#colse_menu').on('click', () => {
    $('.small_menu').css('right', '-100%');
    setTimeout(() => {
      $('.small_menu').css('display', 'none');
    }, 1000);
    $('body').css('overflow-y', 'auto');
  });
  // END:: TOGGLE MENU

  // START:: OWL CAROUSEL
  $('#testemonials_slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    center:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    rtl: true, 
  });

  $('#videos_slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });
  

  $('#related_books').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
          items:1,
          nav:true
      },
      400:{
        items:2,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
    }
  });
  // START:: OWL CAROUSEL

  // START:: TOGGLE FORMS
  $('#show_register').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'block');
  });

  $('#show_reset').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'none');
    $('#reset_form_wraper').css('display', 'block');
  });
  // END:: TOGGLE FORMS

  // START:: FLEX SLIDER
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
  // END:: FLEX SLIDER

});

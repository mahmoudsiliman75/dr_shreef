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
  $('#related_articles').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:20,
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
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });
  // START:: OWL CAROUSEL
});

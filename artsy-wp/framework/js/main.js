jQuery(document).ready(function($) {

  'use strict';

  /* ================================================
    Header
  ================================================= */

  /* Submenu toggle */
  $('.header .primary-menu li.menu-item-has-children').on('click', function(e) {
    $(this).toggleClass('sub-menu-open');
    $(this).find('> .sub-menu').slideToggle(150);
  });
  $('.header .primary-menu li.menu-item-has-children > a').on('click', function(e) {
    e.stopPropagation();
  });
  $('.header .primary-menu li.menu-item-has-children > .sub-menu *').on('click', function(e) {
    e.stopPropagation();
  });

  /* Search Dropdown Toggle */
  $('.header-icons .icon-search a').on('click', function(e) {
    e.preventDefault();
    var searchForm = $('.header-search');
    if ( $(searchForm).is(':visible') ) {
      $(searchForm).slideUp(150);
    } else {
      $(searchForm).slideDown(150);
    }
  });

  /* Clear Search Placeholder */
  $('input#s').data('holder', $('input#s').attr('placeholder'));
  $('input#s').focusin(function () {
    $(this).attr('placeholder', '');
  });
  $('input#s').focusout(function () {
    $(this).attr('placeholder', $(this).data('holder'));
  });

  /* ================================================
    Mobile Header
  ================================================= */

  /* Menu toggle */
  $('.toggle-button').on('click', function(e){
    $('.mobile-menu').slideToggle(150);
  });

  /* Submenu toggle */
  $('.mobile-menu .menu-item-has-children').on('click', function(e) {
    $(this).toggleClass('sub-menu-open');
    $(this).find('> .sub-menu').slideToggle(150);
  });
  $('.mobile-menu .menu-item-has-children > a').on('click', function(e) {
    e.stopPropagation();
  });
  $('.mobile-menu .menu-item-has-children > .sub-menu *').on('click', function(e) {
    e.stopPropagation();
  });

  /* Search toggle */
  $('.header-mobile').each(function(){
    var initialHeight = $('.header-mobile').outerHeight();

    $('.header-mobile-icons .icon-search').on('click', function (e) {
      e.preventDefault();
      if ($('.header-mobile').outerHeight() == initialHeight) {
        var autoHeight = $('.header-mobile').css('height', 'auto').outerHeight();
        $('.header-mobile').height(initialHeight).animate({height: autoHeight}, 150);
      } else {
        $('.header-mobile').animate({height: initialHeight}, 150);
      }
    });
  });


  /* ================================================
    Featured Slider
  ================================================= */

  $('.featured-slider-items').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    fade: true
  });

  /* ================================================
    Post Gallery Slider
  ================================================= */

  $('.artsy-post-gallery').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    fade: true
  });


  /* ================================================
    Portfolio Infinite Scroll / Masonry
  ================================================= */

  var $masonry_grid = $('.masonry-grid');
  $masonry_grid.imagesLoaded(function(){
    $masonry_grid.masonry({
      itemSelector: 'div[class^="col-"]'
    });
  });


  /* ================================================
    Portfolio Infinite Scroll / Masonry
  ================================================= */

  var $container = $('.portfolio-grid');
  $container.imagesLoaded(function(){
    $container.masonry({
      itemSelector: 'div[class^="col-"]'
    });
  });
  $container.infinitescroll({
    navSelector: '.pagination',
    nextSelector: '.pagination a:first',
    itemSelector : 'div[class^="col-"]',
    loadingImg: '',
    loadingText: '',
    loading: {
      finishedMsg: '',
      msgText: '',
      img: ''
    }
  },
    function( newElements ) {
      var $newElems = $( newElements ).css({ opacity: 0 });
      $newElems.imagesLoaded( function() {
        $newElems.animate({ opacity: 1 });
        $container.masonry( 'appended', $newElems );
      });
    }
  );

});

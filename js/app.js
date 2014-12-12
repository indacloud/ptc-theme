(function() {
  $(document).ready(function($) {
    var mySwiper, setContentHeight;
    if ($('body').hasClass('home')) {
      mySwiper = $('.swiper-container').swiper({
        autoplay: 5000,
        loop: true,
        calculateHeight: true
      });
      $('.swiper-ctrl').on('click', function(ev) {
        if ($(this).hasClass('left')) {
          return mySwiper.swipePrev();
        } else {
          return mySwiper.swipeNext();
        }
      });
    }
    $('form').find('input[type="text"], input[type="email"], input[type="tel"], textarea').each(function(index) {
      var $label;
      $label = $(this).closest('p').find('label');
      $(this).on('focusin', function(ev) {
        return $label.addClass('focus');
      });
      return $(this).on('focusout', function(ev) {
        return $label.removeClass('focus');
      });
    });
    setContentHeight = function() {
      var footerHeight, headerHeight, height, imageHeight, windowHeight;
      windowHeight = $(window).height();
      headerHeight = $('#main-head').height();
      imageHeight = $('#header-image').height();
      footerHeight = $('#main-foot').height();
      height = windowHeight - (headerHeight + footerHeight + imageHeight);
      return $('#main').css('min-height', height);
    };
    $(window).on('resize', function(ev) {
      return setContentHeight();
    });
    setContentHeight();
    return $('.freetile').freetile({
      animate: true,
      selector: '.freetile-image',
      elementDelay: 200,
      containerAnimate: true
    });
  });

}).call(this);

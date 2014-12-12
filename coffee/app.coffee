$(document).ready ($)->

  # only home page
  if( $('body').hasClass('home') )
    mySwiper = $('.swiper-container').swiper(
      autoplay: 5000
      loop: true
      calculateHeight: true
      )
    $('.swiper-ctrl').on 'click', (ev)->
      if $(this).hasClass 'left'
        mySwiper.swipePrev()
      else
        mySwiper.swipeNext()


  # focus class on forms labels
  $('form').find('input[type="text"], input[type="email"],
  input[type="tel"], textarea').each (index) ->
    $label = $(this).closest('p').find('label')

    $(this).on 'focusin', (ev)->
      $label.addClass 'focus'
    $(this).on 'focusout', (ev)->
      $label.removeClass 'focus'

  # content height
  setContentHeight = ->
    windowHeight = $(window).height()
    headerHeight = $('#main-head').height()
    imageHeight  = $('#header-image').height()
    footerHeight = $('#main-foot').height()

    height = windowHeight - (headerHeight + footerHeight + imageHeight)
    $('#main').css 'min-height', height

  $(window).on 'resize', (ev)->
    setContentHeight()

  setContentHeight()

  # freetile
  $('.freetile').freetile(
    animate: true
    selector: '.freetile-image'
    elementDelay: 200
    containerAnimate: true
    )

$(function () {
  //magnific-popup
  $('.popup-modal').magnificPopup({
    type: 'inline',
    // fixedContentPos: true,
    preloader: false,
    focus: '#link-popup',
  })

  $('.popup-about').magnificPopup({
    type: 'inline',
    // fixedContentPos: true,
  })

  $(document).on('click', '.popup-about-dismiss', function (e) {
    e.preventDefault()
    $.magnificPopup.close()
  })
  $(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault()
    $.magnificPopup.close()
  })

  var getIphoneWindowHeight = function() {
// Get zoom level of mobile Safari
// Such zoom detection might not work correctly on other platforms
    //
    var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
// window.innerHeight returns height of the visible area.
    // We multiply it by zoom and get our real height.
    return window.innerHeight * zoomLevel;};


//pagetoscroll
  $(window).on('load', function () {
    $('a,a[href=\'#top\'],a[rel=\'m_PageScroll2id\'],a.PageScroll2id').
      mPageScroll2id({
        highlightSelector: 'a',
      })
  })

  //  нопка вверх

  $(window).scroll(function() {
    if ($(window).scrollTop() > 500) {
      buttonUp.show(500);
    } else {
      buttonUp.hide(500);
    }
  });
  let buttonUp = $('#btnUp');
  buttonUp.on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $('body').offset().top
    }, 800);
  });



})
$(function () {
  //magnific-popup
  $('.popup-modal').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#link-popup',
  })

  $('.popup-about').magnificPopup({
    type: 'inline',
  })

  $(document).on('click', '.popup-about-dismiss', function (e) {
    e.preventDefault()
    $.magnificPopup.close()
  })
  $(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault()
    $.magnificPopup.close()
  })
//pagetoscroll
  $(window).on('load', function () {
    $('a,a[href=\'#top\'],a[rel=\'m_PageScroll2id\'],a.PageScroll2id').
      mPageScroll2id({
        highlightSelector: 'a',
      })
  })
})
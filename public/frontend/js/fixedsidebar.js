$(function () {
  let sidebar = $('.sideBar');
  let top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));
  $(window).scroll(function (event) {
    let y = $(this).scrollTop();
    if (y >= top) {
      sidebar.addClass('fixedSide');
    } else {
      sidebar.removeClass('fixedSide');
    }
  });
});
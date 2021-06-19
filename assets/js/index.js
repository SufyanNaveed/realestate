$('#myNavbar2').on('show.bs.collapse', function () {
  $(this).append($('#myNavbar').html());
  $('#myNavbar2 ul').last().addClass('navbar navbar-nav');
});
$('#myNavbar2').on('hidden.bs.collapse', function () {
  $('#myNavbar2 ul:last-child').remove();
});
$(window).on('resize', function () {
  if (window.innerWidth > 768) {$('#myNavbar2').collapse('hide');}
});

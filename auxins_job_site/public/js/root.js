$(document).ready(function() {
  $(".rootFooter").css({
    'height': ($(".rootHeader").height() + 'px')
  });
});
$(window).on('resize', function(){
  $(".rootFooter").css({
    'height': ($(".rootHeader").height() + 'px')
  });
});
$(document).ready(function() {
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px'),
  });
  $(".rootBody").css({
    'grid-template-rows': ('auto auto' + $(".rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($(".rootHeader").width()/446.4 + 'px')
  });
  $("table td, table th").css({
    'padding': ('0px ' + $(".rootHeader").width()/178.56 + 'px'),
  });
});
$(window).on('resize', function(){
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px'),
  });
  $(".rootBody").css({
    'grid-template-rows': ('auto auto' + $(".rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  $("table td, table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px'),
  });
});
$(document).ready(function() {
  $(".rootFooter").css({
    'height': ($(".rootHeader").height() + 'px')
  });
  $("table *, p").css({
    'font-size': ($(".rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($(".rootHeader").width()/446.4 + 'px')
  });
  $("table td, table th").css({
    'padding': ('0px ' + $(".rootHeader").width()/(89.28*2) + 'px'),
  });
  $(".tableDiv").css({
    'padding-top': ($(".rootHeader").width()/(178.56*0.5) + 'px')
  });
});
$(window).on('resize', function(){
  $(".rootFooter").css({
    'height': ($(".rootHeader").height() + 'px')
  });
  $("table *, p").css({
    'font-size': ($(".rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($(".rootHeader").width()/446.4 + 'px')
  });
  $("table td, table th").css({
    'padding': ('0px ' + $(".rootHeader").width()/(89.28*2) + 'px'),
  });
  $(".tableDiv").css({
    'padding-top': ($(".rootHeader").width()/(178.56*0.5) + 'px')
  });
});
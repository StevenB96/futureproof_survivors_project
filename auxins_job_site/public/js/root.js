$(document).ready(function() {
  // Root Stuff
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width() + 'px')
  });
  $(".primmaryNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10.5 + 'px')
  });
  $(".navA, .navStrong, .navButton, .indexText").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });
});
$(window).on('resize', function(){
  // Root Stuff
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width() + 'px')
  });
  $(".primmaryNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10.5 + 'px')
  });
  $(".navA, .navStrong, .navButton, .indexText").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });
});
